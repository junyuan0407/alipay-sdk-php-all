<?php
/**
 * AlipayEbppInvoiceExpenserulesProjectruleCreateModel
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
 * AlipayEbppInvoiceExpenserulesProjectruleCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceExpenserulesProjectruleCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceExpenserulesProjectruleCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'agreementNo' => 'string',
        'effectiveEndDate' => 'string',
        'effectiveStartDate' => 'string',
        'employeeList' => 'string[]',
        'employeeOpenIdList' => 'string[]',
        'expenseCtrlRuleInfoGroupList' => '\Alipay\OpenAPISDK\Model\ExpenseCtrRuleGroupInfo[]',
        'projectName' => 'string'
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
        'effectiveEndDate' => null,
        'effectiveStartDate' => null,
        'employeeList' => null,
        'employeeOpenIdList' => null,
        'expenseCtrlRuleInfoGroupList' => null,
        'projectName' => null
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
        'effectiveEndDate' => 'effective_end_date',
        'effectiveStartDate' => 'effective_start_date',
        'employeeList' => 'employee_list',
        'employeeOpenIdList' => 'employee_open_id_list',
        'expenseCtrlRuleInfoGroupList' => 'expense_ctrl_rule_info_group_list',
        'projectName' => 'project_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'agreementNo' => 'setAgreementNo',
        'effectiveEndDate' => 'setEffectiveEndDate',
        'effectiveStartDate' => 'setEffectiveStartDate',
        'employeeList' => 'setEmployeeList',
        'employeeOpenIdList' => 'setEmployeeOpenIdList',
        'expenseCtrlRuleInfoGroupList' => 'setExpenseCtrlRuleInfoGroupList',
        'projectName' => 'setProjectName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'agreementNo' => 'getAgreementNo',
        'effectiveEndDate' => 'getEffectiveEndDate',
        'effectiveStartDate' => 'getEffectiveStartDate',
        'employeeList' => 'getEmployeeList',
        'employeeOpenIdList' => 'getEmployeeOpenIdList',
        'expenseCtrlRuleInfoGroupList' => 'getExpenseCtrlRuleInfoGroupList',
        'projectName' => 'getProjectName'
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
        $this->container['effectiveEndDate'] = $data['effectiveEndDate'] ?? null;
        $this->container['effectiveStartDate'] = $data['effectiveStartDate'] ?? null;
        $this->container['employeeList'] = $data['employeeList'] ?? null;
        $this->container['employeeOpenIdList'] = $data['employeeOpenIdList'] ?? null;
        $this->container['expenseCtrlRuleInfoGroupList'] = $data['expenseCtrlRuleInfoGroupList'] ?? null;
        $this->container['projectName'] = $data['projectName'] ?? null;
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
     * @param string|null $accountId 共同账户id
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
     * @param string|null $effectiveEndDate 有效期截止（yyyy-MM-dd HH:mm:ss，必须大于起始时间）
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
     * @param string|null $effectiveStartDate 有效期起始（yyyy-MM-dd HH:mm:ss，必须小于截止时间）
     *
     * @return self
     */
    public function setEffectiveStartDate($effectiveStartDate)
    {
        $this->container['effectiveStartDate'] = $effectiveStartDate;

        return $this;
    }

    /**
     * Gets employeeList
     *
     * @return string[]|null
     */
    public function getEmployeeList()
    {
        return $this->container['employeeList'];
    }

    /**
     * Sets employeeList
     *
     * @param string[]|null $employeeList 切换open_id前使用此字段：员工支付宝ID列表 特殊说明：单次传入的最大员工数为50，后续通过修改项目的员工列表接口进行员工调整
     *
     * @return self
     */
    public function setEmployeeList($employeeList)
    {
        $this->container['employeeList'] = $employeeList;

        return $this;
    }

    /**
     * Gets employeeOpenIdList
     *
     * @return string[]|null
     */
    public function getEmployeeOpenIdList()
    {
        return $this->container['employeeOpenIdList'];
    }

    /**
     * Sets employeeOpenIdList
     *
     * @param string[]|null $employeeOpenIdList 切换open_id后使用此字段：员工open_id列表 特殊说明：单次传入的最大员工数为50，后续通过修改项目的员工列表接口进行员工调整
     *
     * @return self
     */
    public function setEmployeeOpenIdList($employeeOpenIdList)
    {
        $this->container['employeeOpenIdList'] = $employeeOpenIdList;

        return $this;
    }

    /**
     * Gets expenseCtrlRuleInfoGroupList
     *
     * @return \Alipay\OpenAPISDK\Model\ExpenseCtrRuleGroupInfo[]|null
     */
    public function getExpenseCtrlRuleInfoGroupList()
    {
        return $this->container['expenseCtrlRuleInfoGroupList'];
    }

    /**
     * Sets expenseCtrlRuleInfoGroupList
     *
     * @param \Alipay\OpenAPISDK\Model\ExpenseCtrRuleGroupInfo[]|null $expenseCtrlRuleInfoGroupList 费控规则列表
     *
     * @return self
     */
    public function setExpenseCtrlRuleInfoGroupList($expenseCtrlRuleInfoGroupList)
    {
        $this->container['expenseCtrlRuleInfoGroupList'] = $expenseCtrlRuleInfoGroupList;

        return $this;
    }

    /**
     * Gets projectName
     *
     * @return string|null
     */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
     * Sets projectName
     *
     * @param string|null $projectName 项目名称 约束： 1）敏感词校验 2）不能重复
     *
     * @return self
     */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;

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


