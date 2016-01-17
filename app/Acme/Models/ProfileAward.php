<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileAward extends Model
{
    protected $table = 'profile_awards';

    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo('App\Acme\Models\Profile');
    }
}
