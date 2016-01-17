<?php

namespace App\Acme\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profile
 * @package App\Acme\Models
 */
class Profile extends Model
{
    /**
     * @var string
     */
    protected $table = 'profiles';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experiences()
    {
        return $this->hasMany('App\Acme\Models\ProfileExperience');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function awards()
    {
        return $this->hasMany('App\Acme\Models\ProfileAward');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function educations()
    {
        return $this->hasMany('App\Acme\Models\ProfileEducation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function languages()
    {
        return $this->hasMany('App\Acme\Models\ProfileLanguage');
    }
}
