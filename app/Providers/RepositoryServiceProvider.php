<?php

namespace App\Providers;

use App\Interfaces\INotification;
use App\Interfaces\IWeatherCondition;
use App\Repositories\NotificationRepository;
use App\Repositories\WeatherRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IWeatherCondition::class, WeatherRepository::class);
        $this->app->bind(INotification::class, NotificationRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
