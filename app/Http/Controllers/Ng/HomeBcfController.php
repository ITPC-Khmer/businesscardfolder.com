<?php

namespace App\Http\Controllers\Ng;

use App\Ng\HomeBcf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeBcfController extends Controller
{
    function getCompany(Request $request){
        return HomeBcf::getCompany(10,$request);
    }

    function getCompany2(Request $request){
        return HomeBcf::getCompany(20,$request);
    }

    function getItem(Request $request){
        return HomeBcf::getItems(10,$request);
    }

}
