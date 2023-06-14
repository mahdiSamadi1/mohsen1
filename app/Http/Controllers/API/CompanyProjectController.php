<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyProjectResource;
use App\Http\Resources\ProjectResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CompanyProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testquery(Request $request){
        return response(['company_projects' =>$request->user()->getCompaniesList()],200);
    }
    public function index(Company $company,Request $request)
    {
        try{

            $company_projects = $company->projects()->get();
            /*

           ->collect()->map(function($project){
                $payments = $project->with(['payment' => function ($q) {
                    $q->withSum('payment_detail', 'price');
                }])->where('id', $project->id)->first()->payment;
                $total = number_format(floor($payments->sum('payment_detail_sum_price')));
                $project->total_price = $total;
                return $project;
            })
             *
             */
            return response([ 'company_projects' => CompanyProjectResource::collection($company_projects), 'message' => 'Retrieved successfully'], 200);
        }catch (\Exception $exception){
            return response([ 'company_projects' => null, 'message' => 'Bad request or server error: '.$exception], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Company $company,Request $request)
    {
        $data = $request->all();
//        return response(['project' => $data["start_date"], 'message' => 'Update project successfully'], 200);

        array_walk_recursive($data, function (&$val, $key) use (&$input) {
            if (in_array($key, ['start_date', 'end_date'])) {
                $val = jalaliToGero($val);
            }
        });
        $data['user_id'] = $request->user()->id;
//        return response(['project' => $request->user()->id, 'message' => 'Update project successfully'], 200);
        $data['company_id'] = $company->id;
        if ($data['company_id'] === null)
            return response(['error' => 'شرکتی تعریف نشده است', 'Validation Error'], Response::HTTP_BAD_REQUEST);

        //return response(['project' =>$data["user_id"], 'message' => 'Created successfully'], 201);
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'user_id' => 'required|max:255',
            'start_date' => 'required|date_format:Y/m/d|before_or_equal:date_end',
            'end_date' => 'required|date_format:Y/m/d|after_or_equal:date_start'
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
        }
//        return response(['project' => $validator->valid(), 'message' => 'Update project successfully'], 200);
        $project = $company->projects()->create($validator->valid());
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
        return response(['project' => new ProjectResource($project), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, company $company)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        //
    }
}
