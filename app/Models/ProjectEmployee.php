<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class ProjectEmployee extends Model
{
    use HasFactory;
    protected $fillable = ['company_employee_id','skill_id','project_id',
    'company_id'];
    protected $appends = ['skill'];

    public function company_employee()
    {
        return $this->belongsTo(CompanyEmployee::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class,'project_employee_roles', 'project_employee_id', 'skill_id');
    }

    public function getSkillAttribute(){
        $skill = Arr::join(Skill::query()->whereIn('id',explode(',',$this->skill_id))->pluck('title')->all(),',');
        return $skill;
    }

}
