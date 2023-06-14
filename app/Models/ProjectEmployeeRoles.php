<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectEmployeeRoles extends Model
{
    use HasFactory;

    public function project_employees()
    {
        return $this->belongsToMany(ProjectEmployee::class);
    }

}
