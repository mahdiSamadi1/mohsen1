<?php

namespace App\Admin\Controllers;

use App\Models\BaseInfoValue;
use App\Models\BaseInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BaseInfoValueController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'مقادیر اطلاعات پایه';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BaseInfoValue());

        $grid->column('id', __('شناسه'));
        $grid->column('baseInfo.name', __('نام دسته بندی'));
        $grid->column('value', __('مقدار'));
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
        $show = new Show(BaseInfoValue::findOrFail($id));

        $show->field('id', __('شناسه'));
        $show->field('baseInfo.name', __('نام دسته بندی'));
        $show->field('value', __('مقدار'));
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
        $form = new Form(new BaseInfoValue());

        $form->select('base_info_id','نام دسته بندی')->options(BaseInfo::all()->pluck('name','id'));
        $form->text('value', __('مقدار'));

        return $form;
    }
}
