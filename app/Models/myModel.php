<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myModel extends Model
{

    protected $fillable = ['company_id'];

    public static function myCreate($arr){
        
        $newModel= static::create($arr);
        $newModel->work_start_time = '04:00:00';
        
       // 'work_start_time'=>'04:00:00';
       //throw new \Exception('newModel');
        return $newModel;
    }

    public static function myfind($key,$type) {
        // Your custom find functionality goes here.
        
        $a= static::find($key);
                //$className = substr(strrchr(__CLASS__, "\\"), 1);
        //$camelCase = lcfirst($className);
        //$snakeCase = strtolower(preg_replace('/[A-Z]/', '_$0', $camelCase));
        //throw new \Exception($d);
        //return response($ProjectReportHR->getTable());
        //return response(Auth::id());
        //$className = substr(strrchr(__CLASS__, "\\"), 1);
        //$camelCase = lcfirst($className);
        //$snakeCase = strtolower(preg_replace('/[A-Z]/', '_$0', $camelCase));
        //throw new \Exception(with(new static)->getTable());
        return $a;

    }


}


