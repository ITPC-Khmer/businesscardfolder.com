<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TelephoneRequest as StoreRequest;
use App\Http\Requests\TelephoneRequest as UpdateRequest;

class TelephoneCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Telephone');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/telephone');
        $this->crud->setEntityNameStrings('Telephone', 'Telephones');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'label' => 'Country',
            'type' => 'select',
            'name' => 'country_id',
            'entity' => 'country',
            'attribute' => 'title',
            'model' => "App\Models\Country",
        ]);

        $this->crud->addColumn([
            'name' => 'company_name',
            'label' => 'Company Name',
        ]);

        $this->crud->addColumn([
            'name' => 'logo',
            'type' => 'image',
            'attributes' => [ // Optional (style by default is height: 48px;)
                'alt' => 'User avatar',
                'class' => 'img_rounded',
                'style' => 'width: 50px; height: 50px'
            ],
            'link' => True // Optional, this define if the image should have a link to be opened in new tab (default) or not
        ]);

        $this->crud->addColumn([
            'name' => 'website',
            'label' => 'Website',
        ]);

        $this->crud->addColumn([
            'name' => 'prefix_number',
            'label' => 'Prefix Number',
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
            'name' => 'company_name',
            'label' => 'Company Name',
        ]);

        $this->crud->addField([ // image
            'default' => asset('no-image.png'),
            'label' => "Logo",
            'name' => "logo",
            'type' => 'image2',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
        ]);

        $this->crud->addField([
            'name' => 'website',
            'label' => 'Website',
        ]);

        $this->crud->addField([
            'name' => 'prefix_number',
            'label' => 'Prefix Number',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Description',
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
