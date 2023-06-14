<?php

namespace App\Admin\Controllers;

use App\Models\SystemResourcePermission;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ResourcePermissionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'systemResourcePermission';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SystemResourcePermission());

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('resource_id', __('Resource id'));
        $grid->column('statuse_id', __('Statuse id'));
        $grid->column('role_id', __('Role id'));
        $grid->column('permission_level', __('Permission level'));

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
        $show = new Show(SystemResourcePermission::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('resource_id', __('Resource id'));
        $show->field('statuse_id', __('Statuse id'));
        $show->field('role_id', __('Role id'));
        $show->field('permission_level', __('Permission level'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SystemResourcePermission());

        $form->number('resource_id', __('Resource id'));
        $form->number('statuse_id', __('Statuse id'));
        $form->number('role_id', __('Role id'));
        $form->switch('permission_level', __('Permission level'));

        return $form;
    }
}
