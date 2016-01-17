<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Acme\Models\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 20) as $index)
        {
            Profile::create([
                'user_id' => $index,
                'email' => $faker->companyEmail
            ]);
        }
    }
}
