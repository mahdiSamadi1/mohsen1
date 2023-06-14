<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectMaterialsResource;
use App\Models\Project;
use App\Models\ProjectMaterials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectMaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $project_materials = $project->material()->with(['project', 'unit', 'product'])->get();
        return response(['project_materials' => ProjectMaterialsResource::collection($project_materials), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project,Request $request)
    {
        $data = $request->material;
//        return response(['error' => $data, 'Validation Error']);
        $validator = Validator::make($data, [
            'product_id' => 'required|max:255',
            'unit_id' => 'required|max:255',
            'order_point' => 'nullable|max:10',
            'auto_order' => 'nullable|max:10',
            'show_need' => 'nullable|max:10',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $project->material()->create($validator->valid());
        $project_materials = $project->material()->get();
        return response(['project_materials' => $project_materials, 'message' => 'Created successfully'], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectMaterials  $projectMaterials
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectMaterials $projectMaterials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectMaterials  $projectMaterials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectMaterials $projectmaterial)
    {
        $data = $request->material;
//        return response(['error' => $data, 'Validation Error']);
        $validator = Validator::make($data, [
            'id' => 'required|max:255',
            'product_id' => 'required|max:255',
            'unit_id' => 'required|max:255',
            'order_point' => 'nullable|max:10',
            'auto_order' => 'nullable|max:10',
            'show_need' => 'nullable|max:10',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $projectmaterial->update($validator->valid());
//        $company_employees = CompanyEmployee::create($data);
        $projectmaterial = $projectmaterial->get();
        return response(['projectmaterial' => new ProjectMaterialsResource($projectmaterial),'material'=>$projectmaterial, 'message' => 'updated successfully'], 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectMaterials  $projectMaterials
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectMaterials $projectmaterial)
    {
        $projectmaterial->delete();

        return response(['message' => 'Deleted','machinary' => $projectmaterial], 200);
    }
}
