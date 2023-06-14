<?php

namespace App\Services;

use App\Classes\MyCurl;
use App\Models\City;
use App\Models\WeatherCondition;
use Illuminate\Support\Facades\Http;
use App\Interfaces\IWeatherCondition;

class WeatherService
{
    private IWeatherCondition $weatherRepository;

    private const token = '832596:63c293892f0c97.91829465';
    private const PASSWORD = 'carshive';
    private const API_URL = 'https://one-api.ir/weather/';

    public function __construct(IWeatherCondition $weatherRepository)
    {
        $this->weatherRepository = $weatherRepository;
    }

    public function getWeatherInfo($lat, $lon, $city_id,$action)
    {
        if ($wc = $this->weatherRepository->getWeatherFromCache($lat, $lon, $city_id))
            return json_decode($wc['weather_json']);

        $result = $this->callWeatherService($lat, $lon,$action);
//        dd($result);
        if(isset($result[ 'body'])){
            $city_name = isset($result[ 'body']['result']['city']['name'])?$result[ 'body']['result']['city']['name']:'';
            $city = City::query()->where('title',$city_name)->first();
//        if(!isset($city)){
//            $city = City::create(['parent'=>'1278','title'=>$city_name]);
//        }
            $this->weatherRepository->createWeatherCondition([
                'weather_json' => (json_encode($result[ 'body'],true)),
                'city_id'=>isset($city) ? $city->id : null,
                'lat' => $lat,
                'lng' => $lon,
                'low_temperature' =>$result[ 'body']['result']['list'][0]['temp']['min'] ,
                'high_temperature' => $result[ 'body']['result']['list'][0]['temp']['max'] ,
                'date' => date("Y-m-d", $result[ 'body']['result']['list'][0]['dt'])
            ]);
            return $result[ 'body'];
        }else{
            return false;
        }

    }

    public function callWeatherService($lat,$lon,$action){
        $lat = str_replace('\\', '', $lat);
        $lon = str_replace('\\', '', $lon);
        $lat = str_replace('/', '.', $lat);
        $lon = str_replace('/', '.', $lon);
        $params = array(
            'token=' . self::token,
            'action=' . $action,
            'lat=' . $lat,
            'lon=' . $lon,
        );
//        dd('https://one-api.ir/weather/'.implode('&', $params));
        return MyCurl::send('GET', 'https://one-api.ir/weather/', implode('&', $params));
    }
}



