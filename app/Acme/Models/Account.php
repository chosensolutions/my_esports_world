<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
