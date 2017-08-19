<?php

namespace App\Http\Controllers\Admin;

use App\Models\BCF\Company;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ItemsRequest as StoreRequest;
use App\Http\Requests\ItemsRequest as UpdateRequest;

class ItemsCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Items');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/items');
        $this->crud->setEntityNameStrings('items', 'items');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS

        $this->crud->addColumn([
            'label' => 'Company',
            'type' => 'select',
            'name' => 'company_id',
            'entity' => 'company',
            'attribute' => 'official_name',
            'model' => "App\Models\BCF\Company",
        ]);

        $this->crud->addColumn([
            'label' => 'Category',
            'type' => 'select',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "App\Models\ItemCategories",
        ]);

        $this->crud->addColumn([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date',
        ]);

        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Title',
        ]);

        $this->crud->addColumn([
            'name' => 'price',
            'label' => 'Price',
//            'type' => 'usd',
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

        // ------ CRUD FIELDS
        $this->crud->addField([    // SELECT
            'label' => 'Category',
            'type' => 'select2',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "App\Models\ItemCategories",
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // SELECT
            'label' => 'Brand',
            'type' => 'select2',
            'name' => 'brand_id',
            'entity' => 'brand',
            'attribute' => 'name',
            'model' => "App\Models\ItemBrand",
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'title',
            'label' => 'Title',
            'type' => 'text',
            'placeholder' => 'Your title here',
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'member_id',
            'value' => getMember2ID(),
            'type' => 'hidden'
        ]);

        $member_id = getMember2ID();

        $mx = Company::where('member_id',getMember2ID())->first();

        $this->crud->addField([    // TEXT
            'name' => 'company_id',
            'value' => $mx != null ? $mx->id : 0,
            'type' => 'hidden'
        ]);

        $this->crud->addField([
            'name' => 'price',
            'label' => 'Price',
            'type' => 'number',
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addField([
            'name' => 'promotion_price',
            'label' => 'Promotion Price',
            'type' => 'number',
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addField([
            'name' => 'promotion_price_exp',
            'type' => 'date_picker',
            'label' => 'Promotion Price Exp',
            'value' => date('Y-m-d'),
            // optional:
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'yyyy-mm-dd',
                'language' => 'en'
            ],
        ]);


        $this->crud->addField([    // ENUM
            'name' => 'show_price',
            'label' => 'Show Price',
            'type' => 'enum',
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date_picker',
            'value' => date('Y-m-d'),
            // optional:
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'yyyy-mm-dd',
                'language' => 'en'
            ],
        ], 'create');



        $this->crud->addField([    // ENUM
            'name' => 'item_type',
            'label' => 'Item Type',
            'type' => 'enum',
        ]);

        $this->crud->addField([    // ENUM
            'name' => 'condition',
            'label' => 'Condition',
            'type' => 'enum',
        ]);


        $this->crud->addField([    // ENUM
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum',
        ]);

        $this->crud->addField([    // CHECKBOX
            'name' => 'featured',
            'label' => 'Featured item',
            'type' => 'checkbox',
        ]);


        $this->crud->addField([    // WYSIWYG
            'name' => 'content',
            'label' => 'Content',
            'type' => 'ckeditor',
            'placeholder' => 'Your textarea text here',
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
