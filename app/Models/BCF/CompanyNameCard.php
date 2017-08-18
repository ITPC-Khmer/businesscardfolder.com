<?php

namespace App\Models\BCF;

use App\Models\Department;
use App\Models\Position;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class CompanyNameCard extends Model
{
    use CrudTrait;

    protected $table = 'company_name_cards';

    protected $appends = ['department','position'];

    public static function saveData($request)
    {
        $member_id =  getMember2ID();

        if($member_id > 0) {

            $id = $request->id;
            $m = $id > 0 ? self::where('member_id', $member_id)->where('id',$id)->first() : new CompanyNameCard();

            if ($m == null && $id > 0 ) { return null;  }

            $m->member_id = $member_id;

            //get company id
            $mc = Company::where('member_id', $member_id)->first();

            if ($mc != null ) {
                $m->company_id = $mc->id;
            } else {
                return null;
            }


            $m->id_number = $request->id_number;
            $m->passport_number = $request->passport_number;
            $m->given_name = $request->given_name;
            $m->family_name = $request->family_name;
            $m->married_status = $request->married_status;
            $m->sex = $request->sex;
            $m->department_id = $request->department_id;
            $m->position_id = $request->position_id;

            $m->mobile_number = json_encode($request->mobile_number);
            $m->telephone_number = json_encode($request->telephone_number);
            $m->email = json_encode($request->email);

            $m->fax = $request->fax;
            $m->website = $request->website;

            $m->social_media = json_encode($request->social_media);
            $m->mobile_network = json_encode($request->mobile_network);

            $m->card_vertical = $request->card_vertical;
            $m->card_horizontal = $request->card_horizontal;

            $m->id_image = $request->id_image;
            $m->passport_image = $request->passport_image;
            $m->photo = $request->photo;
            $m->status = $request->status;

            return $m->save() ? $m : null;
        }else{
            return null;
        }

    }

    public function getDepartmentAttribute()
    {
       return Department::getTitle($this->department_id);
    }

    public function getPositionAttribute()
    {
        return Position::getTitle($this->position_id);
    }

}
