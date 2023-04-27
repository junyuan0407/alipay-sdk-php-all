<?php
/**
 * AlipayEbppPdeductPayResponseModel
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
 * AlipayEbppPdeductPayResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppPdeductPayResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppPdeductPayResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementId' => 'string',
        'billNo' => 'string',
        'extendField' => 'string',
        'outOrderNo' => 'string',
        'resultCode' => 'string',
        'resultMsg' => 'string',
        'resultStatus' => 'string'
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
        'billNo' => null,
        'extendField' => null,
        'outOrderNo' => null,
        'resultCode' => null,
        'resultMsg' => null,
        'resultStatus' => null
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
        'billNo' => 'bill_no',
        'extendField' => 'extend_field',
        'outOrderNo' => 'out_order_no',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'resultStatus' => 'result_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementId' => 'setAgreementId',
        'billNo' => 'setBillNo',
        'extendField' => 'setExtendField',
        'outOrderNo' => 'setOutOrderNo',
        'resultCode' => 'setResultCode',
        'resultMsg' => 'setResultMsg',
        'resultStatus' => 'setResultStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementId' => 'getAgreementId',
        'billNo' => 'getBillNo',
        'extendField' => 'getExtendField',
        'outOrderNo' => 'getOutOrderNo',
        'resultCode' => 'getResultCode',
        'resultMsg' => 'getResultMsg',
        'resultStatus' => 'getResultStatus'
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
        $this->container['billNo'] = $data['billNo'] ?? null;
        $this->container['extendField'] = $data['extendField'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
        $this->container['resultCode'] = $data['resultCode'] ?? null;
        $this->container['resultMsg'] = $data['resultMsg'] ?? null;
        $this->container['resultStatus'] = $data['resultStatus'] ?? null;
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
     * @param string|null $agreementId 支付宝代扣协议ID
     *
     * @return self
     */
    public function setAgreementId($agreementId)
    {
        $this->container['agreementId'] = $agreementId;

        return $this;
    }

    /**
     * Gets billNo
     *
     * @return string|null
     */
    public function getBillNo()
    {
        return $this->container['billNo'];
    }

    /**
     * Sets billNo
     *
     * @param string|null $billNo 支付宝订单流水号
     *
     * @return self
     */
    public function setBillNo($billNo)
    {
        $this->container['billNo'] = $billNo;

        return $this;
    }

    /**
     * Gets extendField
     *
     * @return string|null
     */
    public function getExtendField()
    {
        return $this->container['extendField'];
    }

    /**
     * Sets extendField
     *
     * @param string|null $extendField 扩展参数
     *
     * @return self
     */
    public function setExtendField($extendField)
    {
        $this->container['extendField'] = $extendField;

        return $this;
    }

    /**
     * Gets outOrderNo
     *
     * @return string|null
     */
    public function getOutOrderNo()
    {
        return $this->container['outOrderNo'];
    }

    /**
     * Sets outOrderNo
     *
     * @param string|null $outOrderNo 商户代扣业务流水
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

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
     * @param string|null $resultCode 针对于支付失败时，给的对应错误明细，如果判断外围的错误码是INVOKE_PAYACCEPTANCE_EXCEPTION需要近一步再结合着结果模型中的result_code, result_msg来判断
     *
     * @return self
     */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets resultMsg
     *
     * @return string|null
     */
    public function getResultMsg()
    {
        return $this->container['resultMsg'];
    }

    /**
     * Sets resultMsg
     *
     * @param string|null $resultMsg 针对于支付失败时，给的对应错误明细，如果判断外围的错误码是INVOKE_PAYACCEPTANCE_EXCEPTION需要近一步再结合着结果模型中的result_code, result_msg来判断
     *
     * @return self
     */
    public function setResultMsg($resultMsg)
    {
        $this->container['resultMsg'] = $resultMsg;

        return $this;
    }

    /**
     * Gets resultStatus
     *
     * @return string|null
     */
    public function getResultStatus()
    {
        return $this->container['resultStatus'];
    }

    /**
     * Sets resultStatus
     *
     * @param string|null $resultStatus 订单支付状态。  0：未知  1：成功  2：失败
     *
     * @return self
     */
    public function setResultStatus($resultStatus)
    {
        $this->container['resultStatus'] = $resultStatus;

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


