<?php
/**
 * WarehouseLocationLevel
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
 * WarehouseLocationLevel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WarehouseLocationLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WarehouseLocationLevel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'parent_id' => 'int',
        'dimension_id' => 'int',
        'position' => 'int',
        'name' => 'string',
        'type' => 'string',
        'path_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'parent_id' => null,
        'dimension_id' => null,
        'position' => null,
        'name' => null,
        'type' => null,
        'path_name' => null
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
        'parent_id' => 'parentId',
        'dimension_id' => 'dimensionId',
        'position' => 'position',
        'name' => 'name',
        'type' => 'type',
        'path_name' => 'pathName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent_id' => 'setParentId',
        'dimension_id' => 'setDimensionId',
        'position' => 'setPosition',
        'name' => 'setName',
        'type' => 'setType',
        'path_name' => 'setPathName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent_id' => 'getParentId',
        'dimension_id' => 'getDimensionId',
        'position' => 'getPosition',
        'name' => 'getName',
        'type' => 'getType',
        'path_name' => 'getPathName'
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
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['dimension_id'] = isset($data['dimension_id']) ? $data['dimension_id'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['path_name'] = isset($data['path_name']) ? $data['path_name'] : null;
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
     * @param int|null $id The ID of the warehouse location level
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id The parent ID of the warehouse location level
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets dimension_id
     *
     * @return int|null
     */
    public function getDimensionId()
    {
        return $this->container['dimension_id'];
    }

    /**
     * Sets dimension_id
     *
     * @param int|null $dimension_id The warehouse location dimension id of the warehouse location level
     *
     * @return $this
     */
    public function setDimensionId($dimension_id)
    {
        $this->container['dimension_id'] = $dimension_id;

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
     * @param int|null $position The position of the warehouse location level
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the warehouse location level
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the warehouse location ['small','medium','large','europallet']
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets path_name
     *
     * @return string|null
     */
    public function getPathName()
    {
        return $this->container['path_name'];
    }

    /**
     * Sets path_name
     *
     * @param string|null $path_name The complete path name from the level
     *
     * @return $this
     */
    public function setPathName($path_name)
    {
        $this->container['path_name'] = $path_name;

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

