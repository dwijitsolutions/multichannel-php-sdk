# Swagger\Client\AuthenticationApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getToken**](AuthenticationApi.md#getToken) | **POST** /v1/external/auth/login | Access Token


# **getToken**
> \Swagger\Client\Model\GetTokenResponse getToken($body)

Access Token

The token is the authorization key that you need to pass before using the ShipRocket API's.   Generating the token is an extremely simple process. Simply type in your email id (alternate id for the ShipRocket API) and all your details will be generated.   | Steps to Use Token   -----|  1. Copy the ***Token*** recieved in Response.  2. Click on ***Authorize*** Button. 3. Type ***Bearer &lt;token&gt;*** in the ***Value***. 4. Click on ***Authorize*** and close the pop-up. 5. Now you can use all the api's.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GetTokenRequest(); // \Swagger\Client\Model\GetTokenRequest | 

try {
    $result = $apiInstance->getToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GetTokenRequest**](../Model/GetTokenRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetTokenResponse**](../Model/GetTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

