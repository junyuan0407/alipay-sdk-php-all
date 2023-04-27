<?php
/**
 * AlipayFundAuthOrderFreezeModel
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
 * AlipayFundAuthOrderFreezeModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundAuthOrderFreezeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundAuthOrderFreezeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'authCode' => 'string',
        'authCodeType' => 'string',
        'businessParams' => 'string',
        'disablePayChannels' => 'string',
        'enablePayChannels' => 'string',
        'extraParam' => 'string',
        'identityParams' => 'string',
        'notifyUrl' => 'string',
        'orderTitle' => 'string',
        'outOrderNo' => 'string',
        'outRequestNo' => 'string',
        'payTimeout' => 'string',
        'payeeLogonId' => 'string',
        'payeeUserId' => 'string',
        'productCode' => 'string',
        'sceneCode' => 'string',
        'settleCurrency' => 'string',
        'terminalParams' => 'string',
        'timeoutExpress' => 'string',
        'transCurrency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'authCode' => null,
        'authCodeType' => null,
        'businessParams' => null,
        'disablePayChannels' => null,
        'enablePayChannels' => null,
        'extraParam' => null,
        'identityParams' => null,
        'notifyUrl' => null,
        'orderTitle' => null,
        'outOrderNo' => null,
        'outRequestNo' => null,
        'payTimeout' => null,
        'payeeLogonId' => null,
        'payeeUserId' => null,
        'productCode' => null,
        'sceneCode' => null,
        'settleCurrency' => null,
        'terminalParams' => null,
        'timeoutExpress' => null,
        'transCurrency' => null
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
        'amount' => 'amount',
        'authCode' => 'auth_code',
        'authCodeType' => 'auth_code_type',
        'businessParams' => 'business_params',
        'disablePayChannels' => 'disable_pay_channels',
        'enablePayChannels' => 'enable_pay_channels',
        'extraParam' => 'extra_param',
        'identityParams' => 'identity_params',
        'notifyUrl' => 'notify_url',
        'orderTitle' => 'order_title',
        'outOrderNo' => 'out_order_no',
        'outRequestNo' => 'out_request_no',
        'payTimeout' => 'pay_timeout',
        'payeeLogonId' => 'payee_logon_id',
        'payeeUserId' => 'payee_user_id',
        'productCode' => 'product_code',
        'sceneCode' => 'scene_code',
        'settleCurrency' => 'settle_currency',
        'terminalParams' => 'terminal_params',
        'timeoutExpress' => 'timeout_express',
        'transCurrency' => 'trans_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'authCode' => 'setAuthCode',
        'authCodeType' => 'setAuthCodeType',
        'businessParams' => 'setBusinessParams',
        'disablePayChannels' => 'setDisablePayChannels',
        'enablePayChannels' => 'setEnablePayChannels',
        'extraParam' => 'setExtraParam',
        'identityParams' => 'setIdentityParams',
        'notifyUrl' => 'setNotifyUrl',
        'orderTitle' => 'setOrderTitle',
        'outOrderNo' => 'setOutOrderNo',
        'outRequestNo' => 'setOutRequestNo',
        'payTimeout' => 'setPayTimeout',
        'payeeLogonId' => 'setPayeeLogonId',
        'payeeUserId' => 'setPayeeUserId',
        'productCode' => 'setProductCode',
        'sceneCode' => 'setSceneCode',
        'settleCurrency' => 'setSettleCurrency',
        'terminalParams' => 'setTerminalParams',
        'timeoutExpress' => 'setTimeoutExpress',
        'transCurrency' => 'setTransCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'authCode' => 'getAuthCode',
        'authCodeType' => 'getAuthCodeType',
        'businessParams' => 'getBusinessParams',
        'disablePayChannels' => 'getDisablePayChannels',
        'enablePayChannels' => 'getEnablePayChannels',
        'extraParam' => 'getExtraParam',
        'identityParams' => 'getIdentityParams',
        'notifyUrl' => 'getNotifyUrl',
        'orderTitle' => 'getOrderTitle',
        'outOrderNo' => 'getOutOrderNo',
        'outRequestNo' => 'getOutRequestNo',
        'payTimeout' => 'getPayTimeout',
        'payeeLogonId' => 'getPayeeLogonId',
        'payeeUserId' => 'getPayeeUserId',
        'productCode' => 'getProductCode',
        'sceneCode' => 'getSceneCode',
        'settleCurrency' => 'getSettleCurrency',
        'terminalParams' => 'getTerminalParams',
        'timeoutExpress' => 'getTimeoutExpress',
        'transCurrency' => 'getTransCurrency'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['authCode'] = $data['authCode'] ?? null;
        $this->container['authCodeType'] = $data['authCodeType'] ?? null;
        $this->container['businessParams'] = $data['businessParams'] ?? null;
        $this->container['disablePayChannels'] = $data['disablePayChannels'] ?? null;
        $this->container['enablePayChannels'] = $data['enablePayChannels'] ?? null;
        $this->container['extraParam'] = $data['extraParam'] ?? null;
        $this->container['identityParams'] = $data['identityParams'] ?? null;
        $this->container['notifyUrl'] = $data['notifyUrl'] ?? null;
        $this->container['orderTitle'] = $data['orderTitle'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['payTimeout'] = $data['payTimeout'] ?? null;
        $this->container['payeeLogonId'] = $data['payeeLogonId'] ?? null;
        $this->container['payeeUserId'] = $data['payeeUserId'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['sceneCode'] = $data['sceneCode'] ?? null;
        $this->container['settleCurrency'] = $data['settleCurrency'] ?? null;
        $this->container['terminalParams'] = $data['terminalParams'] ?? null;
        $this->container['timeoutExpress'] = $data['timeoutExpress'] ?? null;
        $this->container['transCurrency'] = $data['transCurrency'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 需要冻结的金额，单位为：元（人民币），精确到小数点后两位。 取值范围：[0.01,100000000.00]
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets authCode
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['authCode'];
    }

    /**
     * Sets authCode
     *
     * @param string|null $authCode 用户付款码。 1.条码场景：25~30开头的长度为16~24位的数字，实际字符串长度以开发者获取的付款码长度为准； 2.刷脸场景： 1）fp开头的35位字符串； 2）300-700字符的随机字符串； 注：刷脸场景考虑到未来可能拓展更多格式，建议外围不必做规则拦截，由支付宝统一做有效性校验
     *
     * @return self
     */
    public function setAuthCode($authCode)
    {
        $this->container['authCode'] = $authCode;

        return $this;
    }

    /**
     * Gets authCodeType
     *
     * @return string|null
     */
    public function getAuthCodeType()
    {
        return $this->container['authCodeType'];
    }

    /**
     * Sets authCodeType
     *
     * @param string|null $authCodeType 付款码类型。 1.条码场景：bar_code 2.刷脸场景：security_code
     *
     * @return self
     */
    public function setAuthCodeType($authCodeType)
    {
        $this->container['authCodeType'] = $authCodeType;

        return $this;
    }

    /**
     * Gets businessParams
     *
     * @return string|null
     */
    public function getBusinessParams()
    {
        return $this->container['businessParams'];
    }

    /**
     * Sets businessParams
     *
     * @param string|null $businessParams 业务参数，如风控参数outRiskInfo等。
     *
     * @return self
     */
    public function setBusinessParams($businessParams)
    {
        $this->container['businessParams'] = $businessParams;

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
     * @param string|null $disablePayChannels 无特殊需要请勿传入；商户可用该参数禁用支付渠道。 传入后用户不可使用列表中的渠道进行支付，目前支持两种禁用渠道：信用卡快捷（OPTIMIZED_MOTO）、信用卡卡通（BIGAMOUNT_CREDIT_CARTOON）。与可用支付渠道不能同时传入
     *
     * @return self
     */
    public function setDisablePayChannels($disablePayChannels)
    {
        $this->container['disablePayChannels'] = $disablePayChannels;

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
     * @param string|null $enablePayChannels 无特殊需要请勿传入；商户可用该参数指定支付渠道。 传入后用户仅能使用列表中的渠道进行支付，目前支持三种渠道，余额宝（MONEY_FUND）、花呗（PCREDIT_PAY）以及芝麻信用（CREDITZHIMA）。与禁用支付渠道不可同时传入
     *
     * @return self
     */
    public function setEnablePayChannels($enablePayChannels)
    {
        $this->container['enablePayChannels'] = $enablePayChannels;

        return $this;
    }

    /**
     * Gets extraParam
     *
     * @return string|null
     */
    public function getExtraParam()
    {
        return $this->container['extraParam'];
    }

    /**
     * Sets extraParam
     *
     * @param string|null $extraParam 业务扩展参数，用于特定业务信息的传递，json格式，key值如下： 1、category，信用类目，信用预授权场景必传，具体类目信息见https://opendocs.alipay.com/open/10719 2、serviceId，信用服务id，信用预授权场景必传，需要联系芝麻客服获取，https://cshall.alipay.com/enterprise/index.htm?sourceId=pc_zhima（右上角“有问题点我”进入咨询） 3、creditExtInfo，信用参数，如有需要请与芝麻约定后传入，信用服务说明见https://opendocs.alipay.com/open/11157/qlsxya
     *
     * @return self
     */
    public function setExtraParam($extraParam)
    {
        $this->container['extraParam'] = $extraParam;

        return $this;
    }

    /**
     * Gets identityParams
     *
     * @return string|null
     */
    public function getIdentityParams()
    {
        return $this->container['identityParams'];
    }

    /**
     * Sets identityParams
     *
     * @param string|null $identityParams 用户实名信息参数，包含：姓名+身份证号的hash值、指定用户的uid。商户传入用户实名信息参数，支付宝会对比用户在支付宝端的实名信息。 姓名+身份证号hash值使用SHA256摘要方式与UTF8编码,返回十六进制的字符串。 identity_hash和alipay_user_id都是可选的，如果两个都传，则会先校验identity_hash，然后校验alipay_user_id。其中identity_hash的待加密字样如\"张三4566498798498498498498\"
     *
     * @return self
     */
    public function setIdentityParams($identityParams)
    {
        $this->container['identityParams'] = $identityParams;

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
     * Gets orderTitle
     *
     * @return string|null
     */
    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    /**
     * Sets orderTitle
     *
     * @param string|null $orderTitle 订单标题。 业务订单的简单描述，如商品名称等
     *
     * @return self
     */
    public function setOrderTitle($orderTitle)
    {
        $this->container['orderTitle'] = $orderTitle;

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
     * @param string|null $outOrderNo 商户授权资金订单号。 商家自定义需保证在商户端不重复。仅支持字母、数字、下划线。
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
     * @param string|null $outRequestNo 商户本次资金操作的请求流水号，用于标示请求流水的唯一性。 可与out_order_no相同，仅支持字母、数字、下划线。
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets payTimeout
     *
     * @return string|null
     */
    public function getPayTimeout()
    {
        return $this->container['payTimeout'];
    }

    /**
     * Sets payTimeout
     *
     * @param string|null $payTimeout 预授权订单相对超时时间，从商户请求时间开始计算。 预授权订单允许的最晚授权时间，逾期将关闭该笔订单。取值范围：1m～15d。m-分钟，h-小时，d-天。 该参数数值不接受小数点， 如 1.5h，可转换为90m。 默认为15m。
     *
     * @return self
     */
    public function setPayTimeout($payTimeout)
    {
        $this->container['payTimeout'] = $payTimeout;

        return $this;
    }

    /**
     * Gets payeeLogonId
     *
     * @return string|null
     */
    public function getPayeeLogonId()
    {
        return $this->container['payeeLogonId'];
    }

    /**
     * Sets payeeLogonId
     *
     * @param string|null $payeeLogonId 收款账户的支付宝登录号（email或手机号）。 如果传入则会校验该登录号对应的账号是否具备当前商户收款权限，如果商户希望用户能够使用花呗，则用户号(payee_user_id)和登录号(payee_logon_id)两者必须传入其一
     *
     * @return self
     */
    public function setPayeeLogonId($payeeLogonId)
    {
        $this->container['payeeLogonId'] = $payeeLogonId;

        return $this;
    }

    /**
     * Gets payeeUserId
     *
     * @return string|null
     */
    public function getPayeeUserId()
    {
        return $this->container['payeeUserId'];
    }

    /**
     * Sets payeeUserId
     *
     * @param string|null $payeeUserId 收款账户的支付宝用户号。 以2088开头的16位纯数字，如果传入则会校验该账号是否具备当前商户收款权限，如果商户希望用户能够使用花呗，则用户号(payee_user_id)和登录号(payee_logon_id)两者必须传入其一
     *
     * @return self
     */
    public function setPayeeUserId($payeeUserId)
    {
        $this->container['payeeUserId'] = $payeeUserId;

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
     * @param string|null $productCode 销售产品码。 当面资金预授权固定为 PRE_AUTH
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets sceneCode
     *
     * @return string|null
     */
    public function getSceneCode()
    {
        return $this->container['sceneCode'];
    }

    /**
     * Sets sceneCode
     *
     * @param string|null $sceneCode 场景码。 刷脸场景下传入HOTEL，其他情况下无需传入
     *
     * @return self
     */
    public function setSceneCode($sceneCode)
    {
        $this->container['sceneCode'] = $sceneCode;

        return $this;
    }

    /**
     * Gets settleCurrency
     *
     * @return string|null
     */
    public function getSettleCurrency()
    {
        return $this->container['settleCurrency'];
    }

    /**
     * Sets settleCurrency
     *
     * @param string|null $settleCurrency 商户指定的结算币种。支持澳元：AUD, 新西兰元：NZD, 台币：TWD, 美元：USD, 欧元：EUR, 英镑：GBP
     *
     * @return self
     */
    public function setSettleCurrency($settleCurrency)
    {
        $this->container['settleCurrency'] = $settleCurrency;

        return $this;
    }

    /**
     * Gets terminalParams
     *
     * @return string|null
     */
    public function getTerminalParams()
    {
        return $this->container['terminalParams'];
    }

    /**
     * Sets terminalParams
     *
     * @param string|null $terminalParams 机具管控sdk加签参数，参数示例 \"terminal_params\":\"{\"terminalType\":\"IOT\",\"signature\":\"QIIAX8DqbFbNf2oe97FI1RSLAycC/tU4GVjer3bN8K4qLtAB\",\"apdidToken\":\"xPA3ptuArwYc3F6Va_pjVwv7Qx7Tg5TJdrA_Jb_moYte9AqGZgEAAA==\",\"hardToken\":\"\",\"time\":\"1539847253\",\"bizCode\":\"11000200040004000121\",\"bizTid\":\"010100F01i1XyacMgpOinHerfdBw1xA9dNDocctlnqhLD8lfODr1A7Q\",\"signedKeys\":\"authCode,totalAmount,apdidToken,hardToken,time,bizCode,bizTid\"}\"
     *
     * @return self
     */
    public function setTerminalParams($terminalParams)
    {
        $this->container['terminalParams'] = $terminalParams;

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
     * @param string|null $timeoutExpress 预授权订单相对超时时间，从商户请求时间开始计算。 预授权订单允许的最晚授权时间，逾期将关闭该笔订单。取值范围：1m～15d。m-分钟，h-小时，d-天。 该参数数值不接受小数点， 如 1.5h，可转换为90m。 默认为15m。
     *
     * @return self
     */
    public function setTimeoutExpress($timeoutExpress)
    {
        $this->container['timeoutExpress'] = $timeoutExpress;

        return $this;
    }

    /**
     * Gets transCurrency
     *
     * @return string|null
     */
    public function getTransCurrency()
    {
        return $this->container['transCurrency'];
    }

    /**
     * Sets transCurrency
     *
     * @param string|null $transCurrency 标价币种,  amount 对应的币种单位。支持澳元：AUD, 新西兰元：NZD, 台币：TWD, 美元：USD, 欧元：EUR, 英镑：GBP
     *
     * @return self
     */
    public function setTransCurrency($transCurrency)
    {
        $this->container['transCurrency'] = $transCurrency;

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


