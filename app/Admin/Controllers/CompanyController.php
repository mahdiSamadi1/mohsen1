<?php

namespace App\Admin\Controllers;

use App\Models\Company;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CompanyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Company';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Company());

        $grid->column('id', __('Id'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('company_name', __('Company name'));
        $grid->column('national_code', __('National code'));
        $grid->column('national_identify', __('National identify'));
        $grid->column('contact_number', __('Contact number'));
        $grid->column('company_website', __('Company website'));
        $grid->column('email', __('Email'));
        $grid->column('address', __('Address'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Company::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('company_name', __('Company name'));
        $show->field('national_code', __('National code'));
        $show->field('national_identify', __('National identify'));
        $show->field('contact_number', __('Contact number'));
        $show->field('company_website', __('Company website'));
        $show->field('email', __('Email'));
        $show->field('address', __('Address'));
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
        $form = new Form(new Company());

        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->text('company_name', __('Company name'));
        $form->text('national_code', __('National code'));
        $form->text('national_identify', __('National identify'));
        $form->text('contact_number', __('Contact number'));
        $form->text('company_website', __('Company website'));
        $form->email('email', __('Email'));
        $form->textarea('address', __('Address'));

        return $form;
    }
}
