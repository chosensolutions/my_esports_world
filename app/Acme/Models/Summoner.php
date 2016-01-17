<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

class Summoner extends Model
{
    protected $table = 'summoners';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
