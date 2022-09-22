# # ResponseTnCsrLookupTnCsrLookupResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tn** | **string** | Telephone Number | [optional]
**account_num** | **string** | Account Number | [optional]
**atn** | **string** | Account Telephone Number | [optional]
**end_user** | **string** | EndUser name | [optional]
**end_user_address** | **string** | EndUser Address | [optional]
**street_num** | **string** | End user address street number (ex: 100, 550) | [optional]
**street_pre_dir** | **string** | End user address street direction prefix (ex: N) | [optional]
**street_name** | **string** | End user address street name | [optional]
**street_type** | **string** | End user address street type (ex: St, Ave) | [optional]
**street_post_dir** | **string** | End user address street direction ending (ex: SW) | [optional]
**location_type1** | **string** | End user address location type 1 (ex: Bld, Apt) | [optional]
**location_value1** | **string** | End user address location value 1 (ex: 1, 2B) | [optional]
**location_type2** | **string** | End user address location type 2 (ex: Flr, Ste) | [optional]
**location_value2** | **string** | End user address location value 2 (ex: 1, 900) | [optional]
**location_type3** | **string** | End user address location type 3 (ex: Flr, Ste) | [optional]
**location_value3** | **string** | End user address location value 3 (ex: 1, 900) | [optional]
**city** | **string** | End user address city | [optional]
**state** | **string** | End user address state | [optional]
**postal_code** | **string** | End user address zip code | [optional]
**type_of_service** | **string** | Type Of Service (B/R) | [optional]
**service_provider** | **string** | Service Provider | [optional]
**ocn** | **string** | Operating Company Number | [optional]
**num_of_service_locations** | **int** | Number of Service Locations | [optional]
**num_of_tn_lines** | **int** | Number of Telephone Lines | [optional]
**auth_name** | **string** | Name of port-in authorizer | [optional]
**auth_date** | **string** | Date of port-in authorization | [optional]
**earliest_scheduled_date** | **string** | Earliest Scheduled Date | [optional]
**remarks** | **string** | Additional Instructions | [optional]
**lsr_requirements** | **string** | LSR Requirements(if any) | [optional]
**simple_port** | **string** | Is it SimplePort (Y/N) | [optional]
**csr_lookup_msg** | **string** | Csr Lookup Message | [optional]
**csr_lookup_result** | **int** | Csr Lookup Result Code (ex: 0, 1, 2) | [optional]
**tn_group** | [**\OpenAPI\Client\Model\ResponseTnCsrLookupTnCsrLookupResponseTnGroup[]**](ResponseTnCsrLookupTnCsrLookupResponseTnGroup.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
