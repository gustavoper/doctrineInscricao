<?php
// Autoloader do Composer
$loader = require __DIR__ . "/vendor/autoload.php";
$loader->add('Inscricao', __DIR__ . "/src");

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

$isDevmode = false;

$paths = array(
    __DIR__ . "/src/Inscricao/Model"
);
$dbParams = array(
    "driver" => "pdo_mysql",
    "user" => "inscricao",
    "password" => "inscricao2015",
    "dbname" => "inscricao",
    "host"=>"localhost"
);

$config = Setup::createConfiguration($isDevmode);
$driver = new AnnotationDriver(new AnnotationReader(),$paths);
$config->setMetadataDriverImpl($driver);

AnnotationRegistry::registerFile(__DIR__."/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php");

$entityManager = EntityManager::create($dbParams, $config);
