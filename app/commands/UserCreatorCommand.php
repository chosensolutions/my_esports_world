<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;


class UserCreatorCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'user-create';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new user rapidly.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{

        //$ask = $this->ask('which email you wanna use bro>'); //arugments are not required
        $email = $this->argument('email');
        $username = $this->argument('username');
        $password = $this->argument('password');

        Sentry::createUser([
            'email' => $email,
            'username' => $username,
            'password' => Hash::make($password),
            'activated' => true,
        ]);

        $this->info('user created!');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
            array('email', InputArgument::REQUIRED, 'Desired Email.'),
			array('username', InputArgument::REQUIRED, 'Desired Username.'),
            array('password', InputArgument::REQUIRED, 'Desired Password.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
