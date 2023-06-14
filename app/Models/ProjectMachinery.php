<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMachinery extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','project_id','unit_id',
    'company_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function unit()
    {
        return $this->belongsTo('App\Models\BaseInfoValue','unit_id', 'id');
    }
}
