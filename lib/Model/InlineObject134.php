<?php
/**
 * InlineObject134
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
 * InlineObject134 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject134 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_134';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'position' => 'int',
        'stock_type' => 'int',
        'store_special' => 'int',
        'owner_id' => 'int',
        'manufacturer_id' => 'int',
        'created_at' => 'string',
        'customs_tariff_number' => 'string',
        'revenue_account' => 'int',
        'coupon_restriction' => 'int',
        'condition' => 'int',
        'condition_api' => 'int',
        'is_subscribable' => 'bool',
        'is_shipping_package' => 'bool',
        'amazon_fba_platform' => 'int',
        'is_shippable_by_amazon' => 'bool',
        'amazon_product_type' => 'int',
        'amazon_fedas' => 'string',
        'ebay_preset_id' => 'int',
        'ebay_category' => 'int',
        'ebay_category2' => 'int',
        'ebay_store_category' => 'int',
        'ebay_store_category2' => 'int',
        'rakuten_category_id' => 'int',
        'flag_one' => 'int',
        'flag_two' => 'int',
        'age_restriction' => 'int',
        'feedback' => 'int',
        'ebay_titles' => '\OpenAPI\Client\Model\ItemEbayTitle[]',
        'title' => 'string',
        'item_shipping_profiles' => '\OpenAPI\Client\Model\ItemShippingProfiles[]',
        'profile_id' => 'int',
        'item_properties' => '\OpenAPI\Client\Model\ItemProperty[]',
        'property_id' => 'int',
        'property_selection_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'position' => null,
        'stock_type' => null,
        'store_special' => null,
        'owner_id' => null,
        'manufacturer_id' => null,
        'created_at' => null,
        'customs_tariff_number' => null,
        'revenue_account' => null,
        'coupon_restriction' => null,
        'condition' => null,
        'condition_api' => null,
        'is_subscribable' => null,
        'is_shipping_package' => null,
        'amazon_fba_platform' => null,
        'is_shippable_by_amazon' => null,
        'amazon_product_type' => null,
        'amazon_fedas' => null,
        'ebay_preset_id' => null,
        'ebay_category' => null,
        'ebay_category2' => null,
        'ebay_store_category' => null,
        'ebay_store_category2' => null,
        'rakuten_category_id' => null,
        'flag_one' => null,
        'flag_two' => null,
        'age_restriction' => null,
        'feedback' => null,
        'ebay_titles' => null,
        'title' => null,
        'item_shipping_profiles' => null,
        'profile_id' => null,
        'item_properties' => null,
        'property_id' => null,
        'property_selection_id' => null
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
        'position' => 'position',
        'stock_type' => 'stockType',
        'store_special' => 'storeSpecial',
        'owner_id' => 'ownerId',
        'manufacturer_id' => 'manufacturerId',
        'created_at' => 'createdAt',
        'customs_tariff_number' => 'customsTariffNumber',
        'revenue_account' => 'revenueAccount',
        'coupon_restriction' => 'couponRestriction',
        'condition' => 'condition',
        'condition_api' => 'conditionApi',
        'is_subscribable' => 'isSubscribable',
        'is_shipping_package' => 'isShippingPackage',
        'amazon_fba_platform' => 'amazonFbaPlatform',
        'is_shippable_by_amazon' => 'isShippableByAmazon',
        'amazon_product_type' => 'amazonProductType',
        'amazon_fedas' => 'amazonFedas',
        'ebay_preset_id' => 'ebayPresetId',
        'ebay_category' => 'ebayCategory',
        'ebay_category2' => 'ebayCategory2',
        'ebay_store_category' => 'ebayStoreCategory',
        'ebay_store_category2' => 'ebayStoreCategory2',
        'rakuten_category_id' => 'rakutenCategoryId',
        'flag_one' => 'flagOne',
        'flag_two' => 'flagTwo',
        'age_restriction' => 'ageRestriction',
        'feedback' => 'feedback',
        'ebay_titles' => 'ebayTitles',
        'title' => 'title',
        'item_shipping_profiles' => 'itemShippingProfiles',
        'profile_id' => 'profileId',
        'item_properties' => 'itemProperties',
        'property_id' => 'propertyId',
        'property_selection_id' => 'propertySelectionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'position' => 'setPosition',
        'stock_type' => 'setStockType',
        'store_special' => 'setStoreSpecial',
        'owner_id' => 'setOwnerId',
        'manufacturer_id' => 'setManufacturerId',
        'created_at' => 'setCreatedAt',
        'customs_tariff_number' => 'setCustomsTariffNumber',
        'revenue_account' => 'setRevenueAccount',
        'coupon_restriction' => 'setCouponRestriction',
        'condition' => 'setCondition',
        'condition_api' => 'setConditionApi',
        'is_subscribable' => 'setIsSubscribable',
        'is_shipping_package' => 'setIsShippingPackage',
        'amazon_fba_platform' => 'setAmazonFbaPlatform',
        'is_shippable_by_amazon' => 'setIsShippableByAmazon',
        'amazon_product_type' => 'setAmazonProductType',
        'amazon_fedas' => 'setAmazonFedas',
        'ebay_preset_id' => 'setEbayPresetId',
        'ebay_category' => 'setEbayCategory',
        'ebay_category2' => 'setEbayCategory2',
        'ebay_store_category' => 'setEbayStoreCategory',
        'ebay_store_category2' => 'setEbayStoreCategory2',
        'rakuten_category_id' => 'setRakutenCategoryId',
        'flag_one' => 'setFlagOne',
        'flag_two' => 'setFlagTwo',
        'age_restriction' => 'setAgeRestriction',
        'feedback' => 'setFeedback',
        'ebay_titles' => 'setEbayTitles',
        'title' => 'setTitle',
        'item_shipping_profiles' => 'setItemShippingProfiles',
        'profile_id' => 'setProfileId',
        'item_properties' => 'setItemProperties',
        'property_id' => 'setPropertyId',
        'property_selection_id' => 'setPropertySelectionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'position' => 'getPosition',
        'stock_type' => 'getStockType',
        'store_special' => 'getStoreSpecial',
        'owner_id' => 'getOwnerId',
        'manufacturer_id' => 'getManufacturerId',
        'created_at' => 'getCreatedAt',
        'customs_tariff_number' => 'getCustomsTariffNumber',
        'revenue_account' => 'getRevenueAccount',
        'coupon_restriction' => 'getCouponRestriction',
        'condition' => 'getCondition',
        'condition_api' => 'getConditionApi',
        'is_subscribable' => 'getIsSubscribable',
        'is_shipping_package' => 'getIsShippingPackage',
        'amazon_fba_platform' => 'getAmazonFbaPlatform',
        'is_shippable_by_amazon' => 'getIsShippableByAmazon',
        'amazon_product_type' => 'getAmazonProductType',
        'amazon_fedas' => 'getAmazonFedas',
        'ebay_preset_id' => 'getEbayPresetId',
        'ebay_category' => 'getEbayCategory',
        'ebay_category2' => 'getEbayCategory2',
        'ebay_store_category' => 'getEbayStoreCategory',
        'ebay_store_category2' => 'getEbayStoreCategory2',
        'rakuten_category_id' => 'getRakutenCategoryId',
        'flag_one' => 'getFlagOne',
        'flag_two' => 'getFlagTwo',
        'age_restriction' => 'getAgeRestriction',
        'feedback' => 'getFeedback',
        'ebay_titles' => 'getEbayTitles',
        'title' => 'getTitle',
        'item_shipping_profiles' => 'getItemShippingProfiles',
        'profile_id' => 'getProfileId',
        'item_properties' => 'getItemProperties',
        'property_id' => 'getPropertyId',
        'property_selection_id' => 'getPropertySelectionId'
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['stock_type'] = isset($data['stock_type']) ? $data['stock_type'] : null;
        $this->container['store_special'] = isset($data['store_special']) ? $data['store_special'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['manufacturer_id'] = isset($data['manufacturer_id']) ? $data['manufacturer_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['customs_tariff_number'] = isset($data['customs_tariff_number']) ? $data['customs_tariff_number'] : null;
        $this->container['revenue_account'] = isset($data['revenue_account']) ? $data['revenue_account'] : null;
        $this->container['coupon_restriction'] = isset($data['coupon_restriction']) ? $data['coupon_restriction'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['condition_api'] = isset($data['condition_api']) ? $data['condition_api'] : null;
        $this->container['is_subscribable'] = isset($data['is_subscribable']) ? $data['is_subscribable'] : null;
        $this->container['is_shipping_package'] = isset($data['is_shipping_package']) ? $data['is_shipping_package'] : null;
        $this->container['amazon_fba_platform'] = isset($data['amazon_fba_platform']) ? $data['amazon_fba_platform'] : null;
        $this->container['is_shippable_by_amazon'] = isset($data['is_shippable_by_amazon']) ? $data['is_shippable_by_amazon'] : null;
        $this->container['amazon_product_type'] = isset($data['amazon_product_type']) ? $data['amazon_product_type'] : null;
        $this->container['amazon_fedas'] = isset($data['amazon_fedas']) ? $data['amazon_fedas'] : null;
        $this->container['ebay_preset_id'] = isset($data['ebay_preset_id']) ? $data['ebay_preset_id'] : null;
        $this->container['ebay_category'] = isset($data['ebay_category']) ? $data['ebay_category'] : null;
        $this->container['ebay_category2'] = isset($data['ebay_category2']) ? $data['ebay_category2'] : null;
        $this->container['ebay_store_category'] = isset($data['ebay_store_category']) ? $data['ebay_store_category'] : null;
        $this->container['ebay_store_category2'] = isset($data['ebay_store_category2']) ? $data['ebay_store_category2'] : null;
        $this->container['rakuten_category_id'] = isset($data['rakuten_category_id']) ? $data['rakuten_category_id'] : null;
        $this->container['flag_one'] = isset($data['flag_one']) ? $data['flag_one'] : null;
        $this->container['flag_two'] = isset($data['flag_two']) ? $data['flag_two'] : null;
        $this->container['age_restriction'] = isset($data['age_restriction']) ? $data['age_restriction'] : null;
        $this->container['feedback'] = isset($data['feedback']) ? $data['feedback'] : null;
        $this->container['ebay_titles'] = isset($data['ebay_titles']) ? $data['ebay_titles'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['item_shipping_profiles'] = isset($data['item_shipping_profiles']) ? $data['item_shipping_profiles'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['item_properties'] = isset($data['item_properties']) ? $data['item_properties'] : null;
        $this->container['property_id'] = isset($data['property_id']) ? $data['property_id'] : null;
        $this->container['property_selection_id'] = isset($data['property_selection_id']) ? $data['property_selection_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['age_restriction'] === null) {
            $invalidProperties[] = "'age_restriction' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['profile_id'] === null) {
            $invalidProperties[] = "'profile_id' can't be null";
        }
        if ($this->container['property_id'] === null) {
            $invalidProperties[] = "'property_id' can't be null";
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
     * @param int|null $position The position of the item optional
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets stock_type
     *
     * @return int|null
     */
    public function getStockType()
    {
        return $this->container['stock_type'];
    }

    /**
     * Sets stock_type
     *
     * @param int|null $stock_type The stock type of the item. Possible values:0 = Stocked item (default)1 = Production item2 = Colli3 = Special order item optional allowed values are 0, 1, 2, 3
     *
     * @return $this
     */
    public function setStockType($stock_type)
    {
        $this->container['stock_type'] = $stock_type;

        return $this;
    }

    /**
     * Gets store_special
     *
     * @return int|null
     */
    public function getStoreSpecial()
    {
        return $this->container['store_special'];
    }

    /**
     * Sets store_special
     *
     * @param int|null $store_special Option to present items more prominently in the online store.1 = Special offer2 = New items3 = Top items optional allowed values are 0, 1, 2, 3
     *
     * @return $this
     */
    public function setStoreSpecial($store_special)
    {
        $this->container['store_special'] = $store_special;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int|null $owner_id The plentymarkets user that is assigned as owner of this item. optional
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets manufacturer_id
     *
     * @return int|null
     */
    public function getManufacturerId()
    {
        return $this->container['manufacturer_id'];
    }

    /**
     * Sets manufacturer_id
     *
     * @param int|null $manufacturer_id The ID of the manufacturer of the item optional
     *
     * @return $this
     */
    public function setManufacturerId($manufacturer_id)
    {
        $this->container['manufacturer_id'] = $manufacturer_id;

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
     * @param string|null $created_at Timestamp of the date and time the item was created. optional
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets customs_tariff_number
     *
     * @return string|null
     */
    public function getCustomsTariffNumber()
    {
        return $this->container['customs_tariff_number'];
    }

    /**
     * Sets customs_tariff_number
     *
     * @param string|null $customs_tariff_number Deprecated: The customs tariff number of the item; usually a 11 digit code number based on the Harmonised System optional
     *
     * @return $this
     */
    public function setCustomsTariffNumber($customs_tariff_number)
    {
        $this->container['customs_tariff_number'] = $customs_tariff_number;

        return $this;
    }

    /**
     * Gets revenue_account
     *
     * @return int|null
     */
    public function getRevenueAccount()
    {
        return $this->container['revenue_account'];
    }

    /**
     * Sets revenue_account
     *
     * @param int|null $revenue_account The revenue account the item is linked to. An individual revenue account can be saved for each item in plentymarkets. If this is not done, plentymarkets automatically determines a revenue account based on the VAT rate. optional
     *
     * @return $this
     */
    public function setRevenueAccount($revenue_account)
    {
        $this->container['revenue_account'] = $revenue_account;

        return $this;
    }

    /**
     * Gets coupon_restriction
     *
     * @return int|null
     */
    public function getCouponRestriction()
    {
        return $this->container['coupon_restriction'];
    }

    /**
     * Sets coupon_restriction
     *
     * @param int|null $coupon_restriction Indicates if the item can be purchased using a promotional coupon.0 = Permitted1 = Not permitted2 = Purchasable with coupon only optional allowed values are 0, 1, 2
     *
     * @return $this
     */
    public function setCouponRestriction($coupon_restriction)
    {
        $this->container['coupon_restriction'] = $coupon_restriction;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return int|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param int|null $condition The condition of the item. Possible values:0 = New1 = Used2 = Boxed as new3 = New with label4 = Factory seconds optional allowed values are 0, 1, 2, 3, 4
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets condition_api
     *
     * @return int|null
     */
    public function getConditionApi()
    {
        return $this->container['condition_api'];
    }

    /**
     * Sets condition_api
     *
     * @param int|null $condition_api The condition of the item that is transferred to markets via API.0 = New1 = Used but as new2 = Used but very good3 = Used but good4 = Used but acceptable5 = Factory seconds optional allowed values are 0, 1, 2, 3, 4, 5
     *
     * @return $this
     */
    public function setConditionApi($condition_api)
    {
        $this->container['condition_api'] = $condition_api;

        return $this;
    }

    /**
     * Gets is_subscribable
     *
     * @return bool|null
     */
    public function getIsSubscribable()
    {
        return $this->container['is_subscribable'];
    }

    /**
     * Sets is_subscribable
     *
     * @param bool|null $is_subscribable Flag that indicates if the item can be ordered as a subscription item. If yes, the item can be ordered for delivery at regular intervals. optional
     *
     * @return $this
     */
    public function setIsSubscribable($is_subscribable)
    {
        $this->container['is_subscribable'] = $is_subscribable;

        return $this;
    }

    /**
     * Gets is_shipping_package
     *
     * @return bool|null
     */
    public function getIsShippingPackage()
    {
        return $this->container['is_shipping_package'];
    }

    /**
     * Sets is_shipping_package
     *
     * @param bool|null $is_shipping_package Flag that indicates if a shipping package is to be used for this item. If yes and the variation's dimensions are entered in the Settings tab of a variation, the correct shipping package is assigned automatically. optional
     *
     * @return $this
     */
    public function setIsShippingPackage($is_shipping_package)
    {
        $this->container['is_shipping_package'] = $is_shipping_package;

        return $this;
    }

    /**
     * Gets amazon_fba_platform
     *
     * @return int|null
     */
    public function getAmazonFbaPlatform()
    {
        return $this->container['amazon_fba_platform'];
    }

    /**
     * Sets amazon_fba_platform
     *
     * @param int|null $amazon_fba_platform Indicates the platform used for Fulfilment by Amazon (FBA). 0 = Do not use1 = AMAZON EU (Europe)2 = AMAZON FE (Far East)3 = AMAZON NA (North America) optional allowed values are 0, 1, 2, 3
     *
     * @return $this
     */
    public function setAmazonFbaPlatform($amazon_fba_platform)
    {
        $this->container['amazon_fba_platform'] = $amazon_fba_platform;

        return $this;
    }

    /**
     * Gets is_shippable_by_amazon
     *
     * @return bool|null
     */
    public function getIsShippableByAmazon()
    {
        return $this->container['is_shippable_by_amazon'];
    }

    /**
     * Sets is_shippable_by_amazon
     *
     * @param bool|null $is_shippable_by_amazon Flag that indicates if the item can be shipped with Amazon Multi-Channel. Amazon Multi-Channel Fulfillment is a service for fulfilling orders from sales channels other than Amazon platforms using inventory stored in the Amazon fulfillment center. optional
     *
     * @return $this
     */
    public function setIsShippableByAmazon($is_shippable_by_amazon)
    {
        $this->container['is_shippable_by_amazon'] = $is_shippable_by_amazon;

        return $this;
    }

    /**
     * Gets amazon_product_type
     *
     * @return int|null
     */
    public function getAmazonProductType()
    {
        return $this->container['amazon_product_type'];
    }

    /**
     * Sets amazon_product_type
     *
     * @param int|null $amazon_product_type The Amazon product type of the item. List of IDs: https://www.plentymarkets.co.uk/manual/data-exchange/data-formats/item/ optional
     *
     * @return $this
     */
    public function setAmazonProductType($amazon_product_type)
    {
        $this->container['amazon_product_type'] = $amazon_product_type;

        return $this;
    }

    /**
     * Gets amazon_fedas
     *
     * @return string|null
     */
    public function getAmazonFedas()
    {
        return $this->container['amazon_fedas'];
    }

    /**
     * Sets amazon_fedas
     *
     * @param string|null $amazon_fedas The FEDAS product classification key of the item. optional
     *
     * @return $this
     */
    public function setAmazonFedas($amazon_fedas)
    {
        $this->container['amazon_fedas'] = $amazon_fedas;

        return $this;
    }

    /**
     * Gets ebay_preset_id
     *
     * @return int|null
     */
    public function getEbayPresetId()
    {
        return $this->container['ebay_preset_id'];
    }

    /**
     * Sets ebay_preset_id
     *
     * @param int|null $ebay_preset_id The eBay preset ID. This plentymarkets ID must be specified to save values for $ebayCategory, $ebayCategory2, $ebayStoreCategory and $ebayStoreCategory2. optional
     *
     * @return $this
     */
    public function setEbayPresetId($ebay_preset_id)
    {
        $this->container['ebay_preset_id'] = $ebay_preset_id;

        return $this;
    }

    /**
     * Gets ebay_category
     *
     * @return int|null
     */
    public function getEbayCategory()
    {
        return $this->container['ebay_category'];
    }

    /**
     * Sets ebay_category
     *
     * @param int|null $ebay_category The eBay category 1 of the item. This category is used when a new listing is created. optional
     *
     * @return $this
     */
    public function setEbayCategory($ebay_category)
    {
        $this->container['ebay_category'] = $ebay_category;

        return $this;
    }

    /**
     * Gets ebay_category2
     *
     * @return int|null
     */
    public function getEbayCategory2()
    {
        return $this->container['ebay_category2'];
    }

    /**
     * Sets ebay_category2
     *
     * @param int|null $ebay_category2 The eBay category 2 of the item. This category is used when a new listing is created. optional
     *
     * @return $this
     */
    public function setEbayCategory2($ebay_category2)
    {
        $this->container['ebay_category2'] = $ebay_category2;

        return $this;
    }

    /**
     * Gets ebay_store_category
     *
     * @return int|null
     */
    public function getEbayStoreCategory()
    {
        return $this->container['ebay_store_category'];
    }

    /**
     * Sets ebay_store_category
     *
     * @param int|null $ebay_store_category The ID of the eBay store category 1 of the item. This value is used for new listings. optional
     *
     * @return $this
     */
    public function setEbayStoreCategory($ebay_store_category)
    {
        $this->container['ebay_store_category'] = $ebay_store_category;

        return $this;
    }

    /**
     * Gets ebay_store_category2
     *
     * @return int|null
     */
    public function getEbayStoreCategory2()
    {
        return $this->container['ebay_store_category2'];
    }

    /**
     * Sets ebay_store_category2
     *
     * @param int|null $ebay_store_category2 The ID of the eBay store category 2 of the item. This value is used for new listings. optional
     *
     * @return $this
     */
    public function setEbayStoreCategory2($ebay_store_category2)
    {
        $this->container['ebay_store_category2'] = $ebay_store_category2;

        return $this;
    }

    /**
     * Gets rakuten_category_id
     *
     * @return int|null
     */
    public function getRakutenCategoryId()
    {
        return $this->container['rakuten_category_id'];
    }

    /**
     * Sets rakuten_category_id
     *
     * @param int|null $rakuten_category_id The ID of the Rakuten category of this item. optional
     *
     * @return $this
     */
    public function setRakutenCategoryId($rakuten_category_id)
    {
        $this->container['rakuten_category_id'] = $rakuten_category_id;

        return $this;
    }

    /**
     * Gets flag_one
     *
     * @return int|null
     */
    public function getFlagOne()
    {
        return $this->container['flag_one'];
    }

    /**
     * Sets flag_one
     *
     * @param int|null $flag_one Flag 1 of the item. Flags can be used to organise and filter items. Each item can be assigned up to two flags. Possible values: 1 to 31, 0 = no flag optional allowed values are 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31
     *
     * @return $this
     */
    public function setFlagOne($flag_one)
    {
        $this->container['flag_one'] = $flag_one;

        return $this;
    }

    /**
     * Gets flag_two
     *
     * @return int|null
     */
    public function getFlagTwo()
    {
        return $this->container['flag_two'];
    }

    /**
     * Sets flag_two
     *
     * @param int|null $flag_two Flag 2 of the item. Flags can be used to organise and filter items. Each item can be assigned up to two flags. Possible values: 1 to 11, 0 = no flag optional allowed values are 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11
     *
     * @return $this
     */
    public function setFlagTwo($flag_two)
    {
        $this->container['flag_two'] = $flag_two;

        return $this;
    }

    /**
     * Gets age_restriction
     *
     * @return int
     */
    public function getAgeRestriction()
    {
        return $this->container['age_restriction'];
    }

    /**
     * Sets age_restriction
     *
     * @param int $age_restriction The age customers must be to purchase the item. Items with an age rating of 18+ must be linked to a shipping profile for which the PostIdent option is activated.0 = None available3 = Released for ages 3 and up6 = Ages 6 and up9 = Ages 9 and up12 = Ages 12 and up14 = Ages 14 and up16 = Ages 16 and up18 = Ages 18 and up50 = Not marked88 = Not 99 = Unknown optional allowed values are 0, 3, 6, 9, 12, 14, 16, 18, 50, 88, 99
     *
     * @return $this
     */
    public function setAgeRestriction($age_restriction)
    {
        $this->container['age_restriction'] = $age_restriction;

        return $this;
    }

    /**
     * Gets feedback
     *
     * @return int|null
     */
    public function getFeedback()
    {
        return $this->container['feedback'];
    }

    /**
     * Sets feedback
     *
     * @param int|null $feedback The feedback, i.e. rating, that this item received. Possible values are 1 to 5 or 1 to 10 depending on the maximum rating setting. An initial feedback can be saved for items. The saved value will then be displayed as the initial feedback. Every time new feedback is submitted, the average value will be recalculated automatically. optional
     *
     * @return $this
     */
    public function setFeedback($feedback)
    {
        $this->container['feedback'] = $feedback;

        return $this;
    }

    /**
     * Gets ebay_titles
     *
     * @return \OpenAPI\Client\Model\ItemEbayTitle[]|null
     */
    public function getEbayTitles()
    {
        return $this->container['ebay_titles'];
    }

    /**
     * Sets ebay_titles
     *
     * @param \OpenAPI\Client\Model\ItemEbayTitle[]|null $ebay_titles ebay_titles
     *
     * @return $this
     */
    public function setEbayTitles($ebay_titles)
    {
        $this->container['ebay_titles'] = $ebay_titles;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets item_shipping_profiles
     *
     * @return \OpenAPI\Client\Model\ItemShippingProfiles[]|null
     */
    public function getItemShippingProfiles()
    {
        return $this->container['item_shipping_profiles'];
    }

    /**
     * Sets item_shipping_profiles
     *
     * @param \OpenAPI\Client\Model\ItemShippingProfiles[]|null $item_shipping_profiles item_shipping_profiles
     *
     * @return $this
     */
    public function setItemShippingProfiles($item_shipping_profiles)
    {
        $this->container['item_shipping_profiles'] = $item_shipping_profiles;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param int $profile_id The unique ID of the shipping profile
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets item_properties
     *
     * @return \OpenAPI\Client\Model\ItemProperty[]|null
     */
    public function getItemProperties()
    {
        return $this->container['item_properties'];
    }

    /**
     * Sets item_properties
     *
     * @param \OpenAPI\Client\Model\ItemProperty[]|null $item_properties item_properties
     *
     * @return $this
     */
    public function setItemProperties($item_properties)
    {
        $this->container['item_properties'] = $item_properties;

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
     * @param int $property_id The id of the property item
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
     * @param int|null $property_selection_id The id of the property selection optional
     *
     * @return $this
     */
    public function setPropertySelectionId($property_selection_id)
    {
        $this->container['property_selection_id'] = $property_selection_id;

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


