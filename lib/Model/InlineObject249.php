<?php
/**
 * InlineObject249
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
 * InlineObject249 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject249 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_249';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country_id' => 'int',
        'location_id' => 'int',
        'tax_id_number' => 'string',
        'started_at' => 'string',
        'invalid_from' => 'string',
        'is_restricted_to_digital_items' => 'bool',
        'margin_scheme' => 'string',
        'vat_rates' => '\OpenAPI\Client\Model\VatRate[]',
        'id' => 'int',
        'name' => 'string',
        'vat_rate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'country_id' => null,
        'location_id' => null,
        'tax_id_number' => null,
        'started_at' => null,
        'invalid_from' => null,
        'is_restricted_to_digital_items' => null,
        'margin_scheme' => null,
        'vat_rates' => null,
        'id' => null,
        'name' => null,
        'vat_rate' => null
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
        'country_id' => 'countryId',
        'location_id' => 'locationId',
        'tax_id_number' => 'taxIdNumber',
        'started_at' => 'startedAt',
        'invalid_from' => 'invalidFrom',
        'is_restricted_to_digital_items' => 'isRestrictedToDigitalItems',
        'margin_scheme' => 'marginScheme',
        'vat_rates' => 'vatRates',
        'id' => 'id',
        'name' => 'name',
        'vat_rate' => 'vatRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_id' => 'setCountryId',
        'location_id' => 'setLocationId',
        'tax_id_number' => 'setTaxIdNumber',
        'started_at' => 'setStartedAt',
        'invalid_from' => 'setInvalidFrom',
        'is_restricted_to_digital_items' => 'setIsRestrictedToDigitalItems',
        'margin_scheme' => 'setMarginScheme',
        'vat_rates' => 'setVatRates',
        'id' => 'setId',
        'name' => 'setName',
        'vat_rate' => 'setVatRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_id' => 'getCountryId',
        'location_id' => 'getLocationId',
        'tax_id_number' => 'getTaxIdNumber',
        'started_at' => 'getStartedAt',
        'invalid_from' => 'getInvalidFrom',
        'is_restricted_to_digital_items' => 'getIsRestrictedToDigitalItems',
        'margin_scheme' => 'getMarginScheme',
        'vat_rates' => 'getVatRates',
        'id' => 'getId',
        'name' => 'getName',
        'vat_rate' => 'getVatRate'
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
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['tax_id_number'] = isset($data['tax_id_number']) ? $data['tax_id_number'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
        $this->container['invalid_from'] = isset($data['invalid_from']) ? $data['invalid_from'] : null;
        $this->container['is_restricted_to_digital_items'] = isset($data['is_restricted_to_digital_items']) ? $data['is_restricted_to_digital_items'] : null;
        $this->container['margin_scheme'] = isset($data['margin_scheme']) ? $data['margin_scheme'] : null;
        $this->container['vat_rates'] = isset($data['vat_rates']) ? $data['vat_rates'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vat_rate'] = isset($data['vat_rate']) ? $data['vat_rate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country_id'] === null) {
            $invalidProperties[] = "'country_id' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['started_at'] === null) {
            $invalidProperties[] = "'started_at' can't be null";
        }
        if ($this->container['vat_rates'] === null) {
            $invalidProperties[] = "'vat_rates' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['vat_rate'] === null) {
            $invalidProperties[] = "'vat_rate' can't be null";
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
     * Gets country_id
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param int $country_id The ID of the country that the VAT configuration belongs to
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id The ID of the location
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets tax_id_number
     *
     * @return string|null
     */
    public function getTaxIdNumber()
    {
        return $this->container['tax_id_number'];
    }

    /**
     * Sets tax_id_number
     *
     * @param string|null $tax_id_number The tax id number of VAT configuration.
     *
     * @return $this
     */
    public function setTaxIdNumber($tax_id_number)
    {
        $this->container['tax_id_number'] = $tax_id_number;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return string
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param string $started_at The date when the VAT configuration went into effect
     *
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets invalid_from
     *
     * @return string|null
     */
    public function getInvalidFrom()
    {
        return $this->container['invalid_from'];
    }

    /**
     * Sets invalid_from
     *
     * @param string|null $invalid_from The date when the VAT configuration should not be used any more
     *
     * @return $this
     */
    public function setInvalidFrom($invalid_from)
    {
        $this->container['invalid_from'] = $invalid_from;

        return $this;
    }

    /**
     * Gets is_restricted_to_digital_items
     *
     * @return bool|null
     */
    public function getIsRestrictedToDigitalItems()
    {
        return $this->container['is_restricted_to_digital_items'];
    }

    /**
     * Sets is_restricted_to_digital_items
     *
     * @param bool|null $is_restricted_to_digital_items Flag that indicates if the VAT configuration is used only applied to digital goods or not. True= The VAT set is only applied to digital goods. False = The VAT set is applied to all types of goods.
     *
     * @return $this
     */
    public function setIsRestrictedToDigitalItems($is_restricted_to_digital_items)
    {
        $this->container['is_restricted_to_digital_items'] = $is_restricted_to_digital_items;

        return $this;
    }

    /**
     * Gets margin_scheme
     *
     * @return string|null
     */
    public function getMarginScheme()
    {
        return $this->container['margin_scheme'];
    }

    /**
     * Sets margin_scheme
     *
     * @param string|null $margin_scheme Specifies the tax rate that is used, when the margin scheme is applied. Available values: 'none', 'vat1', 'vat2', 'vat3', 'vat4'. allowed values are none, vat0, vat1, vat2, vat3
     *
     * @return $this
     */
    public function setMarginScheme($margin_scheme)
    {
        $this->container['margin_scheme'] = $margin_scheme;

        return $this;
    }

    /**
     * Gets vat_rates
     *
     * @return \OpenAPI\Client\Model\VatRate[]
     */
    public function getVatRates()
    {
        return $this->container['vat_rates'];
    }

    /**
     * Sets vat_rates
     *
     * @param \OpenAPI\Client\Model\VatRate[] $vat_rates vat_rates
     *
     * @return $this
     */
    public function setVatRates($vat_rates)
    {
        $this->container['vat_rates'] = $vat_rates;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID of the VAT rate  allowed values are 0, 1, 2, 3
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
     * @param string|null $name The name of a VAT rate
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets vat_rate
     *
     * @return float
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param float $vat_rate The percentage of the VAT rate, e.g. 19.00 for 19 %
     *
     * @return $this
     */
    public function setVatRate($vat_rate)
    {
        $this->container['vat_rate'] = $vat_rate;

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

