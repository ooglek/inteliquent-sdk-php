# # BulkTnInventoryTnInventorySearchItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** |  | [optional]
**tn_mask** | **string** | Telephone Number mask with X as a wild card to filter results on.  Accepted value is 10 character string with numbers and X.  For example, 312XXXXXXX, 312419XXXX. | [optional]
**lata** | **string** | Three digits Local access and transport area code to filter results on.  For example, 358, 360, 362, etc. | [optional]
**rate_center** | **string** | Rate Center abbreviation to filter results on. | [optional]
**rate_center_tier** | **string** | Rate center tier (acceptable values are 0, 1, 2, AK, HI, CAN, PRI, WS-A, WS-B, WS-C). | [optional]
**city** | **string** | Location Full Name filter for telephone numbers. | [optional]
**province** | **string** | State code filter for telephone numbers. (IL, CA, etc.) | [optional]
**postal_code** | **string** | Zip code filter for telephone numbers. | [optional]
**local_calling_area** | **bool** | Indicates whether the numbers should be in local calling area or not. | [optional]
**quantity** | **int** | Maximum number of results to be returned. | [optional]
**sequential** | **bool** | Indicates whether the numbers should be in sequence or not. | [optional]
**search_on_net_only** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
