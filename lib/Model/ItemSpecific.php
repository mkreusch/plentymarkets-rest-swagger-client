<?php
/**
 * ItemSpecific
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
 * ItemSpecific Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemSpecific implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemSpecific';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'min_values' => 'int',
        'max_values' => 'int',
        'selection_mode' => 'string',
        'value_type' => 'string',
        'value_format' => 'string',
        'help_text' => 'string',
        'help_url' => 'string',
        'variation_picture' => 'string',
        'variation_specifics' => 'string',
        'values' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'min_values' => null,
        'max_values' => null,
        'selection_mode' => null,
        'value_type' => null,
        'value_format' => null,
        'help_text' => null,
        'help_url' => null,
        'variation_picture' => null,
        'variation_specifics' => null,
        'values' => null
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
        'name' => 'name',
        'min_values' => 'minValues',
        'max_values' => 'maxValues',
        'selection_mode' => 'selectionMode',
        'value_type' => 'valueType',
        'value_format' => 'valueFormat',
        'help_text' => 'helpText',
        'help_url' => 'helpUrl',
        'variation_picture' => 'variationPicture',
        'variation_specifics' => 'variationSpecifics',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'min_values' => 'setMinValues',
        'max_values' => 'setMaxValues',
        'selection_mode' => 'setSelectionMode',
        'value_type' => 'setValueType',
        'value_format' => 'setValueFormat',
        'help_text' => 'setHelpText',
        'help_url' => 'setHelpUrl',
        'variation_picture' => 'setVariationPicture',
        'variation_specifics' => 'setVariationSpecifics',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'min_values' => 'getMinValues',
        'max_values' => 'getMaxValues',
        'selection_mode' => 'getSelectionMode',
        'value_type' => 'getValueType',
        'value_format' => 'getValueFormat',
        'help_text' => 'getHelpText',
        'help_url' => 'getHelpUrl',
        'variation_picture' => 'getVariationPicture',
        'variation_specifics' => 'getVariationSpecifics',
        'values' => 'getValues'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['min_values'] = isset($data['min_values']) ? $data['min_values'] : null;
        $this->container['max_values'] = isset($data['max_values']) ? $data['max_values'] : null;
        $this->container['selection_mode'] = isset($data['selection_mode']) ? $data['selection_mode'] : null;
        $this->container['value_type'] = isset($data['value_type']) ? $data['value_type'] : null;
        $this->container['value_format'] = isset($data['value_format']) ? $data['value_format'] : null;
        $this->container['help_text'] = isset($data['help_text']) ? $data['help_text'] : null;
        $this->container['help_url'] = isset($data['help_url']) ? $data['help_url'] : null;
        $this->container['variation_picture'] = isset($data['variation_picture']) ? $data['variation_picture'] : null;
        $this->container['variation_specifics'] = isset($data['variation_specifics']) ? $data['variation_specifics'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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
     * @param string|null $name A recommended Item Specific name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets min_values
     *
     * @return int|null
     */
    public function getMinValues()
    {
        return $this->container['min_values'];
    }

    /**
     * Sets min_values
     *
     * @param int|null $min_values Minimum number of values that you can specify for this Item Specific.
     *
     * @return $this
     */
    public function setMinValues($min_values)
    {
        $this->container['min_values'] = $min_values;

        return $this;
    }

    /**
     * Gets max_values
     *
     * @return int|null
     */
    public function getMaxValues()
    {
        return $this->container['max_values'];
    }

    /**
     * Sets max_values
     *
     * @param int|null $max_values Maximum number of values that you can specify for this Item Specific.
     *
     * @return $this
     */
    public function setMaxValues($max_values)
    {
        $this->container['max_values'] = $max_values;

        return $this;
    }

    /**
     * Gets selection_mode
     *
     * @return string|null
     */
    public function getSelectionMode()
    {
        return $this->container['selection_mode'];
    }

    /**
     * Sets selection_mode
     *
     * @param string|null $selection_mode Controls whether you can specify your own name and value in listing requests, or if you need to use a name and/or value that eBay has defined.
     *
     * @return $this
     */
    public function setSelectionMode($selection_mode)
    {
        $this->container['selection_mode'] = $selection_mode;

        return $this;
    }

    /**
     * Gets value_type
     *
     * @return string|null
     */
    public function getValueType()
    {
        return $this->container['value_type'];
    }

    /**
     * Sets value_type
     *
     * @param string|null $value_type The data type (e.g., date) that eBay expects the value to adhere to in listing requests. Only returned if the data type is not Text. In some cases, more details about the data type are returned in the `valueFormat` field.
     *
     * @return $this
     */
    public function setValueType($value_type)
    {
        $this->container['value_type'] = $value_type;

        return $this;
    }

    /**
     * Gets value_format
     *
     * @return string|null
     */
    public function getValueFormat()
    {
        return $this->container['value_format'];
    }

    /**
     * Sets value_format
     *
     * @param string|null $value_format The format of the data type (e.g., date format) that eBay expects the item specific's value to adhere to in listing requests. A data type identified by the `valueType` field may have different representations, and `valueFormat` specifies the precise format that is required.
     *
     * @return $this
     */
    public function setValueFormat($value_format)
    {
        $this->container['value_format'] = $value_format;

        return $this;
    }

    /**
     * Gets help_text
     *
     * @return string|null
     */
    public function getHelpText()
    {
        return $this->container['help_text'];
    }

    /**
     * Sets help_text
     *
     * @param string|null $help_text Help-text defines the purpose of the Item Specific. The help text will be shown only when it is available for the particular Item Specific.
     *
     * @return $this
     */
    public function setHelpText($help_text)
    {
        $this->container['help_text'] = $help_text;

        return $this;
    }

    /**
     * Gets help_url
     *
     * @return string|null
     */
    public function getHelpUrl()
    {
        return $this->container['help_url'];
    }

    /**
     * Sets help_url
     *
     * @param string|null $help_url A page on the eBay Web site with context-specific help tips that provide useful information about this Item Specific. Only returned when an applicable page is available in the system.
     *
     * @return $this
     */
    public function setHelpUrl($help_url)
    {
        $this->container['help_url'] = $help_url;

        return $this;
    }

    /**
     * Gets variation_picture
     *
     * @return string|null
     */
    public function getVariationPicture()
    {
        return $this->container['variation_picture'];
    }

    /**
     * Sets variation_picture
     *
     * @param string|null $variation_picture Indicates whether the name (e.g., Color) can (or must) be used to classify the variation pictures
     *
     * @return $this
     */
    public function setVariationPicture($variation_picture)
    {
        $this->container['variation_picture'] = $variation_picture;

        return $this;
    }

    /**
     * Gets variation_specifics
     *
     * @return string|null
     */
    public function getVariationSpecifics()
    {
        return $this->container['variation_specifics'];
    }

    /**
     * Sets variation_specifics
     *
     * @param string|null $variation_specifics Indicates whether the recommended name/value pair can be used as variation attributes in a fixed-price listing call. For example, a given category could disable a name like Brand in variation specifics (if Brand is only allowed in the item specifics at the Item level). The same category could enable a name like Size for variation specifics (in addition to recommending it for item specifics). If not returned, then the name/value can be used for both variation specifics and item specifics.
     *
     * @return $this
     */
    public function setVariationSpecifics($variation_specifics)
    {
        $this->container['variation_specifics'] = $variation_specifics;

        return $this;
    }

    /**
     * Gets values
     *
     * @return object[]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param object[]|null $values The available values.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


