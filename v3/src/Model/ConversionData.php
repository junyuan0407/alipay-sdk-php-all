<?php
/**
 * ConversionData
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
 * ConversionData Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConversionData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizNo' => 'string',
        'callbackExtInfo' => 'string',
        'conversionAmount' => 'string',
        'conversionId' => 'string',
        'conversionTime' => 'int',
        'conversionType' => 'string',
        'creativeId' => 'string',
        'dataId' => 'string',
        'dataSrcType' => 'string',
        'groupId' => 'string',
        'planId' => 'string',
        'principalId' => 'string',
        'principalTag' => 'string',
        'propertyList' => '\Alipay\OpenAPISDK\Model\ConversionProperty[]',
        'source' => 'string',
        'targetId' => 'string',
        'targetType' => 'string',
        'uuid' => 'string',
        'uuidType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizNo' => null,
        'callbackExtInfo' => null,
        'conversionAmount' => null,
        'conversionId' => null,
        'conversionTime' => null,
        'conversionType' => null,
        'creativeId' => null,
        'dataId' => null,
        'dataSrcType' => null,
        'groupId' => null,
        'planId' => null,
        'principalId' => null,
        'principalTag' => null,
        'propertyList' => null,
        'source' => null,
        'targetId' => null,
        'targetType' => null,
        'uuid' => null,
        'uuidType' => null
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
        'bizNo' => 'biz_no',
        'callbackExtInfo' => 'callback_ext_info',
        'conversionAmount' => 'conversion_amount',
        'conversionId' => 'conversion_id',
        'conversionTime' => 'conversion_time',
        'conversionType' => 'conversion_type',
        'creativeId' => 'creative_id',
        'dataId' => 'data_id',
        'dataSrcType' => 'data_src_type',
        'groupId' => 'group_id',
        'planId' => 'plan_id',
        'principalId' => 'principal_id',
        'principalTag' => 'principal_tag',
        'propertyList' => 'property_list',
        'source' => 'source',
        'targetId' => 'target_id',
        'targetType' => 'target_type',
        'uuid' => 'uuid',
        'uuidType' => 'uuid_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizNo' => 'setBizNo',
        'callbackExtInfo' => 'setCallbackExtInfo',
        'conversionAmount' => 'setConversionAmount',
        'conversionId' => 'setConversionId',
        'conversionTime' => 'setConversionTime',
        'conversionType' => 'setConversionType',
        'creativeId' => 'setCreativeId',
        'dataId' => 'setDataId',
        'dataSrcType' => 'setDataSrcType',
        'groupId' => 'setGroupId',
        'planId' => 'setPlanId',
        'principalId' => 'setPrincipalId',
        'principalTag' => 'setPrincipalTag',
        'propertyList' => 'setPropertyList',
        'source' => 'setSource',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType',
        'uuid' => 'setUuid',
        'uuidType' => 'setUuidType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizNo' => 'getBizNo',
        'callbackExtInfo' => 'getCallbackExtInfo',
        'conversionAmount' => 'getConversionAmount',
        'conversionId' => 'getConversionId',
        'conversionTime' => 'getConversionTime',
        'conversionType' => 'getConversionType',
        'creativeId' => 'getCreativeId',
        'dataId' => 'getDataId',
        'dataSrcType' => 'getDataSrcType',
        'groupId' => 'getGroupId',
        'planId' => 'getPlanId',
        'principalId' => 'getPrincipalId',
        'principalTag' => 'getPrincipalTag',
        'propertyList' => 'getPropertyList',
        'source' => 'getSource',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType',
        'uuid' => 'getUuid',
        'uuidType' => 'getUuidType'
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
        $this->container['bizNo'] = $data['bizNo'] ?? null;
        $this->container['callbackExtInfo'] = $data['callbackExtInfo'] ?? null;
        $this->container['conversionAmount'] = $data['conversionAmount'] ?? null;
        $this->container['conversionId'] = $data['conversionId'] ?? null;
        $this->container['conversionTime'] = $data['conversionTime'] ?? null;
        $this->container['conversionType'] = $data['conversionType'] ?? null;
        $this->container['creativeId'] = $data['creativeId'] ?? null;
        $this->container['dataId'] = $data['dataId'] ?? null;
        $this->container['dataSrcType'] = $data['dataSrcType'] ?? null;
        $this->container['groupId'] = $data['groupId'] ?? null;
        $this->container['planId'] = $data['planId'] ?? null;
        $this->container['principalId'] = $data['principalId'] ?? null;
        $this->container['principalTag'] = $data['principalTag'] ?? null;
        $this->container['propertyList'] = $data['propertyList'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['uuidType'] = $data['uuidType'] ?? null;
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
     * Gets bizNo
     *
     * @return string|null
     */
    public function getBizNo()
    {
        return $this->container['bizNo'];
    }

    /**
     * Sets bizNo
     *
     * @param string|null $bizNo 转化流水号，用于幂等  对于source=XLIGHT，转化流水号来自灯火的留资明细 对于source=DATASET/OTHER，转化流水号由调用方自定义
     *
     * @return self
     */
    public function setBizNo($bizNo)
    {
        $this->container['bizNo'] = $bizNo;

        return $this;
    }

    /**
     * Gets callbackExtInfo
     *
     * @return string|null
     */
    public function getCallbackExtInfo()
    {
        return $this->container['callbackExtInfo'];
    }

    /**
     * Sets callbackExtInfo
     *
     * @param string|null $callbackExtInfo 转化回调扩展信息
     *
     * @return self
     */
    public function setCallbackExtInfo($callbackExtInfo)
    {
        $this->container['callbackExtInfo'] = $callbackExtInfo;

        return $this;
    }

    /**
     * Gets conversionAmount
     *
     * @return string|null
     */
    public function getConversionAmount()
    {
        return $this->container['conversionAmount'];
    }

    /**
     * Sets conversionAmount
     *
     * @param string|null $conversionAmount 当source=DATASET或者OTHER时使用：  转化金额，单位分
     *
     * @return self
     */
    public function setConversionAmount($conversionAmount)
    {
        $this->container['conversionAmount'] = $conversionAmount;

        return $this;
    }

    /**
     * Gets conversionId
     *
     * @return string|null
     */
    public function getConversionId()
    {
        return $this->container['conversionId'];
    }

    /**
     * Sets conversionId
     *
     * @param string|null $conversionId 当source=XLIGHT时使用:  转化事件id，来自推广页关联转化事件id
     *
     * @return self
     */
    public function setConversionId($conversionId)
    {
        $this->container['conversionId'] = $conversionId;

        return $this;
    }

    /**
     * Gets conversionTime
     *
     * @return int|null
     */
    public function getConversionTime()
    {
        return $this->container['conversionTime'];
    }

    /**
     * Sets conversionTime
     *
     * @param int|null $conversionTime 转化时间，UTC 时间戳，单位：秒
     *
     * @return self
     */
    public function setConversionTime($conversionTime)
    {
        $this->container['conversionTime'] = $conversionTime;

        return $this;
    }

    /**
     * Gets conversionType
     *
     * @return string|null
     */
    public function getConversionType()
    {
        return $this->container['conversionType'];
    }

    /**
     * Sets conversionType
     *
     * @param string|null $conversionType 当source=XLIGHT时使用:  转化事件类型
     *
     * @return self
     */
    public function setConversionType($conversionType)
    {
        $this->container['conversionType'] = $conversionType;

        return $this;
    }

    /**
     * Gets creativeId
     *
     * @return string|null
     */
    public function getCreativeId()
    {
        return $this->container['creativeId'];
    }

    /**
     * Sets creativeId
     *
     * @param string|null $creativeId 创意ID
     *
     * @return self
     */
    public function setCreativeId($creativeId)
    {
        $this->container['creativeId'] = $creativeId;

        return $this;
    }

    /**
     * Gets dataId
     *
     * @return string|null
     */
    public function getDataId()
    {
        return $this->container['dataId'];
    }

    /**
     * Sets dataId
     *
     * @param string|null $dataId 当source=XLIGHT或者DATASET时使用：  数据集id
     *
     * @return self
     */
    public function setDataId($dataId)
    {
        $this->container['dataId'] = $dataId;

        return $this;
    }

    /**
     * Gets dataSrcType
     *
     * @return string|null
     */
    public function getDataSrcType()
    {
        return $this->container['dataSrcType'];
    }

    /**
     * Sets dataSrcType
     *
     * @param string|null $dataSrcType 当source=OTHER时使用:  数据类型： KR_MEMBER - 客如云入会 KR_TRADE - 客如云交易 TB_LIVE -  淘宝直播
     *
     * @return self
     */
    public function setDataSrcType($dataSrcType)
    {
        $this->container['dataSrcType'] = $dataSrcType;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string|null $groupId 单元ID
     *
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets planId
     *
     * @return string|null
     */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
     * Sets planId
     *
     * @param string|null $planId 计划ID
     *
     * @return self
     */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;

        return $this;
    }

    /**
     * Gets principalId
     *
     * @return string|null
     */
    public function getPrincipalId()
    {
        return $this->container['principalId'];
    }

    /**
     * Sets principalId
     *
     * @param string|null $principalId 商户在灯火pb端的id, 可代替principal_tag
     *
     * @return self
     */
    public function setPrincipalId($principalId)
    {
        $this->container['principalId'] = $principalId;

        return $this;
    }

    /**
     * Gets principalTag
     *
     * @return string|null
     */
    public function getPrincipalTag()
    {
        return $this->container['principalTag'];
    }

    /**
     * Sets principalTag
     *
     * @param string|null $principalTag 商家标志，可代替principal_id
     *
     * @return self
     */
    public function setPrincipalTag($principalTag)
    {
        $this->container['principalTag'] = $principalTag;

        return $this;
    }

    /**
     * Gets propertyList
     *
     * @return \Alipay\OpenAPISDK\Model\ConversionProperty[]|null
     */
    public function getPropertyList()
    {
        return $this->container['propertyList'];
    }

    /**
     * Sets propertyList
     *
     * @param \Alipay\OpenAPISDK\Model\ConversionProperty[]|null $propertyList 当source=DATASET或者OTHER时使用：  转化属性列表
     *
     * @return self
     */
    public function setPropertyList($propertyList)
    {
        $this->container['propertyList'] = $propertyList;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source 来源： XLIGHT-灯火留资 DATASET-数据集 OTHER-其它
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 当source=OTHER时使用： 主体id，比如品牌id
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 当source=OTHER时使用：  主体类型： BRAND - 品牌 STORE - 店铺 LIVE - 直播 等等
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid 当source=DATASET或者OTHER时使用：  转化用户唯一标识
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets uuidType
     *
     * @return string|null
     */
    public function getUuidType()
    {
        return $this->container['uuidType'];
    }

    /**
     * Sets uuidType
     *
     * @param string|null $uuidType 当source=DATASET或者OTHER时使用：  转化客户唯一标志类型： PID - 2088pid
     *
     * @return self
     */
    public function setUuidType($uuidType)
    {
        $this->container['uuidType'] = $uuidType;

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


