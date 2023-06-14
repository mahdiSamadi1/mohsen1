<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectReportRU extends Model
{
    use HasFactory;

    protected $fillable = ['resource_id', 'skill_id',
        'project_report_id', 'work_start_time', 'description', 'work_end_time',
         'title', 'resource_usage', 'unit_id',
        'resource_type_id', 'company_id','in_out','inuse'];

//    public function company_employee()
//    {
//        return $this->belongsTo('App\Models\CompanyEmployee', 'company_employee_id', 'id');
    //   }
    protected $table = 'project_report_r_u';

    public function project_report()
    {
        return $this->belongsTo('App\Models\ProjectReport', 'project_report_id', 'id');
    }

    public function skill()
    {
        return $this->belongsTo('App\Models\Skill', 'skill_id', 'id');
    }

//    public function company_employee()
//    {
//        if ($this->resource_type_id == 1)
//            return $this->belongsTo('App\Models\CompanyEmployee', 'resource_id', 'id');
//        return false;
//    }
//
//    public function product()
//    {
//        if ($this->resource_type_id == 2)
//            return $this->belongsTo('App\Models\Product', 'resource_id', 'id');
//        return false;
//    }
//
//    public function device()
//    {
//        if ($this->resource_type_id == 3)
//            return $this->belongsTo('App\Models\Device', 'resource_id', 'id');
//        return false;
//    }
}
