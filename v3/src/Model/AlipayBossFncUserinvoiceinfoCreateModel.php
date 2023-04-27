<?php
/**
 * AlipayBossFncUserinvoiceinfoCreateModel
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
 * AlipayBossFncUserinvoiceinfoCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayBossFncUserinvoiceinfoCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayBossFncUserinvoiceinfoCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acceptElectronic' => 'bool',
        'address' => 'string',
        'addressing' => 'bool',
        'auto' => 'bool',
        'bankAccount' => 'string',
        'bankName' => 'string',
        'businessLicenceUrl' => 'string',
        'hold' => 'bool',
        'ipRoleId' => 'string',
        'openAccountPermitUrl' => 'string',
        'operator' => 'string',
        'operatorType' => 'string',
        'otherQualificationUrl' => 'string',
        'ou' => 'bool',
        'taxNo' => 'string',
        'taxPayerQualiValid' => 'string',
        'taxPayerQualification' => 'string',
        'taxQualificationUrl' => 'string',
        'taxRegCertUrl' => 'string',
        'telephone' => 'string',
        'title' => 'string',
        'userMailInfoOrderList' => '\Alipay\OpenAPISDK\Model\UserMailInfoOrder[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acceptElectronic' => null,
        'address' => null,
        'addressing' => null,
        'auto' => null,
        'bankAccount' => null,
        'bankName' => null,
        'businessLicenceUrl' => null,
        'hold' => null,
        'ipRoleId' => null,
        'openAccountPermitUrl' => null,
        'operator' => null,
        'operatorType' => null,
        'otherQualificationUrl' => null,
        'ou' => null,
        'taxNo' => null,
        'taxPayerQualiValid' => null,
        'taxPayerQualification' => null,
        'taxQualificationUrl' => null,
        'taxRegCertUrl' => null,
        'telephone' => null,
        'title' => null,
        'userMailInfoOrderList' => null
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
        'acceptElectronic' => 'accept_electronic',
        'address' => 'address',
        'addressing' => 'addressing',
        'auto' => 'auto',
        'bankAccount' => 'bank_account',
        'bankName' => 'bank_name',
        'businessLicenceUrl' => 'business_licence_url',
        'hold' => 'hold',
        'ipRoleId' => 'ip_role_id',
        'openAccountPermitUrl' => 'open_account_permit_url',
        'operator' => 'operator',
        'operatorType' => 'operator_type',
        'otherQualificationUrl' => 'other_qualification_url',
        'ou' => 'ou',
        'taxNo' => 'tax_no',
        'taxPayerQualiValid' => 'tax_payer_quali_valid',
        'taxPayerQualification' => 'tax_payer_qualification',
        'taxQualificationUrl' => 'tax_qualification_url',
        'taxRegCertUrl' => 'tax_reg_cert_url',
        'telephone' => 'telephone',
        'title' => 'title',
        'userMailInfoOrderList' => 'user_mail_info_order_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acceptElectronic' => 'setAcceptElectronic',
        'address' => 'setAddress',
        'addressing' => 'setAddressing',
        'auto' => 'setAuto',
        'bankAccount' => 'setBankAccount',
        'bankName' => 'setBankName',
        'businessLicenceUrl' => 'setBusinessLicenceUrl',
        'hold' => 'setHold',
        'ipRoleId' => 'setIpRoleId',
        'openAccountPermitUrl' => 'setOpenAccountPermitUrl',
        'operator' => 'setOperator',
        'operatorType' => 'setOperatorType',
        'otherQualificationUrl' => 'setOtherQualificationUrl',
        'ou' => 'setOu',
        'taxNo' => 'setTaxNo',
        'taxPayerQualiValid' => 'setTaxPayerQualiValid',
        'taxPayerQualification' => 'setTaxPayerQualification',
        'taxQualificationUrl' => 'setTaxQualificationUrl',
        'taxRegCertUrl' => 'setTaxRegCertUrl',
        'telephone' => 'setTelephone',
        'title' => 'setTitle',
        'userMailInfoOrderList' => 'setUserMailInfoOrderList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acceptElectronic' => 'getAcceptElectronic',
        'address' => 'getAddress',
        'addressing' => 'getAddressing',
        'auto' => 'getAuto',
        'bankAccount' => 'getBankAccount',
        'bankName' => 'getBankName',
        'businessLicenceUrl' => 'getBusinessLicenceUrl',
        'hold' => 'getHold',
        'ipRoleId' => 'getIpRoleId',
        'openAccountPermitUrl' => 'getOpenAccountPermitUrl',
        'operator' => 'getOperator',
        'operatorType' => 'getOperatorType',
        'otherQualificationUrl' => 'getOtherQualificationUrl',
        'ou' => 'getOu',
        'taxNo' => 'getTaxNo',
        'taxPayerQualiValid' => 'getTaxPayerQualiValid',
        'taxPayerQualification' => 'getTaxPayerQualification',
        'taxQualificationUrl' => 'getTaxQualificationUrl',
        'taxRegCertUrl' => 'getTaxRegCertUrl',
        'telephone' => 'getTelephone',
        'title' => 'getTitle',
        'userMailInfoOrderList' => 'getUserMailInfoOrderList'
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
        $this->container['acceptElectronic'] = $data['acceptElectronic'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['addressing'] = $data['addressing'] ?? null;
        $this->container['auto'] = $data['auto'] ?? null;
        $this->container['bankAccount'] = $data['bankAccount'] ?? null;
        $this->container['bankName'] = $data['bankName'] ?? null;
        $this->container['businessLicenceUrl'] = $data['businessLicenceUrl'] ?? null;
        $this->container['hold'] = $data['hold'] ?? null;
        $this->container['ipRoleId'] = $data['ipRoleId'] ?? null;
        $this->container['openAccountPermitUrl'] = $data['openAccountPermitUrl'] ?? null;
        $this->container['operator'] = $data['operator'] ?? null;
        $this->container['operatorType'] = $data['operatorType'] ?? null;
        $this->container['otherQualificationUrl'] = $data['otherQualificationUrl'] ?? null;
        $this->container['ou'] = $data['ou'] ?? null;
        $this->container['taxNo'] = $data['taxNo'] ?? null;
        $this->container['taxPayerQualiValid'] = $data['taxPayerQualiValid'] ?? null;
        $this->container['taxPayerQualification'] = $data['taxPayerQualification'] ?? null;
        $this->container['taxQualificationUrl'] = $data['taxQualificationUrl'] ?? null;
        $this->container['taxRegCertUrl'] = $data['taxRegCertUrl'] ?? null;
        $this->container['telephone'] = $data['telephone'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['userMailInfoOrderList'] = $data['userMailInfoOrderList'] ?? null;
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
     * Gets acceptElectronic
     *
     * @return bool|null
     */
    public function getAcceptElectronic()
    {
        return $this->container['acceptElectronic'];
    }

    /**
     * Sets acceptElectronic
     *
     * @param bool|null $acceptElectronic 是否接受电子票 true:是，false:否
     *
     * @return self
     */
    public function setAcceptElectronic($acceptElectronic)
    {
        $this->container['acceptElectronic'] = $acceptElectronic;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address 公司注册地址，公司营业执照上登记的住址，一般纳税人必须填写，小规模纳税人无需填写
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets addressing
     *
     * @return bool|null
     */
    public function getAddressing()
    {
        return $this->container['addressing'];
    }

    /**
     * Sets addressing
     *
     * @param bool|null $addressing 开票资料pid寻址方式 true:pid寻址mid,优先以mid维度保存开票资料,若无mid则以pid维度保存开票资料 false:不寻址mid,以pid维度保存开票资料;非主站商户体系都是以pid（ipRoleId）维度保存开票资料，该值直接填为false
     *
     * @return self
     */
    public function setAddressing($addressing)
    {
        $this->container['addressing'] = $addressing;

        return $this;
    }

    /**
     * Gets auto
     *
     * @return bool|null
     */
    public function getAuto()
    {
        return $this->container['auto'];
    }

    /**
     * Sets auto
     *
     * @param bool|null $auto 是否自动申请开票 true:是，false:否
     *
     * @return self
     */
    public function setAuto($auto)
    {
        $this->container['auto'] = $auto;

        return $this;
    }

    /**
     * Gets bankAccount
     *
     * @return string|null
     */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     *
     * @param string|null $bankAccount 银行账户，公司银行账号  一般纳税人必须填写，小规模纳税人无需填写
     *
     * @return self
     */
    public function setBankAccount($bankAccount)
    {
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets bankName
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bankName'];
    }

    /**
     * Sets bankName
     *
     * @param string|null $bankName 开户行，办理银行开户手续的营业网点  一般纳税人必须填写，小规模纳税人无需填写
     *
     * @return self
     */
    public function setBankName($bankName)
    {
        $this->container['bankName'] = $bankName;

        return $this;
    }

    /**
     * Gets businessLicenceUrl
     *
     * @return string|null
     */
    public function getBusinessLicenceUrl()
    {
        return $this->container['businessLicenceUrl'];
    }

    /**
     * Sets businessLicenceUrl
     *
     * @param string|null $businessLicenceUrl 营业执照地址，营业执照上传oss上的地址
     *
     * @return self
     */
    public function setBusinessLicenceUrl($businessLicenceUrl)
    {
        $this->container['businessLicenceUrl'] = $businessLicenceUrl;

        return $this;
    }

    /**
     * Gets hold
     *
     * @return bool|null
     */
    public function getHold()
    {
        return $this->container['hold'];
    }

    /**
     * Sets hold
     *
     * @param bool|null $hold 是否暂停开票，商户添加的开票资料就是不暂停开票，如果后续要暂停开票，只能去结算中台处理。
     *
     * @return self
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

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
     * @param string|null $ipRoleId 商户的pid（ipRoleId）
     *
     * @return self
     */
    public function setIpRoleId($ipRoleId)
    {
        $this->container['ipRoleId'] = $ipRoleId;

        return $this;
    }

    /**
     * Gets openAccountPermitUrl
     *
     * @return string|null
     */
    public function getOpenAccountPermitUrl()
    {
        return $this->container['openAccountPermitUrl'];
    }

    /**
     * Sets openAccountPermitUrl
     *
     * @param string|null $openAccountPermitUrl 银行开户许可证附件，银行开户许可证上传oss上的地址
     *
     * @return self
     */
    public function setOpenAccountPermitUrl($openAccountPermitUrl)
    {
        $this->container['openAccountPermitUrl'] = $openAccountPermitUrl;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string|null
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string|null $operator 当前操作人
     *
     * @return self
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets operatorType
     *
     * @return string|null
     */
    public function getOperatorType()
    {
        return $this->container['operatorType'];
    }

    /**
     * Sets operatorType
     *
     * @param string|null $operatorType 当前操作人类型,01:商户 02:管理员(小二)
     *
     * @return self
     */
    public function setOperatorType($operatorType)
    {
        $this->container['operatorType'] = $operatorType;

        return $this;
    }

    /**
     * Gets otherQualificationUrl
     *
     * @return string|null
     */
    public function getOtherQualificationUrl()
    {
        return $this->container['otherQualificationUrl'];
    }

    /**
     * Sets otherQualificationUrl
     *
     * @param string|null $otherQualificationUrl 其它资质证明地址，其他资质证明附件上传oss上的地址
     *
     * @return self
     */
    public function setOtherQualificationUrl($otherQualificationUrl)
    {
        $this->container['otherQualificationUrl'] = $otherQualificationUrl;

        return $this;
    }

    /**
     * Gets ou
     *
     * @return bool|null
     */
    public function getOu()
    {
        return $this->container['ou'];
    }

    /**
     * Sets ou
     *
     * @param bool|null $ou 外部只允许添加商户开票资料，该值填写为false
     *
     * @return self
     */
    public function setOu($ou)
    {
        $this->container['ou'] = $ou;

        return $this;
    }

    /**
     * Gets taxNo
     *
     * @return string|null
     */
    public function getTaxNo()
    {
        return $this->container['taxNo'];
    }

    /**
     * Sets taxNo
     *
     * @param string|null $taxNo 纳税人识别号，税务登记证上的号码。一般纳税人必须填写，小规模纳税人如果是商户也必须填写，个人无需填写
     *
     * @return self
     */
    public function setTaxNo($taxNo)
    {
        $this->container['taxNo'] = $taxNo;

        return $this;
    }

    /**
     * Gets taxPayerQualiValid
     *
     * @return string|null
     */
    public function getTaxPayerQualiValid()
    {
        return $this->container['taxPayerQualiValid'];
    }

    /**
     * Sets taxPayerQualiValid
     *
     * @param string|null $taxPayerQualiValid 纳税人资格开始时间 （格式：时间戳）  一般纳税人必须填写，小规模纳税人无需填写
     *
     * @return self
     */
    public function setTaxPayerQualiValid($taxPayerQualiValid)
    {
        $this->container['taxPayerQualiValid'] = $taxPayerQualiValid;

        return $this;
    }

    /**
     * Gets taxPayerQualification
     *
     * @return string|null
     */
    public function getTaxPayerQualification()
    {
        return $this->container['taxPayerQualification'];
    }

    /**
     * Sets taxPayerQualification
     *
     * @param string|null $taxPayerQualification 纳税人资格种类，01：一般纳税人；02：小规模纳税人；03：国际商户
     *
     * @return self
     */
    public function setTaxPayerQualification($taxPayerQualification)
    {
        $this->container['taxPayerQualification'] = $taxPayerQualification;

        return $this;
    }

    /**
     * Gets taxQualificationUrl
     *
     * @return string|null
     */
    public function getTaxQualificationUrl()
    {
        return $this->container['taxQualificationUrl'];
    }

    /**
     * Sets taxQualificationUrl
     *
     * @param string|null $taxQualificationUrl 一般纳税人资格证书地址，一般纳税人资格证书上传oss上的地址
     *
     * @return self
     */
    public function setTaxQualificationUrl($taxQualificationUrl)
    {
        $this->container['taxQualificationUrl'] = $taxQualificationUrl;

        return $this;
    }

    /**
     * Gets taxRegCertUrl
     *
     * @return string|null
     */
    public function getTaxRegCertUrl()
    {
        return $this->container['taxRegCertUrl'];
    }

    /**
     * Sets taxRegCertUrl
     *
     * @param string|null $taxRegCertUrl 税务登记证地址，税务登记证上传oss上的地址
     *
     * @return self
     */
    public function setTaxRegCertUrl($taxRegCertUrl)
    {
        $this->container['taxRegCertUrl'] = $taxRegCertUrl;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone 公司注册电话（手机号和座机均可）  一般纳税人必须填写，小规模纳税人无需填写
     *
     * @return self
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 发票抬头，票面信息上的抬头信息
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets userMailInfoOrderList
     *
     * @return \Alipay\OpenAPISDK\Model\UserMailInfoOrder[]|null
     */
    public function getUserMailInfoOrderList()
    {
        return $this->container['userMailInfoOrderList'];
    }

    /**
     * Sets userMailInfoOrderList
     *
     * @param \Alipay\OpenAPISDK\Model\UserMailInfoOrder[]|null $userMailInfoOrderList 收件人列表,若不修改此项可以不填  选择非电子票时，邮寄信息必填，且保证邮寄信息的ipRoleId和开票资料的ipRoleId相等
     *
     * @return self
     */
    public function setUserMailInfoOrderList($userMailInfoOrderList)
    {
        $this->container['userMailInfoOrderList'] = $userMailInfoOrderList;

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


