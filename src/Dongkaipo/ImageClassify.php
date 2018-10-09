<?php

namespace Dongkaipo\Baidu;

use Image\AipImageClassify;

class ImageClassify
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