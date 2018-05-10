# CreateLinkedOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Creates the order id | 
**order_date** | **string** | Mentions the date and time when the order was created | 
**channel_id** | **int** | The id of the channel where the order is placed | 
**billing_customer_name** | **string** | The customer’s name | 
**billing_last_name** | **string** | The customer’s last name | 
**billing_address** | **string** | The first two address lines of the customer | 
**billing_address_2** | **string** |  | 
**billing_city** | **string** | Geographical details of the customer’s adress | 
**billing_state** | **string** |  | 
**billing_country** | **string** |  | 
**billing_pincode** | **string** | Customer’s pincode | 
**billing_email** | **string** | Customer’s email id | 
**billing_phone** | **string** | Customer’s phone numberThe name of the person to whom the package is being shipped | 
**shipping_is_billing** | **int** |  | 
**shipping_customer_name** | **string** | The name of the person to whom the package is being shipped | 
**shipping_last_name** | **string** |  | 
**shipping_address** | **string** | Address of the person to whom the package is being shipped to | 
**shipping_address_2** | **string** |  | 
**shipping_city** | **string** |  | 
**shipping_country** | **string** |  | 
**shipping_pincode** | **string** |  | 
**shipping_state** | **string** |  | 
**shipping_email** | **string** | Email id of the person whom the package is being shipped to | 
**shipping_phone** | **string** | Phone number of the person whom the package is being shipped to | 
**order_items** | [**\Swagger\Client\Model\CreateLinkedOrderRequestOrderItems[]**](CreateLinkedOrderRequestOrderItems.md) |  | 
**payment_method** | **string** | Specifies the payment method | 
**shipping_charges** | **string** | Mentions the shipping charges | 
**giftwrap_charges** | **string** | Mentions the charges for giftwrapping | 
**transaction_charges** | **string** | Mentions the charges for the total transaction | 
**total_discount** | **string** | Mentions the total discount offered | 
**sub_total** | **int** | Mentions the total after these deductions | 
**length** | **int** | Mentions the product dimensions | [optional] 
**breadth** | **int** |  | [optional] 
**height** | **int** |  | [optional] 
**weight** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


