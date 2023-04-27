<?php
/**
 * AlipayOpenMiniWidgetGoodsModifyModel
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
 * AlipayOpenMiniWidgetGoodsModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniWidgetGoodsModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniWidgetGoodsModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buyingUrl' => 'string',
        'goodsBrand' => 'string',
        'goodsComment' => 'string',
        'goodsDescriptionLabel' => 'string',
        'goodsId' => 'string',
        'goodsLabel' => 'string',
        'goodsName' => 'string',
        'goodsType' => 'string',
        'mainPicUrl' => 'string',
        'needPublicPromo' => 'bool',
        'orderNumber' => 'int',
        'originalPrice' => 'string',
        'publishCities' => 'string',
        'sellPrice' => 'string',
        'sellTagList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buyingUrl' => null,
        'goodsBrand' => null,
        'goodsComment' => null,
        'goodsDescriptionLabel' => null,
        'goodsId' => null,
        'goodsLabel' => null,
        'goodsName' => null,
        'goodsType' => null,
        'mainPicUrl' => null,
        'needPublicPromo' => null,
        'orderNumber' => null,
        'originalPrice' => null,
        'publishCities' => null,
        'sellPrice' => null,
        'sellTagList' => null
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
        'buyingUrl' => 'buying_url',
        'goodsBrand' => 'goods_brand',
        'goodsComment' => 'goods_comment',
        'goodsDescriptionLabel' => 'goods_description_label',
        'goodsId' => 'goods_id',
        'goodsLabel' => 'goods_label',
        'goodsName' => 'goods_name',
        'goodsType' => 'goods_type',
        'mainPicUrl' => 'main_pic_url',
        'needPublicPromo' => 'need_public_promo',
        'orderNumber' => 'order_number',
        'originalPrice' => 'original_price',
        'publishCities' => 'publish_cities',
        'sellPrice' => 'sell_price',
        'sellTagList' => 'sell_tag_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyingUrl' => 'setBuyingUrl',
        'goodsBrand' => 'setGoodsBrand',
        'goodsComment' => 'setGoodsComment',
        'goodsDescriptionLabel' => 'setGoodsDescriptionLabel',
        'goodsId' => 'setGoodsId',
        'goodsLabel' => 'setGoodsLabel',
        'goodsName' => 'setGoodsName',
        'goodsType' => 'setGoodsType',
        'mainPicUrl' => 'setMainPicUrl',
        'needPublicPromo' => 'setNeedPublicPromo',
        'orderNumber' => 'setOrderNumber',
        'originalPrice' => 'setOriginalPrice',
        'publishCities' => 'setPublishCities',
        'sellPrice' => 'setSellPrice',
        'sellTagList' => 'setSellTagList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyingUrl' => 'getBuyingUrl',
        'goodsBrand' => 'getGoodsBrand',
        'goodsComment' => 'getGoodsComment',
        'goodsDescriptionLabel' => 'getGoodsDescriptionLabel',
        'goodsId' => 'getGoodsId',
        'goodsLabel' => 'getGoodsLabel',
        'goodsName' => 'getGoodsName',
        'goodsType' => 'getGoodsType',
        'mainPicUrl' => 'getMainPicUrl',
        'needPublicPromo' => 'getNeedPublicPromo',
        'orderNumber' => 'getOrderNumber',
        'originalPrice' => 'getOriginalPrice',
        'publishCities' => 'getPublishCities',
        'sellPrice' => 'getSellPrice',
        'sellTagList' => 'getSellTagList'
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
        $this->container['buyingUrl'] = $data['buyingUrl'] ?? null;
        $this->container['goodsBrand'] = $data['goodsBrand'] ?? null;
        $this->container['goodsComment'] = $data['goodsComment'] ?? null;
        $this->container['goodsDescriptionLabel'] = $data['goodsDescriptionLabel'] ?? null;
        $this->container['goodsId'] = $data['goodsId'] ?? null;
        $this->container['goodsLabel'] = $data['goodsLabel'] ?? null;
        $this->container['goodsName'] = $data['goodsName'] ?? null;
        $this->container['goodsType'] = $data['goodsType'] ?? null;
        $this->container['mainPicUrl'] = $data['mainPicUrl'] ?? null;
        $this->container['needPublicPromo'] = $data['needPublicPromo'] ?? null;
        $this->container['orderNumber'] = $data['orderNumber'] ?? null;
        $this->container['originalPrice'] = $data['originalPrice'] ?? null;
        $this->container['publishCities'] = $data['publishCities'] ?? null;
        $this->container['sellPrice'] = $data['sellPrice'] ?? null;
        $this->container['sellTagList'] = $data['sellTagList'] ?? null;
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
     * Gets buyingUrl
     *
     * @return string|null
     */
    public function getBuyingUrl()
    {
        return $this->container['buyingUrl'];
    }

    /**
     * Sets buyingUrl
     *
     * @param string|null $buyingUrl 需要修改的商品小程序购买链接
     *
     * @return self
     */
    public function setBuyingUrl($buyingUrl)
    {
        $this->container['buyingUrl'] = $buyingUrl;

        return $this;
    }

    /**
     * Gets goodsBrand
     *
     * @return string|null
     */
    public function getGoodsBrand()
    {
        return $this->container['goodsBrand'];
    }

    /**
     * Sets goodsBrand
     *
     * @param string|null $goodsBrand 需要修改的商品品牌
     *
     * @return self
     */
    public function setGoodsBrand($goodsBrand)
    {
        $this->container['goodsBrand'] = $goodsBrand;

        return $this;
    }

    /**
     * Gets goodsComment
     *
     * @return string|null
     */
    public function getGoodsComment()
    {
        return $this->container['goodsComment'];
    }

    /**
     * Sets goodsComment
     *
     * @param string|null $goodsComment 需要修改的商品辅助说明文案
     *
     * @return self
     */
    public function setGoodsComment($goodsComment)
    {
        $this->container['goodsComment'] = $goodsComment;

        return $this;
    }

    /**
     * Gets goodsDescriptionLabel
     *
     * @return string|null
     */
    public function getGoodsDescriptionLabel()
    {
        return $this->container['goodsDescriptionLabel'];
    }

    /**
     * Sets goodsDescriptionLabel
     *
     * @param string|null $goodsDescriptionLabel 需要修改的商品说明标签（如-随心退）
     *
     * @return self
     */
    public function setGoodsDescriptionLabel($goodsDescriptionLabel)
    {
        $this->container['goodsDescriptionLabel'] = $goodsDescriptionLabel;

        return $this;
    }

    /**
     * Gets goodsId
     *
     * @return string|null
     */
    public function getGoodsId()
    {
        return $this->container['goodsId'];
    }

    /**
     * Sets goodsId
     *
     * @param string|null $goodsId 商品的唯一标识，根据该字段修改商品
     *
     * @return self
     */
    public function setGoodsId($goodsId)
    {
        $this->container['goodsId'] = $goodsId;

        return $this;
    }

    /**
     * Gets goodsLabel
     *
     * @return string|null
     */
    public function getGoodsLabel()
    {
        return $this->container['goodsLabel'];
    }

    /**
     * Sets goodsLabel
     *
     * @param string|null $goodsLabel 需要修改的商品营销标签（如-限量特价），每个商品仅支持一个营销标签
     *
     * @return self
     */
    public function setGoodsLabel($goodsLabel)
    {
        $this->container['goodsLabel'] = $goodsLabel;

        return $this;
    }

    /**
     * Gets goodsName
     *
     * @return string|null
     */
    public function getGoodsName()
    {
        return $this->container['goodsName'];
    }

    /**
     * Sets goodsName
     *
     * @param string|null $goodsName 需要修改的商品名称
     *
     * @return self
     */
    public function setGoodsName($goodsName)
    {
        $this->container['goodsName'] = $goodsName;

        return $this;
    }

    /**
     * Gets goodsType
     *
     * @return string|null
     */
    public function getGoodsType()
    {
        return $this->container['goodsType'];
    }

    /**
     * Sets goodsType
     *
     * @param string|null $goodsType 需要修改的商品所属品类
     *
     * @return self
     */
    public function setGoodsType($goodsType)
    {
        $this->container['goodsType'] = $goodsType;

        return $this;
    }

    /**
     * Gets mainPicUrl
     *
     * @return string|null
     */
    public function getMainPicUrl()
    {
        return $this->container['mainPicUrl'];
    }

    /**
     * Sets mainPicUrl
     *
     * @param string|null $mainPicUrl 需要修改的商品主图片地址
     *
     * @return self
     */
    public function setMainPicUrl($mainPicUrl)
    {
        $this->container['mainPicUrl'] = $mainPicUrl;

        return $this;
    }

    /**
     * Gets needPublicPromo
     *
     * @return bool|null
     */
    public function getNeedPublicPromo()
    {
        return $this->container['needPublicPromo'];
    }

    /**
     * Sets needPublicPromo
     *
     * @param bool|null $needPublicPromo 是否需要进行公域推广
     *
     * @return self
     */
    public function setNeedPublicPromo($needPublicPromo)
    {
        $this->container['needPublicPromo'] = $needPublicPromo;

        return $this;
    }

    /**
     * Gets orderNumber
     *
     * @return int|null
     */
    public function getOrderNumber()
    {
        return $this->container['orderNumber'];
    }

    /**
     * Sets orderNumber
     *
     * @param int|null $orderNumber 需要修改的商品排序，自然整数, 数字越小越靠前
     *
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        $this->container['orderNumber'] = $orderNumber;

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
     * @param string|null $originalPrice 需要修改的商品原价，单位\"元\"，传入数字，不需要传入\"元\"
     *
     * @return self
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->container['originalPrice'] = $originalPrice;

        return $this;
    }

    /**
     * Gets publishCities
     *
     * @return string|null
     */
    public function getPublishCities()
    {
        return $this->container['publishCities'];
    }

    /**
     * Sets publishCities
     *
     * @param string|null $publishCities 需要修改的商品投放城市的列表，详见https://www.mca.gov.cn/article/sj/xzqh/2020/2020/202007170301.html，有多个用英文,分隔。如果没有限制则不传入
     *
     * @return self
     */
    public function setPublishCities($publishCities)
    {
        $this->container['publishCities'] = $publishCities;

        return $this;
    }

    /**
     * Gets sellPrice
     *
     * @return string|null
     */
    public function getSellPrice()
    {
        return $this->container['sellPrice'];
    }

    /**
     * Sets sellPrice
     *
     * @param string|null $sellPrice 需要修改的商品售价，位\"元\"，传入数字，不需要传入\"元\"
     *
     * @return self
     */
    public function setSellPrice($sellPrice)
    {
        $this->container['sellPrice'] = $sellPrice;

        return $this;
    }

    /**
     * Gets sellTagList
     *
     * @return string[]|null
     */
    public function getSellTagList()
    {
        return $this->container['sellTagList'];
    }

    /**
     * Sets sellTagList
     *
     * @param string[]|null $sellTagList 需要修改的商品卖点标签
     *
     * @return self
     */
    public function setSellTagList($sellTagList)
    {
        $this->container['sellTagList'] = $sellTagList;

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


