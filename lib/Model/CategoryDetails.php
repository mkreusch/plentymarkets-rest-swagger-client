<?php
/**
 * CategoryDetails
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
 * CategoryDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CategoryDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_id' => 'int',
        'plenty_id' => 'int',
        'lang' => 'string',
        'name' => 'string',
        'description' => 'string',
        'description2' => 'string',
        'short_description' => 'string',
        'meta_keywords' => 'string',
        'meta_description' => 'string',
        'name_url' => 'string',
        'meta_title' => 'string',
        'image' => 'string',
        'image2' => 'string',
        'image_path' => 'string',
        'image2_path' => 'string',
        'preview_url' => 'string',
        'position' => 'int',
        'item_list_view' => 'string',
        'single_item_view' => 'string',
        'page_view' => 'string',
        'fulltext' => 'bool',
        'meta_robots' => 'string',
        'canonical_link' => 'string',
        'updated_at' => 'string',
        'updated_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'category_id' => null,
        'plenty_id' => null,
        'lang' => null,
        'name' => null,
        'description' => null,
        'description2' => null,
        'short_description' => null,
        'meta_keywords' => null,
        'meta_description' => null,
        'name_url' => null,
        'meta_title' => null,
        'image' => null,
        'image2' => null,
        'image_path' => null,
        'image2_path' => null,
        'preview_url' => null,
        'position' => null,
        'item_list_view' => null,
        'single_item_view' => null,
        'page_view' => null,
        'fulltext' => null,
        'meta_robots' => null,
        'canonical_link' => null,
        'updated_at' => null,
        'updated_by' => null
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
        'category_id' => 'categoryId',
        'plenty_id' => 'plentyId',
        'lang' => 'lang',
        'name' => 'name',
        'description' => 'description',
        'description2' => 'description2',
        'short_description' => 'shortDescription',
        'meta_keywords' => 'metaKeywords',
        'meta_description' => 'metaDescription',
        'name_url' => 'nameUrl',
        'meta_title' => 'metaTitle',
        'image' => 'image',
        'image2' => 'image2',
        'image_path' => 'imagePath',
        'image2_path' => 'image2Path',
        'preview_url' => 'previewUrl',
        'position' => 'position',
        'item_list_view' => 'itemListView',
        'single_item_view' => 'singleItemView',
        'page_view' => 'pageView',
        'fulltext' => 'fulltext',
        'meta_robots' => 'metaRobots',
        'canonical_link' => 'canonicalLink',
        'updated_at' => 'updatedAt',
        'updated_by' => 'updatedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_id' => 'setCategoryId',
        'plenty_id' => 'setPlentyId',
        'lang' => 'setLang',
        'name' => 'setName',
        'description' => 'setDescription',
        'description2' => 'setDescription2',
        'short_description' => 'setShortDescription',
        'meta_keywords' => 'setMetaKeywords',
        'meta_description' => 'setMetaDescription',
        'name_url' => 'setNameUrl',
        'meta_title' => 'setMetaTitle',
        'image' => 'setImage',
        'image2' => 'setImage2',
        'image_path' => 'setImagePath',
        'image2_path' => 'setImage2Path',
        'preview_url' => 'setPreviewUrl',
        'position' => 'setPosition',
        'item_list_view' => 'setItemListView',
        'single_item_view' => 'setSingleItemView',
        'page_view' => 'setPageView',
        'fulltext' => 'setFulltext',
        'meta_robots' => 'setMetaRobots',
        'canonical_link' => 'setCanonicalLink',
        'updated_at' => 'setUpdatedAt',
        'updated_by' => 'setUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_id' => 'getCategoryId',
        'plenty_id' => 'getPlentyId',
        'lang' => 'getLang',
        'name' => 'getName',
        'description' => 'getDescription',
        'description2' => 'getDescription2',
        'short_description' => 'getShortDescription',
        'meta_keywords' => 'getMetaKeywords',
        'meta_description' => 'getMetaDescription',
        'name_url' => 'getNameUrl',
        'meta_title' => 'getMetaTitle',
        'image' => 'getImage',
        'image2' => 'getImage2',
        'image_path' => 'getImagePath',
        'image2_path' => 'getImage2Path',
        'preview_url' => 'getPreviewUrl',
        'position' => 'getPosition',
        'item_list_view' => 'getItemListView',
        'single_item_view' => 'getSingleItemView',
        'page_view' => 'getPageView',
        'fulltext' => 'getFulltext',
        'meta_robots' => 'getMetaRobots',
        'canonical_link' => 'getCanonicalLink',
        'updated_at' => 'getUpdatedAt',
        'updated_by' => 'getUpdatedBy'
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
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['plenty_id'] = isset($data['plenty_id']) ? $data['plenty_id'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['description2'] = isset($data['description2']) ? $data['description2'] : null;
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['name_url'] = isset($data['name_url']) ? $data['name_url'] : null;
        $this->container['meta_title'] = isset($data['meta_title']) ? $data['meta_title'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['image2'] = isset($data['image2']) ? $data['image2'] : null;
        $this->container['image_path'] = isset($data['image_path']) ? $data['image_path'] : null;
        $this->container['image2_path'] = isset($data['image2_path']) ? $data['image2_path'] : null;
        $this->container['preview_url'] = isset($data['preview_url']) ? $data['preview_url'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['item_list_view'] = isset($data['item_list_view']) ? $data['item_list_view'] : null;
        $this->container['single_item_view'] = isset($data['single_item_view']) ? $data['single_item_view'] : null;
        $this->container['page_view'] = isset($data['page_view']) ? $data['page_view'] : null;
        $this->container['fulltext'] = isset($data['fulltext']) ? $data['fulltext'] : null;
        $this->container['meta_robots'] = isset($data['meta_robots']) ? $data['meta_robots'] : null;
        $this->container['canonical_link'] = isset($data['canonical_link']) ? $data['canonical_link'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
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
     * Gets category_id
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int|null $category_id The unique ID of the category these category details belong to
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets plenty_id
     *
     * @return int|null
     */
    public function getPlentyId()
    {
        return $this->container['plenty_id'];
    }

    /**
     * Sets plenty_id
     *
     * @param int|null $plenty_id The unique plenty ID of the client (store) in which the category is visible. If a subcategory is linked to a client, its parent categories will be linked to this client as well.
     *
     * @return $this
     */
    public function setPlentyId($plenty_id)
    {
        $this->container['plenty_id'] = $plenty_id;

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
     * @param string|null $lang The <a href=\"https://developers.plentymarkets.com/rest-doc/introduction#languages\" target=\"_blank\">language</a> of the category
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
     * @param string|null $name The name of the category. The same category name can be used more than once in different categories or on different category levels. However, category names must be unique within the same category or level.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $description The category text. The description is inserted into the online store using template variables.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description2
     *
     * @return string|null
     */
    public function getDescription2()
    {
        return $this->container['description2'];
    }

    /**
     * Sets description2
     *
     * @param string|null $description2 The category text 2. The description 2 is inserted into the online store using template variables.
     *
     * @return $this
     */
    public function setDescription2($description2)
    {
        $this->container['description2'] = $description2;

        return $this;
    }

    /**
     * Gets short_description
     *
     * @return string|null
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     *
     * @param string|null $short_description The short description of the category. The short description can be inserted into the store's design using template variables.
     *
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->container['short_description'] = $short_description;

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
     * @param string|null $meta_keywords HTML meta keywords to tag the category for search engines. More than one keyword can be separated by commas.
     *
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

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
     * @param string|null $meta_description The meta description of the category. This description is analysed by search engines and displayed in search results. This text should be treated as an advertising text to maximise click-through from search engine result pages. Current recommended limit is 156 characters.
     *
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets name_url
     *
     * @return string|null
     */
    public function getNameUrl()
    {
        return $this->container['name_url'];
    }

    /**
     * Sets name_url
     *
     * @param string|null $name_url The category name to be used for the category's URL. The same URL name can be used more than once in different categories or on different category levels. However, URL names must be unique within the same category or level. The URL name should not be changed once the category is indexed by search engines. If no URL name is specified, the name will automatically be used as the URL name when the category is created.<br />Important: Name should contain ASCII code only and no special characters. The following character strings may not be used as prefixes to URL names: a-, b-, c-, f-, fa-, p-, t-. These prefixes will be removed automatically. For instance, a-class will be changed to class automatically. However, the URL name aclass can be used for a category named A-class.
     *
     * @return $this
     */
    public function setNameUrl($name_url)
    {
        $this->container['name_url'] = $name_url;

        return $this;
    }

    /**
     * Gets meta_title
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     *
     * @param string|null $meta_title This will be displayed as the title of a tab in the web browser and as a search result in search engines. If this is left blank, the category name will be used as the title. Current recommended limit is 50 characters. Longer titles will be cut off.
     *
     * @return $this
     */
    public function setMetaTitle($meta_title)
    {
        $this->container['meta_title'] = $meta_title;

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
     * @param string|null $image The ID to the image1 of the category.
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets image2
     *
     * @return string|null
     */
    public function getImage2()
    {
        return $this->container['image2'];
    }

    /**
     * Sets image2
     *
     * @param string|null $image2 The ID to the image2 of the category.
     *
     * @return $this
     */
    public function setImage2($image2)
    {
        $this->container['image2'] = $image2;

        return $this;
    }

    /**
     * Gets image_path
     *
     * @return string|null
     */
    public function getImagePath()
    {
        return $this->container['image_path'];
    }

    /**
     * Sets image_path
     *
     * @param string|null $image_path The path to the image1 of the category.
     *
     * @return $this
     */
    public function setImagePath($image_path)
    {
        $this->container['image_path'] = $image_path;

        return $this;
    }

    /**
     * Gets image2_path
     *
     * @return string|null
     */
    public function getImage2Path()
    {
        return $this->container['image2_path'];
    }

    /**
     * Sets image2_path
     *
     * @param string|null $image2_path The path to the image2 of the category.
     *
     * @return $this
     */
    public function setImage2Path($image2_path)
    {
        $this->container['image2_path'] = $image2_path;

        return $this;
    }

    /**
     * Gets preview_url
     *
     * @return string|null
     */
    public function getPreviewUrl()
    {
        return $this->container['preview_url'];
    }

    /**
     * Sets preview_url
     *
     * @param string|null $preview_url The category's URL.
     *
     * @return $this
     */
    public function setPreviewUrl($preview_url)
    {
        $this->container['preview_url'] = $preview_url;

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
     * @param int|null $position The position of the category within a category level.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets item_list_view
     *
     * @return string|null
     */
    public function getItemListView()
    {
        return $this->container['item_list_view'];
    }

    /**
     * Sets item_list_view
     *
     * @param string|null $item_list_view The template the category is linked to for the category overview. The template determines what the category overview will look like for this category. This option is available for categories of the type <strong>Item</strong> only. Possible values: ItemViewCategoriesList, ItemViewCategoriesList2 to ItemViewCategoriesList10.
     *
     * @return $this
     */
    public function setItemListView($item_list_view)
    {
        $this->container['item_list_view'] = $item_list_view;

        return $this;
    }

    /**
     * Gets single_item_view
     *
     * @return string|null
     */
    public function getSingleItemView()
    {
        return $this->container['single_item_view'];
    }

    /**
     * Sets single_item_view
     *
     * @param string|null $single_item_view The template the category is linked to for the single item view. The template determines the appearance of the single item design for this category. This option is available for categories of the type <strong>Item</strong> only. Possible values: ItemViewSingleItem, ItemViewSingleItem2 to ItemViewSingleItem5.
     *
     * @return $this
     */
    public function setSingleItemView($single_item_view)
    {
        $this->container['single_item_view'] = $single_item_view;

        return $this;
    }

    /**
     * Gets page_view
     *
     * @return string|null
     */
    public function getPageView()
    {
        return $this->container['page_view'];
    }

    /**
     * Sets page_view
     *
     * @param string|null $page_view 
     *
     * @return $this
     */
    public function setPageView($page_view)
    {
        $this->container['page_view'] = $page_view;

        return $this;
    }

    /**
     * Gets fulltext
     *
     * @return bool|null
     */
    public function getFulltext()
    {
        return $this->container['fulltext'];
    }

    /**
     * Sets fulltext
     *
     * @param bool|null $fulltext Flag that indicates if the complete category text, i.e. the complete description, will be searched.<ul><li>Y = Complete text will be searched.</li><li>N = Text will not be searched completely.</li></ul>
     *
     * @return $this
     */
    public function setFulltext($fulltext)
    {
        $this->container['fulltext'] = $fulltext;

        return $this;
    }

    /**
     * Gets meta_robots
     *
     * @return string|null
     */
    public function getMetaRobots()
    {
        return $this->container['meta_robots'];
    }

    /**
     * Sets meta_robots
     *
     * @param string|null $meta_robots Values from the meta element Robots are analyzed by Web crawlers. These values tell the crawler what it should do with the page and with the links on the page.<ul><li>all = Include this category in the search engine index and follow the links on the page.</li><li>index = Include in the search engine index.</li><li>nofollow = Do not follow the links on the page.</li><li>noindex = Do not include in the search engine index.</li><li>nofollow, noindex = Do not follow the links and do not include the category in the search engine index.</li></ul>
     *
     * @return $this
     */
    public function setMetaRobots($meta_robots)
    {
        $this->container['meta_robots'] = $meta_robots;

        return $this;
    }

    /**
     * Gets canonical_link
     *
     * @return string|null
     */
    public function getCanonicalLink()
    {
        return $this->container['canonical_link'];
    }

    /**
     * Sets canonical_link
     *
     * @param string|null $canonical_link The URL of any category that contains the same content. This will avoid duplicate content.
     *
     * @return $this
     */
    public function setCanonicalLink($canonical_link)
    {
        $this->container['canonical_link'] = $canonical_link;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at The time the category details were last updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param string|null $updated_by The user who last updated the category details
     *
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

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


