<?php

namespace App\Models\BCF;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Eloquent\Model;

class CompanyNameCard extends Model
{
    protected $table = 'company_name_cards';

    protected $appends = ['department','position'];

    public static function saveData($request)
    {

        $id = $request->id;
        $m = $id > 0 ? self::find($id) : new Company();
        $m->member_id = getMember2ID();

        $m->company_id = $request->company_id;
        $m->id_number = $request->id_number;
        $m->passport_number = $request->passport_number;
        $m->given_name = $request->given_name;
        $m->family_name = $request->family_name;
        $m->married_status = $request->married_status;
        $m->sex = $request->sex;
        $m->department_id = $request->department_id;
        $m->position_id = $request->position_id;

        $m->mobile_number = json_decode($request->mobile_number);
        $m->telephone_number = json_decode($request->telephone_number);
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
