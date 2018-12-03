<?php

namespace Dongkaipo\Baidu;

use Baidu\Image\AipImageClassify;

class ImageSearch
{
    private $client;

    public function __construct($appId, $apiKey, $apiSecretKey)
    {
        $this->client = new AipImageClassify($appId, $apiKey, $apiSecretKey);
    }

    public function getClient()
    {
        return $this->client;
    }

}