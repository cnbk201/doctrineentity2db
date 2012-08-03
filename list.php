<?php

// list_bugs_array.php
require_once "bootstrap.php";

$dql = "SELECT u, p, c FROM Post p  JOIN p.author u ".
		 "JOIN p.comments c";
$query = $entityManager->createQuery($dql);
$bugs = $query->getArrayResult();

foreach ($bugs AS $bug) {
    print_r($bug);
    echo "\n";
}