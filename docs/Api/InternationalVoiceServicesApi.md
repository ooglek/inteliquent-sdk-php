# OpenAPI\Client\InternationalVoiceServicesApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**intlAreaCodeInfoPost()**](InternationalVoiceServicesApi.md#intlAreaCodeInfoPost) | **POST** /intlAreaCodeInfo | Supported Area Codes
[**intlConditionListPost()**](InternationalVoiceServicesApi.md#intlConditionListPost) | **POST** /intlConditionList | Retrieve list of conditions for Telephone Numbers
[**intlCountryListPost()**](InternationalVoiceServicesApi.md#intlCountryListPost) | **POST** /intlCountryList | Supported Country List
[**intlExcludedTnListPost()**](InternationalVoiceServicesApi.md#intlExcludedTnListPost) | **POST** /intlExcludedTnList | Excluded TN List for an International Order
[**intlNumberTypesPost()**](InternationalVoiceServicesApi.md#intlNumberTypesPost) | **POST** /intlNumberTypes | Supported Number Types
[**intlOrderAddContactNotePost()**](InternationalVoiceServicesApi.md#intlOrderAddContactNotePost) | **POST** /intlOrderAddContactNote | Add Order Level Contact As a Note
[**intlOrderAddDocumentPost()**](InternationalVoiceServicesApi.md#intlOrderAddDocumentPost) | **POST** /intlOrderAddDocument | Add Order Level Documents
[**intlOrderAddNotePost()**](InternationalVoiceServicesApi.md#intlOrderAddNotePost) | **POST** /intlOrderAddNote | Add Order Level Notes
[**intlOrderCancelPost()**](InternationalVoiceServicesApi.md#intlOrderCancelPost) | **POST** /intlOrderCancel | Cancel Order
[**intlOrderDetailPost()**](InternationalVoiceServicesApi.md#intlOrderDetailPost) | **POST** /intlOrderDetail | Retrieve Order Details
[**intlOrderDocumentDownloadPost()**](InternationalVoiceServicesApi.md#intlOrderDocumentDownloadPost) | **POST** /intlOrderDocumentDownload | Download Order Document
[**intlOrderDocumentPost()**](InternationalVoiceServicesApi.md#intlOrderDocumentPost) | **POST** /intlOrderDocument | Retrieve Order Document List
[**intlOrderListPost()**](InternationalVoiceServicesApi.md#intlOrderListPost) | **POST** /intlOrderList | Retrieve International Order List
[**intlPortInOrderListPost()**](InternationalVoiceServicesApi.md#intlPortInOrderListPost) | **POST** /intlPortInOrderList | Retrieve International Port-In Order List
[**intlPortInOrderPost()**](InternationalVoiceServicesApi.md#intlPortInOrderPost) | **POST** /intlPortInOrder | Order International Port-In Numbers
[**intlRoutingOptionListPost()**](InternationalVoiceServicesApi.md#intlRoutingOptionListPost) | **POST** /intlRoutingOptionList | Supported Routing Options List
[**intlTnAddDocumentPost()**](InternationalVoiceServicesApi.md#intlTnAddDocumentPost) | **POST** /intlTnAddDocument | Add International Telephone Number Documents
[**intlTnAddNotePost()**](InternationalVoiceServicesApi.md#intlTnAddNotePost) | **POST** /intlTnAddNote | Add TN Notes
[**intlTnDetailPost()**](InternationalVoiceServicesApi.md#intlTnDetailPost) | **POST** /intlTnDetail | Retrieve International Telephone Number Detail
[**intlTnDisconnectPost()**](InternationalVoiceServicesApi.md#intlTnDisconnectPost) | **POST** /intlTnDisconnect | Disconnect Active International Telephone Number
[**intlTnDocumentDownloadPost()**](InternationalVoiceServicesApi.md#intlTnDocumentDownloadPost) | **POST** /intlTnDocumentDownload | Download International Telephone Number Documents
[**intlTnEndUserPost()**](InternationalVoiceServicesApi.md#intlTnEndUserPost) | **POST** /intlTnEndUser | End User Details for International Telephone Number
[**intlTnInventoryPost()**](InternationalVoiceServicesApi.md#intlTnInventoryPost) | **POST** /intlTnInventory | Search International Telephone Number Inventory
[**intlTnNoteUpdatePost()**](InternationalVoiceServicesApi.md#intlTnNoteUpdatePost) | **POST** /intlTnNoteUpdate | Update Note for Active International Telephone Numbers
[**intlTnOrderPost()**](InternationalVoiceServicesApi.md#intlTnOrderPost) | **POST** /intlTnOrder | Order International Numbers
[**intlTnRequestPost()**](InternationalVoiceServicesApi.md#intlTnRequestPost) | **POST** /intlTnRequest | Request Telephone Numbers
[**intlTnReservePost()**](InternationalVoiceServicesApi.md#intlTnReservePost) | **POST** /intlTnReserve | Reserve International Numbers
[**intlTnReservedListPost()**](InternationalVoiceServicesApi.md#intlTnReservedListPost) | **POST** /intlTnReservedList | Retrieve Telephone Number Reserved List
[**intlTnRoutingUpdatePost()**](InternationalVoiceServicesApi.md#intlTnRoutingUpdatePost) | **POST** /intlTnRoutingUpdate | Update Telephone Number Routing
[**intlTnUpdatePost()**](InternationalVoiceServicesApi.md#intlTnUpdatePost) | **POST** /intlTnUpdate | Update In Service Telephone Numbers


## `intlAreaCodeInfoPost()`

```php
intlAreaCodeInfoPost($payload): \OpenAPI\Client\Model\ResponseIntlAreaCodeInfo
```

Supported Area Codes

This operation allows you to retrieve supported area codes for a given country.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject165(); // \OpenAPI\Client\Model\InlineObject165

try {
    $result = $apiInstance->intlAreaCodeInfoPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlAreaCodeInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject165**](../Model/InlineObject165.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlAreaCodeInfo**](../Model/ResponseIntlAreaCodeInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlConditionListPost()`

```php
intlConditionListPost($payload): \OpenAPI\Client\Model\ResponseIntlConditionList
```

Retrieve list of conditions for Telephone Numbers

This operation allows you to retrieve a list of conditions for Telephone Numbers based on country and number type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject193(); // \OpenAPI\Client\Model\InlineObject193

try {
    $result = $apiInstance->intlConditionListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlConditionListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject193**](../Model/InlineObject193.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlConditionList**](../Model/ResponseIntlConditionList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlCountryListPost()`

```php
intlCountryListPost($payload): \OpenAPI\Client\Model\ResponseIntlCountryList
```

Supported Country List

This operation retrieves the list of countries that are supported by Inteliquent and there is inventory of telephone numbers available for customers to place orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject164(); // \OpenAPI\Client\Model\InlineObject164

try {
    $result = $apiInstance->intlCountryListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlCountryListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject164**](../Model/InlineObject164.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlCountryList**](../Model/ResponseIntlCountryList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlExcludedTnListPost()`

```php
intlExcludedTnListPost($payload): \OpenAPI\Client\Model\ResponseIntlExcludedTnList
```

Excluded TN List for an International Order

This operation allows you to retrieve excluded TNs for a given international TN order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject167(); // \OpenAPI\Client\Model\InlineObject167

try {
    $result = $apiInstance->intlExcludedTnListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlExcludedTnListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject167**](../Model/InlineObject167.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlExcludedTnList**](../Model/ResponseIntlExcludedTnList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlNumberTypesPost()`

```php
intlNumberTypesPost($payload): \OpenAPI\Client\Model\ResponseIntlNumberTypes
```

Supported Number Types

This operation allows you to retrieve the number types that are supported by Inteliquent for a given country and for a given customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject169(); // \OpenAPI\Client\Model\InlineObject169

try {
    $result = $apiInstance->intlNumberTypesPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlNumberTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject169**](../Model/InlineObject169.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlNumberTypes**](../Model/ResponseIntlNumberTypes.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlOrderAddContactNotePost()`

```php
intlOrderAddContactNotePost($payload): \OpenAPI\Client\Model\InlineResponse20040
```

Add Order Level Contact As a Note

This operation allows you to add order contact information as note at order level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject170(); // \OpenAPI\Client\Model\InlineObject170

try {
    $result = $apiInstance->intlOrderAddContactNotePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlOrderAddContactNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject170**](../Model/InlineObject170.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlOrderAddDocumentPost()`

```php
intlOrderAddDocumentPost($payload): \OpenAPI\Client\Model\InlineResponse20041
```

Add Order Level Documents

This operation allows you to add order level notes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject172(); // \OpenAPI\Client\Model\InlineObject172

try {
    $result = $apiInstance->intlOrderAddDocumentPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlOrderAddDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject172**](../Model/InlineObject172.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlOrderAddNotePost()`

```php
intlOrderAddNotePost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Add Order Level Notes

This operation allows you to add order level notes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject171(); // \OpenAPI\Client\Model\InlineObject171

try {
    $result = $apiInstance->intlOrderAddNotePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlOrderAddNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject171**](../Model/InlineObject171.md)|  |

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

## `intlOrderCancelPost()`

```php
intlOrderCancelPost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Cancel Order

This operation allows you to cancel a PENDING order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject173(); // \OpenAPI\Client\Model\InlineObject173

try {
    $result = $apiInstance->intlOrderCancelPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlOrderCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject173**](../Model/InlineObject173.md)|  |

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

## `intlOrderDetailPost()`

```php
intlOrderDetailPost($payload): \OpenAPI\Client\Model\ResponseIntlOrderDetail
```

Retrieve Order Details

This operation allows you to get order details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject188(); // \OpenAPI\Client\Model\InlineObject188

try {
    $result = $apiInstance->intlOrderDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlOrderDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject188**](../Model/InlineObject188.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlOrderDetail**](../Model/ResponseIntlOrderDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlOrderDocumentDownloadPost()`

```php
intlOrderDocumentDownloadPost($payload): \OpenAPI\Client\Model\ResponseIntlOrderDocumentDownload
```

Download Order Document

This operation allows you to download document attached to an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject175(); // \OpenAPI\Client\Model\InlineObject175

try {
    $result = $apiInstance->intlOrderDocumentDownloadPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlOrderDocumentDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject175**](../Model/InlineObject175.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlOrderDocumentDownload**](../Model/ResponseIntlOrderDocumentDownload.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlOrderDocumentPost()`

```php
intlOrderDocumentPost($payload): \OpenAPI\Client\Model\ResponseIntlOrderDocument
```

Retrieve Order Document List

This operation allows you to retrieve documents attached to an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject174(); // \OpenAPI\Client\Model\InlineObject174

try {
    $result = $apiInstance->intlOrderDocumentPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlOrderDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject174**](../Model/InlineObject174.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlOrderDocument**](../Model/ResponseIntlOrderDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlOrderListPost()`

```php
intlOrderListPost($payload): \OpenAPI\Client\Model\ResponseIntlOrderList
```

Retrieve International Order List

This operation allows you to obtain a list of your existing international number orders with Inteliquent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject177(); // \OpenAPI\Client\Model\InlineObject177

try {
    $result = $apiInstance->intlOrderListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlOrderListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject177**](../Model/InlineObject177.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlOrderList**](../Model/ResponseIntlOrderList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlPortInOrderListPost()`

```php
intlPortInOrderListPost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Retrieve International Port-In Order List

This operation allows you to obtain a list of your existing international port-in orders with Inteliquent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject179(); // \OpenAPI\Client\Model\InlineObject179

try {
    $result = $apiInstance->intlPortInOrderListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlPortInOrderListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject179**](../Model/InlineObject179.md)|  |

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

## `intlPortInOrderPost()`

```php
intlPortInOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20042
```

Order International Port-In Numbers

This operation allows you to create an order to port international numbers from another carrier into the Inteliquent network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject178(); // \OpenAPI\Client\Model\InlineObject178

try {
    $result = $apiInstance->intlPortInOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlPortInOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject178**](../Model/InlineObject178.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlRoutingOptionListPost()`

```php
intlRoutingOptionListPost($payload): \OpenAPI\Client\Model\ResponseIntlRoutingOptionList
```

Supported Routing Options List

This operation allows you to retrieve supported routing options for the customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject166(); // \OpenAPI\Client\Model\InlineObject166

try {
    $result = $apiInstance->intlRoutingOptionListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlRoutingOptionListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject166**](../Model/InlineObject166.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlRoutingOptionList**](../Model/ResponseIntlRoutingOptionList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlTnAddDocumentPost()`

```php
intlTnAddDocumentPost($payload): \OpenAPI\Client\Model\ResponseIntlTnAddDocument
```

Add International Telephone Number Documents

This operation allows you to add a document to an ordered TN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject181(); // \OpenAPI\Client\Model\InlineObject181

try {
    $result = $apiInstance->intlTnAddDocumentPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnAddDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject181**](../Model/InlineObject181.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlTnAddDocument**](../Model/ResponseIntlTnAddDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlTnAddNotePost()`

```php
intlTnAddNotePost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Add TN Notes

This operation allows you to add nodes at the order level for international telephone numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject168(); // \OpenAPI\Client\Model\InlineObject168

try {
    $result = $apiInstance->intlTnAddNotePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnAddNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject168**](../Model/InlineObject168.md)|  |

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

## `intlTnDetailPost()`

```php
intlTnDetailPost($payload): \OpenAPI\Client\Model\ResponseIntlTnDetail
```

Retrieve International Telephone Number Detail

This operation allows you to obtain retrieve details about the features enabled on a telephone number with Inteliquent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject180(); // \OpenAPI\Client\Model\InlineObject180

try {
    $result = $apiInstance->intlTnDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject180**](../Model/InlineObject180.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlTnDetail**](../Model/ResponseIntlTnDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlTnDisconnectPost()`

```php
intlTnDisconnectPost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Disconnect Active International Telephone Number

This operation allows you to disconnect active (In Service) telephone numbers assigned to your company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject182(); // \OpenAPI\Client\Model\InlineObject182

try {
    $result = $apiInstance->intlTnDisconnectPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnDisconnectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject182**](../Model/InlineObject182.md)|  |

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

## `intlTnDocumentDownloadPost()`

```php
intlTnDocumentDownloadPost($payload): \OpenAPI\Client\Model\ResponseIntlTnDocumentDownload
```

Download International Telephone Number Documents

This operation allows you to add a document to an ordered TN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject183(); // \OpenAPI\Client\Model\InlineObject183

try {
    $result = $apiInstance->intlTnDocumentDownloadPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnDocumentDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject183**](../Model/InlineObject183.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlTnDocumentDownload**](../Model/ResponseIntlTnDocumentDownload.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlTnEndUserPost()`

```php
intlTnEndUserPost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

End User Details for International Telephone Number

This operation allows you to set end user details for telephone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject184(); // \OpenAPI\Client\Model\InlineObject184

try {
    $result = $apiInstance->intlTnEndUserPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnEndUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject184**](../Model/InlineObject184.md)|  |

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

## `intlTnInventoryPost()`

```php
intlTnInventoryPost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Search International Telephone Number Inventory

This operation allows you to search for international telephone numbers in Inteliquent inventory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject185(); // \OpenAPI\Client\Model\InlineObject185

try {
    $result = $apiInstance->intlTnInventoryPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnInventoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject185**](../Model/InlineObject185.md)|  |

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

## `intlTnNoteUpdatePost()`

```php
intlTnNoteUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Update Note for Active International Telephone Numbers

This operation allows you to add a note on your company’s In-Service telephone numbers in Inteliquent inventory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject186(); // \OpenAPI\Client\Model\InlineObject186

try {
    $result = $apiInstance->intlTnNoteUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnNoteUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject186**](../Model/InlineObject186.md)|  |

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

## `intlTnOrderPost()`

```php
intlTnOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Order International Numbers

This operation allows you to order international numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject187(); // \OpenAPI\Client\Model\InlineObject187

try {
    $result = $apiInstance->intlTnOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject187**](../Model/InlineObject187.md)|  |

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

## `intlTnRequestPost()`

```php
intlTnRequestPost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Request Telephone Numbers

This operation allows you to request telephone numbers for desired quantity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject189(); // \OpenAPI\Client\Model\InlineObject189

try {
    $result = $apiInstance->intlTnRequestPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject189**](../Model/InlineObject189.md)|  |

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

## `intlTnReservePost()`

```php
intlTnReservePost($payload): \OpenAPI\Client\Model\ResponseIntlTnReserve
```

Reserve International Numbers

This operation allows you to reserve international numbers prior to ordering them.  Numbers (up to a maximum) will be reserved for up to 30 minutes before they are released back into inventory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject176(); // \OpenAPI\Client\Model\InlineObject176

try {
    $result = $apiInstance->intlTnReservePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnReservePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject176**](../Model/InlineObject176.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlTnReserve**](../Model/ResponseIntlTnReserve.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlTnReservedListPost()`

```php
intlTnReservedListPost($payload): \OpenAPI\Client\Model\ResponseIntlTnReservedList
```

Retrieve Telephone Number Reserved List

This operation allows you to retrieve all telephone numbers that are currently reserved for the given customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject190(); // \OpenAPI\Client\Model\InlineObject190

try {
    $result = $apiInstance->intlTnReservedListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnReservedListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject190**](../Model/InlineObject190.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseIntlTnReservedList**](../Model/ResponseIntlTnReservedList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlTnRoutingUpdatePost()`

```php
intlTnRoutingUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Update Telephone Number Routing

This operation allows you to update telephone number routing prior to the TN being IN SERVICE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject191(); // \OpenAPI\Client\Model\InlineObject191

try {
    $result = $apiInstance->intlTnRoutingUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnRoutingUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject191**](../Model/InlineObject191.md)|  |

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

## `intlTnUpdatePost()`

```php
intlTnUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Update In Service Telephone Numbers

This operation allows you to update telephone number details after a telephone number is IN SERVICE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternationalVoiceServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject192(); // \OpenAPI\Client\Model\InlineObject192

try {
    $result = $apiInstance->intlTnUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternationalVoiceServicesApi->intlTnUpdatePost: ', $e->getMessage(), PHP_EOL;
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
