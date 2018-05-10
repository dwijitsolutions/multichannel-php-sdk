# Swagger\Client\ListingsApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkImport1**](ListingsApi.md#bulkImport1) | **POST** /v1/external/listings/import | Import Catalog mappings
[**exportMapped**](ListingsApi.md#exportMapped) | **GET** /v1/external/listings/export/mapped | Export Mapped
[**exportSample**](ListingsApi.md#exportSample) | **GET** /v1/external/listings/sample | Export sample
[**exportUnMapped**](ListingsApi.md#exportUnMapped) | **GET** /v1/external/listings/export/unmapped | Export Unmapped
[**getAll**](ListingsApi.md#getAll) | **GET** /v1/external/listings | Get all Listings
[**map**](ListingsApi.md#map) | **POST** /v1/external/listings/link | Map


# **bulkImport1**
> bulkImport1($file)

Import Catalog mappings

Import CSV containing channel catalog to master catalog mappings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $apiInstance->bulkImport1($file);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->bulkImport1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportMapped**
> \Swagger\Client\Model\BulkExportResponse exportMapped()

Export Mapped

Export mapped- Downloads the list of mapped items in the channel catalog sheet. After mapping items you can see the number of products of one channel, which are present in the Master Catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exportMapped();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->exportMapped: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BulkExportResponse**](../Model/BulkExportResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportSample**
> \Swagger\Client\Model\BulkExportResponse exportSample()

Export sample

Downloads a sample of the catalog sheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exportSample();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->exportSample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BulkExportResponse**](../Model/BulkExportResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportUnMapped**
> \Swagger\Client\Model\BulkExportResponse exportUnMapped()

Export Unmapped

Downloads the list of unmapped items in the channel catalog sheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exportUnMapped();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->exportUnMapped: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BulkExportResponse**](../Model/BulkExportResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Swagger\Client\Model\GetAllResponse getAll($page, $per_page, $sort, $sort_by, $filter, $filter_by)

Get all Listings

Get a JSON representation of all listings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number of the data which is to be displayed
$per_page = 56; // int | Number of channel orders listed in each page
$sort = "sort_example"; // string | The order in which the listings should be sorted
$sort_by = "sort_by_example"; // string | Allows to choose the value field by which the items will be sorted. Could be sorted by id, by sku, time created etc.
$filter = "filter_example"; // string | Value by which the results will be filtered
$filter_by = "filter_by_example"; // string | Validation of filtered value (data to be matched)

try {
    $result = $apiInstance->getAll($page, $per_page, $sort, $sort_by, $filter, $filter_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the data which is to be displayed |
 **per_page** | **int**| Number of channel orders listed in each page | [optional]
 **sort** | **string**| The order in which the listings should be sorted | [optional]
 **sort_by** | **string**| Allows to choose the value field by which the items will be sorted. Could be sorted by id, by sku, time created etc. | [optional]
 **filter** | **string**| Value by which the results will be filtered | [optional]
 **filter_by** | **string**| Validation of filtered value (data to be matched) | [optional]

### Return type

[**\Swagger\Client\Model\GetAllResponse**](../Model/GetAllResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **map**
> map($body)

Map

This API helps you map your channel product to a product present in master catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MapRequest(); // \Swagger\Client\Model\MapRequest | 

try {
    $apiInstance->map($body);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->map: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MapRequest**](../Model/MapRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

