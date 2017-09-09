<?php

namespace App\Models\BCF;

use App\Helpers\Glb;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CompanyJson extends Model
{
    protected $table = 'companies';

    protected $casts = [
        'mobile_number' => 'array',
        'telephone_number' => 'array',
        'mobile_network' => 'array',
        'email' => 'array',
        'social_media' => 'array',
        'working_hours' => 'array',

    ];


/*    // The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->title;
    }
*/

    public function getLogoVerticalAttribute($value)
    {
        return url("img/cache/img300x300/".Glb::get_basename($value));
    }

    public function getLogoHorizontalAttribute($value)
    {
        return url("img/cache/img300x300/".Glb::get_basename($value));
    }

    public function getCompanyViewAttribute($value)
    {
        return url("img/cache/img300x300/".Glb::get_basename($value));
    }

    public function getLandmarkAttribute($value)
    {
        return url("img/cache/img300x300/".Glb::get_basename($value));
    }


    public function items()
    {
        return $this->hasMany('App\Models\Items');
    }

    public function advertise()
    {
        return $this->hasMany('App\Models\Advertise');
    }



}

