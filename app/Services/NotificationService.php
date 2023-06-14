<?php

namespace App\Services;

use App\Classes\MyCurl;
use App\Interfaces\INotification;
use App\Models\City;
use App\Models\CompanyEmployee;
use App\Models\Notification;
use App\Models\Project;
use App\Models\ProjectEmployee;
use App\Models\User;
use App\Models\WeatherCondition;
use Illuminate\Support\Facades\Http;
use App\Interfaces\IWeatherCondition;

class NotificationService
{
    private INotification $notificationRepository;
    private $notif;

    public function __construct(INotification $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }

    function addNotification(array $userNotif)
    {
//        dd($userNotif);
        $to_role = $userNotif['to_role'];
        $emp_type = $userNotif['emp_type'];
        $project = Project::find($userNotif['project_id']);
        if ($emp_type == 'company') {
            $c_emp = $project->company->employees()->where(function ($q) use ($to_role) {
                $q->whereRaw("find_in_set('" . $to_role . "',skills)");
            })->get()->toArray();
//            dd($c_emp);
            if ($c_emp)
                $this->addAndSentNotifForUsers($c_emp, $userNotif);
        }
        if ($emp_type == 'project') {
            $p_emp = $project->employees()->where('skill_id', $to_role)->get()->pluck('company_employee_id')->toArray();
            if ($p_emp) {
                $c_emp = $project->company->employees()->whereIn('id', $p_emp)->get()->toArray();
                if ($c_emp)
                    $this->addAndSentNotifForUsers($c_emp, $userNotif);
            }

        }


        return $this->notif;
    }

    function senNotification()
    {
//        dd($this->notif);
        event(new \App\Events\PaymentNotification(collect($this->notif)->toArray()));
    }

    public function addAndSentNotifForUsers($c_emp, array $userNotif)
    {
//        dd($c_emp);
        foreach ($c_emp as $emp) {
            $user = User::where('phone', $emp['mobile'])->first();
            $userNotif['user_id'] = $user->id;
            $this->notif = $this->notificationRepository->addNotification($userNotif);
            $this->senNotification();
        }
    }

}



