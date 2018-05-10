# Swagger\Client\OrdersApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkImport2**](OrdersApi.md#bulkImport2) | **POST** /v1/external/orders/import | Bulk Import
[**bulkSample1**](OrdersApi.md#bulkSample1) | **GET** /v1/external/orders/sample | Get sample format for Orders Import
[**cancelOrders**](OrdersApi.md#cancelOrders) | **POST** /v1/external/orders/cancel | Cancel an order
[**changeAddress**](OrdersApi.md#changeAddress) | **POST** /v1/external/orders/address/update | 
[**createCustomOrder**](OrdersApi.md#createCustomOrder) | **POST** /v1/external/orders/create/adhoc | Create Custom order
[**createLinkedOrder_**](OrdersApi.md#createLinkedOrder_) | **POST** /v1/external/orders/create | Create Channel Order
[**exportOrders**](OrdersApi.md#exportOrders) | **POST** /v1/external/orders/export | 
[**fetchOrders**](OrdersApi.md#fetchOrders) | **GET** /v1/external/orders/fetch | Fetch
[**fulfillment**](OrdersApi.md#fulfillment) | **PATCH** /v1/external/orders/fulfill | Add inventory for order product
[**generateInvoice**](OrdersApi.md#generateInvoice) | **POST** /v1/external/orders/print/invoice | Generate Invoice
[**getAllOrders**](OrdersApi.md#getAllOrders) | **GET** /v1/external/orders | Get all orders
[**getOrder**](OrdersApi.md#getOrder) | **GET** /v1/external/orders/show/{id} | Get order Details
[**mapping**](OrdersApi.md#mapping) | **PATCH** /v1/external/orders/mapping | Map orders products
[**syncStatus**](OrdersApi.md#syncStatus) | **GET** /v1/external/orders/status | Sync status
[**track**](OrdersApi.md#track) | **GET** /v1/external/orders/track | Get tracking Details


# **bulkImport2**
> bulkImport2($file)

Bulk Import

Import orders in bulk to your Shiprocket panel from a csv file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $apiInstance->bulkImport2($file);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->bulkImport2: ', $e->getMessage(), PHP_EOL;
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

# **bulkSample1**
> object bulkSample1()

Get sample format for Orders Import

Get sample format for Orders Import excel file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bulkSample1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->bulkSample1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelOrders**
> \Swagger\Client\Model\CancelOrdersResponse cancelOrders($body)

Cancel an order

Cancel the orders by passing their order ID’s in the given below API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CancelOrdersRequest(); // \Swagger\Client\Model\CancelOrdersRequest | 

try {
    $result = $apiInstance->cancelOrders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CancelOrdersRequest**](../Model/CancelOrdersRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CancelOrdersResponse**](../Model/CancelOrdersResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeAddress**
> changeAddress($body)



Update the customer’s delivery address by passing the order id in the given below API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChangeAddressRequest(); // \Swagger\Client\Model\ChangeAddressRequest | 

try {
    $apiInstance->changeAddress($body);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->changeAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChangeAddressRequest**](../Model/ChangeAddressRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomOrder**
> \Swagger\Client\Model\CreateQuickOrderResponse createCustomOrder($body)

Create Custom order

Pass all the required order fields to create a quick order. Quick order are the ones where we do not store the product details in master catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateQuickOrderRequest(); // \Swagger\Client\Model\CreateQuickOrderRequest | 

try {
    $result = $apiInstance->createCustomOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createCustomOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateQuickOrderRequest**](../Model/CreateQuickOrderRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CreateQuickOrderResponse**](../Model/CreateQuickOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLinkedOrder_**
> \Swagger\Client\Model\CreateLinkedOrderResponse createLinkedOrder_($body)

Create Channel Order

Shows the details of the order which needs to be created

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateLinkedOrderRequest(); // \Swagger\Client\Model\CreateLinkedOrderRequest | 

try {
    $result = $apiInstance->createLinkedOrder_($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createLinkedOrder_: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateLinkedOrderRequest**](../Model/CreateLinkedOrderRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CreateLinkedOrderResponse**](../Model/CreateLinkedOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportOrders**
> \Swagger\Client\Model\BulkExportResponse exportOrders()



Displays the URL of the CSV sheet of downloaded orders as a response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exportOrders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->exportOrders: ', $e->getMessage(), PHP_EOL;
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

# **fetchOrders**
> fetchOrders()

Fetch

Starts a background job which will fetch orders from all channels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->fetchOrders();
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->fetchOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fulfillment**
> \Swagger\Client\Model\FulfillmentResponse[] fulfillment($body)

Add inventory for order product

This API allows you to add inventory for order product by passing the order id and order product id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FulfillmentRequest(); // \Swagger\Client\Model\FulfillmentRequest | 

try {
    $result = $apiInstance->fulfillment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->fulfillment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FulfillmentRequest**](../Model/FulfillmentRequest.md)|  |

### Return type

[**\Swagger\Client\Model\FulfillmentResponse[]**](../Model/FulfillmentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateInvoice**
> \Swagger\Client\Model\GenerateInvoiceResponse[] generateInvoice($body)

Generate Invoice

Generates an invoice for an order through the order id. You can pass multiple order id’s as well, to generate their response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\GenerateInvoiceRequest(); // \Swagger\Client\Model\GenerateInvoiceRequest | 

try {
    $result = $apiInstance->generateInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->generateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GenerateInvoiceRequest**](../Model/GenerateInvoiceRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GenerateInvoiceResponse[]**](../Model/GenerateInvoiceResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllOrders**
> \Swagger\Client\Model\GetOrderResponse getAllOrders($page, $per_page, $sort, $sort_by, $to, $from, $filter, $filter_by, $search)

Get all orders

The ShipRocket API for getting all the orders of a single seller. In this API the product and shipment activities will have sub arrays for individual products and shipments.  Below are the order status codes used:      Order Status Code | Descrition   ----- | -----   1 | New   2 | Invoiced   3 | Ready To Ship   4 | Pickup Scheduled   5 | Cancelled   6 | Shipped   7 | Delivered   8 | e-Payment Failed   9 | Returned   10 | Unmapped   11 | Out of Stock   12 | Pickup Queued   13 | Pickup Rescheduled   14 | Pickup error// Created when there is an error on pickup schedule   15 | RTO initiated   16 | RTO delivered   17 | RTO Acknowledged   18 | Cancellation Request   19 | Out for Delivery   20 | In Transit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number of data to display
$per_page = 56; // int | Number of orders to get per request
$sort = "sort_example"; // string | Sort type (DESC, ASC)
$sort_by = "sort_by_example"; // string | Field to sort by
$to = "to_example"; // string | To date
$from = "from_example"; // string | From date
$filter = "filter_example"; // string | Filter value
$filter_by = "filter_by_example"; // string | Field to filter by
$search = "search_example"; // string | Search for AWB or Channel Order ID

try {
    $result = $apiInstance->getAllOrders($page, $per_page, $sort, $sort_by, $to, $from, $filter, $filter_by, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getAllOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of data to display |
 **per_page** | **int**| Number of orders to get per request | [optional]
 **sort** | **string**| Sort type (DESC, ASC) | [optional]
 **sort_by** | **string**| Field to sort by | [optional]
 **to** | **string**| To date | [optional]
 **from** | **string**| From date | [optional]
 **filter** | **string**| Filter value | [optional]
 **filter_by** | **string**| Field to filter by | [optional]
 **search** | **string**| Search for AWB or Channel Order ID | [optional]

### Return type

[**\Swagger\Client\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \Swagger\Client\Model\GetOrderResponse getOrder($id)

Get order Details

Get order and shipment details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The order id

try {
    $result = $apiInstance->getOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order id |

### Return type

[**\Swagger\Client\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mapping**
> \Swagger\Client\Model\MappingResponse[] mapping($body)

Map orders products

Map unmapped order products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MappingRequest(); // \Swagger\Client\Model\MappingRequest | 

try {
    $result = $apiInstance->mapping($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->mapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MappingRequest**](../Model/MappingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\MappingResponse[]**](../Model/MappingResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncStatus**
> syncStatus()

Sync status

This API runs a status sync which pulls out the changes in order status and syncs them in the panel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->syncStatus();
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->syncStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **track**
> \Swagger\Client\Model\GetOrderResponse track($page, $per_page, $sort, $sort_by, $to, $from, $filter, $filter_by, $search)

Get tracking Details

Get tracking data of all orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number of data to display
$per_page = 56; // int | Number of orders to get per request
$sort = "sort_example"; // string | Sort type (DESC, ASC)
$sort_by = "sort_by_example"; // string | Field to sort by
$to = "to_example"; // string | To date
$from = "from_example"; // string | From date
$filter = "filter_example"; // string | Filter value
$filter_by = "filter_by_example"; // string | Field to filter by
$search = "search_example"; // string | Search for AWB or Channel Order ID

try {
    $result = $apiInstance->track($page, $per_page, $sort, $sort_by, $to, $from, $filter, $filter_by, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->track: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of data to display |
 **per_page** | **int**| Number of orders to get per request |
 **sort** | **string**| Sort type (DESC, ASC) | [optional]
 **sort_by** | **string**| Field to sort by | [optional]
 **to** | **string**| To date | [optional]
 **from** | **string**| From date | [optional]
 **filter** | **string**| Filter value | [optional]
 **filter_by** | **string**| Field to filter by | [optional]
 **search** | **string**| Search for AWB or Channel Order ID | [optional]

### Return type

[**\Swagger\Client\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

