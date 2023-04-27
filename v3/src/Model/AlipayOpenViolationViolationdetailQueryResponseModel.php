<?php
/**
 * AlipayOpenViolationViolationdetailQueryResponseModel
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
 * AlipayOpenViolationViolationdetailQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenViolationViolationdetailQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenViolationViolationdetailQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appealDeadLine' => 'string',
        'appealReplyRecords' => '\Alipay\OpenAPISDK\Model\ReplyRecord[]',
        'canAppeal' => 'bool',
        'canRectify' => 'bool',
        'punishAction' => 'string[]',
        'rectifyDeadLine' => 'string',
        'rectifyReplyRecords' => '\Alipay\OpenAPISDK\Model\ReplyRecord[]',
        'status' => 'string',
        'surplusAppealCnt' => 'string',
        'surplusRectifyCnt' => 'string',
        'targetId' => 'string',
        'targetName' => 'string',
        'targetType' => 'string',
        'violationEvidence' => '\Alipay\OpenAPISDK\Model\AuditEvidenceInfo[]',
        'violationReason' => 'string',
        'violationRecordId' => 'string',
        'violationTime' => 'string',
        'violationType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appealDeadLine' => null,
        'appealReplyRecords' => null,
        'canAppeal' => null,
        'canRectify' => null,
        'punishAction' => null,
        'rectifyDeadLine' => null,
        'rectifyReplyRecords' => null,
        'status' => null,
        'surplusAppealCnt' => null,
        'surplusRectifyCnt' => null,
        'targetId' => null,
        'targetName' => null,
        'targetType' => null,
        'violationEvidence' => null,
        'violationReason' => null,
        'violationRecordId' => null,
        'violationTime' => null,
        'violationType' => null
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
        'appealDeadLine' => 'appeal_dead_line',
        'appealReplyRecords' => 'appeal_reply_records',
        'canAppeal' => 'can_appeal',
        'canRectify' => 'can_rectify',
        'punishAction' => 'punish_action',
        'rectifyDeadLine' => 'rectify_dead_line',
        'rectifyReplyRecords' => 'rectify_reply_records',
        'status' => 'status',
        'surplusAppealCnt' => 'surplus_appeal_cnt',
        'surplusRectifyCnt' => 'surplus_rectify_cnt',
        'targetId' => 'target_id',
        'targetName' => 'target_name',
        'targetType' => 'target_type',
        'violationEvidence' => 'violation_evidence',
        'violationReason' => 'violation_reason',
        'violationRecordId' => 'violation_record_id',
        'violationTime' => 'violation_time',
        'violationType' => 'violation_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appealDeadLine' => 'setAppealDeadLine',
        'appealReplyRecords' => 'setAppealReplyRecords',
        'canAppeal' => 'setCanAppeal',
        'canRectify' => 'setCanRectify',
        'punishAction' => 'setPunishAction',
        'rectifyDeadLine' => 'setRectifyDeadLine',
        'rectifyReplyRecords' => 'setRectifyReplyRecords',
        'status' => 'setStatus',
        'surplusAppealCnt' => 'setSurplusAppealCnt',
        'surplusRectifyCnt' => 'setSurplusRectifyCnt',
        'targetId' => 'setTargetId',
        'targetName' => 'setTargetName',
        'targetType' => 'setTargetType',
        'violationEvidence' => 'setViolationEvidence',
        'violationReason' => 'setViolationReason',
        'violationRecordId' => 'setViolationRecordId',
        'violationTime' => 'setViolationTime',
        'violationType' => 'setViolationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appealDeadLine' => 'getAppealDeadLine',
        'appealReplyRecords' => 'getAppealReplyRecords',
        'canAppeal' => 'getCanAppeal',
        'canRectify' => 'getCanRectify',
        'punishAction' => 'getPunishAction',
        'rectifyDeadLine' => 'getRectifyDeadLine',
        'rectifyReplyRecords' => 'getRectifyReplyRecords',
        'status' => 'getStatus',
        'surplusAppealCnt' => 'getSurplusAppealCnt',
        'surplusRectifyCnt' => 'getSurplusRectifyCnt',
        'targetId' => 'getTargetId',
        'targetName' => 'getTargetName',
        'targetType' => 'getTargetType',
        'violationEvidence' => 'getViolationEvidence',
        'violationReason' => 'getViolationReason',
        'violationRecordId' => 'getViolationRecordId',
        'violationTime' => 'getViolationTime',
        'violationType' => 'getViolationType'
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
        $this->container['appealDeadLine'] = $data['appealDeadLine'] ?? null;
        $this->container['appealReplyRecords'] = $data['appealReplyRecords'] ?? null;
        $this->container['canAppeal'] = $data['canAppeal'] ?? null;
        $this->container['canRectify'] = $data['canRectify'] ?? null;
        $this->container['punishAction'] = $data['punishAction'] ?? null;
        $this->container['rectifyDeadLine'] = $data['rectifyDeadLine'] ?? null;
        $this->container['rectifyReplyRecords'] = $data['rectifyReplyRecords'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['surplusAppealCnt'] = $data['surplusAppealCnt'] ?? null;
        $this->container['surplusRectifyCnt'] = $data['surplusRectifyCnt'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetName'] = $data['targetName'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
        $this->container['violationEvidence'] = $data['violationEvidence'] ?? null;
        $this->container['violationReason'] = $data['violationReason'] ?? null;
        $this->container['violationRecordId'] = $data['violationRecordId'] ?? null;
        $this->container['violationTime'] = $data['violationTime'] ?? null;
        $this->container['violationType'] = $data['violationType'] ?? null;
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
     * Gets appealDeadLine
     *
     * @return string|null
     */
    public function getAppealDeadLine()
    {
        return $this->container['appealDeadLine'];
    }

    /**
     * Sets appealDeadLine
     *
     * @param string|null $appealDeadLine 申诉截止日期。 即商户可进行申诉的截止日期，若超过该时间未申诉或申诉不通过，平台不提供申诉机会，维持原处罚结果；若该时间内完成申诉且申诉通过，平台将撤销对商户的处罚
     *
     * @return self
     */
    public function setAppealDeadLine($appealDeadLine)
    {
        $this->container['appealDeadLine'] = $appealDeadLine;

        return $this;
    }

    /**
     * Gets appealReplyRecords
     *
     * @return \Alipay\OpenAPISDK\Model\ReplyRecord[]|null
     */
    public function getAppealReplyRecords()
    {
        return $this->container['appealReplyRecords'];
    }

    /**
     * Sets appealReplyRecords
     *
     * @param \Alipay\OpenAPISDK\Model\ReplyRecord[]|null $appealReplyRecords 商家申诉记录
     *
     * @return self
     */
    public function setAppealReplyRecords($appealReplyRecords)
    {
        $this->container['appealReplyRecords'] = $appealReplyRecords;

        return $this;
    }

    /**
     * Gets canAppeal
     *
     * @return bool|null
     */
    public function getCanAppeal()
    {
        return $this->container['canAppeal'];
    }

    /**
     * Sets canAppeal
     *
     * @param bool|null $canAppeal 商家是否可以申诉
     *
     * @return self
     */
    public function setCanAppeal($canAppeal)
    {
        $this->container['canAppeal'] = $canAppeal;

        return $this;
    }

    /**
     * Gets canRectify
     *
     * @return bool|null
     */
    public function getCanRectify()
    {
        return $this->container['canRectify'];
    }

    /**
     * Sets canRectify
     *
     * @param bool|null $canRectify 商家是否可以整改
     *
     * @return self
     */
    public function setCanRectify($canRectify)
    {
        $this->container['canRectify'] = $canRectify;

        return $this;
    }

    /**
     * Gets punishAction
     *
     * @return string[]|null
     */
    public function getPunishAction()
    {
        return $this->container['punishAction'];
    }

    /**
     * Sets punishAction
     *
     * @param string[]|null $punishAction 处罚动作及有效期
     *
     * @return self
     */
    public function setPunishAction($punishAction)
    {
        $this->container['punishAction'] = $punishAction;

        return $this;
    }

    /**
     * Gets rectifyDeadLine
     *
     * @return string|null
     */
    public function getRectifyDeadLine()
    {
        return $this->container['rectifyDeadLine'];
    }

    /**
     * Sets rectifyDeadLine
     *
     * @param string|null $rectifyDeadLine 截止整改时间。即商户可进行整改的截止日期，若超过该时间未整改或整改不通过，平台将对商户进行处罚，若该时间内完成整改且整改通过，平台对商户不处罚
     *
     * @return self
     */
    public function setRectifyDeadLine($rectifyDeadLine)
    {
        $this->container['rectifyDeadLine'] = $rectifyDeadLine;

        return $this;
    }

    /**
     * Gets rectifyReplyRecords
     *
     * @return \Alipay\OpenAPISDK\Model\ReplyRecord[]|null
     */
    public function getRectifyReplyRecords()
    {
        return $this->container['rectifyReplyRecords'];
    }

    /**
     * Sets rectifyReplyRecords
     *
     * @param \Alipay\OpenAPISDK\Model\ReplyRecord[]|null $rectifyReplyRecords 商家整改记录
     *
     * @return self
     */
    public function setRectifyReplyRecords($rectifyReplyRecords)
    {
        $this->container['rectifyReplyRecords'] = $rectifyReplyRecords;

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
     * @param string|null $status 违规工单状态枚举： PUNISH_DONE：处罚生效中 PUNISH_APPEAL_REVOKED：处罚已撤销 PUNISH_INVALID_REVOKED：处罚已到期 WAITING_RECTIFY：待整改  RECTIFY_AUDITOR_PROCESSING：整改审核中 RECTIFY_REJECTED：整改不通过 RECTIFY_PASSED：整改通过 RECTIFY_TIMEOUT ：整改已超时
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets surplusAppealCnt
     *
     * @return string|null
     */
    public function getSurplusAppealCnt()
    {
        return $this->container['surplusAppealCnt'];
    }

    /**
     * Sets surplusAppealCnt
     *
     * @param string|null $surplusAppealCnt 剩余申诉次数。 即在申诉截止日期内，平台允许商家申诉的次数，当商户提交申诉但申诉未通过时，剩余申诉次数减1，当整改次数为0，不管是否在整改截止日期内，平台将对商户进行处罚
     *
     * @return self
     */
    public function setSurplusAppealCnt($surplusAppealCnt)
    {
        $this->container['surplusAppealCnt'] = $surplusAppealCnt;

        return $this;
    }

    /**
     * Gets surplusRectifyCnt
     *
     * @return string|null
     */
    public function getSurplusRectifyCnt()
    {
        return $this->container['surplusRectifyCnt'];
    }

    /**
     * Sets surplusRectifyCnt
     *
     * @param string|null $surplusRectifyCnt 剩余整改次数。即在整改截止日期内，平台允许商家整改的次数，当商户提交整改但整改未通过时，剩余整改次数减1，当整改次数为0，不管是否在整改截止日期内，平台将对商户进行处罚
     *
     * @return self
     */
    public function setSurplusRectifyCnt($surplusRectifyCnt)
    {
        $this->container['surplusRectifyCnt'] = $surplusRectifyCnt;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 违规对象ID
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetName
     *
     * @return string|null
     */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
     * Sets targetName
     *
     * @param string|null $targetName 违规对象名称
     *
     * @return self
     */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 违规对象类型 小程序ID:APPID 生活号ID:PUBLICID
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

        return $this;
    }

    /**
     * Gets violationEvidence
     *
     * @return \Alipay\OpenAPISDK\Model\AuditEvidenceInfo[]|null
     */
    public function getViolationEvidence()
    {
        return $this->container['violationEvidence'];
    }

    /**
     * Sets violationEvidence
     *
     * @param \Alipay\OpenAPISDK\Model\AuditEvidenceInfo[]|null $violationEvidence 平台判定商家违规凭证
     *
     * @return self
     */
    public function setViolationEvidence($violationEvidence)
    {
        $this->container['violationEvidence'] = $violationEvidence;

        return $this;
    }

    /**
     * Gets violationReason
     *
     * @return string|null
     */
    public function getViolationReason()
    {
        return $this->container['violationReason'];
    }

    /**
     * Sets violationReason
     *
     * @param string|null $violationReason 违规原因
     *
     * @return self
     */
    public function setViolationReason($violationReason)
    {
        $this->container['violationReason'] = $violationReason;

        return $this;
    }

    /**
     * Gets violationRecordId
     *
     * @return string|null
     */
    public function getViolationRecordId()
    {
        return $this->container['violationRecordId'];
    }

    /**
     * Sets violationRecordId
     *
     * @param string|null $violationRecordId 支付宝侧生成的违规记录唯一标识
     *
     * @return self
     */
    public function setViolationRecordId($violationRecordId)
    {
        $this->container['violationRecordId'] = $violationRecordId;

        return $this;
    }

    /**
     * Gets violationTime
     *
     * @return string|null
     */
    public function getViolationTime()
    {
        return $this->container['violationTime'];
    }

    /**
     * Sets violationTime
     *
     * @param string|null $violationTime 违规时间
     *
     * @return self
     */
    public function setViolationTime($violationTime)
    {
        $this->container['violationTime'] = $violationTime;

        return $this;
    }

    /**
     * Gets violationType
     *
     * @return string|null
     */
    public function getViolationType()
    {
        return $this->container['violationType'];
    }

    /**
     * Sets violationType
     *
     * @param string|null $violationType 即平台依据平台规范/规则，判定商户的违规类型
     *
     * @return self
     */
    public function setViolationType($violationType)
    {
        $this->container['violationType'] = $violationType;

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


