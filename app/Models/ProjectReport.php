<?php

namespace App\Models;
use App\Helpers\Jdate;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ProjectReport extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia , CreatedUpdatedBy;
    protected $appends = ['creator_name','hasImage','all_medias'];//,'ReportType'

    protected $fillable = [
        'description',
        'report_date',
        'approved_date',
        'confirmer_id',
//        'project_site_id',
        'review_note',
        'site_start_time',
        'site_end_time',
        'site_active',
        'low_temperature',
        'high_temperature',
        'weather_conditions',
        'report_type_id',
        'company_id',
        'creator_id',
    ];

    public function ReportType()
    {
        return $this->belongsTo('App\Models\BaseInfoValue', 'report_type_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'creator_id', 'id');
    }

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
    public function RU()
    {
        return $this->hasMany(ProjectReportRU::class,);
    }

    public function outcomes()
    {
        return $this->hasMany(ProjectReportOutcome::class);
    }

    public function getReportTypeAttribute()
    {
        return $this->ReportType()->first()->value;
    }

    protected function getCreatorNameAttribute(){
        return $this->user()->first()->name.' '.$this->user()->first()->family;
    }

    protected function ReportDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => geroToJalali($value),
            set: fn ($value) =>  $value,
        );
    }

    protected function ApprovedDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => geroToJalali($value),
            set: fn ($value) => jalaliToGero($value),
        );
    }

    public function getHasImageAttribute()
    {
        return $this->getFirstMedia() ? true : false;
    }
    public function getAllMediasAttribute(){
        return $this->getMedia();
    }
}
