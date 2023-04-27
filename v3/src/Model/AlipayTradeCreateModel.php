<?php
/**
 * AlipayTradeCreateModel
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
 * AlipayTradeCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayStoreId' => 'string',
        'bkagentReqInfo' => '\Alipay\OpenAPISDK\Model\BkAgentReqInfo',
        'body' => 'string',
        'businessParams' => '\Alipay\OpenAPISDK\Model\BusinessParams',
        'buyerId' => 'string',
        'buyerLogonId' => 'string',
        'buyerOpenId' => 'string',
        'disablePayChannels' => 'string',
        'discountableAmount' => 'string',
        'enablePayChannels' => 'string',
        'extUserInfo' => '\Alipay\OpenAPISDK\Model\ExtUserInfo',
        'extendParams' => '\Alipay\OpenAPISDK\Model\ExtendParams',
        'goodsDetail' => '\Alipay\OpenAPISDK\Model\GoodsDetail[]',
        'logisticsDetail' => '\Alipay\OpenAPISDK\Model\LogisticsDetail',
        'merchantOrderNo' => 'string',
        'notifyUrl' => 'string',
        'operatorId' => 'string',
        'outTradeNo' => 'string',
        'passbackParams' => 'string',
        'productCode' => 'string',
        'queryOptions' => 'string[]',
        'receiverAddressInfo' => '\Alipay\OpenAPISDK\Model\ReceiverAddressInfo',
        'royaltyInfo' => '\Alipay\OpenAPISDK\Model\RoyaltyInfo',
        'sellerId' => 'string',
        'settleInfo' => '\Alipay\OpenAPISDK\Model\SettleInfo',
        'storeId' => 'string',
        'subMerchant' => '\Alipay\OpenAPISDK\Model\SubMerchant',
        'subject' => 'string',
        'terminalId' => 'string',
        'timeExpire' => 'string',
        'timeoutExpress' => 'string',
        'totalAmount' => 'string',
        'undiscountableAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayStoreId' => null,
        'bkagentReqInfo' => null,
        'body' => null,
        'businessParams' => null,
        'buyerId' => null,
        'buyerLogonId' => null,
        'buyerOpenId' => null,
        'disablePayChannels' => null,
        'discountableAmount' => null,
        'enablePayChannels' => null,
        'extUserInfo' => null,
        'extendParams' => null,
        'goodsDetail' => null,
        'logisticsDetail' => null,
        'merchantOrderNo' => null,
        'notifyUrl' => null,
        'operatorId' => null,
        'outTradeNo' => null,
        'passbackParams' => null,
        'productCode' => null,
        'queryOptions' => null,
        'receiverAddressInfo' => null,
        'royaltyInfo' => null,
        'sellerId' => null,
        'settleInfo' => null,
        'storeId' => null,
        'subMerchant' => null,
        'subject' => null,
        'terminalId' => null,
        'timeExpire' => null,
        'timeoutExpress' => null,
        'totalAmount' => null,
        'undiscountableAmount' => null
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
        'alipayStoreId' => 'alipay_store_id',
        'bkagentReqInfo' => 'bkagent_req_info',
        'body' => 'body',
        'businessParams' => 'business_params',
        'buyerId' => 'buyer_id',
        'buyerLogonId' => 'buyer_logon_id',
        'buyerOpenId' => 'buyer_open_id',
        'disablePayChannels' => 'disable_pay_channels',
        'discountableAmount' => 'discountable_amount',
        'enablePayChannels' => 'enable_pay_channels',
        'extUserInfo' => 'ext_user_info',
        'extendParams' => 'extend_params',
        'goodsDetail' => 'goods_detail',
        'logisticsDetail' => 'logistics_detail',
        'merchantOrderNo' => 'merchant_order_no',
        'notifyUrl' => 'notify_url',
        'operatorId' => 'operator_id',
        'outTradeNo' => 'out_trade_no',
        'passbackParams' => 'passback_params',
        'productCode' => 'product_code',
        'queryOptions' => 'query_options',
        'receiverAddressInfo' => 'receiver_address_info',
        'royaltyInfo' => 'royalty_info',
        'sellerId' => 'seller_id',
        'settleInfo' => 'settle_info',
        'storeId' => 'store_id',
        'subMerchant' => 'sub_merchant',
        'subject' => 'subject',
        'terminalId' => 'terminal_id',
        'timeExpire' => 'time_expire',
        'timeoutExpress' => 'timeout_express',
        'totalAmount' => 'total_amount',
        'undiscountableAmount' => 'undiscountable_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayStoreId' => 'setAlipayStoreId',
        'bkagentReqInfo' => 'setBkagentReqInfo',
        'body' => 'setBody',
        'businessParams' => 'setBusinessParams',
        'buyerId' => 'setBuyerId',
        'buyerLogonId' => 'setBuyerLogonId',
        'buyerOpenId' => 'setBuyerOpenId',
        'disablePayChannels' => 'setDisablePayChannels',
        'discountableAmount' => 'setDiscountableAmount',
        'enablePayChannels' => 'setEnablePayChannels',
        'extUserInfo' => 'setExtUserInfo',
        'extendParams' => 'setExtendParams',
        'goodsDetail' => 'setGoodsDetail',
        'logisticsDetail' => 'setLogisticsDetail',
        'merchantOrderNo' => 'setMerchantOrderNo',
        'notifyUrl' => 'setNotifyUrl',
        'operatorId' => 'setOperatorId',
        'outTradeNo' => 'setOutTradeNo',
        'passbackParams' => 'setPassbackParams',
        'productCode' => 'setProductCode',
        'queryOptions' => 'setQueryOptions',
        'receiverAddressInfo' => 'setReceiverAddressInfo',
        'royaltyInfo' => 'setRoyaltyInfo',
        'sellerId' => 'setSellerId',
        'settleInfo' => 'setSettleInfo',
        'storeId' => 'setStoreId',
        'subMerchant' => 'setSubMerchant',
        'subject' => 'setSubject',
        'terminalId' => 'setTerminalId',
        'timeExpire' => 'setTimeExpire',
        'timeoutExpress' => 'setTimeoutExpress',
        'totalAmount' => 'setTotalAmount',
        'undiscountableAmount' => 'setUndiscountableAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayStoreId' => 'getAlipayStoreId',
        'bkagentReqInfo' => 'getBkagentReqInfo',
        'body' => 'getBody',
        'businessParams' => 'getBusinessParams',
        'buyerId' => 'getBuyerId',
        'buyerLogonId' => 'getBuyerLogonId',
        'buyerOpenId' => 'getBuyerOpenId',
        'disablePayChannels' => 'getDisablePayChannels',
        'discountableAmount' => 'getDiscountableAmount',
        'enablePayChannels' => 'getEnablePayChannels',
        'extUserInfo' => 'getExtUserInfo',
        'extendParams' => 'getExtendParams',
        'goodsDetail' => 'getGoodsDetail',
        'logisticsDetail' => 'getLogisticsDetail',
        'merchantOrderNo' => 'getMerchantOrderNo',
        'notifyUrl' => 'getNotifyUrl',
        'operatorId' => 'getOperatorId',
        'outTradeNo' => 'getOutTradeNo',
        'passbackParams' => 'getPassbackParams',
        'productCode' => 'getProductCode',
        'queryOptions' => 'getQueryOptions',
        'receiverAddressInfo' => 'getReceiverAddressInfo',
        'royaltyInfo' => 'getRoyaltyInfo',
        'sellerId' => 'getSellerId',
        'settleInfo' => 'getSettleInfo',
        'storeId' => 'getStoreId',
        'subMerchant' => 'getSubMerchant',
        'subject' => 'getSubject',
        'terminalId' => 'getTerminalId',
        'timeExpire' => 'getTimeExpire',
        'timeoutExpress' => 'getTimeoutExpress',
        'totalAmount' => 'getTotalAmount',
        'undiscountableAmount' => 'getUndiscountableAmount'
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
        $this->container['alipayStoreId'] = $data['alipayStoreId'] ?? null;
        $this->container['bkagentReqInfo'] = $data['bkagentReqInfo'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['businessParams'] = $data['businessParams'] ?? null;
        $this->container['buyerId'] = $data['buyerId'] ?? null;
        $this->container['buyerLogonId'] = $data['buyerLogonId'] ?? null;
        $this->container['buyerOpenId'] = $data['buyerOpenId'] ?? null;
        $this->container['disablePayChannels'] = $data['disablePayChannels'] ?? null;
        $this->container['discountableAmount'] = $data['discountableAmount'] ?? null;
        $this->container['enablePayChannels'] = $data['enablePayChannels'] ?? null;
        $this->container['extUserInfo'] = $data['extUserInfo'] ?? null;
        $this->container['extendParams'] = $data['extendParams'] ?? null;
        $this->container['goodsDetail'] = $data['goodsDetail'] ?? null;
        $this->container['logisticsDetail'] = $data['logisticsDetail'] ?? null;
        $this->container['merchantOrderNo'] = $data['merchantOrderNo'] ?? null;
        $this->container['notifyUrl'] = $data['notifyUrl'] ?? null;
        $this->container['operatorId'] = $data['operatorId'] ?? null;
        $this->container['outTradeNo'] = $data['outTradeNo'] ?? null;
        $this->container['passbackParams'] = $data['passbackParams'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['queryOptions'] = $data['queryOptions'] ?? null;
        $this->container['receiverAddressInfo'] = $data['receiverAddressInfo'] ?? null;
        $this->container['royaltyInfo'] = $data['royaltyInfo'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['settleInfo'] = $data['settleInfo'] ?? null;
        $this->container['storeId'] = $data['storeId'] ?? null;
        $this->container['subMerchant'] = $data['subMerchant'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['terminalId'] = $data['terminalId'] ?? null;
        $this->container['timeExpire'] = $data['timeExpire'] ?? null;
        $this->container['timeoutExpress'] = $data['timeoutExpress'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
        $this->container['undiscountableAmount'] = $data['undiscountableAmount'] ?? null;
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
     * Gets alipayStoreId
     *
     * @return string|null
     */
    public function getAlipayStoreId()
    {
        return $this->container['alipayStoreId'];
    }

    /**
     * Sets alipayStoreId
     *
     * @param string|null $alipayStoreId 支付宝店铺编号。 指商户创建门店后支付宝生成的门店ID。
     *
     * @return self
     */
    public function setAlipayStoreId($alipayStoreId)
    {
        $this->container['alipayStoreId'] = $alipayStoreId;

        return $this;
    }

    /**
     * Gets bkagentReqInfo
     *
     * @return \Alipay\OpenAPISDK\Model\BkAgentReqInfo|null
     */
    public function getBkagentReqInfo()
    {
        return $this->container['bkagentReqInfo'];
    }

    /**
     * Sets bkagentReqInfo
     *
     * @param \Alipay\OpenAPISDK\Model\BkAgentReqInfo|null $bkagentReqInfo bkagentReqInfo
     *
     * @return self
     */
    public function setBkagentReqInfo($bkagentReqInfo)
    {
        $this->container['bkagentReqInfo'] = $bkagentReqInfo;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body 订单附加信息。 如果请求时传递了该参数，将在异步通知、对账单中原样返回，同时会在商户和用户的pc账单详情中作为交易描述展示
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets businessParams
     *
     * @return \Alipay\OpenAPISDK\Model\BusinessParams|null
     */
    public function getBusinessParams()
    {
        return $this->container['businessParams'];
    }

    /**
     * Sets businessParams
     *
     * @param \Alipay\OpenAPISDK\Model\BusinessParams|null $businessParams businessParams
     *
     * @return self
     */
    public function setBusinessParams($businessParams)
    {
        $this->container['businessParams'] = $businessParams;

        return $this;
    }

    /**
     * Gets buyerId
     *
     * @return string|null
     */
    public function getBuyerId()
    {
        return $this->container['buyerId'];
    }

    /**
     * Sets buyerId
     *
     * @param string|null $buyerId 买家支付宝用户ID。 2088开头的16位纯数字，小程序场景下获取用户ID请参考：<a target=\"_blank\" href=\"https://opendocs.alipay.com/mini/introduce/authcode\" >用户授权</a>; 其它场景下获取用户ID请参考：<a target=\"_blank\" href=\"https://opendocs.alipay.com/open/284/106001/#s4\" >网页授权获取用户信息</a>; 注：交易的买家与卖家不能相同。
     *
     * @return self
     */
    public function setBuyerId($buyerId)
    {
        $this->container['buyerId'] = $buyerId;

        return $this;
    }

    /**
     * Gets buyerLogonId
     *
     * @return string|null
     */
    public function getBuyerLogonId()
    {
        return $this->container['buyerLogonId'];
    }

    /**
     * Sets buyerLogonId
     *
     * @param string|null $buyerLogonId 买家支付宝登录账号。 buyer_logon_id和buyer_id两者传其一，和buyer_id不能同时为空，建议通过buyer_id来传递买家信息。
     *
     * @return self
     */
    public function setBuyerLogonId($buyerLogonId)
    {
        $this->container['buyerLogonId'] = $buyerLogonId;

        return $this;
    }

    /**
     * Gets buyerOpenId
     *
     * @return string|null
     */
    public function getBuyerOpenId()
    {
        return $this->container['buyerOpenId'];
    }

    /**
     * Sets buyerOpenId
     *
     * @param string|null $buyerOpenId 买家支付宝用户唯一标识
     *
     * @return self
     */
    public function setBuyerOpenId($buyerOpenId)
    {
        $this->container['buyerOpenId'] = $buyerOpenId;

        return $this;
    }

    /**
     * Gets disablePayChannels
     *
     * @return string|null
     */
    public function getDisablePayChannels()
    {
        return $this->container['disablePayChannels'];
    }

    /**
     * Sets disablePayChannels
     *
     * @param string|null $disablePayChannels 禁用渠道,用户不可用指定渠道支付，多个渠道以逗号分割  注，与enable_pay_channels互斥  <a href=\"https://docs.open.alipay.com/common/wifww7\">渠道列表</a>
     *
     * @return self
     */
    public function setDisablePayChannels($disablePayChannels)
    {
        $this->container['disablePayChannels'] = $disablePayChannels;

        return $this;
    }

    /**
     * Gets discountableAmount
     *
     * @return string|null
     */
    public function getDiscountableAmount()
    {
        return $this->container['discountableAmount'];
    }

    /**
     * Sets discountableAmount
     *
     * @param string|null $discountableAmount 可打折金额。 参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000]。  如果同时传入了【可打折金额】、【不可打折金额】和【订单总金额】，则必须满足如下条件：【订单总金额】=【可打折金额】+【不可打折金额】。 如果订单金额全部参与优惠计算，则【可打折金额】和【不可打折金额】都无需传入。
     *
     * @return self
     */
    public function setDiscountableAmount($discountableAmount)
    {
        $this->container['discountableAmount'] = $discountableAmount;

        return $this;
    }

    /**
     * Gets enablePayChannels
     *
     * @return string|null
     */
    public function getEnablePayChannels()
    {
        return $this->container['enablePayChannels'];
    }

    /**
     * Sets enablePayChannels
     *
     * @param string|null $enablePayChannels 指定支付渠道。 用户只能使用指定的渠道进行支付，多个渠道以逗号分割。 与disable_pay_channels互斥，支持传入的值：<a target=\"_blank\" href=\"https://docs.open.alipay.com/common/wifww7\">渠道列表</a>。 注：如果传入了指定支付渠道，则用户只能用指定内的渠道支付，包括营销渠道也要指定才能使用。该参数可能导致用户支付受限，慎用。
     *
     * @return self
     */
    public function setEnablePayChannels($enablePayChannels)
    {
        $this->container['enablePayChannels'] = $enablePayChannels;

        return $this;
    }

    /**
     * Gets extUserInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ExtUserInfo|null
     */
    public function getExtUserInfo()
    {
        return $this->container['extUserInfo'];
    }

    /**
     * Sets extUserInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ExtUserInfo|null $extUserInfo extUserInfo
     *
     * @return self
     */
    public function setExtUserInfo($extUserInfo)
    {
        $this->container['extUserInfo'] = $extUserInfo;

        return $this;
    }

    /**
     * Gets extendParams
     *
     * @return \Alipay\OpenAPISDK\Model\ExtendParams|null
     */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
     * Sets extendParams
     *
     * @param \Alipay\OpenAPISDK\Model\ExtendParams|null $extendParams extendParams
     *
     * @return self
     */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;

        return $this;
    }

    /**
     * Gets goodsDetail
     *
     * @return \Alipay\OpenAPISDK\Model\GoodsDetail[]|null
     */
    public function getGoodsDetail()
    {
        return $this->container['goodsDetail'];
    }

    /**
     * Sets goodsDetail
     *
     * @param \Alipay\OpenAPISDK\Model\GoodsDetail[]|null $goodsDetail 订单包含的商品列表信息，json格式。
     *
     * @return self
     */
    public function setGoodsDetail($goodsDetail)
    {
        $this->container['goodsDetail'] = $goodsDetail;

        return $this;
    }

    /**
     * Gets logisticsDetail
     *
     * @return \Alipay\OpenAPISDK\Model\LogisticsDetail|null
     */
    public function getLogisticsDetail()
    {
        return $this->container['logisticsDetail'];
    }

    /**
     * Sets logisticsDetail
     *
     * @param \Alipay\OpenAPISDK\Model\LogisticsDetail|null $logisticsDetail logisticsDetail
     *
     * @return self
     */
    public function setLogisticsDetail($logisticsDetail)
    {
        $this->container['logisticsDetail'] = $logisticsDetail;

        return $this;
    }

    /**
     * Gets merchantOrderNo
     *
     * @return string|null
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string|null $merchantOrderNo 商户的原始订单号
     *
     * @return self
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets notifyUrl
     *
     * @return string|null
     */
    public function getNotifyUrl()
    {
        return $this->container['notifyUrl'];
    }

    /**
     * Sets notifyUrl
     *
     * @param string|null $notifyUrl 通知地址
     *
     * @return self
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->container['notifyUrl'] = $notifyUrl;

        return $this;
    }

    /**
     * Gets operatorId
     *
     * @return string|null
     */
    public function getOperatorId()
    {
        return $this->container['operatorId'];
    }

    /**
     * Sets operatorId
     *
     * @param string|null $operatorId 商户操作员编号。
     *
     * @return self
     */
    public function setOperatorId($operatorId)
    {
        $this->container['operatorId'] = $operatorId;

        return $this;
    }

    /**
     * Gets outTradeNo
     *
     * @return string|null
     */
    public function getOutTradeNo()
    {
        return $this->container['outTradeNo'];
    }

    /**
     * Sets outTradeNo
     *
     * @param string|null $outTradeNo 商户订单号。 由商家自定义，64个字符以内，仅支持字母、数字、下划线且需保证在商户端不重复。
     *
     * @return self
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->container['outTradeNo'] = $outTradeNo;

        return $this;
    }

    /**
     * Gets passbackParams
     *
     * @return string|null
     */
    public function getPassbackParams()
    {
        return $this->container['passbackParams'];
    }

    /**
     * Sets passbackParams
     *
     * @param string|null $passbackParams 公用回传参数。 如果请求时传递了该参数，支付宝会在异步通知时将该参数原样返回。
     *
     * @return self
     */
    public function setPassbackParams($passbackParams)
    {
        $this->container['passbackParams'] = $passbackParams;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode 产品码。 商家和支付宝签约的产品码。 枚举值（点击查看签约情况）： <a target=\"_blank\" href=\"https://opensupport.alipay.com/support/codelab/detail/486/487\">FACE_TO_FACE_PAYMENT</a>：当面付产品； 默认值为FACE_TO_FACE_PAYMENT。
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets queryOptions
     *
     * @return string[]|null
     */
    public function getQueryOptions()
    {
        return $this->container['queryOptions'];
    }

    /**
     * Sets queryOptions
     *
     * @param string[]|null $queryOptions 返回参数选项。 商户通过传递该参数来定制需要额外返回的信息字段，数组格式。包括但不限于：[\"enterprise_pay_info\",\"hyb_amount\"]
     *
     * @return self
     */
    public function setQueryOptions($queryOptions)
    {
        $this->container['queryOptions'] = $queryOptions;

        return $this;
    }

    /**
     * Gets receiverAddressInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ReceiverAddressInfo|null
     */
    public function getReceiverAddressInfo()
    {
        return $this->container['receiverAddressInfo'];
    }

    /**
     * Sets receiverAddressInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ReceiverAddressInfo|null $receiverAddressInfo receiverAddressInfo
     *
     * @return self
     */
    public function setReceiverAddressInfo($receiverAddressInfo)
    {
        $this->container['receiverAddressInfo'] = $receiverAddressInfo;

        return $this;
    }

    /**
     * Gets royaltyInfo
     *
     * @return \Alipay\OpenAPISDK\Model\RoyaltyInfo|null
     */
    public function getRoyaltyInfo()
    {
        return $this->container['royaltyInfo'];
    }

    /**
     * Sets royaltyInfo
     *
     * @param \Alipay\OpenAPISDK\Model\RoyaltyInfo|null $royaltyInfo royaltyInfo
     *
     * @return self
     */
    public function setRoyaltyInfo($royaltyInfo)
    {
        $this->container['royaltyInfo'] = $royaltyInfo;

        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string|null $sellerId 卖家支付宝用户ID。 当需要指定收款账号时，通过该参数传入，如果该值为空，则默认为商户签约账号对应的支付宝用户ID。 收款账号优先级规则：门店绑定的收款账户>请求传入的seller_id>商户签约账号对应的支付宝用户ID； 注：直付通和机构间联场景下seller_id无需传入或者保持跟pid一致； 如果传入的seller_id与pid不一致，需要联系支付宝小二配置收款关系；
     *
     * @return self
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets settleInfo
     *
     * @return \Alipay\OpenAPISDK\Model\SettleInfo|null
     */
    public function getSettleInfo()
    {
        return $this->container['settleInfo'];
    }

    /**
     * Sets settleInfo
     *
     * @param \Alipay\OpenAPISDK\Model\SettleInfo|null $settleInfo settleInfo
     *
     * @return self
     */
    public function setSettleInfo($settleInfo)
    {
        $this->container['settleInfo'] = $settleInfo;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId 商户门店编号。 指商户创建门店时输入的门店编号。
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets subMerchant
     *
     * @return \Alipay\OpenAPISDK\Model\SubMerchant|null
     */
    public function getSubMerchant()
    {
        return $this->container['subMerchant'];
    }

    /**
     * Sets subMerchant
     *
     * @param \Alipay\OpenAPISDK\Model\SubMerchant|null $subMerchant subMerchant
     *
     * @return self
     */
    public function setSubMerchant($subMerchant)
    {
        $this->container['subMerchant'] = $subMerchant;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject 订单标题。 注意：不可使用特殊字符，如 /，=，& 等。
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets terminalId
     *
     * @return string|null
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     *
     * @param string|null $terminalId 商户机具终端编号。
     *
     * @return self
     */
    public function setTerminalId($terminalId)
    {
        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets timeExpire
     *
     * @return string|null
     */
    public function getTimeExpire()
    {
        return $this->container['timeExpire'];
    }

    /**
     * Sets timeExpire
     *
     * @param string|null $timeExpire 订单绝对超时时间。 格式为yyyy-MM-dd HH:mm:ss。 注：time_expire和timeout_express两者只需传入一个或者都不传，如果两者都传，优先使用time_expire。
     *
     * @return self
     */
    public function setTimeExpire($timeExpire)
    {
        $this->container['timeExpire'] = $timeExpire;

        return $this;
    }

    /**
     * Gets timeoutExpress
     *
     * @return string|null
     */
    public function getTimeoutExpress()
    {
        return $this->container['timeoutExpress'];
    }

    /**
     * Sets timeoutExpress
     *
     * @param string|null $timeoutExpress 订单相对超时时间。从交易创建时间开始计算。 该笔订单允许的最晚付款时间，逾期将关闭交易。取值范围：1m～15d。m-分钟，h-小时，d-天，1c-当天（1c-当天的情况下，无论交易何时创建，都在0点关闭）。 该参数数值不接受小数点， 如 1.5h，可转换为 90m。 当面付场景默认值为3h。 注：time_expire和timeout_express两者只需传入一个或者都不传，如果两者都传，优先使用time_expire。
     *
     * @return self
     */
    public function setTimeoutExpress($timeoutExpress)
    {
        $this->container['timeoutExpress'] = $timeoutExpress;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return string|null
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param string|null $totalAmount 订单总金额。 单位为元，精确到小数点后两位，取值范围：[0.01,100000000] 。
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets undiscountableAmount
     *
     * @return string|null
     */
    public function getUndiscountableAmount()
    {
        return $this->container['undiscountableAmount'];
    }

    /**
     * Sets undiscountableAmount
     *
     * @param string|null $undiscountableAmount 不可打折金额。 不参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000]。  如果同时传入了【可打折金额】、【不可打折金额】和【订单总金额】，则必须满足如下条件：【订单总金额】=【可打折金额】+【不可打折金额】。 如果订单金额全部参与优惠计算，则【可打折金额】和【不可打折金额】都无需传入。
     *
     * @return self
     */
    public function setUndiscountableAmount($undiscountableAmount)
    {
        $this->container['undiscountableAmount'] = $undiscountableAmount;

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


