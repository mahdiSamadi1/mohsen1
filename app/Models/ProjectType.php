<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->hasMany('App\Models\Project', 'project_type_id', 'id');
    }
}
