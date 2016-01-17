<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;
use App\User;
use App\Acme\Models\Profile;

class ProfileTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;

    /**
     * Setup:
     * 1. Migrate the database
     * 2. Set mail to not send
     * 3. Set the Test Dummy Factory
     */
    public function setUp()
    {
        Parent::setUp();
        //Artisan::call('migrate');
        //$this->artisan('db:seed');

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

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_it_shows_all_profiles()
    {
        $this->get('api/v1/profiles')->seeJson([
            'code' => 200,
        ]);
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_shows_a_specific_profile_by_id()
    {
        $this->get('api/v1/profiles/1')->seeJson([
            'code' => 200,
        ]);
    }
}
