<?php
namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Controllers\Admin\ArticleCrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ArticleRequest as StoreRequest;
use App\Http\Requests\ArticleRequest as UpdateRequest;


class UserPostCrudController extends ArticleCrudController {

    public function setup() {
        parent::setup();

        // get the user_id parameter
        $user_id = \Route::current()->parameter('user_id');

        // set a different route for the admin panel buttons
        $this->crud->setRoute("admin/user/".$user_id."/post");

        // show only that user's posts
        $this->crud->addClause('where', 'user_id', '=', $user_id);
    }

    public function store(StoreRequest $request)
    {
        $this->crud->request->request->add(['user_id'=>null]);
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }

    public function show($id)
    {
        return parent::show($this->request->post);
    }

    public function listRevisions($id)
    {
        return parent::listRevisions($this->request->post);
    }

    public function restoreRevision($id)
    {
        return parent::restoreRevision($this->request->post);
    }

    public function showDetailsRow($id)
    {
        return parent::showDetailsRow($this->request->post);
    }


}