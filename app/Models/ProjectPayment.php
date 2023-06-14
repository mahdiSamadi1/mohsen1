<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use \Venturecraft\Revisionable\RevisionableTrait;

class ProjectPayment extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;
    use RevisionableTrait;
    use CreatedUpdatedBy;
    protected $appends = ['jDate', 'hasImage','all_medias','requester','full_description','register_date','mablagh','approved_mablagh'];//,'projectType'

    protected $fillable = [
        'description',
        'status_id',
        'project_id',
        'user_id',
        'babat_id',
        'documentno',
        'bill_photo',
        'approved_description',
        'accountant_description',
        'approved_price',
        'to_havale',
        'to_account',
        'company_id'
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment_detail()
    {
        return $this->hasMany('App\Models\ProjectPaymentDetail', 'project_payment_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id');
    }

    public function babat()
    {
        return $this->belongsTo('App\Models\Babat', 'babat_id');
    }

    public function getJDateAttribute()
    {
        return geroToJalali($this->date);
    }

    public function getMablaghAttribute()
    {
        return floor($this->price);
    }
    public function getApprovedMablaghAttribute()
    {
        return floor($this->approved_price);
    }

    public function getAllMediasAttribute(){
        return $this->getMedia();
    }

    public function getRegisterDateAttribute()
    {
        return geroToJalali($this->created_at);
    }
    public function getHasImageAttribute()
    {
        return $this->getFirstMedia() ? true : false;
    }
    public function getRequesterAttribute()
    {
        return  ($this->user)?$this->user->name .' '.$this->user->family:'';
    }

    public function getFullDescriptionAttribute()
    {
        return 'درخواست پرداخت ';
            //.$this->user->name.' '.$this->user->family.' بابت '.($this->babat && isset($this->babat) && $this->babat!=null)? $this->babat->name : 'نامشخص' .'('.$this->description.') به مبلغ '.number_format(floor($this->payment_detail()->sum('price'))).' ریال';
    }
}
