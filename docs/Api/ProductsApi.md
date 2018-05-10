# Swagger\Client\ProductsApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add**](ProductsApi.md#add) | **POST** /v1/external/products | Add new Products
[**bulkExport**](ProductsApi.md#bulkExport) | **GET** /v1/external/products/export | Bulk Sample
[**bulkImport**](ProductsApi.md#bulkImport) | **POST** /v1/external/products/import | Bulk import
[**bulkSample**](ProductsApi.md#bulkSample) | **GET** /v1/external/products/sample | Get a sample format to Import Products
[**getProducts**](ProductsApi.md#getProducts) | **GET** /v1/external/products | Get Products
[**show**](ProductsApi.md#show) | **GET** /v1/external/products/show/{id} | Show


# **add**
> add($body)

Add new Products

Add new product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AddRequest(); // \Swagger\Client\Model\AddRequest | 

try {
    $apiInstance->add($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AddRequest**](../Model/AddRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkExport**
> \Swagger\Client\Model\BulkExportResponse bulkExport()

Bulk Sample

Downloads all Products Details in CSV format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bulkExport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->bulkExport: ', $e->getMessage(), PHP_EOL;
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

# **bulkImport**
> \Swagger\Client\Model\ProductImportResponse bulkImport($file)

Bulk import

This section shows the API for exporting the data of all your product and inventory details from the ShipRocket panel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->bulkImport($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->bulkImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**|  |

### Return type

[**\Swagger\Client\Model\ProductImportResponse**](../Model/ProductImportResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkSample**
> string[] bulkSample()

Get a sample format to Import Products

Export a sample CSV file for importing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bulkSample();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->bulkSample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducts**
> \Swagger\Client\Model\GetProductsResponse getProducts($page, $per_page, $sort, $sort_by, $filter, $filter_by)

Get Products

Shows all the details of all the products that a ShipRocket user has. This can be filtered according to details like number of products per page, ascending or descending sorting order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page number which is to be displayed
$per_page = 56; // int | The total number of products in each page
$sort = "sort_example"; // string | Whether to arrange the items in ascending or descending order(DESC, ASC)
$sort_by = "sort_by_example"; // string | Allows to choose the value field by which the items will be sorted. Could be sorted by id, by sku, time created etc.
$filter = "filter_example"; // string | Value by which the results will be filtered
$filter_by = "filter_by_example"; // string | Validation of filtered value (data to be matched)

try {
    $result = $apiInstance->getProducts($page, $per_page, $sort, $sort_by, $filter, $filter_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number which is to be displayed |
 **per_page** | **int**| The total number of products in each page | [optional]
 **sort** | **string**| Whether to arrange the items in ascending or descending order(DESC, ASC) | [optional]
 **sort_by** | **string**| Allows to choose the value field by which the items will be sorted. Could be sorted by id, by sku, time created etc. | [optional]
 **filter** | **string**| Value by which the results will be filtered | [optional]
 **filter_by** | **string**| Validation of filtered value (data to be matched) | [optional]

### Return type

[**\Swagger\Client\Model\GetProductsResponse**](../Model/GetProductsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **show**
> \Swagger\Client\Model\ShowResponse show($id)

Show

Shows individual product details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id = The product id which is to be shown and the input should be in an integer format

try {
    $result = $apiInstance->show($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->show: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id &#x3D; The product id which is to be shown and the input should be in an integer format |

### Return type

[**\Swagger\Client\Model\ShowResponse**](../Model/ShowResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

