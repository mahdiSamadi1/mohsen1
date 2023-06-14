<?php

namespace App\Models;

use App\Helpers\Jdate;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use Illuminate\Support\Facades\DB;
use PHPUnit\Exception;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $appends = ['timeSpent', 'timeSpentDay','timeRemainedDay', 'duration', 'jStartDate', 'jEndDate'];//,'projectType' 'total_price',

    protected $fillable = [
        'name',
        'location',
        'city_id',
        'user_id',
        'introduction',
        'cost',
        'project_type_id',
        'location',
        'cost',
        'start_date',
        'end_date',
        'taskmaster',
        'consultant',
        'last_approved_invoice_price',
        'consultant_logo',
        'taskmaster_logo',
        'project_stamp',
        'company_id',
        'contract_number',
        'contract_date',
        'last_adjustment_price',
        'lat',
        'lng',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'cost' => 'int',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projectType()
    {
        return $this->belongsTo('App\Models\ProjectType', 'project_type_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function getDurationAttribute()
    {
        $start = new DateTime($this->start_date);
        $end = new DateTime($this->end_date);
        $kol = $start->diff($end)->format('%a');
        return $kol;
    }


    public function getProjectTypeAttribute()
    {
        return $this->projectType()->name;
    }

    public function getJStartDateAttribute()
    {
        return geroToJalali($this->start_date);
    }


    public function getJEndDateAttribute()
    {
        return geroToJalali($this->end_date);
    }


    public function employees()
    {
        return $this->hasMany(ProjectEmployee::class);
    }

    public function reports()
    {
        return $this->hasMany(ProjectReport::class);
    }

    public function machinery()
    {
        return $this->hasMany(ProjectMachinery::class);
    }

    public function material()
    {
        return $this->hasMany(ProjectMaterials::class);
    }

    public function wbs()
    {
        return $this->hasMany(ProjectWBS::class);
    }

    public function payment()
    {
        return $this->hasMany(ProjectPayment::class);
    }


//    public function getTotalPriceAttribute()
//    {
//        $users = DB::select( DB::raw("select round(IFNULL(sum(price),0)) total from project_payment_details where project_payment_id in (select id from project_payments where project_id = 248 and status_id = 4) ") );
////        $users = DB::select('select * from users');
//        return array_column($users, 'total');
//    }
    protected function Cost(): Attribute
    {
        return Attribute::make(
            get: fn($value) => number_format(floor($value)),
            set: fn($value) => str_replace(',', '', $value),
        );
    }
    protected function LastApprovedInvoicePrice(): Attribute
    {
        return Attribute::make(
            get: fn($value) => number_format(floor($value)),
            set: fn($value) => str_replace(',', '', $value),
        );
    }
    protected function LastAdjustmentPrice(): Attribute
    {
        return Attribute::make(
            get: fn($value) => number_format(floor($value)),
            set: fn($value) => str_replace(',', '', $value),
        );
    }

    protected function ContractDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => geroToJalali($value),
            set: fn ($value) => jalaliToGero($value),
        );
    }
    public function getTimeSpentAttribute()
    {
        $start = new DateTime($this->start_date);
        $end = new DateTime($this->end_date);
        $now = new DateTime(now());
        $kol = $start->diff($end)->format('%a');
        $kol = ($kol === 0) ? 1 : $kol;
        $spent = $start->diff($now)->format('%a');
        $ret = number_format(($spent / ($kol + 1)) * 100, 0, '', '');
        //$now = DateTime();
        return $ret < 100 ? $ret : 100;
    }

    public function getTimeSpentDayAttribute()
    {
        $start = new DateTime($this->start_date);
        $now = new DateTime(now());
        $spent = $start->diff($now)->format('%a');
        //$now = DateTime();
        return $spent;
    }

    public function getTimeRemainedDayAttribute()
    {
        try{
            $now = new DateTime(now());
            $end = new DateTime($this->end_date);
            $remained = $end->diff($now)->format('%a');
            //$now = DateTime();
            return $remained;
        }catch (Exception $e){
            return '';
        }

    }
//    public function getTotalCostsAttribute()
//    {
//        return $this->payment()->payment_detail()->sum('price');
//    }
}
