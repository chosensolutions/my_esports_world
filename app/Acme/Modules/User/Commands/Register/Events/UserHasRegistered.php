<?php namespace Acme\Modules\User\Commands\Register\Events;

class UserHasRegistered {

    public $user;

    function __construct($user)
    {
        $this->user = $user;
    }

} 