<?php

namespace App\Http\Controllers\Api;

use App\Models\Business_category;
use App\Models\Business_function;
use App\Models\Business_intermediary;
use App\Models\Business_type;
use App\Models\Commune;
use App\Models\Country;
use App\Models\Department;
use App\Models\District;
use App\Models\Position;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyApiController extends Controller
{
    function getCategoryAjax(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term)
        {
            $results = Business_category::where('title', 'LIKE', '%'.$search_term.'%')->paginate(10);
        }
        else
        {
            $results = Business_category::paginate(10);
        }

        return $results;
    }

    function getAddressAjax(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');
        $ref = $request->input('ref');
        $select_type = $request->input('select_type');

        $results = [];

        if($select_type == 'country'){
            if ($search_term)
            {
                $results = Country::where('title', 'LIKE', '%'.$search_term.'%')->paginate(50);
            }
            else
            {
                $results = Country::paginate(50);
            }

        }
        elseif($select_type == 'province'){
            if ($search_term)
            {
                $results = Province::where('title', 'LIKE', '%'.$search_term.'%')->where('country_id',$ref)->paginate(10);
            }
            else
            {
                $results = Province::where('country_id',$ref)->paginate(10);
            }
        }
        elseif($select_type == 'district'){
            if ($search_term)
            {
                $results = District::where('title', 'LIKE', '%'.$search_term.'%')->where('province_id',$ref)->paginate(10);
            }
            else
            {
                $results = District::where('province_id',$ref)->paginate(10);
            }
        }
        elseif($select_type == 'commune'){
            if ($search_term)
            {
                $results = Commune::where('title', 'LIKE', '%'.$search_term.'%')->where('district_id',$ref)->paginate(10);
            }
            else
            {
                $results = Commune::where('district_id',$ref)->paginate(10);
            }
        }

        return $results;
    }



    function getFunctionAjax(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term)
        {
            $results = Business_function::where('title', 'LIKE', '%'.$search_term.'%')->paginate(10);
        }
        else
        {
            $results = Business_function::paginate(10);
        }

        return $results;
    }

    function getIntermediaryAjax(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term)
        {
            $results = Business_intermediary::where('title', 'LIKE', '%'.$search_term.'%')->paginate(10);
        }
        else
        {
            $results = Business_intermediary::paginate(10);
        }

        return $results;
    }

    function getCategoryTypeAjax(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');
        $business_category_id = $request->input('category');

        if ($search_term)
        {
            $results = Business_type::where('business_category_id',$business_category_id)
                ->where('title', 'LIKE', '%'.$search_term.'%')->paginate(10);
        }
        else
        {
            $results = Business_type::where('business_category_id',$business_category_id)->paginate(10);
        }

        return $results;
    }

    function getDepartmentAjax(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term)
        {
            $results = Department::where('title', 'LIKE', '%'.$search_term.'%')->paginate(100);
        }
        else
        {
            $results = Department::paginate(100);
        }

        return $results;
    }

    function getPositionAjax(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');
        $department_id = $request->input('department_id');

        if ($search_term)
        {
            $results = Position::where('department_id',$department_id)
                ->where('title', 'LIKE', '%'.$search_term.'%')->paginate(100);
        }
        else
        {
            $results = Position::where('department_id',$department_id)->paginate(100);
        }

        return $results;
    }



}
