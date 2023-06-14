<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

//Broadcast::channel('notification-channel.{id}', function ($user, $id) {
//    return (int) $user->id === (int) $id;
//});
//Broadcast::channel('notification-send', function ($user) {
//    return true;
//});
//Broadcast::channel('payment-channel', function ($user) {
//    return true;
//});

Broadcast::channel('private-payment-request-{id}', function ($user, $id) {
//    $user= \App\User::find($user->id)->load('roles');
//    return $user->is_admin;
    return (int) $user->id === (int) $id;
});

//Broadcast::channel('payment-request', function ($user) {
//    $user= \App\User::find($user->id)->load('roles');
//    return $user->is_admin;
//});
