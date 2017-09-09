<?php

namespace App\Ng;

use App\Models\BCF\CompanyNameCard;
use App\Models\BCF\CompanyJson;
use App\Models\Items;
use Illuminate\Database\Eloquent\Model;

class HomeBcf extends Model
{
    public static function getCompany( $limit = 12,$request)
    {
        $q = $request->q;

        $m = CompanyJson::orderBy('id','DESC');

        if($q != null){
            $m->where('status','ACTIVE')
                ->orWhere(function ($query) use ($q){
                    $query->where('member_id','like',"%{$q}%")
                        ->orWhere('business_type_json','like',"%{$q}%")
                        ->orWhere('official_name','like',"%{$q}%")
                        ->orWhere('non_official_name','like',"%{$q}%")
                        ->orWhere('moc_certificate','like',"%{$q}%")
                        ->orWhere('vat_tin_number','like',"%{$q}%")
                        ->orWhere('patent_license_number','like',"%{$q}%")
                        ->orWhere('mobile_number','like',"%{$q}%")
                        ->orWhere('telephone_number','like',"%{$q}%")
                        ->orWhere('email','like',"%{$q}%")
                        ->orWhere('website','like',"%{$q}%")
                        ->orWhere('social_media','like',"%{$q}%")
                        ->orWhere('mobile_network','like',"%{$q}%");
                });
        }

        return $m->paginate($limit)->appends(['q'=>$q]);

    }

    public static function getNameCard( $limit = 12,$request)
    {
        $q = $request->q;

        $m = CompanyNameCard::orderBy('id','DESC');

        if($q != null){
            $m->where('status','ACTIVE')
                ->orWhere(function ($query) use ($q){
                    $query->where('member_id','like',"%{$q}%")
                        ->orWhere('id_number','like',"%{$q}%")
                        ->orWhere('passport_number','like',"%{$q}%")
                        ->orWhere('given_name','like',"%{$q}%")
                        ->orWhere('family_name','like',"%{$q}%")
                        ->orWhere('married_status','like',"%{$q}%")
                        ->orWhere('sex','like',"%{$q}%")
                        ->orWhere('mobile_number','like',"%{$q}%")
                        ->orWhere('telephone_number','like',"%{$q}%")
                        ->orWhere('email','like',"%{$q}%")
                        ->orWhere('social_media','like',"%{$q}%")
                        ->orWhere('mobile_network','like',"%{$q}%");
                });
        }

        return $m->paginate($limit)->appends(['q'=>$q]);

    }

    public static function getItems( $limit = 12,$request)
    {
        $q = $request->q;

        $m = Items::orderBy('id','DESC');

        if($q != null){
            $m->where('status','ACTIVE')
                ->orWhere(function ($query) use ($q){
                    $query->where('member_id','like',"%{$q}%")
                        ->orWhere('title','like',"%{$q}%")
                        ->orWhere('slug','like',"%{$q}%")
                        ->orWhere('content','like',"%{$q}%")
                        ->orWhere('item_type','like',"%{$q}%")
                        ->orWhere('condition','like',"%{$q}%");
                });
        }

        return $m->paginate($limit)->appends(['q'=>$q]);

    }

}
