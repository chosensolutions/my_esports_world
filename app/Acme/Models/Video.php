<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
