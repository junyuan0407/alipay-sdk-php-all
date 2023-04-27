<?php
/**
 * AlipayMarketingActivityUserQueryvoucherResponseModel
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
 * AlipayMarketingActivityUserQueryvoucherResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingActivityUserQueryvoucherResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingActivityUserQueryvoucherResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityBaseInfo' => '\Alipay\OpenAPISDK\Model\ActivityBaseInfo',
        'activityId' => 'string',
        'associateTradeNo' => 'string',
        'availableBeginTime' => 'string',
        'availableEndTime' => 'string',
        'belongMerchantId' => 'string',
        'createTime' => 'string',
        'userVoucherBaseInfo' => '\Alipay\OpenAPISDK\Model\UserVoucherBaseInfo',
        'voucherDeductInfo' => '\Alipay\OpenAPISDK\Model\VoucherDeductInfo',
        'voucherDisplayInfo' => '\Alipay\OpenAPISDK\Model\CommonVoucherDisplayInfo',
        'voucherDisplayPatternInfo' => '\Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo',
        'voucherName' => 'string',
        'voucherSendModeInfo' => '\Alipay\OpenAPISDK\Model\VoucherSendModeInfo',
        'voucherSendRule' => '\Alipay\OpenAPISDK\Model\CommonVoucherSendRule',
        'voucherStatus' => 'string',
        'voucherType' => 'string',
        'voucherUseRule' => '\Alipay\OpenAPISDK\Model\CommonVoucherUseRule',
        'voucherUseRuleInfo' => '\Alipay\OpenAPISDK\Model\VoucherUseRuleInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activityBaseInfo' => null,
        'activityId' => null,
        'associateTradeNo' => null,
        'availableBeginTime' => null,
        'availableEndTime' => null,
        'belongMerchantId' => null,
        'createTime' => null,
        'userVoucherBaseInfo' => null,
        'voucherDeductInfo' => null,
        'voucherDisplayInfo' => null,
        'voucherDisplayPatternInfo' => null,
        'voucherName' => null,
        'voucherSendModeInfo' => null,
        'voucherSendRule' => null,
        'voucherStatus' => null,
        'voucherType' => null,
        'voucherUseRule' => null,
        'voucherUseRuleInfo' => null
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
        'activityBaseInfo' => 'activity_base_info',
        'activityId' => 'activity_id',
        'associateTradeNo' => 'associate_trade_no',
        'availableBeginTime' => 'available_begin_time',
        'availableEndTime' => 'available_end_time',
        'belongMerchantId' => 'belong_merchant_id',
        'createTime' => 'create_time',
        'userVoucherBaseInfo' => 'user_voucher_base_info',
        'voucherDeductInfo' => 'voucher_deduct_info',
        'voucherDisplayInfo' => 'voucher_display_info',
        'voucherDisplayPatternInfo' => 'voucher_display_pattern_info',
        'voucherName' => 'voucher_name',
        'voucherSendModeInfo' => 'voucher_send_mode_info',
        'voucherSendRule' => 'voucher_send_rule',
        'voucherStatus' => 'voucher_status',
        'voucherType' => 'voucher_type',
        'voucherUseRule' => 'voucher_use_rule',
        'voucherUseRuleInfo' => 'voucher_use_rule_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityBaseInfo' => 'setActivityBaseInfo',
        'activityId' => 'setActivityId',
        'associateTradeNo' => 'setAssociateTradeNo',
        'availableBeginTime' => 'setAvailableBeginTime',
        'availableEndTime' => 'setAvailableEndTime',
        'belongMerchantId' => 'setBelongMerchantId',
        'createTime' => 'setCreateTime',
        'userVoucherBaseInfo' => 'setUserVoucherBaseInfo',
        'voucherDeductInfo' => 'setVoucherDeductInfo',
        'voucherDisplayInfo' => 'setVoucherDisplayInfo',
        'voucherDisplayPatternInfo' => 'setVoucherDisplayPatternInfo',
        'voucherName' => 'setVoucherName',
        'voucherSendModeInfo' => 'setVoucherSendModeInfo',
        'voucherSendRule' => 'setVoucherSendRule',
        'voucherStatus' => 'setVoucherStatus',
        'voucherType' => 'setVoucherType',
        'voucherUseRule' => 'setVoucherUseRule',
        'voucherUseRuleInfo' => 'setVoucherUseRuleInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityBaseInfo' => 'getActivityBaseInfo',
        'activityId' => 'getActivityId',
        'associateTradeNo' => 'getAssociateTradeNo',
        'availableBeginTime' => 'getAvailableBeginTime',
        'availableEndTime' => 'getAvailableEndTime',
        'belongMerchantId' => 'getBelongMerchantId',
        'createTime' => 'getCreateTime',
        'userVoucherBaseInfo' => 'getUserVoucherBaseInfo',
        'voucherDeductInfo' => 'getVoucherDeductInfo',
        'voucherDisplayInfo' => 'getVoucherDisplayInfo',
        'voucherDisplayPatternInfo' => 'getVoucherDisplayPatternInfo',
        'voucherName' => 'getVoucherName',
        'voucherSendModeInfo' => 'getVoucherSendModeInfo',
        'voucherSendRule' => 'getVoucherSendRule',
        'voucherStatus' => 'getVoucherStatus',
        'voucherType' => 'getVoucherType',
        'voucherUseRule' => 'getVoucherUseRule',
        'voucherUseRuleInfo' => 'getVoucherUseRuleInfo'
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
        $this->container['activityBaseInfo'] = $data['activityBaseInfo'] ?? null;
        $this->container['activityId'] = $data['activityId'] ?? null;
        $this->container['associateTradeNo'] = $data['associateTradeNo'] ?? null;
        $this->container['availableBeginTime'] = $data['availableBeginTime'] ?? null;
        $this->container['availableEndTime'] = $data['availableEndTime'] ?? null;
        $this->container['belongMerchantId'] = $data['belongMerchantId'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['userVoucherBaseInfo'] = $data['userVoucherBaseInfo'] ?? null;
        $this->container['voucherDeductInfo'] = $data['voucherDeductInfo'] ?? null;
        $this->container['voucherDisplayInfo'] = $data['voucherDisplayInfo'] ?? null;
        $this->container['voucherDisplayPatternInfo'] = $data['voucherDisplayPatternInfo'] ?? null;
        $this->container['voucherName'] = $data['voucherName'] ?? null;
        $this->container['voucherSendModeInfo'] = $data['voucherSendModeInfo'] ?? null;
        $this->container['voucherSendRule'] = $data['voucherSendRule'] ?? null;
        $this->container['voucherStatus'] = $data['voucherStatus'] ?? null;
        $this->container['voucherType'] = $data['voucherType'] ?? null;
        $this->container['voucherUseRule'] = $data['voucherUseRule'] ?? null;
        $this->container['voucherUseRuleInfo'] = $data['voucherUseRuleInfo'] ?? null;
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
     * Gets activityBaseInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ActivityBaseInfo|null
     */
    public function getActivityBaseInfo()
    {
        return $this->container['activityBaseInfo'];
    }

    /**
     * Sets activityBaseInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ActivityBaseInfo|null $activityBaseInfo activityBaseInfo
     *
     * @return self
     */
    public function setActivityBaseInfo($activityBaseInfo)
    {
        $this->container['activityBaseInfo'] = $activityBaseInfo;

        return $this;
    }

    /**
     * Gets activityId
     *
     * @return string|null
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param string|null $activityId 活动 id
     *
     * @return self
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

        return $this;
    }

    /**
     * Gets associateTradeNo
     *
     * @return string|null
     */
    public function getAssociateTradeNo()
    {
        return $this->container['associateTradeNo'];
    }

    /**
     * Sets associateTradeNo
     *
     * @param string|null $associateTradeNo 若商家券操作过关联商户订单信息，则该字段返回商家券已关联的商户订单号。
     *
     * @return self
     */
    public function setAssociateTradeNo($associateTradeNo)
    {
        $this->container['associateTradeNo'] = $associateTradeNo;

        return $this;
    }

    /**
     * Gets availableBeginTime
     *
     * @return string|null
     */
    public function getAvailableBeginTime()
    {
        return $this->container['availableBeginTime'];
    }

    /**
     * Sets availableBeginTime
     *
     * @param string|null $availableBeginTime 券可用开始时间
     *
     * @return self
     */
    public function setAvailableBeginTime($availableBeginTime)
    {
        $this->container['availableBeginTime'] = $availableBeginTime;

        return $this;
    }

    /**
     * Gets availableEndTime
     *
     * @return string|null
     */
    public function getAvailableEndTime()
    {
        return $this->container['availableEndTime'];
    }

    /**
     * Sets availableEndTime
     *
     * @param string|null $availableEndTime 券可用结束时间
     *
     * @return self
     */
    public function setAvailableEndTime($availableEndTime)
    {
        $this->container['availableEndTime'] = $availableEndTime;

        return $this;
    }

    /**
     * Gets belongMerchantId
     *
     * @return string|null
     */
    public function getBelongMerchantId()
    {
        return $this->container['belongMerchantId'];
    }

    /**
     * Sets belongMerchantId
     *
     * @param string|null $belongMerchantId 券归属 pid
     *
     * @return self
     */
    public function setBelongMerchantId($belongMerchantId)
    {
        $this->container['belongMerchantId'] = $belongMerchantId;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 领券时间
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets userVoucherBaseInfo
     *
     * @return \Alipay\OpenAPISDK\Model\UserVoucherBaseInfo|null
     */
    public function getUserVoucherBaseInfo()
    {
        return $this->container['userVoucherBaseInfo'];
    }

    /**
     * Sets userVoucherBaseInfo
     *
     * @param \Alipay\OpenAPISDK\Model\UserVoucherBaseInfo|null $userVoucherBaseInfo userVoucherBaseInfo
     *
     * @return self
     */
    public function setUserVoucherBaseInfo($userVoucherBaseInfo)
    {
        $this->container['userVoucherBaseInfo'] = $userVoucherBaseInfo;

        return $this;
    }

    /**
     * Gets voucherDeductInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDeductInfo|null
     */
    public function getVoucherDeductInfo()
    {
        return $this->container['voucherDeductInfo'];
    }

    /**
     * Sets voucherDeductInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDeductInfo|null $voucherDeductInfo voucherDeductInfo
     *
     * @return self
     */
    public function setVoucherDeductInfo($voucherDeductInfo)
    {
        $this->container['voucherDeductInfo'] = $voucherDeductInfo;

        return $this;
    }

    /**
     * Gets voucherDisplayInfo
     *
     * @return \Alipay\OpenAPISDK\Model\CommonVoucherDisplayInfo|null
     */
    public function getVoucherDisplayInfo()
    {
        return $this->container['voucherDisplayInfo'];
    }

    /**
     * Sets voucherDisplayInfo
     *
     * @param \Alipay\OpenAPISDK\Model\CommonVoucherDisplayInfo|null $voucherDisplayInfo voucherDisplayInfo
     *
     * @return self
     */
    public function setVoucherDisplayInfo($voucherDisplayInfo)
    {
        $this->container['voucherDisplayInfo'] = $voucherDisplayInfo;

        return $this;
    }

    /**
     * Gets voucherDisplayPatternInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo|null
     */
    public function getVoucherDisplayPatternInfo()
    {
        return $this->container['voucherDisplayPatternInfo'];
    }

    /**
     * Sets voucherDisplayPatternInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo|null $voucherDisplayPatternInfo voucherDisplayPatternInfo
     *
     * @return self
     */
    public function setVoucherDisplayPatternInfo($voucherDisplayPatternInfo)
    {
        $this->container['voucherDisplayPatternInfo'] = $voucherDisplayPatternInfo;

        return $this;
    }

    /**
     * Gets voucherName
     *
     * @return string|null
     */
    public function getVoucherName()
    {
        return $this->container['voucherName'];
    }

    /**
     * Sets voucherName
     *
     * @param string|null $voucherName 券名称
     *
     * @return self
     */
    public function setVoucherName($voucherName)
    {
        $this->container['voucherName'] = $voucherName;

        return $this;
    }

    /**
     * Gets voucherSendModeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherSendModeInfo|null
     */
    public function getVoucherSendModeInfo()
    {
        return $this->container['voucherSendModeInfo'];
    }

    /**
     * Sets voucherSendModeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherSendModeInfo|null $voucherSendModeInfo voucherSendModeInfo
     *
     * @return self
     */
    public function setVoucherSendModeInfo($voucherSendModeInfo)
    {
        $this->container['voucherSendModeInfo'] = $voucherSendModeInfo;

        return $this;
    }

    /**
     * Gets voucherSendRule
     *
     * @return \Alipay\OpenAPISDK\Model\CommonVoucherSendRule|null
     */
    public function getVoucherSendRule()
    {
        return $this->container['voucherSendRule'];
    }

    /**
     * Sets voucherSendRule
     *
     * @param \Alipay\OpenAPISDK\Model\CommonVoucherSendRule|null $voucherSendRule voucherSendRule
     *
     * @return self
     */
    public function setVoucherSendRule($voucherSendRule)
    {
        $this->container['voucherSendRule'] = $voucherSendRule;

        return $this;
    }

    /**
     * Gets voucherStatus
     *
     * @return string|null
     */
    public function getVoucherStatus()
    {
        return $this->container['voucherStatus'];
    }

    /**
     * Sets voucherStatus
     *
     * @param string|null $voucherStatus 券状态。
     *
     * @return self
     */
    public function setVoucherStatus($voucherStatus)
    {
        $this->container['voucherStatus'] = $voucherStatus;

        return $this;
    }

    /**
     * Gets voucherType
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucherType'];
    }

    /**
     * Sets voucherType
     *
     * @param string|null $voucherType 券类型。
     *
     * @return self
     */
    public function setVoucherType($voucherType)
    {
        $this->container['voucherType'] = $voucherType;

        return $this;
    }

    /**
     * Gets voucherUseRule
     *
     * @return \Alipay\OpenAPISDK\Model\CommonVoucherUseRule|null
     */
    public function getVoucherUseRule()
    {
        return $this->container['voucherUseRule'];
    }

    /**
     * Sets voucherUseRule
     *
     * @param \Alipay\OpenAPISDK\Model\CommonVoucherUseRule|null $voucherUseRule voucherUseRule
     *
     * @return self
     */
    public function setVoucherUseRule($voucherUseRule)
    {
        $this->container['voucherUseRule'] = $voucherUseRule;

        return $this;
    }

    /**
     * Gets voucherUseRuleInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherUseRuleInfo|null
     */
    public function getVoucherUseRuleInfo()
    {
        return $this->container['voucherUseRuleInfo'];
    }

    /**
     * Sets voucherUseRuleInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherUseRuleInfo|null $voucherUseRuleInfo voucherUseRuleInfo
     *
     * @return self
     */
    public function setVoucherUseRuleInfo($voucherUseRuleInfo)
    {
        $this->container['voucherUseRuleInfo'] = $voucherUseRuleInfo;

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


