<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProjectPayment;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UploadFilesController extends Controller
{
    public function uploadfiles(Request $request)
    {
        $className = 'App\Models\\' . $request->model_name;
        $model = (new $className)->find($request->model_id);
        foreach ($request->file as $file ){
            (new $className)->find($request->model_id)-> addMedia($file)->toMediaCollection();
        }
        return  response(['project_payment' =>$model, 'message' => 'Created successfully'], 201);
    }

    public function removeFile(Media $mediaid){
        return response(['media' =>$mediaid->delete(), 'message' => 'Created successfully'], 201);
    }

}
