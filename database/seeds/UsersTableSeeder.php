<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach(range(1, 20) as $index)
        {
            $user = User::create([
                'email' => $faker->email,
                'facebook_id' => $index,
                'twitter_id' => $index,
                'password' => bcrypt(str_random(10)),
                'remember_token' => str_random(10),
            ]);
            $profile = $user->profile()->save(factory(App\Acme\Models\Profile::class)->make());

            $profile_education = $profile->education()->create([
                'profile_id' => $profile->id,
                'institution' => $faker->company
            ]);
        }
    }
}
