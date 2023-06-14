<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectWBSResource;
use App\Models\Project;
use App\Models\ProjectWBS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectWBSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($project_id)
    {
//        return response(['project_wbs' => 'hello', 'message' => 'Retrieved successfully'], 200);
        $project_wbs = Project::find($project_id)->wbs()->with(['project', 'price_list'])->where(function ($q){
            $q->where('type','!=','WA')->orWhereNull('type');
        })->get();

        $project_wbs = ProjectWBSResource::collection($project_wbs);//$aa->get();
//        return response(['project_wbs' => $project_wbs, 'message' => 'Retrieved successfully'], 200);

        $working_areas = Project::find($project_id)->wbs()->select('id','company_id', 'working_area')->where('type','=','WA')->get();

//        $working_areas = $project_wbs->pluck('working_area')->all();
//        return response(['working_areas' => $working_areas, 'message' => 'Retrieved successfully'], 200);
        return response(['project_wbs' => $project_wbs, 'workingareas' => $working_areas, 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project, Request $request)
    {
        $data = $request->wbs;
//        return response([$data['parent_id']]);
        $data['parent_id'] = $data['parent_id'] == '' ? 0 : $data['parent_id'];
        if($data['parent_id'] === 0 ){
            $data2['working_area'] = $data['working_area'];
            $data2['type'] = 'WA';
            $data['working_area'] = '';
            $validator = Validator::make($data2, [
                'working_area' => 'required|max:255',
                'type' => 'required|max:255',
            ]);
            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'Validation Error']);
            }
            $wa = $project->wbs()->create($validator->valid());
            $data['parent_id'] = $wa->id;
        }
//        return response(['error' => $data, 'Validation Error']);
        if($data['price_list_id'] == '' ){
            $data['price_list_id'] = null;
        }
        $validator = Validator::make($data, [
            'price_list_id' => 'nullable|max:15',
            'working_area' => 'nullable|max:255',
            'qty' => 'required|max:15',
            'price_list_description' => 'nullable|max:255',
            'parent_id' => 'nullable|max:15',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $project->wbs()->create($validator->valid());
        $project_wbs = $project->wbs()->get();
        return response(['project_wbs' => $project_wbs, 'message' => 'Created successfully'], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProjectWBS $projectWBS
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectWBS $projectWBS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectWBS $projectWBS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectWBS $projectwb)
    {
        $data = $request->wbs;
//        return response(['error' => $projectwb, 'Validation Error']);
        $data['parent_id'] = $data['parent_id'] == '' ? 0 : $data['parent_id'];
        if($data['parent_id'] === 0 OR $data['working_area']!==''){
            $data2['working_area'] = $data['working_area'];
            $data2['type'] = 'WA';
            $data2['project_id'] = $projectwb->project_id;
            $data['working_area'] = '';
            $data['project_id'] = $projectwb->project_id;
            $validator = Validator::make($data2, [
                'working_area' => 'required|max:255',
                'type' => 'required|max:255',
            ]);
            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'Validation Error']);
            }
            $wa = ProjectWBS::create($validator->valid());
            $data['parent_id'] = $wa->id;
        }
        $validator = Validator::make($data, [
            'price_list_id' => 'required_without:price_list_description|max:15',
            'working_area' => 'required_without:parent_id|max:255',
            'qty' => 'required|max:15',
            'price_list_description' => 'required_without:price_list_id|max:255',
            'parent_id' => 'required_without:working_area|max:15',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $projectwb->update($validator->valid());
//        $company_employees = CompanyEmployee::create($data);
//        $project_wbs = $projectwb->get();
        return response(['project_wbs' => new ProjectWBSResource($projectwb), 'message' => 'updated successfully'], 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ProjectWBS $projectWBS
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectWBS $projectwb)
    {
        $projectwb->delete();

        return response(['message' => 'Deleted'], 200);
    }

    public function workingareas(Project $project, Request $request)
    {
        $query = $project->wbs()->where('type','WA')->select(array('id','company_id', 'working_area'))->get();
        return response(['workingareas' => $query, 'message' => 'Retrieved successfully'], 200);
    }

    public function getProjectWBS( $project_id){
        $project_wbs = Project::find($project_id)->wbs()->with(['project', 'price_list'])->where(function ($q){
            $q->where('type','!=','WA')->orWhereNull('type');
        })->get();
//        $project_wbs = ProjectWBSResource::collection($project_wbs);
        return response(['project_wbs' => $project_wbs, 'message' => 'Retrieved successfully'], 200);

    }
}
