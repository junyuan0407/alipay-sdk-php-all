<?php
/**
 * AlipayOpenMiniWidgetDataSyncModel
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
 * AlipayOpenMiniWidgetDataSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniWidgetDataSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniWidgetDataSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityList' => '\Alipay\OpenAPISDK\Model\WidgetActivityInfo[]',
        'dataType' => 'string',
        'goodsList' => '\Alipay\OpenAPISDK\Model\WidgetGoodsInfo[]',
        'miniAppId' => 'string',
        'pid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activityList' => null,
        'dataType' => null,
        'goodsList' => null,
        'miniAppId' => null,
        'pid' => null
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
        'activityList' => 'activity_list',
        'dataType' => 'data_type',
        'goodsList' => 'goods_list',
        'miniAppId' => 'mini_app_id',
        'pid' => 'pid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityList' => 'setActivityList',
        'dataType' => 'setDataType',
        'goodsList' => 'setGoodsList',
        'miniAppId' => 'setMiniAppId',
        'pid' => 'setPid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityList' => 'getActivityList',
        'dataType' => 'getDataType',
        'goodsList' => 'getGoodsList',
        'miniAppId' => 'getMiniAppId',
        'pid' => 'getPid'
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
        $this->container['activityList'] = $data['activityList'] ?? null;
        $this->container['dataType'] = $data['dataType'] ?? null;
        $this->container['goodsList'] = $data['goodsList'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['pid'] = $data['pid'] ?? null;
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
     * Gets activityList
     *
     * @return \Alipay\OpenAPISDK\Model\WidgetActivityInfo[]|null
     */
    public function getActivityList()
    {
        return $this->container['activityList'];
    }

    /**
     * Sets activityList
     *
     * @param \Alipay\OpenAPISDK\Model\WidgetActivityInfo[]|null $activityList 活动信息列表
     *
     * @return self
     */
    public function setActivityList($activityList)
    {
        $this->container['activityList'] = $activityList;

        return $this;
    }

    /**
     * Gets dataType
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
     * Sets dataType
     *
     * @param string|null $dataType 数据类型，可选值：ACTIVITY(活动数据)、GOODS(商品数据)
     *
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;

        return $this;
    }

    /**
     * Gets goodsList
     *
     * @return \Alipay\OpenAPISDK\Model\WidgetGoodsInfo[]|null
     */
    public function getGoodsList()
    {
        return $this->container['goodsList'];
    }

    /**
     * Sets goodsList
     *
     * @param \Alipay\OpenAPISDK\Model\WidgetGoodsInfo[]|null $goodsList 商品信息列表
     *
     * @return self
     */
    public function setGoodsList($goodsList)
    {
        $this->container['goodsList'] = $goodsList;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 商家小程序ID
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return string|null
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param string|null $pid 小程序背后的商家，和mini_app_id要求对应
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

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


