<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProjectWBS extends Model
{
    use HasFactory;

    protected $appends = ['selected_price_list_description', 'working_area_name'];
    protected $fillable = ['project_id', 'price_list_id', 'qty', 'working_area', 'parent_id', 'price_list_description', 'type', 'unit_id',
        'company_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function price_list()
    {
        return $this->belongsTo(PriceList::class);
    }

    public function getSelectedPriceListDescriptionAttribute()
    {
        return $this->working_area_name.' > '.$this->price_list?->description;
    }

    public function getWorkingAreaNameAttribute()
    {
        if ($this->price_list_id > 0){
            $a = DB::select(DB::raw("select working_area from project_w_b_s where id = " . $this->parent_id));
            return $a[0]->working_area;
        }else return '';
    }
}
