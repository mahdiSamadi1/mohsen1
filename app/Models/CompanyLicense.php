<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyLicense extends Model
{
    use HasFactory;
    protected $fillable = ['license_id','start_date','expiration_date',''];
}
