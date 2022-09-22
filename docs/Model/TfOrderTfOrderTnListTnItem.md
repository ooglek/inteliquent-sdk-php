# # TfOrderTfOrderTnListTnItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tn** | **string** | Ten-digit toll free number (e.g. 8776680000) |
**resporg_id** | **string** | Five character RespOrg ID for the toll free number; must belong to your company if productAbbr is 8XX | [optional]
**routing_label** | **string** | Routing option to assign the toll free number; use routingLabelSearchAssigned and routingLabelDetail to view your company’s toll free routing options |
**tn_note** | **string** | Optional note value to be stored on the number | [optional]
**cic_list** | [**\OpenAPI\Client\Model\TfOrderTfOrderTnListCicList**](TfOrderTfOrderTnListCicList.md) |  | [optional]
**tn_feature** | [**\OpenAPI\Client\Model\TfOrderTfOrderTnListTnFeature**](TfOrderTfOrderTnListTnFeature.md) |  | [optional]
**dnis** | **string** | New or updated dnis value | [optional]
**billing_tn** | **string** | Ten digit billing Tn (e.g. 8776681234) | [optional]
**term_tn** | **string** | Ten digit terminating Tn (e.g. 8776683456). termTn is allowed if switched toll free enabled and if termTn is present dnis and routingLabel should not be sent. Either Dnis or Term Tn or routingLabel should be sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
