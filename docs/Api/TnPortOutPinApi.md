# OpenAPI\Client\TnPortOutPinApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tnPortOutPinDetailPost()**](TnPortOutPinApi.md#tnPortOutPinDetailPost) | **POST** /tnPortOutPinDetail | Assigned TN Port Out PIN


## `tnPortOutPinDetailPost()`

```php
tnPortOutPinDetailPost($payload): \OpenAPI\Client\Model\ResponseTnPortOutPin
```

Assigned TN Port Out PIN

This endpoint allows user to retreieve TN list of portOut PIN inside.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TnPortOutPinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject136(); // \OpenAPI\Client\Model\InlineObject136

try {
    $result = $apiInstance->tnPortOutPinDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TnPortOutPinApi->tnPortOutPinDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject136**](../Model/InlineObject136.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseTnPortOutPin**](../Model/ResponseTnPortOutPin.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
