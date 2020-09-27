<?php
/**
 * Stock
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
 * Stock Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Stock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Stock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_id' => 'int',
        'variation_id' => 'int',
        'warehouse_id' => 'int',
        'stock_physical' => 'float',
        'reserved_stock' => 'float',
        'reserved_ebay' => 'float',
        'reorder_delta' => 'float',
        'stock_net' => 'float',
        'reordered' => 'int',
        'warehouse_priority' => 'int',
        'reserved_bundle' => 'float',
        'average_purchase_price' => 'float',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'item_id' => null,
        'variation_id' => null,
        'warehouse_id' => null,
        'stock_physical' => null,
        'reserved_stock' => null,
        'reserved_ebay' => null,
        'reorder_delta' => null,
        'stock_net' => null,
        'reordered' => null,
        'warehouse_priority' => null,
        'reserved_bundle' => null,
        'average_purchase_price' => null,
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
        'item_id' => 'itemId',
        'variation_id' => 'variationId',
        'warehouse_id' => 'warehouseId',
        'stock_physical' => 'stockPhysical',
        'reserved_stock' => 'reservedStock',
        'reserved_ebay' => 'reservedEbay',
        'reorder_delta' => 'reorderDelta',
        'stock_net' => 'stockNet',
        'reordered' => 'reordered',
        'warehouse_priority' => 'warehousePriority',
        'reserved_bundle' => 'reservedBundle',
        'average_purchase_price' => 'averagePurchasePrice',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
        'variation_id' => 'setVariationId',
        'warehouse_id' => 'setWarehouseId',
        'stock_physical' => 'setStockPhysical',
        'reserved_stock' => 'setReservedStock',
        'reserved_ebay' => 'setReservedEbay',
        'reorder_delta' => 'setReorderDelta',
        'stock_net' => 'setStockNet',
        'reordered' => 'setReordered',
        'warehouse_priority' => 'setWarehousePriority',
        'reserved_bundle' => 'setReservedBundle',
        'average_purchase_price' => 'setAveragePurchasePrice',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
        'variation_id' => 'getVariationId',
        'warehouse_id' => 'getWarehouseId',
        'stock_physical' => 'getStockPhysical',
        'reserved_stock' => 'getReservedStock',
        'reserved_ebay' => 'getReservedEbay',
        'reorder_delta' => 'getReorderDelta',
        'stock_net' => 'getStockNet',
        'reordered' => 'getReordered',
        'warehouse_priority' => 'getWarehousePriority',
        'reserved_bundle' => 'getReservedBundle',
        'average_purchase_price' => 'getAveragePurchasePrice',
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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['variation_id'] = isset($data['variation_id']) ? $data['variation_id'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['stock_physical'] = isset($data['stock_physical']) ? $data['stock_physical'] : null;
        $this->container['reserved_stock'] = isset($data['reserved_stock']) ? $data['reserved_stock'] : null;
        $this->container['reserved_ebay'] = isset($data['reserved_ebay']) ? $data['reserved_ebay'] : null;
        $this->container['reorder_delta'] = isset($data['reorder_delta']) ? $data['reorder_delta'] : null;
        $this->container['stock_net'] = isset($data['stock_net']) ? $data['stock_net'] : null;
        $this->container['reordered'] = isset($data['reordered']) ? $data['reordered'] : null;
        $this->container['warehouse_priority'] = isset($data['warehouse_priority']) ? $data['warehouse_priority'] : null;
        $this->container['reserved_bundle'] = isset($data['reserved_bundle']) ? $data['reserved_bundle'] : null;
        $this->container['average_purchase_price'] = isset($data['average_purchase_price']) ? $data['average_purchase_price'] : null;
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
     * Gets item_id
     *
     * @return int|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int|null $item_id The ID of the item
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
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
     * @param int|null $variation_id The ID of the variation
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
     * @param int|null $warehouse_id The ID of the warehouse
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets stock_physical
     *
     * @return float|null
     */
    public function getStockPhysical()
    {
        return $this->container['stock_physical'];
    }

    /**
     * Sets stock_physical
     *
     * @param float|null $stock_physical The physical stock
     *
     * @return $this
     */
    public function setStockPhysical($stock_physical)
    {
        $this->container['stock_physical'] = $stock_physical;

        return $this;
    }

    /**
     * Gets reserved_stock
     *
     * @return float|null
     */
    public function getReservedStock()
    {
        return $this->container['reserved_stock'];
    }

    /**
     * Sets reserved_stock
     *
     * @param float|null $reserved_stock The reserved stock
     *
     * @return $this
     */
    public function setReservedStock($reserved_stock)
    {
        $this->container['reserved_stock'] = $reserved_stock;

        return $this;
    }

    /**
     * Gets reserved_ebay
     *
     * @return float|null
     */
    public function getReservedEbay()
    {
        return $this->container['reserved_ebay'];
    }

    /**
     * Sets reserved_ebay
     *
     * @param float|null $reserved_ebay The stock reserved for ebay
     *
     * @return $this
     */
    public function setReservedEbay($reserved_ebay)
    {
        $this->container['reserved_ebay'] = $reserved_ebay;

        return $this;
    }

    /**
     * Gets reorder_delta
     *
     * @return float|null
     */
    public function getReorderDelta()
    {
        return $this->container['reorder_delta'];
    }

    /**
     * Sets reorder_delta
     *
     * @param float|null $reorder_delta The reorder delta
     *
     * @return $this
     */
    public function setReorderDelta($reorder_delta)
    {
        $this->container['reorder_delta'] = $reorder_delta;

        return $this;
    }

    /**
     * Gets stock_net
     *
     * @return float|null
     */
    public function getStockNet()
    {
        return $this->container['stock_net'];
    }

    /**
     * Sets stock_net
     *
     * @param float|null $stock_net The net stock
     *
     * @return $this
     */
    public function setStockNet($stock_net)
    {
        $this->container['stock_net'] = $stock_net;

        return $this;
    }

    /**
     * Gets reordered
     *
     * @return int|null
     */
    public function getReordered()
    {
        return $this->container['reordered'];
    }

    /**
     * Sets reordered
     *
     * @param int|null $reordered The reordered quantity of a variation
     *
     * @return $this
     */
    public function setReordered($reordered)
    {
        $this->container['reordered'] = $reordered;

        return $this;
    }

    /**
     * Gets warehouse_priority
     *
     * @return int|null
     */
    public function getWarehousePriority()
    {
        return $this->container['warehouse_priority'];
    }

    /**
     * Sets warehouse_priority
     *
     * @param int|null $warehouse_priority The priority of the warehouse
     *
     * @return $this
     */
    public function setWarehousePriority($warehouse_priority)
    {
        $this->container['warehouse_priority'] = $warehouse_priority;

        return $this;
    }

    /**
     * Gets reserved_bundle
     *
     * @return float|null
     */
    public function getReservedBundle()
    {
        return $this->container['reserved_bundle'];
    }

    /**
     * Sets reserved_bundle
     *
     * @param float|null $reserved_bundle Reserved bundle
     *
     * @return $this
     */
    public function setReservedBundle($reserved_bundle)
    {
        $this->container['reserved_bundle'] = $reserved_bundle;

        return $this;
    }

    /**
     * Gets average_purchase_price
     *
     * @return float|null
     */
    public function getAveragePurchasePrice()
    {
        return $this->container['average_purchase_price'];
    }

    /**
     * Sets average_purchase_price
     *
     * @param float|null $average_purchase_price The average purchase price
     *
     * @return $this
     */
    public function setAveragePurchasePrice($average_purchase_price)
    {
        $this->container['average_purchase_price'] = $average_purchase_price;

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
     * @param string|null $updated_at The time the stock was last updated
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

