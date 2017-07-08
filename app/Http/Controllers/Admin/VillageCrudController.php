<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\VillageRequest as StoreRequest;
use App\Http\Requests\VillageRequest as UpdateRequest;

class VillageCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Village');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/village');
        $this->crud->setEntityNameStrings('Village', 'villages');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn([
            'name' => 'code',
            'label' => 'Code',
        ]);

        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Village',
        ]);

        $this->crud->addColumn([
            'label' => 'Commune',
            'type' => 'select',
            'name' => 'commune_id',
            'entity' => 'commune',
            'attribute' => 'title',
            'model' => "App\Models\Commune",
        ]);

        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Status',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // SELECT
            'label' => 'Commune',
            'type' => 'select2',
            'name' => 'commune_id',
            'entity' => 'commune',
            'attribute' => 'title',
            'model' => "App\Models\Commune",
        ]);

        $this->crud->addField([
            'name' => 'code',
            'label' => 'Code',
        ]);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Village',
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
