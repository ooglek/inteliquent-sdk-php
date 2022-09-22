# # InlineObject112

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**private_key** | **string** | API key required to validate your application | [optional]
**start_date** | **\DateTime** | Start of date range (e.g. 2015-12-15T00:00:00.000Z) | [optional]
**end_date** | **\DateTime** | End of date range (e.g. 2015-12-15T00:00:00.000Z) | [optional]
**direction** | **string** | Message direction; acceptable values are Outbound and Inbound | [optional]
**message_class** | **string** | Acceptable values are P2P, A2PLC, and A2P8XX | [optional]
**message_type** | **string** | Acceptable values are SMS, MMS, SMSMMS, SMS_ALT, MMS_ALT, and SMSMMS_ALT | [optional]
**disposition** | **string** | Message disposition; acceptable values are Enroute, Successful, Unknown, Blocked, and Failed | [optional]
**region** | **string** | Message region | [optional]
**country** | **string** | Message origin or destination (based on direction value sent) country | [optional]
**operators** | **string[]** | Message origin or destination (based on direction value sent) operator(s) | [optional]
**source_tn** | **string** | 10-digit or E.164 message sent from number (e.g. 3121231234 or 13121231234) | [optional]
**destination_tn** | **string** | 10-digit or E.164 message sent to number (e.g. 3121231234 or 13121231234) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
