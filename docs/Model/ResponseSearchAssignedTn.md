# # ResponseSearchAssignedTn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  | [optional]
**status_code** | **string** |  | [optional]
**page** | **string** |  | [optional]
**total_pages** | **string** |  | [optional]
**total_items** | **string** |  | [optional]
**search_id** | **string** | searchId can be used as iterator, it will be returned in every response of this api. If you pass this parameters value (same which you get in your last response) then you dont have to send other parameters like size,page,direction &amp; property. It will return the same size/direction/property which you have used in previous request. Scroll will be enabled, only if you send valid searchId value. You will be able to use this parameter, only if you are receiving it in response | [optional]
**tn_list** | [**\OpenAPI\Client\Model\ResponseSearchAssignedTnTnList**](ResponseSearchAssignedTnTnList.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
