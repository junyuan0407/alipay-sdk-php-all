<?php
/**
 * AlipayIserviceCcmAgentCreateModel
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
 * AlipayIserviceCcmAgentCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmAgentCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmAgentCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'answeringMode' => 'string',
        'ccsInstanceIds' => 'string[]',
        'chatConfigs' => '\Alipay\OpenAPISDK\Model\AgentChatInfo[]',
        'creatorId' => 'string',
        'email' => 'string',
        'externalUserId' => 'string',
        'hotlineConfigs' => '\Alipay\OpenAPISDK\Model\AgentHotlineInfo[]',
        'jobNumber' => 'string',
        'mobile' => 'string',
        'nickName' => 'string',
        'realName' => 'string',
        'roleIds' => '\Alipay\OpenAPISDK\Model\RoleId[]',
        'userChannel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'answeringMode' => null,
        'ccsInstanceIds' => null,
        'chatConfigs' => null,
        'creatorId' => null,
        'email' => null,
        'externalUserId' => null,
        'hotlineConfigs' => null,
        'jobNumber' => null,
        'mobile' => null,
        'nickName' => null,
        'realName' => null,
        'roleIds' => null,
        'userChannel' => null
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
        'answeringMode' => 'answering_mode',
        'ccsInstanceIds' => 'ccs_instance_ids',
        'chatConfigs' => 'chat_configs',
        'creatorId' => 'creator_id',
        'email' => 'email',
        'externalUserId' => 'external_user_id',
        'hotlineConfigs' => 'hotline_configs',
        'jobNumber' => 'job_number',
        'mobile' => 'mobile',
        'nickName' => 'nick_name',
        'realName' => 'real_name',
        'roleIds' => 'role_ids',
        'userChannel' => 'user_channel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answeringMode' => 'setAnsweringMode',
        'ccsInstanceIds' => 'setCcsInstanceIds',
        'chatConfigs' => 'setChatConfigs',
        'creatorId' => 'setCreatorId',
        'email' => 'setEmail',
        'externalUserId' => 'setExternalUserId',
        'hotlineConfigs' => 'setHotlineConfigs',
        'jobNumber' => 'setJobNumber',
        'mobile' => 'setMobile',
        'nickName' => 'setNickName',
        'realName' => 'setRealName',
        'roleIds' => 'setRoleIds',
        'userChannel' => 'setUserChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answeringMode' => 'getAnsweringMode',
        'ccsInstanceIds' => 'getCcsInstanceIds',
        'chatConfigs' => 'getChatConfigs',
        'creatorId' => 'getCreatorId',
        'email' => 'getEmail',
        'externalUserId' => 'getExternalUserId',
        'hotlineConfigs' => 'getHotlineConfigs',
        'jobNumber' => 'getJobNumber',
        'mobile' => 'getMobile',
        'nickName' => 'getNickName',
        'realName' => 'getRealName',
        'roleIds' => 'getRoleIds',
        'userChannel' => 'getUserChannel'
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
        $this->container['answeringMode'] = $data['answeringMode'] ?? null;
        $this->container['ccsInstanceIds'] = $data['ccsInstanceIds'] ?? null;
        $this->container['chatConfigs'] = $data['chatConfigs'] ?? null;
        $this->container['creatorId'] = $data['creatorId'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['externalUserId'] = $data['externalUserId'] ?? null;
        $this->container['hotlineConfigs'] = $data['hotlineConfigs'] ?? null;
        $this->container['jobNumber'] = $data['jobNumber'] ?? null;
        $this->container['mobile'] = $data['mobile'] ?? null;
        $this->container['nickName'] = $data['nickName'] ?? null;
        $this->container['realName'] = $data['realName'] ?? null;
        $this->container['roleIds'] = $data['roleIds'] ?? null;
        $this->container['userChannel'] = $data['userChannel'] ?? null;
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
     * Gets answeringMode
     *
     * @return string|null
     */
    public function getAnsweringMode()
    {
        return $this->container['answeringMode'];
    }

    /**
     * Sets answeringMode
     *
     * @param string|null $answeringMode 热线接入方式，取值0，1，2
     *
     * @return self
     */
    public function setAnsweringMode($answeringMode)
    {
        $this->container['answeringMode'] = $answeringMode;

        return $this;
    }

    /**
     * Gets ccsInstanceIds
     *
     * @return string[]|null
     */
    public function getCcsInstanceIds()
    {
        return $this->container['ccsInstanceIds'];
    }

    /**
     * Sets ccsInstanceIds
     *
     * @param string[]|null $ccsInstanceIds 部门id列表
     *
     * @return self
     */
    public function setCcsInstanceIds($ccsInstanceIds)
    {
        $this->container['ccsInstanceIds'] = $ccsInstanceIds;

        return $this;
    }

    /**
     * Gets chatConfigs
     *
     * @return \Alipay\OpenAPISDK\Model\AgentChatInfo[]|null
     */
    public function getChatConfigs()
    {
        return $this->container['chatConfigs'];
    }

    /**
     * Sets chatConfigs
     *
     * @param \Alipay\OpenAPISDK\Model\AgentChatInfo[]|null $chatConfigs 在线技能组设置，技能组部门间隔离，此设置应与ccs_instance_ids对应
     *
     * @return self
     */
    public function setChatConfigs($chatConfigs)
    {
        $this->container['chatConfigs'] = $chatConfigs;

        return $this;
    }

    /**
     * Gets creatorId
     *
     * @return string|null
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     *
     * @param string|null $creatorId 操作人客服id
     *
     * @return self
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email 客服邮箱
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets externalUserId
     *
     * @return string|null
     */
    public function getExternalUserId()
    {
        return $this->container['externalUserId'];
    }

    /**
     * Sets externalUserId
     *
     * @param string|null $externalUserId 客服账号id，当user_channel=ALIPAY时，external_user_id为支付宝账号id
     *
     * @return self
     */
    public function setExternalUserId($externalUserId)
    {
        $this->container['externalUserId'] = $externalUserId;

        return $this;
    }

    /**
     * Gets hotlineConfigs
     *
     * @return \Alipay\OpenAPISDK\Model\AgentHotlineInfo[]|null
     */
    public function getHotlineConfigs()
    {
        return $this->container['hotlineConfigs'];
    }

    /**
     * Sets hotlineConfigs
     *
     * @param \Alipay\OpenAPISDK\Model\AgentHotlineInfo[]|null $hotlineConfigs 热线技能组设置，技能组部门间隔离，此设置应与ccs_instance_ids对应
     *
     * @return self
     */
    public function setHotlineConfigs($hotlineConfigs)
    {
        $this->container['hotlineConfigs'] = $hotlineConfigs;

        return $this;
    }

    /**
     * Gets jobNumber
     *
     * @return string|null
     */
    public function getJobNumber()
    {
        return $this->container['jobNumber'];
    }

    /**
     * Sets jobNumber
     *
     * @param string|null $jobNumber 客服工号，新增后不可变更。4位数字，不可重复
     *
     * @return self
     */
    public function setJobNumber($jobNumber)
    {
        $this->container['jobNumber'] = $jobNumber;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile 客服手机号
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets nickName
     *
     * @return string|null
     */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
     * Sets nickName
     *
     * @param string|null $nickName 客服昵称
     *
     * @return self
     */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;

        return $this;
    }

    /**
     * Gets realName
     *
     * @return string|null
     */
    public function getRealName()
    {
        return $this->container['realName'];
    }

    /**
     * Sets realName
     *
     * @param string|null $realName 客服姓名
     *
     * @return self
     */
    public function setRealName($realName)
    {
        $this->container['realName'] = $realName;

        return $this;
    }

    /**
     * Gets roleIds
     *
     * @return \Alipay\OpenAPISDK\Model\RoleId[]|null
     */
    public function getRoleIds()
    {
        return $this->container['roleIds'];
    }

    /**
     * Sets roleIds
     *
     * @param \Alipay\OpenAPISDK\Model\RoleId[]|null $roleIds 角色id列表
     *
     * @return self
     */
    public function setRoleIds($roleIds)
    {
        $this->container['roleIds'] = $roleIds;

        return $this;
    }

    /**
     * Gets userChannel
     *
     * @return string|null
     */
    public function getUserChannel()
    {
        return $this->container['userChannel'];
    }

    /**
     * Sets userChannel
     *
     * @param string|null $userChannel 客服账号渠道 ALIPAY:支付宝账号
     *
     * @return self
     */
    public function setUserChannel($userChannel)
    {
        $this->container['userChannel'] = $userChannel;

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


