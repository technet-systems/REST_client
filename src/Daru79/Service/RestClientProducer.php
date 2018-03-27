<?php

namespace Daru79\Service;

/**
 * Class RestClientProducer to POST and GET representation of data
 *
 * @package Service
 */
class RestClientProducer extends AbstractRestClient
{
    /**
     * RestClientProducer constructor. Url and credentials are stored in an array located in bootstrap.php, data is
     * provided via DataStorageInterface
     *
     * @param $url
     * @param array $data
     * @param $credentials
     */
    public function __construct($url, array $data, $credentials)
    {
        parent::__construct($url, $data, $credentials);
    }

    /**
     * @return array
     */
    public function createOne()
    {
        return $this->CallAPI('POST');
    }

    /**
     * @return array
     */
    public function listAll()
    {
        return$this->CallAPI('GET');
    }
}