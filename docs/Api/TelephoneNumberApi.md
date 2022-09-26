# OpenAPI\Client\TelephoneNumberApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkTnInventoryPost()**](TelephoneNumberApi.md#bulkTnInventoryPost) | **POST** /bulkTnInventory | Multi Search Telephone Number Inventory
[**npaNxxFootPrintPost()**](TelephoneNumberApi.md#npaNxxFootPrintPost) | **POST** /npaNxxFootPrint | Return NPA NXX Footprint
[**portOutPinUpdatePost()**](TelephoneNumberApi.md#portOutPinUpdatePost) | **POST** /portOutPinUpdate | Update Port-Out PIN for Active Telephone Number
[**tnAssignedListPost()**](TelephoneNumberApi.md#tnAssignedListPost) | **POST** /tnAssignedList | Retrieve Assigned Telephone Number List
[**tnDetailPost()**](TelephoneNumberApi.md#tnDetailPost) | **POST** /tnDetail | Retrieve Telephone Number Detail
[**tnDisconnectPost()**](TelephoneNumberApi.md#tnDisconnectPost) | **POST** /tnDisconnect | Disconnect Active Telephone Number
[**tnFeatureOrderPost()**](TelephoneNumberApi.md#tnFeatureOrderPost) | **POST** /tnFeatureOrder | Add, Update, or Remove Active Telephone Number Feature
[**tnForwardListPost()**](TelephoneNumberApi.md#tnForwardListPost) | **POST** /tnForwardList | Phone Number Call Forward Listing
[**tnForwardPost()**](TelephoneNumberApi.md#tnForwardPost) | **POST** /tnForward | Manage Phone Number Call Forward Settings
[**tnInventoryCoveragePost()**](TelephoneNumberApi.md#tnInventoryCoveragePost) | **POST** /tnInventoryCoverage | Retrieve Telephone Number Inventory Coverage
[**tnInventoryPost()**](TelephoneNumberApi.md#tnInventoryPost) | **POST** /tnInventory | Search Telephone Number Inventory
[**tnNoteUpdatePost()**](TelephoneNumberApi.md#tnNoteUpdatePost) | **POST** /tnNoteUpdate | Update Note for Active Telephone Number
[**tnOrderPost()**](TelephoneNumberApi.md#tnOrderPost) | **POST** /tnOrder | Order New Telephone Number
[**tnPendingDisconnectListPost()**](TelephoneNumberApi.md#tnPendingDisconnectListPost) | **POST** /tnPendingDisconnectList | List of TNs Pending Disconnection
[**tnReleasePost()**](TelephoneNumberApi.md#tnReleasePost) | **POST** /tnRelease | Release Reserved TNs
[**tnReservePost()**](TelephoneNumberApi.md#tnReservePost) | **POST** /tnReserve | Reserve TNs
[**tnReservedListPost()**](TelephoneNumberApi.md#tnReservedListPost) | **POST** /tnReservedList | Retrieve Reserved TNs
[**tnRestorePost()**](TelephoneNumberApi.md#tnRestorePost) | **POST** /tnRestore | Restore Disconnected Telephone Numbers
[**tnUpdatePost()**](TelephoneNumberApi.md#tnUpdatePost) | **POST** /tnUpdate | Update Active Telephone Number Trunk Group
[**voiceScriptDetailPost()**](TelephoneNumberApi.md#voiceScriptDetailPost) | **POST** /voiceScriptDetail | List Voice Script Settings
[**voiceScriptPost()**](TelephoneNumberApi.md#voiceScriptPost) | **POST** /voiceScript | Voice Platform Script Configuration


## `bulkTnInventoryPost()`

```php
bulkTnInventoryPost($payload): \OpenAPI\Client\Model\ResponseSearchTN
```

Multi Search Telephone Number Inventory

This endpoint allows users to apply multiple search criteria's Inteliquent's customers to search for available telephone numbers. There are a number of parameters that can be leveraged to filter the list of telephone numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject133(); // \OpenAPI\Client\Model\InlineObject133

try {
    $result = $apiInstance->bulkTnInventoryPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->bulkTnInventoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject133**](../Model/InlineObject133.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseSearchTN**](../Model/ResponseSearchTN.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `npaNxxFootPrintPost()`

```php
npaNxxFootPrintPost($payload): \OpenAPI\Client\Model\ResponseNpaNxxFootPrint
```

Return NPA NXX Footprint

This endpoint allows user to retrive NPA NXX foot print

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject134(); // \OpenAPI\Client\Model\InlineObject134

try {
    $result = $apiInstance->npaNxxFootPrintPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->npaNxxFootPrintPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject134**](../Model/InlineObject134.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseNpaNxxFootPrint**](../Model/ResponseNpaNxxFootPrint.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portOutPinUpdatePost()`

```php
portOutPinUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Update Port-Out PIN for Active Telephone Number

This endpoint allows you to add a PIN for onnet (Tier 0 & HI) port-out protection on your company’s In Service telephone numbers in Inteliquent inventory. Telephone numbers without port-out PINs may be protected by a company-level port-out PIN if one exists, which can be set using the /accountDefault API operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject76(); // \OpenAPI\Client\Model\InlineObject76

try {
    $result = $apiInstance->portOutPinUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->portOutPinUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject76**](../Model/InlineObject76.md)|  |

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

## `tnAssignedListPost()`

```php
tnAssignedListPost($payload): \OpenAPI\Client\Model\ResponseTnSearchAssignedBasic
```

Retrieve Assigned Telephone Number List

This endpoint allows you to retrieve a full list of telephone numbers assigned to your company, including Pending, In Service, and Pending Disconnect numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject63(); // \OpenAPI\Client\Model\InlineObject63

try {
    $result = $apiInstance->tnAssignedListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnAssignedListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject63**](../Model/InlineObject63.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnSearchAssignedBasic**](../Model/ResponseTnSearchAssignedBasic.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnDetailPost()`

```php
tnDetailPost($payload): \OpenAPI\Client\Model\ResponseTnDetail
```

Retrieve Telephone Number Detail

This endpoint allows you to retrieve details about the features enabled on a telephone number assigned to your company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject64(); // \OpenAPI\Client\Model\InlineObject64

try {
    $result = $apiInstance->tnDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject64**](../Model/InlineObject64.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnDetail**](../Model/ResponseTnDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnDisconnectPost()`

```php
tnDisconnectPost($payload): \OpenAPI\Client\Model\InlineResponse20023
```

Disconnect Active Telephone Number

This endpoint allows you to disconnect active (In Service) telephone numbers assigned to your company. Immediate validation is performed for requests with 100 or fewer numbers, and invalid numbers are returned in the response along with the order number (if applicable). Validation for larger orders is backgrounded as documented in the Order Validation section.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject61(); // \OpenAPI\Client\Model\InlineObject61

try {
    $result = $apiInstance->tnDisconnectPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnDisconnectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject61**](../Model/InlineObject61.md)|  |

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

## `tnFeatureOrderPost()`

```php
tnFeatureOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20025
```

Add, Update, or Remove Active Telephone Number Feature

This endpoint allows you to add, update, or remove features on active (In Service) numbers. Immediate validation is performed for requests with 100 or fewer numbers, and invalid numbers are returned in the response. Validation for larger orders is backgrounded as documented in Order Validation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject68(); // \OpenAPI\Client\Model\InlineObject68

try {
    $result = $apiInstance->tnFeatureOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnFeatureOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject68**](../Model/InlineObject68.md)|  |

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

## `tnForwardListPost()`

```php
tnForwardListPost($payload): \OpenAPI\Client\Model\InlineResponse20028
```

Phone Number Call Forward Listing

This endpoint allows you to retrieve list of TNs that have forwarding enabled for a given company based on the privateKey of the company. (Please note: This feature is available upon request. Please contact Client Services to activate this feature for your API.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject73(); // \OpenAPI\Client\Model\InlineObject73

try {
    $result = $apiInstance->tnForwardListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnForwardListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject73**](../Model/InlineObject73.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnForwardPost()`

```php
tnForwardPost($payload): \OpenAPI\Client\Model\InlineResponse20027
```

Manage Phone Number Call Forward Settings

This endpoint allows you to add or delete call forwarding from a telephone number to another. To remove call forwarding from a TN, please pass the removeForwardTo element with a value of \"Y\". (Please note: This feature is available upon request. Please contact Client Services to activate this feature for your API.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject72(); // \OpenAPI\Client\Model\InlineObject72

try {
    $result = $apiInstance->tnForwardPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnForwardPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject72**](../Model/InlineObject72.md)|  |

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

## `tnInventoryCoveragePost()`

```php
tnInventoryCoveragePost($payload): object
```

Retrieve Telephone Number Inventory Coverage

This endpoint allows you to retrieve quantities of available telephone numbers in Inteliquent inventory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject67(); // \OpenAPI\Client\Model\InlineObject67

try {
    $result = $apiInstance->tnInventoryCoveragePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnInventoryCoveragePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject67**](../Model/InlineObject67.md)|  |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnInventoryPost()`

```php
tnInventoryPost($payload): \OpenAPI\Client\Model\ResponseSearchTN
```

Search Telephone Number Inventory

This endpoint allows you to search for telephone numbers in Inteliquent inventory. Now we can perform search in multiple ways like rate center, city/zip and postal code search along with radius or sequential or local area option. &nbsp; <br>We can perform search as mentioned below<ul> <li>Addition of the \"City/State\" and \"City/State with Radius\" searches</li> <li>Addition of the \"Postal Code\" and \"Postal Code with Radius\" searches</li> <li>Addition of the local option within a subset of the searches like \"Rate Center\" or \"City/State\" or \"Postal Code\"</li> <li>Addition of an option to toggle between Wireless or Wireline search</li> </ul> <br>Telephone Number Search Rules<ul> <li>tnMask or tnWildcard are required (even if searching for all TNs). tnMask takes priority if both are specified. </li> <li>Rate center, city, and postal code are mutually exclusive.</li> <li>If city is specified, the state must be specified.</li> <li>Radius is only valid if city and province or zip are specified.</li> <li>Radius, local, and sequential are mutually exclusive.</li> <li>In case of local, NPANXX takes priority if city or province or rateCenter specified.</li> <li>If local is specified, one of the following must be true:<ul> <li>tnMask or tnWildcard specify the NPANXX (first six digits)</li><li>rateCenter is specified</li><li>city and province are specified (without a radius)</li><li>postal Code is specified (without a radius)</li></ul></li> <li>If wireless is specified, the customer must be configured to allow ordering wireless TNs.</li> </ul> <br>tnWildcard interpretations are listed below<ul> <li>0 - 9    No translation</li> <li>Aa - Cc  Translated to 2</li> <li>Dd - Ff  Translated to 3</li> <li>Gg - Ii  Translated to 4</li> <li>Jj - Ll  Translated to 5</li> <li>Mm - Oo  Translated to 6</li> <li>Pp - Ss  Translated to 7</li> <li>Tt - Vv  Translated to 8</li> <li>Ww - Zz  Translated to 9</li> <li>*    Any character sequence</li> <li>?    Any single character</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject62(); // \OpenAPI\Client\Model\InlineObject62

try {
    $result = $apiInstance->tnInventoryPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnInventoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject62**](../Model/InlineObject62.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseSearchTN**](../Model/ResponseSearchTN.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnNoteUpdatePost()`

```php
tnNoteUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Update Note for Active Telephone Number

This endpoint allows you to add a note on your company’s In Service telephone or toll free numbers in Inteliquent inventory. Notes are searchable and returned in the /tnDetail API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject77(); // \OpenAPI\Client\Model\InlineObject77

try {
    $result = $apiInstance->tnNoteUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnNoteUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject77**](../Model/InlineObject77.md)|  |

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

## `tnOrderPost()`

```php
tnOrderPost($payload): \OpenAPI\Client\Model\InlineResponse20021
```

Order New Telephone Number

This endpoint allows you to order telephone numbers from Inteliquent inventory. Immediate validation is performed for requests with 100 or fewer numbers, and invalid numbers are returned in the response. Validation for larger orders is backgrounded as documented in the Order Validation section.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject59(); // \OpenAPI\Client\Model\InlineObject59

try {
    $result = $apiInstance->tnOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject59**](../Model/InlineObject59.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnPendingDisconnectListPost()`

```php
tnPendingDisconnectListPost($payload): \OpenAPI\Client\Model\PendingDisconnectTnList
```

List of TNs Pending Disconnection

This operation allows you to retrieve the list of TNs that have been disconnected in the past 60 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject147(); // \OpenAPI\Client\Model\InlineObject147

try {
    $result = $apiInstance->tnPendingDisconnectListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnPendingDisconnectListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject147**](../Model/InlineObject147.md)|  |

### Return type

[**\OpenAPI\Client\Model\PendingDisconnectTnList**](../Model/PendingDisconnectTnList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnReleasePost()`

```php
tnReleasePost($payload): \OpenAPI\Client\Model\ResponseTnRelease
```

Release Reserved TNs

This endpoint allows you to release reserved tns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject146(); // \OpenAPI\Client\Model\InlineObject146

try {
    $result = $apiInstance->tnReleasePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnReleasePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject146**](../Model/InlineObject146.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnRelease**](../Model/ResponseTnRelease.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnReservePost()`

```php
tnReservePost($payload): \OpenAPI\Client\Model\ResponseTnReserve
```

Reserve TNs

This endpoint allows you to reserve tns before those are ready to order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject145(); // \OpenAPI\Client\Model\InlineObject145

try {
    $result = $apiInstance->tnReservePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnReservePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject145**](../Model/InlineObject145.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnReserve**](../Model/ResponseTnReserve.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnReservedListPost()`

```php
tnReservedListPost($payload): \OpenAPI\Client\Model\ResponseReservedTnList
```

Retrieve Reserved TNs

This endpoint allows you to retrieve reserved tns which can be ordered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject149(); // \OpenAPI\Client\Model\InlineObject149

try {
    $result = $apiInstance->tnReservedListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnReservedListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject149**](../Model/InlineObject149.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseReservedTnList**](../Model/ResponseReservedTnList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnRestorePost()`

```php
tnRestorePost($payload): \OpenAPI\Client\Model\InlineResponse20033
```

Restore Disconnected Telephone Numbers

This operation allows you to restore TNs that are pending disconnection and reactivate those TNs within 60 days. Please note: as part of the tnRestore, all additional information around trunkgroups, features etc. has to be included as part of the request. Previous values are not restored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject148(); // \OpenAPI\Client\Model\InlineObject148

try {
    $result = $apiInstance->tnRestorePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnRestorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject148**](../Model/InlineObject148.md)|  |

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

## `tnUpdatePost()`

```php
tnUpdatePost($payload): \OpenAPI\Client\Model\InlineResponse20022
```

Update Active Telephone Number Trunk Group

This endpoint allows you to update the trunk group of active (In Service) telephone numbers assigned to your company. Immediate validation is performed for requests with 100 or fewer numbers, and invalid numbers are returned in the response along with the order number (if applicable). Validation for larger orders is backgrounded as documented in the Order Validation section.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject60(); // \OpenAPI\Client\Model\InlineObject60

try {
    $result = $apiInstance->tnUpdatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->tnUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject60**](../Model/InlineObject60.md)|  |

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

## `voiceScriptDetailPost()`

```php
voiceScriptDetailPost($payload): \OpenAPI\Client\Model\ResponseVoiceScriptList
```

List Voice Script Settings

This endpoint allows you to retrieve current voice scripts associated with a given TN or domain. (Please note: This feature is available upon request. Please contact Client Services to activate this feature for your API.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject71(); // \OpenAPI\Client\Model\InlineObject71

try {
    $result = $apiInstance->voiceScriptDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->voiceScriptDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject71**](../Model/InlineObject71.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseVoiceScriptList**](../Model/ResponseVoiceScriptList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voiceScriptPost()`

```php
voiceScriptPost($payload): \OpenAPI\Client\Model\ResponseVoiceScript
```

Voice Platform Script Configuration

This endpoint allows you to add, delete, enable or disable a voice script from a telephone number or  domain. To remove the script from a TN or domain, please pass the removeScript element with a value of \"Y\". (Please note: This feature is available upon request. Please contact Client Services to activate this feature for your API.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TelephoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject70(); // \OpenAPI\Client\Model\InlineObject70

try {
    $result = $apiInstance->voiceScriptPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephoneNumberApi->voiceScriptPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject70**](../Model/InlineObject70.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseVoiceScript**](../Model/ResponseVoiceScript.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
