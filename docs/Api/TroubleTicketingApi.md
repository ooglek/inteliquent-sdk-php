# OpenAPI\Client\TroubleTicketingApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ticketAddDocumentPost()**](TroubleTicketingApi.md#ticketAddDocumentPost) | **POST** /ticketAddDocument | Add Trouble Ticket Document
[**ticketAddNotePost()**](TroubleTicketingApi.md#ticketAddNotePost) | **POST** /ticketAddNote | Add Trouble Ticket Note
[**ticketCreatePost()**](TroubleTicketingApi.md#ticketCreatePost) | **POST** /ticketCreate | Create Trouble Ticket
[**ticketDetailPost()**](TroubleTicketingApi.md#ticketDetailPost) | **POST** /ticketDetail | View Trouble Ticket Detail
[**ticketDocumentPost()**](TroubleTicketingApi.md#ticketDocumentPost) | **POST** /ticketDocument | Retrieve Trouble Ticket Document
[**ticketListPost()**](TroubleTicketingApi.md#ticketListPost) | **POST** /ticketList | View Trouble Ticket List
[**ticketNotePost()**](TroubleTicketingApi.md#ticketNotePost) | **POST** /ticketNote | View Trouble Ticket Note


## `ticketAddDocumentPost()`

```php
ticketAddDocumentPost($payload): \OpenAPI\Client\Model\InlineResponse20016
```

Add Trouble Ticket Document

This endpoint allows you to add a document to an existing trouble ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TroubleTicketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject45(); // \OpenAPI\Client\Model\InlineObject45

try {
    $result = $apiInstance->ticketAddDocumentPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TroubleTicketingApi->ticketAddDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject45**](../Model/InlineObject45.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketAddNotePost()`

```php
ticketAddNotePost($payload): \OpenAPI\Client\Model\InlineResponse20017
```

Add Trouble Ticket Note

This endpoint allows you to add a note to an existing trouble ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TroubleTicketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject46(); // \OpenAPI\Client\Model\InlineObject46

try {
    $result = $apiInstance->ticketAddNotePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TroubleTicketingApi->ticketAddNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject46**](../Model/InlineObject46.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketCreatePost()`

```php
ticketCreatePost($payload): \OpenAPI\Client\Model\InlineResponse20015
```

Create Trouble Ticket

This endpoint allows you to create a trouble ticket for a service-related issue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TroubleTicketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject44(); // \OpenAPI\Client\Model\InlineObject44

try {
    $result = $apiInstance->ticketCreatePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TroubleTicketingApi->ticketCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject44**](../Model/InlineObject44.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketDetailPost()`

```php
ticketDetailPost($payload): \OpenAPI\Client\Model\ResponseTicketDetail
```

View Trouble Ticket Detail

This endpoint allows you to obtain details about an existing trouble ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TroubleTicketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject48(); // \OpenAPI\Client\Model\InlineObject48

try {
    $result = $apiInstance->ticketDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TroubleTicketingApi->ticketDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject48**](../Model/InlineObject48.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTicketDetail**](../Model/ResponseTicketDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketDocumentPost()`

```php
ticketDocumentPost($payload): \OpenAPI\Client\Model\ResponseTicketDocument
```

Retrieve Trouble Ticket Document

This endpoint allows you to retrieve documents attached to an existing trouble ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TroubleTicketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject50(); // \OpenAPI\Client\Model\InlineObject50

try {
    $result = $apiInstance->ticketDocumentPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TroubleTicketingApi->ticketDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject50**](../Model/InlineObject50.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTicketDocument**](../Model/ResponseTicketDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketListPost()`

```php
ticketListPost($payload): \OpenAPI\Client\Model\ResponseTicketList
```

View Trouble Ticket List

This endpoint allows you to obtain a list of your existing trouble tickets with Inteliquent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TroubleTicketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject47(); // \OpenAPI\Client\Model\InlineObject47

try {
    $result = $apiInstance->ticketListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TroubleTicketingApi->ticketListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject47**](../Model/InlineObject47.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTicketList**](../Model/ResponseTicketList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketNotePost()`

```php
ticketNotePost($payload): \OpenAPI\Client\Model\ResponseTicketNote
```

View Trouble Ticket Note

This endpoint allows you to view notes associated to an existing trouble ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TroubleTicketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject49(); // \OpenAPI\Client\Model\InlineObject49

try {
    $result = $apiInstance->ticketNotePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TroubleTicketingApi->ticketNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject49**](../Model/InlineObject49.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTicketNote**](../Model/ResponseTicketNote.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
