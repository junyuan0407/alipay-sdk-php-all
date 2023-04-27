<?php
/**
 * ExpenseCtrlConsumeInfo
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
 * ExpenseCtrlConsumeInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseCtrlConsumeInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseCtrlConsumeInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expenseConsumeInfo' => '\Alipay\OpenAPISDK\Model\ExpenseConsumeInfo',
        'relatedEnterpriseConsumeList' => '\Alipay\OpenAPISDK\Model\ExpenseConsumeInfo[]',
        'relatedEnterpriseInvoiceList' => '\Alipay\OpenAPISDK\Model\ExpenseInvoiceInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expenseConsumeInfo' => null,
        'relatedEnterpriseConsumeList' => null,
        'relatedEnterpriseInvoiceList' => null
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
        'expenseConsumeInfo' => 'expense_consume_info',
        'relatedEnterpriseConsumeList' => 'related_enterprise_consume_list',
        'relatedEnterpriseInvoiceList' => 'related_enterprise_invoice_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expenseConsumeInfo' => 'setExpenseConsumeInfo',
        'relatedEnterpriseConsumeList' => 'setRelatedEnterpriseConsumeList',
        'relatedEnterpriseInvoiceList' => 'setRelatedEnterpriseInvoiceList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expenseConsumeInfo' => 'getExpenseConsumeInfo',
        'relatedEnterpriseConsumeList' => 'getRelatedEnterpriseConsumeList',
        'relatedEnterpriseInvoiceList' => 'getRelatedEnterpriseInvoiceList'
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
        $this->container['expenseConsumeInfo'] = $data['expenseConsumeInfo'] ?? null;
        $this->container['relatedEnterpriseConsumeList'] = $data['relatedEnterpriseConsumeList'] ?? null;
        $this->container['relatedEnterpriseInvoiceList'] = $data['relatedEnterpriseInvoiceList'] ?? null;
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
     * Gets expenseConsumeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ExpenseConsumeInfo|null
     */
    public function getExpenseConsumeInfo()
    {
        return $this->container['expenseConsumeInfo'];
    }

    /**
     * Sets expenseConsumeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ExpenseConsumeInfo|null $expenseConsumeInfo expenseConsumeInfo
     *
     * @return self
     */
    public function setExpenseConsumeInfo($expenseConsumeInfo)
    {
        $this->container['expenseConsumeInfo'] = $expenseConsumeInfo;

        return $this;
    }

    /**
     * Gets relatedEnterpriseConsumeList
     *
     * @return \Alipay\OpenAPISDK\Model\ExpenseConsumeInfo[]|null
     */
    public function getRelatedEnterpriseConsumeList()
    {
        return $this->container['relatedEnterpriseConsumeList'];
    }

    /**
     * Sets relatedEnterpriseConsumeList
     *
     * @param \Alipay\OpenAPISDK\Model\ExpenseConsumeInfo[]|null $relatedEnterpriseConsumeList 关联凑票账单列表（开票限额，多次消费后合并开票）
     *
     * @return self
     */
    public function setRelatedEnterpriseConsumeList($relatedEnterpriseConsumeList)
    {
        $this->container['relatedEnterpriseConsumeList'] = $relatedEnterpriseConsumeList;

        return $this;
    }

    /**
     * Gets relatedEnterpriseInvoiceList
     *
     * @return \Alipay\OpenAPISDK\Model\ExpenseInvoiceInfo[]|null
     */
    public function getRelatedEnterpriseInvoiceList()
    {
        return $this->container['relatedEnterpriseInvoiceList'];
    }

    /**
     * Sets relatedEnterpriseInvoiceList
     *
     * @param \Alipay\OpenAPISDK\Model\ExpenseInvoiceInfo[]|null $relatedEnterpriseInvoiceList 关联发票凭证对象
     *
     * @return self
     */
    public function setRelatedEnterpriseInvoiceList($relatedEnterpriseInvoiceList)
    {
        $this->container['relatedEnterpriseInvoiceList'] = $relatedEnterpriseInvoiceList;

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


