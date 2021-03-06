<?php
/**
 * ShippingInformation
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
 * ShippingInformation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShippingInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_id' => 'int',
        'shipping_service_provider' => 'string',
        'transaction_id' => 'string',
        'shipping_status' => 'string',
        'shipping_costs' => 'float',
        'additional_data' => 'string',
        'registration_at' => 'int',
        'shipment_at' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'order_id' => null,
        'shipping_service_provider' => null,
        'transaction_id' => null,
        'shipping_status' => null,
        'shipping_costs' => null,
        'additional_data' => null,
        'registration_at' => null,
        'shipment_at' => null
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
        'order_id' => 'orderId',
        'shipping_service_provider' => 'shippingServiceProvider',
        'transaction_id' => 'transactionId',
        'shipping_status' => 'shippingStatus',
        'shipping_costs' => 'shippingCosts',
        'additional_data' => 'additionalData',
        'registration_at' => 'registrationAt',
        'shipment_at' => 'shipmentAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'shipping_service_provider' => 'setShippingServiceProvider',
        'transaction_id' => 'setTransactionId',
        'shipping_status' => 'setShippingStatus',
        'shipping_costs' => 'setShippingCosts',
        'additional_data' => 'setAdditionalData',
        'registration_at' => 'setRegistrationAt',
        'shipment_at' => 'setShipmentAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'shipping_service_provider' => 'getShippingServiceProvider',
        'transaction_id' => 'getTransactionId',
        'shipping_status' => 'getShippingStatus',
        'shipping_costs' => 'getShippingCosts',
        'additional_data' => 'getAdditionalData',
        'registration_at' => 'getRegistrationAt',
        'shipment_at' => 'getShipmentAt'
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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['shipping_service_provider'] = isset($data['shipping_service_provider']) ? $data['shipping_service_provider'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['shipping_status'] = isset($data['shipping_status']) ? $data['shipping_status'] : null;
        $this->container['shipping_costs'] = isset($data['shipping_costs']) ? $data['shipping_costs'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['registration_at'] = isset($data['registration_at']) ? $data['registration_at'] : null;
        $this->container['shipment_at'] = isset($data['shipment_at']) ? $data['shipment_at'] : null;
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
     * Gets order_id
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id The ID of the order
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets shipping_service_provider
     *
     * @return string|null
     */
    public function getShippingServiceProvider()
    {
        return $this->container['shipping_service_provider'];
    }

    /**
     * Sets shipping_service_provider
     *
     * @param string|null $shipping_service_provider The name of the shipping service provider
     *
     * @return $this
     */
    public function setShippingServiceProvider($shipping_service_provider)
    {
        $this->container['shipping_service_provider'] = $shipping_service_provider;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id The ID of the transaction
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets shipping_status
     *
     * @return string|null
     */
    public function getShippingStatus()
    {
        return $this->container['shipping_status'];
    }

    /**
     * Sets shipping_status
     *
     * @param string|null $shipping_status The shipping status. Possible values are 'open', 'prepared' and 'registered'.
     *
     * @return $this
     */
    public function setShippingStatus($shipping_status)
    {
        $this->container['shipping_status'] = $shipping_status;

        return $this;
    }

    /**
     * Gets shipping_costs
     *
     * @return float|null
     */
    public function getShippingCosts()
    {
        return $this->container['shipping_costs'];
    }

    /**
     * Sets shipping_costs
     *
     * @param float|null $shipping_costs The shipping costs
     *
     * @return $this
     */
    public function setShippingCosts($shipping_costs)
    {
        $this->container['shipping_costs'] = $shipping_costs;

        return $this;
    }

    /**
     * Gets additional_data
     *
     * @return string|null
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param string|null $additional_data The additional data. Depending on the shipping service provider selected, this data may contain different information, e.g. shipping service, email address and order ID.
     *
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets registration_at
     *
     * @return int|null
     */
    public function getRegistrationAt()
    {
        return $this->container['registration_at'];
    }

    /**
     * Sets registration_at
     *
     * @param int|null $registration_at The date and time the shipment was registered
     *
     * @return $this
     */
    public function setRegistrationAt($registration_at)
    {
        $this->container['registration_at'] = $registration_at;

        return $this;
    }

    /**
     * Gets shipment_at
     *
     * @return int|null
     */
    public function getShipmentAt()
    {
        return $this->container['shipment_at'];
    }

    /**
     * Sets shipment_at
     *
     * @param int|null $shipment_at The date the items will be shipped
     *
     * @return $this
     */
    public function setShipmentAt($shipment_at)
    {
        $this->container['shipment_at'] = $shipment_at;

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


