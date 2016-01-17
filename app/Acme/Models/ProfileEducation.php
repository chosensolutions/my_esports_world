<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileEducation extends Model
{
    protected $table = 'profile_educations';

    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo('App\Acme\Models\Profile');
    }
}
