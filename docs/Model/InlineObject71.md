# # InlineObject71

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**private_key** | **string** | API key required to validate your application |
**voice_script** | [**\OpenAPI\Client\Model\VoiceScriptVoiceScript[]**](VoiceScriptVoiceScript.md) | List containing TN or domain information. If “removeScript” is not set (implying adding a script), only 1 domain or 1 TN must be included in the list. If “removeScript” is set to “Y”, then multiple TNs can be sent as part of the list | [optional]
**remove_script** | **string** | If you want to remove the script associated with the given TNs, then pass this flag with the value of Y | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
