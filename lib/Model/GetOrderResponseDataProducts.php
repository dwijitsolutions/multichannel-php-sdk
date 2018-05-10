<?php
/**
 * GetOrderResponseDataProducts
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
 * GetOrderResponseDataProducts Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetOrderResponseDataProducts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetOrderResponse_data_products';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'channel_order_product_id' => 'int',
        'name' => 'string',
        'channel_sku' => 'string',
        'quantity' => 'int',
        'product_id' => 'int',
        'available' => 'string',
        'status' => 'string',
        'hsn' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'channel_order_product_id' => null,
        'name' => null,
        'channel_sku' => null,
        'quantity' => null,
        'product_id' => null,
        'available' => null,
        'status' => null,
        'hsn' => null
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
        'channel_order_product_id' => 'channel_order_product_id',
        'name' => 'name',
        'channel_sku' => 'channel_sku',
        'quantity' => 'quantity',
        'product_id' => 'product_id',
        'available' => 'available',
        'status' => 'status',
        'hsn' => 'hsn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'channel_order_product_id' => 'setChannelOrderProductId',
        'name' => 'setName',
        'channel_sku' => 'setChannelSku',
        'quantity' => 'setQuantity',
        'product_id' => 'setProductId',
        'available' => 'setAvailable',
        'status' => 'setStatus',
        'hsn' => 'setHsn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'channel_order_product_id' => 'getChannelOrderProductId',
        'name' => 'getName',
        'channel_sku' => 'getChannelSku',
        'quantity' => 'getQuantity',
        'product_id' => 'getProductId',
        'available' => 'getAvailable',
        'status' => 'getStatus',
        'hsn' => 'getHsn'
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
        $this->container['channel_order_product_id'] = isset($data['channel_order_product_id']) ? $data['channel_order_product_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['channel_sku'] = isset($data['channel_sku']) ? $data['channel_sku'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hsn'] = isset($data['hsn']) ? $data['hsn'] : null;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets channel_order_product_id
     *
     * @return int
     */
    public function getChannelOrderProductId()
    {
        return $this->container['channel_order_product_id'];
    }

    /**
     * Sets channel_order_product_id
     *
     * @param int $channel_order_product_id channel_order_product_id
     *
     * @return $this
     */
    public function setChannelOrderProductId($channel_order_product_id)
    {
        $this->container['channel_order_product_id'] = $channel_order_product_id;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets channel_sku
     *
     * @return string
     */
    public function getChannelSku()
    {
        return $this->container['channel_sku'];
    }

    /**
     * Sets channel_sku
     *
     * @param string $channel_sku channel_sku
     *
     * @return $this
     */
    public function setChannelSku($channel_sku)
    {
        $this->container['channel_sku'] = $channel_sku;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets available
     *
     * @return string
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param string $available available
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets hsn
     *
     * @return string
     */
    public function getHsn()
    {
        return $this->container['hsn'];
    }

    /**
     * Sets hsn
     *
     * @param string $hsn hsn
     *
     * @return $this
     */
    public function setHsn($hsn)
    {
        $this->container['hsn'] = $hsn;

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

