<?php

namespace App\Models;

use App\Models\BCF\Company;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Adv extends Model
{
    use CrudTrait;

    protected $table = 'advertises';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['member_id','company_id','title','description','adv_type','adv_location','image','adv_status','status','adv_page_order','adv_page_rank','adv_view','adv_click'];


    public function company()
    {
        return $this->belongsTo('App\Models\BCF\Company','company_id');
    }

    public function members()
    {
        return $this->belongsTo('App\Models\Member','member_id');
    }

    public function setMemberIdAttribute($values)
    {
        $this->attributes['member_id'] = getMember2ID();
    }

    public function setCompanyIdAttribute($values)
    {
        $member_id = getMember2ID();

        $m = Company::where('member_id',$member_id)->first();

        if($m != null){
            $this->attributes['company_id'] = $m->id;
        }else{
            $this->attributes['company_id'] = 0;
        }

    }


    public function setImageAttribute($values)
    {

        $attribute_name = "image";

        $att = [];

        if(isset($values['n'])) {

            if (count($values['n']) > 0) {

                foreach ($values['n'] as $value) {
                    // if the image was erased
                    /*if (($value == null && $this->id == 0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

                        // delete the image from disk
                        if (File::exists($this->image)) File::delete($this->image);

                        // set null in the database column
                        $this->attributes[$attribute_name] = null;
                    }*/

                    // if a base64 was sent, store it in the db
                    if (starts_with($value, 'data:image')) {
                        //dd(file_get_contents($value));
                        $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
                        Image::make(file_get_contents($value))->save("uploads/$filename");

                        $att[] = "uploads/$filename";
                    }
                }


            }

        }

        if(isset($values['e'])) {
            foreach ($values['e'] as $value) {
                // if a base64 was sent, store it in the db
                if (starts_with($value, 'data:image')) {
                    //dd(file_get_contents($value));
                    $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
                    Image::make(file_get_contents($value))->save("uploads/$filename");

                    $att[] = "uploads/$filename";
                }else {
                    if($value != '') {
                        $att[] = $value;
                    }
                }
            }
        }


        $this->attributes[$attribute_name] = json_encode($att);

    }


    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            //\Storage::disk('public_folder')->delete($obj->image);
            $f = json_decode($obj->image,true);

            if(count($f)) {
                foreach ($f as $fv){
                    if (File::exists($fv)) File::delete($fv);
                }

            }


        });
    }



}
