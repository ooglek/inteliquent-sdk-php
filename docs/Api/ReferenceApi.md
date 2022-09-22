# OpenAPI\Client\ReferenceApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressValidatePost()**](ReferenceApi.md#addressValidatePost) | **POST** /addressValidate | Validate E911 Address
[**cicListPost()**](ReferenceApi.md#cicListPost) | **POST** /cicList | Retrieve Toll Free CICs
[**customerE911NotificationListPost()**](ReferenceApi.md#customerE911NotificationListPost) | **POST** /customerE911NotificationList | Customer Notification List for Unprovisioned E911 alerts
[**customerE911NotificationPost()**](ReferenceApi.md#customerE911NotificationPost) | **POST** /customerE911Notification | Customer Notification Settings for Unprovisioned E911 alerts
[**lataInventoryPost()**](ReferenceApi.md#lataInventoryPost) | **POST** /lataInventory | Retrieve LATA List
[**rateCenterCoveragePost()**](ReferenceApi.md#rateCenterCoveragePost) | **POST** /rateCenterCoverage | Retrieve Approved DID and LNP Rate Center Coverage
[**tnE911NotificationListPost()**](ReferenceApi.md#tnE911NotificationListPost) | **POST** /tnE911NotificationList | E911 Notification List
[**tnE911NotificationPost()**](ReferenceApi.md#tnE911NotificationPost) | **POST** /tnE911Notification&#x60; | E911 Notification
[**tnE911Post()**](ReferenceApi.md#tnE911Post) | **POST** /tnE911 | Provision E911
[**tnE911ValidatePost()**](ReferenceApi.md#tnE911ValidatePost) | **POST** /tnE911Validate | Validate E911
[**tnFeatureCNamListPost()**](ReferenceApi.md#tnFeatureCNamListPost) | **POST** /tnFeatureCNamList | Retrieve CNAM Storage Numbers
[**tnFeatureCnamDipPost()**](ReferenceApi.md#tnFeatureCnamDipPost) | **POST** /tnFeatureCnamDip | Retrieve CNAM Dip Setting on All Numbers
[**tnFeatureDLListPost()**](ReferenceApi.md#tnFeatureDLListPost) | **POST** /tnFeatureDLList | Retrieve Directory Listing Numbers
[**tnFeatureE911ListPost()**](ReferenceApi.md#tnFeatureE911ListPost) | **POST** /tnFeatureE911List | Retrieve E911 Numbers
[**tnFeatureMessageListPost()**](ReferenceApi.md#tnFeatureMessageListPost) | **POST** /tnFeatureMessageList | Retrieve Messaging Numbers
[**tnPortOutHistoryPost()**](ReferenceApi.md#tnPortOutHistoryPost) | **POST** /tnPortOutHistory | Telephone Number Port-Out History
[**whitelistedAddressPost()**](ReferenceApi.md#whitelistedAddressPost) | **POST** /whitelistedAddress | White List Address


## `addressValidatePost()`

```php
addressValidatePost($payload): \OpenAPI\Client\Model\ResponseAddressValidate
```

Validate E911 Address

This endpoint allows you to validate an address for E911 service provisioning. The corrected address will be returned in the response only if the validationMsg is returned as Corrected to Valid Address. In case if  address is not close enough to find match, candidate addresses can be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject123(); // \OpenAPI\Client\Model\InlineObject123

try {
    $result = $apiInstance->addressValidatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->addressValidatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject123**](../Model/InlineObject123.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseAddressValidate**](../Model/ResponseAddressValidate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cicListPost()`

```php
cicListPost($payload): \OpenAPI\Client\Model\ResponseCicList
```

Retrieve Toll Free CICs

This endpoint allows you to retrieve a list of supported CICs for loading toll free numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject126(); // \OpenAPI\Client\Model\InlineObject126

try {
    $result = $apiInstance->cicListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->cicListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject126**](../Model/InlineObject126.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseCicList**](../Model/ResponseCicList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerE911NotificationListPost()`

```php
customerE911NotificationListPost($payload): \OpenAPI\Client\Model\ResponseCustomerNotification
```

Customer Notification List for Unprovisioned E911 alerts

This endpoint allows you to retrieve the current email addresses for a customer on which unprovisioned E911 alerts will be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject88(); // \OpenAPI\Client\Model\InlineObject88

try {
    $result = $apiInstance->customerE911NotificationListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->customerE911NotificationListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject88**](../Model/InlineObject88.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseCustomerNotification**](../Model/ResponseCustomerNotification.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerE911NotificationPost()`

```php
customerE911NotificationPost($payload): \OpenAPI\Client\Model\ResponseCustomerNotification
```

Customer Notification Settings for Unprovisioned E911 alerts

This endpoint allows you to create, update, remove email addresses for a customer to receive unprovisioned E911 alerts. To set up emails for notification, pass in the email list element with multiple email addresses. The new list will add to prior email addresses on the customer's account. To de-register email addresses for notification, please pass the removeNotification element with a value of “Y” and pass in the emailList element with a list of email addresses to be removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject87(); // \OpenAPI\Client\Model\InlineObject87

try {
    $result = $apiInstance->customerE911NotificationPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->customerE911NotificationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject87**](../Model/InlineObject87.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseCustomerNotification**](../Model/ResponseCustomerNotification.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lataInventoryPost()`

```php
lataInventoryPost($payload): \OpenAPI\Client\Model\ResponseLataInventory
```

Retrieve LATA List

This endpoint allows you to retrieve LATA information for a telephone number or list of numbers in order to provide optional forecasting information for /tnOrder and /portInOrder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject125(); // \OpenAPI\Client\Model\InlineObject125

try {
    $result = $apiInstance->lataInventoryPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->lataInventoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject125**](../Model/InlineObject125.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseLataInventory**](../Model/ResponseLataInventory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateCenterCoveragePost()`

```php
rateCenterCoveragePost($payload): \OpenAPI\Client\Model\ResponseRateCenterList
```

Retrieve Approved DID and LNP Rate Center Coverage

This endpoint allows you to retrieve a list of all rate centers with information on whether each is approved with Inteliquent for DID and LNP provisioning.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject122(); // \OpenAPI\Client\Model\InlineObject122

try {
    $result = $apiInstance->rateCenterCoveragePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->rateCenterCoveragePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject122**](../Model/InlineObject122.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseRateCenterList**](../Model/ResponseRateCenterList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnE911NotificationListPost()`

```php
tnE911NotificationListPost($payload): \OpenAPI\Client\Model\ResponseTnE911Notification
```

E911 Notification List

This endpoint allows you to retrieve the current email addresses associated with a given TN for E911 Notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject86(); // \OpenAPI\Client\Model\InlineObject86

try {
    $result = $apiInstance->tnE911NotificationListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnE911NotificationListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject86**](../Model/InlineObject86.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnE911Notification**](../Model/ResponseTnE911Notification.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnE911NotificationPost()`

```php
tnE911NotificationPost($payload): \OpenAPI\Client\Model\ResponseTnE911Notification
```

E911 Notification

This endpoint allows you to create, update, remove email addresses associated with a given TN for E911 Notifications. To set up emails for notification, pass in the email list element with multiple email addresses. The new list will add to prior email addresses on the TN. To de-register email addresses for notification, please pass the removeNotification element with a value of “Y” and pass in the emailList element with a list of email addresses to be removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject85(); // \OpenAPI\Client\Model\InlineObject85

try {
    $result = $apiInstance->tnE911NotificationPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnE911NotificationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject85**](../Model/InlineObject85.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnE911Notification**](../Model/ResponseTnE911Notification.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnE911Post()`

```php
tnE911Post($payload): \OpenAPI\Client\Model\ResponseTnE911
```

Provision E911

This endpoint allows you to provision E911 for specified TN. The provisioned address will be returned in the response only if the provisionMsg returned as Valid or Corrected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject129(); // \OpenAPI\Client\Model\InlineObject129

try {
    $result = $apiInstance->tnE911Post($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnE911Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject129**](../Model/InlineObject129.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnE911**](../Model/ResponseTnE911.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnE911ValidatePost()`

```php
tnE911ValidatePost($payload): \OpenAPI\Client\Model\ResponseTnE911ValidateInvalid
```

Validate E911

This endpoint allows you to validate E911 service attributes before adding E911 feature for specified Telephone Number. The corrected address will be returned in the response only if the validationMsg is returned as Corrected to Valid Address. In case if  address is not close enough to find match, candidate addresses can be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject130(); // \OpenAPI\Client\Model\InlineObject130

try {
    $result = $apiInstance->tnE911ValidatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnE911ValidatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject130**](../Model/InlineObject130.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnE911ValidateInvalid**](../Model/ResponseTnE911ValidateInvalid.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnFeatureCNamListPost()`

```php
tnFeatureCNamListPost($payload): \OpenAPI\Client\Model\ResponseTnFeatureCNameList
```

Retrieve CNAM Storage Numbers

This endpoint allows you to retrieve a list of numbers with CNAM storage configured for display on outbound calls (LIDB).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject118(); // \OpenAPI\Client\Model\InlineObject118

try {
    $result = $apiInstance->tnFeatureCNamListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnFeatureCNamListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject118**](../Model/InlineObject118.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseTnFeatureCNameList**](../Model/ResponseTnFeatureCNameList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnFeatureCnamDipPost()`

```php
tnFeatureCnamDipPost($payload): \OpenAPI\Client\Model\ResponseTnFeatureCnamDipList
```

Retrieve CNAM Dip Setting on All Numbers

This endpoint allows you to retrieve a list of all active numbers on your account and their corresponding inbound CNAM dip setting for incoming calls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject127(); // \OpenAPI\Client\Model\InlineObject127

try {
    $result = $apiInstance->tnFeatureCnamDipPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnFeatureCnamDipPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject127**](../Model/InlineObject127.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseTnFeatureCnamDipList**](../Model/ResponseTnFeatureCnamDipList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnFeatureDLListPost()`

```php
tnFeatureDLListPost($payload): \OpenAPI\Client\Model\ResponseTnFeatureDLList
```

Retrieve Directory Listing Numbers

This endpoint allows you to retrieve a list of numbers with directory listing configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject119(); // \OpenAPI\Client\Model\InlineObject119

try {
    $result = $apiInstance->tnFeatureDLListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnFeatureDLListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject119**](../Model/InlineObject119.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseTnFeatureDLList**](../Model/ResponseTnFeatureDLList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnFeatureE911ListPost()`

```php
tnFeatureE911ListPost($payload): \OpenAPI\Client\Model\ResponseTnFeatureE911List
```

Retrieve E911 Numbers

This endpoint allows you to retrieve a list of numbers with E911 configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject120(); // \OpenAPI\Client\Model\InlineObject120

try {
    $result = $apiInstance->tnFeatureE911ListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnFeatureE911ListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject120**](../Model/InlineObject120.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseTnFeatureE911List**](../Model/ResponseTnFeatureE911List.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnFeatureMessageListPost()`

```php
tnFeatureMessageListPost($payload): \OpenAPI\Client\Model\ResponseTnFeatureMessageList
```

Retrieve Messaging Numbers

This endpoint allows you to retrieve a list of numbers with messaging configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject121(); // \OpenAPI\Client\Model\InlineObject121

try {
    $result = $apiInstance->tnFeatureMessageListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnFeatureMessageListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject121**](../Model/InlineObject121.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseTnFeatureMessageList**](../Model/ResponseTnFeatureMessageList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnPortOutHistoryPost()`

```php
tnPortOutHistoryPost($payload): \OpenAPI\Client\Model\TnPortOutHistory
```

Telephone Number Port-Out History

This endpoint allows you to retrieve an audit of historical port-out activity on your account for the past three months by order and telephone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject128(); // \OpenAPI\Client\Model\InlineObject128

try {
    $result = $apiInstance->tnPortOutHistoryPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->tnPortOutHistoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject128**](../Model/InlineObject128.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TnPortOutHistory**](../Model/TnPortOutHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `whitelistedAddressPost()`

```php
whitelistedAddressPost($payload): \OpenAPI\Client\Model\WhitelistedAddress
```

White List Address

This operation allows you to search for and get the whitelisted addresses using Address External Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject124(); // \OpenAPI\Client\Model\InlineObject124

try {
    $result = $apiInstance->whitelistedAddressPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceApi->whitelistedAddressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject124**](../Model/InlineObject124.md)|  |

### Return type

[**\OpenAPI\Client\Model\WhitelistedAddress**](../Model/WhitelistedAddress.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
