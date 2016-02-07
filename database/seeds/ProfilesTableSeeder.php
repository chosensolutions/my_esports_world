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
        $users = factory(App\User::class, 3)->create();

        foreach($users as $user)
        {

            $profile = factory(App\Acme\Models\Profile::class)->create([
                'user_id' => $user->id
            ]);

            factory(App\Acme\Models\ProfileExperience::class, 3)->create([
                'profile_id' => $profile->id
            ]);

            factory(App\Acme\Models\ProfileAward::class, 3)->create([
                'profile_id' => $profile->id
            ]);

            factory(App\Acme\Models\ProfileEducation::class, 3)->create([
                'profile_id' => $profile->id
            ]);

            factory(App\Acme\Models\ProfileLanguage::class, 3)->create([
                'profile_id' => $profile->id
            ]);
        }
    }
}
