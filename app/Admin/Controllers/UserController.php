<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());
        $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('نام'))->sortable();
        $grid->column('family', __('نام خانوادگی'))->sortable();
        $grid->column('email', __('ایمیل'));
        // $grid->column('email_verified_at', __('Email verified at'));
        // $grid->column('password', __('Password'));
        // $grid->column('remember_token', __('Remember token'));
        $grid->column('phone', __('موبایل'));
        $grid->column('avatar', __('تصویر'));
        $grid->column('company_name', __('نام شرکت'));
        $grid->status('وضعیت')->display(function ($released) {
            return ($released==='Y') ? 'فعال' : 'غیرفعال';
        });
        // $grid->column('lastlogin', __('Lastlogin'));
        // $grid->column('createdby', __('Createdby'));
        // $grid->column('updatedby', __('Updatedby'));
        $grid->column('created_at', __('ایجاد شده در'));
        $grid->column('updated_at', __('بروز شده در'));
        $grid->filter(function ($filter) {

            // Sets the range query for the created_at field
            $filter->between('created_at', 'تاریخ ایجاد')->datetime();
        });
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('family', __('Family'));
        $show->field('phone', __('Phone'));
        $show->field('avatar', __('Avatar'));
        $show->field('company_name', __('Company name'));
        $show->field('status', __('Status'));
        $show->field('lastlogin', __('Lastlogin'));
        $show->field('createdby', __('Createdby'));
        $show->field('updatedby', __('Updatedby'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        $form->text('remember_token', __('Remember token'));
        $form->text('family', __('Family'));
        $form->mobile('phone', __('Phone'));
        $form->image('avatar', __('Avatar'));
        $form->text('company_name', __('Company name'));
        $form->text('status', __('Status'));
        $form->datetime('lastlogin', __('Lastlogin'))->default(date('Y-m-d H:i:s'));
        $form->number('createdby', __('Createdby'))->default(1);
        $form->number('updatedby', __('Updatedby'))->default(1);

        return $form;
    }
}
