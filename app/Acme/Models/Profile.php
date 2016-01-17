<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function educations()
    {
        return $this->hasMany('App\Acme\Models\ProfileEducation');
    }

    public function languages()
    {
        return $this->hasMany('App\Acme\Models\ProfileLanguage');
    }
}
