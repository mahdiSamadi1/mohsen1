<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Venturecraft\Revisionable\RevisionableTrait;

class ProjectPaymentDetail extends Model
{
    use HasFactory;
    use RevisionableTrait;
    use CreatedUpdatedBy;
    protected $appends = ['jDate'];//,'projectType'

    protected $fillable = [
        'description',
        'date',
        'type',
        'price',
        'company_id',
        'project_payment_id'

    ];

    public function project_payment()
    {
        return $this->belongsTo('App\Models\ProjectPayment', 'project_payment_id');
    }
    public function getJDateAttribute()
    {
        return geroToJalali($this->date);
    }

    protected function Date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => geroToJalali($value),
        );
    }
    protected function Price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => number_format(floor($value)),
            set: fn ($value) => str_replace(',','',$value),
        );
    }
}
