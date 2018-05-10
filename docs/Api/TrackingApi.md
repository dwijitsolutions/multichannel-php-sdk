# Swagger\Client\TrackingApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aWBTracking**](TrackingApi.md#aWBTracking) | **GET** /v1/external/courier/track/awb/{awb_code} | Get AWB tracking Details
[**shipmentTracking**](TrackingApi.md#shipmentTracking) | **GET** /v1/external/courier/track/shipment/{shipment_id} | Get shipment Tracking Details


# **aWBTracking**
> \Swagger\Client\Model\AwbTrackingResponse aWBTracking($awb_code, $body)

Get AWB tracking Details

Get a JSON of tracking data by AWB.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$awb_code = 56; // int | awb code
$body = new \Swagger\Client\Model\AwbTrackingRequest(); // \Swagger\Client\Model\AwbTrackingRequest | 

try {
    $result = $apiInstance->aWBTracking($awb_code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->aWBTracking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **awb_code** | **int**| awb code |
 **body** | [**\Swagger\Client\Model\AwbTrackingRequest**](../Model/AwbTrackingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AwbTrackingResponse**](../Model/AwbTrackingResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentTracking**
> \Swagger\Client\Model\ShipmentTrackingResponse shipmentTracking($shipment_id, $body)

Get shipment Tracking Details

Get a JSON of tracking data by Shipment id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 56; // int | Shipment ID
$body = new \Swagger\Client\Model\ShipmentTrackingRequest(); // \Swagger\Client\Model\ShipmentTrackingRequest | 

try {
    $result = $apiInstance->shipmentTracking($shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->shipmentTracking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Shipment ID |
 **body** | [**\Swagger\Client\Model\ShipmentTrackingRequest**](../Model/ShipmentTrackingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ShipmentTrackingResponse**](../Model/ShipmentTrackingResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

