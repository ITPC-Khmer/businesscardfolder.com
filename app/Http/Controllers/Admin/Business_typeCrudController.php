<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Business_typeRequest as StoreRequest;
use App\Http\Requests\Business_typeRequest as UpdateRequest;

class Business_typeCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Business_type');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/business_type');
        $this->crud->setEntityNameStrings('Business Type', 'Business Types');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Title',
        ]);

        $this->crud->addColumn([
            'label' => 'Category',
            'type' => 'select',
            'name' => 'business_category_id',
            'entity' => 'category',
            'attribute' => 'title',
            'model' => "App\Models\Business_category",
        ]);

        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Status',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // SELECT
            'label' => 'Category',
            'type' => 'select2',
            'name' => 'business_category_id',
            'entity' => 'category',
            'attribute' => 'title',
            'model' => "App\Models\Business_category",
        ]);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Title',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum',
        ]);

        $this->crud->enableAjaxTable();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
