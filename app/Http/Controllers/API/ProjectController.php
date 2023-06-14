<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectPaymentDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function index(Request $request)
    {
//        dd('asdsad');
        $projects = $request->user()->projects()->get();
        /*
         * ->collect()->map(function($project){
            $payments = $project->with(['payment' => function ($q) {
                $q->withSum('payment_detail', 'price');
            }])->where('id', $project->id)->first()->payment;
            $total = number_format(floor($payments->sum('payment_detail_sum_price')));
            $project->total_price = $total;
            return $project;
        })
         */
        return response(['projects' => ProjectResource::collection($projects), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = emptyStringToNull($request->all());
//        return response(['project' => $data["start_date"], 'message' => 'Update project successfully'], 200);

        array_walk_recursive($data, function (&$val, $key) use (&$input) {
            if (in_array($key, ['start_date', 'end_date'])) {
                $val = jalaliToGero($val);
            }
        });
        $data['user_id'] = $request->user()->id;
        $data['company_id'] = $request->user()->companies()->first()->id;
        if ($data['company_id'] === null)
            return response(['error' => 'شرکتی تعریف نشده است', 'Validation Error'], Response::HTTP_BAD_REQUEST);

        //return response(['project' =>$data["user_id"], 'message' => 'Created successfully'], 201);
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'start_date' => 'required|date_format:Y/m/d|before_or_equal:date_end',
            'end_date' => 'required|date_format:Y/m/d|after_or_equal:date_start'
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
        }

        $project = $request->user()->projects()->create($data);
        if ($request->hasFile('consultant_logo')) {
            $path = $request->consultant_logo->storeAs(
                'uploads/consultants_logo',
                $project->id . '.' . $request->consultant_logo->extension(),
                'public'
            );
            $project->consultant_logo = $path;
        }
        if ($request->hasFile('taskmaster_logo')) {
            $path = $request->taskmaster_logo->storeAs(
                'uploads/taskmasters_logo',
                $project->id . '.' . $request->taskmaster_logo->extension(),
                'public'
            );
            $project->taskmaster_logo = $path;
        }
        if ($request->hasFile('project_stamp')) {
            $path = $request->project_stamp->storeAs(
                'uploads/projects_stamp',
                $project->id . '.' . $request->project_stamp->extension(),
                'public'
            );
            $project->project_stamp = $path;
        }
        $project->save();
        $payments = $project->with(['payment' => function ($q) {
            $q->withSum('payment_detail', 'price');
        }])->where('id', $project->id)->first()->payment;
        $total = number_format(floor($payments->sum('payment_detail_sum_price')));
        $project->total_price = $total;
        return response(['project' => new ProjectResource($project), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $payments = $project->with(['payment' => function ($q) {
            $q->withSum('payment_detail', 'price');
        }])->where('id', $project->id)->first()->payment;
        $total = number_format(floor($payments->sum('payment_detail_sum_price')));
        $project->total_price = $total;

        return response(['project' => new ProjectResource($project), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $data = emptyStringToNull($request->all());

        array_walk_recursive($data, function (&$val, $key) use (&$input) {
            if (in_array($key, ['start_date', 'end_date'])) {
                $val = jalaliToGero($val);
            }
        });
//        return response(['project' => $data["start_date"], 'message' => 'Update project successfully'], 200);
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'start_date' => 'required|date_format:Y/m/d|before_or_equal:date_end',
            'end_date' => 'required|date_format:Y/m/d|after_or_equal:date_start'
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
        }

        if (isset($data["id"]))
            $myproject = Project::find($data["id"]);
        else
            $myproject = $project;
        $myproject->update([
            'name' => $data['name'],
            'introduction' => $data['introduction'],
            'city_id' => $data['city_id'],
            'project_type_id' => $data['project_type_id'],
            'last_approved_invoice_price' => $data['last_approved_invoice_price'],
            'last_adjustment_price' => $data['last_adjustment_price'],
            'contract_number' => $data['contract_number'],
            'contract_date' => $data['contract_date'],
            'lat' => $data['lat'],
            'lng' =>$data['lng'],
            'cost' => $data['cost'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
            'taskmaster' => $data['taskmaster'],
            'consultant' => $data['consultant'],
        ]);
        $payments = $myproject->with(['payment' => function ($q) {
            $q->withSum('payment_detail', 'price');
        }])->where('id', $myproject->id)->first()->payment;
        $total = number_format(floor($payments->sum('payment_detail_sum_price')));
        $myproject->total_price = $total;
        return response(['project' => $myproject, 'message' => 'Update project successfully'], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return response(['message' => 'Deleted'], 200);
    }

    public function updateProject(Request $request)
    {
        $data = emptyStringToNull($request->all());

//        return response(['project' => $data, 'message' => 'Update project successfully'], 200);
        array_walk_recursive($data, function (&$val, $key) use (&$input) {
            if (in_array($key, ['start_date', 'end_date'])) {
                $val = jalaliToGero($val);
            }
        });
//        return response(['project' => $data["end_date"], 'message' => 'Update project successfully'], 200);
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'start_date' => 'required|date_format:Y/m/d|before_or_equal:date_end',
            'end_date' => 'required|date_format:Y/m/d|after_or_equal:date_start'
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
        }

        if (isset($data["id"])) {
            $myproject = Project::find($data["id"]);

            $myproject->update([
                'name' => $data['name'],
                'introduction' => $data['introduction'],
                'city_id' => $data['city_id'],
                'project_type_id' => $data['project_type_id'],
                'last_approved_invoice_price' => $data['last_approved_invoice_price'],
                'last_adjustment_price' => $data['last_adjustment_price'],
                'contract_number' => $data['contract_number'],
                'contract_date' => $data['contract_date'],
                'lat' => $data['lat'],
                'lng' =>$data['lng'],
                'cost' => $data['cost'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'taskmaster' => $data['taskmaster'],
                'consultant' => $data['consultant'],
            ]);
//                    return response(['project' => $myproject, 'message' => 'Update project successfully'], 200);

            if ($request->hasFile('consultant_logo')) {
                $path = $request->consultant_logo->storeAs(
                    'uploads/consultants_logo',
                    $myproject->id . '.' . $request->consultant_logo->extension(),
                    'public'
                );
                $myproject->consultant_logo = $path;
            }
            if ($request->hasFile('taskmaster_logo')) {
                $path = $request->taskmaster_logo->storeAs(
                    'uploads/taskmasters_logo',
                    $myproject->id . '.' . $request->taskmaster_logo->extension(),
                    'public'
                );
                $myproject->taskmaster_logo = $path;
            }
            if ($request->hasFile('project_stamp')) {
                $path = $request->project_stamp->storeAs(
                    'uploads/projects_stamp',
                    $myproject->id . '.' . $request->project_stamp->extension(),
                    'public'
                );
                $myproject->project_stamp = $path;
            }
            $myproject->save();

            $payments = $myproject->with(['payment' => function ($q) {
                $q->withSum('payment_detail', 'price');
            }])->where('id', $myproject->id)->first()->payment;
            $total = number_format(floor($payments->sum('payment_detail_sum_price')));
            $myproject->total_price = $total;
            return response(['project' => $myproject, 'message' => 'Update project successfully'], 200);
        }
        return response(['project' => '', 'message' => 'an error occurred, please try again later'], 200);


    }
}
