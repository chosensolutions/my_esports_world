<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileAuthTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;

    public function setUp()
    {
        Parent::setUp();

        CreateWorld();
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_shows_the_current_auth_user_profile_account_info()
    {
        Auth::loginUsingId(1);
        $this->get('api/v1/profiles/auth')->seeJson([
            'code' => 200,
        ]);
    }
}
