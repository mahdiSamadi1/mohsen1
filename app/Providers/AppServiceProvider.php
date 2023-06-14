<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Observers\myModelObserver;
use App\Models\myModel;
use App\Models\ProjectReport;
use App\Models\ProjectReportRU;
use App\Models\ProjectReportOutcome;
use App\Models\CompanyEmployee;
use App\Models\Project;
use App\Models\ProjectDevice;
use App\Models\ProjectEmployee;
use App\Models\ProjectMachinery;
use App\Models\ProjectMaterials;
use App\Models\ProjectPayment;
use App\Models\ProjectPaymentDetail;
use App\Models\ProjectWBS;
use App\Scopes\ProjectRecordGroup;
use App\Scopes\ProjectDetailRecordGroup;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        if ($this->app->environment('local')) {
//            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
//            $this->app->register(TelescopeServiceProvider::class);
//        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultstringLength(191);
        ProjectReport::observe(myModelObserver::class);
        ProjectReportRU::observe(myModelObserver::class);
        ProjectReportOutcome::observe(myModelObserver::class);
        CompanyEmployee::observe(myModelObserver::class);
//        Project::observe(myModelObserver::class);
        ProjectDevice::observe(myModelObserver::class);
        ProjectEmployee::observe(myModelObserver::class);
        ProjectMachinery::observe(myModelObserver::class);
        ProjectMaterials::observe(myModelObserver::class);
        ProjectPayment::observe(myModelObserver::class);
        ProjectPaymentDetail::observe(myModelObserver::class);
        ProjectWBS::observe(myModelObserver::class);
        Project::addGlobalScope(new ProjectRecordGroup);
        ProjectReport::addGlobalScope(new ProjectDetailRecordGroup);
        ProjectDevice::addGlobalScope(new ProjectDetailRecordGroup);
        ProjectEmployee::addGlobalScope(new ProjectDetailRecordGroup);
        ProjectMachinery::addGlobalScope(new ProjectDetailRecordGroup);
        ProjectMaterials::addGlobalScope(new ProjectDetailRecordGroup);
        ProjectPayment::addGlobalScope(new ProjectDetailRecordGroup);
        ProjectWBS::addGlobalScope(new ProjectDetailRecordGroup);





        //
    }
}
