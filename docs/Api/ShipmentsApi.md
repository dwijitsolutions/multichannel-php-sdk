# Swagger\Client\ShipmentsApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**details**](ShipmentsApi.md#details) | **GET** /v1/external/shipments/{id} | Get shipment Details of specific orders
[**getAllShipments**](ShipmentsApi.md#getAllShipments) | **GET** /v1/external/shipments | Get shipment Details


# **details**
> \Swagger\Client\Model\DetailsResponse details($id)

Get shipment Details of specific orders

Get details of specified shipment ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The shipment id

try {
    $result = $apiInstance->details($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->details: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment id |

### Return type

[**\Swagger\Client\Model\DetailsResponse**](../Model/DetailsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllShipments**
> string getAllShipments($sort, $sort_by, $filter, $filter_by)

Get shipment Details

Get details of all shipments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = "sort_example"; // string | Sort type (DESC, ASC)
$sort_by = "sort_by_example"; // string | Field to sort by
$filter = "filter_example"; // string | Filter value
$filter_by = "filter_by_example"; // string | Field to filter by

try {
    $result = $apiInstance->getAllShipments($sort, $sort_by, $filter, $filter_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getAllShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Sort type (DESC, ASC) | [optional]
 **sort_by** | **string**| Field to sort by | [optional]
 **filter** | **string**| Filter value | [optional]
 **filter_by** | **string**| Field to filter by | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

