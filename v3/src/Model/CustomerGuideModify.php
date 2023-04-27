<?php
/**
 * CustomerGuideModify
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
 * CustomerGuideModify Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomerGuideModify implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerGuideModify';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'miniAppId' => 'string',
        'miniAppPath' => 'string',
        'realShopIds' => 'string[]',
        'serviceCodes' => 'string[]',
        'shopIds' => 'string[]',
        'storeIds' => 'string[]',
        'voucherSendGuide' => '\Alipay\OpenAPISDK\Model\VoucherSendGuideModify',
        'voucherUseGuide' => '\Alipay\OpenAPISDK\Model\VoucherUseGuideModify'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'miniAppId' => null,
        'miniAppPath' => null,
        'realShopIds' => null,
        'serviceCodes' => null,
        'shopIds' => null,
        'storeIds' => null,
        'voucherSendGuide' => null,
        'voucherUseGuide' => null
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
        'miniAppId' => 'mini_app_id',
        'miniAppPath' => 'mini_app_path',
        'realShopIds' => 'real_shop_ids',
        'serviceCodes' => 'service_codes',
        'shopIds' => 'shop_ids',
        'storeIds' => 'store_ids',
        'voucherSendGuide' => 'voucher_send_guide',
        'voucherUseGuide' => 'voucher_use_guide'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'miniAppId' => 'setMiniAppId',
        'miniAppPath' => 'setMiniAppPath',
        'realShopIds' => 'setRealShopIds',
        'serviceCodes' => 'setServiceCodes',
        'shopIds' => 'setShopIds',
        'storeIds' => 'setStoreIds',
        'voucherSendGuide' => 'setVoucherSendGuide',
        'voucherUseGuide' => 'setVoucherUseGuide'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'miniAppId' => 'getMiniAppId',
        'miniAppPath' => 'getMiniAppPath',
        'realShopIds' => 'getRealShopIds',
        'serviceCodes' => 'getServiceCodes',
        'shopIds' => 'getShopIds',
        'storeIds' => 'getStoreIds',
        'voucherSendGuide' => 'getVoucherSendGuide',
        'voucherUseGuide' => 'getVoucherUseGuide'
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
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['miniAppPath'] = $data['miniAppPath'] ?? null;
        $this->container['realShopIds'] = $data['realShopIds'] ?? null;
        $this->container['serviceCodes'] = $data['serviceCodes'] ?? null;
        $this->container['shopIds'] = $data['shopIds'] ?? null;
        $this->container['storeIds'] = $data['storeIds'] ?? null;
        $this->container['voucherSendGuide'] = $data['voucherSendGuide'] ?? null;
        $this->container['voucherUseGuide'] = $data['voucherUseGuide'] ?? null;
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
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 券可用的小程序 appId，卡包详情页可跳转到该 appId。
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets miniAppPath
     *
     * @return string|null
     */
    public function getMiniAppPath()
    {
        return $this->container['miniAppPath'];
    }

    /**
     * Sets miniAppPath
     *
     * @param string|null $miniAppPath 指定跳转到 mini_app_id 时的具体页面路径。
     *
     * @return self
     */
    public function setMiniAppPath($miniAppPath)
    {
        $this->container['miniAppPath'] = $miniAppPath;

        return $this;
    }

    /**
     * Gets realShopIds
     *
     * @return string[]|null
     */
    public function getRealShopIds()
    {
        return $this->container['realShopIds'];
    }

    /**
     * Sets realShopIds
     *
     * @param string[]|null $realShopIds 券可使用的商业关系门店列表,列表中的门店id是调用接口alipay.business.relation.shop.create创建门店返回的real_shop_id。
     *
     * @return self
     */
    public function setRealShopIds($realShopIds)
    {
        $this->container['realShopIds'] = $realShopIds;

        return $this;
    }

    /**
     * Gets serviceCodes
     *
     * @return string[]|null
     */
    public function getServiceCodes()
    {
        return $this->container['serviceCodes'];
    }

    /**
     * Sets serviceCodes
     *
     * @param string[]|null $serviceCodes 小程序服务编码，通过 alipay.open.app.appcontent.function.create(小程序服务创建)接口创建服务后获取。
     *
     * @return self
     */
    public function setServiceCodes($serviceCodes)
    {
        $this->container['serviceCodes'] = $serviceCodes;

        return $this;
    }

    /**
     * Gets shopIds
     *
     * @return string[]|null
     */
    public function getShopIds()
    {
        return $this->container['shopIds'];
    }

    /**
     * Sets shopIds
     *
     * @param string[]|null $shopIds 券可使用的门店列表。列表中的门店id是通过调用接口ant.merchant.expand.shop.create创建门店返回的支付宝门店 id 接口参数是列表类型。 接口参数是列表类型。
     *
     * @return self
     */
    public function setShopIds($shopIds)
    {
        $this->container['shopIds'] = $shopIds;

        return $this;
    }

    /**
     * Gets storeIds
     *
     * @return string[]|null
     */
    public function getStoreIds()
    {
        return $this->container['storeIds'];
    }

    /**
     * Sets storeIds
     *
     * @param string[]|null $storeIds 后续废弃。券可使用的门店列表。列表中的门店id是通过调用接口ant.merchant.expand.shop.create创建门店返回的支付宝门店 id 接口参数是列表类型。 接口参数是列表类型。
     *
     * @return self
     */
    public function setStoreIds($storeIds)
    {
        $this->container['storeIds'] = $storeIds;

        return $this;
    }

    /**
     * Gets voucherSendGuide
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherSendGuideModify|null
     */
    public function getVoucherSendGuide()
    {
        return $this->container['voucherSendGuide'];
    }

    /**
     * Sets voucherSendGuide
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherSendGuideModify|null $voucherSendGuide voucherSendGuide
     *
     * @return self
     */
    public function setVoucherSendGuide($voucherSendGuide)
    {
        $this->container['voucherSendGuide'] = $voucherSendGuide;

        return $this;
    }

    /**
     * Gets voucherUseGuide
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherUseGuideModify|null
     */
    public function getVoucherUseGuide()
    {
        return $this->container['voucherUseGuide'];
    }

    /**
     * Sets voucherUseGuide
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherUseGuideModify|null $voucherUseGuide voucherUseGuide
     *
     * @return self
     */
    public function setVoucherUseGuide($voucherUseGuide)
    {
        $this->container['voucherUseGuide'] = $voucherUseGuide;

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


