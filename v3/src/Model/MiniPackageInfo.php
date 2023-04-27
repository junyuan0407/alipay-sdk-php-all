<?php
/**
 * MiniPackageInfo
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
 * MiniPackageInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MiniPackageInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MiniPackageInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'docUrl' => 'string',
        'packageDesc' => 'string',
        'packageName' => 'string',
        'packageOpenType' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'docUrl' => null,
        'packageDesc' => null,
        'packageName' => null,
        'packageOpenType' => null,
        'status' => null
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
        'docUrl' => 'doc_url',
        'packageDesc' => 'package_desc',
        'packageName' => 'package_name',
        'packageOpenType' => 'package_open_type',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'docUrl' => 'setDocUrl',
        'packageDesc' => 'setPackageDesc',
        'packageName' => 'setPackageName',
        'packageOpenType' => 'setPackageOpenType',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'docUrl' => 'getDocUrl',
        'packageDesc' => 'getPackageDesc',
        'packageName' => 'getPackageName',
        'packageOpenType' => 'getPackageOpenType',
        'status' => 'getStatus'
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
        $this->container['docUrl'] = $data['docUrl'] ?? null;
        $this->container['packageDesc'] = $data['packageDesc'] ?? null;
        $this->container['packageName'] = $data['packageName'] ?? null;
        $this->container['packageOpenType'] = $data['packageOpenType'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets docUrl
     *
     * @return string|null
     */
    public function getDocUrl()
    {
        return $this->container['docUrl'];
    }

    /**
     * Sets docUrl
     *
     * @param string|null $docUrl 功能包文档地址
     *
     * @return self
     */
    public function setDocUrl($docUrl)
    {
        $this->container['docUrl'] = $docUrl;

        return $this;
    }

    /**
     * Gets packageDesc
     *
     * @return string|null
     */
    public function getPackageDesc()
    {
        return $this->container['packageDesc'];
    }

    /**
     * Sets packageDesc
     *
     * @param string|null $packageDesc 功能包描述
     *
     * @return self
     */
    public function setPackageDesc($packageDesc)
    {
        $this->container['packageDesc'] = $packageDesc;

        return $this;
    }

    /**
     * Gets packageName
     *
     * @return string|null
     */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
     * Sets packageName
     *
     * @param string|null $packageName 功能包名称
     *
     * @return self
     */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;

        return $this;
    }

    /**
     * Gets packageOpenType
     *
     * @return string|null
     */
    public function getPackageOpenType()
    {
        return $this->container['packageOpenType'];
    }

    /**
     * Sets packageOpenType
     *
     * @param string|null $packageOpenType 功能包开通方式，\"APPLY\", \"申请开通\"；\"ORDER\", \"签约开通\"；\"DEFAULT\", \"默认开通\"
     *
     * @return self
     */
    public function setPackageOpenType($packageOpenType)
    {
        $this->container['packageOpenType'] = $packageOpenType;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 功能包签约状态，\"valid\", \"已生效\"；\"audit\", \"签约中\"；\"invalid\", \"已失效\"；\"none\", \"未签约\"
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


