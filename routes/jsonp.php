<?php

Route::get('/xxx',function (Request $request){
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

Route::get('get-company','Ng\HomeBcfController@getCompany');
Route::get('get-company2','Ng\HomeBcfController@getCompany2');

Route::get('get-item','Ng\HomeBcfController@getItem');