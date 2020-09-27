<?php
/**
 * VariationWarehouse
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
 * VariationWarehouse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VariationWarehouse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VariationWarehouse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'variation_id' => 'int',
        'warehouse_id' => 'int',
        'warehouse_zone_id' => 'int',
        'storage_location_type' => 'string',
        'reorder_level' => 'int',
        'maximum_stock' => 'int',
        'stock_turnover_in_days' => 'int',
        'storage_location' => 'int',
        'stock_buffer' => 'int',
        'is_batch' => 'bool',
        'is_best_before_date' => 'bool',
        'last_update_timestamp' => 'string',
        'created_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'variation_id' => null,
        'warehouse_id' => null,
        'warehouse_zone_id' => null,
        'storage_location_type' => null,
        'reorder_level' => null,
        'maximum_stock' => null,
        'stock_turnover_in_days' => null,
        'storage_location' => null,
        'stock_buffer' => null,
        'is_batch' => null,
        'is_best_before_date' => null,
        'last_update_timestamp' => null,
        'created_at' => null
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
        'variation_id' => 'variationId',
        'warehouse_id' => 'warehouseId',
        'warehouse_zone_id' => 'warehouseZoneId',
        'storage_location_type' => 'storageLocationType',
        'reorder_level' => 'reorderLevel',
        'maximum_stock' => 'maximumStock',
        'stock_turnover_in_days' => 'stockTurnoverInDays',
        'storage_location' => 'storageLocation',
        'stock_buffer' => 'stockBuffer',
        'is_batch' => 'isBatch',
        'is_best_before_date' => 'isBestBeforeDate',
        'last_update_timestamp' => 'lastUpdateTimestamp',
        'created_at' => 'createdAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'variation_id' => 'setVariationId',
        'warehouse_id' => 'setWarehouseId',
        'warehouse_zone_id' => 'setWarehouseZoneId',
        'storage_location_type' => 'setStorageLocationType',
        'reorder_level' => 'setReorderLevel',
        'maximum_stock' => 'setMaximumStock',
        'stock_turnover_in_days' => 'setStockTurnoverInDays',
        'storage_location' => 'setStorageLocation',
        'stock_buffer' => 'setStockBuffer',
        'is_batch' => 'setIsBatch',
        'is_best_before_date' => 'setIsBestBeforeDate',
        'last_update_timestamp' => 'setLastUpdateTimestamp',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variation_id' => 'getVariationId',
        'warehouse_id' => 'getWarehouseId',
        'warehouse_zone_id' => 'getWarehouseZoneId',
        'storage_location_type' => 'getStorageLocationType',
        'reorder_level' => 'getReorderLevel',
        'maximum_stock' => 'getMaximumStock',
        'stock_turnover_in_days' => 'getStockTurnoverInDays',
        'storage_location' => 'getStorageLocation',
        'stock_buffer' => 'getStockBuffer',
        'is_batch' => 'getIsBatch',
        'is_best_before_date' => 'getIsBestBeforeDate',
        'last_update_timestamp' => 'getLastUpdateTimestamp',
        'created_at' => 'getCreatedAt'
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
        $this->container['variation_id'] = isset($data['variation_id']) ? $data['variation_id'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['warehouse_zone_id'] = isset($data['warehouse_zone_id']) ? $data['warehouse_zone_id'] : null;
        $this->container['storage_location_type'] = isset($data['storage_location_type']) ? $data['storage_location_type'] : null;
        $this->container['reorder_level'] = isset($data['reorder_level']) ? $data['reorder_level'] : null;
        $this->container['maximum_stock'] = isset($data['maximum_stock']) ? $data['maximum_stock'] : null;
        $this->container['stock_turnover_in_days'] = isset($data['stock_turnover_in_days']) ? $data['stock_turnover_in_days'] : null;
        $this->container['storage_location'] = isset($data['storage_location']) ? $data['storage_location'] : null;
        $this->container['stock_buffer'] = isset($data['stock_buffer']) ? $data['stock_buffer'] : null;
        $this->container['is_batch'] = isset($data['is_batch']) ? $data['is_batch'] : null;
        $this->container['is_best_before_date'] = isset($data['is_best_before_date']) ? $data['is_best_before_date'] : null;
        $this->container['last_update_timestamp'] = isset($data['last_update_timestamp']) ? $data['last_update_timestamp'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
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
     * Gets variation_id
     *
     * @return int|null
     */
    public function getVariationId()
    {
        return $this->container['variation_id'];
    }

    /**
     * Sets variation_id
     *
     * @param int|null $variation_id The unique ID of the variation
     *
     * @return $this
     */
    public function setVariationId($variation_id)
    {
        $this->container['variation_id'] = $variation_id;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return int|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param int|null $warehouse_id The unique ID of the warehouse
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets warehouse_zone_id
     *
     * @return int|null
     */
    public function getWarehouseZoneId()
    {
        return $this->container['warehouse_zone_id'];
    }

    /**
     * Sets warehouse_zone_id
     *
     * @param int|null $warehouse_zone_id The unique ID of the warehouse zone
     *
     * @return $this
     */
    public function setWarehouseZoneId($warehouse_zone_id)
    {
        $this->container['warehouse_zone_id'] = $warehouse_zone_id;

        return $this;
    }

    /**
     * Gets storage_location_type
     *
     * @return string|null
     */
    public function getStorageLocationType()
    {
        return $this->container['storage_location_type'];
    }

    /**
     * Sets storage_location_type
     *
     * @param string|null $storage_location_type The storage location type of the warehouse
     *
     * @return $this
     */
    public function setStorageLocationType($storage_location_type)
    {
        $this->container['storage_location_type'] = $storage_location_type;

        return $this;
    }

    /**
     * Gets reorder_level
     *
     * @return int|null
     */
    public function getReorderLevel()
    {
        return $this->container['reorder_level'];
    }

    /**
     * Sets reorder_level
     *
     * @param int|null $reorder_level The reorder level for the variation in this warehouse
     *
     * @return $this
     */
    public function setReorderLevel($reorder_level)
    {
        $this->container['reorder_level'] = $reorder_level;

        return $this;
    }

    /**
     * Gets maximum_stock
     *
     * @return int|null
     */
    public function getMaximumStock()
    {
        return $this->container['maximum_stock'];
    }

    /**
     * Sets maximum_stock
     *
     * @param int|null $maximum_stock The maximum stock for the variation in this warehouse
     *
     * @return $this
     */
    public function setMaximumStock($maximum_stock)
    {
        $this->container['maximum_stock'] = $maximum_stock;

        return $this;
    }

    /**
     * Gets stock_turnover_in_days
     *
     * @return int|null
     */
    public function getStockTurnoverInDays()
    {
        return $this->container['stock_turnover_in_days'];
    }

    /**
     * Sets stock_turnover_in_days
     *
     * @param int|null $stock_turnover_in_days The stock turnover in days for the variation in this warehouse
     *
     * @return $this
     */
    public function setStockTurnoverInDays($stock_turnover_in_days)
    {
        $this->container['stock_turnover_in_days'] = $stock_turnover_in_days;

        return $this;
    }

    /**
     * Gets storage_location
     *
     * @return int|null
     */
    public function getStorageLocation()
    {
        return $this->container['storage_location'];
    }

    /**
     * Sets storage_location
     *
     * @param int|null $storage_location The storage location of the variation in this warehouse
     *
     * @return $this
     */
    public function setStorageLocation($storage_location)
    {
        $this->container['storage_location'] = $storage_location;

        return $this;
    }

    /**
     * Gets stock_buffer
     *
     * @return int|null
     */
    public function getStockBuffer()
    {
        return $this->container['stock_buffer'];
    }

    /**
     * Sets stock_buffer
     *
     * @param int|null $stock_buffer The stock buffer for the variation in this warehouse
     *
     * @return $this
     */
    public function setStockBuffer($stock_buffer)
    {
        $this->container['stock_buffer'] = $stock_buffer;

        return $this;
    }

    /**
     * Gets is_batch
     *
     * @return bool|null
     */
    public function getIsBatch()
    {
        return $this->container['is_batch'];
    }

    /**
     * Sets is_batch
     *
     * @param bool|null $is_batch Is for warehouse and variation stock batch active
     *
     * @return $this
     */
    public function setIsBatch($is_batch)
    {
        $this->container['is_batch'] = $is_batch;

        return $this;
    }

    /**
     * Gets is_best_before_date
     *
     * @return bool|null
     */
    public function getIsBestBeforeDate()
    {
        return $this->container['is_best_before_date'];
    }

    /**
     * Sets is_best_before_date
     *
     * @param bool|null $is_best_before_date Is for warehouse and variation stock best before date active
     *
     * @return $this
     */
    public function setIsBestBeforeDate($is_best_before_date)
    {
        $this->container['is_best_before_date'] = $is_best_before_date;

        return $this;
    }

    /**
     * Gets last_update_timestamp
     *
     * @return string|null
     */
    public function getLastUpdateTimestamp()
    {
        return $this->container['last_update_timestamp'];
    }

    /**
     * Sets last_update_timestamp
     *
     * @param string|null $last_update_timestamp The time the warehouse data was last updated.
     *
     * @return $this
     */
    public function setLastUpdateTimestamp($last_update_timestamp)
    {
        $this->container['last_update_timestamp'] = $last_update_timestamp;

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
     * @param string|null $created_at The time the warehouse data was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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

