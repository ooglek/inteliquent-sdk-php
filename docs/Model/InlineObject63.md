# # InlineObject63

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**private_key** | **string** | API key required to validate your application; can be retrieved from portal production and sandbox |
**tn_mask** | **string** | Ten-digit telephone number; Accepts 0-9, x, X, or space. x, X, or space are interpreted as any single digit.(Ex: 312xxx1x2x) | [optional]
**tn_wildcard** | **string** | Telephone number. Accepts 0-9, Aa-Zz, *, or ? (e.g. \&quot;*Hello*\&quot; or \&quot;312?Hi*7\&quot;) | [optional]
**lata** | **string** | Three-digit local access and transport area code | [optional]
**rate_center** | **string** | Rate center abbreviation (e.g. WSHNGTNZN1) | [optional]
**rate_center_tier** | **string** | Rate center tier | [optional]
**city** | **string** | Location Full Name filter for telephone numbers. | [optional]
**province** | **string** | Two-letter state or province abbreviation (e.g. IL, CA) | [optional]
**postal_code** | **string** | Zip code filter for telephone numbers. | [optional]
**radius** | **int** | radius to return numbers within specified limit (up to 50 miles) | [optional]
**local_calling_area** | **bool** | Enter true to return local calling area numbers | [optional]
**quantity** | **int** | Maximum number of results to return; partial quantity may be returned based on inventory | [optional]
**sequential** | **bool** | Enter true to return sequential numbers (up to 99) | [optional]
**search_on_net_only** | **string** | Enter Y or N to include or exclude offnet numbers from search results; N be overridden if customer-level setting is Y in accountDefaultDetail response | [optional]
**wireless** | **string** | Enter Y to return wireless numbers; N to return wireline numbers | [optional]
**abc_search** | **bool** | If true, it will do searching based on alphabates as well. If its not sent or fase, it will do numeric &amp; X based search. In case of abcSearch alphabates can be sent instead of numbers and X wont be trated as wildcard. | [optional]
**page_sort** | [**\OpenAPI\Client\Model\TnInventoryPageSort**](TnInventoryPageSort.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
