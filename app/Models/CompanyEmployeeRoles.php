<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEmployeeRoles extends Model
{
    use HasFactory;
    protected $fillable = ['company_employee_id','skill_id'];

    public function company_employees()
    {
        return $this->belongsToMany(CompanyEmployee::class);
    }
}
