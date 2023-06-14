<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $appends = ['count_companies','notifications', 'companies_roles', 'project_roles','userAvailableRoutes'];

    protected $fillable = [
        'name',
        'phone',
        'family',
        'email',
        'user_type',
        'accept_terms',
        'telegram_id',
        'instagram_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function getCompaniesList(){
        $users = DB::select( DB::raw("select c.id from companies c where (c.user_id = $this->id or id in (
	select ce.company_id from company_employees ce where ce.mobile = (select phone from users where id = c.user_id)
))") );
//        $users = DB::select('select * from users');
        return array_column($users, 'id');
    }
    public function Project_view_list()
    {
        $AdminComps=DB::table('company_employee_roles')
        ->join('company_employees','company_employee_roles.company_employee_id','=','company_employees.id')
        ->join('skills','company_employee_roles.skill_id','=','skills.id')
         ->where('mobile',$this->phone)->where('all_projectview_access',true)->select('company_employees.company_id');

        $arr1= DB::table('projects') ->whereIn('company_id',$AdminComps->pluck('company_id')->toArray())->pluck('id')->toArray();

        $arr2= DB::table('project_employee_roles')
        ->join('project_employees','project_employee_roles.project_employee_id','=','project_employees.id')
        ->join('skills','project_employee_roles.skill_id','=','skills.id')
        ->join('company_employees','project_employees.company_employee_id','=','company_employees.id')
         ->where('mobile',$this->phone)->where('projectview_access',true)->pluck('project_id')->toArray();

        return array_merge($arr1,$arr2);
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function company_employees_mobile()
    {
        return $this->hasMany('App\Models\CompanyEmployee', 'mobile', 'phone');
    }

    public function getCountCompaniesAttribute()
    {
        $user = $this;
        return Company::with(['employees' => function ($q) use ($user) {
            $q->with('skills')->where('mobile', '=', $user->phone);
        },'projects' => function ($q) use ($user) {
            $q->with('employees');
        }])
            ->whereHas('employees', function ($query) use ($user) {
                $query->where('mobile', $user->phone);
            })
            ->orWhere('companies.user_id', $this->id)
            ->count();
    }


    public function getCompaniesRolesAttribute()
    {
//        return $this->companies()->with(['projects'=>function($q){
//            $q->with(['employees'=>function($q2){
//                $q2->with('skill')->where('mobile',$this->phone);
//            }]);
//        },'employees'=>function($q){
//            $q->with('skills');
//        }])->get();
        $user = $this;
        return Company::with(['employees' => function ($q) use ($user) {
            $q->with('skills')->where('mobile', '=', $user->phone);
        },'projects' => function ($q) use ($user) {
            $q->with('employees');
        }])
            ->whereHas('employees', function ($query) use ($user) {
                $query->where('mobile', $user->phone);
            })
            ->orWhere('companies.user_id', $this->id)
            ->get();
    }

    public function getuserAvailableRoutesAttribute()
    {
        $Routes=DB::table('system_resource_permissions')
        ->join('system_resources','system_resource_permissions.resource_id','=','system_resources.id')
        ->join('company_employee_roles','system_resource_permissions.role_id','=','company_employee_roles.skill_id')
        ->join('company_employees','company_employee_roles.company_employee_id','=','company_employees.id')
        ->where('resource_type_id',2)->where('mobile',Auth::user()->phone)->where('permission_level',1)
        ->select('system_resources.resource_name','company_employees.company_id')
        ->distinct()
        ->get();
        return $Routes;

    }



    public function hasAccessToCompany($company_id)
    {
        $a = DB::select( DB::raw("select c.id from companies c where (c.user_id = $this->id or id in (
	select ce.company_id from company_employees ce where ce.mobile = (select phone from users where id = c.user_id)
)) and id =  $company_id") );
        return  count($a);
    }



    public function getProjectRolesAttribute()
    {
//        return $this->company_employees_mobile()->with(['company','skills','project_employees'=>function ($q){
//                $q->with(['skill']);
//        }])->get();
//        return $this->project_employees_mobile()->with(['company'])->get();
    }

    public function receivesBroadcastNotificationsOn()
    {
        return 'App.User.' . $this->id;
    }

    public function messages(){
        return $this->hasMany(Message::class,'sender_id');
    }

    public function getNotificationsAttribute()
    {
        return $this->notifications()->select(['message','status','route','created_at','user_id'])->orderBy('created_at','desc')->limit(10)->get();
    }
}
