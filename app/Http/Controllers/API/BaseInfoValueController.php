<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BaseInfoValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\BaseInfoValueResource;

class BaseInfoValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baseinfovalues = BaseInfoValue::all();
        return response([ 'baseinfovalues' => BaseInfoValueResource::collection($baseinfovalues), 'message' => 'Retrieved successfully'], 200);
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
            'value' => 'required|max:255',
            'base_info_id'=>'required'
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $baseinfovalue = BaseInfoValue::create($data);

        return response(['baseinfovalue' => new BaseInfoValueResource($baseinfovalue), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaseInfoValue  $baseinfovalue
     * @return \Illuminate\Http\Response
     */
    public function show(BaseInfoValue $baseinfovalue)
    {
        return response(['baseinfovalue' => new BaseInfoValueResource($baseinfovalue), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BaseInfoValue  $baseinfovalue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaseInfoValue $baseinfovalue)
    {
        $baseinfovalue->update($request->all());

        return response(['baseinfovalue' => new BaseInfoValueResource($baseinfovalue), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaseInfoValue  $baseinfovalue
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaseInfoValue $baseinfovalue)
    {
        $baseinfovalue->delete();

        return response(['message' => 'Deleted']);
    }


    public function units(Request $request)
    {
        $query = BaseInfoValue::query();
        $query->where('base_info_id','1');
        $items = $query->get();

        return response([ 'units' => BaseInfoValueResource::collection($items), 'message' => 'Retrieved successfully'], 200);
    }

    public function reporttypes(Request $request)
    {
        $query = BaseInfoValue::query();
        $query->where('base_info_id','3');
        $items = $query->get();

        return response([ 'reporttypes' => BaseInfoValueResource::collection($items), 'message' => 'Retrieved successfully'], 200);
    }

}
