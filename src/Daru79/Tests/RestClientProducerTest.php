<?php

namespace Daru79\Tests;

use Daru79\Service\Container;

class RestClientProducerTest extends \PHPUnit_Framework_TestCase
{
    private $configuration = [
        'url'           => 'http://grzegorz.demos.i-sklep.pl/rest_api/shop_api/v1/producers',
        'filePath'      => __DIR__.'/res/producers.json',
        'credentials'   => 'rest:vKTUeyrt'
    ];

    public function testPOST()
    {
        $container = new Container($this->configuration);

        //$list = $container->getRestClientProducer()->listAll();
        $create = $container->getRestClientProducer()->createOne();

        $this->assertArrayHasKey('success', $create);
    }
}