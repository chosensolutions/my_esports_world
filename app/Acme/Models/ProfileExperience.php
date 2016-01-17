<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileExperience extends Model
{
    protected $table = 'profile_experiences';

    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo('App\Acme\Models\Profile');
    }
}
