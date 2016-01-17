<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

class Summoner extends Model
{
    protected $table = 'profile_summoners';

    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo('App\Acme\Models\Profile');
    }
}
