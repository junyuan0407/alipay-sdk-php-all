<?php
/**
 * AlipayEbppInvoiceExpensecomsueOutsourceNotifyModel
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
 * AlipayEbppInvoiceExpensecomsueOutsourceNotifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceExpensecomsueOutsourceNotifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceExpensecomsueOutsourceNotifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'agreementNo' => 'string',
        'amount' => 'int',
        'dealTime' => 'string',
        'employeeId' => 'string',
        'employeeIdType' => 'int',
        'employeeOpenId' => 'string',
        'enterpriseId' => 'string',
        'extend' => 'string',
        'isOffSet' => 'int',
        'outSourceId' => 'string',
        'platform' => 'string',
        'relateNo' => 'string',
        'standardId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'agreementNo' => null,
        'amount' => null,
        'dealTime' => null,
        'employeeId' => null,
        'employeeIdType' => null,
        'employeeOpenId' => null,
        'enterpriseId' => null,
        'extend' => null,
        'isOffSet' => null,
        'outSourceId' => null,
        'platform' => null,
        'relateNo' => null,
        'standardId' => null
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
        'accountId' => 'account_id',
        'agreementNo' => 'agreement_no',
        'amount' => 'amount',
        'dealTime' => 'deal_time',
        'employeeId' => 'employee_id',
        'employeeIdType' => 'employee_id_type',
        'employeeOpenId' => 'employee_open_id',
        'enterpriseId' => 'enterprise_id',
        'extend' => 'extend',
        'isOffSet' => 'is_off_set',
        'outSourceId' => 'out_source_id',
        'platform' => 'platform',
        'relateNo' => 'relate_no',
        'standardId' => 'standard_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'agreementNo' => 'setAgreementNo',
        'amount' => 'setAmount',
        'dealTime' => 'setDealTime',
        'employeeId' => 'setEmployeeId',
        'employeeIdType' => 'setEmployeeIdType',
        'employeeOpenId' => 'setEmployeeOpenId',
        'enterpriseId' => 'setEnterpriseId',
        'extend' => 'setExtend',
        'isOffSet' => 'setIsOffSet',
        'outSourceId' => 'setOutSourceId',
        'platform' => 'setPlatform',
        'relateNo' => 'setRelateNo',
        'standardId' => 'setStandardId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'agreementNo' => 'getAgreementNo',
        'amount' => 'getAmount',
        'dealTime' => 'getDealTime',
        'employeeId' => 'getEmployeeId',
        'employeeIdType' => 'getEmployeeIdType',
        'employeeOpenId' => 'getEmployeeOpenId',
        'enterpriseId' => 'getEnterpriseId',
        'extend' => 'getExtend',
        'isOffSet' => 'getIsOffSet',
        'outSourceId' => 'getOutSourceId',
        'platform' => 'getPlatform',
        'relateNo' => 'getRelateNo',
        'standardId' => 'getStandardId'
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['dealTime'] = $data['dealTime'] ?? null;
        $this->container['employeeId'] = $data['employeeId'] ?? null;
        $this->container['employeeIdType'] = $data['employeeIdType'] ?? null;
        $this->container['employeeOpenId'] = $data['employeeOpenId'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['extend'] = $data['extend'] ?? null;
        $this->container['isOffSet'] = $data['isOffSet'] ?? null;
        $this->container['outSourceId'] = $data['outSourceId'] ?? null;
        $this->container['platform'] = $data['platform'] ?? null;
        $this->container['relateNo'] = $data['relateNo'] ?? null;
        $this->container['standardId'] = $data['standardId'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 企业共同账户id
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 授权签约协议号
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount 消费金额 特殊说明：单位为分的正整数
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets dealTime
     *
     * @return string|null
     */
    public function getDealTime()
    {
        return $this->container['dealTime'];
    }

    /**
     * Sets dealTime
     *
     * @param string|null $dealTime 交易发生时间
     *
     * @return self
     */
    public function setDealTime($dealTime)
    {
        $this->container['dealTime'] = $dealTime;

        return $this;
    }

    /**
     * Gets employeeId
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employeeId'];
    }

    /**
     * Sets employeeId
     *
     * @param string|null $employeeId 切换open_id前请使用此字段：员工ID 特殊说明：根据员工账号类型来决定为员工UID、员工工号、员工企业码ID或者员工手机号
     *
     * @return self
     */
    public function setEmployeeId($employeeId)
    {
        $this->container['employeeId'] = $employeeId;

        return $this;
    }

    /**
     * Gets employeeIdType
     *
     * @return int|null
     */
    public function getEmployeeIdType()
    {
        return $this->container['employeeIdType'];
    }

    /**
     * Sets employeeIdType
     *
     * @param int|null $employeeIdType 员工账号类型 枚举值： 0（员工支付宝账号/open_id） 1（ 员工工号） 2（员工企业码id） 3（员工手机号）
     *
     * @return self
     */
    public function setEmployeeIdType($employeeIdType)
    {
        $this->container['employeeIdType'] = $employeeIdType;

        return $this;
    }

    /**
     * Gets employeeOpenId
     *
     * @return string|null
     */
    public function getEmployeeOpenId()
    {
        return $this->container['employeeOpenId'];
    }

    /**
     * Sets employeeOpenId
     *
     * @param string|null $employeeOpenId 切换open_id后请使用此字段：员工ID 特殊说明：根据员工账号类型来决定为open_id、员工工号、员工企业码ID或者员工手机号
     *
     * @return self
     */
    public function setEmployeeOpenId($employeeOpenId)
    {
        $this->container['employeeOpenId'] = $employeeOpenId;

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
     * @param string|null $enterpriseId 企业id
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets extend
     *
     * @return string|null
     */
    public function getExtend()
    {
        return $this->container['extend'];
    }

    /**
     * Sets extend
     *
     * @param string|null $extend 拓展参数，如果控制消费的城市，可传入消费城市的adcode，如需使用，请联系技术支持
     *
     * @return self
     */
    public function setExtend($extend)
    {
        $this->container['extend'] = $extend;

        return $this;
    }

    /**
     * Gets isOffSet
     *
     * @return int|null
     */
    public function getIsOffSet()
    {
        return $this->container['isOffSet'];
    }

    /**
     * Sets isOffSet
     *
     * @param int|null $isOffSet 交易类型 枚举值： 0（扣款） 1（退款）
     *
     * @return self
     */
    public function setIsOffSet($isOffSet)
    {
        $this->container['isOffSet'] = $isOffSet;

        return $this;
    }

    /**
     * Gets outSourceId
     *
     * @return string|null
     */
    public function getOutSourceId()
    {
        return $this->container['outSourceId'];
    }

    /**
     * Sets outSourceId
     *
     * @param string|null $outSourceId 外部交易支付单号
     *
     * @return self
     */
    public function setOutSourceId($outSourceId)
    {
        $this->container['outSourceId'] = $outSourceId;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string|null $platform 外部平台编码（联系技术支持分配）
     *
     * @return self
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets relateNo
     *
     * @return string|null
     */
    public function getRelateNo()
    {
        return $this->container['relateNo'];
    }

    /**
     * Sets relateNo
     *
     * @param string|null $relateNo 外部交易退款单号 特殊说明：交易类型为退款的时候传入，多次退款传入不同的退款单号
     *
     * @return self
     */
    public function setRelateNo($relateNo)
    {
        $this->container['relateNo'] = $relateNo;

        return $this;
    }

    /**
     * Gets standardId
     *
     * @return string|null
     */
    public function getStandardId()
    {
        return $this->container['standardId'];
    }

    /**
     * Sets standardId
     *
     * @param string|null $standardId 费控规则ID 特殊说明：该交易绑定的支付宝费控规则ID
     *
     * @return self
     */
    public function setStandardId($standardId)
    {
        $this->container['standardId'] = $standardId;

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


