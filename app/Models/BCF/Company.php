<?php

namespace App\Models\BCF;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Company extends Model
{
    protected $table = 'companies';

    public static function headOfficeBusinessCardSave($request)
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

    public static function headOfficeBusinessDocumentUploadSave($request)
    {
        $id = $request->id;
        $m = $id > 0 ? self::find($id) : new Company();
        $m->member_id = getMember2ID();
        
        $m->logo_vertical = $request->logo_vertical;
        $m->logo_horizontal = $request->logo_horizontal;
        $m->company_view = $request->company_view;
        $m->landmark = $request->landmark;
        $m->patent = $request->patent;
        $m->vatin = $request->vatin;
        $m->working_room = $request->working_room;
        $m->meeting_room = $request->meeting_room;

        return $m->save() ? $m : null;

    }

    public function setLogoVerticalAttribute($value)
    {
        $attribute_name = "logo_vertical";
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

    public function setLogoHorizontalAttribute($value)
    {
        $attribute_name = "logo_horizontal";
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

    public function setCompanyViewAttribute($value)
    {
        $attribute_name = "company_view";
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

    public function setLandmarkAttribute($value)
    {
        $attribute_name = "landmark";
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

    public function setPatentAttribute($value)
    {
        $attribute_name = "patent";
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

    public function setVatinAttribute($value)
    {
        $attribute_name = "vatin";
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

    public function setWorkingRoomAttribute($value)
    {
        $attribute_name = "working_room";
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

    public function setMeetingRoomAttribute($value)
    {
        $attribute_name = "meeting_room";
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
            if(File::exists($obj->logo_vertical)) File::delete($obj->logo_vertical);
            if(File::exists($obj->logo_horizontal)) File::delete($obj->logo_horizontal);
            if(File::exists($obj->company_view)) File::delete($obj->company_view);
            if(File::exists($obj->landmark)) File::delete($obj->landmark);
            if(File::exists($obj->patent)) File::delete($obj->patent);
            if(File::exists($obj->vatin)) File::delete($obj->vatin);
            if(File::exists($obj->working_room)) File::delete($obj->working_room);
            if(File::exists($obj->meeting_room)) File::delete($obj->meeting_room);
        });
    }

}

