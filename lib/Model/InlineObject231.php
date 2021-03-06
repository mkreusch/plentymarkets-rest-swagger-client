<?php
/**
 * InlineObject231
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
 * InlineObject231 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject231 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_231';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content_id' => 'int',
        'container_name' => 'string',
        'plugin_set_id' => 'int',
        'language' => 'string',
        'inherit' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'content_id' => null,
        'container_name' => null,
        'plugin_set_id' => null,
        'language' => null,
        'inherit' => null
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
        'content_id' => 'contentId',
        'container_name' => 'containerName',
        'plugin_set_id' => 'pluginSetId',
        'language' => 'language',
        'inherit' => 'inherit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_id' => 'setContentId',
        'container_name' => 'setContainerName',
        'plugin_set_id' => 'setPluginSetId',
        'language' => 'setLanguage',
        'inherit' => 'setInherit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_id' => 'getContentId',
        'container_name' => 'getContainerName',
        'plugin_set_id' => 'getPluginSetId',
        'language' => 'getLanguage',
        'inherit' => 'getInherit'
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
        $this->container['content_id'] = isset($data['content_id']) ? $data['content_id'] : null;
        $this->container['container_name'] = isset($data['container_name']) ? $data['container_name'] : null;
        $this->container['plugin_set_id'] = isset($data['plugin_set_id']) ? $data['plugin_set_id'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['inherit'] = isset($data['inherit']) ? $data['inherit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['content_id'] === null) {
            $invalidProperties[] = "'content_id' can't be null";
        }
        if ($this->container['container_name'] === null) {
            $invalidProperties[] = "'container_name' can't be null";
        }
        if ($this->container['plugin_set_id'] === null) {
            $invalidProperties[] = "'plugin_set_id' can't be null";
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
     * Gets content_id
     *
     * @return int
     */
    public function getContentId()
    {
        return $this->container['content_id'];
    }

    /**
     * Sets content_id
     *
     * @param int $content_id The ID of the content
     *
     * @return $this
     */
    public function setContentId($content_id)
    {
        $this->container['content_id'] = $content_id;

        return $this;
    }

    /**
     * Gets container_name
     *
     * @return string
     */
    public function getContainerName()
    {
        return $this->container['container_name'];
    }

    /**
     * Sets container_name
     *
     * @param string $container_name The name of the container
     *
     * @return $this
     */
    public function setContainerName($container_name)
    {
        $this->container['container_name'] = $container_name;

        return $this;
    }

    /**
     * Gets plugin_set_id
     *
     * @return int
     */
    public function getPluginSetId()
    {
        return $this->container['plugin_set_id'];
    }

    /**
     * Sets plugin_set_id
     *
     * @param int $plugin_set_id The Id of the plugin set
     *
     * @return $this
     */
    public function setPluginSetId($plugin_set_id)
    {
        $this->container['plugin_set_id'] = $plugin_set_id;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The language where the content is linked to. optional
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets inherit
     *
     * @return bool|null
     */
    public function getInherit()
    {
        return $this->container['inherit'];
    }

    /**
     * Sets inherit
     *
     * @param bool|null $inherit Indicates if this content should be inherited to child contents. optional
     *
     * @return $this
     */
    public function setInherit($inherit)
    {
        $this->container['inherit'] = $inherit;

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


