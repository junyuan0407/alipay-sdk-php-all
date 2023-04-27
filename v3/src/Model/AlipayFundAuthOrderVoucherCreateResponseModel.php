<?php
/**
 * AlipayFundAuthOrderVoucherCreateResponseModel
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
 * AlipayFundAuthOrderVoucherCreateResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundAuthOrderVoucherCreateResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundAuthOrderVoucherCreateResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'codeType' => 'string',
        'codeUrl' => 'string',
        'codeValue' => 'string',
        'outOrderNo' => 'string',
        'outRequestNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'codeType' => null,
        'codeUrl' => null,
        'codeValue' => null,
        'outOrderNo' => null,
        'outRequestNo' => null
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
        'codeType' => 'code_type',
        'codeUrl' => 'code_url',
        'codeValue' => 'code_value',
        'outOrderNo' => 'out_order_no',
        'outRequestNo' => 'out_request_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codeType' => 'setCodeType',
        'codeUrl' => 'setCodeUrl',
        'codeValue' => 'setCodeValue',
        'outOrderNo' => 'setOutOrderNo',
        'outRequestNo' => 'setOutRequestNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codeType' => 'getCodeType',
        'codeUrl' => 'getCodeUrl',
        'codeValue' => 'getCodeValue',
        'outOrderNo' => 'getOutOrderNo',
        'outRequestNo' => 'getOutRequestNo'
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
        $this->container['codeType'] = $data['codeType'] ?? null;
        $this->container['codeUrl'] = $data['codeUrl'] ?? null;
        $this->container['codeValue'] = $data['codeValue'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
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
     * Gets codeType
     *
     * @return string|null
     */
    public function getCodeType()
    {
        return $this->container['codeType'];
    }

    /**
     * Sets codeType
     *
     * @param string|null $codeType 码类型，分为  barCode：条形码 (一维码) 和 qrCode:二维码(qrCode) ；  目前发码只支持 qrCode
     *
     * @return self
     */
    public function setCodeType($codeType)
    {
        $this->container['codeType'] = $codeType;

        return $this;
    }

    /**
     * Gets codeUrl
     *
     * @return string|null
     */
    public function getCodeUrl()
    {
        return $this->container['codeUrl'];
    }

    /**
     * Sets codeUrl
     *
     * @param string|null $codeUrl 生成的带有支付宝logo的二维码地址，如：http://mobilecodec.alipay.com/show.htm?code=aeparsv2dknkqf3018556a；商户端通过在末尾追加picSize来指定要显示的图片大小，如  显示1280大小的URL:http://mobilecodec.alipay.com/show.htm?code=aeparsv2dknkqf3018556a&picSize=1280；目前支持的大小有：256, 227, 270, 344, 430, 512, 570, 860, 1280, 1546；
     *
     * @return self
     */
    public function setCodeUrl($codeUrl)
    {
        $this->container['codeUrl'] = $codeUrl;

        return $this;
    }

    /**
     * Gets codeValue
     *
     * @return string|null
     */
    public function getCodeValue()
    {
        return $this->container['codeValue'];
    }

    /**
     * Sets codeValue
     *
     * @param string|null $codeValue 当前发码请求生成的二维码码串，商户端可以利用二维码生成工具根据该码串值生成对应的二维码
     *
     * @return self
     */
    public function setCodeValue($codeValue)
    {
        $this->container['codeValue'] = $codeValue;

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
     * @param string|null $outOrderNo 商户的授权资金订单号
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

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
     * @param string|null $outRequestNo 商户本次资金操作的请求流水号
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

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


