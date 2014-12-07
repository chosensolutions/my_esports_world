<?php namespace Acme\Modules\User\Commands\Register;

use Acme\Modules\User\Repositories\UserRepositoryInterface;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class RegisterUserCommandHandler implements CommandHandler{

    // use FireEventsTrait;
    // use DispatchableTrait;

    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        // fire events BEFORE the actual command occurs
        //$this->fireBeforeEvents([]);

        // manipulate the input
        $input = [
            'email' => $command->email,
            'password' => $command->password
        ];

        // store it in the database
        //$user = $this->userRepository->register($input);

        // sends an email to the user
        var_dump('handle the actual action');

        // fire the events that should occur after
        //$this->fireAfterEvents([]);

        //return $user;
    }

}