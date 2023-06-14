<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BaseInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\BaseInfoResource;

class BaseInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baseinfos = BaseInfo::all();
        return response([ 'baseinfos' => BaseInfoResource::collection($baseinfos), 'message' => 'Retrieved successfully'], 200);
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
            'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $baseinfo = BaseInfo::create($data);

        return response(['baseinfo' => new BaseInfoResource($baseinfo), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaseInfo  $baseinfo
     * @return \Illuminate\Http\Response
     */
    public function show(BaseInfo $baseinfo)
    {
        return response(['baseinfo' => new BaseInfoResource($baseinfo), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BaseInfo  $baseinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaseInfo $baseinfo)
    {
        $baseinfo->update($request->all());

        return response(['baseinfo' => new BaseInfoResource($baseinfo), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaseInfo  $baseinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaseInfo $baseinfo)
    {
        $baseinfo->delete();

        return response(['message' => 'Deleted']);
    }
}