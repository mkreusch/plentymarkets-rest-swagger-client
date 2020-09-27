<?php
/**
 * InlineObject114
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
 * InlineObject114 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject114 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_114';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quantity' => 'float',
        'warehouse_id' => 'int',
        'storage_location_id' => 'int',
        'reason_id' => 'int',
        'best_before_date' => 'string',
        'batch' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'quantity' => null,
        'warehouse_id' => null,
        'storage_location_id' => null,
        'reason_id' => null,
        'best_before_date' => null,
        'batch' => null
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
        'quantity' => 'quantity',
        'warehouse_id' => 'warehouseId',
        'storage_location_id' => 'storageLocationId',
        'reason_id' => 'reasonId',
        'best_before_date' => 'bestBeforeDate',
        'batch' => 'batch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'warehouse_id' => 'setWarehouseId',
        'storage_location_id' => 'setStorageLocationId',
        'reason_id' => 'setReasonId',
        'best_before_date' => 'setBestBeforeDate',
        'batch' => 'setBatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'warehouse_id' => 'getWarehouseId',
        'storage_location_id' => 'getStorageLocationId',
        'reason_id' => 'getReasonId',
        'best_before_date' => 'getBestBeforeDate',
        'batch' => 'getBatch'
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['storage_location_id'] = isset($data['storage_location_id']) ? $data['storage_location_id'] : null;
        $this->container['reason_id'] = isset($data['reason_id']) ? $data['reason_id'] : null;
        $this->container['best_before_date'] = isset($data['best_before_date']) ? $data['best_before_date'] : null;
        $this->container['batch'] = isset($data['batch']) ? $data['batch'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['warehouse_id'] === null) {
            $invalidProperties[] = "'warehouse_id' can't be null";
        }
        if ($this->container['storage_location_id'] === null) {
            $invalidProperties[] = "'storage_location_id' can't be null";
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
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity The quantity of the variation
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param int $warehouse_id The ID of the warehouse
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets storage_location_id
     *
     * @return int
     */
    public function getStorageLocationId()
    {
        return $this->container['storage_location_id'];
    }

    /**
     * Sets storage_location_id
     *
     * @param int $storage_location_id The ID of the storage location
     *
     * @return $this
     */
    public function setStorageLocationId($storage_location_id)
    {
        $this->container['storage_location_id'] = $storage_location_id;

        return $this;
    }

    /**
     * Gets reason_id
     *
     * @return int|null
     */
    public function getReasonId()
    {
        return $this->container['reason_id'];
    }

    /**
     * Sets reason_id
     *
     * @param int|null $reason_id The reason for correction. The following reasons are available:  301: Stock correction 302: Stock correction by stocktaking 304: Stock correction because of manufacturer error 305: Stock correction because of unusable paper 306: Stock correction because of packing error 307: Stock correction because of damage 309: Stock correction (internal offset) 317: Stock correction because of BBD 318: Stock correction because of shipping items to FBA 319: Stock correction because of shipping items to fulfillment service provider 320: Stock correction because of sample for interested parties 321: Stock correction because of sample for customers 322: Stock correction because of sample 323: Stock correction because quality models are booked in 324: Stock correction because quality models are booked out 325: Stock correction because of gift 326: Stock correction because of malfunction (without return) 327: Stock correction because of loss 328: Stock correction because of unpack  optional
     *
     * @return $this
     */
    public function setReasonId($reason_id)
    {
        $this->container['reason_id'] = $reason_id;

        return $this;
    }

    /**
     * Gets best_before_date
     *
     * @return string|null
     */
    public function getBestBeforeDate()
    {
        return $this->container['best_before_date'];
    }

    /**
     * Sets best_before_date
     *
     * @param string|null $best_before_date The best before date of the variation optional
     *
     * @return $this
     */
    public function setBestBeforeDate($best_before_date)
    {
        $this->container['best_before_date'] = $best_before_date;

        return $this;
    }

    /**
     * Gets batch
     *
     * @return string|null
     */
    public function getBatch()
    {
        return $this->container['batch'];
    }

    /**
     * Sets batch
     *
     * @param string|null $batch The batch of the variation optional
     *
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->container['batch'] = $batch;

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

