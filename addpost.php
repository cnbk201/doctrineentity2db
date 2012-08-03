<?php

require_once 'bootstrap.php';

$id = 2;
$user = $entityManager->find("User", $id);


$post = new Post($user);

$post->setTitle('first post title');
$post->setBody('first post body');

$post->addComment("First..");
$post->addComment("Second!");

$entityManager->persist($post);

$entityManager->flush();

