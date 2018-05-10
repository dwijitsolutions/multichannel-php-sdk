# Swagger\Client\ManifestsApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateManifest**](ManifestsApi.md#generateManifest) | **POST** /v1/external/manifests/generate | Generate Manifests
[**getManifests**](ManifestsApi.md#getManifests) | **POST** /v1/external/orders/print/manifest | Get manifest


# **generateManifest**
> \Swagger\Client\Model\GenerateManifestResponse generateManifest($data)

Generate Manifests

Generate Manifests for single order or bulk orders.  &lowast;***This should be used if print manifest doesn't return any URL***&lowast;

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\GenerateManifestRequest(); // \Swagger\Client\Model\GenerateManifestRequest | 

try {
    $result = $apiInstance->generateManifest($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->generateManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\GenerateManifestRequest**](../Model/GenerateManifestRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GenerateManifestResponse**](../Model/GenerateManifestResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManifests**
> \Swagger\Client\Model\GetManifestsResponse[] getManifests($body)

Get manifest

Prints the manifest of the order id on the assumption that the manifest is created

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\GetManifestsRequest(); // \Swagger\Client\Model\GetManifestsRequest | 

try {
    $result = $apiInstance->getManifests($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->getManifests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GetManifestsRequest**](../Model/GetManifestsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetManifestsResponse[]**](../Model/GetManifestsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

