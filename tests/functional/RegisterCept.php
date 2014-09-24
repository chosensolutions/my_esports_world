<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('register for an account');

$I->amOnRoute('home');
$I->click('Register');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username', 'yichen');
$I->fillField('Email', 'yichen@yichen.com');
$I->fillField('Password', 'password');
$I->fillField('Password Confirmation', 'password');

$I->click('Register', 'input[type=submit]');
//$I->seeInCurrentUrl('/home');
//$I->see('Home Page', 'h1');

$I->seeRecord('users', [
    'email' => 'yichen@yichen.com'
]);

//$I->assertTrue(Sentry::check());