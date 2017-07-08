<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CommuneRequest as StoreRequest;
use App\Http\Requests\CommuneRequest as UpdateRequest;

class CommuneCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Commune');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/commune');
        $this->crud->setEntityNameStrings('Commune', 'Communes');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Commune',
        ]);

        $this->crud->addColumn([
            'label' => 'District',
            'type' => 'select',
            'name' => 'district_id',
            'entity' => 'district',
            'attribute' => 'title',
            'model' => "App\Models\District",
        ]);

        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Status',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // SELECT
            'label' => 'District',
            'type' => 'select2',
            'name' => 'district_id',
            'entity' => 'district',
            'attribute' => 'title',
            'model' => "App\Models\District",
        ]);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Commune',
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
