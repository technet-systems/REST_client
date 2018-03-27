<?php

namespace Daru79\Service;

/**
 * Class Container is a wrapper for all app's service classes. Enables easy access to classes and their methods.
 *
 * @package Service
 */
class Container
{
    /**
     * @var array
     */
    private $configuration;

    /**
     * @var JsonDataStorage
     */
    private $jsonDataStorage;

    /**
     * @var RestClientProducer
     */
    private $restClientProducer;

    /**
     * Container constructor. The param is stored as an array in bootstrap.php file
     *
     * @param array $configuration
     */
    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return RestClientProducer
     */
    public function getRestClientProducer()
    {
        if ($this->restClientProducer === null) {
            $this->restClientProducer = new RestClientProducer($this->configuration['url'], $this->getJsonDataStorage()->fetchData(), $this->configuration['credentials']);
        }

        return $this->restClientProducer;
    }

    /**
     * @return JsonDataStorage
     */
    private function getJsonDataStorage()
    {
        if ($this->jsonDataStorage === null) {
            $this->jsonDataStorage = new JsonDataStorage($this->configuration['filePath']);
        }

        return $this->jsonDataStorage;
    }
}