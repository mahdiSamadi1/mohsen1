<?php

namespace App\Admin\Controllers;

use App\Models\Device;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DeviceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ماشین ها';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Device());

        $grid->column('id', __('شناسه'));
        $grid->column('name',__('نام'));
        $grid->column('description',__('توضیحات'));
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
        $show = new Show(Device::findOrFail($id));

        $show->field('id', __('شناسه'));
        $show->field('name',__('نام'));
        $show->field('description',__('توضیحات'));
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
        $form = new Form(new Device());

        $form->text('name',__('نام'));
        $form->text('description',__('توضیحات'));

        return $form;
    }
}
