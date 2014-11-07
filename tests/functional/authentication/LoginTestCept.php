<?php 

$I = new FunctionalTester($scenario);
$I->wantTo('Log an existing user in');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');

$I->sendPOST('users/login', [
	'email' => 'yichen@yichen.com',
	'password' => 'yichen'
]);

//$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();

//$I->seeResponseContainsJson(['login' => 'success']);