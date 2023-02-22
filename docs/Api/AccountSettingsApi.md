# OpenAPI\Client\AccountSettingsApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountDefaultDetailPost()**](AccountSettingsApi.md#accountDefaultDetailPost) | **POST** /accountDefaultDetail | View Account Default Settings
[**accountDefaultPost()**](AccountSettingsApi.md#accountDefaultPost) | **POST** /accountDefault | Update Account Default Settings


## `accountDefaultDetailPost()`

```php
accountDefaultDetailPost($payload): \OpenAPI\Client\Model\ResponseAccountDefaultDetail
```

View Account Default Settings

This endpoint allows you to view the current default settings for your company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject135(); // \OpenAPI\Client\Model\InlineObject135

try {
    $result = $apiInstance->accountDefaultDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountDefaultDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject135**](../Model/InlineObject135.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseAccountDefaultDetail**](../Model/ResponseAccountDefaultDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountDefaultPost()`

```php
accountDefaultPost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Update Account Default Settings

This endpoint allows you to update the current default settings for your company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject134(); // \OpenAPI\Client\Model\InlineObject134

try {
    $result = $apiInstance->accountDefaultPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountDefaultPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject134**](../Model/InlineObject134.md)|  |

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
