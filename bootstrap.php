<?php
use Doctrine\ORM\Tools\Setup;

require_once "entities/Comment.php";
require_once "entities/Post.php";
require_once "entities/User.php";

if (!class_exists("Doctrine\Common\Version", false)) {
    
    
    // See :doc:`Configuration <../reference/configuration>` for up to date autoloading details.
	// use Doctrine\ORM\Tools\Setup;

	require_once "Doctrine/ORM/Tools/Setup.php";
	Setup::registerAutoloadPEAR();

	// Create a simple "default" Doctrine ORM configuration for XML Mapping
	$isDevMode = true;
	//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/xml"), $isDevMode);
	// or if you prefer annotations
	$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/entities"), $isDevMode);
	// or if you prefer yaml 
	//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/yaml"), $isDevMode);

	// database configuration parameters
	//~ $conn = array(
		//~ 'driver' => 'pdo_sqlite',
		//~ 'path' => __DIR__ . '/db.sqlite',
	//~ );


	$conn = array(
		'driver' => 'pdo_mysql',
		'host' => 'localhost',
		'dbname' => 'tests',
		'user' => 'root',
		'password' => 'root',
	);


	// obtaining the entity manager
	$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
    
}
