# Swagger\Client\CouriersApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**awbCreation**](CouriersApi.md#awbCreation) | **POST** /v1/external/courier/assign/awb | AWB Creation
[**checkServiceability**](CouriersApi.md#checkServiceability) | **GET** /v1/external/courier/serviceability/ | Check Serviceability
[**pickupCreation**](CouriersApi.md#pickupCreation) | **POST** /v1/external/courier/generate/pickup | Get Pickup Details


# **awbCreation**
> \Swagger\Client\Model\AwbCreationResponse awbCreation($body)

AWB Creation

The ShipRocket API for generating the Air Waybill number for your shipment. You can get a single AWB or bulk AWB’s . It also gives you the option to reassign the AWB number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AwbCreationRequest(); // \Swagger\Client\Model\AwbCreationRequest | 

try {
    $result = $apiInstance->awbCreation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouriersApi->awbCreation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AwbCreationRequest**](../Model/AwbCreationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AwbCreationResponse**](../Model/AwbCreationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkServiceability**
> \Swagger\Client\Model\CheckServiceabilityResponse checkServiceability($pickup_postcode, $delivery_postcode, $weight, $cod, $order_id)

Check Serviceability

Shows the number of courier companies available for delivery from pickup point to customer delivery code, according to weight.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pickup_postcode = 56; // int | The pincode of the location from where the shipment is supposed to be picked up, in an integer format
$delivery_postcode = 56; // int | The pincode of the location where the shipment is supposed to be delivered, in an integer format
$weight = "weight_example"; // string | Shipment weight, in kgs
$cod = 56; // int | If cash on delivery is required or not. Required =1, Prepaid =0
$order_id = 56; // int | Order id of the shipment

try {
    $result = $apiInstance->checkServiceability($pickup_postcode, $delivery_postcode, $weight, $cod, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouriersApi->checkServiceability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pickup_postcode** | **int**| The pincode of the location from where the shipment is supposed to be picked up, in an integer format |
 **delivery_postcode** | **int**| The pincode of the location where the shipment is supposed to be delivered, in an integer format |
 **weight** | **string**| Shipment weight, in kgs |
 **cod** | **int**| If cash on delivery is required or not. Required &#x3D;1, Prepaid &#x3D;0 |
 **order_id** | **int**| Order id of the shipment | [optional]

### Return type

[**\Swagger\Client\Model\CheckServiceabilityResponse**](../Model/CheckServiceabilityResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pickupCreation**
> \Swagger\Client\Model\PickupCreationResponse pickupCreation($body)

Get Pickup Details

Get a JSON representation of pickup response for single and bulk requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PickupCreationRequest(); // \Swagger\Client\Model\PickupCreationRequest | 

try {
    $result = $apiInstance->pickupCreation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouriersApi->pickupCreation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PickupCreationRequest**](../Model/PickupCreationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PickupCreationResponse**](../Model/PickupCreationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

