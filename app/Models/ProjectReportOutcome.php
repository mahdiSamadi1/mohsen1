<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ProjectReportOutcome extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia , CreatedUpdatedBy;
    protected $appends = [ 'hasImage','all_medias'];

    protected $fillable = [
    'project_report_id',
    'company_id',
    'description',
    'unit_id',
    'project_wbs_id',
     'width','height','length','weight','count','factor'
    ];
    public function project_report()
    {
        return $this->belongsTo('App\Models\ProjectReport', 'project_report_id', 'id');
    }
    public function unit()
    {
        return $this->belongsTo('App\Models\BaseInfoValue','unit_id', 'id');
    }
    public function project_wbs(){
        return $this->belongsTo('App\Models\ProjectWBS','project_wbs_id','id');
    }
    public function getHasImageAttribute()
    {
        return $this->getFirstMedia() ? true : false;
    }
    public function getAllMediasAttribute(){
        return $this->getMedia();
    }
}
