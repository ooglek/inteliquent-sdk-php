# # InlineObject113

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**private_key** | **string** | API key required to validate your application |
**order_id** | **int** | Existing order number | [optional]
**customer_order_reference** | **string** | Alphanumeric order reference name | [optional]
**service_order_reference** | **string** | Order type | [optional]
**order_status** | **string** | Order status | [optional]
**product_id** | **int** | Product identifier; acceptable values include | [optional]
**product_id_list** | **string** | List of productIds can be sent with &#39;,&#39; separated (e.g. 103,128,129 ) | [optional]
**created_date_start_range** | **string** | Earliest order creation date to return (e.g. 2015-12-20) | [optional]
**created_date_end_range** | **string** | Latest order creation date to return (e.g. 2015-12-20) | [optional]
**tn** | **string** | Ten-digit telephone number (e.g. 8156680000) | [optional]
**page_sort** | [**\OpenAPI\Client\Model\PortInOrderListPageSort**](PortInOrderListPageSort.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
