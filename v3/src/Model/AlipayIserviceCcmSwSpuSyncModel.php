<?php
/**
 * AlipayIserviceCcmSwSpuSyncModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-04-19
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * AlipayIserviceCcmSwSpuSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmSwSpuSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmSwSpuSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attribute' => '\Alipay\OpenAPISDK\Model\SpuAttribute[]',
        'brand' => 'string',
        'category' => 'string',
        'description' => 'string',
        'icon' => 'string',
        'isDelete' => 'string',
        'libraryId' => 'int',
        'libraryName' => 'string',
        'linkUrl' => 'string',
        'originalPrice' => 'string',
        'price' => 'string',
        'spuId' => 'string',
        'status' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attribute' => null,
        'brand' => null,
        'category' => null,
        'description' => null,
        'icon' => null,
        'isDelete' => null,
        'libraryId' => null,
        'libraryName' => null,
        'linkUrl' => null,
        'originalPrice' => null,
        'price' => null,
        'spuId' => null,
        'status' => null,
        'title' => null
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
        'attribute' => 'attribute',
        'brand' => 'brand',
        'category' => 'category',
        'description' => 'description',
        'icon' => 'icon',
        'isDelete' => 'is_delete',
        'libraryId' => 'library_id',
        'libraryName' => 'library_name',
        'linkUrl' => 'link_url',
        'originalPrice' => 'original_price',
        'price' => 'price',
        'spuId' => 'spu_id',
        'status' => 'status',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute' => 'setAttribute',
        'brand' => 'setBrand',
        'category' => 'setCategory',
        'description' => 'setDescription',
        'icon' => 'setIcon',
        'isDelete' => 'setIsDelete',
        'libraryId' => 'setLibraryId',
        'libraryName' => 'setLibraryName',
        'linkUrl' => 'setLinkUrl',
        'originalPrice' => 'setOriginalPrice',
        'price' => 'setPrice',
        'spuId' => 'setSpuId',
        'status' => 'setStatus',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute' => 'getAttribute',
        'brand' => 'getBrand',
        'category' => 'getCategory',
        'description' => 'getDescription',
        'icon' => 'getIcon',
        'isDelete' => 'getIsDelete',
        'libraryId' => 'getLibraryId',
        'libraryName' => 'getLibraryName',
        'linkUrl' => 'getLinkUrl',
        'originalPrice' => 'getOriginalPrice',
        'price' => 'getPrice',
        'spuId' => 'getSpuId',
        'status' => 'getStatus',
        'title' => 'getTitle'
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
        $this->container['attribute'] = $data['attribute'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['isDelete'] = $data['isDelete'] ?? null;
        $this->container['libraryId'] = $data['libraryId'] ?? null;
        $this->container['libraryName'] = $data['libraryName'] ?? null;
        $this->container['linkUrl'] = $data['linkUrl'] ?? null;
        $this->container['originalPrice'] = $data['originalPrice'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['spuId'] = $data['spuId'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
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
     * Gets attribute
     *
     * @return \Alipay\OpenAPISDK\Model\SpuAttribute[]|null
     */
    public function getAttribute()
    {
        return $this->container['attribute'];
    }

    /**
     * Sets attribute
     *
     * @param \Alipay\OpenAPISDK\Model\SpuAttribute[]|null $attribute 商品属性列表
     *
     * @return self
     */
    public function setAttribute($attribute)
    {
        $this->container['attribute'] = $attribute;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand 商品品牌
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category 商品类目，用于商品库中分类
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * @param string|null $description 商品描述
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon 商品图片链接 特殊可选规则：is_delete=false的情况下必填
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets isDelete
     *
     * @return string|null
     */
    public function getIsDelete()
    {
        return $this->container['isDelete'];
    }

    /**
     * Sets isDelete
     *
     * @param string|null $isDelete 默认为false，为true，表示删除知识点
     *
     * @return self
     */
    public function setIsDelete($isDelete)
    {
        $this->container['isDelete'] = $isDelete;

        return $this;
    }

    /**
     * Gets libraryId
     *
     * @return int|null
     */
    public function getLibraryId()
    {
        return $this->container['libraryId'];
    }

    /**
     * Sets libraryId
     *
     * @param int|null $libraryId 知识库id
     *
     * @return self
     */
    public function setLibraryId($libraryId)
    {
        $this->container['libraryId'] = $libraryId;

        return $this;
    }

    /**
     * Gets libraryName
     *
     * @return string|null
     */
    public function getLibraryName()
    {
        return $this->container['libraryName'];
    }

    /**
     * Sets libraryName
     *
     * @param string|null $libraryName 知识库名称
     *
     * @return self
     */
    public function setLibraryName($libraryName)
    {
        $this->container['libraryName'] = $libraryName;

        return $this;
    }

    /**
     * Gets linkUrl
     *
     * @return string|null
     */
    public function getLinkUrl()
    {
        return $this->container['linkUrl'];
    }

    /**
     * Sets linkUrl
     *
     * @param string|null $linkUrl 商品链接 特殊可选规则：is_delete=false的情况下必填
     *
     * @return self
     */
    public function setLinkUrl($linkUrl)
    {
        $this->container['linkUrl'] = $linkUrl;

        return $this;
    }

    /**
     * Gets originalPrice
     *
     * @return string|null
     */
    public function getOriginalPrice()
    {
        return $this->container['originalPrice'];
    }

    /**
     * Sets originalPrice
     *
     * @param string|null $originalPrice 商品原价
     *
     * @return self
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->container['originalPrice'] = $originalPrice;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price 商品售价 特殊可选规则：is_delete=false的情况下必填
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets spuId
     *
     * @return string|null
     */
    public function getSpuId()
    {
        return $this->container['spuId'];
    }

    /**
     * Sets spuId
     *
     * @param string|null $spuId 商品ID
     *
     * @return self
     */
    public function setSpuId($spuId)
    {
        $this->container['spuId'] = $spuId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 商品状态：AVAILABLE 表示可售卖,SOLD_OUT为售罄/不可卖，默认可售卖
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 商品名称 特殊可选规则：is_delete=false的情况下必填
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


