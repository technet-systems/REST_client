<?php

namespace Daru79\Service;

/**
 * Class JsonDataStorage used to receive data from a json file and return an array
 *
 * @package Service
 */
class JsonDataStorage implements DataStorageInterface
{
    /**
     * @var string Path to json file
     */
    private $jsonFilePath;

    /**
     * JsonDataStorage constructor.
     *
     * @param string $jsonFilePath
     */
    public function __construct($jsonFilePath)
    {
        $this->jsonFilePath = $jsonFilePath;
    }

    /**
     * @return array
     */
    public function fetchData()
    {
        $jsonContents = file_get_contents($this->jsonFilePath);

        return json_decode($jsonContents, true);
    }
}