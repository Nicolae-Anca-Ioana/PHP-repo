<?php

// bootstrap.php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once __DIR__ . "/vendor/autoload.php";

//Configuration connection:
$connectionParams = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => 'Sco@l@it123',
    'dbname' => 'national-03-anca-doctrine'
];

$paths = array(__DIR__."/src/Entities");
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

//$config = ORMSetup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false );
$config = ORMSetup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader );

$conn = DriverManager::getConnection($connectionParams);

$entityManager = EntityManager::create($conn, $config);

//public function fromArray($data) {
//    foreach ($data as $key => $value) {
//        $this->$key = $value;
//    }
//}
//
//public function toArray() : array {
//    return get_object_vars($this);
//}

session_start();

