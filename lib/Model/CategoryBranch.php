<?php
/**
 * CategoryBranch
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
 * CategoryBranch Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CategoryBranch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryBranch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_id' => 'int',
        'category1_id' => 'int',
        'category2_id' => 'int',
        'category3_id' => 'int',
        'category4_id' => 'int',
        'category5_id' => 'int',
        'category6_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'category_id' => null,
        'category1_id' => null,
        'category2_id' => null,
        'category3_id' => null,
        'category4_id' => null,
        'category5_id' => null,
        'category6_id' => null
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
        'category_id' => 'categoryId',
        'category1_id' => 'category1Id',
        'category2_id' => 'category2Id',
        'category3_id' => 'category3Id',
        'category4_id' => 'category4Id',
        'category5_id' => 'category5Id',
        'category6_id' => 'category6Id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_id' => 'setCategoryId',
        'category1_id' => 'setCategory1Id',
        'category2_id' => 'setCategory2Id',
        'category3_id' => 'setCategory3Id',
        'category4_id' => 'setCategory4Id',
        'category5_id' => 'setCategory5Id',
        'category6_id' => 'setCategory6Id'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_id' => 'getCategoryId',
        'category1_id' => 'getCategory1Id',
        'category2_id' => 'getCategory2Id',
        'category3_id' => 'getCategory3Id',
        'category4_id' => 'getCategory4Id',
        'category5_id' => 'getCategory5Id',
        'category6_id' => 'getCategory6Id'
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
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['category1_id'] = isset($data['category1_id']) ? $data['category1_id'] : null;
        $this->container['category2_id'] = isset($data['category2_id']) ? $data['category2_id'] : null;
        $this->container['category3_id'] = isset($data['category3_id']) ? $data['category3_id'] : null;
        $this->container['category4_id'] = isset($data['category4_id']) ? $data['category4_id'] : null;
        $this->container['category5_id'] = isset($data['category5_id']) ? $data['category5_id'] : null;
        $this->container['category6_id'] = isset($data['category6_id']) ? $data['category6_id'] : null;
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
     * @param int|null $category_id The ID of the category
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category1_id
     *
     * @return int|null
     */
    public function getCategory1Id()
    {
        return $this->container['category1_id'];
    }

    /**
     * Sets category1_id
     *
     * @param int|null $category1_id The ID of the category tree's 1st level. If 1st value is identical to category ID, category is of this level.
     *
     * @return $this
     */
    public function setCategory1Id($category1_id)
    {
        $this->container['category1_id'] = $category1_id;

        return $this;
    }

    /**
     * Gets category2_id
     *
     * @return int|null
     */
    public function getCategory2Id()
    {
        return $this->container['category2_id'];
    }

    /**
     * Sets category2_id
     *
     * @param int|null $category2_id The ID of the category tree's 2nd level. If 2nd level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     *
     * @return $this
     */
    public function setCategory2Id($category2_id)
    {
        $this->container['category2_id'] = $category2_id;

        return $this;
    }

    /**
     * Gets category3_id
     *
     * @return int|null
     */
    public function getCategory3Id()
    {
        return $this->container['category3_id'];
    }

    /**
     * Sets category3_id
     *
     * @param int|null $category3_id The ID of the category tree's 3rd level. If 3rd level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     *
     * @return $this
     */
    public function setCategory3Id($category3_id)
    {
        $this->container['category3_id'] = $category3_id;

        return $this;
    }

    /**
     * Gets category4_id
     *
     * @return int|null
     */
    public function getCategory4Id()
    {
        return $this->container['category4_id'];
    }

    /**
     * Sets category4_id
     *
     * @param int|null $category4_id The ID of the category tree's 4th level. If 4th level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     *
     * @return $this
     */
    public function setCategory4Id($category4_id)
    {
        $this->container['category4_id'] = $category4_id;

        return $this;
    }

    /**
     * Gets category5_id
     *
     * @return int|null
     */
    public function getCategory5Id()
    {
        return $this->container['category5_id'];
    }

    /**
     * Sets category5_id
     *
     * @param int|null $category5_id The ID of the category tree's 5th level. If 5th level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     *
     * @return $this
     */
    public function setCategory5Id($category5_id)
    {
        $this->container['category5_id'] = $category5_id;

        return $this;
    }

    /**
     * Gets category6_id
     *
     * @return int|null
     */
    public function getCategory6Id()
    {
        return $this->container['category6_id'];
    }

    /**
     * Sets category6_id
     *
     * @param int|null $category6_id The ID of the category tree's 6th level. If 6th level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     *
     * @return $this
     */
    public function setCategory6Id($category6_id)
    {
        $this->container['category6_id'] = $category6_id;

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


