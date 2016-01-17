<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Acme\Models\Account;

class AccountsTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Account::create([
				'user_id' => $index,
                'username' => $faker->name,
                'phone_number' => $faker->phoneNumber,
			]);
		}
	}
}