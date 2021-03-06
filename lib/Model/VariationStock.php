<?php
/**
 * VariationStock
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
 * VariationStock Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VariationStock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VariationStock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_id' => 'int',
        'variation_id' => 'int',
        'warehouse_id' => 'int',
        'reserved_listing' => 'float',
        'reserved_bundles' => 'float',
        'value_of_goods' => 'float',
        'purchase_price' => 'float',
        'physical_stock' => 'float',
        'reserved_stock' => 'float',
        'net_stock' => 'float',
        'reorder_level' => 'float',
        'delta_reorder_level' => 'float'
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
        'reserved_listing' => null,
        'reserved_bundles' => null,
        'value_of_goods' => null,
        'purchase_price' => null,
        'physical_stock' => null,
        'reserved_stock' => null,
        'net_stock' => null,
        'reorder_level' => null,
        'delta_reorder_level' => null
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
        'reserved_listing' => 'reservedListing',
        'reserved_bundles' => 'reservedBundles',
        'value_of_goods' => 'valueOfGoods',
        'purchase_price' => 'purchasePrice',
        'physical_stock' => 'physicalStock',
        'reserved_stock' => 'reservedStock',
        'net_stock' => 'netStock',
        'reorder_level' => 'reorderLevel',
        'delta_reorder_level' => 'deltaReorderLevel'
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
        'reserved_listing' => 'setReservedListing',
        'reserved_bundles' => 'setReservedBundles',
        'value_of_goods' => 'setValueOfGoods',
        'purchase_price' => 'setPurchasePrice',
        'physical_stock' => 'setPhysicalStock',
        'reserved_stock' => 'setReservedStock',
        'net_stock' => 'setNetStock',
        'reorder_level' => 'setReorderLevel',
        'delta_reorder_level' => 'setDeltaReorderLevel'
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
        'reserved_listing' => 'getReservedListing',
        'reserved_bundles' => 'getReservedBundles',
        'value_of_goods' => 'getValueOfGoods',
        'purchase_price' => 'getPurchasePrice',
        'physical_stock' => 'getPhysicalStock',
        'reserved_stock' => 'getReservedStock',
        'net_stock' => 'getNetStock',
        'reorder_level' => 'getReorderLevel',
        'delta_reorder_level' => 'getDeltaReorderLevel'
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
        $this->container['reserved_listing'] = isset($data['reserved_listing']) ? $data['reserved_listing'] : null;
        $this->container['reserved_bundles'] = isset($data['reserved_bundles']) ? $data['reserved_bundles'] : null;
        $this->container['value_of_goods'] = isset($data['value_of_goods']) ? $data['value_of_goods'] : null;
        $this->container['purchase_price'] = isset($data['purchase_price']) ? $data['purchase_price'] : null;
        $this->container['physical_stock'] = isset($data['physical_stock']) ? $data['physical_stock'] : null;
        $this->container['reserved_stock'] = isset($data['reserved_stock']) ? $data['reserved_stock'] : null;
        $this->container['net_stock'] = isset($data['net_stock']) ? $data['net_stock'] : null;
        $this->container['reorder_level'] = isset($data['reorder_level']) ? $data['reorder_level'] : null;
        $this->container['delta_reorder_level'] = isset($data['delta_reorder_level']) ? $data['delta_reorder_level'] : null;
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
     * Gets reserved_listing
     *
     * @return float|null
     */
    public function getReservedListing()
    {
        return $this->container['reserved_listing'];
    }

    /**
     * Sets reserved_listing
     *
     * @param float|null $reserved_listing The quantity of a variation that is reserved for listings
     *
     * @return $this
     */
    public function setReservedListing($reserved_listing)
    {
        $this->container['reserved_listing'] = $reserved_listing;

        return $this;
    }

    /**
     * Gets reserved_bundles
     *
     * @return float|null
     */
    public function getReservedBundles()
    {
        return $this->container['reserved_bundles'];
    }

    /**
     * Sets reserved_bundles
     *
     * @param float|null $reserved_bundles The quantity of a variation that is reserved for item bundles
     *
     * @return $this
     */
    public function setReservedBundles($reserved_bundles)
    {
        $this->container['reserved_bundles'] = $reserved_bundles;

        return $this;
    }

    /**
     * Gets value_of_goods
     *
     * @return float|null
     */
    public function getValueOfGoods()
    {
        return $this->container['value_of_goods'];
    }

    /**
     * Sets value_of_goods
     *
     * @param float|null $value_of_goods The value of goods based on the physical stock
     *
     * @return $this
     */
    public function setValueOfGoods($value_of_goods)
    {
        $this->container['value_of_goods'] = $value_of_goods;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return float|null
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param float|null $purchase_price The purchase price of the variation stock
     *
     * @return $this
     */
    public function setPurchasePrice($purchase_price)
    {
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets physical_stock
     *
     * @return float|null
     */
    public function getPhysicalStock()
    {
        return $this->container['physical_stock'];
    }

    /**
     * Sets physical_stock
     *
     * @param float|null $physical_stock The physical stock of the variation stock
     *
     * @return $this
     */
    public function setPhysicalStock($physical_stock)
    {
        $this->container['physical_stock'] = $physical_stock;

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
     * @param float|null $reserved_stock The reserved stock of the variation stock
     *
     * @return $this
     */
    public function setReservedStock($reserved_stock)
    {
        $this->container['reserved_stock'] = $reserved_stock;

        return $this;
    }

    /**
     * Gets net_stock
     *
     * @return float|null
     */
    public function getNetStock()
    {
        return $this->container['net_stock'];
    }

    /**
     * Sets net_stock
     *
     * @param float|null $net_stock The net stock is the stock that can still be sold
     *
     * @return $this
     */
    public function setNetStock($net_stock)
    {
        $this->container['net_stock'] = $net_stock;

        return $this;
    }

    /**
     * Gets reorder_level
     *
     * @return float|null
     */
    public function getReorderLevel()
    {
        return $this->container['reorder_level'];
    }

    /**
     * Sets reorder_level
     *
     * @param float|null $reorder_level The quantity of a variation that triggers a reorder
     *
     * @return $this
     */
    public function setReorderLevel($reorder_level)
    {
        $this->container['reorder_level'] = $reorder_level;

        return $this;
    }

    /**
     * Gets delta_reorder_level
     *
     * @return float|null
     */
    public function getDeltaReorderLevel()
    {
        return $this->container['delta_reorder_level'];
    }

    /**
     * Sets delta_reorder_level
     *
     * @param float|null $delta_reorder_level The quantity of a variation that is required to reach the reorder level
     *
     * @return $this
     */
    public function setDeltaReorderLevel($delta_reorder_level)
    {
        $this->container['delta_reorder_level'] = $delta_reorder_level;

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


