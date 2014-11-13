<?php namespace Acme\Modules\User\Repositories;

use Acme\Modules\User\Commands\Register\Events\UserHasRegistered;
use Laracasts\Commander\Events\EventGenerator;
use User;

class EloquentUserRepository implements UserRepositoryInterface {

    use EventGenerator;

    protected $userModel;

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function create($input)
    {
        $instance = $this->userModel->create($input);

        $this->raise(new UserHasRegistered($instance));

        //return $instance;
    }
}