<?php

namespace App\Admin\Controllers;

use App\Models\ProjectDevice;
use App\Models\Project;
use App\Models\Device;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectDeviceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'اتصال ماشین به پروژه ها';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProjectDevice());

        $grid->column('id', __('شناسه'));
        $grid->column('projects.name', __('پروژه'));
        $grid->column('devices.name', __('ماشین'));
        $grid->column('created_at', __('تاریخ ایجاد'));
        $grid->column('updated_at', __('تاریخ ویرایش'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ProjectDevice::findOrFail($id));

        $show->field('id', __('شناسه'));
        $show->field('projects.name', __('پروژه'));
        $show->field('devices.name', __('ماشین'));
        $show->field('created_at', __('تاریخ ایجاد'));
        $show->field('updated_at', __('تاریخ ویرایش'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProjectDevice());

        $form->select('project_id','پروژه')->options(Project::all()->pluck('name','id'));
        $form->select('device_id','دستگاه')->options(Device::all()->pluck('name','id'));

        return $form;
    }
}
