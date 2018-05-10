# Swagger\Client\InventoryApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInventories**](InventoryApi.md#getInventories) | **GET** /v1/external/inventory | Get Details of orders with inventories
[**updateInventory**](InventoryApi.md#updateInventory) | **PUT** /v1/external/inventory/{id}/update | Update Inventory


# **getInventories**
> \Swagger\Client\Model\GetInventoriesResponse getInventories($page, $per_page, $sort, $sort_by)

Get Details of orders with inventories

Checks the availability of inventory according to the SKU

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page number which is to be displayed
$per_page = 56; // int | The total number of products in each page in an integer format
$sort = "sort_example"; // string | Whether to arrange the items in ascending or descending order
$sort_by = "sort_by_example"; // string | Allows to choose the value field by which the items will be sorted. Could be sorted by id, by sku, time created etc.

try {
    $result = $apiInstance->getInventories($page, $per_page, $sort, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number which is to be displayed |
 **per_page** | **int**| The total number of products in each page in an integer format | [optional]
 **sort** | **string**| Whether to arrange the items in ascending or descending order | [optional]
 **sort_by** | **string**| Allows to choose the value field by which the items will be sorted. Could be sorted by id, by sku, time created etc. | [optional]

### Return type

[**\Swagger\Client\Model\GetInventoriesResponse**](../Model/GetInventoriesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInventory**
> \Swagger\Client\Model\UpdateInventoryResponse updateInventory($id, $quantity, $action)

Update Inventory

Through this API you can make changes to the inventory listings in your ShipRocket panel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | You have to pass the product id of the inventory which is to be updated
$quantity = 56; // int | The specific number which needs to be changed
$action = "action_example"; // string | Added = The number is added to the inventory Replace = The original number is replaced by the specific number Remove = The specific number is deducted from the opening number

try {
    $result = $apiInstance->updateInventory($id, $quantity, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->updateInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| You have to pass the product id of the inventory which is to be updated |
 **quantity** | **int**| The specific number which needs to be changed |
 **action** | **string**| Added &#x3D; The number is added to the inventory Replace &#x3D; The original number is replaced by the specific number Remove &#x3D; The specific number is deducted from the opening number |

### Return type

[**\Swagger\Client\Model\UpdateInventoryResponse**](../Model/UpdateInventoryResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

