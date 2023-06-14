<?php

namespace App\Services;

use App\Interfaces\IUploadFiles;

class UploadFilesServeice implements IUploadFiles
{
    public function uploadFiles($files,$model_name,$model_id,$path,$file_name){
        try{
            $className = 'App\Models\\'. $model_name;
            return (new $className)->find($model_id) -> addMedia($path.$file_name)->toMediaCollection();
        }catch (\Exception $ex){
            abort(code:404 , message: "upload wasn't successful");
        }
    }
}
