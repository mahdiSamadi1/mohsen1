<?php

namespace App\Admin\Controllers;

use App\Models\SystemResource;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ResourceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SystemResource';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SystemResource());

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('resource_name', __('Resource name'));
        $grid->column('resource_title', __('Resource title'));
        $grid->column('model_name', __('Model name'));
        $grid->column('parent_id', __('Parent id'));
        $grid->column('resource_type_id', __('Resource type id'));
        $grid->column('resource_property', __('Resource property'));
        $grid->column('display_order', __('Display order'));

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
        $show = new Show(SystemResource::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('resource_name', __('Resource name'));
        $show->field('resource_title', __('Resource title'));
        $show->field('model_name', __('Model name'));
        $show->field('parent_id', __('Parent id'));
        $show->field('resource_type_id', __('Resource type id'));
        $show->field('resource_property', __('Resource property'));
        $show->field('display_order', __('Display order'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SystemResource());

        $form->text('resource_name', __('Resource name'));
        $form->text('resource_title', __('Resource title'));
        $form->text('model_name', __('Model name'));
        $form->number('parent_id', __('Parent id'));
        $form->number('resource_type_id', __('Resource type id'));
        $form->textarea('resource_property', __('Resource property'));
        $form->switch('display_order', __('Display order'));

        return $form;
    }
}
