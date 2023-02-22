# OpenAPI\Client\TollFreeApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tfBtnPost()**](TollFreeApi.md#tfBtnPost) | **POST** /tfBtn | Update billing Tn value for Toll free numbers
[**tfDetailPost()**](TollFreeApi.md#tfDetailPost) | **POST** /tfDetail | Search Assigned Toll Free Number Detail
[**tfDisconnectPost()**](TollFreeApi.md#tfDisconnectPost) | **POST** /tfDisconnect | Disconnect Toll Free Number
[**tfDnisPost()**](TollFreeApi.md#tfDnisPost) | **POST** /tfDnis | Update dnis value for Toll free numbers
[**tfDnoPost()**](TollFreeApi.md#tfDnoPost) | **POST** /tfDno | Update dno setting for Toll free numbers
[**tfFeatureCNamListPost()**](TollFreeApi.md#tfFeatureCNamListPost) | **POST** /tfFeatureCNamList | Retrieve Assigned TF for feature Calling Name
[**tfFeatureE911ListPost()**](TollFreeApi.md#tfFeatureE911ListPost) | **POST** /tfFeatureE911List | Retrieve E911 Toll Free Numbers
[**tfFeatureMessageListPost()**](TollFreeApi.md#tfFeatureMessageListPost) | **POST** /tfFeatureMessageList | Retrieve Assigned TF for feature Message
[**tfFeatureOrderPost()**](TollFreeApi.md#tfFeatureOrderPost) | **POST** /tfFeatureOrder | ADD/Update/Remove Messaging, E911 &amp; Calling feature
[**tfForwardListPost()**](TollFreeApi.md#tfForwardListPost) | **POST** /tfForwardList | Toll Free Number Call Forward Listing
[**tfForwardPost()**](TollFreeApi.md#tfForwardPost) | **POST** /tfForward | Manage Toll Free Number Call Forward Settings
[**tfInventoryPost()**](TollFreeApi.md#tfInventoryPost) | **POST** /tfInventory | Search Toll Free Number Inventory
[**tfMovePost()**](TollFreeApi.md#tfMovePost) | **POST** /tfMove | Moving TFNs between Accounts
[**tfOrderPost()**](TollFreeApi.md#tfOrderPost) | **POST** /tfOrder | Load, Order, or Port Toll Free Numbers
[**tfRequestPost()**](TollFreeApi.md#tfRequestPost) | **POST** /tfRequest | Request Toll Free Numbers
[**tfRespOrgPost()**](TollFreeApi.md#tfRespOrgPost) | **POST** /tfRespOrg | Retrieve Customer RespOrg for given TollFree number.
[**tfUpdatePost()**](TollFreeApi.md#tfUpdatePost) | **POST** /tfUpdate | Update Active Toll Free Number Routing


## `tfBtnPost()`

```php
tfBtnPost($payload): \OpenAPI\Client\Model\InlineResponse20033
```

Update billing Tn value for Toll free numbers

This endpoint allows you to update billing Tn on your active (In Service) toll free numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject162(); // \OpenAPI\Client\Model\InlineObject162

try {
    $result = $apiInstance->tfBtnPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfBtnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject162**](../Model/InlineObject162.md)|  |

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

## `tfDetailPost()`

```php
tfDetailPost($payload): \OpenAPI\Client\Model\ResponseTfDetail
```

Search Assigned Toll Free Number Detail

This endpoint supports a detailed assigned toll free number search on the Inteliquent network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject96(); // \OpenAPI\Client\Model\InlineObject96

try {
    $result = $apiInstance->tfDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject96**](../Model/InlineObject96.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTfDetail**](../Model/ResponseTfDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfDisconnectPost()`

```php
tfDisconnectPost($payload): \OpenAPI\Client\Model\InlineResponse20023
```

Disconnect Toll Free Number

This endpoint allows you to disconnect active (In Service) toll free numbers assigned to your company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject92(); // \OpenAPI\Client\Model\InlineObject92

try {
    $result = $apiInstance->tfDisconnectPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfDisconnectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject92**](../Model/InlineObject92.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfDnisPost()`

```php
tfDnisPost($payload): \OpenAPI\Client\Model\InlineResponse20033
```

Update dnis value for Toll free numbers

This endpoint allows you to update dnis on your active (In Service) toll free numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject161(); // \OpenAPI\Client\Model\InlineObject161

try {
    $result = $apiInstance->tfDnisPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfDnisPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject161**](../Model/InlineObject161.md)|  |

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

## `tfDnoPost()`

```php
tfDnoPost($payload): \OpenAPI\Client\Model\InlineResponse20022
```

Update dno setting for Toll free numbers

This endpoint allows you to update dno on your active (In Service) toll free numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject163(); // \OpenAPI\Client\Model\InlineObject163

try {
    $result = $apiInstance->tfDnoPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfDnoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject163**](../Model/InlineObject163.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfFeatureCNamListPost()`

```php
tfFeatureCNamListPost($payload): \OpenAPI\Client\Model\ResponseTfFeatureCNameList
```

Retrieve Assigned TF for feature Calling Name

This endpoint allows user to Retrieve Assigned TF for feature Calling Name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject100(); // \OpenAPI\Client\Model\InlineObject100

try {
    $result = $apiInstance->tfFeatureCNamListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfFeatureCNamListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject100**](../Model/InlineObject100.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTfFeatureCNameList**](../Model/ResponseTfFeatureCNameList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfFeatureE911ListPost()`

```php
tfFeatureE911ListPost($payload): \OpenAPI\Client\Model\ResponseTfnFeatureE911List
```

Retrieve E911 Toll Free Numbers

This endpoint allows you to retrieve a list of toll free numbers with E911 configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject160(); // \OpenAPI\Client\Model\InlineObject160

try {
    $result = $apiInstance->tfFeatureE911ListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfFeatureE911ListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject160**](../Model/InlineObject160.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseTfnFeatureE911List**](../Model/ResponseTfnFeatureE911List.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfFeatureMessageListPost()`

```php
tfFeatureMessageListPost($payload): \OpenAPI\Client\Model\ResponseTfFeatureMessageList
```

Retrieve Assigned TF for feature Message

This endpoint allows user to Retrieve Assigned TF for feature Message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject101(); // \OpenAPI\Client\Model\InlineObject101

try {
    $result = $apiInstance->tfFeatureMessageListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfFeatureMessageListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject101**](../Model/InlineObject101.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTfFeatureMessageList**](../Model/ResponseTfFeatureMessageList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfFeatureOrderPost()`

```php
tfFeatureOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20025
```

ADD/Update/Remove Messaging, E911 & Calling feature

This endpoint allows user toADD/Update/Remove Messaging, E911 & Calling feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject99(); // \OpenAPI\Client\Model\InlineObject99

try {
    $result = $apiInstance->tfFeatureOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfFeatureOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject99**](../Model/InlineObject99.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfForwardListPost()`

```php
tfForwardListPost($payload): \OpenAPI\Client\Model\InlineResponse20029
```

Toll Free Number Call Forward Listing

This endpoint allows you to retrieve list of TFNs that have forwarding enabled for a given company based on the privateKey of the company. (Please note: This feature is available upon request. Please contact Client Services to activate this feature for your API.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject76(); // \OpenAPI\Client\Model\InlineObject76

try {
    $result = $apiInstance->tfForwardListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfForwardListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject76**](../Model/InlineObject76.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfForwardPost()`

```php
tfForwardPost($payload): \OpenAPI\Client\Model\InlineResponse20027
```

Manage Toll Free Number Call Forward Settings

This endpoint allows you to add or delete call forwarding from a toll free number to another. To remove call forwarding from a TN, please pass the removeForwardTo element with a value of \"Y\". (Please note: This feature is available upon request. Please contact Client Services to activate this feature for your API.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject75(); // \OpenAPI\Client\Model\InlineObject75

try {
    $result = $apiInstance->tfForwardPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfForwardPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject75**](../Model/InlineObject75.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfInventoryPost()`

```php
tfInventoryPost($payload): \OpenAPI\Client\Model\ResponseTfInventory
```

Search Toll Free Number Inventory

This endpoint allows you to search available toll free numbers in Inteliquent inventory. Results will be returned only for customers using Inteliquent RespOrg services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject97(); // \OpenAPI\Client\Model\InlineObject97

try {
    $result = $apiInstance->tfInventoryPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfInventoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject97**](../Model/InlineObject97.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTfInventory**](../Model/ResponseTfInventory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfMovePost()`

```php
tfMovePost($payload): \OpenAPI\Client\Model\InlineResponse20034
```

Moving TFNs between Accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject94(); // \OpenAPI\Client\Model\InlineObject94

try {
    $result = $apiInstance->tfMovePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfMovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject94**](../Model/InlineObject94.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfOrderPost()`

```php
tfOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20035
```

Load, Order, or Port Toll Free Numbers

This endpoint allows you to load toll free numbers on your own RespOrg to the Inteliquent network and other CICs (if desired), to port toll free numbers from another RespOrg to Inteliquent (LQX01), or to order toll free numbers available in the Inteliquent inventory (on RespOrg LQX01).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject95(); // \OpenAPI\Client\Model\InlineObject95

try {
    $result = $apiInstance->tfOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject95**](../Model/InlineObject95.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfRequestPost()`

```php
tfRequestPost($payload): \OpenAPI\Client\Model\InlineResponse20036
```

Request Toll Free Numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject102(); // \OpenAPI\Client\Model\InlineObject102

try {
    $result = $apiInstance->tfRequestPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject102**](../Model/InlineObject102.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfRespOrgPost()`

```php
tfRespOrgPost($payload): \OpenAPI\Client\Model\InlineResponse20037
```

Retrieve Customer RespOrg for given TollFree number.

Retrieve Customer RespOrg for given TollFree numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject103(); // \OpenAPI\Client\Model\InlineObject103

try {
    $result = $apiInstance->tfRespOrgPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfRespOrgPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject103**](../Model/InlineObject103.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tfUpdatePost()`

```php
tfUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20023
```

Update Active Toll Free Number Routing

This endpoint allows you to update routing on your active (In Service) toll free numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TollFreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject93(); // \OpenAPI\Client\Model\InlineObject93

try {
    $result = $apiInstance->tfUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TollFreeApi->tfUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject93**](../Model/InlineObject93.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
