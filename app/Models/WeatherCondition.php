<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherCondition extends Model
{
    use HasFactory;
    protected $table = 'weather_condition';
    protected $fillable = [
        'weather_json' ,
        'city_id',
        'lat' ,
        'lng' ,
        'low_temperature' ,
        'high_temperature' ,
        'date'
    ];
}
