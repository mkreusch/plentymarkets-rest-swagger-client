<?php
/**
 * InlineObject129
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
 * InlineObject129 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject129 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_129';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'variation_id' => 'int',
        'property_id' => 'int',
        'property_selection_id' => 'int',
        'value_int' => 'int',
        'value_float' => 'float',
        'value_file' => 'string',
        'value_texts' => '\OpenAPI\Client\Model\VariationPropertyValueText[]',
        'lang' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'variation_id' => null,
        'property_id' => null,
        'property_selection_id' => null,
        'value_int' => null,
        'value_float' => null,
        'value_file' => null,
        'value_texts' => null,
        'lang' => null,
        'value' => null
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
        'variation_id' => 'variationId',
        'property_id' => 'propertyId',
        'property_selection_id' => 'propertySelectionId',
        'value_int' => 'valueInt',
        'value_float' => 'valueFloat',
        'value_file' => 'valueFile',
        'value_texts' => 'valueTexts',
        'lang' => 'lang',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'variation_id' => 'setVariationId',
        'property_id' => 'setPropertyId',
        'property_selection_id' => 'setPropertySelectionId',
        'value_int' => 'setValueInt',
        'value_float' => 'setValueFloat',
        'value_file' => 'setValueFile',
        'value_texts' => 'setValueTexts',
        'lang' => 'setLang',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'variation_id' => 'getVariationId',
        'property_id' => 'getPropertyId',
        'property_selection_id' => 'getPropertySelectionId',
        'value_int' => 'getValueInt',
        'value_float' => 'getValueFloat',
        'value_file' => 'getValueFile',
        'value_texts' => 'getValueTexts',
        'lang' => 'getLang',
        'value' => 'getValue'
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
        $this->container['variation_id'] = isset($data['variation_id']) ? $data['variation_id'] : null;
        $this->container['property_id'] = isset($data['property_id']) ? $data['property_id'] : null;
        $this->container['property_selection_id'] = isset($data['property_selection_id']) ? $data['property_selection_id'] : null;
        $this->container['value_int'] = isset($data['value_int']) ? $data['value_int'] : null;
        $this->container['value_float'] = isset($data['value_float']) ? $data['value_float'] : null;
        $this->container['value_file'] = isset($data['value_file']) ? $data['value_file'] : null;
        $this->container['value_texts'] = isset($data['value_texts']) ? $data['value_texts'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
        if ($this->container['property_id'] === null) {
            $invalidProperties[] = "'property_id' can't be null";
        }
        if ($this->container['lang'] === null) {
            $invalidProperties[] = "'lang' can't be null";
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
     * @param int|null $id The unique ID of the link between the variation and the property value optional
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param int $variation_id The unique ID of the variation
     *
     * @return $this
     */
    public function setVariationId($variation_id)
    {
        $this->container['variation_id'] = $variation_id;

        return $this;
    }

    /**
     * Gets property_id
     *
     * @return int
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param int $property_id The unique ID of the property
     *
     * @return $this
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets property_selection_id
     *
     * @return int|null
     */
    public function getPropertySelectionId()
    {
        return $this->container['property_selection_id'];
    }

    /**
     * Sets property_selection_id
     *
     * @param int|null $property_selection_id The unique ID of the property selection of the variation optional
     *
     * @return $this
     */
    public function setPropertySelectionId($property_selection_id)
    {
        $this->container['property_selection_id'] = $property_selection_id;

        return $this;
    }

    /**
     * Gets value_int
     *
     * @return int|null
     */
    public function getValueInt()
    {
        return $this->container['value_int'];
    }

    /**
     * Sets value_int
     *
     * @param int|null $value_int The int value of the property value of the variation optional
     *
     * @return $this
     */
    public function setValueInt($value_int)
    {
        $this->container['value_int'] = $value_int;

        return $this;
    }

    /**
     * Gets value_float
     *
     * @return float|null
     */
    public function getValueFloat()
    {
        return $this->container['value_float'];
    }

    /**
     * Sets value_float
     *
     * @param float|null $value_float The float value of the property value of the variation optional
     *
     * @return $this
     */
    public function setValueFloat($value_float)
    {
        $this->container['value_float'] = $value_float;

        return $this;
    }

    /**
     * Gets value_file
     *
     * @return string|null
     */
    public function getValueFile()
    {
        return $this->container['value_file'];
    }

    /**
     * Sets value_file
     *
     * @param string|null $value_file The file value of the property value of the variation optional
     *
     * @return $this
     */
    public function setValueFile($value_file)
    {
        $this->container['value_file'] = $value_file;

        return $this;
    }

    /**
     * Gets value_texts
     *
     * @return \OpenAPI\Client\Model\VariationPropertyValueText[]|null
     */
    public function getValueTexts()
    {
        return $this->container['value_texts'];
    }

    /**
     * Sets value_texts
     *
     * @param \OpenAPI\Client\Model\VariationPropertyValueText[]|null $value_texts value_texts
     *
     * @return $this
     */
    public function setValueTexts($value_texts)
    {
        $this->container['value_texts'] = $value_texts;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang The language of the property value text
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

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
     * @param string|null $value The text saved for the property of the type Text optional
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


