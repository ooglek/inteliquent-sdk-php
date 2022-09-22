# OpenAPI\Client\GetCredentialsApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**credentialPost()**](GetCredentialsApi.md#credentialPost) | **POST** /credential | Get Credentials


## `credentialPost()`

```php
credentialPost($payload): \OpenAPI\Client\Model\ResponseCredential
```

Get Credentials

This endpoint allows user to Retrieve Credentials associated with client it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GetCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject138(); // \OpenAPI\Client\Model\InlineObject138

try {
    $result = $apiInstance->credentialPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetCredentialsApi->credentialPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject138**](../Model/InlineObject138.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseCredential**](../Model/ResponseCredential.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
