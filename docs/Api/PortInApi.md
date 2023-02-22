# OpenAPI\Client\PortInApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**portInAvailabilityPost()**](PortInApi.md#portInAvailabilityPost) | **POST** /portInAvailability | Check Telephone Number Porting Service Availability
[**portInOrderActivatePost()**](PortInApi.md#portInOrderActivatePost) | **POST** /portInOrderActivate | Activate Port-In Order
[**portInOrderAvailableActivationPost()**](PortInApi.md#portInOrderAvailableActivationPost) | **POST** /portInOrderAvailableActivation | Retrieve Port-In Order Available Activation Groups
[**portInOrderListPost()**](PortInApi.md#portInOrderListPost) | **POST** /portInOrderList | Get Port In Order Listing
[**portInOrderPost()**](PortInApi.md#portInOrderPost) | **POST** /portInOrder | Order Port-In Telephone Numbers
[**portInOrderTnListPost()**](PortInApi.md#portInOrderTnListPost) | **POST** /portInOrderTnList | Get Port In Order TN Listing
[**tnCsrLookupPost()**](PortInApi.md#tnCsrLookupPost) | **POST** /tnCsrLookup | CSR Lookup


## `portInAvailabilityPost()`

```php
portInAvailabilityPost($payload): \OpenAPI\Client\Model\ResponseCheckServiceAvailability
```

Check Telephone Number Porting Service Availability

This endpoint allows user to check specified Telephone Number(s) available for Porting or not

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PortInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject80(); // \OpenAPI\Client\Model\InlineObject80

try {
    $result = $apiInstance->portInAvailabilityPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortInApi->portInAvailabilityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject80**](../Model/InlineObject80.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseCheckServiceAvailability**](../Model/ResponseCheckServiceAvailability.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portInOrderActivatePost()`

```php
portInOrderActivatePost($payload): \OpenAPI\Client\Model\InlineResponse20032
```

Activate Port-In Order

This endpoint allows user to activate port-in order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PortInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject83(); // \OpenAPI\Client\Model\InlineObject83

try {
    $result = $apiInstance->portInOrderActivatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortInApi->portInOrderActivatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject83**](../Model/InlineObject83.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portInOrderAvailableActivationPost()`

```php
portInOrderAvailableActivationPost($payload): \OpenAPI\Client\Model\ResponseAvailableActivationList
```

Retrieve Port-In Order Available Activation Groups

This endpoint allows user to retrieve available tns, tnGroups for port-in order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PortInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject82(); // \OpenAPI\Client\Model\InlineObject82

try {
    $result = $apiInstance->portInOrderAvailableActivationPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortInApi->portInOrderAvailableActivationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject82**](../Model/InlineObject82.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseAvailableActivationList**](../Model/ResponseAvailableActivationList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portInOrderListPost()`

```php
portInOrderListPost($payload): \OpenAPI\Client\Model\PortInOrderList
```

Get Port In Order Listing

This endpoint is used to get list of orders based on the criteria provided.  All the criteria will be ANDed to come up with a listing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PortInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject84(); // \OpenAPI\Client\Model\InlineObject84

try {
    $result = $apiInstance->portInOrderListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortInApi->portInOrderListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject84**](../Model/InlineObject84.md)|  |

### Return type

[**\OpenAPI\Client\Model\PortInOrderList**](../Model/PortInOrderList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portInOrderPost()`

```php
portInOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20030
```

Order Port-In Telephone Numbers

This endpoint allows user to order port-in telephone numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PortInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject79(); // \OpenAPI\Client\Model\InlineObject79

try {
    $result = $apiInstance->portInOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortInApi->portInOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject79**](../Model/InlineObject79.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portInOrderTnListPost()`

```php
portInOrderTnListPost($payload): \OpenAPI\Client\Model\PortInOrderTnList
```

Get Port In Order TN Listing

This endpoint is used to get list of orders based on the criteria provided.  All the criteria will be ANDed to come up with a listing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PortInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject85(); // \OpenAPI\Client\Model\InlineObject85

try {
    $result = $apiInstance->portInOrderTnListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortInApi->portInOrderTnListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject85**](../Model/InlineObject85.md)|  |

### Return type

[**\OpenAPI\Client\Model\PortInOrderTnList**](../Model/PortInOrderTnList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnCsrLookupPost()`

```php
tnCsrLookupPost($payload): \OpenAPI\Client\Model\ResponseTnCsrLookup
```

CSR Lookup

This endpoint allows you to look up synchronous information for specified Telephone Number. All the end user information. account details along with special instructions will be returned in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PortInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject90(); // \OpenAPI\Client\Model\InlineObject90

try {
    $result = $apiInstance->tnCsrLookupPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortInApi->tnCsrLookupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject90**](../Model/InlineObject90.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnCsrLookup**](../Model/ResponseTnCsrLookup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
