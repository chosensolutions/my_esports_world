<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileUpdateTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;

    public function setUp()
    {
        Parent::setUp();
        CreateWorld();
    }

    public function test_something()
    {
        $request = $this->put('api/v1/profiles/1', [
            'test' => 'test'
        ]);

        $request->seeJsonContains([
            'code' => 200,
        ]);
    }
}
