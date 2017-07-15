<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bcf-category', 'Api\CompanyApiController@getCategoryAjax');
Route::get('/bcf-category-type', 'Api\CompanyApiController@getCategoryTypeAjax');
Route::get('/bcf-function', 'Api\CompanyApiController@getFunctionAjax');
Route::get('/bcf-intermediary', 'Api\CompanyApiController@getIntermediaryAjax');
