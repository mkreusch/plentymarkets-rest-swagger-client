<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'type_id' => 'int',
        'status_id' => 'float',
        'status_name' => 'string',
        'owner_id' => 'int',
        'referrer_id' => 'float',
        'created_at' => 'string',
        'updated_at' => 'string',
        'plenty_id' => 'int',
        'location_id' => 'int',
        'round_totals_only' => 'bool',
        'number_of_decimals' => 'int',
        'lock_status' => 'string',
        'has_tax_relevant_documents' => 'bool',
        'has_delivery_orders' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'type_id' => null,
        'status_id' => null,
        'status_name' => null,
        'owner_id' => null,
        'referrer_id' => null,
        'created_at' => null,
        'updated_at' => null,
        'plenty_id' => null,
        'location_id' => null,
        'round_totals_only' => null,
        'number_of_decimals' => null,
        'lock_status' => null,
        'has_tax_relevant_documents' => null,
        'has_delivery_orders' => null
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
        'type_id' => 'typeId',
        'status_id' => 'statusId',
        'status_name' => 'statusName',
        'owner_id' => 'ownerId',
        'referrer_id' => 'referrerId',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'plenty_id' => 'plentyId',
        'location_id' => 'locationId',
        'round_totals_only' => 'roundTotalsOnly',
        'number_of_decimals' => 'numberOfDecimals',
        'lock_status' => 'lockStatus',
        'has_tax_relevant_documents' => 'hasTaxRelevantDocuments',
        'has_delivery_orders' => 'hasDeliveryOrders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type_id' => 'setTypeId',
        'status_id' => 'setStatusId',
        'status_name' => 'setStatusName',
        'owner_id' => 'setOwnerId',
        'referrer_id' => 'setReferrerId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'plenty_id' => 'setPlentyId',
        'location_id' => 'setLocationId',
        'round_totals_only' => 'setRoundTotalsOnly',
        'number_of_decimals' => 'setNumberOfDecimals',
        'lock_status' => 'setLockStatus',
        'has_tax_relevant_documents' => 'setHasTaxRelevantDocuments',
        'has_delivery_orders' => 'setHasDeliveryOrders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type_id' => 'getTypeId',
        'status_id' => 'getStatusId',
        'status_name' => 'getStatusName',
        'owner_id' => 'getOwnerId',
        'referrer_id' => 'getReferrerId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'plenty_id' => 'getPlentyId',
        'location_id' => 'getLocationId',
        'round_totals_only' => 'getRoundTotalsOnly',
        'number_of_decimals' => 'getNumberOfDecimals',
        'lock_status' => 'getLockStatus',
        'has_tax_relevant_documents' => 'getHasTaxRelevantDocuments',
        'has_delivery_orders' => 'getHasDeliveryOrders'
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
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['status_name'] = isset($data['status_name']) ? $data['status_name'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['referrer_id'] = isset($data['referrer_id']) ? $data['referrer_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['plenty_id'] = isset($data['plenty_id']) ? $data['plenty_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['round_totals_only'] = isset($data['round_totals_only']) ? $data['round_totals_only'] : null;
        $this->container['number_of_decimals'] = isset($data['number_of_decimals']) ? $data['number_of_decimals'] : null;
        $this->container['lock_status'] = isset($data['lock_status']) ? $data['lock_status'] : null;
        $this->container['has_tax_relevant_documents'] = isset($data['has_tax_relevant_documents']) ? $data['has_tax_relevant_documents'] : null;
        $this->container['has_delivery_orders'] = isset($data['has_delivery_orders']) ? $data['has_delivery_orders'] : null;
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
     * @param int|null $id The ID of the order
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int|null $type_id The ID of the order type                                                               It is possible to define individual order types. However,                                                               the following types are available by default: <ul>     <li>1 = Sales order</li>     <li>2 = Delivery</li>     <li>3 = Returns</li>     <li>4 = Credit note</li>     <li>5 = Warranty</li>     <li>6 = Repair</li>     <li>7 = Offer</li>     <li>8 = Advance order</li>     <li>9 = Multi-order</li>     <li>10 = Multi credit note</li>     <li>11 = Multi delivery</li>     <li>12 = Reorder</li>     <li>13 = Partial delivery</li>     <li>14 = Subscription</li>     <li>15 = Redistribution</li> </ul>
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

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
     * @param float|null $status_id The ID of the order status
     *
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets status_name
     *
     * @return string|null
     */
    public function getStatusName()
    {
        return $this->container['status_name'];
    }

    /**
     * Sets status_name
     *
     * @param string|null $status_name The name for the status ID (read only)
     *
     * @return $this
     */
    public function setStatusName($status_name)
    {
        $this->container['status_name'] = $status_name;

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
     * @param int|null $owner_id The user ID of the order's owner
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets referrer_id
     *
     * @return float|null
     */
    public function getReferrerId()
    {
        return $this->container['referrer_id'];
    }

    /**
     * Sets referrer_id
     *
     * @param float|null $referrer_id The referrer ID of the order
     *
     * @return $this
     */
    public function setReferrerId($referrer_id)
    {
        $this->container['referrer_id'] = $referrer_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at The date that the order was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param string|null $updated_at The date that the order was updated last
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets plenty_id
     *
     * @return int|null
     */
    public function getPlentyId()
    {
        return $this->container['plenty_id'];
    }

    /**
     * Sets plenty_id
     *
     * @param int|null $plenty_id The plenty ID of the client that the order belongs to
     *
     * @return $this
     */
    public function setPlentyId($plenty_id)
    {
        $this->container['plenty_id'] = $plenty_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int|null $location_id The ID of the location that the order belongs to
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets round_totals_only
     *
     * @return bool|null
     */
    public function getRoundTotalsOnly()
    {
        return $this->container['round_totals_only'];
    }

    /**
     * Sets round_totals_only
     *
     * @param bool|null $round_totals_only True means only the order's total amounts are rounded, false the order item price is rounded too. (read-only)
     *
     * @return $this
     */
    public function setRoundTotalsOnly($round_totals_only)
    {
        $this->container['round_totals_only'] = $round_totals_only;

        return $this;
    }

    /**
     * Gets number_of_decimals
     *
     * @return int|null
     */
    public function getNumberOfDecimals()
    {
        return $this->container['number_of_decimals'];
    }

    /**
     * Sets number_of_decimals
     *
     * @param int|null $number_of_decimals The number of decimals this order was rounded with. (read-only)
     *
     * @return $this
     */
    public function setNumberOfDecimals($number_of_decimals)
    {
        $this->container['number_of_decimals'] = $number_of_decimals;

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
     * @param string|null $lock_status The lock status of the order. The following statuses are available: <ul>  <li>unlocked</li>  <li>permanentlyLocked</li>  <li>reversibleLocked</li> </ul>
     *
     * @return $this
     */
    public function setLockStatus($lock_status)
    {
        $this->container['lock_status'] = $lock_status;

        return $this;
    }

    /**
     * Gets has_tax_relevant_documents
     *
     * @return bool|null
     */
    public function getHasTaxRelevantDocuments()
    {
        return $this->container['has_tax_relevant_documents'];
    }

    /**
     * Sets has_tax_relevant_documents
     *
     * @param bool|null $has_tax_relevant_documents 
     *
     * @return $this
     */
    public function setHasTaxRelevantDocuments($has_tax_relevant_documents)
    {
        $this->container['has_tax_relevant_documents'] = $has_tax_relevant_documents;

        return $this;
    }

    /**
     * Gets has_delivery_orders
     *
     * @return bool|null
     */
    public function getHasDeliveryOrders()
    {
        return $this->container['has_delivery_orders'];
    }

    /**
     * Sets has_delivery_orders
     *
     * @param bool|null $has_delivery_orders Has the order delivery orders?
     *
     * @return $this
     */
    public function setHasDeliveryOrders($has_delivery_orders)
    {
        $this->container['has_delivery_orders'] = $has_delivery_orders;

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


