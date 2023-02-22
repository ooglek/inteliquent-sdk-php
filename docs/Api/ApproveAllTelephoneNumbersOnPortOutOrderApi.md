# OpenAPI\Client\ApproveAllTelephoneNumbersOnPortOutOrderApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**portOutApprovalPost()**](ApproveAllTelephoneNumbersOnPortOutOrderApi.md#portOutApprovalPost) | **POST** /portOutApproval | Approve Port-Out Telephone Numbers


## `portOutApprovalPost()`

```php
portOutApprovalPost($payload): \OpenAPI\Client\Model\InlineResponse20013
```

Approve Port-Out Telephone Numbers

This endpoint allows user to approve Port-Out telephone numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ApproveAllTelephoneNumbersOnPortOutOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject136(); // \OpenAPI\Client\Model\InlineObject136

try {
    $result = $apiInstance->portOutApprovalPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApproveAllTelephoneNumbersOnPortOutOrderApi->portOutApprovalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject136**](../Model/InlineObject136.md)|  |

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
