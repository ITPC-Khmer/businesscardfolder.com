<?php

namespace App\Http\Controllers\Api;

use App\Models\Business_category;
use App\Models\Business_function;
use App\Models\Business_intermediary;
use App\Models\Business_type;
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


}
