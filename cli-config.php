<?php 

require_once 'bootstrap.php';

$helperSetParams = array(

    "db"=>new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($entityManager->getConnection()),
    "em"=>new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
    
);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet($helperSetParams);

return $helperSet;