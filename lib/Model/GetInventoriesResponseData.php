<?php
/**
 * GetInventoriesResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ShiprocketAPI
 *
 * Welcome to ShipRocket’s API Documentation. Get a clear understanding of all the sections and codes that are used in ShipRocket’s API. ShipRocket API uses the JSON syntax.     First you need to register with ShipRocket and create an account. Simply click on this [link](https://app.shiprocket.in/register) to complete the simple sign up process.    Please note that to utilise the ShipRocket API's, you need to [upgrade](https://app.shiprocket.in/billing-plan-details) your plan to Advance or Pro. To get access to use the API's, you need to call to +91-9266623006 our customer care or send a mail to srs@kartrocket.com, stating that you would like to use ShipRocket Open API's. After that you will have to provide an alternate email id which will be used for the ShipRocket API.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetInventoriesResponseData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetInventoriesResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetInventoriesResponse_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'sku' => 'string',
        'category_name' => 'string',
        'is_combo' => 'int',
        'name' => 'string',
        'type' => 'string',
        'color' => 'string',
        'brand' => 'string',
        'total_quantity' => 'int',
        'available_quantity' => 'int',
        'blocked_quantity' => 'int',
        'updated_on' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'sku' => null,
        'category_name' => null,
        'is_combo' => null,
        'name' => null,
        'type' => null,
        'color' => null,
        'brand' => null,
        'total_quantity' => null,
        'available_quantity' => null,
        'blocked_quantity' => null,
        'updated_on' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'sku' => 'sku',
        'category_name' => 'category_name',
        'is_combo' => 'is_combo',
        'name' => 'name',
        'type' => 'type',
        'color' => 'color',
        'brand' => 'brand',
        'total_quantity' => 'total_quantity',
        'available_quantity' => 'available_quantity',
        'blocked_quantity' => 'blocked_quantity',
        'updated_on' => 'updated_on'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku' => 'setSku',
        'category_name' => 'setCategoryName',
        'is_combo' => 'setIsCombo',
        'name' => 'setName',
        'type' => 'setType',
        'color' => 'setColor',
        'brand' => 'setBrand',
        'total_quantity' => 'setTotalQuantity',
        'available_quantity' => 'setAvailableQuantity',
        'blocked_quantity' => 'setBlockedQuantity',
        'updated_on' => 'setUpdatedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku' => 'getSku',
        'category_name' => 'getCategoryName',
        'is_combo' => 'getIsCombo',
        'name' => 'getName',
        'type' => 'getType',
        'color' => 'getColor',
        'brand' => 'getBrand',
        'total_quantity' => 'getTotalQuantity',
        'available_quantity' => 'getAvailableQuantity',
        'blocked_quantity' => 'getBlockedQuantity',
        'updated_on' => 'getUpdatedOn'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
        $this->container['is_combo'] = isset($data['is_combo']) ? $data['is_combo'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['total_quantity'] = isset($data['total_quantity']) ? $data['total_quantity'] : null;
        $this->container['available_quantity'] = isset($data['available_quantity']) ? $data['available_quantity'] : null;
        $this->container['blocked_quantity'] = isset($data['blocked_quantity']) ? $data['blocked_quantity'] : null;
        $this->container['updated_on'] = isset($data['updated_on']) ? $data['updated_on'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The product id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Stock Keeping Unit or the identification unit of an individual product (generally alphanumeric)
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets category_name
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string $category_name If the product comes under a certain specified category or not. If not, then it will be named as default
     *
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets is_combo
     *
     * @return int
     */
    public function getIsCombo()
    {
        return $this->container['is_combo'];
    }

    /**
     * Sets is_combo
     *
     * @param int $is_combo 
     *
     * @return $this
     */
    public function setIsCombo($is_combo)
    {
        $this->container['is_combo'] = $is_combo;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Product name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Mention of the type of product
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color Mentions the product color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand Mentions the brand of the product.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets total_quantity
     *
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->container['total_quantity'];
    }

    /**
     * Sets total_quantity
     *
     * @param int $total_quantity Shows the total number of pieces of the product as listed
     *
     * @return $this
     */
    public function setTotalQuantity($total_quantity)
    {
        $this->container['total_quantity'] = $total_quantity;

        return $this;
    }

    /**
     * Gets available_quantity
     *
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int $available_quantity Shows the quantity which can be shipped
     *
     * @return $this
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets blocked_quantity
     *
     * @return int
     */
    public function getBlockedQuantity()
    {
        return $this->container['blocked_quantity'];
    }

    /**
     * Sets blocked_quantity
     *
     * @param int $blocked_quantity Shows the number of product pieces which cannot be shipped
     *
     * @return $this
     */
    public function setBlockedQuantity($blocked_quantity)
    {
        $this->container['blocked_quantity'] = $blocked_quantity;

        return $this;
    }

    /**
     * Gets updated_on
     *
     * @return string
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     *
     * @param string $updated_on Displays the time of inventory updation
     *
     * @return $this
     */
    public function setUpdatedOn($updated_on)
    {
        $this->container['updated_on'] = $updated_on;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


