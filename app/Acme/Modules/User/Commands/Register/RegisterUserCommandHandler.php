<?php namespace Acme\Modules\User;

use Acme\Modules\User\Repositories\UserRepositoryInterface;
use Laracasts\Commander\CommandHandler;

class RegisterUserCommandHandler implements CommandHandler{

    protected $userRepository;

    function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        // TODO: Implement handle() method.
    }

}