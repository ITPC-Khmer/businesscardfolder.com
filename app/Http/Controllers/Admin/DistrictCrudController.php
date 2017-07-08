<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DistrictRequest as StoreRequest;
use App\Http\Requests\DistrictRequest as UpdateRequest;

class DistrictCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\District');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/district');
        $this->crud->setEntityNameStrings('District', 'Districts');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'District',
        ]);

        $this->crud->addColumn([
            'label' => 'Province',
            'type' => 'select',
            'name' => 'province_id',
            'entity' => 'province',
            'attribute' => 'title',
            'model' => "App\Models\Province",
        ]);

        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Status',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // SELECT
            'label' => 'Province',
            'type' => 'select2',
            'name' => 'province_id',
            'entity' => 'province',
            'attribute' => 'title',
            'model' => "App\Models\Province",
        ]);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'District',
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
