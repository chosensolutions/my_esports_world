<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileLanguage extends Model
{
    protected $table = 'profile_languages';

    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo('App\Acme\Models\Profile');
    }
}
