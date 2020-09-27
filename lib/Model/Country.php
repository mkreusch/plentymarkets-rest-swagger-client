<?php
/**
 * Country
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
 * Country Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Country implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Country';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'shipping_destination_id' => 'int',
        'active' => 'int',
        'storehouse_id' => 'int',
        'iso_code2' => 'string',
        'iso_code3' => 'string',
        'lang' => 'string',
        'is_country_state_mandatory' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'shipping_destination_id' => null,
        'active' => null,
        'storehouse_id' => null,
        'iso_code2' => null,
        'iso_code3' => null,
        'lang' => null,
        'is_country_state_mandatory' => null
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
        'name' => 'name',
        'shipping_destination_id' => 'shippingDestinationId',
        'active' => 'active',
        'storehouse_id' => 'storehouseId',
        'iso_code2' => 'isoCode2',
        'iso_code3' => 'isoCode3',
        'lang' => 'lang',
        'is_country_state_mandatory' => 'isCountryStateMandatory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'shipping_destination_id' => 'setShippingDestinationId',
        'active' => 'setActive',
        'storehouse_id' => 'setStorehouseId',
        'iso_code2' => 'setIsoCode2',
        'iso_code3' => 'setIsoCode3',
        'lang' => 'setLang',
        'is_country_state_mandatory' => 'setIsCountryStateMandatory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'shipping_destination_id' => 'getShippingDestinationId',
        'active' => 'getActive',
        'storehouse_id' => 'getStorehouseId',
        'iso_code2' => 'getIsoCode2',
        'iso_code3' => 'getIsoCode3',
        'lang' => 'getLang',
        'is_country_state_mandatory' => 'getIsCountryStateMandatory'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shipping_destination_id'] = isset($data['shipping_destination_id']) ? $data['shipping_destination_id'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['storehouse_id'] = isset($data['storehouse_id']) ? $data['storehouse_id'] : null;
        $this->container['iso_code2'] = isset($data['iso_code2']) ? $data['iso_code2'] : null;
        $this->container['iso_code3'] = isset($data['iso_code3']) ? $data['iso_code3'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['is_country_state_mandatory'] = isset($data['is_country_state_mandatory']) ? $data['is_country_state_mandatory'] : null;
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
     * @param int|null $id The country id.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $name The system country name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets shipping_destination_id
     *
     * @return int|null
     */
    public function getShippingDestinationId()
    {
        return $this->container['shipping_destination_id'];
    }

    /**
     * Sets shipping_destination_id
     *
     * @param int|null $shipping_destination_id The shipping destination (region) id.
     *
     * @return $this
     */
    public function setShippingDestinationId($shipping_destination_id)
    {
        $this->container['shipping_destination_id'] = $shipping_destination_id;

        return $this;
    }

    /**
     * Gets active
     *
     * @return int|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param int|null $active The active flag (1: active, 2: backend active, 3: supplier active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets storehouse_id
     *
     * @return int|null
     */
    public function getStorehouseId()
    {
        return $this->container['storehouse_id'];
    }

    /**
     * Sets storehouse_id
     *
     * @param int|null $storehouse_id The id of the main warehouse in this country.
     *
     * @return $this
     */
    public function setStorehouseId($storehouse_id)
    {
        $this->container['storehouse_id'] = $storehouse_id;

        return $this;
    }

    /**
     * Gets iso_code2
     *
     * @return string|null
     */
    public function getIsoCode2()
    {
        return $this->container['iso_code2'];
    }

    /**
     * Sets iso_code2
     *
     * @param string|null $iso_code2 The ISO 3166 ALPHA-2 code of the country.
     *
     * @return $this
     */
    public function setIsoCode2($iso_code2)
    {
        $this->container['iso_code2'] = $iso_code2;

        return $this;
    }

    /**
     * Gets iso_code3
     *
     * @return string|null
     */
    public function getIsoCode3()
    {
        return $this->container['iso_code3'];
    }

    /**
     * Sets iso_code3
     *
     * @param string|null $iso_code3 The ISO 3166 ALPHA-3 code of the country.
     *
     * @return $this
     */
    public function setIsoCode3($iso_code3)
    {
        $this->container['iso_code3'] = $iso_code3;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string|null
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string|null $lang The main language spoken in the country.
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets is_country_state_mandatory
     *
     * @return bool|null
     */
    public function getIsCountryStateMandatory()
    {
        return $this->container['is_country_state_mandatory'];
    }

    /**
     * Sets is_country_state_mandatory
     *
     * @param bool|null $is_country_state_mandatory Flag that states if a country state is mandatory for the country.
     *
     * @return $this
     */
    public function setIsCountryStateMandatory($is_country_state_mandatory)
    {
        $this->container['is_country_state_mandatory'] = $is_country_state_mandatory;

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


