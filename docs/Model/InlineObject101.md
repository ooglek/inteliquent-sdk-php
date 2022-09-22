# # InlineObject101

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**private_key** | **string** | Private Key | [optional]
**customer_order_reference** | **string** | Customer Order Reference | [optional]
**desired_due_date** | **\DateTime** | Desired due date of the order, if quantity is more than 100, desired due date must be after 3 business days otherwise must be after next business day | [optional]
**quantity** | **int** | Required TN quantity | [optional]
**routing_label** | **string** | New routing option to assign the toll free number; use the routingLabelSearchAssigned and routingLabelDetail operations to view your toll free routing options | [optional]
**resp_org_id** | **string** | Five character RespOrg ID for the toll-free number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
