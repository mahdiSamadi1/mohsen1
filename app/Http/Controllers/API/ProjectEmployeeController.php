<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectEmployeeResource;
use App\Models\Project;
use App\Models\ProjectEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Lcobucci\JWT\Exception;

class ProjectEmployeeController extends Controller
{
    public function index(Project $project)
    {
        $project_employees = $project->employees()->with(['project', 'company_employee'])->get();
        return response(['project_employees' => ProjectEmployeeResource::collection($project_employees), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project, Request $request)
    {
        try{
            $data = $request->employees;
//         return response(['error' => $data, 'Validation Error']);
//        $data['skill_ids']=array_filter($data['skill_ids']['value']);
//         return response(['error' => $data['skill_ids'], 'Validation Error']);
            $data['skill_id'] = implode(",", Arr::pluck($data['skill_ids'], 'value'));
            $a = '';
            $validator = Validator::make($data, [
                'company_employee_id' => 'required|max:255',
                'skill_id' => 'required|max:255',
            ]);
//        return response(['error' => $data, 'Validation Error']);
            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'Validation Error']);
            }
            $a = $validator->valid();
            $insdata['company_employee_id']=$a['company_employee_id'];
            $insdata['skill_id']=$a['skill_id'];
//        return response(['error' => $insdata, 'Validation Error']);
            $pe = $project->employees()->create($insdata);
            $pe->skills()->attach(explode(',', $data['skill_id']));


            $project_employees = $project->employees()->get();
            return response(['project_employees' => $project_employees, 'message' => 'Created successfully'], 201);
        }catch (\Exception $exception){
            return response(['project_employees' => null, 'message' => 'خطا در ثبت اطلاعات', 'exception' => $exception], 403);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProjectEmployee $projectEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectEmployee $projectemployee)
    {
        return response(['project_employee' => new ProjectEmployeeResource($projectemployee), 'message' => 'Retrieved successfully'], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectEmployee $projectEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectEmployee $projectemployee)
    {
        $data = $request->all();
//       return response(['error' => $projectemployee, 'Validation Error']);
        $data['skills'] = implode(",", Arr::pluck($request->skills, 'value'));
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'family' => 'required|max:255',
            'skills' => 'nullable|string|max:255',
            'mobile' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $projectemployee->update($validator->valid());
//        $project_employees = ProjectEmployee::create($data);
        $project_employees = $request->user()->companies()->first()->employees()->get();
        return response(['project_employee' => new ProjectEmployeeResource($projectemployee), 'employees' => $project_employees, 'message' => 'Created successfully'], 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ProjectEmployee $projectEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectEmployee $projectemployee)
    {
//        return response(['message' => $projectemployee->id], 200);

        $projectemployee->delete();

        return response(['message' => 'Deleted'], 200);
    }
}
