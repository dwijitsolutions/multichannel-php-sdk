<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GetTokenRequest(['email' => 'liveapipro@gmail.com', 'password' => 123456]); // \Swagger\Client\Model\GetTokenRequest | 

try {
    $result = $apiInstance->getToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getToken: ', $e->getMessage(), PHP_EOL;
}

?>