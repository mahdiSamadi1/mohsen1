<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempUser extends Model
{
    use HasFactory;
    protected $fillable = ['mobile', 'auth_code'];


//    public static function findOrCreate($mobile)
//    {
//        $obj = static::where('mobile',$mobile)->first();
//        return $mobile;
//        return $obj ?: new static;
//    }
}
