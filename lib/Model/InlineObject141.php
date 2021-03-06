<?php
/**
 * InlineObject141
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
 * InlineObject141 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject141 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_141';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'css' => 'string',
        'html_structure' => 'string',
        'main_frame' => 'string',
        'appendix_type' => 'string',
        'additional_content' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'css' => null,
        'html_structure' => null,
        'main_frame' => null,
        'appendix_type' => null,
        'additional_content' => null
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
        'css' => 'css',
        'html_structure' => 'htmlStructure',
        'main_frame' => 'mainFrame',
        'appendix_type' => 'appendixType',
        'additional_content' => 'additionalContent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'css' => 'setCss',
        'html_structure' => 'setHtmlStructure',
        'main_frame' => 'setMainFrame',
        'appendix_type' => 'setAppendixType',
        'additional_content' => 'setAdditionalContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'css' => 'getCss',
        'html_structure' => 'getHtmlStructure',
        'main_frame' => 'getMainFrame',
        'appendix_type' => 'getAppendixType',
        'additional_content' => 'getAdditionalContent'
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
        $this->container['css'] = isset($data['css']) ? $data['css'] : null;
        $this->container['html_structure'] = isset($data['html_structure']) ? $data['html_structure'] : null;
        $this->container['main_frame'] = isset($data['main_frame']) ? $data['main_frame'] : null;
        $this->container['appendix_type'] = isset($data['appendix_type']) ? $data['appendix_type'] : null;
        $this->container['additional_content'] = isset($data['additional_content']) ? $data['additional_content'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['html_structure'] === null) {
            $invalidProperties[] = "'html_structure' can't be null";
        }
        if ($this->container['main_frame'] === null) {
            $invalidProperties[] = "'main_frame' can't be null";
        }
        if ($this->container['appendix_type'] === null) {
            $invalidProperties[] = "'appendix_type' can't be null";
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
     * @param string $name The name of the layout template.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets css
     *
     * @return string|null
     */
    public function getCss()
    {
        return $this->container['css'];
    }

    /**
     * Sets css
     *
     * @param string|null $css The css of the layout template. optional
     *
     * @return $this
     */
    public function setCss($css)
    {
        $this->container['css'] = $css;

        return $this;
    }

    /**
     * Gets html_structure
     *
     * @return string
     */
    public function getHtmlStructure()
    {
        return $this->container['html_structure'];
    }

    /**
     * Sets html_structure
     *
     * @param string $html_structure The html structure of the layout template.
     *
     * @return $this
     */
    public function setHtmlStructure($html_structure)
    {
        $this->container['html_structure'] = $html_structure;

        return $this;
    }

    /**
     * Gets main_frame
     *
     * @return string
     */
    public function getMainFrame()
    {
        return $this->container['main_frame'];
    }

    /**
     * Sets main_frame
     *
     * @param string $main_frame The main frame of the layout template.
     *
     * @return $this
     */
    public function setMainFrame($main_frame)
    {
        $this->container['main_frame'] = $main_frame;

        return $this;
    }

    /**
     * Gets appendix_type
     *
     * @return string
     */
    public function getAppendixType()
    {
        return $this->container['appendix_type'];
    }

    /**
     * Sets appendix_type
     *
     * @param string $appendix_type The appendix type of the layout template.  allowed values are withoutLogo, withPrivacyPolicy, standard
     *
     * @return $this
     */
    public function setAppendixType($appendix_type)
    {
        $this->container['appendix_type'] = $appendix_type;

        return $this;
    }

    /**
     * Gets additional_content
     *
     * @return object[]|null
     */
    public function getAdditionalContent()
    {
        return $this->container['additional_content'];
    }

    /**
     * Sets additional_content
     *
     * @param object[]|null $additional_content additional_content
     *
     * @return $this
     */
    public function setAdditionalContent($additional_content)
    {
        $this->container['additional_content'] = $additional_content;

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


