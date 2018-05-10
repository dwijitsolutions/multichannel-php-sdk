# Swagger\Client\StatementApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**satement**](StatementApi.md#satement) | **GET** /v1/external/account/details/statement | Get statement Details


# **satement**
> \Swagger\Client\Model\SatementResponse satement($page, $per_page, $to, $from, $search, $export)

Get statement Details

Get statements data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StatementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number of data to display
$per_page = 56; // int | Number of orders to get per request
$to = "to_example"; // string | To date
$from = "from_example"; // string | From date
$search = "search_example"; // string | Search for AWB or Channel Order ID
$export = 56; // int | Export the data in csv format

try {
    $result = $apiInstance->satement($page, $per_page, $to, $from, $search, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementApi->satement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of data to display | [optional]
 **per_page** | **int**| Number of orders to get per request | [optional]
 **to** | **string**| To date | [optional]
 **from** | **string**| From date | [optional]
 **search** | **string**| Search for AWB or Channel Order ID | [optional]
 **export** | **int**| Export the data in csv format | [optional]

### Return type

[**\Swagger\Client\Model\SatementResponse**](../Model/SatementResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

