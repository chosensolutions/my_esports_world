<?php

function CreateWorld()
{
    // User
    $users = factory(App\User::class, 2)->create();

    foreach($users as $user)
    {
        // Account
        factory(App\Acme\Models\Account::class)->create([
            'user_id' => $user->id
        ]);

        // Summoner
        factory(App\Acme\Models\Summoner::class)->create([
            'user_id' => $user->id
        ]);

        // Video
        factory(App\Acme\Models\Video::class)->create([
            'user_id' => $user->id
        ]);

        // Profile
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
