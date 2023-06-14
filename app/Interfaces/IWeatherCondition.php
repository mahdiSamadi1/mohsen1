<?php

namespace App\Interfaces;

interface IWeatherCondition
{
    public function getWeatherFromCache($lon,$lat,$city_id);
    public function createWeatherCondition(array $weatherDetails);
}
