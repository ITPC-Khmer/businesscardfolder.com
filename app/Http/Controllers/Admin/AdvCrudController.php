<?php

namespace App\Http\Controllers\Admin;

use App\Models\BCF\Company;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AdvRequest as StoreRequest;
use App\Http\Requests\AdvRequest as UpdateRequest;

class AdvCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Adv');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/adv');
        $this->crud->setEntityNameStrings('adv', 'advs');


        $this->crud->addColumn([
            'label' => 'Company',
            'type' => 'select',
            'name' => 'company_id',
            'entity' => 'company',
            'attribute' => 'official_name',
            'model' => "App\Models\BCF\Company",
        ]);

        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Title'
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'label' => 'Description',
        ]);

        $this->crud->addColumn([
            'name' => 'adv_type',
            'label' => 'Type',
        ]);

        $this->crud->addColumn([
            'name' => 'adv_location',
            'label' => 'Location',
        ]);

        $this->crud->addColumn([
            'name' => 'adv_view',
            'label' => 'View',
        ]);

        $this->crud->addColumn([
            'name' => 'adv_click',
            'label' => 'Click',
        ]);

        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'image',
            'type' => 'image2m',
            'attributes' => [
                'als' =>'Image',
                'class' =>'',
                'style' =>'width: 60px; height: 40px',
            ],
            'link' => true,
            // 'disabled' => 'disabled'
        ]);

//=======================
//=======================
//=======================


        $this->crud->addField([    // TEXT
            'name' => 'member_id',
            'value' => getMember2ID(),
            'type' => 'hidden'
        ]);

        //$member_id = getMember2ID();

        $mx = Company::where('member_id',getMember2ID())->first();

        $this->crud->addField([    // TEXT
            'name' => 'company_id',
            'value' => $mx != null ? $mx->id : 0,
            'type' => 'hidden'
        ]);


        $this->crud->addField([    // TEXT
            'name' => 'title',
            'label' => 'Title',
            'type' => 'text'
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'description',
            'label' => 'Description',
            'type' => 'text'
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'adv_type',
            'label' => 'Type',
            'type' => 'enum'
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'adv_location',
            'label' => 'Location',
            'type' => 'enum'
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum'
        ]);

        $this->crud->addField([ // image
            'default' => asset('No_Image_Available.jpg'),
            'label' => "Image",
            'name' => "image",
            'type' => 'image2m',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 3/2, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
        ]);

        $this->crud->enableAjaxTable();
        $this->crud->addClause('where', 'member_id', '=',  getMember2ID());



    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
