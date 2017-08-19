<?php

namespace App\Models\BCF;

use App\Models\Department;
use App\Models\Position;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

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


            $m->card_vertical = $request->card_vertical;
            $m->card_horizontal = $request->card_horizontal;
            $m->id_image = $request->id_image;
            $m->passport_image = $request->passport_image;
            $m->photo = $request->photo;

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


    public function setCardVerticalAttribute($value)
    {
        $attribute_name = "card_vertical";
        // if the image was erased
        if (($value==null && $this->id ==0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            // delete the image from disk
            if(File::exists($this->{$attribute_name})) File::delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            //dd(file_get_contents($value));
            $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
            Image::make(file_get_contents($value))->save("uploads/$filename");

            $this->attributes[$attribute_name] = "uploads/$filename";
        }
    }

    public function setCardHorizontalAttribute($value)
    {
        $attribute_name = "card_horizontal";
        // if the image was erased
        if (($value == null && $this->id == 0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            // delete the image from disk
            if (File::exists($this->{$attribute_name})) File::delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image')) {
            //dd(file_get_contents($value));
            $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
            Image::make(file_get_contents($value))->save("uploads/$filename");

            $this->attributes[$attribute_name] = "uploads/$filename";
        }
    }

    public function setIdImageAttribute($value)
    {
        $attribute_name = "id_image";
        // if the image was erased
        if (($value==null && $this->id ==0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            // delete the image from disk
            if(File::exists($this->{$attribute_name})) File::delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            //dd(file_get_contents($value));
            $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
            Image::make(file_get_contents($value))->save("uploads/$filename");

            $this->attributes[$attribute_name] = "uploads/$filename";
        }
    }


    public function setPassportImageAttribute($value)
    {
        $attribute_name = "passport_image";
        // if the image was erased
        if (($value==null && $this->id ==0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            // delete the image from disk
            if(File::exists($this->{$attribute_name})) File::delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            //dd(file_get_contents($value));
            $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
            Image::make(file_get_contents($value))->save("uploads/$filename");

            $this->attributes[$attribute_name] = "uploads/$filename";
        }
    }



    public function setPhotoAttribute($value)
    {
        $attribute_name = "photo";
        // if the image was erased
        if (($value==null && $this->id ==0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            // delete the image from disk
            if(File::exists($this->{$attribute_name})) File::delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            //dd(file_get_contents($value));
            $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
            Image::make(file_get_contents($value))->save("uploads/$filename");

            $this->attributes[$attribute_name] = "uploads/$filename";
        }
    }



    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            if(File::exists($obj->card_vertical)) File::delete($obj->card_vertical);
            if(File::exists($obj->card_horizontal)) File::delete($obj->card_horizontal);
            if(File::exists($obj->id_image)) File::delete($obj->id_image);
            if(File::exists($obj->passport_image)) File::delete($obj->passport_image);
            if(File::exists($obj->photo)) File::delete($obj->photo);

        });
    }




}
