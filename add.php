<?php

require_once 'bootstrap.php';

$user = new User();
$user->setName('amir');
$entityManager->persist($user);
$entityManager->flush();