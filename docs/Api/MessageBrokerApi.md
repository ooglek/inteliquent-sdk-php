# OpenAPI\Client\MessageBrokerApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureAuthorizationPost()**](MessageBrokerApi.md#configureAuthorizationPost) | **POST** /configureAuthorization | Configure Inbound Message Webhook
[**customerConfiguredWebhookURLForInboundMessagingPost()**](MessageBrokerApi.md#customerConfiguredWebhookURLForInboundMessagingPost) | **POST** /CustomerConfiguredWebhookURLForInboundMessaging | Receive Inbound Message Webhook
[**publishMessagesPost()**](MessageBrokerApi.md#publishMessagesPost) | **POST** /publishMessages | Send Outbound Message
[**removeAuthorizationPost()**](MessageBrokerApi.md#removeAuthorizationPost) | **POST** /removeAuthorization | Remove API Key and Webhook Information
[**selectAuthorizationPost()**](MessageBrokerApi.md#selectAuthorizationPost) | **POST** /selectAuthorization | Retrieve API Key and Webhook Information


## `configureAuthorizationPost()`

```php
configureAuthorizationPost($payload): \OpenAPI\Client\Model\ResponseConfigureAuthorization
```

Configure Inbound Message Webhook

Use this endpoint to add webhook URLs for inbound messages. Optionally, webhooks can be applied to different telephone numbers on your account. One of your outbound API keys generated from the portal must be sent in the authorization header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageBrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject141(); // \OpenAPI\Client\Model\InlineObject141

try {
    $result = $apiInstance->configureAuthorizationPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageBrokerApi->configureAuthorizationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject141**](../Model/InlineObject141.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseConfigureAuthorization**](../Model/ResponseConfigureAuthorization.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerConfiguredWebhookURLForInboundMessagingPost()`

```php
customerConfiguredWebhookURLForInboundMessagingPost($payload): \OpenAPI\Client\Model\InlineResponse20038
```

Receive Inbound Message Webhook

When an inbound message is received by the platform, it will be sent via preconfigured webhooks to your platform. The platform will use your inbound webhook information in the following sequence <ul>   <li>Check if there is an inbound webhook configured for the inbound TN, if yes, then use the corresponding URL.</li>   <li>Check if there is a company level webhook configured for inbound messaging. If yes, then use the corresponding URL.</li>   <li>If no inbound webhooks are found configured for the company, then the message is dropped and not delivered anywhere.</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageBrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject143(); // \OpenAPI\Client\Model\InlineObject143

try {
    $result = $apiInstance->customerConfiguredWebhookURLForInboundMessagingPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageBrokerApi->customerConfiguredWebhookURLForInboundMessagingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject143**](../Model/InlineObject143.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishMessagesPost()`

```php
publishMessagesPost($payload): \OpenAPI\Client\Model\ResponsePublishMessage
```

Send Outbound Message

This endpoint allows you to send an outbound SMS or MMS message. The value of the from parameter must be a telephone number on your Inteliquent account with active messaging services enabled. The authorization bearer header in your request must match one of your API keys for the message broker service. Validation is performed to ensure that the number sent in the from parameter is assigned to your account and has active messaging service enabled.Url for this API will be 'https://messagebroker.inteliquent.com/msgbroker/rest/publishMessages' and Authorization should be \"Authorization:Bearer Api_key\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageBrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject140(); // \OpenAPI\Client\Model\InlineObject140

try {
    $result = $apiInstance->publishMessagesPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageBrokerApi->publishMessagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject140**](../Model/InlineObject140.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsePublishMessage**](../Model/ResponsePublishMessage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAuthorizationPost()`

```php
removeAuthorizationPost($payload): \OpenAPI\Client\Model\ResponseRemoveAuthorization
```

Remove API Key and Webhook Information

Use this endpoint to remove API keys and webhooks from your message broker account. One of your outbound API keys generated from the portal must be sent in the authorization header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageBrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject142(); // \OpenAPI\Client\Model\InlineObject142

try {
    $result = $apiInstance->removeAuthorizationPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageBrokerApi->removeAuthorizationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject142**](../Model/InlineObject142.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseRemoveAuthorization**](../Model/ResponseRemoveAuthorization.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectAuthorizationPost()`

```php
selectAuthorizationPost($payload): \OpenAPI\Client\Model\ResponseSelectAuthorization
```

Retrieve API Key and Webhook Information

Use this endpoint to retrieve all message broker API keys and webhook URLs configured for your account’s message broker service. The body of the request should be empty, and one of your API keys generated from the portal must be sent in the authorization header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageBrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = array('key' => new \stdClass); // object | Request Payload

try {
    $result = $apiInstance->selectAuthorizationPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageBrokerApi->selectAuthorizationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | **object**| Request Payload |

### Return type

[**\OpenAPI\Client\Model\ResponseSelectAuthorization**](../Model/ResponseSelectAuthorization.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
