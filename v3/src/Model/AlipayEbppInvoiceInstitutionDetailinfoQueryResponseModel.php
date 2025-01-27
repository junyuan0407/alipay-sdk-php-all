<?php
/**
 * AlipayEbppInvoiceInstitutionDetailinfoQueryResponseModel
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
 * AlipayEbppInvoiceInstitutionDetailinfoQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceInstitutionDetailinfoQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceInstitutionDetailinfoQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'consultMode' => 'string',
        'effective' => 'string',
        'effectiveEndDate' => 'string',
        'effectiveStartDate' => 'string',
        'expenseType' => 'string',
        'institutionDesc' => 'string',
        'institutionId' => 'string',
        'institutionName' => 'string',
        'issueRuleInfoList' => '\Alipay\OpenAPISDK\Model\IssueRuleInfo[]',
        'sceneType' => 'string',
        'standardInfoDetailList' => '\Alipay\OpenAPISDK\Model\StandardInfo[]',
        'standardInfoList' => '\Alipay\OpenAPISDK\Model\StandardInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'consultMode' => null,
        'effective' => null,
        'effectiveEndDate' => null,
        'effectiveStartDate' => null,
        'expenseType' => null,
        'institutionDesc' => null,
        'institutionId' => null,
        'institutionName' => null,
        'issueRuleInfoList' => null,
        'sceneType' => null,
        'standardInfoDetailList' => null,
        'standardInfoList' => null
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
        'consultMode' => 'consult_mode',
        'effective' => 'effective',
        'effectiveEndDate' => 'effective_end_date',
        'effectiveStartDate' => 'effective_start_date',
        'expenseType' => 'expense_type',
        'institutionDesc' => 'institution_desc',
        'institutionId' => 'institution_id',
        'institutionName' => 'institution_name',
        'issueRuleInfoList' => 'issue_rule_info_list',
        'sceneType' => 'scene_type',
        'standardInfoDetailList' => 'standard_info_detail_list',
        'standardInfoList' => 'standard_info_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consultMode' => 'setConsultMode',
        'effective' => 'setEffective',
        'effectiveEndDate' => 'setEffectiveEndDate',
        'effectiveStartDate' => 'setEffectiveStartDate',
        'expenseType' => 'setExpenseType',
        'institutionDesc' => 'setInstitutionDesc',
        'institutionId' => 'setInstitutionId',
        'institutionName' => 'setInstitutionName',
        'issueRuleInfoList' => 'setIssueRuleInfoList',
        'sceneType' => 'setSceneType',
        'standardInfoDetailList' => 'setStandardInfoDetailList',
        'standardInfoList' => 'setStandardInfoList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consultMode' => 'getConsultMode',
        'effective' => 'getEffective',
        'effectiveEndDate' => 'getEffectiveEndDate',
        'effectiveStartDate' => 'getEffectiveStartDate',
        'expenseType' => 'getExpenseType',
        'institutionDesc' => 'getInstitutionDesc',
        'institutionId' => 'getInstitutionId',
        'institutionName' => 'getInstitutionName',
        'issueRuleInfoList' => 'getIssueRuleInfoList',
        'sceneType' => 'getSceneType',
        'standardInfoDetailList' => 'getStandardInfoDetailList',
        'standardInfoList' => 'getStandardInfoList'
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
        $this->container['consultMode'] = $data['consultMode'] ?? null;
        $this->container['effective'] = $data['effective'] ?? null;
        $this->container['effectiveEndDate'] = $data['effectiveEndDate'] ?? null;
        $this->container['effectiveStartDate'] = $data['effectiveStartDate'] ?? null;
        $this->container['expenseType'] = $data['expenseType'] ?? null;
        $this->container['institutionDesc'] = $data['institutionDesc'] ?? null;
        $this->container['institutionId'] = $data['institutionId'] ?? null;
        $this->container['institutionName'] = $data['institutionName'] ?? null;
        $this->container['issueRuleInfoList'] = $data['issueRuleInfoList'] ?? null;
        $this->container['sceneType'] = $data['sceneType'] ?? null;
        $this->container['standardInfoDetailList'] = $data['standardInfoDetailList'] ?? null;
        $this->container['standardInfoList'] = $data['standardInfoList'] ?? null;
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
     * Gets consultMode
     *
     * @return string|null
     */
    public function getConsultMode()
    {
        return $this->container['consultMode'];
    }

    /**
     * Sets consultMode
     *
     * @param string|null $consultMode 费控咨询模式 0-支付宝内部计算 1-咨询外部服务商
     *
     * @return self
     */
    public function setConsultMode($consultMode)
    {
        $this->container['consultMode'] = $consultMode;

        return $this;
    }

    /**
     * Gets effective
     *
     * @return string|null
     */
    public function getEffective()
    {
        return $this->container['effective'];
    }

    /**
     * Sets effective
     *
     * @param string|null $effective 制度启用停用状态 0-停用，1-启用
     *
     * @return self
     */
    public function setEffective($effective)
    {
        $this->container['effective'] = $effective;

        return $this;
    }

    /**
     * Gets effectiveEndDate
     *
     * @return string|null
     */
    public function getEffectiveEndDate()
    {
        return $this->container['effectiveEndDate'];
    }

    /**
     * Sets effectiveEndDate
     *
     * @param string|null $effectiveEndDate 制度生效结束时间，最小粒度为天，结束时间不早于起始时间，时分秒必须为23:59:59，最晚不超过2222-01-01 23:59:59
     *
     * @return self
     */
    public function setEffectiveEndDate($effectiveEndDate)
    {
        $this->container['effectiveEndDate'] = $effectiveEndDate;

        return $this;
    }

    /**
     * Gets effectiveStartDate
     *
     * @return string|null
     */
    public function getEffectiveStartDate()
    {
        return $this->container['effectiveStartDate'];
    }

    /**
     * Sets effectiveStartDate
     *
     * @param string|null $effectiveStartDate 制度生效起始时间，最小粒度为天，最早是当日，时分秒必须为00:00:00。
     *
     * @return self
     */
    public function setEffectiveStartDate($effectiveStartDate)
    {
        $this->container['effectiveStartDate'] = $effectiveStartDate;

        return $this;
    }

    /**
     * Gets expenseType
     *
     * @return string|null
     */
    public function getExpenseType()
    {
        return $this->container['expenseType'];
    }

    /**
     * Sets expenseType
     *
     * @param string|null $expenseType 费用类型 枚举值：MEAL（餐饮），DEFAULT（通用）
     *
     * @return self
     */
    public function setExpenseType($expenseType)
    {
        $this->container['expenseType'] = $expenseType;

        return $this;
    }

    /**
     * Gets institutionDesc
     *
     * @return string|null
     */
    public function getInstitutionDesc()
    {
        return $this->container['institutionDesc'];
    }

    /**
     * Sets institutionDesc
     *
     * @param string|null $institutionDesc 制度描述
     *
     * @return self
     */
    public function setInstitutionDesc($institutionDesc)
    {
        $this->container['institutionDesc'] = $institutionDesc;

        return $this;
    }

    /**
     * Gets institutionId
     *
     * @return string|null
     */
    public function getInstitutionId()
    {
        return $this->container['institutionId'];
    }

    /**
     * Sets institutionId
     *
     * @param string|null $institutionId 制度id
     *
     * @return self
     */
    public function setInstitutionId($institutionId)
    {
        $this->container['institutionId'] = $institutionId;

        return $this;
    }

    /**
     * Gets institutionName
     *
     * @return string|null
     */
    public function getInstitutionName()
    {
        return $this->container['institutionName'];
    }

    /**
     * Sets institutionName
     *
     * @param string|null $institutionName 制度名称
     *
     * @return self
     */
    public function setInstitutionName($institutionName)
    {
        $this->container['institutionName'] = $institutionName;

        return $this;
    }

    /**
     * Gets issueRuleInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\IssueRuleInfo[]|null
     */
    public function getIssueRuleInfoList()
    {
        return $this->container['issueRuleInfoList'];
    }

    /**
     * Sets issueRuleInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\IssueRuleInfo[]|null $issueRuleInfoList 发放规则列表
     *
     * @return self
     */
    public function setIssueRuleInfoList($issueRuleInfoList)
    {
        $this->container['issueRuleInfoList'] = $issueRuleInfoList;

        return $this;
    }

    /**
     * Gets sceneType
     *
     * @return string|null
     */
    public function getSceneType()
    {
        return $this->container['sceneType'];
    }

    /**
     * Sets sceneType
     *
     * @param string|null $sceneType 因公场景 ，枚举值：OVERTIME（加班），SUBSIDY（补贴福利），TRAVEL（差旅），ENTERTAIN（招待），DEFAULT（通用）
     *
     * @return self
     */
    public function setSceneType($sceneType)
    {
        $this->container['sceneType'] = $sceneType;

        return $this;
    }

    /**
     * Gets standardInfoDetailList
     *
     * @return \Alipay\OpenAPISDK\Model\StandardInfo[]|null
     */
    public function getStandardInfoDetailList()
    {
        return $this->container['standardInfoDetailList'];
    }

    /**
     * Sets standardInfoDetailList
     *
     * @param \Alipay\OpenAPISDK\Model\StandardInfo[]|null $standardInfoDetailList 使用规则列表
     *
     * @return self
     */
    public function setStandardInfoDetailList($standardInfoDetailList)
    {
        $this->container['standardInfoDetailList'] = $standardInfoDetailList;

        return $this;
    }

    /**
     * Gets standardInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\StandardInfo|null
     */
    public function getStandardInfoList()
    {
        return $this->container['standardInfoList'];
    }

    /**
     * Sets standardInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\StandardInfo|null $standardInfoList standardInfoList
     *
     * @return self
     */
    public function setStandardInfoList($standardInfoList)
    {
        $this->container['standardInfoList'] = $standardInfoList;

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


