<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseInfoValue extends Model
{
    use HasFactory;
    protected $fillable = [
        'base_info_id',
        'value'
        ];
    
    public function baseInfo()
    {
        return $this->belongsTo('App\Models\BaseInfo', 'base_info_id');
    }    

}
