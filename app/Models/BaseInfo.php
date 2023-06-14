<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
        ]; 
    public function BaseInfoValues()
    {
        return $this->hasMany(BaseInfoValue::class,'baseInfo_id');
    }

}
