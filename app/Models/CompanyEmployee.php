<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class CompanyEmployee extends Model
{
    use HasFactory;
    protected $fillable = ['name','family','company_id','skills','mobile'];
    protected $appends =['avatar','role_des'];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function project_employees()
    {
        return $this->hasMany(ProjectEmployee::class);
    }
    public function getAvatarAttribute(){
        $user = User::where('phone',$this->mobile)->first();
        return $user?$user->avatar:'';
    }
    public function getRoleDesAttribute(){
        $skill = Arr::join(Skill::query()->whereIn('id',explode(',',$this->skills))->pluck('title')->all(),',');
        return $skill;
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class,'company_employee_roles', 'company_employee_id', 'skill_id');
    }


}
