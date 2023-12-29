<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Blog;

class BlogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Blog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Blog());

        $grid->column('id', __('Id'));
        $grid->column('blog-title', __('Blog title'));
        $grid->column('short-description', __('Short description'));
        // $grid->column('image', __('Image'));
        $grid->column('image')->image(); // this will let us see the image from the admin dashboard
        $grid->column('posted-by', __('Posted by'));
        $grid->column('long-description', __('Long description'));
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
        $show = new Show(Blog::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('blog-title', __('Blog title'));
        $show->field('short-description', __('Short description'));
        $show->field('image', __('Image'));
        $show->field('posted-by', __('Posted by'));
        $show->field('long-description', __('Long description'));
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
        $form = new Form(new Blog());

        $form->text('blog-title', __('Blog title'));
        $form->text('short-description', __('Short description'));
        $form->image('image', __('Image'));
        $form->text('posted-by', __('Posted by'));
        $form->text('long-description', __('Long description'));

        return $form;
    }
}
