<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\ProjectTypeController;
use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\CompanyEmployeeController;
use App\Http\Controllers\API\ProjectEmployeeController;
use App\Http\Controllers\API\SkillController;
use App\Http\Controllers\API\BaseInfoController;
use App\Http\Controllers\API\BaseInfoValueController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\DeviceController;
use App\Http\Controllers\API\ProjectDeviceController;
use App\Http\Controllers\API\ProjectMachineryController;
use App\Http\Controllers\API\ProjectMaterialsController;
use App\Http\Controllers\API\PriceListController;
use \App\Http\Controllers\API\ProjectWBSController;
use \App\Http\Controllers\API\ProjectPaymentController;
use \App\Http\Controllers\API\BabatController;
use \App\Http\Controllers\API\ProjectReportController;
use \App\Http\Controllers\API\ProjectReportRUController;
use \App\Http\Controllers\API\CompanyProjectController;
use \App\Http\Controllers\API\UploadFilesController;
use \App\Http\Controllers\API\ProjectReportOutcomeController;
use \App\Http\Controllers\API\DashboardController;
use \App\Http\Controllers\API\SystemResourceController;
use \App\Http\Controllers\API\LicenseController;
use \App\Http\Controllers\API\CityController;

use \App\Services\WeatherService;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::middleware('auth:api')->post('/verify_token', function (Request $request) {
//    dd($request);
//    return $request->user();
//});
Route::middleware('auth:api')->group(function () {  //, 'middleware' => 'throttle:3,10'
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/verify_token', [AuthController::class, 'verify_token']);
    Route::post('/getdefaulcompany', [AuthController::class, 'getdefaulcompany']);

    Route::get('/testfunction', [CompanyProjectController::class, 'testquery']);
    Route::post('/updateProfile', [AuthController::class, 'updateProfile']);
    Route::post('/update_company', [CompanyController::class, 'updateCompany']);
    Route::post('/update_project', [ProjectController::class, 'updateProject']);
    Route::post('/update_payment', [ProjectPaymentController::class, 'updatePayment']);
    Route::post('/complete_registration', [AuthController::class, 'complete_registration']);
    Route::post('/uploadfiles', [UploadFilesController::class, 'uploadfiles']);
    Route::delete('/removefile/{mediaid}', [UploadFilesController::class, 'removefile']);
    Route::delete('/projectpaymentdetails/{projectpaymentdetail}', [ProjectPaymentController::class, 'projectpaymentdetails']);
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('projects.employees', ProjectEmployeeController::class);
    Route::apiResource('projects.reports', ProjectReportController::class);
    Route::get('projects/{project}/getreports',  [ProjectReportController::class, 'getReports']);
    Route::get('projects/{project}/getdeliveries', [ProjectReportController::class, 'getDeliveries']);
    Route::apiResource('projectreports', ProjectReportController::class);
    Route::get('getprojectreport/{projectReport}', [ProjectReportController::class, 'getReportWithDetails']);
    Route::post('/updatereport', [ProjectReportController::class, 'updateProjectReport']);

    Route::apiResource('projectreports.ru', ProjectReportRUController::class);

    Route::apiResource('projectreports.outcomes', ProjectReportOutcomeController::class);
    Route::post('/updateoutcome', [ProjectReportOutcomeController::class, 'update']);

    //Route::get('projectreports/{id}/ru',[ProjectReportRUController::class,'index']);
    Route::apiResource('projects.machineries', ProjectMachineryController::class);
    Route::apiResource('projects.materials', ProjectMaterialsController::class);
    Route::apiResource('projects.payments', ProjectPaymentController::class);
//        ->parameters([
//        'project' => 'id'
//    ]);;
    Route::apiResource('projecttypes', ProjectTypeController::class);
    Route::apiResource('companies', CompanyController::class);
    Route::apiResource('companies.employees', CompanyEmployeeController::class);
    Route::apiResource('companies.projects', CompanyProjectController::class);
    Route::apiResource('companies.projects', CompanyProjectController::class);
    Route::apiResource('skills', SkillController::class);
    Route::apiResource('cities', CityController::class);
    Route::apiResource('companyemployees', CompanyEmployeeController::class);
    Route::apiResource('projectemployees', ProjectEmployeeController::class);
    Route::post('/update_report', [ProjectReportController::class, 'updateReport']);
    Route::apiResource('projectreportRU', ProjectReportRUController::class);
    Route::apiResource('projectreportOutcome', ProjectReportOutcomeController::class);
    Route::apiResource('projectmachineries', ProjectMachineryController::class);
    Route::apiResource('projectmaterials', ProjectMaterialsController::class);
    Route::apiResource('projectpayments', ProjectPaymentController::class);
    Route::post('projectpayments/{projectpayment}/changestatus', [ProjectPaymentController::class, 'changestatus']);
    Route::apiResource('baseinfos', BaseInfoController::class);
    Route::apiResource('baseinfovalues', BaseInfoValueController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('devices', DeviceController::class);
    Route::apiResource('pricelist', PriceListController::class);
    Route::apiResource('projectdevices', ProjectDeviceController::class);
    Route::apiResource('projectmachineries', ProjectMachineryController::class);
    Route::apiResource('projectwbs', ProjectWBSController::class);
    Route::apiResource('projects.wbs', ProjectWBSController::class);
    Route::get('getprojectwbs/{project}', [ProjectWBSController::class, 'getProjectWBS']);

    Route::get('machineries', [ProductController::class, 'machineries']);
    Route::get('babats', [BabatController::class, 'babats']);
    Route::get('materials', [ProductController::class, 'materials']);
    Route::get('units', [BaseInfoValueController::class, 'units']);
    Route::get('reporttypes', [BaseInfoValueController::class, 'reporttypes']);
    Route::get('projects/{project}/workingareas', [ProjectWBSController::class, 'workingareas']);

    Route::get('dashboardprojectcosts/{company}', [DashboardController::class, 'getProjectsPaymentsDashboard']);
    Route::get('dashboardprojectcostsVSprice/{company}', [DashboardController::class, 'getProjectsPaymentsVSpriceDashboard']);
    Route::get('dashboardLastpayment/{company}', [DashboardController::class, 'getProjectsLastPaymentsDashboard']);
    Route::get('usermenu/{company}', [SystemResourceController::class, 'getUserMenu']);
    Route::get('userroute/{company}', [SystemResourceController::class, 'checkUserRoute']);
    Route::get('printreport/{report_id}', [ProjectReportController::class, 'downloadPDF'])->name('downloadPDF');
    Route::get('license/{company}', [LicenseController::class, 'getLicense']);
    Route::get('/getweatherinfo', [ProjectReportController::class, 'getWeather']);
    Route::post('/broadcasting/auth', function (Request $request) {
        $key = '43ab541dfb4b8731d189';
        $secret = 'bd7a49639204405d8906';
        $channel_name = $request->channel_name;
        $socket_id = $request->socket_id;
        $string_to_sign = $socket_id . ':' . $channel_name;
        $signature = hash_hmac('sha256', $string_to_sign, $secret);
        return response()->json(['auth' => $key . ':' . $signature]);
    });
});

Route::get('testsms', [AuthController::class, 'testsms']);

Route::post('register', [AuthController::class, 'register']);
Route::post('register_and_set_auth', [AuthController::class, 'registerAndSetAuth']);

Route::post('login', [AuthController::class, 'login'])->middleware('throttle:100,10');
Route::get('printr/{report_id}', [ProjectReportController::class, 'printReport'])->name('ex');
