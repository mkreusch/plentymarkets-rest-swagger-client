<?php
/**
 * Log
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
 * Log Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Log implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Log';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => 'string',
        'integration' => 'string',
        'identifier' => 'string',
        'code' => 'string',
        'reference_type' => 'string',
        'reference_value' => 'string',
        'level' => 'string',
        'additional_info' => 'string',
        'caller_function' => 'string',
        'caller_line' => 'int',
        'references' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => null,
        'integration' => null,
        'identifier' => null,
        'code' => null,
        'reference_type' => null,
        'reference_value' => null,
        'level' => null,
        'additional_info' => null,
        'caller_function' => null,
        'caller_line' => null,
        'references' => null
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
        'created_at' => 'createdAt',
        'integration' => 'integration',
        'identifier' => 'identifier',
        'code' => 'code',
        'reference_type' => 'referenceType',
        'reference_value' => 'referenceValue',
        'level' => 'level',
        'additional_info' => 'additionalInfo',
        'caller_function' => 'callerFunction',
        'caller_line' => 'callerLine',
        'references' => 'references'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'integration' => 'setIntegration',
        'identifier' => 'setIdentifier',
        'code' => 'setCode',
        'reference_type' => 'setReferenceType',
        'reference_value' => 'setReferenceValue',
        'level' => 'setLevel',
        'additional_info' => 'setAdditionalInfo',
        'caller_function' => 'setCallerFunction',
        'caller_line' => 'setCallerLine',
        'references' => 'setReferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'integration' => 'getIntegration',
        'identifier' => 'getIdentifier',
        'code' => 'getCode',
        'reference_type' => 'getReferenceType',
        'reference_value' => 'getReferenceValue',
        'level' => 'getLevel',
        'additional_info' => 'getAdditionalInfo',
        'caller_function' => 'getCallerFunction',
        'caller_line' => 'getCallerLine',
        'references' => 'getReferences'
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['integration'] = isset($data['integration']) ? $data['integration'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['reference_type'] = isset($data['reference_type']) ? $data['reference_type'] : null;
        $this->container['reference_value'] = isset($data['reference_value']) ? $data['reference_value'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['additional_info'] = isset($data['additional_info']) ? $data['additional_info'] : null;
        $this->container['caller_function'] = isset($data['caller_function']) ? $data['caller_function'] : null;
        $this->container['caller_line'] = isset($data['caller_line']) ? $data['caller_line'] : null;
        $this->container['references'] = isset($data['references']) ? $data['references'] : null;
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID of the log entry
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $created_at The date when the log entry was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets integration
     *
     * @return string|null
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param string|null $integration The integration key used for the log entry. Used as a first level allocation.
     *
     * @return $this
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier The identifier used for the log entry. Used as a second level allocation.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code The code for this current log entry. For log entries with level \"debug\", \"info\", \"notice\", \"warning\" and \"report\" this needs to have an translation in order to be stored.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets reference_type
     *
     * @return string|null
     */
    public function getReferenceType()
    {
        return $this->container['reference_type'];
    }

    /**
     * Sets reference_type
     *
     * @param string|null $reference_type Deprecated field, see the <code>references</code> field instead.
     *
     * @return $this
     */
    public function setReferenceType($reference_type)
    {
        $this->container['reference_type'] = $reference_type;

        return $this;
    }

    /**
     * Gets reference_value
     *
     * @return string|null
     */
    public function getReferenceValue()
    {
        return $this->container['reference_value'];
    }

    /**
     * Sets reference_value
     *
     * @param string|null $reference_value Deprecated field, see the <code>references</code> field instead.
     *
     * @return $this
     */
    public function setReferenceValue($reference_value)
    {
        $this->container['reference_value'] = $reference_value;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string|null $level The level this current log entry belongs to. Notice! When storing log entries with level \"report\" the entries will actually be stored as level \"info\". The difference between \"report\" and \"info\" is that log entries with level \"report\" do not need prior activation.
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return string|null
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param string|null $additional_info Additional information that need to also be stored. Can be an int, string or object.
     *
     * @return $this
     */
    public function setAdditionalInfo($additional_info)
    {
        $this->container['additional_info'] = $additional_info;

        return $this;
    }

    /**
     * Gets caller_function
     *
     * @return string|null
     */
    public function getCallerFunction()
    {
        return $this->container['caller_function'];
    }

    /**
     * Sets caller_function
     *
     * @param string|null $caller_function 
     *
     * @return $this
     */
    public function setCallerFunction($caller_function)
    {
        $this->container['caller_function'] = $caller_function;

        return $this;
    }

    /**
     * Gets caller_line
     *
     * @return int|null
     */
    public function getCallerLine()
    {
        return $this->container['caller_line'];
    }

    /**
     * Sets caller_line
     *
     * @param int|null $caller_line 
     *
     * @return $this
     */
    public function setCallerLine($caller_line)
    {
        $this->container['caller_line'] = $caller_line;

        return $this;
    }

    /**
     * Gets references
     *
     * @return object[]|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param object[]|null $references All the reference types and values correlated with this log entry.
     *
     * @return $this
     */
    public function setReferences($references)
    {
        $this->container['references'] = $references;

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


