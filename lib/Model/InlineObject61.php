<?php
/**
 * InlineObject61
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
 * InlineObject61 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject61 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_61';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attribute_id' => 'int',
        'backend_name' => 'string',
        'position' => 'int',
        'image' => 'string',
        'comment' => 'string',
        'amazon_value' => 'string',
        'otto_value' => 'string',
        'neckermann_at_ep_value' => 'string',
        'la_redoute_value' => 'string',
        'tracdelight_value' => 'string',
        'percentage_distribution' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'attribute_id' => null,
        'backend_name' => null,
        'position' => null,
        'image' => null,
        'comment' => null,
        'amazon_value' => null,
        'otto_value' => null,
        'neckermann_at_ep_value' => null,
        'la_redoute_value' => null,
        'tracdelight_value' => null,
        'percentage_distribution' => null
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
        'attribute_id' => 'attributeId',
        'backend_name' => 'backendName',
        'position' => 'position',
        'image' => 'image',
        'comment' => 'comment',
        'amazon_value' => 'amazonValue',
        'otto_value' => 'ottoValue',
        'neckermann_at_ep_value' => 'neckermannAtEpValue',
        'la_redoute_value' => 'laRedouteValue',
        'tracdelight_value' => 'tracdelightValue',
        'percentage_distribution' => 'percentageDistribution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute_id' => 'setAttributeId',
        'backend_name' => 'setBackendName',
        'position' => 'setPosition',
        'image' => 'setImage',
        'comment' => 'setComment',
        'amazon_value' => 'setAmazonValue',
        'otto_value' => 'setOttoValue',
        'neckermann_at_ep_value' => 'setNeckermannAtEpValue',
        'la_redoute_value' => 'setLaRedouteValue',
        'tracdelight_value' => 'setTracdelightValue',
        'percentage_distribution' => 'setPercentageDistribution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_id' => 'getAttributeId',
        'backend_name' => 'getBackendName',
        'position' => 'getPosition',
        'image' => 'getImage',
        'comment' => 'getComment',
        'amazon_value' => 'getAmazonValue',
        'otto_value' => 'getOttoValue',
        'neckermann_at_ep_value' => 'getNeckermannAtEpValue',
        'la_redoute_value' => 'getLaRedouteValue',
        'tracdelight_value' => 'getTracdelightValue',
        'percentage_distribution' => 'getPercentageDistribution'
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
        $this->container['attribute_id'] = isset($data['attribute_id']) ? $data['attribute_id'] : null;
        $this->container['backend_name'] = isset($data['backend_name']) ? $data['backend_name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['amazon_value'] = isset($data['amazon_value']) ? $data['amazon_value'] : null;
        $this->container['otto_value'] = isset($data['otto_value']) ? $data['otto_value'] : null;
        $this->container['neckermann_at_ep_value'] = isset($data['neckermann_at_ep_value']) ? $data['neckermann_at_ep_value'] : null;
        $this->container['la_redoute_value'] = isset($data['la_redoute_value']) ? $data['la_redoute_value'] : null;
        $this->container['tracdelight_value'] = isset($data['tracdelight_value']) ? $data['tracdelight_value'] : null;
        $this->container['percentage_distribution'] = isset($data['percentage_distribution']) ? $data['percentage_distribution'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['attribute_id'] === null) {
            $invalidProperties[] = "'attribute_id' can't be null";
        }
        if ($this->container['backend_name'] === null) {
            $invalidProperties[] = "'backend_name' can't be null";
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
     * Gets attribute_id
     *
     * @return int
     */
    public function getAttributeId()
    {
        return $this->container['attribute_id'];
    }

    /**
     * Sets attribute_id
     *
     * @param int $attribute_id The unique ID of the attribute associated with the attribute value.
     *
     * @return $this
     */
    public function setAttributeId($attribute_id)
    {
        $this->container['attribute_id'] = $attribute_id;

        return $this;
    }

    /**
     * Gets backend_name
     *
     * @return string
     */
    public function getBackendName()
    {
        return $this->container['backend_name'];
    }

    /**
     * Sets backend_name
     *
     * @param string $backend_name The back end name of the attribute value. This name can only be assigned once per attribute. It is not visible in the plentymarkets front end.
     *
     * @return $this
     */
    public function setBackendName($backend_name)
    {
        $this->container['backend_name'] = $backend_name;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position The position of the attribute value. Attribute values are sorted in ascending order by position. optional
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image The name of the image associated with the attribute value; naming pattern is attr\\_\\{valueId\\}. optional
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Optional comment on the attribute value. Comments are not visible in the plentymarkets front end. optional
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets amazon_value
     *
     * @return string|null
     */
    public function getAmazonValue()
    {
        return $this->container['amazon_value'];
    }

    /**
     * Sets amazon_value
     *
     * @param string|null $amazon_value The attribute value of the market Amazon that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the values specified by the market. Check documentation of the market for permitted values. optional
     *
     * @return $this
     */
    public function setAmazonValue($amazon_value)
    {
        $this->container['amazon_value'] = $amazon_value;

        return $this;
    }

    /**
     * Gets otto_value
     *
     * @return string|null
     */
    public function getOttoValue()
    {
        return $this->container['otto_value'];
    }

    /**
     * Sets otto_value
     *
     * @param string|null $otto_value The attribute value of the market OTTO that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. optional
     *
     * @return $this
     */
    public function setOttoValue($otto_value)
    {
        $this->container['otto_value'] = $otto_value;

        return $this;
    }

    /**
     * Gets neckermann_at_ep_value
     *
     * @return string|null
     */
    public function getNeckermannAtEpValue()
    {
        return $this->container['neckermann_at_ep_value'];
    }

    /**
     * Sets neckermann_at_ep_value
     *
     * @param string|null $neckermann_at_ep_value The attribute value of the market Neckermann AT EP that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. Check documentation of the market for permitted values. optional
     *
     * @return $this
     */
    public function setNeckermannAtEpValue($neckermann_at_ep_value)
    {
        $this->container['neckermann_at_ep_value'] = $neckermann_at_ep_value;

        return $this;
    }

    /**
     * Gets la_redoute_value
     *
     * @return string|null
     */
    public function getLaRedouteValue()
    {
        return $this->container['la_redoute_value'];
    }

    /**
     * Sets la_redoute_value
     *
     * @param string|null $la_redoute_value The attribute value of the market La Redoute that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. Check documentation of the market for permitted values. optional
     *
     * @return $this
     */
    public function setLaRedouteValue($la_redoute_value)
    {
        $this->container['la_redoute_value'] = $la_redoute_value;

        return $this;
    }

    /**
     * Gets tracdelight_value
     *
     * @return string|null
     */
    public function getTracdelightValue()
    {
        return $this->container['tracdelight_value'];
    }

    /**
     * Sets tracdelight_value
     *
     * @param string|null $tracdelight_value optional
     *
     * @return $this
     */
    public function setTracdelightValue($tracdelight_value)
    {
        $this->container['tracdelight_value'] = $tracdelight_value;

        return $this;
    }

    /**
     * Gets percentage_distribution
     *
     * @return int|null
     */
    public function getPercentageDistribution()
    {
        return $this->container['percentage_distribution'];
    }

    /**
     * Sets percentage_distribution
     *
     * @param int|null $percentage_distribution The percentage for automatic stock distribution of attribute values. When reordering an item, the quantities of attribute values is automatically distributed among the total quantity. optional
     *
     * @return $this
     */
    public function setPercentageDistribution($percentage_distribution)
    {
        $this->container['percentage_distribution'] = $percentage_distribution;

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

