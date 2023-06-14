<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProjectTypeResource;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response([ 'options' => ProjectType::all(), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectType $projecttype)
    {
        return response(['projectType' => new ProjectTypeResource($projecttype), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectType $projectType)
    {
        $projectType->update($request->all());

        return response(['projectType' => new ProjectTypeResource($projectType), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectType $projectType)
    {
        $projectType->delete();

        return response(['message' => 'Deleted']);
    }
}
