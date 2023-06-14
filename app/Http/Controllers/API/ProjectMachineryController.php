<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectMachineryResource;
use App\Models\Project;
use App\Models\ProjectMachinery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectMachineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $project_machineries = $project->machinery()->with(['project', 'unit', 'product'])->get();
        return response(['project_machineries' => ProjectMachineryResource::collection($project_machineries), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project, Request $request)
    {
        $data = $request->machineries;
//         return response(['error' => $data, 'Validation Error']);
        $a = '';
        foreach ($data as $item) {
            $validator = Validator::make($item, [
                'machinery_id' => 'required|max:255',
                'unit_id' => 'required|max:255',
            ]);
            $a = $validator->valid();
            $insdata['product_id'] = $a['machinery_id'];
            $insdata['unit_id'] = $a['unit_id'];
            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'Validation Error']);
            }
//            return response(['error' => $insdata, 'Validation Error']);
            $project->machinery()->create($insdata);


        }
        $project_machineries = $project->machinery()->get();
        return response(['project_machineries' => $project_machineries, 'message' => 'Created successfully'], 201);


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProjectMachinery $projectMachinary
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectMachinery $projectMachinery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectMachinery $projectMachinary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectMachinery $projectMachinery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ProjectMachinery $projectMachinary
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectMachinery $projectmachinery)
    {

        $projectmachinery->delete();

        return response(['message' => 'Deleted','machinary' => $projectmachinery], 200);
    }
}
