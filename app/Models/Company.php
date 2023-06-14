<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Company extends Model
{
    use HasFactory;
//    protected $appends =['company_projects'];
    protected $appends = ['comanyLicense'];

    protected $fillable = [
        'company_name',
        'national_identify',
        'contact_number',
        'company_website',
        'address',
        'email',
        'logo',
        'telegram_id',
        'instagram_id',
    ];

    public function employees()
    {
        return $this->hasMany(CompanyEmployee::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function companylicense()
    {
        return $this->hasOne(CompanyLicense::class);
    }

    public function getCompanyProjectsAttribute()
    {
        return $this->projects()->get();
    }
    public function getcomanyLicenseAttribute()
    {
        $license=DB::table('company_licenses')->
        join('licenses','company_licenses.license_id','=','licenses.id')
        ->where('company_licenses.company_id',$this->id)
        ->select('licenses.id','title','licenses.description','expiration_date','company_id')->get();
        return $license;
    }


}
