<?php
/**
 * ArRelInvoiceOpenApiResponse
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
 * ArRelInvoiceOpenApiResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArRelInvoiceOpenApiResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArRelInvoiceOpenApiResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'arInvoiceLines' => '\Alipay\OpenAPISDK\Model\ArInvoiceLineOpenApiResponse',
        'buyerAddress' => 'string',
        'buyerBankAccount' => 'string',
        'buyerBankName' => 'string',
        'buyerInvoiceTitle' => 'string',
        'buyerTaxNo' => 'string',
        'buyerTelephone' => 'string',
        'canLink' => 'bool',
        'creator' => 'string',
        'drawer' => 'string',
        'elcInvoiceUrl' => 'string',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'instId' => 'string',
        'invoiceAmt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'invoiceChannel' => 'string',
        'invoiceCode' => 'string',
        'invoiceDate' => 'string',
        'invoiceId' => 'string',
        'invoiceMaterial' => 'string',
        'invoiceNo' => 'string',
        'invoiceNote' => 'string',
        'invoiceStatus' => 'string',
        'invoiceType' => 'string',
        'ipId' => 'string',
        'ipRoleId' => 'string',
        'lastModer' => 'string',
        'linkedAmt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'mailStatus' => 'string',
        'memo' => 'string',
        'noBillInvoiceFlag' => 'string',
        'online' => 'bool',
        'payee' => 'string',
        'recentMailId' => 'string',
        'red' => 'string',
        'redAmt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'reviewer' => 'string',
        'sellerAddress' => 'string',
        'sellerBankAccount' => 'string',
        'sellerBankName' => 'string',
        'sellerCompanyName' => 'string',
        'sellerTaxNo' => 'string',
        'sellerTelephone' => 'string',
        'tntInstId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'arInvoiceLines' => null,
        'buyerAddress' => null,
        'buyerBankAccount' => null,
        'buyerBankName' => null,
        'buyerInvoiceTitle' => null,
        'buyerTaxNo' => null,
        'buyerTelephone' => null,
        'canLink' => null,
        'creator' => null,
        'drawer' => null,
        'elcInvoiceUrl' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'instId' => null,
        'invoiceAmt' => null,
        'invoiceChannel' => null,
        'invoiceCode' => null,
        'invoiceDate' => null,
        'invoiceId' => null,
        'invoiceMaterial' => null,
        'invoiceNo' => null,
        'invoiceNote' => null,
        'invoiceStatus' => null,
        'invoiceType' => null,
        'ipId' => null,
        'ipRoleId' => null,
        'lastModer' => null,
        'linkedAmt' => null,
        'mailStatus' => null,
        'memo' => null,
        'noBillInvoiceFlag' => null,
        'online' => null,
        'payee' => null,
        'recentMailId' => null,
        'red' => null,
        'redAmt' => null,
        'reviewer' => null,
        'sellerAddress' => null,
        'sellerBankAccount' => null,
        'sellerBankName' => null,
        'sellerCompanyName' => null,
        'sellerTaxNo' => null,
        'sellerTelephone' => null,
        'tntInstId' => null
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
        'arInvoiceLines' => 'ar_invoice_lines',
        'buyerAddress' => 'buyer_address',
        'buyerBankAccount' => 'buyer_bank_account',
        'buyerBankName' => 'buyer_bank_name',
        'buyerInvoiceTitle' => 'buyer_invoice_title',
        'buyerTaxNo' => 'buyer_tax_no',
        'buyerTelephone' => 'buyer_telephone',
        'canLink' => 'can_link',
        'creator' => 'creator',
        'drawer' => 'drawer',
        'elcInvoiceUrl' => 'elc_invoice_url',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'instId' => 'inst_id',
        'invoiceAmt' => 'invoice_amt',
        'invoiceChannel' => 'invoice_channel',
        'invoiceCode' => 'invoice_code',
        'invoiceDate' => 'invoice_date',
        'invoiceId' => 'invoice_id',
        'invoiceMaterial' => 'invoice_material',
        'invoiceNo' => 'invoice_no',
        'invoiceNote' => 'invoice_note',
        'invoiceStatus' => 'invoice_status',
        'invoiceType' => 'invoice_type',
        'ipId' => 'ip_id',
        'ipRoleId' => 'ip_role_id',
        'lastModer' => 'last_moder',
        'linkedAmt' => 'linked_amt',
        'mailStatus' => 'mail_status',
        'memo' => 'memo',
        'noBillInvoiceFlag' => 'no_bill_invoice_flag',
        'online' => 'online',
        'payee' => 'payee',
        'recentMailId' => 'recent_mail_id',
        'red' => 'red',
        'redAmt' => 'red_amt',
        'reviewer' => 'reviewer',
        'sellerAddress' => 'seller_address',
        'sellerBankAccount' => 'seller_bank_account',
        'sellerBankName' => 'seller_bank_name',
        'sellerCompanyName' => 'seller_company_name',
        'sellerTaxNo' => 'seller_tax_no',
        'sellerTelephone' => 'seller_telephone',
        'tntInstId' => 'tnt_inst_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arInvoiceLines' => 'setArInvoiceLines',
        'buyerAddress' => 'setBuyerAddress',
        'buyerBankAccount' => 'setBuyerBankAccount',
        'buyerBankName' => 'setBuyerBankName',
        'buyerInvoiceTitle' => 'setBuyerInvoiceTitle',
        'buyerTaxNo' => 'setBuyerTaxNo',
        'buyerTelephone' => 'setBuyerTelephone',
        'canLink' => 'setCanLink',
        'creator' => 'setCreator',
        'drawer' => 'setDrawer',
        'elcInvoiceUrl' => 'setElcInvoiceUrl',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'instId' => 'setInstId',
        'invoiceAmt' => 'setInvoiceAmt',
        'invoiceChannel' => 'setInvoiceChannel',
        'invoiceCode' => 'setInvoiceCode',
        'invoiceDate' => 'setInvoiceDate',
        'invoiceId' => 'setInvoiceId',
        'invoiceMaterial' => 'setInvoiceMaterial',
        'invoiceNo' => 'setInvoiceNo',
        'invoiceNote' => 'setInvoiceNote',
        'invoiceStatus' => 'setInvoiceStatus',
        'invoiceType' => 'setInvoiceType',
        'ipId' => 'setIpId',
        'ipRoleId' => 'setIpRoleId',
        'lastModer' => 'setLastModer',
        'linkedAmt' => 'setLinkedAmt',
        'mailStatus' => 'setMailStatus',
        'memo' => 'setMemo',
        'noBillInvoiceFlag' => 'setNoBillInvoiceFlag',
        'online' => 'setOnline',
        'payee' => 'setPayee',
        'recentMailId' => 'setRecentMailId',
        'red' => 'setRed',
        'redAmt' => 'setRedAmt',
        'reviewer' => 'setReviewer',
        'sellerAddress' => 'setSellerAddress',
        'sellerBankAccount' => 'setSellerBankAccount',
        'sellerBankName' => 'setSellerBankName',
        'sellerCompanyName' => 'setSellerCompanyName',
        'sellerTaxNo' => 'setSellerTaxNo',
        'sellerTelephone' => 'setSellerTelephone',
        'tntInstId' => 'setTntInstId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arInvoiceLines' => 'getArInvoiceLines',
        'buyerAddress' => 'getBuyerAddress',
        'buyerBankAccount' => 'getBuyerBankAccount',
        'buyerBankName' => 'getBuyerBankName',
        'buyerInvoiceTitle' => 'getBuyerInvoiceTitle',
        'buyerTaxNo' => 'getBuyerTaxNo',
        'buyerTelephone' => 'getBuyerTelephone',
        'canLink' => 'getCanLink',
        'creator' => 'getCreator',
        'drawer' => 'getDrawer',
        'elcInvoiceUrl' => 'getElcInvoiceUrl',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'instId' => 'getInstId',
        'invoiceAmt' => 'getInvoiceAmt',
        'invoiceChannel' => 'getInvoiceChannel',
        'invoiceCode' => 'getInvoiceCode',
        'invoiceDate' => 'getInvoiceDate',
        'invoiceId' => 'getInvoiceId',
        'invoiceMaterial' => 'getInvoiceMaterial',
        'invoiceNo' => 'getInvoiceNo',
        'invoiceNote' => 'getInvoiceNote',
        'invoiceStatus' => 'getInvoiceStatus',
        'invoiceType' => 'getInvoiceType',
        'ipId' => 'getIpId',
        'ipRoleId' => 'getIpRoleId',
        'lastModer' => 'getLastModer',
        'linkedAmt' => 'getLinkedAmt',
        'mailStatus' => 'getMailStatus',
        'memo' => 'getMemo',
        'noBillInvoiceFlag' => 'getNoBillInvoiceFlag',
        'online' => 'getOnline',
        'payee' => 'getPayee',
        'recentMailId' => 'getRecentMailId',
        'red' => 'getRed',
        'redAmt' => 'getRedAmt',
        'reviewer' => 'getReviewer',
        'sellerAddress' => 'getSellerAddress',
        'sellerBankAccount' => 'getSellerBankAccount',
        'sellerBankName' => 'getSellerBankName',
        'sellerCompanyName' => 'getSellerCompanyName',
        'sellerTaxNo' => 'getSellerTaxNo',
        'sellerTelephone' => 'getSellerTelephone',
        'tntInstId' => 'getTntInstId'
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
        $this->container['arInvoiceLines'] = $data['arInvoiceLines'] ?? null;
        $this->container['buyerAddress'] = $data['buyerAddress'] ?? null;
        $this->container['buyerBankAccount'] = $data['buyerBankAccount'] ?? null;
        $this->container['buyerBankName'] = $data['buyerBankName'] ?? null;
        $this->container['buyerInvoiceTitle'] = $data['buyerInvoiceTitle'] ?? null;
        $this->container['buyerTaxNo'] = $data['buyerTaxNo'] ?? null;
        $this->container['buyerTelephone'] = $data['buyerTelephone'] ?? null;
        $this->container['canLink'] = $data['canLink'] ?? null;
        $this->container['creator'] = $data['creator'] ?? null;
        $this->container['drawer'] = $data['drawer'] ?? null;
        $this->container['elcInvoiceUrl'] = $data['elcInvoiceUrl'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['instId'] = $data['instId'] ?? null;
        $this->container['invoiceAmt'] = $data['invoiceAmt'] ?? null;
        $this->container['invoiceChannel'] = $data['invoiceChannel'] ?? null;
        $this->container['invoiceCode'] = $data['invoiceCode'] ?? null;
        $this->container['invoiceDate'] = $data['invoiceDate'] ?? null;
        $this->container['invoiceId'] = $data['invoiceId'] ?? null;
        $this->container['invoiceMaterial'] = $data['invoiceMaterial'] ?? null;
        $this->container['invoiceNo'] = $data['invoiceNo'] ?? null;
        $this->container['invoiceNote'] = $data['invoiceNote'] ?? null;
        $this->container['invoiceStatus'] = $data['invoiceStatus'] ?? null;
        $this->container['invoiceType'] = $data['invoiceType'] ?? null;
        $this->container['ipId'] = $data['ipId'] ?? null;
        $this->container['ipRoleId'] = $data['ipRoleId'] ?? null;
        $this->container['lastModer'] = $data['lastModer'] ?? null;
        $this->container['linkedAmt'] = $data['linkedAmt'] ?? null;
        $this->container['mailStatus'] = $data['mailStatus'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['noBillInvoiceFlag'] = $data['noBillInvoiceFlag'] ?? null;
        $this->container['online'] = $data['online'] ?? null;
        $this->container['payee'] = $data['payee'] ?? null;
        $this->container['recentMailId'] = $data['recentMailId'] ?? null;
        $this->container['red'] = $data['red'] ?? null;
        $this->container['redAmt'] = $data['redAmt'] ?? null;
        $this->container['reviewer'] = $data['reviewer'] ?? null;
        $this->container['sellerAddress'] = $data['sellerAddress'] ?? null;
        $this->container['sellerBankAccount'] = $data['sellerBankAccount'] ?? null;
        $this->container['sellerBankName'] = $data['sellerBankName'] ?? null;
        $this->container['sellerCompanyName'] = $data['sellerCompanyName'] ?? null;
        $this->container['sellerTaxNo'] = $data['sellerTaxNo'] ?? null;
        $this->container['sellerTelephone'] = $data['sellerTelephone'] ?? null;
        $this->container['tntInstId'] = $data['tntInstId'] ?? null;
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
     * Gets arInvoiceLines
     *
     * @return \Alipay\OpenAPISDK\Model\ArInvoiceLineOpenApiResponse|null
     */
    public function getArInvoiceLines()
    {
        return $this->container['arInvoiceLines'];
    }

    /**
     * Sets arInvoiceLines
     *
     * @param \Alipay\OpenAPISDK\Model\ArInvoiceLineOpenApiResponse|null $arInvoiceLines arInvoiceLines
     *
     * @return self
     */
    public function setArInvoiceLines($arInvoiceLines)
    {
        $this->container['arInvoiceLines'] = $arInvoiceLines;

        return $this;
    }

    /**
     * Gets buyerAddress
     *
     * @return string|null
     */
    public function getBuyerAddress()
    {
        return $this->container['buyerAddress'];
    }

    /**
     * Sets buyerAddress
     *
     * @param string|null $buyerAddress 购方的地址
     *
     * @return self
     */
    public function setBuyerAddress($buyerAddress)
    {
        $this->container['buyerAddress'] = $buyerAddress;

        return $this;
    }

    /**
     * Gets buyerBankAccount
     *
     * @return string|null
     */
    public function getBuyerBankAccount()
    {
        return $this->container['buyerBankAccount'];
    }

    /**
     * Sets buyerBankAccount
     *
     * @param string|null $buyerBankAccount 购方银行账号
     *
     * @return self
     */
    public function setBuyerBankAccount($buyerBankAccount)
    {
        $this->container['buyerBankAccount'] = $buyerBankAccount;

        return $this;
    }

    /**
     * Gets buyerBankName
     *
     * @return string|null
     */
    public function getBuyerBankName()
    {
        return $this->container['buyerBankName'];
    }

    /**
     * Sets buyerBankName
     *
     * @param string|null $buyerBankName 购方开户行名称
     *
     * @return self
     */
    public function setBuyerBankName($buyerBankName)
    {
        $this->container['buyerBankName'] = $buyerBankName;

        return $this;
    }

    /**
     * Gets buyerInvoiceTitle
     *
     * @return string|null
     */
    public function getBuyerInvoiceTitle()
    {
        return $this->container['buyerInvoiceTitle'];
    }

    /**
     * Sets buyerInvoiceTitle
     *
     * @param string|null $buyerInvoiceTitle 购方发票抬头，用于打印在发票上
     *
     * @return self
     */
    public function setBuyerInvoiceTitle($buyerInvoiceTitle)
    {
        $this->container['buyerInvoiceTitle'] = $buyerInvoiceTitle;

        return $this;
    }

    /**
     * Gets buyerTaxNo
     *
     * @return string|null
     */
    public function getBuyerTaxNo()
    {
        return $this->container['buyerTaxNo'];
    }

    /**
     * Sets buyerTaxNo
     *
     * @param string|null $buyerTaxNo 购方税号
     *
     * @return self
     */
    public function setBuyerTaxNo($buyerTaxNo)
    {
        $this->container['buyerTaxNo'] = $buyerTaxNo;

        return $this;
    }

    /**
     * Gets buyerTelephone
     *
     * @return string|null
     */
    public function getBuyerTelephone()
    {
        return $this->container['buyerTelephone'];
    }

    /**
     * Sets buyerTelephone
     *
     * @param string|null $buyerTelephone 购方的电话号码
     *
     * @return self
     */
    public function setBuyerTelephone($buyerTelephone)
    {
        $this->container['buyerTelephone'] = $buyerTelephone;

        return $this;
    }

    /**
     * Gets canLink
     *
     * @return bool|null
     */
    public function getCanLink()
    {
        return $this->container['canLink'];
    }

    /**
     * Sets canLink
     *
     * @param bool|null $canLink 是否可以关联账单
     *
     * @return self
     */
    public function setCanLink($canLink)
    {
        $this->container['canLink'] = $canLink;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string|null $creator 创建人
     *
     * @return self
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets drawer
     *
     * @return string|null
     */
    public function getDrawer()
    {
        return $this->container['drawer'];
    }

    /**
     * Sets drawer
     *
     * @param string|null $drawer 开票人
     *
     * @return self
     */
    public function setDrawer($drawer)
    {
        $this->container['drawer'] = $drawer;

        return $this;
    }

    /**
     * Gets elcInvoiceUrl
     *
     * @return string|null
     */
    public function getElcInvoiceUrl()
    {
        return $this->container['elcInvoiceUrl'];
    }

    /**
     * Sets elcInvoiceUrl
     *
     * @param string|null $elcInvoiceUrl 电子发票在oss上的存储地址
     *
     * @return self
     */
    public function setElcInvoiceUrl($elcInvoiceUrl)
    {
        $this->container['elcInvoiceUrl'] = $elcInvoiceUrl;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 修改时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets instId
     *
     * @return string|null
     */
    public function getInstId()
    {
        return $this->container['instId'];
    }

    /**
     * Sets instId
     *
     * @param string|null $instId 对应发票所在OU的id，用于标示该发票所述的OU。
     *
     * @return self
     */
    public function setInstId($instId)
    {
        $this->container['instId'] = $instId;

        return $this;
    }

    /**
     * Gets invoiceAmt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getInvoiceAmt()
    {
        return $this->container['invoiceAmt'];
    }

    /**
     * Sets invoiceAmt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $invoiceAmt invoiceAmt
     *
     * @return self
     */
    public function setInvoiceAmt($invoiceAmt)
    {
        $this->container['invoiceAmt'] = $invoiceAmt;

        return $this;
    }

    /**
     * Gets invoiceChannel
     *
     * @return string|null
     */
    public function getInvoiceChannel()
    {
        return $this->container['invoiceChannel'];
    }

    /**
     * Sets invoiceChannel
     *
     * @param string|null $invoiceChannel 开票渠道，01：在线，02：线下
     *
     * @return self
     */
    public function setInvoiceChannel($invoiceChannel)
    {
        $this->container['invoiceChannel'] = $invoiceChannel;

        return $this;
    }

    /**
     * Gets invoiceCode
     *
     * @return string|null
     */
    public function getInvoiceCode()
    {
        return $this->container['invoiceCode'];
    }

    /**
     * Sets invoiceCode
     *
     * @param string|null $invoiceCode 发票编码
     *
     * @return self
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->container['invoiceCode'] = $invoiceCode;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param string|null $invoiceDate 发票的开票日期，yyyyMMdd
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets invoiceId
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoiceId'];
    }

    /**
     * Sets invoiceId
     *
     * @param string|null $invoiceId 发票ID，唯一标示一张发票
     *
     * @return self
     */
    public function setInvoiceId($invoiceId)
    {
        $this->container['invoiceId'] = $invoiceId;

        return $this;
    }

    /**
     * Gets invoiceMaterial
     *
     * @return string|null
     */
    public function getInvoiceMaterial()
    {
        return $this->container['invoiceMaterial'];
    }

    /**
     * Sets invoiceMaterial
     *
     * @param string|null $invoiceMaterial 发票介质，01：电子，02：纸质
     *
     * @return self
     */
    public function setInvoiceMaterial($invoiceMaterial)
    {
        $this->container['invoiceMaterial'] = $invoiceMaterial;

        return $this;
    }

    /**
     * Gets invoiceNo
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
     * Sets invoiceNo
     *
     * @param string|null $invoiceNo 发票号码
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets invoiceNote
     *
     * @return string|null
     */
    public function getInvoiceNote()
    {
        return $this->container['invoiceNote'];
    }

    /**
     * Sets invoiceNote
     *
     * @param string|null $invoiceNote 发票备注
     *
     * @return self
     */
    public function setInvoiceNote($invoiceNote)
    {
        $this->container['invoiceNote'] = $invoiceNote;

        return $this;
    }

    /**
     * Gets invoiceStatus
     *
     * @return string|null
     */
    public function getInvoiceStatus()
    {
        return $this->container['invoiceStatus'];
    }

    /**
     * Sets invoiceStatus
     *
     * @param string|null $invoiceStatus 发票状态：用于标示发票当前的状态，状态类型以及相关含义 01：待开票，02：开票中，03：已开票，04：作废中，05：已作废，06：红冲中，07：已红冲，08：部分红冲，09：无效
     *
     * @return self
     */
    public function setInvoiceStatus($invoiceStatus)
    {
        $this->container['invoiceStatus'] = $invoiceStatus;

        return $this;
    }

    /**
     * Gets invoiceType
     *
     * @return string|null
     */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string|null $invoiceType 发票类型：01：专票，02：普票，03：营业税发票，04：国际形式发票，05：其它发票
     *
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;

        return $this;
    }

    /**
     * Gets ipId
     *
     * @return string|null
     */
    public function getIpId()
    {
        return $this->container['ipId'];
    }

    /**
     * Sets ipId
     *
     * @param string|null $ipId 对应发票商户的ipId，在主站标示mid，在其他环境标示ip_id。
     *
     * @return self
     */
    public function setIpId($ipId)
    {
        $this->container['ipId'] = $ipId;

        return $this;
    }

    /**
     * Gets ipRoleId
     *
     * @return string|null
     */
    public function getIpRoleId()
    {
        return $this->container['ipRoleId'];
    }

    /**
     * Sets ipRoleId
     *
     * @param string|null $ipRoleId 商户结算的ipRoleId，表示商户的结算对象，在主站表示pid。
     *
     * @return self
     */
    public function setIpRoleId($ipRoleId)
    {
        $this->container['ipRoleId'] = $ipRoleId;

        return $this;
    }

    /**
     * Gets lastModer
     *
     * @return string|null
     */
    public function getLastModer()
    {
        return $this->container['lastModer'];
    }

    /**
     * Sets lastModer
     *
     * @param string|null $lastModer 最近修改人
     *
     * @return self
     */
    public function setLastModer($lastModer)
    {
        $this->container['lastModer'] = $lastModer;

        return $this;
    }

    /**
     * Gets linkedAmt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getLinkedAmt()
    {
        return $this->container['linkedAmt'];
    }

    /**
     * Sets linkedAmt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $linkedAmt linkedAmt
     *
     * @return self
     */
    public function setLinkedAmt($linkedAmt)
    {
        $this->container['linkedAmt'] = $linkedAmt;

        return $this;
    }

    /**
     * Gets mailStatus
     *
     * @return string|null
     */
    public function getMailStatus()
    {
        return $this->container['mailStatus'];
    }

    /**
     * Sets mailStatus
     *
     * @param string|null $mailStatus 发票开出后的邮寄状态，具体状态说明 01：待邮寄，02：已邮寄，03：退回中，04：已退回
     *
     * @return self
     */
    public function setMailStatus($mailStatus)
    {
        $this->container['mailStatus'] = $mailStatus;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 备注
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets noBillInvoiceFlag
     *
     * @return string|null
     */
    public function getNoBillInvoiceFlag()
    {
        return $this->container['noBillInvoiceFlag'];
    }

    /**
     * Sets noBillInvoiceFlag
     *
     * @param string|null $noBillInvoiceFlag 是否是无账单发票 Y：是 N：不是
     *
     * @return self
     */
    public function setNoBillInvoiceFlag($noBillInvoiceFlag)
    {
        $this->container['noBillInvoiceFlag'] = $noBillInvoiceFlag;

        return $this;
    }

    /**
     * Gets online
     *
     * @return bool|null
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param bool|null $online 是否为线上发票 true：是， false：不是
     *
     * @return self
     */
    public function setOnline($online)
    {
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets payee
     *
     * @return string|null
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee
     *
     * @param string|null $payee 收款人
     *
     * @return self
     */
    public function setPayee($payee)
    {
        $this->container['payee'] = $payee;

        return $this;
    }

    /**
     * Gets recentMailId
     *
     * @return string|null
     */
    public function getRecentMailId()
    {
        return $this->container['recentMailId'];
    }

    /**
     * Sets recentMailId
     *
     * @param string|null $recentMailId 邮件信息的主键，用于‘根据发票邮寄ID获取当前的邮寄信息’的查询输入。
     *
     * @return self
     */
    public function setRecentMailId($recentMailId)
    {
        $this->container['recentMailId'] = $recentMailId;

        return $this;
    }

    /**
     * Gets red
     *
     * @return string|null
     */
    public function getRed()
    {
        return $this->container['red'];
    }

    /**
     * Sets red
     *
     * @param string|null $red 是否红字 Y：红字， N：蓝字
     *
     * @return self
     */
    public function setRed($red)
    {
        $this->container['red'] = $red;

        return $this;
    }

    /**
     * Gets redAmt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getRedAmt()
    {
        return $this->container['redAmt'];
    }

    /**
     * Sets redAmt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $redAmt redAmt
     *
     * @return self
     */
    public function setRedAmt($redAmt)
    {
        $this->container['redAmt'] = $redAmt;

        return $this;
    }

    /**
     * Gets reviewer
     *
     * @return string|null
     */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
     * Sets reviewer
     *
     * @param string|null $reviewer 复核人
     *
     * @return self
     */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;

        return $this;
    }

    /**
     * Gets sellerAddress
     *
     * @return string|null
     */
    public function getSellerAddress()
    {
        return $this->container['sellerAddress'];
    }

    /**
     * Sets sellerAddress
     *
     * @param string|null $sellerAddress 销方公司地址
     *
     * @return self
     */
    public function setSellerAddress($sellerAddress)
    {
        $this->container['sellerAddress'] = $sellerAddress;

        return $this;
    }

    /**
     * Gets sellerBankAccount
     *
     * @return string|null
     */
    public function getSellerBankAccount()
    {
        return $this->container['sellerBankAccount'];
    }

    /**
     * Sets sellerBankAccount
     *
     * @param string|null $sellerBankAccount 销方银行账号
     *
     * @return self
     */
    public function setSellerBankAccount($sellerBankAccount)
    {
        $this->container['sellerBankAccount'] = $sellerBankAccount;

        return $this;
    }

    /**
     * Gets sellerBankName
     *
     * @return string|null
     */
    public function getSellerBankName()
    {
        return $this->container['sellerBankName'];
    }

    /**
     * Sets sellerBankName
     *
     * @param string|null $sellerBankName 销方开户行名称
     *
     * @return self
     */
    public function setSellerBankName($sellerBankName)
    {
        $this->container['sellerBankName'] = $sellerBankName;

        return $this;
    }

    /**
     * Gets sellerCompanyName
     *
     * @return string|null
     */
    public function getSellerCompanyName()
    {
        return $this->container['sellerCompanyName'];
    }

    /**
     * Sets sellerCompanyName
     *
     * @param string|null $sellerCompanyName 销方公司名称
     *
     * @return self
     */
    public function setSellerCompanyName($sellerCompanyName)
    {
        $this->container['sellerCompanyName'] = $sellerCompanyName;

        return $this;
    }

    /**
     * Gets sellerTaxNo
     *
     * @return string|null
     */
    public function getSellerTaxNo()
    {
        return $this->container['sellerTaxNo'];
    }

    /**
     * Sets sellerTaxNo
     *
     * @param string|null $sellerTaxNo 销方税号，用于打印在发票上
     *
     * @return self
     */
    public function setSellerTaxNo($sellerTaxNo)
    {
        $this->container['sellerTaxNo'] = $sellerTaxNo;

        return $this;
    }

    /**
     * Gets sellerTelephone
     *
     * @return string|null
     */
    public function getSellerTelephone()
    {
        return $this->container['sellerTelephone'];
    }

    /**
     * Sets sellerTelephone
     *
     * @param string|null $sellerTelephone 销方公司电话
     *
     * @return self
     */
    public function setSellerTelephone($sellerTelephone)
    {
        $this->container['sellerTelephone'] = $sellerTelephone;

        return $this;
    }

    /**
     * Gets tntInstId
     *
     * @return string|null
     */
    public function getTntInstId()
    {
        return $this->container['tntInstId'];
    }

    /**
     * Sets tntInstId
     *
     * @param string|null $tntInstId 租户id
     *
     * @return self
     */
    public function setTntInstId($tntInstId)
    {
        $this->container['tntInstId'] = $tntInstId;

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


