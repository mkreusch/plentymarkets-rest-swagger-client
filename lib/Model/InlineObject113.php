<?php
/**
 * InlineObject113
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
 * InlineObject113 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject113 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_113';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'warehouse_id' => 'int',
        'delivered_at' => 'string',
        'order_number' => 'string',
        'currency' => 'string',
        'quantity' => 'float',
        'storage_location_id' => 'int',
        'reason_id' => 'int',
        'supplier_id' => 'int',
        'exchange_rate' => 'float',
        'best_before_date' => 'string',
        'batch' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'warehouse_id' => null,
        'delivered_at' => null,
        'order_number' => null,
        'currency' => null,
        'quantity' => null,
        'storage_location_id' => null,
        'reason_id' => null,
        'supplier_id' => null,
        'exchange_rate' => null,
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
        'warehouse_id' => 'warehouseId',
        'delivered_at' => 'deliveredAt',
        'order_number' => 'orderNumber',
        'currency' => 'currency',
        'quantity' => 'quantity',
        'storage_location_id' => 'storageLocationId',
        'reason_id' => 'reasonId',
        'supplier_id' => 'supplierId',
        'exchange_rate' => 'exchangeRate',
        'best_before_date' => 'bestBeforeDate',
        'batch' => 'batch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehouse_id' => 'setWarehouseId',
        'delivered_at' => 'setDeliveredAt',
        'order_number' => 'setOrderNumber',
        'currency' => 'setCurrency',
        'quantity' => 'setQuantity',
        'storage_location_id' => 'setStorageLocationId',
        'reason_id' => 'setReasonId',
        'supplier_id' => 'setSupplierId',
        'exchange_rate' => 'setExchangeRate',
        'best_before_date' => 'setBestBeforeDate',
        'batch' => 'setBatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouse_id' => 'getWarehouseId',
        'delivered_at' => 'getDeliveredAt',
        'order_number' => 'getOrderNumber',
        'currency' => 'getCurrency',
        'quantity' => 'getQuantity',
        'storage_location_id' => 'getStorageLocationId',
        'reason_id' => 'getReasonId',
        'supplier_id' => 'getSupplierId',
        'exchange_rate' => 'getExchangeRate',
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
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['delivered_at'] = isset($data['delivered_at']) ? $data['delivered_at'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['storage_location_id'] = isset($data['storage_location_id']) ? $data['storage_location_id'] : null;
        $this->container['reason_id'] = isset($data['reason_id']) ? $data['reason_id'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
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

        if ($this->container['warehouse_id'] === null) {
            $invalidProperties[] = "'warehouse_id' can't be null";
        }
        if ($this->container['delivered_at'] === null) {
            $invalidProperties[] = "'delivered_at' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['reason_id'] === null) {
            $invalidProperties[] = "'reason_id' can't be null";
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
     * Gets delivered_at
     *
     * @return string
     */
    public function getDeliveredAt()
    {
        return $this->container['delivered_at'];
    }

    /**
     * Sets delivered_at
     *
     * @param string $delivered_at The date when stock was booked in. The date is given in W3C format.
     *
     * @return $this
     */
    public function setDeliveredAt($delivered_at)
    {
        $this->container['delivered_at'] = $delivered_at;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string|null $order_number The order number optional
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param float $quantity The quantity of a variation
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets storage_location_id
     *
     * @return int|null
     */
    public function getStorageLocationId()
    {
        return $this->container['storage_location_id'];
    }

    /**
     * Sets storage_location_id
     *
     * @param int|null $storage_location_id The ID of the storage location optional
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
     * @return int
     */
    public function getReasonId()
    {
        return $this->container['reason_id'];
    }

    /**
     * Sets reason_id
     *
     * @param int $reason_id The ID of the reason. The following IDs are available:  201: Outbound items 202: Outbound inventur 205: Outbound rubbish 206: Outbound packing error 207: Outbound defect 208: Outbound complaint 209: Outbound logistic 214: Outbound warehouse movement 215: Outbound second choise 216: Outbound correction 280: Outbound purchase order 281: Outbound loss
     *
     * @return $this
     */
    public function setReasonId($reason_id)
    {
        $this->container['reason_id'] = $reason_id;

        return $this;
    }

    /**
     * Gets supplier_id
     *
     * @return int|null
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     *
     * @param int|null $supplier_id The ID of the supplier optional
     *
     * @return $this
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float|null $exchange_rate The exchange rate optional
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

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


