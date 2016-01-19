<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;
use App\User;
use App\Acme\Models\Profile;

class RegisterUserTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;

    public function setUp()
    {
        Parent::setUp();
    }

    public function test_registering_the_user_with_email_and_password()
    {
        $request = $this->post('/api/v1/users/register', [
            'auth_type' => 'normal',
            'email' => 'something@asdasd.com1111',
            'password' => 'password11111'
        ]);

        $request->seeJsonContains([
            'code' => 201
        ]);

        $this->see('users', [
            'email' => 'something@asdasd.com1111',
            'password' => 'password11111'
        ]);
    }
}
