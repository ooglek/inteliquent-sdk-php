# # ResponseTnE911ValidateInvalidTnE911ValidateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tn** | **string** | Telephone Number | [optional]
**name** | **string** | E911 address name | [optional]
**street_num** | **string** | Original E911 address street number (e.g. 100, 550) | [optional]
**street_info** | **string** | Original E911 address street information (e.g. W Adams St) | [optional]
**location** | **string** | Original E911 address additional address infotmation | [optional]
**city** | **string** | Original E911 address city | [optional]
**state** | **string** | Original E911 address state | [optional]
**postal_code** | **string** | Original E911 address zip code | [optional]
**validation_msg** | **string** | Validation Result Message (Valid Address or Corrected to valid address or Invalid Address) | [optional]
**validation_result** | **int** | Validation Result Code (ex: 0, 1, 2) | [optional]
**corrected_street_num** | **string** | Corrected E911 address street number (e.g. 100, 550) | [optional]
**corrected_street_info** | **string** | Corrected E911 address street information (e.g. W Adams St) | [optional]
**corrected_location** | **string** | Corrected E911 address additional address infotmation | [optional]
**corrected_city** | **string** | Corrected E911 address city | [optional]
**corrected_state** | **string** | Corrected E911 address state | [optional]
**corrected_postal_code** | **string** | Corrected E911 address zip code | [optional]
**corrected_postal_code_plus_four** | **string** | Corrected E911 address postal code plus four | [optional]
**candidate_address_list** | [**\OpenAPI\Client\Model\ResponseTnE911ValidateInvalidTnE911ValidateResponseCandidateAddressList[]**](ResponseTnE911ValidateInvalidTnE911ValidateResponseCandidateAddressList.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
