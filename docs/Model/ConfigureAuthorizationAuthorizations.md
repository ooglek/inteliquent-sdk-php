# # ConfigureAuthorizationAuthorizations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inbound_auth** | **bool** | Must be sent as true |
**webhook_url** | **string** | URL where webhooks should be sent for inbound messages received to your assigned numbers |
**api_key** | **string** | Configure webhook with API key based hash authorization. a randomly generated token will be sent in an HTTP header, and the token will hashed using the HMAC_SHA256 hashing scheme. using the API key as the hash key, and sent in a second HTTP header. The hash format is HMAC_SHA256([API key]), where the random token is located in the messageID HTTP header and the fully hashed value is located in the verificationToken HTTP header. | [optional]
**header_name** | **string** | Custom header name to be included with each request sent to the webhook URL | [optional]
**header_value** | **string** | Custom header value to be included with each request sent to the webhook URL | [optional]
**tn** | **string** | Configure webhook URL for a specific telephone number (e.g. 17044561234); if null, webhook URL will apply to inbound messages to any of your numbers | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
