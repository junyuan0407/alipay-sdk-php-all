<?php
/**
 * SkuModifyInfo
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
 * SkuModifyInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SkuModifyInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuModifyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inventory' => 'int',
        'materialList' => '\Alipay\OpenAPISDK\Model\MaterialModifyInfo[]',
        'originalPrice' => 'int',
        'price' => 'int',
        'propertyList' => '\Alipay\OpenAPISDK\Model\ItemSkuPropertyInfo[]',
        'skuId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inventory' => null,
        'materialList' => null,
        'originalPrice' => null,
        'price' => null,
        'propertyList' => null,
        'skuId' => null
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
        'inventory' => 'inventory',
        'materialList' => 'material_list',
        'originalPrice' => 'original_price',
        'price' => 'price',
        'propertyList' => 'property_list',
        'skuId' => 'sku_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory' => 'setInventory',
        'materialList' => 'setMaterialList',
        'originalPrice' => 'setOriginalPrice',
        'price' => 'setPrice',
        'propertyList' => 'setPropertyList',
        'skuId' => 'setSkuId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory' => 'getInventory',
        'materialList' => 'getMaterialList',
        'originalPrice' => 'getOriginalPrice',
        'price' => 'getPrice',
        'propertyList' => 'getPropertyList',
        'skuId' => 'getSkuId'
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
        $this->container['inventory'] = $data['inventory'] ?? null;
        $this->container['materialList'] = $data['materialList'] ?? null;
        $this->container['originalPrice'] = $data['originalPrice'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['propertyList'] = $data['propertyList'] ?? null;
        $this->container['skuId'] = $data['skuId'] ?? null;
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
     * Gets inventory
     *
     * @return int|null
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param int|null $inventory 库存
     *
     * @return self
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets materialList
     *
     * @return \Alipay\OpenAPISDK\Model\MaterialModifyInfo[]|null
     */
    public function getMaterialList()
    {
        return $this->container['materialList'];
    }

    /**
     * Sets materialList
     *
     * @param \Alipay\OpenAPISDK\Model\MaterialModifyInfo[]|null $materialList SKU素材列表（会和SKU已存在素材做差异化比较后做增删改操作）
     *
     * @return self
     */
    public function setMaterialList($materialList)
    {
        $this->container['materialList'] = $materialList;

        return $this;
    }

    /**
     * Gets originalPrice
     *
     * @return int|null
     */
    public function getOriginalPrice()
    {
        return $this->container['originalPrice'];
    }

    /**
     * Sets originalPrice
     *
     * @param int|null $originalPrice 标价，单位分
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
     * @return int|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int|null $price 售价，单位分
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets propertyList
     *
     * @return \Alipay\OpenAPISDK\Model\ItemSkuPropertyInfo[]|null
     */
    public function getPropertyList()
    {
        return $this->container['propertyList'];
    }

    /**
     * Sets propertyList
     *
     * @param \Alipay\OpenAPISDK\Model\ItemSkuPropertyInfo[]|null $propertyList SKU属性列表（覆盖SKU已存在属性）
     *
     * @return self
     */
    public function setPropertyList($propertyList)
    {
        $this->container['propertyList'] = $propertyList;

        return $this;
    }

    /**
     * Gets skuId
     *
     * @return string|null
     */
    public function getSkuId()
    {
        return $this->container['skuId'];
    }

    /**
     * Sets skuId
     *
     * @param string|null $skuId SKU ID（传空表示新增对应SKU）
     *
     * @return self
     */
    public function setSkuId($skuId)
    {
        $this->container['skuId'] = $skuId;

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


