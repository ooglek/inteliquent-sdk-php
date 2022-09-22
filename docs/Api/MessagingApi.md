# OpenAPI\Client\MessagingApi

All URIs are relative to https://services.inteliquent.com/Services/2.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMessagingBrandPost()**](MessagingApi.md#addMessagingBrandPost) | **POST** /addMessagingBrand | Add Brand
[**addMessagingCampaignPost()**](MessagingApi.md#addMessagingCampaignPost) | **POST** /addMessagingCampaign | Add Campaign
[**brandOrderDetailPost()**](MessagingApi.md#brandOrderDetailPost) | **POST** /brandOrderDetail | Brand Order Detail
[**brandOrderListPost()**](MessagingApi.md#brandOrderListPost) | **POST** /brandOrderList | Brand Order List
[**brandOrderPost()**](MessagingApi.md#brandOrderPost) | **POST** /brandOrder | Create a new Brand
[**campaignCredentialsPost()**](MessagingApi.md#campaignCredentialsPost) | **POST** /campaignCredentials | Get Campaign Credentials
[**campaignDetailPost()**](MessagingApi.md#campaignDetailPost) | **POST** /campaignDetail | Campaign Details
[**campaignOrderDetailPost()**](MessagingApi.md#campaignOrderDetailPost) | **POST** /campaignOrderDetail | Get Campaign Order Details
[**campaignOrderListPost()**](MessagingApi.md#campaignOrderListPost) | **POST** /campaignOrderList | List Campaign Orders
[**campaignOrderPost()**](MessagingApi.md#campaignOrderPost) | **POST** /campaignOrder | Create a new Campaign
[**messageCampaignsPost()**](MessagingApi.md#messageCampaignsPost) | **POST** /messageCampaigns | View Messaging Campaign List
[**messagingBrandAlternateBusinessIdTypeListPost()**](MessagingApi.md#messagingBrandAlternateBusinessIdTypeListPost) | **POST** /messagingBrand/alternateBusinessIdTypeList | Alternate BusinessId Type List
[**messagingBrandBrandStatusListPost()**](MessagingApi.md#messagingBrandBrandStatusListPost) | **POST** /messagingBrand/brandStatusList | BrandStatus List
[**messagingBrandBrandStockExchangeListPost()**](MessagingApi.md#messagingBrandBrandStockExchangeListPost) | **POST** /messagingBrand/brandStockExchangeList | Brand Stock Exchange List
[**messagingBrandCampaignListPost()**](MessagingApi.md#messagingBrandCampaignListPost) | **POST** /messagingBrandCampaignList | View Brand Campaigns List
[**messagingBrandEntityListPost()**](MessagingApi.md#messagingBrandEntityListPost) | **POST** /messagingBrand/entityList | Entity List
[**messagingBrandListPost()**](MessagingApi.md#messagingBrandListPost) | **POST** /messagingBrandList | View Messaging Brands List
[**messagingBrandRelationshipListPost()**](MessagingApi.md#messagingBrandRelationshipListPost) | **POST** /messagingBrand/relationshipList | Relationship List
[**messagingBrandUseCaseListPost()**](MessagingApi.md#messagingBrandUseCaseListPost) | **POST** /messagingBrand/useCaseList | Use Cases for a Brand
[**messagingBrandVerticalListPost()**](MessagingApi.md#messagingBrandVerticalListPost) | **POST** /messagingBrand/verticalList | Vertical List
[**messagingCampaignClassListPost()**](MessagingApi.md#messagingCampaignClassListPost) | **POST** /messagingCampaignClassList | View Campaign Class List
[**registerCampaignCredentialsPost()**](MessagingApi.md#registerCampaignCredentialsPost) | **POST** /registerCampaignCredentials | Register Campaign Credentials
[**tnMessagingCampaignListPost()**](MessagingApi.md#tnMessagingCampaignListPost) | **POST** /tnMessagingCampaignList | View Tn Messaging Campaign List
[**tnMessagingCampaignPost()**](MessagingApi.md#tnMessagingCampaignPost) | **POST** /tnMessagingCampaign | Assign or Remove Messaging Campaign For Tn
[**updateMessagingBrandPost()**](MessagingApi.md#updateMessagingBrandPost) | **POST** /updateMessagingBrand | Update Brand
[**updateMessagingCampaignPost()**](MessagingApi.md#updateMessagingCampaignPost) | **POST** /updateMessagingCampaign | Update Campaign


## `addMessagingBrandPost()`

```php
addMessagingBrandPost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Add Brand

This operation allows you to add a messaging brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject27(); // \OpenAPI\Client\Model\InlineObject27

try {
    $result = $apiInstance->addMessagingBrandPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->addMessagingBrandPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject27**](../Model/InlineObject27.md)|  |

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

## `addMessagingCampaignPost()`

```php
addMessagingCampaignPost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Add Campaign

This operation allows you to add a messaging campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject29(); // \OpenAPI\Client\Model\InlineObject29

try {
    $result = $apiInstance->addMessagingCampaignPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->addMessagingCampaignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject29**](../Model/InlineObject29.md)|  |

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

## `brandOrderDetailPost()`

```php
brandOrderDetailPost($payload): \OpenAPI\Client\Model\BrandOrderDetail
```

Brand Order Detail

This operation allows you to retrieve details for a specific brand order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject20(); // \OpenAPI\Client\Model\InlineObject20

try {
    $result = $apiInstance->brandOrderDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->brandOrderDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject20**](../Model/InlineObject20.md)|  |

### Return type

[**\OpenAPI\Client\Model\BrandOrderDetail**](../Model/BrandOrderDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `brandOrderListPost()`

```php
brandOrderListPost($payload): \OpenAPI\Client\Model\BrandOrderList
```

Brand Order List

This operation allows you to retrieve a list of brand orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject19(); // \OpenAPI\Client\Model\InlineObject19

try {
    $result = $apiInstance->brandOrderListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->brandOrderListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject19**](../Model/InlineObject19.md)|  |

### Return type

[**\OpenAPI\Client\Model\BrandOrderList**](../Model/BrandOrderList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `brandOrderPost()`

```php
brandOrderPost($payload): \OpenAPI\Client\Model\CreateBrandOrder
```

Create a new Brand

This operation allows you to submit an order to create/register a new brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject18(); // \OpenAPI\Client\Model\InlineObject18

try {
    $result = $apiInstance->brandOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->brandOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject18**](../Model/InlineObject18.md)|  |

### Return type

[**\OpenAPI\Client\Model\CreateBrandOrder**](../Model/CreateBrandOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignCredentialsPost()`

```php
campaignCredentialsPost($payload): \OpenAPI\Client\Model\CampaignCredentials
```

Get Campaign Credentials

This operation allows you to retrieve Campaign Credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject26(); // \OpenAPI\Client\Model\InlineObject26

try {
    $result = $apiInstance->campaignCredentialsPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->campaignCredentialsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject26**](../Model/InlineObject26.md)|  |

### Return type

[**\OpenAPI\Client\Model\CampaignCredentials**](../Model/CampaignCredentials.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignDetailPost()`

```php
campaignDetailPost($payload): \OpenAPI\Client\Model\CampaignDetail
```

Campaign Details

This operation allows you to Fetch a messaging campaign details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject31(); // \OpenAPI\Client\Model\InlineObject31

try {
    $result = $apiInstance->campaignDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->campaignDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject31**](../Model/InlineObject31.md)|  |

### Return type

[**\OpenAPI\Client\Model\CampaignDetail**](../Model/CampaignDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignOrderDetailPost()`

```php
campaignOrderDetailPost($payload): \OpenAPI\Client\Model\CampaignOrderDetail
```

Get Campaign Order Details

This operation allows you to retrieve details for a specific caorder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject24(); // \OpenAPI\Client\Model\InlineObject24

try {
    $result = $apiInstance->campaignOrderDetailPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->campaignOrderDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject24**](../Model/InlineObject24.md)|  |

### Return type

[**\OpenAPI\Client\Model\CampaignOrderDetail**](../Model/CampaignOrderDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignOrderListPost()`

```php
campaignOrderListPost($payload): \OpenAPI\Client\Model\CampaignOrderList
```

List Campaign Orders

This operation allows you to retrieve a list of brand orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject23(); // \OpenAPI\Client\Model\InlineObject23

try {
    $result = $apiInstance->campaignOrderListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->campaignOrderListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject23**](../Model/InlineObject23.md)|  |

### Return type

[**\OpenAPI\Client\Model\CampaignOrderList**](../Model/CampaignOrderList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignOrderPost()`

```php
campaignOrderPost($payload): \OpenAPI\Client\Model\CampaignOrder
```

Create a new Campaign

This operation allows you to submit an order to create/register a new campaign against an approved brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject22(); // \OpenAPI\Client\Model\InlineObject22

try {
    $result = $apiInstance->campaignOrderPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->campaignOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject22**](../Model/InlineObject22.md)|  |

### Return type

[**\OpenAPI\Client\Model\CampaignOrder**](../Model/CampaignOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messageCampaignsPost()`

```php
messageCampaignsPost($payload): \OpenAPI\Client\Model\MessageCampaigns
```

View Messaging Campaign List

This operation allows you to obtain a list of Messaging Campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject35(); // \OpenAPI\Client\Model\InlineObject35

try {
    $result = $apiInstance->messageCampaignsPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messageCampaignsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject35**](../Model/InlineObject35.md)|  |

### Return type

[**\OpenAPI\Client\Model\MessageCampaigns**](../Model/MessageCampaigns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingBrandAlternateBusinessIdTypeListPost()`

```php
messagingBrandAlternateBusinessIdTypeListPost($payload): \OpenAPI\Client\Model\AlternateBusinessIdTypeList
```

Alternate BusinessId Type List

This operation allows you to retrieve supported alternate business ID list. One these values needs to be passed into the provisioning APIs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject15(); // \OpenAPI\Client\Model\InlineObject15

try {
    $result = $apiInstance->messagingBrandAlternateBusinessIdTypeListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingBrandAlternateBusinessIdTypeListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject15**](../Model/InlineObject15.md)|  |

### Return type

[**\OpenAPI\Client\Model\AlternateBusinessIdTypeList**](../Model/AlternateBusinessIdTypeList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingBrandBrandStatusListPost()`

```php
messagingBrandBrandStatusListPost($payload): \OpenAPI\Client\Model\BrandStatusList
```

BrandStatus List

This operation allows you to retrieve supported brand status list. One these values needs to be passed into the provisioning APIs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject13(); // \OpenAPI\Client\Model\InlineObject13

try {
    $result = $apiInstance->messagingBrandBrandStatusListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingBrandBrandStatusListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject13**](../Model/InlineObject13.md)|  |

### Return type

[**\OpenAPI\Client\Model\BrandStatusList**](../Model/BrandStatusList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingBrandBrandStockExchangeListPost()`

```php
messagingBrandBrandStockExchangeListPost($payload): \OpenAPI\Client\Model\BrandStockExchangeList
```

Brand Stock Exchange List

This operation allows you to retrieve supported stock exchange list. One these values needs to be passed into the provisioning APIs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject14(); // \OpenAPI\Client\Model\InlineObject14

try {
    $result = $apiInstance->messagingBrandBrandStockExchangeListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingBrandBrandStockExchangeListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject14**](../Model/InlineObject14.md)|  |

### Return type

[**\OpenAPI\Client\Model\BrandStockExchangeList**](../Model/BrandStockExchangeList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingBrandCampaignListPost()`

```php
messagingBrandCampaignListPost($payload): \OpenAPI\Client\Model\MessagingBrandCampaignList
```

View Brand Campaigns List

This operation allows you to obtain a list of Brand Campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject34(); // \OpenAPI\Client\Model\InlineObject34

try {
    $result = $apiInstance->messagingBrandCampaignListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingBrandCampaignListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject34**](../Model/InlineObject34.md)|  |

### Return type

[**\OpenAPI\Client\Model\MessagingBrandCampaignList**](../Model/MessagingBrandCampaignList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingBrandEntityListPost()`

```php
messagingBrandEntityListPost($payload): \OpenAPI\Client\Model\EntityList
```

Entity List

This operation retrieves the list of entities that are supported by Inteliquent. One these values needs to be passed into the provisioning APIs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject16(); // \OpenAPI\Client\Model\InlineObject16

try {
    $result = $apiInstance->messagingBrandEntityListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingBrandEntityListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject16**](../Model/InlineObject16.md)|  |

### Return type

[**\OpenAPI\Client\Model\EntityList**](../Model/EntityList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingBrandListPost()`

```php
messagingBrandListPost($payload): \OpenAPI\Client\Model\MessagingBrandList
```

View Messaging Brands List

This operation allows you to obtain a list of Brands.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject33(); // \OpenAPI\Client\Model\InlineObject33

try {
    $result = $apiInstance->messagingBrandListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingBrandListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject33**](../Model/InlineObject33.md)|  |

### Return type

[**\OpenAPI\Client\Model\MessagingBrandList**](../Model/MessagingBrandList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingBrandRelationshipListPost()`

```php
messagingBrandRelationshipListPost($payload): \OpenAPI\Client\Model\RelationshipList
```

Relationship List

This operation allows you to retrieve supported relationship lists. One these values needs to be passed into the provisioning APIs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject12(); // \OpenAPI\Client\Model\InlineObject12

try {
    $result = $apiInstance->messagingBrandRelationshipListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingBrandRelationshipListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject12**](../Model/InlineObject12.md)|  |

### Return type

[**\OpenAPI\Client\Model\RelationshipList**](../Model/RelationshipList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingBrandUseCaseListPost()`

```php
messagingBrandUseCaseListPost($payload): \OpenAPI\Client\Model\UseCaseList
```

Use Cases for a Brand

This operation retrieves the list of usecases that are applicable for a given brand. One these values needs to be passed into the provisioning APIs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject21(); // \OpenAPI\Client\Model\InlineObject21

try {
    $result = $apiInstance->messagingBrandUseCaseListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingBrandUseCaseListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject21**](../Model/InlineObject21.md)|  |

### Return type

[**\OpenAPI\Client\Model\UseCaseList**](../Model/UseCaseList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingBrandVerticalListPost()`

```php
messagingBrandVerticalListPost($payload): \OpenAPI\Client\Model\VerticalList
```

Vertical List

This operation allows you to retrieve supported brand status list. One these values needs to be passed into the provisioning APIs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject17(); // \OpenAPI\Client\Model\InlineObject17

try {
    $result = $apiInstance->messagingBrandVerticalListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingBrandVerticalListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject17**](../Model/InlineObject17.md)|  |

### Return type

[**\OpenAPI\Client\Model\VerticalList**](../Model/VerticalList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `messagingCampaignClassListPost()`

```php
messagingCampaignClassListPost($payload): \OpenAPI\Client\Model\CampaignClassList
```

View Campaign Class List

This operation allows you to obtain a list of Messaging Campaign Classes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject32(); // \OpenAPI\Client\Model\InlineObject32

try {
    $result = $apiInstance->messagingCampaignClassListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagingCampaignClassListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject32**](../Model/InlineObject32.md)|  |

### Return type

[**\OpenAPI\Client\Model\CampaignClassList**](../Model/CampaignClassList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerCampaignCredentialsPost()`

```php
registerCampaignCredentialsPost($payload): \OpenAPI\Client\Model\RegisterCampaignCredentials
```

Register Campaign Credentials

This operation allows you to register Campaign Credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject25(); // \OpenAPI\Client\Model\InlineObject25

try {
    $result = $apiInstance->registerCampaignCredentialsPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->registerCampaignCredentialsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject25**](../Model/InlineObject25.md)|  |

### Return type

[**\OpenAPI\Client\Model\RegisterCampaignCredentials**](../Model/RegisterCampaignCredentials.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnMessagingCampaignListPost()`

```php
tnMessagingCampaignListPost($payload): \OpenAPI\Client\Model\TnMessagingCampaign
```

View Tn Messaging Campaign List

This operation allows you to obtain a list of Tn associated with Messaging Campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject37(); // \OpenAPI\Client\Model\InlineObject37

try {
    $result = $apiInstance->tnMessagingCampaignListPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->tnMessagingCampaignListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject37**](../Model/InlineObject37.md)|  |

### Return type

[**\OpenAPI\Client\Model\TnMessagingCampaign**](../Model/TnMessagingCampaign.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tnMessagingCampaignPost()`

```php
tnMessagingCampaignPost($payload): \OpenAPI\Client\Model\InlineResponse20014
```

Assign or Remove Messaging Campaign For Tn

This operation allows you to assign or remove Messaging Campaign for a Tn.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject38(); // \OpenAPI\Client\Model\InlineObject38

try {
    $result = $apiInstance->tnMessagingCampaignPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->tnMessagingCampaignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject38**](../Model/InlineObject38.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMessagingBrandPost()`

```php
updateMessagingBrandPost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Update Brand

This operation allows you to update a messaging brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject28(); // \OpenAPI\Client\Model\InlineObject28

try {
    $result = $apiInstance->updateMessagingBrandPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->updateMessagingBrandPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject28**](../Model/InlineObject28.md)|  |

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

## `updateMessagingCampaignPost()`

```php
updateMessagingCampaignPost($payload): \OpenAPI\Client\Model\InlineResponse20012
```

Update Campaign

This operation allows you to update a messaging campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \OpenAPI\Client\Model\InlineObject30(); // \OpenAPI\Client\Model\InlineObject30

try {
    $result = $apiInstance->updateMessagingCampaignPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->updateMessagingCampaignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\OpenAPI\Client\Model\InlineObject30**](../Model/InlineObject30.md)|  |

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
