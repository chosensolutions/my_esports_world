<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;

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
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_it_does_something()
    {
        \App\User::create(['email' => 'a@a.com1']);
        $this->seeInDatabase('users', [
            'email' => 'a@a.com1'
        ]);
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_it_does_something_also()
    {
        \App\User::create(['email' => 'a@a.com1']);
        $this->seeInDatabase('users', [
            'email' => 'a@a.com1'
        ]);
    }

}
