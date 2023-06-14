<?php

namespace App\Repositories;
use App\Interfaces\IWeatherCondition;
use App\Models\WeatherCondition;

class WeatherRepository implements IWeatherCondition
{
    public function getWeatherFromCache($lon,$lat,$city_id)
    {
        return WeatherCondition::query()->where(function ($q) use($lon,$lat) {
            $q->where('lat', $lat)->where('lng', $lon)->where('date',date('Y-m-d',time()));
        })->orWhere(function ($q) use($city_id) {
            $q->where('city_id',$city_id)->where('date',date('Y-m-d',time()));
        })->first();
    }

    public function createWeatherCondition(array $weatherDetails)
    {
        return WeatherCondition::create($weatherDetails);
    }
}
