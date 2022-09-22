# # InlineObject36

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**private_key** | **string** | API key required to validate your application; can be retrieved from Admin page of customer portal |
**tn** | **string** | Telephone Number |
**message_class** | **string** | Acceptable values are P2P, A2PLC, and A2P8XX |
**message_type** | **string** | Acceptable values are SMS, MMS, SMSMMS, SMS_ALT, MMS_ALT, and SMSMMS_ALT |
**net_number_id** | **string** | NetNumber ID (NNID) to assign (must be configured on your account); if not sent, a default will apply | [optional]
**alt_sp_id** | **string** | Alternative SpId value | [optional]
**remove_messaging** | **string** | This flag will be used to remove Messaging for specified TN (e.g. Y, N) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
