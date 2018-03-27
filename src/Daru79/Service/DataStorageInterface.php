<?php

namespace Daru79\Service;

/**
 * Interface DataStorageInterface for implementing in classes which receive data from various sources
 *
 * @package Service
 */
interface DataStorageInterface
{
    /**
     * Returns an array of data
     *
     * @return array
     */
    public function fetchData();
}