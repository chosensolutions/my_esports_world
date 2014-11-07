<?php

use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Profile::create([
                'user_id' => $index,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'in_game_name' => $faker->name,
                'age' => $faker->numberBetween(1, 100),
                'gender' => $faker->boolean(),
                'phone' => $faker->phoneNumber,
                'email' => $faker->email
			]);
		}
	}

}