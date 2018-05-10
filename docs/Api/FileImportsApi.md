# Swagger\Client\FileImportsApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ExternalErrorsIdCheckGet**](FileImportsApi.md#v1ExternalErrorsIdCheckGet) | **GET** /v1/external/errors/{id}/check | Get file import results from Bulk order, products, listing imports.


# **v1ExternalErrorsIdCheckGet**
> \Swagger\Client\Model\FileImportResponse v1ExternalErrorsIdCheckGet($id)

Get file import results from Bulk order, products, listing imports.

Check Import Response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FileImportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->v1ExternalErrorsIdCheckGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileImportsApi->v1ExternalErrorsIdCheckGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FileImportResponse**](../Model/FileImportResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

