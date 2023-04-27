<?php
/**
 * RecruitVoucherRule
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
 * RecruitVoucherRule Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RecruitVoucherRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecruitVoucherRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amountMax' => 'string',
        'amountMin' => 'string',
        'denominationPercentMax' => 'string',
        'denominationPercentMin' => 'string',
        'floorAmountMax' => 'string',
        'floorAmountMin' => 'string',
        'originAmountMax' => 'string',
        'originAmountMin' => 'string',
        'publishEndTimeMax' => 'string',
        'publishEndTimeMin' => 'string',
        'publishStartTimeMax' => 'string',
        'publishStartTimeMin' => 'string',
        'refundType' => 'string[]',
        'saleAmountMax' => 'string',
        'saleAmountMin' => 'string',
        'useChannel' => 'string[]',
        'validDaysAfterReceiveMin' => 'int',
        'voucherActivityType' => 'string',
        'voucherQuantityLimitPerUserMax' => 'int',
        'voucherQuantityLimitPerUserMin' => 'int',
        'voucherQuantityMax' => 'int',
        'voucherQuantityMin' => 'int',
        'voucherValidBeginTimeMin' => 'string',
        'voucherValidEndTimeMax' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amountMax' => null,
        'amountMin' => null,
        'denominationPercentMax' => null,
        'denominationPercentMin' => null,
        'floorAmountMax' => null,
        'floorAmountMin' => null,
        'originAmountMax' => null,
        'originAmountMin' => null,
        'publishEndTimeMax' => null,
        'publishEndTimeMin' => null,
        'publishStartTimeMax' => null,
        'publishStartTimeMin' => null,
        'refundType' => null,
        'saleAmountMax' => null,
        'saleAmountMin' => null,
        'useChannel' => null,
        'validDaysAfterReceiveMin' => null,
        'voucherActivityType' => null,
        'voucherQuantityLimitPerUserMax' => null,
        'voucherQuantityLimitPerUserMin' => null,
        'voucherQuantityMax' => null,
        'voucherQuantityMin' => null,
        'voucherValidBeginTimeMin' => null,
        'voucherValidEndTimeMax' => null
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
        'amountMax' => 'amount_max',
        'amountMin' => 'amount_min',
        'denominationPercentMax' => 'denomination_percent_max',
        'denominationPercentMin' => 'denomination_percent_min',
        'floorAmountMax' => 'floor_amount_max',
        'floorAmountMin' => 'floor_amount_min',
        'originAmountMax' => 'origin_amount_max',
        'originAmountMin' => 'origin_amount_min',
        'publishEndTimeMax' => 'publish_end_time_max',
        'publishEndTimeMin' => 'publish_end_time_min',
        'publishStartTimeMax' => 'publish_start_time_max',
        'publishStartTimeMin' => 'publish_start_time_min',
        'refundType' => 'refund_type',
        'saleAmountMax' => 'sale_amount_max',
        'saleAmountMin' => 'sale_amount_min',
        'useChannel' => 'use_channel',
        'validDaysAfterReceiveMin' => 'valid_days_after_receive_min',
        'voucherActivityType' => 'voucher_activity_type',
        'voucherQuantityLimitPerUserMax' => 'voucher_quantity_limit_per_user_max',
        'voucherQuantityLimitPerUserMin' => 'voucher_quantity_limit_per_user_min',
        'voucherQuantityMax' => 'voucher_quantity_max',
        'voucherQuantityMin' => 'voucher_quantity_min',
        'voucherValidBeginTimeMin' => 'voucher_valid_begin_time_min',
        'voucherValidEndTimeMax' => 'voucher_valid_end_time_max'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amountMax' => 'setAmountMax',
        'amountMin' => 'setAmountMin',
        'denominationPercentMax' => 'setDenominationPercentMax',
        'denominationPercentMin' => 'setDenominationPercentMin',
        'floorAmountMax' => 'setFloorAmountMax',
        'floorAmountMin' => 'setFloorAmountMin',
        'originAmountMax' => 'setOriginAmountMax',
        'originAmountMin' => 'setOriginAmountMin',
        'publishEndTimeMax' => 'setPublishEndTimeMax',
        'publishEndTimeMin' => 'setPublishEndTimeMin',
        'publishStartTimeMax' => 'setPublishStartTimeMax',
        'publishStartTimeMin' => 'setPublishStartTimeMin',
        'refundType' => 'setRefundType',
        'saleAmountMax' => 'setSaleAmountMax',
        'saleAmountMin' => 'setSaleAmountMin',
        'useChannel' => 'setUseChannel',
        'validDaysAfterReceiveMin' => 'setValidDaysAfterReceiveMin',
        'voucherActivityType' => 'setVoucherActivityType',
        'voucherQuantityLimitPerUserMax' => 'setVoucherQuantityLimitPerUserMax',
        'voucherQuantityLimitPerUserMin' => 'setVoucherQuantityLimitPerUserMin',
        'voucherQuantityMax' => 'setVoucherQuantityMax',
        'voucherQuantityMin' => 'setVoucherQuantityMin',
        'voucherValidBeginTimeMin' => 'setVoucherValidBeginTimeMin',
        'voucherValidEndTimeMax' => 'setVoucherValidEndTimeMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amountMax' => 'getAmountMax',
        'amountMin' => 'getAmountMin',
        'denominationPercentMax' => 'getDenominationPercentMax',
        'denominationPercentMin' => 'getDenominationPercentMin',
        'floorAmountMax' => 'getFloorAmountMax',
        'floorAmountMin' => 'getFloorAmountMin',
        'originAmountMax' => 'getOriginAmountMax',
        'originAmountMin' => 'getOriginAmountMin',
        'publishEndTimeMax' => 'getPublishEndTimeMax',
        'publishEndTimeMin' => 'getPublishEndTimeMin',
        'publishStartTimeMax' => 'getPublishStartTimeMax',
        'publishStartTimeMin' => 'getPublishStartTimeMin',
        'refundType' => 'getRefundType',
        'saleAmountMax' => 'getSaleAmountMax',
        'saleAmountMin' => 'getSaleAmountMin',
        'useChannel' => 'getUseChannel',
        'validDaysAfterReceiveMin' => 'getValidDaysAfterReceiveMin',
        'voucherActivityType' => 'getVoucherActivityType',
        'voucherQuantityLimitPerUserMax' => 'getVoucherQuantityLimitPerUserMax',
        'voucherQuantityLimitPerUserMin' => 'getVoucherQuantityLimitPerUserMin',
        'voucherQuantityMax' => 'getVoucherQuantityMax',
        'voucherQuantityMin' => 'getVoucherQuantityMin',
        'voucherValidBeginTimeMin' => 'getVoucherValidBeginTimeMin',
        'voucherValidEndTimeMax' => 'getVoucherValidEndTimeMax'
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
        $this->container['amountMax'] = $data['amountMax'] ?? null;
        $this->container['amountMin'] = $data['amountMin'] ?? null;
        $this->container['denominationPercentMax'] = $data['denominationPercentMax'] ?? null;
        $this->container['denominationPercentMin'] = $data['denominationPercentMin'] ?? null;
        $this->container['floorAmountMax'] = $data['floorAmountMax'] ?? null;
        $this->container['floorAmountMin'] = $data['floorAmountMin'] ?? null;
        $this->container['originAmountMax'] = $data['originAmountMax'] ?? null;
        $this->container['originAmountMin'] = $data['originAmountMin'] ?? null;
        $this->container['publishEndTimeMax'] = $data['publishEndTimeMax'] ?? null;
        $this->container['publishEndTimeMin'] = $data['publishEndTimeMin'] ?? null;
        $this->container['publishStartTimeMax'] = $data['publishStartTimeMax'] ?? null;
        $this->container['publishStartTimeMin'] = $data['publishStartTimeMin'] ?? null;
        $this->container['refundType'] = $data['refundType'] ?? null;
        $this->container['saleAmountMax'] = $data['saleAmountMax'] ?? null;
        $this->container['saleAmountMin'] = $data['saleAmountMin'] ?? null;
        $this->container['useChannel'] = $data['useChannel'] ?? null;
        $this->container['validDaysAfterReceiveMin'] = $data['validDaysAfterReceiveMin'] ?? null;
        $this->container['voucherActivityType'] = $data['voucherActivityType'] ?? null;
        $this->container['voucherQuantityLimitPerUserMax'] = $data['voucherQuantityLimitPerUserMax'] ?? null;
        $this->container['voucherQuantityLimitPerUserMin'] = $data['voucherQuantityLimitPerUserMin'] ?? null;
        $this->container['voucherQuantityMax'] = $data['voucherQuantityMax'] ?? null;
        $this->container['voucherQuantityMin'] = $data['voucherQuantityMin'] ?? null;
        $this->container['voucherValidBeginTimeMin'] = $data['voucherValidBeginTimeMin'] ?? null;
        $this->container['voucherValidEndTimeMax'] = $data['voucherValidEndTimeMax'] ?? null;
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
     * Gets amountMax
     *
     * @return string|null
     */
    public function getAmountMax()
    {
        return $this->container['amountMax'];
    }

    /**
     * Sets amountMax
     *
     * @param string|null $amountMax 券面额（每张代金券可以抵扣的金额）的的最大值。 币种为人民币，单位为元。小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setAmountMax($amountMax)
    {
        $this->container['amountMax'] = $amountMax;

        return $this;
    }

    /**
     * Gets amountMin
     *
     * @return string|null
     */
    public function getAmountMin()
    {
        return $this->container['amountMin'];
    }

    /**
     * Sets amountMin
     *
     * @param string|null $amountMin 券面额（每张代金券可以抵扣的金额）的最小值。 币种为人民币，单位为元。小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setAmountMin($amountMin)
    {
        $this->container['amountMin'] = $amountMin;

        return $this;
    }

    /**
     * Gets denominationPercentMax
     *
     * @return string|null
     */
    public function getDenominationPercentMax()
    {
        return $this->container['denominationPercentMax'];
    }

    /**
     * Sets denominationPercentMax
     *
     * @param string|null $denominationPercentMax 券优惠比例的最大值。20代表优惠比例最多是20%。券优惠券比例=券优惠面额/门槛金额。 浮点类型，取值范围为[1,100]，左右均是闭区间，小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setDenominationPercentMax($denominationPercentMax)
    {
        $this->container['denominationPercentMax'] = $denominationPercentMax;

        return $this;
    }

    /**
     * Gets denominationPercentMin
     *
     * @return string|null
     */
    public function getDenominationPercentMin()
    {
        return $this->container['denominationPercentMin'];
    }

    /**
     * Sets denominationPercentMin
     *
     * @param string|null $denominationPercentMin 券优惠比例的最小值。10代表优惠比例最少是10%。券优惠券比例=券优惠面额/门槛金额。 浮点类型，取值范围为[1,100]，左右均是闭区间，小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setDenominationPercentMin($denominationPercentMin)
    {
        $this->container['denominationPercentMin'] = $denominationPercentMin;

        return $this;
    }

    /**
     * Gets floorAmountMax
     *
     * @return string|null
     */
    public function getFloorAmountMax()
    {
        return $this->container['floorAmountMax'];
    }

    /**
     * Sets floorAmountMax
     *
     * @param string|null $floorAmountMax 券门槛金额的最大值。 币种为人民币，单位为元。小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setFloorAmountMax($floorAmountMax)
    {
        $this->container['floorAmountMax'] = $floorAmountMax;

        return $this;
    }

    /**
     * Gets floorAmountMin
     *
     * @return string|null
     */
    public function getFloorAmountMin()
    {
        return $this->container['floorAmountMin'];
    }

    /**
     * Sets floorAmountMin
     *
     * @param string|null $floorAmountMin 券门槛金额的最小值。 币种为人民币，单位为元。小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setFloorAmountMin($floorAmountMin)
    {
        $this->container['floorAmountMin'] = $floorAmountMin;

        return $this;
    }

    /**
     * Gets originAmountMax
     *
     * @return string|null
     */
    public function getOriginAmountMax()
    {
        return $this->container['originAmountMax'];
    }

    /**
     * Sets originAmountMax
     *
     * @param string|null $originAmountMax 券原价的最大值。 币种为人民币，单位为元。小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setOriginAmountMax($originAmountMax)
    {
        $this->container['originAmountMax'] = $originAmountMax;

        return $this;
    }

    /**
     * Gets originAmountMin
     *
     * @return string|null
     */
    public function getOriginAmountMin()
    {
        return $this->container['originAmountMin'];
    }

    /**
     * Sets originAmountMin
     *
     * @param string|null $originAmountMin 券原价的最小值。 币种为人民币，单位为元。小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setOriginAmountMin($originAmountMin)
    {
        $this->container['originAmountMin'] = $originAmountMin;

        return $this;
    }

    /**
     * Gets publishEndTimeMax
     *
     * @return string|null
     */
    public function getPublishEndTimeMax()
    {
        return $this->container['publishEndTimeMax'];
    }

    /**
     * Sets publishEndTimeMax
     *
     * @param string|null $publishEndTimeMax 券发放结束时间的最大值。 格式为：yyyy-MM-dd HH:mm:ss 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setPublishEndTimeMax($publishEndTimeMax)
    {
        $this->container['publishEndTimeMax'] = $publishEndTimeMax;

        return $this;
    }

    /**
     * Gets publishEndTimeMin
     *
     * @return string|null
     */
    public function getPublishEndTimeMin()
    {
        return $this->container['publishEndTimeMin'];
    }

    /**
     * Sets publishEndTimeMin
     *
     * @param string|null $publishEndTimeMin 券发放结束时间的最小值。 格式为：yyyy-MM-dd HH:mm:ss 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setPublishEndTimeMin($publishEndTimeMin)
    {
        $this->container['publishEndTimeMin'] = $publishEndTimeMin;

        return $this;
    }

    /**
     * Gets publishStartTimeMax
     *
     * @return string|null
     */
    public function getPublishStartTimeMax()
    {
        return $this->container['publishStartTimeMax'];
    }

    /**
     * Sets publishStartTimeMax
     *
     * @param string|null $publishStartTimeMax 券发放开始时间的最大值。 格式为：yyyy-MM-dd HH:mm:ss 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setPublishStartTimeMax($publishStartTimeMax)
    {
        $this->container['publishStartTimeMax'] = $publishStartTimeMax;

        return $this;
    }

    /**
     * Gets publishStartTimeMin
     *
     * @return string|null
     */
    public function getPublishStartTimeMin()
    {
        return $this->container['publishStartTimeMin'];
    }

    /**
     * Sets publishStartTimeMin
     *
     * @param string|null $publishStartTimeMin 券发放开始时间的最小值。 格式为：yyyy-MM-dd HH:mm:ss 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setPublishStartTimeMin($publishStartTimeMin)
    {
        $this->container['publishStartTimeMin'] = $publishStartTimeMin;

        return $this;
    }

    /**
     * Gets refundType
     *
     * @return string[]|null
     */
    public function getRefundType()
    {
        return $this->container['refundType'];
    }

    /**
     * Sets refundType
     *
     * @param string[]|null $refundType 退券类型要求，列表，总共有两种类型： 过期退OVERDUE_REFUND 随时退CAN_REFUND 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setRefundType($refundType)
    {
        $this->container['refundType'] = $refundType;

        return $this;
    }

    /**
     * Gets saleAmountMax
     *
     * @return string|null
     */
    public function getSaleAmountMax()
    {
        return $this->container['saleAmountMax'];
    }

    /**
     * Sets saleAmountMax
     *
     * @param string|null $saleAmountMax 用户购买优惠券需要支付的金额的最大值。 币种为人民币，单位为元。小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setSaleAmountMax($saleAmountMax)
    {
        $this->container['saleAmountMax'] = $saleAmountMax;

        return $this;
    }

    /**
     * Gets saleAmountMin
     *
     * @return string|null
     */
    public function getSaleAmountMin()
    {
        return $this->container['saleAmountMin'];
    }

    /**
     * Sets saleAmountMin
     *
     * @param string|null $saleAmountMin 用户购买优惠券需要支付的金额的最小值。 币种为人民币，单位为元。小数点以后最多保留两位。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setSaleAmountMin($saleAmountMin)
    {
        $this->container['saleAmountMin'] = $saleAmountMin;

        return $this;
    }

    /**
     * Gets useChannel
     *
     * @return string[]|null
     */
    public function getUseChannel()
    {
        return $this->container['useChannel'];
    }

    /**
     * Sets useChannel
     *
     * @param string[]|null $useChannel 券核销渠道要求，列表，总共有两个渠道： 门店SHOP 小程序MINI_APP 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setUseChannel($useChannel)
    {
        $this->container['useChannel'] = $useChannel;

        return $this;
    }

    /**
     * Gets validDaysAfterReceiveMin
     *
     * @return int|null
     */
    public function getValidDaysAfterReceiveMin()
    {
        return $this->container['validDaysAfterReceiveMin'];
    }

    /**
     * Sets validDaysAfterReceiveMin
     *
     * @param int|null $validDaysAfterReceiveMin 券生效后至少N天内可以使用。比如：valid_days_after_receive_min=20代表 券生效后至少20天内可以使用。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setValidDaysAfterReceiveMin($validDaysAfterReceiveMin)
    {
        $this->container['validDaysAfterReceiveMin'] = $validDaysAfterReceiveMin;

        return $this;
    }

    /**
     * Gets voucherActivityType
     *
     * @return string|null
     */
    public function getVoucherActivityType()
    {
        return $this->container['voucherActivityType'];
    }

    /**
     * Sets voucherActivityType
     *
     * @param string|null $voucherActivityType 券活动类型。支持七种商家券类型和两种支付券类型。  枚举值： 商家券类型：  ALL_FIX_ORDER_VOUCHER 全场满减券；  ITEM_FIX_ORDER_VOUCHER 单品满减券；  ALL_DISCOUNT_ORDER_VOUCHER 全场折扣券；  ITEM_DISCOUNT_ORDER_VOUCHER 单品折扣券；  ITEM_SPE_ORDER_VOUCHER 单品特价券；  EXCHANGE_GROUP_BUY_ORDER_VOUCHER 兑换团购券；  EXCHANGE_FIX_ORDER_VOUCHER 兑换代金券；  支付券类型：  ALL_FIX_VOUCHER 全场满减券；  ITEM_FIX_VOUCHER 单品满减券；  创建商家券参考https://opendocs.alipay.com/apis/01xm17 创建支付券参考https://opendocs.alipay.com/pre-apis/027185（仅供受邀用户使用） 不同的创建券的参数创建出不同类型的券：  1. 根据voucher_type区分满减券、折扣券、特价券、兑换券  2. 根据goods_name是否为空区分单品券、全场券（当voucher_type为满减券、折扣券、特价券）  3. 根据voucher_use_rule.exchange_voucher.biz_type区分团购券、代金券（当voucher_type为兑换券）
     *
     * @return self
     */
    public function setVoucherActivityType($voucherActivityType)
    {
        $this->container['voucherActivityType'] = $voucherActivityType;

        return $this;
    }

    /**
     * Gets voucherQuantityLimitPerUserMax
     *
     * @return int|null
     */
    public function getVoucherQuantityLimitPerUserMax()
    {
        return $this->container['voucherQuantityLimitPerUserMax'];
    }

    /**
     * Sets voucherQuantityLimitPerUserMax
     *
     * @param int|null $voucherQuantityLimitPerUserMax 每人领取限制的最大值。 默认按照支付宝uid进行领取限制。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setVoucherQuantityLimitPerUserMax($voucherQuantityLimitPerUserMax)
    {
        $this->container['voucherQuantityLimitPerUserMax'] = $voucherQuantityLimitPerUserMax;

        return $this;
    }

    /**
     * Gets voucherQuantityLimitPerUserMin
     *
     * @return int|null
     */
    public function getVoucherQuantityLimitPerUserMin()
    {
        return $this->container['voucherQuantityLimitPerUserMin'];
    }

    /**
     * Sets voucherQuantityLimitPerUserMin
     *
     * @param int|null $voucherQuantityLimitPerUserMin 每人领取限制的最小值。 默认按照支付宝uid进行领取限制。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setVoucherQuantityLimitPerUserMin($voucherQuantityLimitPerUserMin)
    {
        $this->container['voucherQuantityLimitPerUserMin'] = $voucherQuantityLimitPerUserMin;

        return $this;
    }

    /**
     * Gets voucherQuantityMax
     *
     * @return int|null
     */
    public function getVoucherQuantityMax()
    {
        return $this->container['voucherQuantityMax'];
    }

    /**
     * Sets voucherQuantityMax
     *
     * @param int|null $voucherQuantityMax 券库存数量的最大值。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setVoucherQuantityMax($voucherQuantityMax)
    {
        $this->container['voucherQuantityMax'] = $voucherQuantityMax;

        return $this;
    }

    /**
     * Gets voucherQuantityMin
     *
     * @return int|null
     */
    public function getVoucherQuantityMin()
    {
        return $this->container['voucherQuantityMin'];
    }

    /**
     * Sets voucherQuantityMin
     *
     * @param int|null $voucherQuantityMin 券库存数量的最小值。 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setVoucherQuantityMin($voucherQuantityMin)
    {
        $this->container['voucherQuantityMin'] = $voucherQuantityMin;

        return $this;
    }

    /**
     * Gets voucherValidBeginTimeMin
     *
     * @return string|null
     */
    public function getVoucherValidBeginTimeMin()
    {
        return $this->container['voucherValidBeginTimeMin'];
    }

    /**
     * Sets voucherValidBeginTimeMin
     *
     * @param string|null $voucherValidBeginTimeMin 券可使用的开始时间的最小值。 格式为：yyyy-MM-dd HH:mm:ss 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setVoucherValidBeginTimeMin($voucherValidBeginTimeMin)
    {
        $this->container['voucherValidBeginTimeMin'] = $voucherValidBeginTimeMin;

        return $this;
    }

    /**
     * Gets voucherValidEndTimeMax
     *
     * @return string|null
     */
    public function getVoucherValidEndTimeMax()
    {
        return $this->container['voucherValidEndTimeMax'];
    }

    /**
     * Sets voucherValidEndTimeMax
     *
     * @param string|null $voucherValidEndTimeMax 券可使用的结束时间的最大值。 格式为：yyyy-MM-dd HH:mm:ss 该字段为空时表示不限制。
     *
     * @return self
     */
    public function setVoucherValidEndTimeMax($voucherValidEndTimeMax)
    {
        $this->container['voucherValidEndTimeMax'] = $voucherValidEndTimeMax;

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


