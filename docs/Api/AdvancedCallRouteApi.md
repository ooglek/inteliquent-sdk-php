# OpenAPI\Client\AdvancedCallRouteApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**advancedCallRoutePlanDetailPost()**](AdvancedCallRouteApi.md#advancedCallRoutePlanDetailPost) | **POST** /advancedCallRoutePlanDetail | Advanced Call Route Plan Detail
[**advancedCallRoutePlanListPost()**](AdvancedCallRouteApi.md#advancedCallRoutePlanListPost) | **POST** /advancedCallRoutePlanList | Advanced Call Route Plan List
[**advancedCallRoutePlanPost()**](AdvancedCallRouteApi.md#advancedCallRoutePlanPost) | **POST** /advancedCallRoutePlan | Add Advanced Call Route Plan
[**advancedCallRouteServiceAreasPost()**](AdvancedCallRouteApi.md#advancedCallRouteServiceAreasPost) | **POST** /advancedCallRouteServiceAreas | Advanced Call Route Service Area List
[**advancedCallRouteServiceLocationsPost()**](AdvancedCallRouteApi.md#advancedCallRouteServiceLocationsPost) | **POST** /advancedCallRouteServiceLocations | Advanced Call Route Service Location List
[**advancedCallRouteTimeZonesPost()**](AdvancedCallRouteApi.md#advancedCallRouteTimeZonesPost) | **POST** /advancedCallRouteTimeZones | Advanced Call Route Time Zone List
[**timeProfileDetailPost()**](AdvancedCallRouteApi.md#timeProfileDetailPost) | **POST** /timeProfileDetail | Advanced Call Route Time Profile Detail
[**timeProfileListPost()**](AdvancedCallRouteApi.md#timeProfileListPost) | **POST** /timeProfileList | Advanced Call Route Time Profile List
[**timeProfilePost()**](AdvancedCallRouteApi.md#timeProfilePost) | **POST** /timeProfile | Create Time Profile for Advanced Call Route
[**timeProfileSpecialDayDetailPost()**](AdvancedCallRouteApi.md#timeProfileSpecialDayDetailPost) | **POST** /timeProfileSpecialDayDetail | Advanced Call Route Special Day Time Profile Detail
[**timeProfileSpecialDayListPost()**](AdvancedCallRouteApi.md#timeProfileSpecialDayListPost) | **POST** /timeProfileSpecialDayList | Advanced Call Route Special Day Time Profile List
[**timeProfileSpecialDayPost()**](AdvancedCallRouteApi.md#timeProfileSpecialDayPost) | **POST** /timeProfileSpecialDay | Create Special Day Time Profile for Advanced Call Route


## `advancedCallRoutePlanDetailPost()`

```php
advancedCallRoutePlanDetailPost($payload): \OpenAPI\Client\Model\InlineResponse20011
```

Advanced Call Route Plan Detail

This operation allows you to list of advanced call route plan detail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject11(); // \OpenAPI\Client\Model\InlineObject11

try {
    $result = $apiInstance->advancedCallRoutePlanDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->advancedCallRoutePlanDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject11**](../Model/InlineObject11.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advancedCallRoutePlanListPost()`

```php
advancedCallRoutePlanListPost($payload): \OpenAPI\Client\Model\InlineResponse2009
```

Advanced Call Route Plan List

This operation allows you to list of advanced call route plan list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject9(); // \OpenAPI\Client\Model\InlineObject9

try {
    $result = $apiInstance->advancedCallRoutePlanListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->advancedCallRoutePlanListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject9**](../Model/InlineObject9.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advancedCallRoutePlanPost()`

```php
advancedCallRoutePlanPost($payload): \OpenAPI\Client\Model\InlineResponse20010
```

Add Advanced Call Route Plan

This operation allows you to add an advanced call route plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject10(); // \OpenAPI\Client\Model\InlineObject10

try {
    $result = $apiInstance->advancedCallRoutePlanPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->advancedCallRoutePlanPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject10**](../Model/InlineObject10.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advancedCallRouteServiceAreasPost()`

```php
advancedCallRouteServiceAreasPost($payload): \OpenAPI\Client\Model\InlineResponse200
```

Advanced Call Route Service Area List

This operation allows you to get a list of service areas for advanced call route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject

try {
    $result = $apiInstance->advancedCallRouteServiceAreasPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->advancedCallRouteServiceAreasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advancedCallRouteServiceLocationsPost()`

```php
advancedCallRouteServiceLocationsPost($payload): \OpenAPI\Client\Model\InlineResponse2001
```

Advanced Call Route Service Location List

This operation allows you to get a list of service locations for advanced call route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject1(); // \OpenAPI\Client\Model\InlineObject1

try {
    $result = $apiInstance->advancedCallRouteServiceLocationsPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->advancedCallRouteServiceLocationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advancedCallRouteTimeZonesPost()`

```php
advancedCallRouteTimeZonesPost($payload): \OpenAPI\Client\Model\InlineResponse2002
```

Advanced Call Route Time Zone List

This operation allows you to get a list of time zones for advanced call route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject2(); // \OpenAPI\Client\Model\InlineObject2

try {
    $result = $apiInstance->advancedCallRouteTimeZonesPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->advancedCallRouteTimeZonesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeProfileDetailPost()`

```php
timeProfileDetailPost($payload): \OpenAPI\Client\Model\InlineResponse2005
```

Advanced Call Route Time Profile Detail

This operation allows you to get details about time profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject5(); // \OpenAPI\Client\Model\InlineObject5

try {
    $result = $apiInstance->timeProfileDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->timeProfileDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject5**](../Model/InlineObject5.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeProfileListPost()`

```php
timeProfileListPost($payload): \OpenAPI\Client\Model\InlineResponse2004
```

Advanced Call Route Time Profile List

This operation allows you to get a list of time profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject4(); // \OpenAPI\Client\Model\InlineObject4

try {
    $result = $apiInstance->timeProfileListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->timeProfileListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject4**](../Model/InlineObject4.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeProfilePost()`

```php
timeProfilePost($payload): \OpenAPI\Client\Model\InlineResponse2003
```

Create Time Profile for Advanced Call Route

This operation allows you to get a list of time zones for advanced call route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject3(); // \OpenAPI\Client\Model\InlineObject3

try {
    $result = $apiInstance->timeProfilePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->timeProfilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeProfileSpecialDayDetailPost()`

```php
timeProfileSpecialDayDetailPost($payload): \OpenAPI\Client\Model\InlineResponse2008
```

Advanced Call Route Special Day Time Profile Detail

This operation allows you to get details about time profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject8(); // \OpenAPI\Client\Model\InlineObject8

try {
    $result = $apiInstance->timeProfileSpecialDayDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->timeProfileSpecialDayDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject8**](../Model/InlineObject8.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeProfileSpecialDayListPost()`

```php
timeProfileSpecialDayListPost($payload): \OpenAPI\Client\Model\InlineResponse2007
```

Advanced Call Route Special Day Time Profile List

This operation allows you to get a list of special day time profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject7(); // \OpenAPI\Client\Model\InlineObject7

try {
    $result = $apiInstance->timeProfileSpecialDayListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->timeProfileSpecialDayListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject7**](../Model/InlineObject7.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeProfileSpecialDayPost()`

```php
timeProfileSpecialDayPost($payload): \OpenAPI\Client\Model\InlineResponse2006
```

Create Special Day Time Profile for Advanced Call Route

This operation allows you to create special day time profile for advanced call route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdvancedCallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject6(); // \OpenAPI\Client\Model\InlineObject6

try {
    $result = $apiInstance->timeProfileSpecialDayPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedCallRouteApi->timeProfileSpecialDayPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject6**](../Model/InlineObject6.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
