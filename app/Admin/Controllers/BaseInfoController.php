<?php

namespace App\Admin\Controllers;

use App\Models\BaseInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BaseInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'دسته بندی اطلاعات پایه';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BaseInfo());

        $grid->column('id', __('شناسه'));
        $grid->column('name', __('نام دسته بندی'));
        $grid->column('created_at',  __('تاریخ ایجاد'));
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
        $show = new Show(BaseInfo::findOrFail($id));

        $show->field('id', __('شناسه'));
        $show->field('name', __('نام دسته بندی'));
        $show->field('created_at',  __('تاریخ ایجاد'));
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
        $form = new Form(new BaseInfo());

        $form->text('name', __('نام دسته بندی'));

        return $form;
    }
}
