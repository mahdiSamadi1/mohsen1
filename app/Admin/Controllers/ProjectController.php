<?php

namespace App\Admin\Controllers;

use App\Models\Project;
use App\Models\ProjectType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Project';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Project());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('introduction', __('Introduction'));
        $grid->column('projectType.name', __('Project Type'));
        $grid->column('duration', __('Duration(day)'));
        $grid->column('location', __('Location'));
        $grid->column('cost', __('Cost'));
        $grid->column('start_date', __('Start date'));
//        $grid->column('duration', __('Duration'));
        $grid->column('end_date', __('End date'));
        $grid->column('taskmaster', __('Taskmaster'));
        $grid->column('consultant', __('Consultant'));
        $grid->column('user.name', __('User'));
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
        $show = new Show(Project::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Title'));
        $show->field('introduction', __('Introduction'));
        $show->field('project_type_id', __('Project Type'));
        $show->field('location', __('Location'));
        $show->field('cost', __('Cost'));
        $show->field('start_date', __('Start date'));
//        $show->field('duration', __('Duration'));
        $show->field('end_date', __('End date'));
        $show->field('taskmaster', __('Taskmaster'));
        $show->field('consultant', __('Consultant'));
        $show->field('user_id', __('User id'));
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
        $form = new Form(new Project());

        $form->text('name', __('Name'));
        $form->text('introduction', __('Introduction'));
        $form->select('project_type_id')->options(ProjectType::all()->pluck('name','id'));
//        $form->text('location', __('Location'));
        $form->number('cost', __('Cost'));
        $form->datetime('start_date', __('Start date'))->default(date('Y-m-d H:i:s'));
        $form->number('duration', __('Duration'));
        $form->datetime('end_date', __('End date'))->default(date('Y-m-d H:i:s'));
        $form->text('taskmaster', __('Taskmaster'));
        $form->text('consultant', __('Consultant'));
        $form->number('user_id', __('User id'));

        return $form;
    }
}
