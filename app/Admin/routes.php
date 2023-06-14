<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('site/users', UserController::class);
    $router->resource('site/base-values/projects', ProjectController::class);
    $router->resource('site/base-values/products', ProductController::class);
    $router->resource('site/base-values/project-types', ProjectTypesController::class);
    $router->resource('site/companies', CompanyController::class);
    $router->resource('site/skills', SkillController::class);
    $router->resource('site/base-values/base-infos', BaseInfoController::class);
    $router->resource('site/base-values/base-info-values', BaseInfoValueController::class);
    $router->resource('site/base-values/devices', DeviceController::class);
    $router->resource('site/base-values/project-devices', ProjectDeviceController::class);
    $router->resource('site/system_resources', ResourceController::class);
    $router->resource('site/system_resources_perm', ResourcePermissionController::class);
});
