<?php

namespace App\Repositories;
use App\Interfaces\INotification;
use App\Models\Notification;

class NotificationRepository implements INotification
{
    public function addNotification(array $userNotif)
    {
        Notification::create($userNotif);
//        dd(Notification::create($userNotif));
        return $userNotif;
    }
    public function retrieveUserNotification($user_id)
    {
//        dd(Notification::query()->where('user_id',$user_id)->get());
        return Notification::query()->where('user_id',$user_id)->get();
    }
}
