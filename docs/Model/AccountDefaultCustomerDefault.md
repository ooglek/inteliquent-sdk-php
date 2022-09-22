# # AccountDefaultCustomerDefault

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_last_name** | **string** | Last name of default company contact | [optional]
**contact_first_name** | **string** | First name of default company contact | [optional]
**contact_email** | **string** | Email address where API updates will be sent | [optional]
**desired_port_time** | **string** | Desired default port-in time in HH:MM (e.g. 14:00) | [optional]
**desired_port_time_zone** | **string** |  | [optional]
**port_out_pin** | **string** | Company-level PIN used for onnet port-out protection on Tier 0 &amp; HI numbers without individual port-out PINs | [optional]
**cnam_dip** | **string** | Default CNAM delivery for inbound calls / CNAM dip; acceptable values are Y and N | [optional]
**cnam_dip_tf** | **string** | Default CNAM delivery for Toll Free inbound calls / CNAM dip; acceptable values are Y and N | [optional]
**webhook_url** | **string** | URL where Inteliquent webhook callbacks will be posted; refer to the Webhooks section for detail | [optional]
**webhook_header** | **string** | Authorization header value to be sent with webhook body for authentication by your application | [optional]
**authorize_webhook_portout** | **string** | Setting to enable port-out authorization and rejection via Inteliquent webhook; acceptable values are Y and N | [optional]
**msg_delivery_receipt** | **string** | Y/N (delivery receipt should be sent or not) | [optional]
**ip_filtering_enabled** | **string** | Y/N (ipFilteringEnabled should be sent or not) | [optional]
**ip_range** | **string** | valid ip range needs to set if ipFiltering is Enabled, other wise access will be denied, to delete send blank value | [optional]
**email_domain** | **string** | valid email domain(s) needs to be set if sso enabled, other wise access will be denied to customer portal | [optional]
**slo_url** | **string** | if SSO enabled, Single Log out URL can be set to redirect customer portal logout to client&#39;s idp | [optional]
**port_out_contact_list** | [**\OpenAPI\Client\Model\AccountDefaultCustomerDefaultPortOutContactList**](AccountDefaultCustomerDefaultPortOutContactList.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
