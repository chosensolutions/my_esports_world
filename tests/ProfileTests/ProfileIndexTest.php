<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileIndexTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;

    public function setUp()
    {
        Parent::setUp();

        //CreateWorld();
    }

    public function test_it_shows_all_profiles()
    {
        $this->get('api/v1/profiles')->seeJson([
            'code' => 200,
        ]);
    }
}
