<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $appends = ['base_unit','type'];//,


    protected $fillable = [
        'title',
        'type_id',
        'parent_id',
        'base_unit_id',
        'conversion_rate',
        'product_type'
    ];

    public function Products()
    {
        return $this->hasMany(Product::class,'parent_id');
    }
    //-----------------
    public function baseInfoType()
    {
        return $this->belongsTo('App\Models\BaseInfoValue','type_id', 'id');
    }
    public function baseInfoUnit()
    {
        return $this->belongsTo('App\Models\BaseInfoValue','base_unit_id', 'id');
    }
    public function productParent()
    {
        return $this->belongsTo('App\Models\Product','parent_id', 'id');
    }

    public function getTypeAttribute()
    {
        return $this->baseInfoType()->first()->value;
    }

    public function getBaseUnitAttribute()
    {
        return $this->baseInfoUnit()->first()->value;
    }
}
