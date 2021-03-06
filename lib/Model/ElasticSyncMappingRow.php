<?php
/**
 * ElasticSyncMappingRow
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
 * ElasticSyncMappingRow Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ElasticSyncMappingRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ElasticSyncMappingRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'mapping_id' => 'int',
        'target_model' => 'string',
        'target_attribute' => 'string',
        'active' => 'bool',
        'entity_type' => 'string',
        'value' => 'string',
        'settings' => 'string',
        'identifiers' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'mapping_id' => null,
        'target_model' => null,
        'target_attribute' => null,
        'active' => null,
        'entity_type' => null,
        'value' => null,
        'settings' => null,
        'identifiers' => null
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
        'mapping_id' => 'mappingId',
        'target_model' => 'targetModel',
        'target_attribute' => 'targetAttribute',
        'active' => 'active',
        'entity_type' => 'entityType',
        'value' => 'value',
        'settings' => 'settings',
        'identifiers' => 'identifiers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'mapping_id' => 'setMappingId',
        'target_model' => 'setTargetModel',
        'target_attribute' => 'setTargetAttribute',
        'active' => 'setActive',
        'entity_type' => 'setEntityType',
        'value' => 'setValue',
        'settings' => 'setSettings',
        'identifiers' => 'setIdentifiers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'mapping_id' => 'getMappingId',
        'target_model' => 'getTargetModel',
        'target_attribute' => 'getTargetAttribute',
        'active' => 'getActive',
        'entity_type' => 'getEntityType',
        'value' => 'getValue',
        'settings' => 'getSettings',
        'identifiers' => 'getIdentifiers'
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
        $this->container['mapping_id'] = isset($data['mapping_id']) ? $data['mapping_id'] : null;
        $this->container['target_model'] = isset($data['target_model']) ? $data['target_model'] : null;
        $this->container['target_attribute'] = isset($data['target_attribute']) ? $data['target_attribute'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
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
     * @param int|null $id The ID of the elastic sync mapping row
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mapping_id
     *
     * @return int|null
     */
    public function getMappingId()
    {
        return $this->container['mapping_id'];
    }

    /**
     * Sets mapping_id
     *
     * @param int|null $mapping_id The ID of the elastic sync mapping
     *
     * @return $this
     */
    public function setMappingId($mapping_id)
    {
        $this->container['mapping_id'] = $mapping_id;

        return $this;
    }

    /**
     * Gets target_model
     *
     * @return string|null
     */
    public function getTargetModel()
    {
        return $this->container['target_model'];
    }

    /**
     * Sets target_model
     *
     * @param string|null $target_model The target model of the elastic sync mapping row
     *
     * @return $this
     */
    public function setTargetModel($target_model)
    {
        $this->container['target_model'] = $target_model;

        return $this;
    }

    /**
     * Gets target_attribute
     *
     * @return string|null
     */
    public function getTargetAttribute()
    {
        return $this->container['target_attribute'];
    }

    /**
     * Sets target_attribute
     *
     * @param string|null $target_attribute The target attribute of the elastic sync mapping row
     *
     * @return $this
     */
    public function setTargetAttribute($target_attribute)
    {
        $this->container['target_attribute'] = $target_attribute;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active The state of the elastic sync mapping row
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string|null $entity_type The entity type of the elastic sync mapping row (array values: 'ownValue', 'ownAssignment', 'regularExpression', 'csvColumn')
     *
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value The value of the elastic sync mapping row
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return string|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param string|null $settings The settings of the elastic sync mapping row
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return string|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param string|null $identifiers The identifiers of the elastic sync mapping row
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

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


