<?php

namespace App\Observers;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\ProjectReport;
use Illuminate\Support\Facades\Auth;
use App\Models\CompanyEmployee;
use App\Models\ProjectDevice;
use App\Models\ProjectEmployee;
use App\Models\ProjectMachinery;
use App\Models\ProjectMaterials;
use App\Models\ProjectPayment;
use App\Models\ProjectPaymentDetail;
use App\Models\ProjectWBS;
use App\Models\myModel;


class myModelObserver
{
    /**
     * Handle the myModel "created" event.
     *
     * @param  \App\Models\myModel  $myModel
     * @return void
     */
    public function creating(Model $myModel)
    {
//        dd($myModel->getTable());
//        $modelName = 'App\Models\\'. get_class($myModel);
//        $model = (new $modelName);
        $arr = ['project_reports',
        'project_devices',
        'project_employees',
        'project_machineries',
        'project_materials',
        'project_payments',
        'project_w_b_s'];
        //$myModel->company_id = $myModel->parent()->company_id;
        if (in_array($myModel->getTable(),$arr)){
            $p =Project::find($myModel->project_id);
            $myModel->company_id =$p->company_id;
        }
        else if ($myModel->getTable()=='project_report_r_u'){
            $R =ProjectReport::find($myModel->project_report_id);
            $myModel->company_id =$R->company_id;
        }
        else if ($myModel->getTable()=='project_report_outcomes'){
            $R =ProjectReport::find($myModel->project_report_id);
            $myModel->company_id =$R->company_id;
        }
        else if ($myModel->getTable()=='project_payment_details'){
            $R =ProjectPayment::find($myModel->project_payment_id);
            $myModel->company_id =$R->company_id;
        }
    }

    /**
     * Handle the myModel "updated" event.
     *
     * @param  \App\Models\myModel  $myModel
     * @return void
     */
    public function updated(Model $myModel)
    {
        //
    }

    /**
     * Handle the myModel "deleted" event.
     *
     * @param  \App\Models\myModel  $myModel
     * @return void
     */
    public function retrieved(Model $myModel)
    {
//        if(!isset($myModel->company_id))
//        throw new \Exception('Access denied!-->'.get_class($myModel).' ===== '.$myModel->company_id);
        if (!Auth::user()->hasAccessToCompany($myModel->company_id))
            throw new \Exception('Access denied!');
    }

    /**
     * Handle the myModel "restored" event.
     *
     * @param  \App\Models\myModel  $myModel
     * @return void
     */
    public function restored(myModel $myModel)
    {
        //
    }

    /**
     * Handle the myModel "force deleted" event.
     *
     * @param  \App\Models\myModel  $myModel
     * @return void
     */
    public function forceDeleted(myModel $myModel)
    {
        //
    }
}
