<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProjectDevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProjectDeviceResource;

class ProjectDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectdevices = ProjectDevice::all();
        return response([ 'projectdevices' => ProjectDeviceResource::collection($projectdevices), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'project_id' => 'required',
            'device_id' => 'required'

        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $projectdevice = ProjectDevice::create($data);

        return response(['projectdevice' => new ProjectDeviceResource($projectdevice), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectDevice  $projectdevice
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectDevice $projectdevice)
    {
        return response(['projectdevice' => new ProjectDeviceResource($projectdevice), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectDevice  $projectdevice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectDevice $projectdevice)
    {
        $projectdevice->update($request->all());

        return response(['projectdevice' => new ProjectDeviceResource($projectdevice), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectDevice  $projectdevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectDevice $projectdevice)
    {
        $projectdevice->delete();

        return response(['message' => 'Deleted']);
    }
}