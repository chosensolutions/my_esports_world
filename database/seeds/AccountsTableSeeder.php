<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AccountsTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Account::create([
				'user_id' => $index,
                'management_news' => $faker->boolean(),
                'payquad_news' => $faker->boolean(),
                'reminders' => $faker->boolean(),
                'payment_processes' => $faker->boolean()
			]);
		}
	}
}