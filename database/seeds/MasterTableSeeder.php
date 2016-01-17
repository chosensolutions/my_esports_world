<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;

class MasterTableSeeder extends Seeder
{
    /*
     * SCHEMA
     * ===============
     * User
     *  Profile
     *      ProfileEducation
     *      ProfileLanguage
     *  Account
     */

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
            echo "User $user->id \n";

            $account = $user->account()->create([
                'user_id' => $user->id,
                'username' => $faker->name,
                'phone_number' => $faker->phoneNumber
            ]);
            echo "Account $account->id \n";

            $profile = $user->profile()->create([
                'user_id' => $user->id,
                'first_name' => $faker->firstName
            ]);
            echo "Profile $profile->id \n";

            foreach(range(1, 3) as $index)
            {
                $profile_education = $profile->educations()->create([
                    'profile_id' => $profile->id,
                    'institution' => $faker->company
                ]);
                echo "Profile Education $profile_education->id \n";

                $profile_language = $profile->languages()->create([
                    'profile_id' => $profile->id,
                    'type' => $faker->languageCode,
                    'fluency' => $faker->languageCode
                ]);
                echo "Profile Language $profile_language->id \n";
            }

            echo "------------------------- \n";
        }
    }
}
