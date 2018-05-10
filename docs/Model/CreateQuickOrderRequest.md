# CreateQuickOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | required|max:20 | [optional] 
**order_date** | **string** | required | [optional] 
**pickup_code** | **string** | max:10 | [optional] 
**pickup_location** | **string** |  | [optional] 
**pickup_location_id** | **int** |  | [optional] 
**channel_id** | **int** |  | [optional] 
**billing_customer_name** | **string** | required | [optional] 
**billing_last_name** | **string** |  | [optional] 
**billing_address** | **string** | required|min:3 | [optional] 
**billing_address_2** | **string** | max:50 | [optional] 
**billing_city** | **string** | required|max:30 | [optional] 
**billing_pincode** | **int** |  | [optional] 
**billing_state** | **string** | required | [optional] 
**billing_country** | **string** | required | [optional] 
**billing_email** | **string** | required | [optional] 
**shipping_is_billing** | **bool** | required | [optional] 
**shipping_customer_name** | **string** |  | [optional] 
**shipping_last_name** | **string** |  | [optional] 
**shipping_address** | **string** |  | [optional] 
**shipping_address_2** | **string** |  | [optional] 
**shipping_city** | **string** |  | [optional] 
**shipping_pincode** | **int** |  | [optional] 
**shipping_country** | **string** |  | [optional] 
**shipping_state** | **string** |  | [optional] 
**shipping_email** | **string** |  | [optional] 
**order_items** | [**\Swagger\Client\Model\CreateQuickOrderRequestOrderItems[]**](CreateQuickOrderRequestOrderItems.md) |  | [optional] 
**payment_method** | **string** | required | [optional] 
**shipping_charges** | **int** |  | [optional] 
**giftwrap_charges** | **int** |  | [optional] 
**transaction_charges** | **int** |  | [optional] 
**total_discount** | **int** |  | [optional] 
**sub_total** | **int** |  | [optional] 
**length** | **string** |  | [optional] 
**breadth** | **int** |  | [optional] 
**height** | **int** |  | [optional] 
**weight** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


