<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileShowTest extends TestCase
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
        CreateWorld();
    }

    public function test_shows_a_specific_profile_by_id()
    {
        $this->get('api/v1/profiles/1')->seeJson([
            'code' => 200,
        ]);

        $this->get('api/v1/profiles/2')->seeJson([
            'code' => 200,
        ]);
    }
}
