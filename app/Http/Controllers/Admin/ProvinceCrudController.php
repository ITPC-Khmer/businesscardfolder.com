<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ProvinceRequest as StoreRequest;
use App\Http\Requests\ProvinceRequest as UpdateRequest;

class ProvinceCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Province');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/province');
        $this->crud->setEntityNameStrings('Province', 'Provinces');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Province',
        ]);

        $this->crud->addColumn([
            'label' => 'Country',
            'type' => 'select',
            'name' => 'country_id',
            'entity' => 'country',
            'attribute' => 'title',
            'model' => "App\Models\Country",
        ]);

        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Status',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // SELECT
            'label' => 'Country',
            'type' => 'select2',
            'name' => 'country_id',
            'entity' => 'country',
            'attribute' => 'title',
            'model' => "App\Models\Country",
        ]);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Province',
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
