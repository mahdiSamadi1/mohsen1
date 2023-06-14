<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/event', function () {
    $array = ['message' => 'Ekpono Ambrose','id'=>'2']; //data we want to pass
    event(new \App\Events\PaymentNotification($array));

    return 'done';
});


Route::get('test/email', function(){
    $send_mail = 'arlabbafi@gmail.com';
    dispatch(new App\Jobs\SendEmailJob($send_mail));
    dd('send mail successfully !!');
});



Route::get('/link', function () {
//    $target = '/home/public_html/storage/app/public';
//    $shortcut = '/home/public_html/public/storage';
    $target = $_SERVER['DOCUMENT_ROOT'].'/storage/avatars';
    $shortcut = $_SERVER['DOCUMENT_ROOT'].'/storage/avatars2';
    symlink($target, $shortcut);
});

//Route::get('/pusherAuth',function (Request $request){
//    $key = '43ab541dfb4b8731d189';
//    $secret = 'bd7a49639204405d8906';
//    $channel_name = $request->channel_name;
//    $socket_id = $request->socket_id;
//    $string_to_sign = $socket_id.':'.$channel_name;
//    $signature = hash_hmac('sha256', $string_to_sign, $secret);
//    return response()->json(['auth' => $key.':'.$signature]);
//});
