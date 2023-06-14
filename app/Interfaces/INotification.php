<?php
namespace App\Interfaces;

interface INotification{
    public function addNotification(array $userNotif);
    public function retrieveUserNotification($user_id);
}
