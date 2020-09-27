<?php
/**
 * InlineObject31
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
 * InlineObject31 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject31 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_31';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'variation_id' => 'int',
        'quantity' => 'float',
        'input_height' => 'int',
        'input_width' => 'int',
        'input_length' => 'int',
        'referrer_id' => 'float',
        'delivery_date' => 'string',
        'gift_package_for_row_id' => 'int',
        'category_id' => 'int',
        'no_edit_by_customer' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'variation_id' => null,
        'quantity' => null,
        'input_height' => null,
        'input_width' => null,
        'input_length' => null,
        'referrer_id' => null,
        'delivery_date' => null,
        'gift_package_for_row_id' => null,
        'category_id' => null,
        'no_edit_by_customer' => null
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
        'quantity' => 'quantity',
        'input_height' => 'inputHeight',
        'input_width' => 'inputWidth',
        'input_length' => 'inputLength',
        'referrer_id' => 'referrerId',
        'delivery_date' => 'deliveryDate',
        'gift_package_for_row_id' => 'giftPackageForRowId',
        'category_id' => 'categoryId',
        'no_edit_by_customer' => 'noEditByCustomer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'variation_id' => 'setVariationId',
        'quantity' => 'setQuantity',
        'input_height' => 'setInputHeight',
        'input_width' => 'setInputWidth',
        'input_length' => 'setInputLength',
        'referrer_id' => 'setReferrerId',
        'delivery_date' => 'setDeliveryDate',
        'gift_package_for_row_id' => 'setGiftPackageForRowId',
        'category_id' => 'setCategoryId',
        'no_edit_by_customer' => 'setNoEditByCustomer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variation_id' => 'getVariationId',
        'quantity' => 'getQuantity',
        'input_height' => 'getInputHeight',
        'input_width' => 'getInputWidth',
        'input_length' => 'getInputLength',
        'referrer_id' => 'getReferrerId',
        'delivery_date' => 'getDeliveryDate',
        'gift_package_for_row_id' => 'getGiftPackageForRowId',
        'category_id' => 'getCategoryId',
        'no_edit_by_customer' => 'getNoEditByCustomer'
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['input_height'] = isset($data['input_height']) ? $data['input_height'] : null;
        $this->container['input_width'] = isset($data['input_width']) ? $data['input_width'] : null;
        $this->container['input_length'] = isset($data['input_length']) ? $data['input_length'] : null;
        $this->container['referrer_id'] = isset($data['referrer_id']) ? $data['referrer_id'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['gift_package_for_row_id'] = isset($data['gift_package_for_row_id']) ? $data['gift_package_for_row_id'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['no_edit_by_customer'] = isset($data['no_edit_by_customer']) ? $data['no_edit_by_customer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['variation_id'] === null) {
            $invalidProperties[] = "'variation_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * @param int $variation_id The ID of the item variation
     *
     * @return $this
     */
    public function setVariationId($variation_id)
    {
        $this->container['variation_id'] = $variation_id;

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
     * @param float $quantity The current quantity of the item
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets input_height
     *
     * @return int|null
     */
    public function getInputHeight()
    {
        return $this->container['input_height'];
    }

    /**
     * Sets input_height
     *
     * @param int|null $input_height The height of the item optional
     *
     * @return $this
     */
    public function setInputHeight($input_height)
    {
        $this->container['input_height'] = $input_height;

        return $this;
    }

    /**
     * Gets input_width
     *
     * @return int|null
     */
    public function getInputWidth()
    {
        return $this->container['input_width'];
    }

    /**
     * Sets input_width
     *
     * @param int|null $input_width The width of the item optional
     *
     * @return $this
     */
    public function setInputWidth($input_width)
    {
        $this->container['input_width'] = $input_width;

        return $this;
    }

    /**
     * Gets input_length
     *
     * @return int|null
     */
    public function getInputLength()
    {
        return $this->container['input_length'];
    }

    /**
     * Sets input_length
     *
     * @param int|null $input_length The length of the item optional
     *
     * @return $this
     */
    public function setInputLength($input_length)
    {
        $this->container['input_length'] = $input_length;

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
     * @param float|null $referrer_id The ID of the order referrer optional
     *
     * @return $this
     */
    public function setReferrerId($referrer_id)
    {
        $this->container['referrer_id'] = $referrer_id;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param string|null $delivery_date The delivery date optional
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets gift_package_for_row_id
     *
     * @return int|null
     */
    public function getGiftPackageForRowId()
    {
        return $this->container['gift_package_for_row_id'];
    }

    /**
     * Sets gift_package_for_row_id
     *
     * @param int|null $gift_package_for_row_id optional
     *
     * @return $this
     */
    public function setGiftPackageForRowId($gift_package_for_row_id)
    {
        $this->container['gift_package_for_row_id'] = $gift_package_for_row_id;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int|null $category_id The ID of the item category optional
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets no_edit_by_customer
     *
     * @return bool|null
     */
    public function getNoEditByCustomer()
    {
        return $this->container['no_edit_by_customer'];
    }

    /**
     * Sets no_edit_by_customer
     *
     * @param bool|null $no_edit_by_customer Shows whether the item was edited by the customer optional
     *
     * @return $this
     */
    public function setNoEditByCustomer($no_edit_by_customer)
    {
        $this->container['no_edit_by_customer'] = $no_edit_by_customer;

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

