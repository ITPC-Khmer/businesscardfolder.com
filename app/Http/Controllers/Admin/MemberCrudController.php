<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\GH;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\MemberRequest as StoreRequest;
use App\Http\Requests\MemberRequest as UpdateRequest;

class MemberCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Member');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/member');
        $this->crud->setEntityNameStrings('Member', 'Members');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            // run a function on the CRUD model and show its return value
            'name' => 'id',
            'label' => "Business Form Code", // Table column heading
            'type' => "model_function",
            'function_name' => 'getBusinessFormWithLink', // the method in your Model
        ]);

        $this->crud->addColumn([
            'name' => 'username',
            'label' => 'User Name',
        ]);



        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'E-mail',
        ]);

        $this->crud->addColumn([
            'name' => 'phone',
            'label' => 'Phone',
        ]);

        $this->crud->addColumn([
            'name' => 'photo',
            'type' => 'image',
            'attributes' => [ // Optional (style by default is height: 48px;)
                'alt' => 'User avatar',
                'class' => 'img_rounded',
                'style' => 'width: 50px; height: 50px'
            ],
            'link' => True // Optional, this define if the image should have a link to be opened in new tab (default) or not
        ]);

        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Status',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // SELECT
            'name' => 'role_id',
            'label' => "Role",
            'type' => 'select2_from_array',
            'options' => GH::getRoleArray(),
            'allows_null' => false,
        ]);

        $this->crud->addField([
            'name' => 'name',
            'label' => 'Name',
        ]);

        $this->crud->addField([
            'name' => 'username',
            'label' => 'User Name',
        ]);

        $this->crud->addField([
            'name' => 'email',
            'label' => 'E-mail',
            'type' => 'email'
        ]);

        $this->crud->addField([
            'name' => 'phone',
            'label' => 'Phone',
        ]);

        $this->crud->addField([
            'name' => 'password',
            'label' => 'Password',
            'type' => 'password',
        ]);

        $this->crud->addField([
            'name' => 'password_confirmation',
            'label' => 'Password Confirm',
            'type' => 'password',
        ]);

        $this->crud->addField([ // image
            'default' => asset('no-image.png'),
            'label' => "Photo",
            'name' => "photo",
            'type' => 'image2',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
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
