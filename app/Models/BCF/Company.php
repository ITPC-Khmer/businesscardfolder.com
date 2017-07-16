<?php

namespace App\Models\BCF;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public static function saveData($request)
    {
        $id = $request->id;
        $m = $id > 0 ? self::find($id) : new Company();
        $m->member_id = getMember2ID();
        $m->official_name = $request->official_name;

        $m->business_type_json = json_encode($request->business_type_json);

        //dd($m->business_type_json);

        $business_category_id = [];
        $business_type_id = [];
        $business_function_id = [];
        $business_intermediary_id = [];

       if(count($request->business_type_json)>0)
        {

            foreach ($request->business_type_json as $bs)
            {
                $business_category_id[$bs['business_category_id']] = $bs['business_category_id'];

                foreach ($bs['business_type_id'] as $bt)
                {
                    $business_type_id[$bt['bt']] = $bt['bt'];
                    foreach ($bt['business_function_id'] as $bf)
                    {
                        $business_function_id[$bf] = $bf;
                    }

                    foreach ($bt['business_intermediary_id'] as $bi)
                    {
                        $business_intermediary_id[$bi] = $bi;
                    }

                }
            }


        }

        $m->business_category_id = json_encode($business_category_id) ;
        $m->business_type_id = json_encode($business_type_id) ;
        $m->business_function_id = json_encode($business_function_id) ;
        $m->business_intermediary_id = json_encode($business_intermediary_id) ;


        return $m->save() ? $m : null;


    }

}

