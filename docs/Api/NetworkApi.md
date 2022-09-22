# OpenAPI\Client\NetworkApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeTrunkGroupOrderPost()**](NetworkApi.md#changeTrunkGroupOrderPost) | **POST** /changeTrunkGroupOrder | Change Trunk Group Configuration
[**customerLocationListPost()**](NetworkApi.md#customerLocationListPost) | **POST** /customerLocationList | Customer Location List
[**dtmfRelayListPost()**](NetworkApi.md#dtmfRelayListPost) | **POST** /dtmfRelayList | DTMF Relay List
[**e911CallSearchPost()**](NetworkApi.md#e911CallSearchPost) | **POST** /e911CallSearch | Retrieve 911 Call Detail Records
[**messageDetailSearchPost()**](NetworkApi.md#messageDetailSearchPost) | **POST** /messageDetailSearch | Retrieve Message Detail Record
[**networkStatsPost()**](NetworkApi.md#networkStatsPost) | **POST** /networkStats | Retrieve network stats
[**peerIPsPost()**](NetworkApi.md#peerIPsPost) | **POST** /peerIPs | Retrieve a list of Peer IP addresses
[**routingLabelDetailPost()**](NetworkApi.md#routingLabelDetailPost) | **POST** /routingLabelDetail | Retrieve Toll Free Routing Label Detail
[**routingLabelSearchAssignedPost()**](NetworkApi.md#routingLabelSearchAssignedPost) | **POST** /routingLabelSearchAssigned | Search Assigned Toll Free Routing Label
[**routingLabelUpdatePost()**](NetworkApi.md#routingLabelUpdatePost) | **POST** /routingLabelUpdate | Change Toll Free Routing Label Name
[**switchLocationListPost()**](NetworkApi.md#switchLocationListPost) | **POST** /switchLocationList | Inteliquent Switch Locations
[**testTrunkGroupPost()**](NetworkApi.md#testTrunkGroupPost) | **POST** /testTrunkGroup | Test a Trunk group
[**trunkGroupDetailPost()**](NetworkApi.md#trunkGroupDetailPost) | **POST** /trunkGroupDetail | Trunk Group Details
[**trunkGroupListPost()**](NetworkApi.md#trunkGroupListPost) | **POST** /trunkGroupList | Customer&#39;s Trunk Group List
[**trunkGroupOrderDetailPost()**](NetworkApi.md#trunkGroupOrderDetailPost) | **POST** /trunkGroupOrderDetail | Trunk Group Order Detail
[**trunkGroupOrderListPost()**](NetworkApi.md#trunkGroupOrderListPost) | **POST** /trunkGroupOrderList | Trunk Group Order Listing
[**trunkGroupOrderPost()**](NetworkApi.md#trunkGroupOrderPost) | **POST** /trunkGroupOrder | Order New Trunk Group
[**trunkGroupSearchAssignedPost()**](NetworkApi.md#trunkGroupSearchAssignedPost) | **POST** /trunkGroupSearchAssigned | Search Assigned Trunk Group
[**trunkGroupSessionUpdatePost()**](NetworkApi.md#trunkGroupSessionUpdatePost) | **POST** /trunkGroupSessionUpdate | Update Trunk Group Session Count
[**trunkGroupUpdatePost()**](NetworkApi.md#trunkGroupUpdatePost) | **POST** /trunkGroupUpdate | Change Trunk Group Name
[**trunkGroupUtilizationPost()**](NetworkApi.md#trunkGroupUtilizationPost) | **POST** /trunkGroupUtilization | Retrieve Trunk Group Utilization Detail


## `changeTrunkGroupOrderPost()`

```php
changeTrunkGroupOrderPost($payload): \OpenAPI\Client\Model\ResponseTrunkGroupOrder
```

Change Trunk Group Configuration

This endpoint allows you to update trunk group configuration which is entered through portal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject153(); // \OpenAPI\Client\Model\InlineObject153

try {
    $result = $apiInstance->changeTrunkGroupOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->changeTrunkGroupOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject153**](../Model/InlineObject153.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTrunkGroupOrder**](../Model/ResponseTrunkGroupOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerLocationListPost()`

```php
customerLocationListPost($payload): \OpenAPI\Client\Model\ResponseCustomerLocationList
```

Customer Location List

This endpoint allows you to retrieve a list of assigned locations for use with /trunkGroupOrder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject158(); // \OpenAPI\Client\Model\InlineObject158

try {
    $result = $apiInstance->customerLocationListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->customerLocationListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject158**](../Model/InlineObject158.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseCustomerLocationList**](../Model/ResponseCustomerLocationList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dtmfRelayListPost()`

```php
dtmfRelayListPost($payload): \OpenAPI\Client\Model\ResponseDtmfRelayList
```

DTMF Relay List

This endpoint allows you to retrieve a list of dtmf relay list for use with /trunkGroupOrder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject157(); // \OpenAPI\Client\Model\InlineObject157

try {
    $result = $apiInstance->dtmfRelayListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->dtmfRelayListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject157**](../Model/InlineObject157.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseDtmfRelayList**](../Model/ResponseDtmfRelayList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `e911CallSearchPost()`

```php
e911CallSearchPost($payload): \OpenAPI\Client\Model\ResponseE911CDRDetail
```

Retrieve 911 Call Detail Records

This endpoint allows you to retrieve 911 call detail recrods for assigned telephone number with 911 feature enabled to your company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject144(); // \OpenAPI\Client\Model\InlineObject144

try {
    $result = $apiInstance->e911CallSearchPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->e911CallSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject144**](../Model/InlineObject144.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseE911CDRDetail**](../Model/ResponseE911CDRDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messageDetailSearchPost()`

```php
messageDetailSearchPost($payload): \OpenAPI\Client\Model\ResponseMessageDetailSearch
```

Retrieve Message Detail Record

This endpoint allows you to search message detail records for your Inteliquent message-enabled telephone numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject112(); // \OpenAPI\Client\Model\InlineObject112

try {
    $result = $apiInstance->messageDetailSearchPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->messageDetailSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject112**](../Model/InlineObject112.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseMessageDetailSearch**](../Model/ResponseMessageDetailSearch.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkStatsPost()`

```php
networkStatsPost($payload): \OpenAPI\Client\Model\InlineResponse20046
```

Retrieve network stats

This operations retrieves network stats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject197(); // \OpenAPI\Client\Model\InlineObject197

try {
    $result = $apiInstance->networkStatsPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkStatsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject197**](../Model/InlineObject197.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peerIPsPost()`

```php
peerIPsPost($payload): \OpenAPI\Client\Model\InlineResponse20047
```

Retrieve a list of Peer IP addresses

This operations retrieves list of Peer IPs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject198(); // \OpenAPI\Client\Model\InlineObject198

try {
    $result = $apiInstance->peerIPsPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->peerIPsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject198**](../Model/InlineObject198.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routingLabelDetailPost()`

```php
routingLabelDetailPost($payload): \OpenAPI\Client\Model\ResponseRoutingLabelDetail
```

Retrieve Toll Free Routing Label Detail

This endpoint allows you to retrieve trunk groups and routing proportions your toll free routing labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject109(); // \OpenAPI\Client\Model\InlineObject109

try {
    $result = $apiInstance->routingLabelDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->routingLabelDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject109**](../Model/InlineObject109.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseRoutingLabelDetail**](../Model/ResponseRoutingLabelDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routingLabelSearchAssignedPost()`

```php
routingLabelSearchAssignedPost($payload): \OpenAPI\Client\Model\ResponseRoutingLabelSearchAssigned
```

Search Assigned Toll Free Routing Label

This endpoint allows you to retrieve a list of your company’s assigned toll free routing labels for use with /tfOrder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject108(); // \OpenAPI\Client\Model\InlineObject108

try {
    $result = $apiInstance->routingLabelSearchAssignedPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->routingLabelSearchAssignedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject108**](../Model/InlineObject108.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseRoutingLabelSearchAssigned**](../Model/ResponseRoutingLabelSearchAssigned.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routingLabelUpdatePost()`

```php
routingLabelUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Change Toll Free Routing Label Name

This endpoint allows you to update the name of your company’s assigned toll free routing labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject110(); // \OpenAPI\Client\Model\InlineObject110

try {
    $result = $apiInstance->routingLabelUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->routingLabelUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject110**](../Model/InlineObject110.md)|  | [optional]

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

## `switchLocationListPost()`

```php
switchLocationListPost($payload): \OpenAPI\Client\Model\ResponseSwitchLocationList
```

Inteliquent Switch Locations

This endpoint allows you to retrieve a list of inteliquent switch locations for use with /trunkGroupOrder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject156(); // \OpenAPI\Client\Model\InlineObject156

try {
    $result = $apiInstance->switchLocationListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->switchLocationListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject156**](../Model/InlineObject156.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseSwitchLocationList**](../Model/ResponseSwitchLocationList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testTrunkGroupPost()`

```php
testTrunkGroupPost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Test a Trunk group

This api call allows you to test a trunk group to ensure that it is configured appropriately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject192(); // \OpenAPI\Client\Model\InlineObject192

try {
    $result = $apiInstance->testTrunkGroupPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->testTrunkGroupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject192**](../Model/InlineObject192.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trunkGroupDetailPost()`

```php
trunkGroupDetailPost($payload): \OpenAPI\Client\Model\ResponseTrunkGroupDetail
```

Trunk Group Details

This endpoint allows you to retrieve detail information for specificied trunk group with Inteliquent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject107(); // \OpenAPI\Client\Model\InlineObject107

try {
    $result = $apiInstance->trunkGroupDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->trunkGroupDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject107**](../Model/InlineObject107.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTrunkGroupDetail**](../Model/ResponseTrunkGroupDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trunkGroupListPost()`

```php
trunkGroupListPost($payload): \OpenAPI\Client\Model\ResponseTrunkGroupList
```

Customer's Trunk Group List

This endpoint allows you to retrieve a list of your trunk groups with Inteliquent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject106(); // \OpenAPI\Client\Model\InlineObject106

try {
    $result = $apiInstance->trunkGroupListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->trunkGroupListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject106**](../Model/InlineObject106.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTrunkGroupList**](../Model/ResponseTrunkGroupList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trunkGroupOrderDetailPost()`

```php
trunkGroupOrderDetailPost($payload): \OpenAPI\Client\Model\TrunkGroupOrderDetail
```

Trunk Group Order Detail

This endpoint allows you to retrieve trunk group order details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject155(); // \OpenAPI\Client\Model\InlineObject155

try {
    $result = $apiInstance->trunkGroupOrderDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->trunkGroupOrderDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject155**](../Model/InlineObject155.md)|  |

### Return type

[**\OpenAPI\Client\Model\TrunkGroupOrderDetail**](../Model/TrunkGroupOrderDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trunkGroupOrderListPost()`

```php
trunkGroupOrderListPost($payload): \OpenAPI\Client\Model\TrunkGroupOrderList
```

Trunk Group Order Listing

This endpoint allows you to retrieve list of trunk group orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject154(); // \OpenAPI\Client\Model\InlineObject154

try {
    $result = $apiInstance->trunkGroupOrderListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->trunkGroupOrderListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject154**](../Model/InlineObject154.md)|  |

### Return type

[**\OpenAPI\Client\Model\TrunkGroupOrderList**](../Model/TrunkGroupOrderList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trunkGroupOrderPost()`

```php
trunkGroupOrderPost($payload): \OpenAPI\Client\Model\ResponseTrunkGroupOrder
```

Order New Trunk Group

This endpoint allows you to order new trunk group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject152(); // \OpenAPI\Client\Model\InlineObject152

try {
    $result = $apiInstance->trunkGroupOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->trunkGroupOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject152**](../Model/InlineObject152.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTrunkGroupOrder**](../Model/ResponseTrunkGroupOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trunkGroupSearchAssignedPost()`

```php
trunkGroupSearchAssignedPost($payload): \OpenAPI\Client\Model\ResponseTrunkGroupSearchAssigned
```

Search Assigned Trunk Group

This endpoint allows you to retrieve a list of your DID trunk groups with Inteliquent for use with /tnOrder, tnUpdate, and /portInOrder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject104(); // \OpenAPI\Client\Model\InlineObject104

try {
    $result = $apiInstance->trunkGroupSearchAssignedPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->trunkGroupSearchAssignedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject104**](../Model/InlineObject104.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTrunkGroupSearchAssigned**](../Model/ResponseTrunkGroupSearchAssigned.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trunkGroupSessionUpdatePost()`

```php
trunkGroupSessionUpdatePost($payload): \OpenAPI\Client\Model\ResponseTrunkGroupSessionUpdate
```

Update Trunk Group Session Count

This endpoint allows you to update session count for your company’s assigned trunk groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject150(); // \OpenAPI\Client\Model\InlineObject150

try {
    $result = $apiInstance->trunkGroupSessionUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->trunkGroupSessionUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject150**](../Model/InlineObject150.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTrunkGroupSessionUpdate**](../Model/ResponseTrunkGroupSessionUpdate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trunkGroupUpdatePost()`

```php
trunkGroupUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Change Trunk Group Name

This endpoint allows you to update the name of your company’s assigned trunk groups. Note:- Use the updated trunk group name when placing a new telephone number, trunk group update, or port-in order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject105(); // \OpenAPI\Client\Model\InlineObject105

try {
    $result = $apiInstance->trunkGroupUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->trunkGroupUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject105**](../Model/InlineObject105.md)|  |

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

## `trunkGroupUtilizationPost()`

```php
trunkGroupUtilizationPost($payload): \OpenAPI\Client\Model\TrunkGroupUtilizationResponse
```

Retrieve Trunk Group Utilization Detail

This endpoint allows you to view utilization information for a trunk group over a desired date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject111(); // \OpenAPI\Client\Model\InlineObject111

try {
    $result = $apiInstance->trunkGroupUtilizationPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->trunkGroupUtilizationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject111**](../Model/InlineObject111.md)|  |

### Return type

[**\OpenAPI\Client\Model\TrunkGroupUtilizationResponse**](../Model/TrunkGroupUtilizationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
