<?php
/**
 * EnterpriseOpenRuleRecordInfo
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
 * EnterpriseOpenRuleRecordInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EnterpriseOpenRuleRecordInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnterpriseOpenRuleRecordInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billMonthDay' => 'int',
        'effectiveStart' => 'string',
        'enterpriseId' => 'string',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'invoiceRuleId' => 'string',
        'invoiceRuleRecordId' => 'string',
        'invoiceTitleId' => 'string',
        'openApplyer' => 'string',
        'openMode' => 'string',
        'openType' => 'string',
        'ownerId' => 'string',
        'tag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'billMonthDay' => null,
        'effectiveStart' => null,
        'enterpriseId' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'invoiceRuleId' => null,
        'invoiceRuleRecordId' => null,
        'invoiceTitleId' => null,
        'openApplyer' => null,
        'openMode' => null,
        'openType' => null,
        'ownerId' => null,
        'tag' => null
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
        'billMonthDay' => 'bill_month_day',
        'effectiveStart' => 'effective_start',
        'enterpriseId' => 'enterprise_id',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'invoiceRuleId' => 'invoice_rule_id',
        'invoiceRuleRecordId' => 'invoice_rule_record_id',
        'invoiceTitleId' => 'invoice_title_id',
        'openApplyer' => 'open_applyer',
        'openMode' => 'open_mode',
        'openType' => 'open_type',
        'ownerId' => 'owner_id',
        'tag' => 'tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billMonthDay' => 'setBillMonthDay',
        'effectiveStart' => 'setEffectiveStart',
        'enterpriseId' => 'setEnterpriseId',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'invoiceRuleId' => 'setInvoiceRuleId',
        'invoiceRuleRecordId' => 'setInvoiceRuleRecordId',
        'invoiceTitleId' => 'setInvoiceTitleId',
        'openApplyer' => 'setOpenApplyer',
        'openMode' => 'setOpenMode',
        'openType' => 'setOpenType',
        'ownerId' => 'setOwnerId',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billMonthDay' => 'getBillMonthDay',
        'effectiveStart' => 'getEffectiveStart',
        'enterpriseId' => 'getEnterpriseId',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'invoiceRuleId' => 'getInvoiceRuleId',
        'invoiceRuleRecordId' => 'getInvoiceRuleRecordId',
        'invoiceTitleId' => 'getInvoiceTitleId',
        'openApplyer' => 'getOpenApplyer',
        'openMode' => 'getOpenMode',
        'openType' => 'getOpenType',
        'ownerId' => 'getOwnerId',
        'tag' => 'getTag'
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
        $this->container['billMonthDay'] = $data['billMonthDay'] ?? null;
        $this->container['effectiveStart'] = $data['effectiveStart'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['invoiceRuleId'] = $data['invoiceRuleId'] ?? null;
        $this->container['invoiceRuleRecordId'] = $data['invoiceRuleRecordId'] ?? null;
        $this->container['invoiceTitleId'] = $data['invoiceTitleId'] ?? null;
        $this->container['openApplyer'] = $data['openApplyer'] ?? null;
        $this->container['openMode'] = $data['openMode'] ?? null;
        $this->container['openType'] = $data['openType'] ?? null;
        $this->container['ownerId'] = $data['ownerId'] ?? null;
        $this->container['tag'] = $data['tag'] ?? null;
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
     * Gets billMonthDay
     *
     * @return int|null
     */
    public function getBillMonthDay()
    {
        return $this->container['billMonthDay'];
    }

    /**
     * Sets billMonthDay
     *
     * @param int|null $billMonthDay 开票规则账单日
     *
     * @return self
     */
    public function setBillMonthDay($billMonthDay)
    {
        $this->container['billMonthDay'] = $billMonthDay;

        return $this;
    }

    /**
     * Gets effectiveStart
     *
     * @return string|null
     */
    public function getEffectiveStart()
    {
        return $this->container['effectiveStart'];
    }

    /**
     * Sets effectiveStart
     *
     * @param string|null $effectiveStart 开票规则生效日期
     *
     * @return self
     */
    public function setEffectiveStart($effectiveStart)
    {
        $this->container['effectiveStart'] = $effectiveStart;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业ID【推荐使用】
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 修改时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets invoiceRuleId
     *
     * @return string|null
     */
    public function getInvoiceRuleId()
    {
        return $this->container['invoiceRuleId'];
    }

    /**
     * Sets invoiceRuleId
     *
     * @param string|null $invoiceRuleId 开票规则ID
     *
     * @return self
     */
    public function setInvoiceRuleId($invoiceRuleId)
    {
        $this->container['invoiceRuleId'] = $invoiceRuleId;

        return $this;
    }

    /**
     * Gets invoiceRuleRecordId
     *
     * @return string|null
     */
    public function getInvoiceRuleRecordId()
    {
        return $this->container['invoiceRuleRecordId'];
    }

    /**
     * Sets invoiceRuleRecordId
     *
     * @param string|null $invoiceRuleRecordId 开票规则记录ID
     *
     * @return self
     */
    public function setInvoiceRuleRecordId($invoiceRuleRecordId)
    {
        $this->container['invoiceRuleRecordId'] = $invoiceRuleRecordId;

        return $this;
    }

    /**
     * Gets invoiceTitleId
     *
     * @return string|null
     */
    public function getInvoiceTitleId()
    {
        return $this->container['invoiceTitleId'];
    }

    /**
     * Sets invoiceTitleId
     *
     * @param string|null $invoiceTitleId 发票抬头ID
     *
     * @return self
     */
    public function setInvoiceTitleId($invoiceTitleId)
    {
        $this->container['invoiceTitleId'] = $invoiceTitleId;

        return $this;
    }

    /**
     * Gets openApplyer
     *
     * @return string|null
     */
    public function getOpenApplyer()
    {
        return $this->container['openApplyer'];
    }

    /**
     * Sets openApplyer
     *
     * @param string|null $openApplyer 开票申请方：ENTERPRISE（企业发起），EMPLOYEE（员工发起）
     *
     * @return self
     */
    public function setOpenApplyer($openApplyer)
    {
        $this->container['openApplyer'] = $openApplyer;

        return $this;
    }

    /**
     * Gets openMode
     *
     * @return string|null
     */
    public function getOpenMode()
    {
        return $this->container['openMode'];
    }

    /**
     * Sets openMode
     *
     * @param string|null $openMode 开票模式：汇总开、笔笔开 枚举定义：SUMMARY:汇总开 SINGLE:单笔开
     *
     * @return self
     */
    public function setOpenMode($openMode)
    {
        $this->container['openMode'] = $openMode;

        return $this;
    }

    /**
     * Gets openType
     *
     * @return string|null
     */
    public function getOpenType()
    {
        return $this->container['openType'];
    }

    /**
     * Sets openType
     *
     * @param string|null $openType 开票申请类型：AUTO（自动开票），MANUAL（手动开票）
     *
     * @return self
     */
    public function setOpenType($openType)
    {
        $this->container['openType'] = $openType;

        return $this;
    }

    /**
     * Gets ownerId
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param string|null $ownerId 所有者ID（企业情况下即为企业ID）
     *
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag 开票规则标记： DEFAULT-默认 EMPLOYEE_TITLE_FIRST-员工签约抬头优先于开票规则
     *
     * @return self
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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


