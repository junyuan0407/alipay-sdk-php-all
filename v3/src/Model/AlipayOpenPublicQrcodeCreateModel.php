<?php
/**
 * AlipayOpenPublicQrcodeCreateModel
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
 * AlipayOpenPublicQrcodeCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenPublicQrcodeCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenPublicQrcodeCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'codeInfo' => '\Alipay\OpenAPISDK\Model\CodeInfo',
        'codeType' => 'string',
        'expireSecond' => 'string',
        'showLogo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'codeInfo' => null,
        'codeType' => null,
        'expireSecond' => null,
        'showLogo' => null
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
        'codeInfo' => 'code_info',
        'codeType' => 'code_type',
        'expireSecond' => 'expire_second',
        'showLogo' => 'show_logo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codeInfo' => 'setCodeInfo',
        'codeType' => 'setCodeType',
        'expireSecond' => 'setExpireSecond',
        'showLogo' => 'setShowLogo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codeInfo' => 'getCodeInfo',
        'codeType' => 'getCodeType',
        'expireSecond' => 'getExpireSecond',
        'showLogo' => 'getShowLogo'
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
        $this->container['codeInfo'] = $data['codeInfo'] ?? null;
        $this->container['codeType'] = $data['codeType'] ?? null;
        $this->container['expireSecond'] = $data['expireSecond'] ?? null;
        $this->container['showLogo'] = $data['showLogo'] ?? null;
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
     * Gets codeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\CodeInfo|null
     */
    public function getCodeInfo()
    {
        return $this->container['codeInfo'];
    }

    /**
     * Sets codeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\CodeInfo|null $codeInfo codeInfo
     *
     * @return self
     */
    public function setCodeInfo($codeInfo)
    {
        $this->container['codeInfo'] = $codeInfo;

        return $this;
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
     * @param string|null $codeType 二维码类型，目前只支持两种类型：  TEMP：临时的（默认）；  PERM：永久的
     *
     * @return self
     */
    public function setCodeType($codeType)
    {
        $this->container['codeType'] = $codeType;

        return $this;
    }

    /**
     * Gets expireSecond
     *
     * @return string|null
     */
    public function getExpireSecond()
    {
        return $this->container['expireSecond'];
    }

    /**
     * Sets expireSecond
     *
     * @param string|null $expireSecond 临时码过期时间，以秒为单位，最大不超过1800秒；  永久码置空
     *
     * @return self
     */
    public function setExpireSecond($expireSecond)
    {
        $this->container['expireSecond'] = $expireSecond;

        return $this;
    }

    /**
     * Gets showLogo
     *
     * @return string|null
     */
    public function getShowLogo()
    {
        return $this->container['showLogo'];
    }

    /**
     * Sets showLogo
     *
     * @param string|null $showLogo 二维码中间是否显示服务窗logo，Y：显示；N：不显示（默认）
     *
     * @return self
     */
    public function setShowLogo($showLogo)
    {
        $this->container['showLogo'] = $showLogo;

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


