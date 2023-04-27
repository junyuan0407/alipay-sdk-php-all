<?php
/**
 * AlipayOfflineMarketShopSummaryBatchqueryModel
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
 * AlipayOfflineMarketShopSummaryBatchqueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOfflineMarketShopSummaryBatchqueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOfflineMarketShopSummaryBatchqueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizChannel' => 'string',
        'brandName' => 'string',
        'cityCode' => 'string',
        'districtCode' => 'string',
        'opRole' => 'string',
        'pageNo' => 'int',
        'pageSize' => 'int',
        'provinceCode' => 'string',
        'queryType' => 'string',
        'relatedPartnerId' => 'string',
        'shopId' => 'string',
        'shopStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizChannel' => null,
        'brandName' => null,
        'cityCode' => null,
        'districtCode' => null,
        'opRole' => null,
        'pageNo' => null,
        'pageSize' => null,
        'provinceCode' => null,
        'queryType' => null,
        'relatedPartnerId' => null,
        'shopId' => null,
        'shopStatus' => null
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
        'bizChannel' => 'biz_channel',
        'brandName' => 'brand_name',
        'cityCode' => 'city_code',
        'districtCode' => 'district_code',
        'opRole' => 'op_role',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
        'provinceCode' => 'province_code',
        'queryType' => 'query_type',
        'relatedPartnerId' => 'related_partner_id',
        'shopId' => 'shop_id',
        'shopStatus' => 'shop_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizChannel' => 'setBizChannel',
        'brandName' => 'setBrandName',
        'cityCode' => 'setCityCode',
        'districtCode' => 'setDistrictCode',
        'opRole' => 'setOpRole',
        'pageNo' => 'setPageNo',
        'pageSize' => 'setPageSize',
        'provinceCode' => 'setProvinceCode',
        'queryType' => 'setQueryType',
        'relatedPartnerId' => 'setRelatedPartnerId',
        'shopId' => 'setShopId',
        'shopStatus' => 'setShopStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizChannel' => 'getBizChannel',
        'brandName' => 'getBrandName',
        'cityCode' => 'getCityCode',
        'districtCode' => 'getDistrictCode',
        'opRole' => 'getOpRole',
        'pageNo' => 'getPageNo',
        'pageSize' => 'getPageSize',
        'provinceCode' => 'getProvinceCode',
        'queryType' => 'getQueryType',
        'relatedPartnerId' => 'getRelatedPartnerId',
        'shopId' => 'getShopId',
        'shopStatus' => 'getShopStatus'
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
        $this->container['bizChannel'] = $data['bizChannel'] ?? null;
        $this->container['brandName'] = $data['brandName'] ?? null;
        $this->container['cityCode'] = $data['cityCode'] ?? null;
        $this->container['districtCode'] = $data['districtCode'] ?? null;
        $this->container['opRole'] = $data['opRole'] ?? null;
        $this->container['pageNo'] = $data['pageNo'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['provinceCode'] = $data['provinceCode'] ?? null;
        $this->container['queryType'] = $data['queryType'] ?? null;
        $this->container['relatedPartnerId'] = $data['relatedPartnerId'] ?? null;
        $this->container['shopId'] = $data['shopId'] ?? null;
        $this->container['shopStatus'] = $data['shopStatus'] ?? null;
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
     * Gets bizChannel
     *
     * @return string|null
     */
    public function getBizChannel()
    {
        return $this->container['bizChannel'];
    }

    /**
     * Sets bizChannel
     *
     * @param string|null $bizChannel 表示接口查询门店的业务渠道限制：ALL、 POS、不传。不传代表只查询普通门店，传入POS代表只查询简易门店，传入ALL代表查询普通门店和简易门店。
     *
     * @return self
     */
    public function setBizChannel($bizChannel)
    {
        $this->container['bizChannel'] = $bizChannel;

        return $this;
    }

    /**
     * Gets brandName
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string|null $brandName 品牌名
     *
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets cityCode
     *
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
     * Sets cityCode
     *
     * @param string|null $cityCode 城市编码，国标码，如：120100表示天津市
     *
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;

        return $this;
    }

    /**
     * Gets districtCode
     *
     * @return string|null
     */
    public function getDistrictCode()
    {
        return $this->container['districtCode'];
    }

    /**
     * Sets districtCode
     *
     * @param string|null $districtCode 区域编码，如：120104表示南开区
     *
     * @return self
     */
    public function setDistrictCode($districtCode)
    {
        $this->container['districtCode'] = $districtCode;

        return $this;
    }

    /**
     * Gets opRole
     *
     * @return string|null
     */
    public function getOpRole()
    {
        return $this->container['opRole'];
    }

    /**
     * Sets opRole
     *
     * @param string|null $opRole 表示接口业务的调用方身份：ISV、 服务商身份标识。传入ISV代表系统集成商身份。传入PROVIDER代表服务商。
     *
     * @return self
     */
    public function setOpRole($opRole)
    {
        $this->container['opRole'] = $opRole;

        return $this;
    }

    /**
     * Gets pageNo
     *
     * @return int|null
     */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
     * Sets pageNo
     *
     * @param int|null $pageNo 页码，留空标示第一页，默认 20个结果为一页
     *
     * @return self
     */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize 每页记录数，默认20，最大 100
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets provinceCode
     *
     * @return string|null
     */
    public function getProvinceCode()
    {
        return $this->container['provinceCode'];
    }

    /**
     * Sets provinceCode
     *
     * @param string|null $provinceCode 省份编码，国标码，如：120000表示天津
     *
     * @return self
     */
    public function setProvinceCode($provinceCode)
    {
        $this->container['provinceCode'] = $provinceCode;

        return $this;
    }

    /**
     * Gets queryType
     *
     * @return string|null
     */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
     * Sets queryType
     *
     * @param string|null $queryType 门店数据查询类型，根据类型可以返回指定的门店数据，目前支持的类型如下：  BRAND_RELATION ： 品牌商关联店铺  MALL_SELF ：MALL自己的门店  MALL_RELATION：MALL关联下的门店  MERCHANT_SELF:商户自己的门店  KB_PROMOTER：口碑客推广者
     *
     * @return self
     */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;

        return $this;
    }

    /**
     * Gets relatedPartnerId
     *
     * @return string|null
     */
    public function getRelatedPartnerId()
    {
        return $this->container['relatedPartnerId'];
    }

    /**
     * Sets relatedPartnerId
     *
     * @param string|null $relatedPartnerId query_type查询类型下所关联的商户PID
     *
     * @return self
     */
    public function setRelatedPartnerId($relatedPartnerId)
    {
        $this->container['relatedPartnerId'] = $relatedPartnerId;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return string|null
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param string|null $shopId 门店ID
     *
     * @return self
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets shopStatus
     *
     * @return string|null
     */
    public function getShopStatus()
    {
        return $this->container['shopStatus'];
    }

    /**
     * Sets shopStatus
     *
     * @param string|null $shopStatus 门店状态，传入多个状态，多个状态使用英文逗号隔开，例如：PAUSED,OPEN  店铺状态：OPEN（营业）、PAUSED（暂停）、INIT（初始）、FREEZE（冻结）、CLOSED（关店）
     *
     * @return self
     */
    public function setShopStatus($shopStatus)
    {
        $this->container['shopStatus'] = $shopStatus;

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


