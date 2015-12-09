<?php


$I = new \AcceptanceTester($scenario);
$I->wantTo("Create User named Joao");

$I->persistEntity(new \Entity\User, array('name' => 'Miles'));
$I->persistEntity($user, array('name' => 'Miles'));





?>