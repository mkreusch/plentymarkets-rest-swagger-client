<?php
/**
 * InlineObject168
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
 * InlineObject168 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject168 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_168';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type_id' => 'int',
        'plenty_id' => 'int',
        'status_id' => 'float',
        'owner_id' => 'int',
        'lock_status' => 'string',
        'order_items' => 'object[]',
        'properties' => 'object[]',
        'address_relations' => 'object[]',
        'relations' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type_id' => null,
        'plenty_id' => null,
        'status_id' => null,
        'owner_id' => null,
        'lock_status' => null,
        'order_items' => null,
        'properties' => null,
        'address_relations' => null,
        'relations' => null
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
        'type_id' => 'typeId',
        'plenty_id' => 'plentyId',
        'status_id' => 'statusId',
        'owner_id' => 'ownerId',
        'lock_status' => 'lockStatus',
        'order_items' => 'orderItems',
        'properties' => 'properties',
        'address_relations' => 'addressRelations',
        'relations' => 'relations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_id' => 'setTypeId',
        'plenty_id' => 'setPlentyId',
        'status_id' => 'setStatusId',
        'owner_id' => 'setOwnerId',
        'lock_status' => 'setLockStatus',
        'order_items' => 'setOrderItems',
        'properties' => 'setProperties',
        'address_relations' => 'setAddressRelations',
        'relations' => 'setRelations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_id' => 'getTypeId',
        'plenty_id' => 'getPlentyId',
        'status_id' => 'getStatusId',
        'owner_id' => 'getOwnerId',
        'lock_status' => 'getLockStatus',
        'order_items' => 'getOrderItems',
        'properties' => 'getProperties',
        'address_relations' => 'getAddressRelations',
        'relations' => 'getRelations'
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
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['plenty_id'] = isset($data['plenty_id']) ? $data['plenty_id'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['lock_status'] = isset($data['lock_status']) ? $data['lock_status'] : null;
        $this->container['order_items'] = isset($data['order_items']) ? $data['order_items'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['address_relations'] = isset($data['address_relations']) ? $data['address_relations'] : null;
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
        }
        if ($this->container['plenty_id'] === null) {
            $invalidProperties[] = "'plenty_id' can't be null";
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
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id The ID of the order type                                                               It is possible to define individual order types. However,                                                               the following types are available by default:      1 = Sales order     2 = Delivery     3 = Returns     4 = Credit note     5 = Warranty     6 = Repair     7 = Offer     8 = Advance order     9 = Multi-order     10 = Multi credit note     11 = Multi delivery     12 = Reorder     13 = Partial delivery     14 = Subscription     15 = Redistribution
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets plenty_id
     *
     * @return int
     */
    public function getPlentyId()
    {
        return $this->container['plenty_id'];
    }

    /**
     * Sets plenty_id
     *
     * @param int $plenty_id The plenty ID of the client that the order belongs to
     *
     * @return $this
     */
    public function setPlentyId($plenty_id)
    {
        $this->container['plenty_id'] = $plenty_id;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return float|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param float|null $status_id The ID of the order status optional
     *
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int|null $owner_id The user ID of the order's owner optional
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets lock_status
     *
     * @return string|null
     */
    public function getLockStatus()
    {
        return $this->container['lock_status'];
    }

    /**
     * Sets lock_status
     *
     * @param string|null $lock_status The lock status of the order. The following statuses are available:   unlocked  permanentlyLocked  reversibleLocked  allowed values are unlocked, permanentlyLocked, reversibleLocked
     *
     * @return $this
     */
    public function setLockStatus($lock_status)
    {
        $this->container['lock_status'] = $lock_status;

        return $this;
    }

    /**
     * Gets order_items
     *
     * @return object[]|null
     */
    public function getOrderItems()
    {
        return $this->container['order_items'];
    }

    /**
     * Sets order_items
     *
     * @param object[]|null $order_items order_items
     *
     * @return $this
     */
    public function setOrderItems($order_items)
    {
        $this->container['order_items'] = $order_items;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return object[]|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param object[]|null $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets address_relations
     *
     * @return object[]|null
     */
    public function getAddressRelations()
    {
        return $this->container['address_relations'];
    }

    /**
     * Sets address_relations
     *
     * @param object[]|null $address_relations address_relations
     *
     * @return $this
     */
    public function setAddressRelations($address_relations)
    {
        $this->container['address_relations'] = $address_relations;

        return $this;
    }

    /**
     * Gets relations
     *
     * @return object[]|null
     */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
     * Sets relations
     *
     * @param object[]|null $relations relations
     *
     * @return $this
     */
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;

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

