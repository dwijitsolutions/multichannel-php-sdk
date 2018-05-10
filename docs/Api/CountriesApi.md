# Swagger\Client\CountriesApi

All URIs are relative to *https://apiv2.shiprocket.in*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCountries**](CountriesApi.md#getCountries) | **GET** /v1/external/countries | Countries
[**getZones**](CountriesApi.md#getZones) | **GET** /v1/external/countries/show/{id} | Get all zones


# **getCountries**
> \Swagger\Client\Model\GetCountriesResponse getCountries()

Countries

Shows all the countries which are present in the ShipRocket database. ShipRocket API provides ISO Code 2 and ISO Code 3 country options and has a total of 44 countries in its database. This allows you to use these countries in your own dropdown menu.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetCountriesResponse**](../Model/GetCountriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZones**
> \Swagger\Client\Model\GetZonesResponse getZones($id)

Get all zones

Shows all the zones which are present within a country.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The specific id of the country in integer format

try {
    $result = $apiInstance->getZones($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->getZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The specific id of the country in integer format |

### Return type

[**\Swagger\Client\Model\GetZonesResponse**](../Model/GetZonesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

