<?php namespace Acme\Modules\User\Commands\Register;

use Acme\Modules\User\Repositories\UserRepositoryInterface;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class RegisterUserCommandHandler implements CommandHandler{

    use DispatchableTrait;

    protected $userRepository;

    function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Registering a user will:
     * 1. store the user in the database
     * 2. send a welcome email to the user
     * 3. add the user to the mailing list
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $input = [
            'email' => $command->email,
            'password' => $command->password
        ];

        $user = $this->userRepository->create($input);

        // sends an email to the user
        var_dump('handle the actual action');

        $this->dispatchEventsFor($user);

        return $user;
    }

}