<?php
/**
 * InlineObject108
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
 * InlineObject108 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject108 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_108';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_id' => 'int',
        'lang' => 'string',
        'name' => 'string',
        'name2' => 'string',
        'name3' => 'string',
        'preview_description' => 'string',
        'meta_description' => 'string',
        'description' => 'string',
        'technical_data' => 'string',
        'url_path' => 'string',
        'meta_keywords' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'item_id' => null,
        'lang' => null,
        'name' => null,
        'name2' => null,
        'name3' => null,
        'preview_description' => null,
        'meta_description' => null,
        'description' => null,
        'technical_data' => null,
        'url_path' => null,
        'meta_keywords' => null
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
        'item_id' => 'itemId',
        'lang' => 'lang',
        'name' => 'name',
        'name2' => 'name2',
        'name3' => 'name3',
        'preview_description' => 'previewDescription',
        'meta_description' => 'metaDescription',
        'description' => 'description',
        'technical_data' => 'technicalData',
        'url_path' => 'urlPath',
        'meta_keywords' => 'metaKeywords'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
        'lang' => 'setLang',
        'name' => 'setName',
        'name2' => 'setName2',
        'name3' => 'setName3',
        'preview_description' => 'setPreviewDescription',
        'meta_description' => 'setMetaDescription',
        'description' => 'setDescription',
        'technical_data' => 'setTechnicalData',
        'url_path' => 'setUrlPath',
        'meta_keywords' => 'setMetaKeywords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
        'lang' => 'getLang',
        'name' => 'getName',
        'name2' => 'getName2',
        'name3' => 'getName3',
        'preview_description' => 'getPreviewDescription',
        'meta_description' => 'getMetaDescription',
        'description' => 'getDescription',
        'technical_data' => 'getTechnicalData',
        'url_path' => 'getUrlPath',
        'meta_keywords' => 'getMetaKeywords'
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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name2'] = isset($data['name2']) ? $data['name2'] : null;
        $this->container['name3'] = isset($data['name3']) ? $data['name3'] : null;
        $this->container['preview_description'] = isset($data['preview_description']) ? $data['preview_description'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['technical_data'] = isset($data['technical_data']) ? $data['technical_data'] : null;
        $this->container['url_path'] = isset($data['url_path']) ? $data['url_path'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
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
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id The unique ID of the item that this description belongs to
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

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
     * @param string $lang The language code of the description
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

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
     * @param string|null $name The default name of the item. By default, this name is displayed in the online store. For Default items, this name is also used for markets. Character limit: max. 240 characters. optional
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name2
     *
     * @return string|null
     */
    public function getName2()
    {
        return $this->container['name2'];
    }

    /**
     * Sets name2
     *
     * @param string|null $name2 Alternative item name that can be used e.g. for markets. Character limit: max. 240 characters. optional
     *
     * @return $this
     */
    public function setName2($name2)
    {
        $this->container['name2'] = $name2;

        return $this;
    }

    /**
     * Gets name3
     *
     * @return string|null
     */
    public function getName3()
    {
        return $this->container['name3'];
    }

    /**
     * Sets name3
     *
     * @param string|null $name3 Alternative item name that can be used e.g. for markets. Character limit: max. 240 characters. optional
     *
     * @return $this
     */
    public function setName3($name3)
    {
        $this->container['name3'] = $name3;

        return $this;
    }

    /**
     * Gets preview_description
     *
     * @return string|null
     */
    public function getPreviewDescription()
    {
        return $this->container['preview_description'];
    }

    /**
     * Sets preview_description
     *
     * @param string|null $preview_description The preview text. The preview text is a short description that can be displayed in item lists. optional
     *
     * @return $this
     */
    public function setPreviewDescription($preview_description)
    {
        $this->container['preview_description'] = $preview_description;

        return $this;
    }

    /**
     * Gets meta_description
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     *
     * @param string|null $meta_description The meta description of the item. This description is analysed by search engines and displayed in search results. This text should be treated as an advertising text to maximise click-through from search engine result pages. Current recommended limit is 156 characters. optional
     *
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The item description. This is a detailed description displayed in the item layout of the online store. optional
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets technical_data
     *
     * @return string|null
     */
    public function getTechnicalData()
    {
        return $this->container['technical_data'];
    }

    /**
     * Sets technical_data
     *
     * @param string|null $technical_data The technical data for the item. To display the technical data in the online store, insert the template variable TechnicalData and an optional title into the template ItemViewSingleItem. optional
     *
     * @return $this
     */
    public function setTechnicalData($technical_data)
    {
        $this->container['technical_data'] = $technical_data;

        return $this;
    }

    /**
     * Gets url_path
     *
     * @return string|null
     */
    public function getUrlPath()
    {
        return $this->container['url_path'];
    }

    /**
     * Sets url_path
     *
     * @param string|null $url_path The URL path of the item in the online store. By default, the URL path consists of the categories and the item name. The path will be assigned automatically by plentymarkets when the item is created and will be displayed as part of the URL when the item is selected in the online store. optional
     *
     * @return $this
     */
    public function setUrlPath($url_path)
    {
        $this->container['url_path'] = $url_path;

        return $this;
    }

    /**
     * Gets meta_keywords
     *
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     *
     * @param string|null $meta_keywords Meta keywords to tag the item for search engines. More than one keyword can be separated by commas. optional
     *
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

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


