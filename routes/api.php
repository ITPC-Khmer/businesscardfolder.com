<?php

use Illuminate\Http\Request;


Route::middleware('jsonp')->post('/jsonp',function (Request $request){
    $data[] = [
        'id' => $request->id,
        'name' => $request->name,
        'sex' => $request->sex
    ];
    $data[] = [
        'id' => $request->id,
        'name' => $request->name,
        'sex' => $request->sex
    ];
    $data[] = [
        'id' => $request->id,
        'name' => $request->name,
        'sex' => $request->sex
    ];

    return response()->json($data);

});


Route::middleware('cors')->get('/xyz',function (){
    $arr = [
        ['id' =>1,'name' => 'dara','sex' => 'M', 'contact' => ['phone'=>'012 258 963','address'=>'PP'] ],
        ['id' =>2,'name' => 'bona','sex' => 'F', 'contact' => ['phone'=>'012 951 741','address'=>'PP'] ],
        ['id' =>3,'name' => 'tata','sex' => 'M', 'contact' => ['phone'=>'012 852 963','address'=>'BB'] ],
        ['id' =>4,'name' => 'nita','sex' => 'M', 'contact' => ['phone'=>'012 258 874','address'=>'PP'] ],
        ['id' =>5,'name' => 'tata','sex' => 'F', 'contact' => ['phone'=>'012 258 321','address'=>'PP'] ],
        ['id' =>6,'name' => 'rara','sex' => 'M', 'contact' => ['phone'=>'012 547 963','address'=>'BB'] ],
    ];
    return response()->json($arr);
});

Route::get('x',function (){
    return 'trest';
});


Route::middleware('cors')->post('/post-student',function (Request $request){
    $data[] = [
        'id' => $request->id,
        'name' => $request->name,
        'sex' => $request->sex
    ];
    $data[] = [
        'id' => $request->id,
        'name' => $request->name,
        'sex' => $request->sex
    ];
    $data[] = [
        'id' => $request->id,
        'name' => $request->name,
        'sex' => $request->sex
    ];

    return response()->json($data);

});

















Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bcf-category', 'Api\CompanyApiController@getCategoryAjax');
Route::get('/bcf-category-type', 'Api\CompanyApiController@getCategoryTypeAjax');
Route::get('/bcf-function', 'Api\CompanyApiController@getFunctionAjax');
Route::get('/bcf-intermediary', 'Api\CompanyApiController@getIntermediaryAjax');


Route::get('/bcf-get-address', 'Api\CompanyApiController@getAddressAjax');


Route::get('/bcf-get-department', 'Api\CompanyApiController@getDepartmentAjax');
Route::get('/bcf-get-position', 'Api\CompanyApiController@getPositionAjax');
