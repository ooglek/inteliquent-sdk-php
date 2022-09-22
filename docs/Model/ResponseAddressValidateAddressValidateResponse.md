# # ResponseAddressValidateAddressValidateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**validation_msg** | **string** | Validation Result Message (Valid Address or Corrected to valid address or Invalid Address) | [optional]
**validation_result** | **int** | Validation Result Code (ex: 0, 1, 2) | [optional]
**responder_type** | **string** |  | [optional]
**routing_status** | **string** |  | [optional]
**corrected_street_num** | **int** |  | [optional]
**corrected_street_info** | **string** |  | [optional]
**corrected_location** | **string** |  | [optional]
**corrected_city** | **string** |  | [optional]
**corrected_state** | **string** |  | [optional]
**corrected_postal_code** | **string** |  | [optional]
**corrected_postal_code_plus_four** | **string** |  | [optional]
**address_external_id** | **string** |  | [optional]
**candidate_address_list** | [**\OpenAPI\Client\Model\ResponseAddressValidateAddressValidateResponseCandidateAddressList[]**](ResponseAddressValidateAddressValidateResponseCandidateAddressList.md) |  | [optional]
**psap** | [**\OpenAPI\Client\Model\ResponseAddressValidateAddressValidateResponsePsap**](ResponseAddressValidateAddressValidateResponsePsap.md) |  | [optional]
**parsed_address** | [**\OpenAPI\Client\Model\ResponseAddressValidateAddressValidateResponseParsedAddress**](ResponseAddressValidateAddressValidateResponseParsedAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
