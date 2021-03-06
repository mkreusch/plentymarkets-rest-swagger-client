<?php
/**
 * InlineResponse2009
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
 * InlineResponse2009 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse2009 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_9';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'page' => 'int',
        'totals_count' => 'int',
        'is_last_page' => 'bool',
        'last_page_number' => 'int',
        'first_on_page' => 'int',
        'last_on_page' => 'int',
        'items_per_page' => 'int',
        'entries' => '\OpenAPI\Client\Model\Export[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'page' => null,
        'totals_count' => null,
        'is_last_page' => null,
        'last_page_number' => null,
        'first_on_page' => null,
        'last_on_page' => null,
        'items_per_page' => null,
        'entries' => null
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
        'page' => 'page',
        'totals_count' => 'totalsCount',
        'is_last_page' => 'isLastPage',
        'last_page_number' => 'lastPageNumber',
        'first_on_page' => 'firstOnPage',
        'last_on_page' => 'lastOnPage',
        'items_per_page' => 'itemsPerPage',
        'entries' => 'entries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page' => 'setPage',
        'totals_count' => 'setTotalsCount',
        'is_last_page' => 'setIsLastPage',
        'last_page_number' => 'setLastPageNumber',
        'first_on_page' => 'setFirstOnPage',
        'last_on_page' => 'setLastOnPage',
        'items_per_page' => 'setItemsPerPage',
        'entries' => 'setEntries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page' => 'getPage',
        'totals_count' => 'getTotalsCount',
        'is_last_page' => 'getIsLastPage',
        'last_page_number' => 'getLastPageNumber',
        'first_on_page' => 'getFirstOnPage',
        'last_on_page' => 'getLastOnPage',
        'items_per_page' => 'getItemsPerPage',
        'entries' => 'getEntries'
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
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['totals_count'] = isset($data['totals_count']) ? $data['totals_count'] : null;
        $this->container['is_last_page'] = isset($data['is_last_page']) ? $data['is_last_page'] : null;
        $this->container['last_page_number'] = isset($data['last_page_number']) ? $data['last_page_number'] : null;
        $this->container['first_on_page'] = isset($data['first_on_page']) ? $data['first_on_page'] : null;
        $this->container['last_on_page'] = isset($data['last_on_page']) ? $data['last_on_page'] : null;
        $this->container['items_per_page'] = isset($data['items_per_page']) ? $data['items_per_page'] : null;
        $this->container['entries'] = isset($data['entries']) ? $data['entries'] : null;
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
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page Current page of the response
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets totals_count
     *
     * @return int|null
     */
    public function getTotalsCount()
    {
        return $this->container['totals_count'];
    }

    /**
     * Sets totals_count
     *
     * @param int|null $totals_count The total number of entries in the response
     *
     * @return $this
     */
    public function setTotalsCount($totals_count)
    {
        $this->container['totals_count'] = $totals_count;

        return $this;
    }

    /**
     * Gets is_last_page
     *
     * @return bool|null
     */
    public function getIsLastPage()
    {
        return $this->container['is_last_page'];
    }

    /**
     * Sets is_last_page
     *
     * @param bool|null $is_last_page Flag that indicates if the page shown is the last page of the response
     *
     * @return $this
     */
    public function setIsLastPage($is_last_page)
    {
        $this->container['is_last_page'] = $is_last_page;

        return $this;
    }

    /**
     * Gets last_page_number
     *
     * @return int|null
     */
    public function getLastPageNumber()
    {
        return $this->container['last_page_number'];
    }

    /**
     * Sets last_page_number
     *
     * @param int|null $last_page_number The last page number
     *
     * @return $this
     */
    public function setLastPageNumber($last_page_number)
    {
        $this->container['last_page_number'] = $last_page_number;

        return $this;
    }

    /**
     * Gets first_on_page
     *
     * @return int|null
     */
    public function getFirstOnPage()
    {
        return $this->container['first_on_page'];
    }

    /**
     * Sets first_on_page
     *
     * @param int|null $first_on_page The index of the first item of the current page result
     *
     * @return $this
     */
    public function setFirstOnPage($first_on_page)
    {
        $this->container['first_on_page'] = $first_on_page;

        return $this;
    }

    /**
     * Gets last_on_page
     *
     * @return int|null
     */
    public function getLastOnPage()
    {
        return $this->container['last_on_page'];
    }

    /**
     * Sets last_on_page
     *
     * @param int|null $last_on_page The index of the last item of the current page result
     *
     * @return $this
     */
    public function setLastOnPage($last_on_page)
    {
        $this->container['last_on_page'] = $last_on_page;

        return $this;
    }

    /**
     * Gets items_per_page
     *
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->container['items_per_page'];
    }

    /**
     * Sets items_per_page
     *
     * @param int|null $items_per_page The requested amount of items per result page
     *
     * @return $this
     */
    public function setItemsPerPage($items_per_page)
    {
        $this->container['items_per_page'] = $items_per_page;

        return $this;
    }

    /**
     * Gets entries
     *
     * @return \OpenAPI\Client\Model\Export[]|null
     */
    public function getEntries()
    {
        return $this->container['entries'];
    }

    /**
     * Sets entries
     *
     * @param \OpenAPI\Client\Model\Export[]|null $entries List of Export
     *
     * @return $this
     */
    public function setEntries($entries)
    {
        $this->container['entries'] = $entries;

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


