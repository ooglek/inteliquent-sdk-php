# OpenAPI\Client\OrderApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**excludedE911DetailPost()**](OrderApi.md#excludedE911DetailPost) | **POST** /excludedE911Detail | Retrieve Excluded E911 Detail
[**excludedFeatureListPost()**](OrderApi.md#excludedFeatureListPost) | **POST** /excludedFeatureList | Retrieve Excluded Feature List
[**excludedTnListPost()**](OrderApi.md#excludedTnListPost) | **POST** /excludedTnList | Retrieve Excluded Telephone Number List
[**orderAddDocumentPost()**](OrderApi.md#orderAddDocumentPost) | **POST** /orderAddDocument | Add Order Document
[**orderAddNotePost()**](OrderApi.md#orderAddNotePost) | **POST** /orderAddNote | Add Order Note
[**orderCancelPost()**](OrderApi.md#orderCancelPost) | **POST** /orderCancel | Cancel Pending Order
[**orderDetailPost()**](OrderApi.md#orderDetailPost) | **POST** /orderDetail | View Order Detail
[**orderDocumentPost()**](OrderApi.md#orderDocumentPost) | **POST** /orderDocument | Retrieve Order Document
[**orderListPost()**](OrderApi.md#orderListPost) | **POST** /orderList | View Order List
[**orderNotePost()**](OrderApi.md#orderNotePost) | **POST** /orderNote | View Order Note
[**orderUpdatePost()**](OrderApi.md#orderUpdatePost) | **POST** /orderUpdate | Update Pending Order
[**tnMessagingPost()**](OrderApi.md#tnMessagingPost) | **POST** /tnMessaging | Provision Messaging
[**tnPortOutRejectPost()**](OrderApi.md#tnPortOutRejectPost) | **POST** /tnPortOutReject | Reject Number - Port Out
[**tnRequestPost()**](OrderApi.md#tnRequestPost) | **POST** /tnRequest | Request TN


## `excludedE911DetailPost()`

```php
excludedE911DetailPost($payload): \OpenAPI\Client\Model\ExcludedE911DetailListResponse
```

Retrieve Excluded E911 Detail

The API allows you to retrieve an order’s list of excluded numbers with details and excluded reason for which E911 feature requested but not successful due to various reasons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject152(); // \OpenAPI\Client\Model\InlineObject152

try {
    $result = $apiInstance->excludedE911DetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->excludedE911DetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject152**](../Model/InlineObject152.md)|  |

### Return type

[**\OpenAPI\Client\Model\ExcludedE911DetailListResponse**](../Model/ExcludedE911DetailListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `excludedFeatureListPost()`

```php
excludedFeatureListPost($payload): \OpenAPI\Client\Model\ExcludedFeatureListResponse
```

Retrieve Excluded Feature List

This endpoint allows user to get excluded feature list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject119(); // \OpenAPI\Client\Model\InlineObject119

try {
    $result = $apiInstance->excludedFeatureListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->excludedFeatureListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject119**](../Model/InlineObject119.md)|  |

### Return type

[**\OpenAPI\Client\Model\ExcludedFeatureListResponse**](../Model/ExcludedFeatureListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `excludedTnListPost()`

```php
excludedTnListPost($payload): \OpenAPI\Client\Model\ResponseExcludedTnList
```

Retrieve Excluded Telephone Number List

This endpoint allows you to view an order’s list of excluded numbers and reasons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject120(); // \OpenAPI\Client\Model\InlineObject120

try {
    $result = $apiInstance->excludedTnListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->excludedTnListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject120**](../Model/InlineObject120.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseExcludedTnList**](../Model/ResponseExcludedTnList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderAddDocumentPost()`

```php
orderAddDocumentPost($payload): \OpenAPI\Client\Model\InlineResponse20018
```

Add Order Document

This endpoint allows you to add a document to an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject51(); // \OpenAPI\Client\Model\InlineObject51

try {
    $result = $apiInstance->orderAddDocumentPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAddDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject51**](../Model/InlineObject51.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderAddNotePost()`

```php
orderAddNotePost($payload): \OpenAPI\Client\Model\InlineResponse20019
```

Add Order Note

This endpoint allows you to add a note to an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject52(); // \OpenAPI\Client\Model\InlineObject52

try {
    $result = $apiInstance->orderAddNotePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAddNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject52**](../Model/InlineObject52.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderCancelPost()`

```php
orderCancelPost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Cancel Pending Order

This endpoint allows you to cancel an order in Pending status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject55(); // \OpenAPI\Client\Model\InlineObject55

try {
    $result = $apiInstance->orderCancelPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject55**](../Model/InlineObject55.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderDetailPost()`

```php
orderDetailPost($payload): \OpenAPI\Client\Model\ResponseOrderDetail
```

View Order Detail

This endpoint allows you to obtain details about an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject53(); // \OpenAPI\Client\Model\InlineObject53

try {
    $result = $apiInstance->orderDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject53**](../Model/InlineObject53.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseOrderDetail**](../Model/ResponseOrderDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderDocumentPost()`

```php
orderDocumentPost($payload): \OpenAPI\Client\Model\ResponseOrderDocument
```

Retrieve Order Document

This endpoint allows you to retrieve documents attached to an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject56(); // \OpenAPI\Client\Model\InlineObject56

try {
    $result = $apiInstance->orderDocumentPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject56**](../Model/InlineObject56.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseOrderDocument**](../Model/ResponseOrderDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderListPost()`

```php
orderListPost($payload): \OpenAPI\Client\Model\OrderList
```

View Order List

This endpoint allows you to obtain a list of your existing orders with Inteliquent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject117(); // \OpenAPI\Client\Model\InlineObject117

try {
    $result = $apiInstance->orderListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject117**](../Model/InlineObject117.md)|  |

### Return type

[**\OpenAPI\Client\Model\OrderList**](../Model/OrderList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderNotePost()`

```php
orderNotePost($payload): \OpenAPI\Client\Model\OrderNote
```

View Order Note

This endpoint allows you to view notes associated to an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject57(); // \OpenAPI\Client\Model\InlineObject57

try {
    $result = $apiInstance->orderNotePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject57**](../Model/InlineObject57.md)|  |

### Return type

[**\OpenAPI\Client\Model\OrderNote**](../Model/OrderNote.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderUpdatePost()`

```php
orderUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20020
```

Update Pending Order

This endpoint allows you to update information on a Pending port-in or port-out order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject54(); // \OpenAPI\Client\Model\InlineObject54

try {
    $result = $apiInstance->orderUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject54**](../Model/InlineObject54.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnMessagingPost()`

```php
tnMessagingPost($payload): \OpenAPI\Client\Model\InlineResponse20013
```

Provision Messaging

This endpoint allows you to provision Messaging for specified Telephone Number. This api allows Messaging operations (add, update, remove) synchronously for single TN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject36(); // \OpenAPI\Client\Model\InlineObject36

try {
    $result = $apiInstance->tnMessagingPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->tnMessagingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject36**](../Model/InlineObject36.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnPortOutRejectPost()`

```php
tnPortOutRejectPost($payload): \OpenAPI\Client\Model\InlineResponse20013
```

Reject Number - Port Out

This endpoint allows you to reject a TN that was submitted on a Port-Out order for specific reasons. This endpoint is mainly applicable to the losing carrier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject118(); // \OpenAPI\Client\Model\InlineObject118

try {
    $result = $apiInstance->tnPortOutRejectPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->tnPortOutRejectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject118**](../Model/InlineObject118.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnRequestPost()`

```php
tnRequestPost($payload): \OpenAPI\Client\Model\InlineResponse20033
```

Request TN

This endpoint allows you to request numbers be added to inventory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject91(); // \OpenAPI\Client\Model\InlineObject91

try {
    $result = $apiInstance->tnRequestPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->tnRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject91**](../Model/InlineObject91.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
