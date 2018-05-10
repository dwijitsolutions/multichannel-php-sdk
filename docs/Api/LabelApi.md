# Swagger\Client\LabelApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateLabel**](LabelApi.md#generateLabel) | **POST** /v1/external/courier/generate/label | Generate Label


# **generateLabel**
> \Swagger\Client\Model\GenerateLabelResponse generateLabel($body)

Generate Label

Get a label URL. Note:- For label URL, AWB code must be assigned on shipment id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\GenerateLabelRequest(); // \Swagger\Client\Model\GenerateLabelRequest | 

try {
    $result = $apiInstance->generateLabel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelApi->generateLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GenerateLabelRequest**](../Model/GenerateLabelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GenerateLabelResponse**](../Model/GenerateLabelResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

