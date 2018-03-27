<?php

require_once 'bootstrap.php';

use Daru79\Service\Container;

header('Content-Type: application/json');

$container = new Container($configuration);

$list = $container->getRestClientProducer()->listAll();
$create = $container->getRestClientProducer()->createOne();

/**
 * Uncomment to perform the proper action
 */
//var_dump($create);
//var_dump($list);