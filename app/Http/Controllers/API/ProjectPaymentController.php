<?php

namespace App\Http\Controllers\API;

use App\Notifications\NewPayment;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectPaymentResource;
use App\Models\ProjectPayment;
use App\Services\NotificationService;
use App\Services\WeatherService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectPaymentDetail;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use mysql_xdevapi\Exception;
use Spatie\Image\Image;

class ProjectPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project, Request $request)
    {

        $project_payments = $project->payment()->with(['payment_detail', 'status', 'babat'])->where(function ($q) use ($request) {
            if ($request->filter != 'true') {
                $q->where('status_id', '!=', '4');
            }
        })->orderBy('created_at', 'desc')->get();//()
//        return response(['project_payments' => $project_payments, 'message' => 'Retrieved successfully'], 200);

        return response(['project_payments' => ProjectPaymentResource::collection($project_payments), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getNextDocumentNo($projectid)
    {
        $nextDocNo = ProjectPayment::where('project_id', $projectid)->max('documentno');
        return ++$nextDocNo;
    }

    public function store(Project $project, Request $request, NotificationService $notificationService)
    {
        $data = $request->all();
        $details = json_decode($data['payment_detail']);
        $data['status_id'] = '1';
        $data['approved_price'] = '0';
        $data['user_id'] = $request->user()->id;
        $data['documentno'] = $this->getNextDocumentNo($project->id);
        $validator = Validator::make($data, [
            'project_id' => 'required|max:255',
            'description' => 'nullable|max:255',
            'documentno' => [
                'required',
                Rule::unique('project_payments')->where(function ($query) use ($data) {
                    return $query->where('documentno', $data['documentno'])
                        ->where('project_id', $data['project_id']);
                })],
            'status_id' => 'nullable|max:25',
            'babat_id' => 'nullable|max:255',
            'user_id' => 'required|max:255',
            'approved_description' => 'nullable|max:255',
            'accountant_description' => 'nullable|max:255',
            'to_havale' => 'nullable|max:255',
            'to_account' => 'nullable|max:255',
            'approved_price' => 'nullable|max:255'
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
//        return response(['error' => $validator->valid(), 'Validation Error']);
        $payment = $project->payment()->create($validator->valid());
//        if ($request->hasFile('bill_photo')) {
//            $path = $request->bill_photo->storeAs(
//                'bill_photos',
//                $payment->id . '.' . $request->bill_photo->extension(),
//                'public'
//            );
//            $payment->bill_photo = $path;
//        }
        $payment->save();

        foreach ($details as $key => $detail) {
            $this->addPeymentDetail($payment, $detail);
        }
        $this->sendNotif($request, $payment, $notificationService);
        $project_payments = $project->payment()->get();
        return response(['project_payments' => $project_payments, 'message' => 'Created successfully'], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProjectPayment $projectPayment
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectPayment $projectpayment)
    {
        return response(['project_payments' => $projectpayment->with(['payment_detail', 'status', 'babat'])->where('id', $projectpayment->id)->first(), 'message' => 'Created successfully'], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectPayment $projectPayment
     * @return \Illuminate\Http\Response
     */
    public function updatePayment(Request $request, NotificationService $notificationService)
    {
//        try {
        $data = $request->all();
        //return response(['error' => $data['status_id'], 'Validation Error']);
        $project_payment = ProjectPayment::find($data['id']);
        $previous_status_id = $project_payment->status_id;
        $new_status_id = $data['status_id'];
        $details = json_decode($data['payment_detail']);
        $data['status_id'] = $data['status_id'] == '' ? '1' : $data['status_id'];
        $data['approved_price'] = '0';
//        $data['user_id'] = $request->user()->id;
        $validator = Validator::make($data, [
            'project_id' => 'required|max:255',
            'status_id' => 'required|max:3',
            'description' => 'nullable|max:255',
            'babat_id' => 'nullable|max:255',
            'approved_description' => 'nullable|max:255',
            'accountant_description' => 'nullable|max:255',
            'to_havale' => 'nullable|max:255',
            'to_account' => 'nullable|max:255',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $project_payment->update($validator->valid());
        foreach ($details as $key => $detail) {
            $this->updatePeymentDetail($project_payment, $detail);
        }
//        return response(['project_payments' => $previous_status_id !== $new_status_id, 'message' => 'Updated successfully'], 201);

        if ($previous_status_id !== $new_status_id)
            $this->sendNotif($request, $project_payment, $notificationService);
        return response(['project_payments' => $project_payment, 'message' => 'Updated successfully'], 201);
//        } catch (\Exception $ex) {
//            return response(['project_payments' => $project_payment, 'message' => 'an error accord'.$ex], 500);
//        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ProjectPayment $projectPayment
     * @return \Illuminate\Http\Response
     */

    public function updatePeymentDetail(ProjectPayment $payment, $detail)
    {
        $detailData = (array)$detail;
        $payment_detail = ProjectPaymentDetail::where('id', $detailData['id'])->where('project_payment_id', $payment->id)->first();
        if ($payment_detail != null) {
            $detailData['date'] = jalaliToGero($detailData['date']);
            $validatordetail = Validator::make($detailData, [
                'description' => 'nullable|max:255',
                'price' => 'nullable|max:20',
                'type' => 'nullable|max:25',
                'date' => 'nullable|max:255',
            ]);
            if ($validatordetail->fails()) {
                return response(['error' => $validatordetail->errors(), 'Validation Error']);
            }
            $payment_detail->update($validatordetail->valid());
        } else {
            $this->addPeymentDetail($payment, $detail);
        }
    }

    public function addPeymentDetail($payment, $detail)
    {
        $detailData = (array)$detail;
        $detailData['project_payment_id'] = $payment->id;
        $detailData['date'] = jalaliToGero($detailData['date']);
        $validatordetail = Validator::make($detailData, [
            'project_payment_id' => 'required|max:255',
            'description' => 'nullable|max:255',
            'price' => 'nullable|max:20',
            'type' => 'nullable|max:25',
            'date' => 'nullable|max:255',
        ]);
        if ($validatordetail->fails()) {
            return response(['error' => $validatordetail->errors(), 'Validation Error']);
        }
        $payment->payment_detail()->create($validatordetail->valid());
    }

    public function destroy(ProjectPayment $projectpayment)
    {
        $projectpayment->delete();
        return response(['message' => 'Deleted', 'payment' => $projectpayment], 200);
    }

    public function changestatus(Request $request, ProjectPayment $projectpayment)
    {
        try {
            $projectpayment->status_id = $request->status_id;
            $projectpayment->save();
            return response(['message' => 'با موفقیت انجام شد', 'payment' => $projectpayment], 200);

        } catch (Exception $e) {
            return response(['message' => 'خطا', 'payment' => $projectpayment], 401);
        }

    }

    public function projectpaymentdetails(ProjectPaymentDetail $projectpaymentdetail)
    {
        try {
            $projectpaymentdetail->delete();
            return response(['message' => 'Deleted', 'payment' => $projectpaymentdetail], 200);
        } catch (Exception $e) {
            return response(['message' => 'خطا', 'payment' => $projectpaymentdetail], 401);
        }
    }

    /**
     * @param Request $request
     * @param \Illuminate\Database\Eloquent\Model $payment
     */
    public function sendNotif(Request $request, ProjectPayment $payment, NotificationService $notificationService)
    {
        try {
            $to_role = '';
            $emp_type = 'company';
            switch ($payment->status_id) {
                case "2":
                    $to_role = 6;
                    break;
                case "3":
                    $to_role = 7;
                    break;
                case "4":
                    $emp_type = 'project';
                    $to_role = 2;
                    break;
            }

            $usernotif = [
                'route' => 'projectpage/' . $payment->project_id . '/payments',
                'message' => $payment->full_description,
                'title' => 'درخواست پرداخت',
                'type' => 'NOTIFICATION',
                'sender' => 'system',
                'status' => '0',
                'expire_at' => Carbon::now()->addDays(2),
                'user_id' => $request->user()->id,
                'project_id' => $payment->project_id,
                'to_role' => $to_role,
                'emp_type' => $emp_type
            ];
//            dd($usernotif);
            $notificationService->addNotification($usernotif);
        } catch (\Exception $e) {
            return false;
        }
    }
}
