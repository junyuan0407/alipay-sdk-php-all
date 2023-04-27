<?php
/**
 * ZhimaCreditPeZmgoSettleApplyModel
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
 * ZhimaCreditPeZmgoSettleApplyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCreditPeZmgoSettleApplyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCreditPeZmgoSettleApplyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionType' => 'string',
        'agreementId' => 'string',
        'alipayOpenId' => 'string',
        'alipayUserId' => 'string',
        'outRequestNo' => 'string',
        'partnerId' => 'string',
        'payAmount' => 'string',
        'settleExtendParams' => '\Alipay\OpenAPISDK\Model\SettleExtraParams',
        'totalDiscountAmount' => 'string',
        'totalRealPayAmount' => 'string',
        'totalTaskCount' => 'string',
        'withholdPlanNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actionType' => null,
        'agreementId' => null,
        'alipayOpenId' => null,
        'alipayUserId' => null,
        'outRequestNo' => null,
        'partnerId' => null,
        'payAmount' => null,
        'settleExtendParams' => null,
        'totalDiscountAmount' => null,
        'totalRealPayAmount' => null,
        'totalTaskCount' => null,
        'withholdPlanNo' => null
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
        'actionType' => 'action_type',
        'agreementId' => 'agreement_id',
        'alipayOpenId' => 'alipay_open_id',
        'alipayUserId' => 'alipay_user_id',
        'outRequestNo' => 'out_request_no',
        'partnerId' => 'partner_id',
        'payAmount' => 'pay_amount',
        'settleExtendParams' => 'settle_extend_params',
        'totalDiscountAmount' => 'total_discount_amount',
        'totalRealPayAmount' => 'total_real_pay_amount',
        'totalTaskCount' => 'total_task_count',
        'withholdPlanNo' => 'withhold_plan_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionType' => 'setActionType',
        'agreementId' => 'setAgreementId',
        'alipayOpenId' => 'setAlipayOpenId',
        'alipayUserId' => 'setAlipayUserId',
        'outRequestNo' => 'setOutRequestNo',
        'partnerId' => 'setPartnerId',
        'payAmount' => 'setPayAmount',
        'settleExtendParams' => 'setSettleExtendParams',
        'totalDiscountAmount' => 'setTotalDiscountAmount',
        'totalRealPayAmount' => 'setTotalRealPayAmount',
        'totalTaskCount' => 'setTotalTaskCount',
        'withholdPlanNo' => 'setWithholdPlanNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionType' => 'getActionType',
        'agreementId' => 'getAgreementId',
        'alipayOpenId' => 'getAlipayOpenId',
        'alipayUserId' => 'getAlipayUserId',
        'outRequestNo' => 'getOutRequestNo',
        'partnerId' => 'getPartnerId',
        'payAmount' => 'getPayAmount',
        'settleExtendParams' => 'getSettleExtendParams',
        'totalDiscountAmount' => 'getTotalDiscountAmount',
        'totalRealPayAmount' => 'getTotalRealPayAmount',
        'totalTaskCount' => 'getTotalTaskCount',
        'withholdPlanNo' => 'getWithholdPlanNo'
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
        $this->container['actionType'] = $data['actionType'] ?? null;
        $this->container['agreementId'] = $data['agreementId'] ?? null;
        $this->container['alipayOpenId'] = $data['alipayOpenId'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['payAmount'] = $data['payAmount'] ?? null;
        $this->container['settleExtendParams'] = $data['settleExtendParams'] ?? null;
        $this->container['totalDiscountAmount'] = $data['totalDiscountAmount'] ?? null;
        $this->container['totalRealPayAmount'] = $data['totalRealPayAmount'] ?? null;
        $this->container['totalTaskCount'] = $data['totalTaskCount'] ?? null;
        $this->container['withholdPlanNo'] = $data['withholdPlanNo'] ?? null;
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
     * Gets actionType
     *
     * @return string|null
     */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
     * Sets actionType
     *
     * @param string|null $actionType DEFAULT_SETTLE 默认结算模式; PAY_TO_ZERO 支付转0元；
     *
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;

        return $this;
    }

    /**
     * Gets agreementId
     *
     * @return string|null
     */
    public function getAgreementId()
    {
        return $this->container['agreementId'];
    }

    /**
     * Sets agreementId
     *
     * @param string|null $agreementId 支付宝系统中用以唯一标识用户签约记录的编号。
     *
     * @return self
     */
    public function setAgreementId($agreementId)
    {
        $this->container['agreementId'] = $agreementId;

        return $this;
    }

    /**
     * Gets alipayOpenId
     *
     * @return string|null
     */
    public function getAlipayOpenId()
    {
        return $this->container['alipayOpenId'];
    }

    /**
     * Sets alipayOpenId
     *
     * @param string|null $alipayOpenId 买家在支付宝的用户id
     *
     * @return self
     */
    public function setAlipayOpenId($alipayOpenId)
    {
        $this->container['alipayOpenId'] = $alipayOpenId;

        return $this;
    }

    /**
     * Gets alipayUserId
     *
     * @return string|null
     */
    public function getAlipayUserId()
    {
        return $this->container['alipayUserId'];
    }

    /**
     * Sets alipayUserId
     *
     * @param string|null $alipayUserId 买家在支付宝的用户id
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 商户本次操作的请求流水号，用于标示请求流水的唯一性，不能包含除中文、英文、数字以外的字符，需要保证在商户端不重复。
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId 商户ID
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return string|null
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param string|null $payAmount 需要支付的金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets settleExtendParams
     *
     * @return \Alipay\OpenAPISDK\Model\SettleExtraParams|null
     */
    public function getSettleExtendParams()
    {
        return $this->container['settleExtendParams'];
    }

    /**
     * Sets settleExtendParams
     *
     * @param \Alipay\OpenAPISDK\Model\SettleExtraParams|null $settleExtendParams settleExtendParams
     *
     * @return self
     */
    public function setSettleExtendParams($settleExtendParams)
    {
        $this->container['settleExtendParams'] = $settleExtendParams;

        return $this;
    }

    /**
     * Gets totalDiscountAmount
     *
     * @return string|null
     */
    public function getTotalDiscountAmount()
    {
        return $this->container['totalDiscountAmount'];
    }

    /**
     * Sets totalDiscountAmount
     *
     * @param string|null $totalDiscountAmount 芝麻GO任务开始到到期过程中和任务相关享受的总优惠金额，单位为：元（人民币），精确到小数点后两位。
     *
     * @return self
     */
    public function setTotalDiscountAmount($totalDiscountAmount)
    {
        $this->container['totalDiscountAmount'] = $totalDiscountAmount;

        return $this;
    }

    /**
     * Gets totalRealPayAmount
     *
     * @return string|null
     */
    public function getTotalRealPayAmount()
    {
        return $this->container['totalRealPayAmount'];
    }

    /**
     * Sets totalRealPayAmount
     *
     * @param string|null $totalRealPayAmount 芝麻GO任务开始到到期过程中和任务相关支付的总金额，单位为：元（人民币），精确到小数点后两位。
     *
     * @return self
     */
    public function setTotalRealPayAmount($totalRealPayAmount)
    {
        $this->container['totalRealPayAmount'] = $totalRealPayAmount;

        return $this;
    }

    /**
     * Gets totalTaskCount
     *
     * @return string|null
     */
    public function getTotalTaskCount()
    {
        return $this->container['totalTaskCount'];
    }

    /**
     * Sets totalTaskCount
     *
     * @param string|null $totalTaskCount 芝麻GO任务开始到到期过程中和任务相关完成的任务次数
     *
     * @return self
     */
    public function setTotalTaskCount($totalTaskCount)
    {
        $this->container['totalTaskCount'] = $totalTaskCount;

        return $this;
    }

    /**
     * Gets withholdPlanNo
     *
     * @return string|null
     */
    public function getWithholdPlanNo()
    {
        return $this->container['withholdPlanNo'];
    }

    /**
     * Sets withholdPlanNo
     *
     * @param string|null $withholdPlanNo 芝麻GO结算时，需要传入的扣款单据号。来源于协议到期通知消息，外部商户接入时，该参数必填
     *
     * @return self
     */
    public function setWithholdPlanNo($withholdPlanNo)
    {
        $this->container['withholdPlanNo'] = $withholdPlanNo;

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


