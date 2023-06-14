<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDevice extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'device_id',
        'company_id'
        ];

        public function projects()
        {
            return $this->belongsTo('App\Models\Project', 'project_id');
        } 
        
        public function devices()
        {
            return $this->belongsTo('App\Models\Device', 'device_id');
        }   
}
