<?php
/**
 * GoodsDetail
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
 * GoodsDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GoodsDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GoodsDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayGoodsId' => 'string',
        'body' => 'string',
        'categoriesTree' => 'string',
        'goodsCategory' => 'string',
        'goodsId' => 'string',
        'goodsName' => 'string',
        'price' => 'string',
        'quantity' => 'int',
        'showUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayGoodsId' => null,
        'body' => null,
        'categoriesTree' => null,
        'goodsCategory' => null,
        'goodsId' => null,
        'goodsName' => null,
        'price' => null,
        'quantity' => null,
        'showUrl' => null
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
        'alipayGoodsId' => 'alipay_goods_id',
        'body' => 'body',
        'categoriesTree' => 'categories_tree',
        'goodsCategory' => 'goods_category',
        'goodsId' => 'goods_id',
        'goodsName' => 'goods_name',
        'price' => 'price',
        'quantity' => 'quantity',
        'showUrl' => 'show_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayGoodsId' => 'setAlipayGoodsId',
        'body' => 'setBody',
        'categoriesTree' => 'setCategoriesTree',
        'goodsCategory' => 'setGoodsCategory',
        'goodsId' => 'setGoodsId',
        'goodsName' => 'setGoodsName',
        'price' => 'setPrice',
        'quantity' => 'setQuantity',
        'showUrl' => 'setShowUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayGoodsId' => 'getAlipayGoodsId',
        'body' => 'getBody',
        'categoriesTree' => 'getCategoriesTree',
        'goodsCategory' => 'getGoodsCategory',
        'goodsId' => 'getGoodsId',
        'goodsName' => 'getGoodsName',
        'price' => 'getPrice',
        'quantity' => 'getQuantity',
        'showUrl' => 'getShowUrl'
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
        $this->container['alipayGoodsId'] = $data['alipayGoodsId'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['categoriesTree'] = $data['categoriesTree'] ?? null;
        $this->container['goodsCategory'] = $data['goodsCategory'] ?? null;
        $this->container['goodsId'] = $data['goodsId'] ?? null;
        $this->container['goodsName'] = $data['goodsName'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['showUrl'] = $data['showUrl'] ?? null;
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
     * Gets alipayGoodsId
     *
     * @return string|null
     */
    public function getAlipayGoodsId()
    {
        return $this->container['alipayGoodsId'];
    }

    /**
     * Sets alipayGoodsId
     *
     * @param string|null $alipayGoodsId 支付宝定义的统一商品编号
     *
     * @return self
     */
    public function setAlipayGoodsId($alipayGoodsId)
    {
        $this->container['alipayGoodsId'] = $alipayGoodsId;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body 商品描述信息
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets categoriesTree
     *
     * @return string|null
     */
    public function getCategoriesTree()
    {
        return $this->container['categoriesTree'];
    }

    /**
     * Sets categoriesTree
     *
     * @param string|null $categoriesTree 商品类目树，从商品类目根节点到叶子节点的类目id组成，类目id值使用|分割
     *
     * @return self
     */
    public function setCategoriesTree($categoriesTree)
    {
        $this->container['categoriesTree'] = $categoriesTree;

        return $this;
    }

    /**
     * Gets goodsCategory
     *
     * @return string|null
     */
    public function getGoodsCategory()
    {
        return $this->container['goodsCategory'];
    }

    /**
     * Sets goodsCategory
     *
     * @param string|null $goodsCategory 商品类目
     *
     * @return self
     */
    public function setGoodsCategory($goodsCategory)
    {
        $this->container['goodsCategory'] = $goodsCategory;

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
     * @param string|null $goodsId 商品的编号
     *
     * @return self
     */
    public function setGoodsId($goodsId)
    {
        $this->container['goodsId'] = $goodsId;

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
     * @param string|null $goodsName 商品名称
     *
     * @return self
     */
    public function setGoodsName($goodsName)
    {
        $this->container['goodsName'] = $goodsName;

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
     * @param string|null $price 商品单价，单位为元
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity 商品数量，支持小数，精确到小数点后两位
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets showUrl
     *
     * @return string|null
     */
    public function getShowUrl()
    {
        return $this->container['showUrl'];
    }

    /**
     * Sets showUrl
     *
     * @param string|null $showUrl 商品的展示地址
     *
     * @return self
     */
    public function setShowUrl($showUrl)
    {
        $this->container['showUrl'] = $showUrl;

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

