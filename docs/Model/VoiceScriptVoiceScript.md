# # VoiceScriptVoiceScript

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tn** | **string** | Ten-digit telephone number to which script to be registered(e.g. 8156680000). Either a TN or a domain must be specified. | [optional]
**domain** | **string** | Domain to which script to be registered. Either a TN or a domain must be specified. | [optional]
**script** | **string** | Script that will be associated with the given tn or domain. Script must be specified if \&quot;removeScript\&quot; element is not set, implying that while adding a script to the domain or TN, script is a required element. | [optional]
**enabled** | **bool** | Either true or false to enable or disable the script for the domain or TN. Default is true. | [optional]
**customer_default** | **bool** | Either true or false to enable or disable the script as the customer default. Default is false. | [optional]
**direction** | **string** | Value should be Inbound or Outbound. Direction is required to add, update or remove. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
