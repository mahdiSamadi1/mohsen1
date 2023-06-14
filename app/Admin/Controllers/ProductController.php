<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\BaseInfoValue;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'محصولات';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());
        $grid->column('productParent.title', __('محصول سطح بالاتر'));
        $grid->column('id', __('Id'));
        $grid->column('title', __('عنوان کالا'));
        $grid->column('baseInfoType.value', __('نوع'));
        $grid->column('baseInfoUnit.value', __('واحد اندازه گیری'));
        $grid->column('conversion_rate', __('نرخ تبدیل'));
        $grid->column('product_type', __('نوع کالا'));
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('productParent.title', __('محصول سطح بالاتر'));
        $show->field('title', __('عنوان کالا'));
        $show->field('baseInfoType.value', __('نوع'));
        $show->field('baseInfoUnit.value', __('واحد اندازه گیری'));
        $show->field('conversion_rate', __('نرخ تبدیل'));
        $show->field('product_type', __('نوع کالا'));
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
        $form = new Form(new Product());
        $form->select('parent_id','محصول سطح بالاتر')->options(
            Product::all()->pluck('title','id')
        );
        $form->text('title', __('عنوان کالا'));
        $form->select('type_id','نوع کالا')->options(
            BaseInfoValue::where('base_info_id', '2')->get()->pluck('value','id')
        );
         $form->select('base_unit_id','واحد اندازه گیری')->options(
            BaseInfoValue::where('base_info_id', '1')->get()->pluck('value','id')
        );
        $form->decimal('conversion_rate', __('نرخ تبدیل'));
        $form->text('product_type', __('نوع کالا'));

        return $form;
    }
}
