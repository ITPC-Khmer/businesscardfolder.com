<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
    // your CRUD resources and other admin routes here
    CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('article', 'ArticleCrudController');

    CRUD::resource('business_category', 'Business_categoryCrudController');
    CRUD::resource('business_type', 'Business_typeCrudController');
    CRUD::resource('business_function', 'Business_functionCrudController');
    CRUD::resource('business_intermediary', 'Business_intermediaryCrudController');

    CRUD::resource('country', 'CountryCrudController');
    CRUD::resource('province', 'ProvinceCrudController');
    CRUD::resource('district', 'DistrictCrudController');
    CRUD::resource('commune', 'CommuneCrudController');
    CRUD::resource('village', 'VillageCrudController');

    CRUD::resource('mobile', 'MobileCrudController');
    CRUD::resource('telephone', 'TelephoneCrudController');
    CRUD::resource('social_media', 'Social_mediaCrudController');
    CRUD::resource('mobile_network', 'Mobile_networkCrudController');

});