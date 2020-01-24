<?php
/**
 * CreateShipmentRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\ShipmentsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shipments
 *
 * This interface describes all endpoints regarding the shipment domain.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EzzeSiftuz\ShipmentsV1\Model;

use \ArrayAccess;
use \EzzeSiftuz\ShipmentsV1\ObjectSerializer;

/**
 * CreateShipmentRequest Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\ShipmentsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateShipmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tracking_key' => '\EzzeSiftuz\ShipmentsV1\Model\TrackingKey',
'ship_date' => '\DateTime',
'ship_from_address' => '\EzzeSiftuz\ShipmentsV1\Model\Address',
'position_items' => '\EzzeSiftuz\ShipmentsV1\Model\PositionItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tracking_key' => null,
'ship_date' => 'date-time',
'ship_from_address' => null,
'position_items' => null    ];

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
        'tracking_key' => 'trackingKey',
'ship_date' => 'shipDate',
'ship_from_address' => 'shipFromAddress',
'position_items' => 'positionItems'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tracking_key' => 'setTrackingKey',
'ship_date' => 'setShipDate',
'ship_from_address' => 'setShipFromAddress',
'position_items' => 'setPositionItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tracking_key' => 'getTrackingKey',
'ship_date' => 'getShipDate',
'ship_from_address' => 'getShipFromAddress',
'position_items' => 'getPositionItems'    ];

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
        $this->container['tracking_key'] = isset($data['tracking_key']) ? $data['tracking_key'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['ship_from_address'] = isset($data['ship_from_address']) ? $data['ship_from_address'] : null;
        $this->container['position_items'] = isset($data['position_items']) ? $data['position_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tracking_key'] === null) {
            $invalidProperties[] = "'tracking_key' can't be null";
        }
        if ($this->container['ship_date'] === null) {
            $invalidProperties[] = "'ship_date' can't be null";
        }
        if ($this->container['ship_from_address'] === null) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }
        if ($this->container['position_items'] === null) {
            $invalidProperties[] = "'position_items' can't be null";
        }
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets tracking_key
     *
     * @return \EzzeSiftuz\ShipmentsV1\Model\TrackingKey
     */
    public function getTrackingKey()
    {
        return $this->container['tracking_key'];
    }

    /**
     * Sets tracking_key
     *
     * @param \EzzeSiftuz\ShipmentsV1\Model\TrackingKey $tracking_key tracking_key
     *
     * @return $this
     */
    public function setTrackingKey($tracking_key)
    {
        $this->container['tracking_key'] = $tracking_key;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime $ship_date The date that the shipment is handed over to the carrier. Must be a valid UTC dateTime according to ISO 8601.
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets ship_from_address
     *
     * @return \EzzeSiftuz\ShipmentsV1\Model\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address
     *
     * @param \EzzeSiftuz\ShipmentsV1\Model\Address $ship_from_address ship_from_address
     *
     * @return $this
     */
    public function setShipFromAddress($ship_from_address)
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets position_items
     *
     * @return \EzzeSiftuz\ShipmentsV1\Model\PositionItem[]
     */
    public function getPositionItems()
    {
        return $this->container['position_items'];
    }

    /**
     * Sets position_items
     *
     * @param \EzzeSiftuz\ShipmentsV1\Model\PositionItem[] $position_items The position items included in shipment.
     *
     * @return $this
     */
    public function setPositionItems($position_items)
    {
        $this->container['position_items'] = $position_items;

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
