<?php
/**
 * InlineObject158
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
 * InlineObject158 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject158 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_158';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'market_id' => 'int',
        'name' => 'string',
        'category_id' => 'int',
        'items' => '\OpenAPI\Client\Model\FitmentItem[]',
        'properties' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'market_id' => null,
        'name' => null,
        'category_id' => null,
        'items' => null,
        'properties' => null
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
        'market_id' => 'marketId',
        'name' => 'name',
        'category_id' => 'categoryId',
        'items' => 'items',
        'properties' => 'properties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'market_id' => 'setMarketId',
        'name' => 'setName',
        'category_id' => 'setCategoryId',
        'items' => 'setItems',
        'properties' => 'setProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'market_id' => 'getMarketId',
        'name' => 'getName',
        'category_id' => 'getCategoryId',
        'items' => 'getItems',
        'properties' => 'getProperties'
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
        $this->container['market_id'] = isset($data['market_id']) ? $data['market_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['market_id'] === null) {
            $invalidProperties[] = "'market_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category_id'] === null) {
            $invalidProperties[] = "'category_id' can't be null";
        }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
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
     * Gets market_id
     *
     * @return int
     */
    public function getMarketId()
    {
        return $this->container['market_id'];
    }

    /**
     * Sets market_id
     *
     * @param int $market_id The id of the market the fitment belongs to.
     *
     * @return $this
     */
    public function setMarketId($market_id)
    {
        $this->container['market_id'] = $market_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the fitment.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id The id of the category the fitment belongs to.
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\FitmentItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\FitmentItem[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return object[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param object[] $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

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


