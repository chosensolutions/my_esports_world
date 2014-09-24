<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MigrateSentryCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'migrate:sentry';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Migrates the Sentry --package=cartalyst/sentry';

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
        $this->call('migrate', array('--package' => 'cartalyst/sentry', '--force' => true));

        $this->info('done migrating');
	}

}
