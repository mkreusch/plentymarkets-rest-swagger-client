<?php
/**
 * OrderItem
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
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'order_id' => 'int',
        'type_id' => 'int',
        'referrer_id' => 'float',
        'item_variation_id' => 'int',
        'quantity' => 'float',
        'order_item_name' => 'string',
        'attribute_values' => 'string',
        'shipping_profile_id' => 'int',
        'country_vat_id' => 'int',
        'vat_field' => 'int',
        'vat_rate' => 'float',
        'position' => 'int',
        'warehouse_id' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'order_id' => null,
        'type_id' => null,
        'referrer_id' => null,
        'item_variation_id' => null,
        'quantity' => null,
        'order_item_name' => null,
        'attribute_values' => null,
        'shipping_profile_id' => null,
        'country_vat_id' => null,
        'vat_field' => null,
        'vat_rate' => null,
        'position' => null,
        'warehouse_id' => null,
        'created_at' => null,
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
        'order_id' => 'orderId',
        'type_id' => 'typeId',
        'referrer_id' => 'referrerId',
        'item_variation_id' => 'itemVariationId',
        'quantity' => 'quantity',
        'order_item_name' => 'orderItemName',
        'attribute_values' => 'attributeValues',
        'shipping_profile_id' => 'shippingProfileId',
        'country_vat_id' => 'countryVatId',
        'vat_field' => 'vatField',
        'vat_rate' => 'vatRate',
        'position' => 'position',
        'warehouse_id' => 'warehouseId',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'order_id' => 'setOrderId',
        'type_id' => 'setTypeId',
        'referrer_id' => 'setReferrerId',
        'item_variation_id' => 'setItemVariationId',
        'quantity' => 'setQuantity',
        'order_item_name' => 'setOrderItemName',
        'attribute_values' => 'setAttributeValues',
        'shipping_profile_id' => 'setShippingProfileId',
        'country_vat_id' => 'setCountryVatId',
        'vat_field' => 'setVatField',
        'vat_rate' => 'setVatRate',
        'position' => 'setPosition',
        'warehouse_id' => 'setWarehouseId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'order_id' => 'getOrderId',
        'type_id' => 'getTypeId',
        'referrer_id' => 'getReferrerId',
        'item_variation_id' => 'getItemVariationId',
        'quantity' => 'getQuantity',
        'order_item_name' => 'getOrderItemName',
        'attribute_values' => 'getAttributeValues',
        'shipping_profile_id' => 'getShippingProfileId',
        'country_vat_id' => 'getCountryVatId',
        'vat_field' => 'getVatField',
        'vat_rate' => 'getVatRate',
        'position' => 'getPosition',
        'warehouse_id' => 'getWarehouseId',
        'created_at' => 'getCreatedAt',
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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['referrer_id'] = isset($data['referrer_id']) ? $data['referrer_id'] : null;
        $this->container['item_variation_id'] = isset($data['item_variation_id']) ? $data['item_variation_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['order_item_name'] = isset($data['order_item_name']) ? $data['order_item_name'] : null;
        $this->container['attribute_values'] = isset($data['attribute_values']) ? $data['attribute_values'] : null;
        $this->container['shipping_profile_id'] = isset($data['shipping_profile_id']) ? $data['shipping_profile_id'] : null;
        $this->container['country_vat_id'] = isset($data['country_vat_id']) ? $data['country_vat_id'] : null;
        $this->container['vat_field'] = isset($data['vat_field']) ? $data['vat_field'] : null;
        $this->container['vat_rate'] = isset($data['vat_rate']) ? $data['vat_rate'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
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
     * @param int|null $id The ID of the order item
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id The ID of the order that the order item belongs to
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * @param int|null $type_id The ID of the order item type <ul> <li>VARIATION   = 1</li> <li>ITEM_BUNDLE   = 2</li> <li>BUNDLE_COMPONENT  = 3</li> <li>PROMOTIONAL_COUPON = 4</li> <li>GIFT_CARD   = 5</li> <li>SHIPPING_COSTS  = 6</li> <li>PAYMENT_SURCHARGE = 7</li> <li>GIFT_WRAP   = 8</li> <li>UNASSIGEND_VARIATION = 9</li> <li>DEPOSIT    = 10</li> <li>ORDER    = 11</li> <li>DUNNING_CHARGE  =   12</li> <li>ITEM_SET          =   13</li> <li>SET_COMPONENT  =   14</li> </ul>
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

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
     * @param float|null $referrer_id The ID of order item referrer
     *
     * @return $this
     */
    public function setReferrerId($referrer_id)
    {
        $this->container['referrer_id'] = $referrer_id;

        return $this;
    }

    /**
     * Gets item_variation_id
     *
     * @return int|null
     */
    public function getItemVariationId()
    {
        return $this->container['item_variation_id'];
    }

    /**
     * Sets item_variation_id
     *
     * @param int|null $item_variation_id The ID of the item variation
     *
     * @return $this
     */
    public function setItemVariationId($item_variation_id)
    {
        $this->container['item_variation_id'] = $item_variation_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity The quantity.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets order_item_name
     *
     * @return string|null
     */
    public function getOrderItemName()
    {
        return $this->container['order_item_name'];
    }

    /**
     * Sets order_item_name
     *
     * @param string|null $order_item_name The name of the order item
     *
     * @return $this
     */
    public function setOrderItemName($order_item_name)
    {
        $this->container['order_item_name'] = $order_item_name;

        return $this;
    }

    /**
     * Gets attribute_values
     *
     * @return string|null
     */
    public function getAttributeValues()
    {
        return $this->container['attribute_values'];
    }

    /**
     * Sets attribute_values
     *
     * @param string|null $attribute_values The attribute value names
     *
     * @return $this
     */
    public function setAttributeValues($attribute_values)
    {
        $this->container['attribute_values'] = $attribute_values;

        return $this;
    }

    /**
     * Gets shipping_profile_id
     *
     * @return int|null
     */
    public function getShippingProfileId()
    {
        return $this->container['shipping_profile_id'];
    }

    /**
     * Sets shipping_profile_id
     *
     * @param int|null $shipping_profile_id The ID of the order item's shipping profile
     *
     * @return $this
     */
    public function setShippingProfileId($shipping_profile_id)
    {
        $this->container['shipping_profile_id'] = $shipping_profile_id;

        return $this;
    }

    /**
     * Gets country_vat_id
     *
     * @return int|null
     */
    public function getCountryVatId()
    {
        return $this->container['country_vat_id'];
    }

    /**
     * Sets country_vat_id
     *
     * @param int|null $country_vat_id The ID of the country vat
     *
     * @return $this
     */
    public function setCountryVatId($country_vat_id)
    {
        $this->container['country_vat_id'] = $country_vat_id;

        return $this;
    }

    /**
     * Gets vat_field
     *
     * @return int|null
     */
    public function getVatField()
    {
        return $this->container['vat_field'];
    }

    /**
     * Sets vat_field
     *
     * @param int|null $vat_field The vat id (0-3).
     *
     * @return $this
     */
    public function setVatField($vat_field)
    {
        $this->container['vat_field'] = $vat_field;

        return $this;
    }

    /**
     * Gets vat_rate
     *
     * @return float|null
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param float|null $vat_rate The vat amount, e.g. 19.0 for 19% VAT.
     *
     * @return $this
     */
    public function setVatRate($vat_rate)
    {
        $this->container['vat_rate'] = $vat_rate;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position The order items position in the order.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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
     * @param int|null $warehouse_id The ID of the warehouse.
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

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
     * @param string|null $created_at The date at which the order item was created.
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
     * @param string|null $updated_at The date that the order item was last updated.
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

