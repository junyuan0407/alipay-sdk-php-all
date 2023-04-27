<?php
/**
 * AlipayTradeRoyaltyRelationBatchqueryResponseModel
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
 * AlipayTradeRoyaltyRelationBatchqueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeRoyaltyRelationBatchqueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeRoyaltyRelationBatchqueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currentPageNum' => 'int',
        'currentPageSize' => 'int',
        'receiverList' => '\Alipay\OpenAPISDK\Model\RoyaltyEntity[]',
        'resultCode' => 'string',
        'totalPageNum' => 'int',
        'totalRecordNum' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currentPageNum' => null,
        'currentPageSize' => null,
        'receiverList' => null,
        'resultCode' => null,
        'totalPageNum' => null,
        'totalRecordNum' => null
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
        'currentPageNum' => 'current_page_num',
        'currentPageSize' => 'current_page_size',
        'receiverList' => 'receiver_list',
        'resultCode' => 'result_code',
        'totalPageNum' => 'total_page_num',
        'totalRecordNum' => 'total_record_num'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currentPageNum' => 'setCurrentPageNum',
        'currentPageSize' => 'setCurrentPageSize',
        'receiverList' => 'setReceiverList',
        'resultCode' => 'setResultCode',
        'totalPageNum' => 'setTotalPageNum',
        'totalRecordNum' => 'setTotalRecordNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currentPageNum' => 'getCurrentPageNum',
        'currentPageSize' => 'getCurrentPageSize',
        'receiverList' => 'getReceiverList',
        'resultCode' => 'getResultCode',
        'totalPageNum' => 'getTotalPageNum',
        'totalRecordNum' => 'getTotalRecordNum'
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
        $this->container['currentPageNum'] = $data['currentPageNum'] ?? null;
        $this->container['currentPageSize'] = $data['currentPageSize'] ?? null;
        $this->container['receiverList'] = $data['receiverList'] ?? null;
        $this->container['resultCode'] = $data['resultCode'] ?? null;
        $this->container['totalPageNum'] = $data['totalPageNum'] ?? null;
        $this->container['totalRecordNum'] = $data['totalRecordNum'] ?? null;
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
     * Gets currentPageNum
     *
     * @return int|null
     */
    public function getCurrentPageNum()
    {
        return $this->container['currentPageNum'];
    }

    /**
     * Sets currentPageNum
     *
     * @param int|null $currentPageNum 当前页数
     *
     * @return self
     */
    public function setCurrentPageNum($currentPageNum)
    {
        $this->container['currentPageNum'] = $currentPageNum;

        return $this;
    }

    /**
     * Gets currentPageSize
     *
     * @return int|null
     */
    public function getCurrentPageSize()
    {
        return $this->container['currentPageSize'];
    }

    /**
     * Sets currentPageSize
     *
     * @param int|null $currentPageSize 当前页面大小
     *
     * @return self
     */
    public function setCurrentPageSize($currentPageSize)
    {
        $this->container['currentPageSize'] = $currentPageSize;

        return $this;
    }

    /**
     * Gets receiverList
     *
     * @return \Alipay\OpenAPISDK\Model\RoyaltyEntity[]|null
     */
    public function getReceiverList()
    {
        return $this->container['receiverList'];
    }

    /**
     * Sets receiverList
     *
     * @param \Alipay\OpenAPISDK\Model\RoyaltyEntity[]|null $receiverList 分账收款方列表
     *
     * @return self
     */
    public function setReceiverList($receiverList)
    {
        $this->container['receiverList'] = $receiverList;

        return $this;
    }

    /**
     * Gets resultCode
     *
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
     * Sets resultCode
     *
     * @param string|null $resultCode 业务结果码。SUCCESS：分账关系查询成功；FAIL：分账关系查询失败。
     *
     * @return self
     */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets totalPageNum
     *
     * @return int|null
     */
    public function getTotalPageNum()
    {
        return $this->container['totalPageNum'];
    }

    /**
     * Sets totalPageNum
     *
     * @param int|null $totalPageNum 总页数
     *
     * @return self
     */
    public function setTotalPageNum($totalPageNum)
    {
        $this->container['totalPageNum'] = $totalPageNum;

        return $this;
    }

    /**
     * Gets totalRecordNum
     *
     * @return int|null
     */
    public function getTotalRecordNum()
    {
        return $this->container['totalRecordNum'];
    }

    /**
     * Sets totalRecordNum
     *
     * @param int|null $totalRecordNum 分账关系记录总数
     *
     * @return self
     */
    public function setTotalRecordNum($totalRecordNum)
    {
        $this->container['totalRecordNum'] = $totalRecordNum;

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


