<?php
/**
 * ZhimaCreditPeZmgoSettleRefundModel
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
 * ZhimaCreditPeZmgoSettleRefundModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCreditPeZmgoSettleRefundModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCreditPeZmgoSettleRefundModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementId' => 'string',
        'alipayOpenId' => 'string',
        'alipayUserId' => 'string',
        'memo' => 'string',
        'outRequestNo' => 'string',
        'partnerId' => 'string',
        'refundAmount' => 'string',
        'refundType' => 'string',
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
        'agreementId' => null,
        'alipayOpenId' => null,
        'alipayUserId' => null,
        'memo' => null,
        'outRequestNo' => null,
        'partnerId' => null,
        'refundAmount' => null,
        'refundType' => null,
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
        'agreementId' => 'agreement_id',
        'alipayOpenId' => 'alipay_open_id',
        'alipayUserId' => 'alipay_user_id',
        'memo' => 'memo',
        'outRequestNo' => 'out_request_no',
        'partnerId' => 'partner_id',
        'refundAmount' => 'refund_amount',
        'refundType' => 'refund_type',
        'withholdPlanNo' => 'withhold_plan_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementId' => 'setAgreementId',
        'alipayOpenId' => 'setAlipayOpenId',
        'alipayUserId' => 'setAlipayUserId',
        'memo' => 'setMemo',
        'outRequestNo' => 'setOutRequestNo',
        'partnerId' => 'setPartnerId',
        'refundAmount' => 'setRefundAmount',
        'refundType' => 'setRefundType',
        'withholdPlanNo' => 'setWithholdPlanNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementId' => 'getAgreementId',
        'alipayOpenId' => 'getAlipayOpenId',
        'alipayUserId' => 'getAlipayUserId',
        'memo' => 'getMemo',
        'outRequestNo' => 'getOutRequestNo',
        'partnerId' => 'getPartnerId',
        'refundAmount' => 'getRefundAmount',
        'refundType' => 'getRefundType',
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
        $this->container['agreementId'] = $data['agreementId'] ?? null;
        $this->container['alipayOpenId'] = $data['alipayOpenId'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['refundAmount'] = $data['refundAmount'] ?? null;
        $this->container['refundType'] = $data['refundType'] ?? null;
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
     * @param string|null $agreementId 签约芝麻GO的业务协议号，在签约成功、结算成功等通知中回回传给商户。
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
     * @param string|null $alipayOpenId 支付宝用户ID
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
     * @param string|null $alipayUserId 支付宝用户ID
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 本次退款说明
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

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
     * @param string|null $outRequestNo 外部请求号
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
     * Gets refundAmount
     *
     * @return string|null
     */
    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    /**
     * Sets refundAmount
     *
     * @param string|null $refundAmount 退款金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets refundType
     *
     * @return string|null
     */
    public function getRefundType()
    {
        return $this->container['refundType'];
    }

    /**
     * Sets refundType
     *
     * @param string|null $refundType 退款类型： MEMBER_FEE_REFUND 会员费结算退款 ，WITHHOLD_FEE_REFUND 周期扣款金额退款。 不填写默认为 MEMBER_FEE_REFUND
     *
     * @return self
     */
    public function setRefundType($refundType)
    {
        $this->container['refundType'] = $refundType;

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
     * @param string|null $withholdPlanNo 芝麻侧扣款计划单据号，在结算扣款成功的通知消息中会回传。
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


