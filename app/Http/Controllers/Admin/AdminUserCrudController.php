<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\GH;
use App\Models\AdminUser;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use Validator;
use App\Http\Requests\AdminUserRequest as StoreRequest;
use App\Http\Requests\AdminUserRequest as UpdateRequest;
use Illuminate\Http\Request;

class AdminUserCrudController extends CrudController
{
    public function changePass(Request $request){
        $row = AdminUser::find($request->id);
        return view('user.change-pass',['row' => $row]);
    }

    public function changePassSave(Request $request){
        $id = $request->id;

        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('admin/adminuser')
                ->withErrors($validator)
                ->withInput();
        }

        $m = AdminUser::find($id);

        if($m != null)
        {
            $m->password = $request->password;
            $m->save();
        }

        return redirect('admin/adminuser');
    }



    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\AdminUser');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/adminuser');
        $this->crud->setEntityNameStrings('User', 'Users');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Name',
        ]);

        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email',
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

        $this->crud->addField([    // SELECT
            'name' => 'status',
            'label' => "Status",
            'type' => 'select2_from_array',
            'options' => ['1'=>'ACTIVE','0'=>'INACTIVE'],
            'allows_null' => false,
        ]);

        $this->crud->removeFields(['password','password_confirmation'], 'update');

        $this->crud->addButtonFromModelFunction('line', 'change_password',
            'changePassword', 'beginning');

        $this->crud->enableAjaxTable();

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
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
