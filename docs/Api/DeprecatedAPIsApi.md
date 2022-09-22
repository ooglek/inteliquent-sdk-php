# OpenAPI\Client\DeprecatedAPIsApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**portInMessagingOrderPost()**](DeprecatedAPIsApi.md#portInMessagingOrderPost) | **POST** /portInMessagingOrder | Port-In TN with Messaging Feature - DEPRECATED
[**tfFeatureDetailPost()**](DeprecatedAPIsApi.md#tfFeatureDetailPost) | **POST** /tfFeatureDetail | Retrieve Assigned TF Detail - DEPRECATED
[**tfMessagingOrderPost()**](DeprecatedAPIsApi.md#tfMessagingOrderPost) | **POST** /tfMessagingOrder | Order/Add TF Messaging Feature - DEPRECATED
[**tnE911OrderPost()**](DeprecatedAPIsApi.md#tnE911OrderPost) | **POST** /tnE911Order | Order E911-Only Telephone Number - DEPRECATED
[**tnMessagingOrderPost()**](DeprecatedAPIsApi.md#tnMessagingOrderPost) | **POST** /tnMessagingOrder | Order Messaging-Only Telephone Number - DEPRECATED
[**tnSearchAssignedPost()**](DeprecatedAPIsApi.md#tnSearchAssignedPost) | **POST** /tnSearchAssigned | Search Assigned Telephone Number - DEPRECATED


## `portInMessagingOrderPost()`

```php
portInMessagingOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20031
```

Port-In TN with Messaging Feature - DEPRECATED

This endpoint allows user to Port-In TN Messaging Feature. Note: This API has been deprecated. Please use /portInOrder for all port-in orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeprecatedAPIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject80(); // \OpenAPI\Client\Model\InlineObject80

try {
    $result = $apiInstance->portInMessagingOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedAPIsApi->portInMessagingOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject80**](../Model/InlineObject80.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfFeatureDetailPost()`

```php
tfFeatureDetailPost($payload): \OpenAPI\Client\Model\ResponseTfFeatureDetail
```

Retrieve Assigned TF Detail - DEPRECATED

'This endpoint allows user to Retrieve Assigned TF detail.NOTE: This API has been deprecated. Please use /tfDetail to retrieve assigned toll free number details with features.'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeprecatedAPIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject103(); // \OpenAPI\Client\Model\InlineObject103

try {
    $result = $apiInstance->tfFeatureDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedAPIsApi->tfFeatureDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject103**](../Model/InlineObject103.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTfFeatureDetail**](../Model/ResponseTfFeatureDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfMessagingOrderPost()`

```php
tfMessagingOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20024
```

Order/Add TF Messaging Feature - DEPRECATED

'This endpoint allows user to order TF Messaging Feature. NOTE: This API has been deprecated. Please use /tfFeatureOrder for all feature orders.'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeprecatedAPIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject97(); // \OpenAPI\Client\Model\InlineObject97

try {
    $result = $apiInstance->tfMessagingOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedAPIsApi->tfMessagingOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject97**](../Model/InlineObject97.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnE911OrderPost()`

```php
tnE911OrderPost($payload): \OpenAPI\Client\Model\InlineResponse20026
```

Order E911-Only Telephone Number - DEPRECATED

This endpoint allows you to enable Inteliquent E911 services on telephone numbers assigned to other carriers (i.e. inbound voice-enabled with another carrier)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeprecatedAPIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject69(); // \OpenAPI\Client\Model\InlineObject69

try {
    $result = $apiInstance->tnE911OrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedAPIsApi->tnE911OrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject69**](../Model/InlineObject69.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnMessagingOrderPost()`

```php
tnMessagingOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20024
```

Order Messaging-Only Telephone Number - DEPRECATED

This endpoint allows you to order telephone numbers from Inteliquent inventory for messaging services only (no voice), or enable Inteliquent messaging services on telephone numbers assigned to other carriers (i.e. voice-enabled with another carrier). Note:- Use /portInMessagingOrder to port in messaging-only telephone numbers to Inteliquent from another carrier. NOTE - This API has been deprecated. Please use /tnOrder for placing tn orders with messaging feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeprecatedAPIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject65(); // \OpenAPI\Client\Model\InlineObject65

try {
    $result = $apiInstance->tnMessagingOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedAPIsApi->tnMessagingOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject65**](../Model/InlineObject65.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnSearchAssignedPost()`

```php
tnSearchAssignedPost($payload): \OpenAPI\Client\Model\ResponseSearchAssignedTn
```

Search Assigned Telephone Number - DEPRECATED

This endpoint allows you to search for Inteliquent telephone numbers assigned to your company. NOTE - This API has been deprecated. Please use /tnDetail for searching telephone numbers assigned to your company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeprecatedAPIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject66(); // \OpenAPI\Client\Model\InlineObject66

try {
    $result = $apiInstance->tnSearchAssignedPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedAPIsApi->tnSearchAssignedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject66**](../Model/InlineObject66.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseSearchAssignedTn**](../Model/ResponseSearchAssignedTn.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
