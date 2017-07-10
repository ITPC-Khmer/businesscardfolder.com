<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class Member extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'members';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['role_id','name','username','email','phone','password','confirmation_code','photo','status'];
    // protected $hidden = [];
    // protected $dates = [];

    public function getBusinessFormWithLink()
    {
        return '<a href="'.url('bcf/'.create_code_number( $this->id)).'">'.create_code_number($this->id).'</a>';

    }


    public function setPasswordAttribute($value)
    {

        $this->attributes['password'] = ($value == '' || $value == null ) ? $this->password : Hash::make($value);
    }

    public function setPhotoAttribute($value)
    {
        $attribute_name = "photo";
        $disk = "public";

        // if the image was erased
        if (($value==null && $this->id ==0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            //dd($value);
            // delete the image from disk
            if(File::exists($this->photo)) File::delete($this->photo);

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
            //\Storage::disk('public_folder')->delete($obj->image);
            if(File::exists($obj->photo)) File::delete($obj->photo);
        });
    }
}
