<?php 

$I = new FunctionalTester($scenario);
$I->wantTo('Register a new user');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');

$I->sendPOST('users/register', [
	'username' => 'davert', 
	'email' => 'davert@codeception.com',
	'password' => 'password'
]);

$I->seeInDatabase('users', ['email' => 'davert@codeception.com']);

//$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
//$I->seeResponseContains('{"result":"ok"}');