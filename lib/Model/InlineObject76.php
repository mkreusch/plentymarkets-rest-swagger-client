<?php
/**
 * InlineObject76
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * plentymarkets REST-API
 *
 * The plentymarkets REST API expands the functionality of the plentymarkets CMS and allows access to resources, i.e. data records, via unique URI paths
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * InlineObject76 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject76 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_76';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'backend_name' => 'string',
        'order_property_grouping_type' => 'string',
        'is_surcharge_percental' => 'bool',
        'otto_component_id' => 'int',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'backend_name' => null,
        'order_property_grouping_type' => null,
        'is_surcharge_percental' => null,
        'otto_component_id' => null,
        'updated_at' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'backend_name' => 'backendName',
        'order_property_grouping_type' => 'orderPropertyGroupingType',
        'is_surcharge_percental' => 'isSurchargePercental',
        'otto_component_id' => 'ottoComponentId',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'backend_name' => 'setBackendName',
        'order_property_grouping_type' => 'setOrderPropertyGroupingType',
        'is_surcharge_percental' => 'setIsSurchargePercental',
        'otto_component_id' => 'setOttoComponentId',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'backend_name' => 'getBackendName',
        'order_property_grouping_type' => 'getOrderPropertyGroupingType',
        'is_surcharge_percental' => 'getIsSurchargePercental',
        'otto_component_id' => 'getOttoComponentId',
        'updated_at' => 'getUpdatedAt'
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
        return self::$openAPIModelName;
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
        $this->container['backend_name'] = isset($data['backend_name']) ? $data['backend_name'] : null;
        $this->container['order_property_grouping_type'] = isset($data['order_property_grouping_type']) ? $data['order_property_grouping_type'] : null;
        $this->container['is_surcharge_percental'] = isset($data['is_surcharge_percental']) ? $data['is_surcharge_percental'] : null;
        $this->container['otto_component_id'] = isset($data['otto_component_id']) ? $data['otto_component_id'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['backend_name'] === null) {
            $invalidProperties[] = "'backend_name' can't be null";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The unique ID of the property group optional
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets backend_name
     *
     * @return string
     */
    public function getBackendName()
    {
        return $this->container['backend_name'];
    }

    /**
     * Sets backend_name
     *
     * @param string $backend_name The back end name of the property group. This name is not visible to customers.
     *
     * @return $this
     */
    public function setBackendName($backend_name)
    {
        $this->container['backend_name'] = $backend_name;

        return $this;
    }

    /**
     * Gets order_property_grouping_type
     *
     * @return string|null
     */
    public function getOrderPropertyGroupingType()
    {
        return $this->container['order_property_grouping_type'];
    }

    /**
     * Sets order_property_grouping_type
     *
     * @param string|null $order_property_grouping_type Indicates how order properties are grouped for selection in the order process. This parameter is applicable to order properties of the type None only.none = Order properties are not grouped.single = One of the grouped order properties can be selected from the drop-down list.multi = Multiple order properties can be selected. optional allowed values are none, single, multi
     *
     * @return $this
     */
    public function setOrderPropertyGroupingType($order_property_grouping_type)
    {
        $this->container['order_property_grouping_type'] = $order_property_grouping_type;

        return $this;
    }

    /**
     * Gets is_surcharge_percental
     *
     * @return bool|null
     */
    public function getIsSurchargePercental()
    {
        return $this->container['is_surcharge_percental'];
    }

    /**
     * Sets is_surcharge_percental
     *
     * @param bool|null $is_surcharge_percental Flag that indicates if surcharge values are calculated in percent. optional
     *
     * @return $this
     */
    public function setIsSurchargePercental($is_surcharge_percental)
    {
        $this->container['is_surcharge_percental'] = $is_surcharge_percental;

        return $this;
    }

    /**
     * Gets otto_component_id
     *
     * @return int|null
     */
    public function getOttoComponentId()
    {
        return $this->container['otto_component_id'];
    }

    /**
     * Sets otto_component_id
     *
     * @param int|null $otto_component_id optional
     *
     * @return $this
     */
    public function setOttoComponentId($otto_component_id)
    {
        $this->container['otto_component_id'] = $otto_component_id;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at The time the property group was last updated. optional
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


