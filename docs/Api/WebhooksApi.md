# OpenAPI\Client\WebhooksApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerConfiguredWebhookURLForOrderUpdatesPost()**](WebhooksApi.md#customerConfiguredWebhookURLForOrderUpdatesPost) | **POST** /customerConfiguredWebhookURLForOrderUpdates | Webhook for order apis


## `customerConfiguredWebhookURLForOrderUpdatesPost()`

```php
customerConfiguredWebhookURLForOrderUpdatesPost($payload): \OpenAPI\Client\Model\InlineResponse20039
```

Webhook for order apis

Webhooks are triggered for the following events <ul> <li>Order status update (all order types)</li> <li>Port-in number status update (different statuses may be applied to individual numbers on the same port-in order)</li> <li>Port-out number authorization (if authorizeWebhookPortout is set to Y for your account)</li> <li>Wireless Port-out number authorization (if authorizeWebhookPortout is set to Y for your account)</li><li> Port-out number completion (if authorizeWebhookPortout is set to Y for your account)</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject144(); // \OpenAPI\Client\Model\InlineObject144

try {
    $result = $apiInstance->customerConfiguredWebhookURLForOrderUpdatesPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->customerConfiguredWebhookURLForOrderUpdatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject144**](../Model/InlineObject144.md)|  |

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
