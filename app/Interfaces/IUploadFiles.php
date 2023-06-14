<?php

namespace App\Interfaces;

interface IUploadFiles
{
    public function uploadFiles($files,$model_name,$model_id,$path,$file_name);
}
