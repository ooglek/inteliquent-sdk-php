# # InlineObject145

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**private_key** | **string** | API key required to validate your application | [optional]
**start_date** | **string** | Start date for 911 call search; use format 2019-01-18 00:00:00 | [optional]
**end_date** | **string** | End date for 911 call search; use format 2019-01-21 16:41:26 | [optional]
**call_type** | **string** | Call Type | [optional]
**call_status** | **string** | Call Status | [optional]
**call_destination** | **string** | Call Destination | [optional]
**call_provisioned** | **string** | Call Provisioned | [optional]
**source_tn** | **string** | Calling number. Accepts 0-9, Aa-Zz, *, or ? (e.g. *Hello* or 312?Hi*7 ). | [optional]
**e911_contains** | **string** | Search for specific string contained in any E911 field | [optional]
**name** | **string** | E911 address name | [optional]
**street_num** | **string** | E911 address street number (e.g. 100, 550) | [optional]
**street_info** | **string** | E911 address street information (e.g. W Adams St) | [optional]
**location** | **string** | E911 address additional address infotmation | [optional]
**city** | **string** | E911 address city | [optional]
**state** | **string** | E911 address state | [optional]
**postal_code** | **string** | E911 address zip code | [optional]
**time_zone** | **string** | Time Zone | [optional]
**page_sort** | [**\OpenAPI\Client\Model\E911CallSearchPageSort**](E911CallSearchPageSort.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
