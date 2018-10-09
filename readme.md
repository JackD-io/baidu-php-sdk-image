# ReadMe

## Install

```
composer reuqire dongkaipo/baidu-php-sdk-image
```

## Usage

```
<?php
        $appId = '<app id>';
        $apiKey = '<api key>';
        $apiSecretKey = '<secret key>';
        $image = new ImageClassify($appId, $apiKey, $apiSecretKey); 
        // 该 client 就是百度的 client
        $client = $image->getClient();

```

## Baidu Api Document

* [Baidu Image Document](https://cloud.baidu.com/doc/IMAGERECOGNITION/ImageClassify-PHP-SDK.html)
