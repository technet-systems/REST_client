<?php

namespace Daru79\Service;

/**
 * Class AbstractRestClient as a base to extend various rest clients classes
 *
 * @package Service
 */
abstract class AbstractRestClient
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var array
     */
    private $data;

    /**
     * @var string
     */
    private $credentials;

    /**
     * @return array
     */
    abstract public function createOne();

    /**
     * @return array
     */
    abstract public function listAll();

    /**
     * AbstractRestClient constructor. Url and credentials are stored in an array located in bootstrap.php, data is
     * provided via DataStorageInterface
     *
     * @param $url
     * @param array $data
     * @param $credentials
     */
    public function __construct($url, array $data, $credentials)
    {
        $this->url = $url;
        $this->data = $data;
        $this->credentials = $credentials;
    }

    /**
     * CallAPI method that provides POST and GET requests depending on given param
     *
     * @param string $method
     * @return array
     * @throws \Exception
     */
    protected function CallAPI($method)
    {
        $data = json_encode($this->data);
        $curl = curl_init();

        switch ($method)
        {
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, true);

                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;

        }

        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $this->credentials);
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json'
        ));

        $result = curl_exec($curl);

        if(!$result){
            throw new \Exception('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
        }

        curl_close($curl);

        return json_decode($result, true);
    }
}