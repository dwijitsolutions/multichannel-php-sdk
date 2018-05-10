# AddRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Stock Keeping Unit or the identification unit of an individual product (generally alphanumeric) | 
**hsn** | **string** | Harmonised System Nomenclature. A code number used to classify goods for taxation purposes. Done to determine which category of taxes do the goods come under | [optional] 
**name** | **string** | Name of the product | 
**tax_code** | **string** | The percentage of tax which is to be imposed | 
**type** | **string** | If there is only one product or multiple types of products | 
**qty** | **int** | Total Quantity of the products to be shipped | 
**low_stock** | **string** | Specifies when the low stock notification should come on | 
**category_code** | **string** | You can add a category code to your ShipRocket account from “add category” | 
**description** | **string** | Gives a description of the product | 
**brand** | **string** | The product brand name | 
**size** | **int** |  | 
**weight** | **int** | Total weight of the products | 
**length** | **int** | Product Dimensions | 
**width** | **int** | Product Dimensions | 
**height** | **int** | Product Dimensions | 
**ean** | **string** | European Article Number - A barcode for product identification (which helps manufacturers identify how many products have been sold once a sale is made) It is 13 digits long and required for international selling | 
**upc** | **string** | Universal Product Code – Barcode for product identification which is used across the world. It is 12 digits long | 
**isbn** | **string** | International Standard Book Number – Identification barcode for books, magazines, e-books and other published media. It is 10 digits long | 
**color** | **string** | The colour of the product | 
**imei_serialnumber** | **string** | The International Mobile Equipment Identity Number, which is used by  a network to identify valid devices. Eg if two iphones have to be shipped they will have 2 Imei’s | 
**cost_price** | **int** | How much it cost to make the product | 
**mrp** | **string** | Maximum Retail Price. How much is the maximum price which the product can be sold at | 
**status** | **int** | In Boolean, if the product details have been successfully or unsuccessfully added | 
**image_url** | **string** | Shows the url of the product images which have been uploaded | 
**components** | **string[]** | An arrayed display of all the components | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


