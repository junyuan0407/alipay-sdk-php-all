<?php
/**
 * AlipayOpenAgentMiniCreateModel
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
 * AlipayOpenAgentMiniCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAgentMiniCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenAgentMiniCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appCategoryIds' => 'string',
        'appDesc' => 'string',
        'appEnglishName' => 'string',
        'appName' => 'string',
        'appSlogan' => 'string',
        'batchNo' => 'string',
        'miniCategoryIds' => 'string',
        'serviceEmail' => 'string',
        'servicePhone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appCategoryIds' => null,
        'appDesc' => null,
        'appEnglishName' => null,
        'appName' => null,
        'appSlogan' => null,
        'batchNo' => null,
        'miniCategoryIds' => null,
        'serviceEmail' => null,
        'servicePhone' => null
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
        'appCategoryIds' => 'app_category_ids',
        'appDesc' => 'app_desc',
        'appEnglishName' => 'app_english_name',
        'appName' => 'app_name',
        'appSlogan' => 'app_slogan',
        'batchNo' => 'batch_no',
        'miniCategoryIds' => 'mini_category_ids',
        'serviceEmail' => 'service_email',
        'servicePhone' => 'service_phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appCategoryIds' => 'setAppCategoryIds',
        'appDesc' => 'setAppDesc',
        'appEnglishName' => 'setAppEnglishName',
        'appName' => 'setAppName',
        'appSlogan' => 'setAppSlogan',
        'batchNo' => 'setBatchNo',
        'miniCategoryIds' => 'setMiniCategoryIds',
        'serviceEmail' => 'setServiceEmail',
        'servicePhone' => 'setServicePhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appCategoryIds' => 'getAppCategoryIds',
        'appDesc' => 'getAppDesc',
        'appEnglishName' => 'getAppEnglishName',
        'appName' => 'getAppName',
        'appSlogan' => 'getAppSlogan',
        'batchNo' => 'getBatchNo',
        'miniCategoryIds' => 'getMiniCategoryIds',
        'serviceEmail' => 'getServiceEmail',
        'servicePhone' => 'getServicePhone'
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
        $this->container['appCategoryIds'] = $data['appCategoryIds'] ?? null;
        $this->container['appDesc'] = $data['appDesc'] ?? null;
        $this->container['appEnglishName'] = $data['appEnglishName'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appSlogan'] = $data['appSlogan'] ?? null;
        $this->container['batchNo'] = $data['batchNo'] ?? null;
        $this->container['miniCategoryIds'] = $data['miniCategoryIds'] ?? null;
        $this->container['serviceEmail'] = $data['serviceEmail'] ?? null;
        $this->container['servicePhone'] = $data['servicePhone'] ?? null;
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
     * Gets appCategoryIds
     *
     * @return string|null
     */
    public function getAppCategoryIds()
    {
        return $this->container['appCategoryIds'];
    }

    /**
     * Sets appCategoryIds
     *
     * @param string|null $appCategoryIds 小程序类目，必填，可以支持最多三个类目，最少一个，参数格式：一级类目1_二级类目1;一级类目2_二级类目2。 类目可以通过以下接口查询：alipay.open.mini.category.query
     *
     * @return self
     */
    public function setAppCategoryIds($appCategoryIds)
    {
        $this->container['appCategoryIds'] = $appCategoryIds;

        return $this;
    }

    /**
     * Gets appDesc
     *
     * @return string|null
     */
    public function getAppDesc()
    {
        return $this->container['appDesc'];
    }

    /**
     * Sets appDesc
     *
     * @param string|null $appDesc 商家小程序描述信息，简要描述小程序主要功能（20-200个字），例：xx小程序提供了xx功能，主要解决了XX问题。
     *
     * @return self
     */
    public function setAppDesc($appDesc)
    {
        $this->container['appDesc'] = $appDesc;

        return $this;
    }

    /**
     * Gets appEnglishName
     *
     * @return string|null
     */
    public function getAppEnglishName()
    {
        return $this->container['appEnglishName'];
    }

    /**
     * Sets appEnglishName
     *
     * @param string|null $appEnglishName 小程序英文名称，长度3~20个字符
     *
     * @return self
     */
    public function setAppEnglishName($appEnglishName)
    {
        $this->container['appEnglishName'] = $appEnglishName;

        return $this;
    }

    /**
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 代商家创建的小程序应用名称。名称可以由中文、数字、英文及下划线组成，长度在3-20个字符之间，一个中文字等于2个字符，更多名称规则见：https://docs.alipay.com/mini/operation/name
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appSlogan
     *
     * @return string|null
     */
    public function getAppSlogan()
    {
        return $this->container['appSlogan'];
    }

    /**
     * Sets appSlogan
     *
     * @param string|null $appSlogan 代商家创建的小程序的简介，请用一句话简要描述小程序提供的服务；应用上架后一个自然月可修改5次（10~32个字符）
     *
     * @return self
     */
    public function setAppSlogan($appSlogan)
    {
        $this->container['appSlogan'] = $appSlogan;

        return $this;
    }

    /**
     * Gets batchNo
     *
     * @return string|null
     */
    public function getBatchNo()
    {
        return $this->container['batchNo'];
    }

    /**
     * Sets batchNo
     *
     * @param string|null $batchNo ISV 代商家操作事务编号，通过事务开启接口alipay.open.agent.create调用返回。
     *
     * @return self
     */
    public function setBatchNo($batchNo)
    {
        $this->container['batchNo'] = $batchNo;

        return $this;
    }

    /**
     * Gets miniCategoryIds
     *
     * @return string|null
     */
    public function getMiniCategoryIds()
    {
        return $this->container['miniCategoryIds'];
    }

    /**
     * Sets miniCategoryIds
     *
     * @param string|null $miniCategoryIds 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 https://docs.open.alipay.com/api_49/alipay.open.mini.category.query接口查询mini_category_list。使用后不再读取app_category_ids值，老前台类目将废弃
     *
     * @return self
     */
    public function setMiniCategoryIds($miniCategoryIds)
    {
        $this->container['miniCategoryIds'] = $miniCategoryIds;

        return $this;
    }

    /**
     * Gets serviceEmail
     *
     * @return string|null
     */
    public function getServiceEmail()
    {
        return $this->container['serviceEmail'];
    }

    /**
     * Sets serviceEmail
     *
     * @param string|null $serviceEmail 商家小程序客服邮箱  商家小程序客服电话和邮箱，可以二选一填写，但不能同时为空
     *
     * @return self
     */
    public function setServiceEmail($serviceEmail)
    {
        $this->container['serviceEmail'] = $serviceEmail;

        return $this;
    }

    /**
     * Gets servicePhone
     *
     * @return string|null
     */
    public function getServicePhone()
    {
        return $this->container['servicePhone'];
    }

    /**
     * Sets servicePhone
     *
     * @param string|null $servicePhone 商家小程序的客服电话，推荐填写  商家小程序客服电话和邮箱，可以二选一填写，但不能同时为空
     *
     * @return self
     */
    public function setServicePhone($servicePhone)
    {
        $this->container['servicePhone'] = $servicePhone;

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


