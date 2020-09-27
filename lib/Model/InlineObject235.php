<?php
/**
 * InlineObject235
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
 * InlineObject235 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject235 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_235';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'redistributions' => '\OpenAPI\Client\Model\VariationStockRedistribution[]',
        'variation_id' => 'int',
        'reason_id' => 'int',
        'quantity' => 'float',
        'current_storage_location_id' => 'int',
        'current_warehouse_id' => 'int',
        'new_storage_location_id' => 'int',
        'new_warehouse_id' => 'int',
        'batch' => 'string',
        'best_before_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'redistributions' => null,
        'variation_id' => null,
        'reason_id' => null,
        'quantity' => null,
        'current_storage_location_id' => null,
        'current_warehouse_id' => null,
        'new_storage_location_id' => null,
        'new_warehouse_id' => null,
        'batch' => null,
        'best_before_date' => null
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
        'redistributions' => 'redistributions',
        'variation_id' => 'variationId',
        'reason_id' => 'reasonId',
        'quantity' => 'quantity',
        'current_storage_location_id' => 'currentStorageLocationId',
        'current_warehouse_id' => 'currentWarehouseId',
        'new_storage_location_id' => 'newStorageLocationId',
        'new_warehouse_id' => 'newWarehouseId',
        'batch' => 'batch',
        'best_before_date' => 'bestBeforeDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redistributions' => 'setRedistributions',
        'variation_id' => 'setVariationId',
        'reason_id' => 'setReasonId',
        'quantity' => 'setQuantity',
        'current_storage_location_id' => 'setCurrentStorageLocationId',
        'current_warehouse_id' => 'setCurrentWarehouseId',
        'new_storage_location_id' => 'setNewStorageLocationId',
        'new_warehouse_id' => 'setNewWarehouseId',
        'batch' => 'setBatch',
        'best_before_date' => 'setBestBeforeDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redistributions' => 'getRedistributions',
        'variation_id' => 'getVariationId',
        'reason_id' => 'getReasonId',
        'quantity' => 'getQuantity',
        'current_storage_location_id' => 'getCurrentStorageLocationId',
        'current_warehouse_id' => 'getCurrentWarehouseId',
        'new_storage_location_id' => 'getNewStorageLocationId',
        'new_warehouse_id' => 'getNewWarehouseId',
        'batch' => 'getBatch',
        'best_before_date' => 'getBestBeforeDate'
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
        $this->container['redistributions'] = isset($data['redistributions']) ? $data['redistributions'] : null;
        $this->container['variation_id'] = isset($data['variation_id']) ? $data['variation_id'] : null;
        $this->container['reason_id'] = isset($data['reason_id']) ? $data['reason_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['current_storage_location_id'] = isset($data['current_storage_location_id']) ? $data['current_storage_location_id'] : null;
        $this->container['current_warehouse_id'] = isset($data['current_warehouse_id']) ? $data['current_warehouse_id'] : null;
        $this->container['new_storage_location_id'] = isset($data['new_storage_location_id']) ? $data['new_storage_location_id'] : null;
        $this->container['new_warehouse_id'] = isset($data['new_warehouse_id']) ? $data['new_warehouse_id'] : null;
        $this->container['batch'] = isset($data['batch']) ? $data['batch'] : null;
        $this->container['best_before_date'] = isset($data['best_before_date']) ? $data['best_before_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['redistributions'] === null) {
            $invalidProperties[] = "'redistributions' can't be null";
        }
        if ($this->container['variation_id'] === null) {
            $invalidProperties[] = "'variation_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['current_storage_location_id'] === null) {
            $invalidProperties[] = "'current_storage_location_id' can't be null";
        }
        if ($this->container['current_warehouse_id'] === null) {
            $invalidProperties[] = "'current_warehouse_id' can't be null";
        }
        if ($this->container['new_storage_location_id'] === null) {
            $invalidProperties[] = "'new_storage_location_id' can't be null";
        }
        if ($this->container['new_warehouse_id'] === null) {
            $invalidProperties[] = "'new_warehouse_id' can't be null";
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
     * Gets redistributions
     *
     * @return \OpenAPI\Client\Model\VariationStockRedistribution[]
     */
    public function getRedistributions()
    {
        return $this->container['redistributions'];
    }

    /**
     * Sets redistributions
     *
     * @param \OpenAPI\Client\Model\VariationStockRedistribution[] $redistributions redistributions
     *
     * @return $this
     */
    public function setRedistributions($redistributions)
    {
        $this->container['redistributions'] = $redistributions;

        return $this;
    }

    /**
     * Gets variation_id
     *
     * @return int
     */
    public function getVariationId()
    {
        return $this->container['variation_id'];
    }

    /**
     * Sets variation_id
     *
     * @param int $variation_id The ID of the variation
     *
     * @return $this
     */
    public function setVariationId($variation_id)
    {
        $this->container['variation_id'] = $variation_id;

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
     * @param int|null $reason_id The reason for the redistribution. Valid reasons are:   401: Stock transfer  402: Stock correction by stocktaking  403: Stock transfer because of need for repair  optional
     *
     * @return $this
     */
    public function setReasonId($reason_id)
    {
        $this->container['reason_id'] = $reason_id;

        return $this;
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
     * @param float $quantity The quantity to redistribute
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets current_storage_location_id
     *
     * @return int
     */
    public function getCurrentStorageLocationId()
    {
        return $this->container['current_storage_location_id'];
    }

    /**
     * Sets current_storage_location_id
     *
     * @param int $current_storage_location_id The ID of the current storage location
     *
     * @return $this
     */
    public function setCurrentStorageLocationId($current_storage_location_id)
    {
        $this->container['current_storage_location_id'] = $current_storage_location_id;

        return $this;
    }

    /**
     * Gets current_warehouse_id
     *
     * @return int
     */
    public function getCurrentWarehouseId()
    {
        return $this->container['current_warehouse_id'];
    }

    /**
     * Sets current_warehouse_id
     *
     * @param int $current_warehouse_id The ID of the current warehouse
     *
     * @return $this
     */
    public function setCurrentWarehouseId($current_warehouse_id)
    {
        $this->container['current_warehouse_id'] = $current_warehouse_id;

        return $this;
    }

    /**
     * Gets new_storage_location_id
     *
     * @return int
     */
    public function getNewStorageLocationId()
    {
        return $this->container['new_storage_location_id'];
    }

    /**
     * Sets new_storage_location_id
     *
     * @param int $new_storage_location_id The ID of the new storage location
     *
     * @return $this
     */
    public function setNewStorageLocationId($new_storage_location_id)
    {
        $this->container['new_storage_location_id'] = $new_storage_location_id;

        return $this;
    }

    /**
     * Gets new_warehouse_id
     *
     * @return int
     */
    public function getNewWarehouseId()
    {
        return $this->container['new_warehouse_id'];
    }

    /**
     * Sets new_warehouse_id
     *
     * @param int $new_warehouse_id The ID of the new warehouse
     *
     * @return $this
     */
    public function setNewWarehouseId($new_warehouse_id)
    {
        $this->container['new_warehouse_id'] = $new_warehouse_id;

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
     * @param string|null $batch The batch of the redistribution optional
     *
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->container['batch'] = $batch;

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
     * @param string|null $best_before_date The best before date of the redistribution optional
     *
     * @return $this
     */
    public function setBestBeforeDate($best_before_date)
    {
        $this->container['best_before_date'] = $best_before_date;

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


