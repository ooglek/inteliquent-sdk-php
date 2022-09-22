# # OrderUpdateOrderUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Existing order number | [optional]
**customer_order_reference** | **string** | Customer for whom the order is. | [optional]
**desired_due_date** | **string** | New desired due date for the order (e.g. 2015-12-15) | [optional]
**desired_port_time** | **string** | New desired port time in HH:MM (e.g. 14:00) | [optional]
**desired_port_time_zone** | **string** |  | [optional]
**on_demand_activation** | **string** | Acceptable values are Y and N | [optional]
**reseller_name** | **string** | Reseller Name (Loosing Carrier) can be updated for PortIn Orders (Canadian Port Requests) | [optional]
**tn_list** | [**\OpenAPI\Client\Model\OrderUpdateOrderUpdateTnList**](OrderUpdateOrderUpdateTnList.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
