# OpenAPI\Client\ClientKeyManagementApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteClientPost()**](ClientKeyManagementApi.md#deleteClientPost) | **POST** /deleteClient | Delete Client Key
[**getClientListPost()**](ClientKeyManagementApi.md#getClientListPost) | **POST** /getClientList | Get Client Key List
[**registerClientPost()**](ClientKeyManagementApi.md#registerClientPost) | **POST** /registerClient | Register a Client
[**resetClientPost()**](ClientKeyManagementApi.md#resetClientPost) | **POST** /resetClient | Reset a Client
[**updateClientPost()**](ClientKeyManagementApi.md#updateClientPost) | **POST** /updateClient | Update Client Key Information


## `deleteClientPost()`

```php
deleteClientPost($payload): \OpenAPI\Client\Model\InlineResponse20013
```

Delete Client Key

If a given key needs to be deleted, this call should be invoked.<br> Please Note: There are various checks that are enforced. You cannot delete a primary key. To delete a key that is primary, first execute updateClient to make another key to become primary and then execute /deleteClient.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientKeyManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject41(); // \OpenAPI\Client\Model\InlineObject41

try {
    $result = $apiInstance->deleteClientPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientKeyManagementApi->deleteClientPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject41**](../Model/InlineObject41.md)|  |

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

## `getClientListPost()`

```php
getClientListPost($payload): \OpenAPI\Client\Model\ResponseGetClient
```

Get Client Key List

To retrieve the full list of all client keys, execute a /getClientList call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientKeyManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject43(); // \OpenAPI\Client\Model\InlineObject43

try {
    $result = $apiInstance->getClientListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientKeyManagementApi->getClientListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject43**](../Model/InlineObject43.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseGetClient**](../Model/ResponseGetClient.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerClientPost()`

```php
registerClientPost($payload): \OpenAPI\Client\Model\ResponseRegisterClient
```

Register a Client

In order to create a new client key and secret, a call to the /registerClient has to be made. This endpoint will create a key/secret pair that can then be used to make subsequent calls to various Inteliquent Service APIs. Please Note: The first key for the company would be setup using the Customer Portal. Once the first key is set up, it can then be used to create additional keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientKeyManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject39(); // \OpenAPI\Client\Model\InlineObject39

try {
    $result = $apiInstance->registerClientPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientKeyManagementApi->registerClientPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject39**](../Model/InlineObject39.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseRegisterClient**](../Model/ResponseRegisterClient.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetClientPost()`

```php
resetClientPost($payload): \OpenAPI\Client\Model\ResponseResetClient
```

Reset a Client

There are times when the key/secret combination needs to be reset. Calling this endpoint will reset the secret for the given key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientKeyManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject40(); // \OpenAPI\Client\Model\InlineObject40

try {
    $result = $apiInstance->resetClientPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientKeyManagementApi->resetClientPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject40**](../Model/InlineObject40.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseResetClient**](../Model/ResponseResetClient.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClientPost()`

```php
updateClientPost($payload): \OpenAPI\Client\Model\ResponseUpdateClient
```

Update Client Key Information

In order to make the current key the new “Primary” or change of keyName, this end point will do exactly that. Calling this endpoint will change the isPrimary flag or the key name for a given key. <br>Please Note: this call can also make a given key primary. There are various checks that are enforced.<br> 1.  You cannot update a primary key to make its isPrimary=false.<br>2.  You can update a non-primary key to become a primary key. The existing primary is also updated to not be primary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientKeyManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject42(); // \OpenAPI\Client\Model\InlineObject42

try {
    $result = $apiInstance->updateClientPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientKeyManagementApi->updateClientPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject42**](../Model/InlineObject42.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseUpdateClient**](../Model/ResponseUpdateClient.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
