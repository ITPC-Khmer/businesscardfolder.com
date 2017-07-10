<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Email_company extends Model
{
    use CrudTrait;

    protected $table = 'email_companies';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['title', 'company_name','logo','website','prefix_account','description','status'];
    // protected $hidden = [];
    // protected $dates = [];


    public function setLogoAttribute($value)
    {
        $attribute_name = "logo";
        $disk = "public";

        // if the image was erased
        if (($value==null && $this->id ==0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            //dd($value);
            // delete the image from disk
            if(File::exists($this->logo)) File::delete($this->logo);

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
            if(File::exists($obj->logo)) File::delete($obj->logo);
        });
    }
}
