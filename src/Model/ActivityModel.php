<?php
/**
 * ActivityModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalCommunicationAdmin
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Communication Administration API
 *
 * Bumbal Communication Server Administration API documentation
 *
 * OpenAPI spec version: 1.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model;

use \ArrayAccess;

/**
 * ActivityModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalCommunicationAdmin
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'bumbal_activity_id' => 'int',
        'send_invite' => 'bool',
        'send_planned' => 'bool',
        'send_eta' => 'bool',
        'send_executed' => 'bool',
        'send_cancelled' => 'bool',
        'token' => 'string',
        'messages' => '\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'bumbal_activity_id' => null,
        'send_invite' => null,
        'send_planned' => null,
        'send_eta' => null,
        'send_executed' => null,
        'send_cancelled' => null,
        'token' => null,
        'messages' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'bumbal_activity_id' => 'bumbal_activity_id',
        'send_invite' => 'send_invite',
        'send_planned' => 'send_planned',
        'send_eta' => 'send_eta',
        'send_executed' => 'send_executed',
        'send_cancelled' => 'send_cancelled',
        'token' => 'token',
        'messages' => 'messages'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bumbal_activity_id' => 'setBumbalActivityId',
        'send_invite' => 'setSendInvite',
        'send_planned' => 'setSendPlanned',
        'send_eta' => 'setSendEta',
        'send_executed' => 'setSendExecuted',
        'send_cancelled' => 'setSendCancelled',
        'token' => 'setToken',
        'messages' => 'setMessages'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bumbal_activity_id' => 'getBumbalActivityId',
        'send_invite' => 'getSendInvite',
        'send_planned' => 'getSendPlanned',
        'send_eta' => 'getSendEta',
        'send_executed' => 'getSendExecuted',
        'send_cancelled' => 'getSendCancelled',
        'token' => 'getToken',
        'messages' => 'getMessages'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bumbal_activity_id'] = isset($data['bumbal_activity_id']) ? $data['bumbal_activity_id'] : null;
        $this->container['send_invite'] = isset($data['send_invite']) ? $data['send_invite'] : null;
        $this->container['send_planned'] = isset($data['send_planned']) ? $data['send_planned'] : null;
        $this->container['send_eta'] = isset($data['send_eta']) ? $data['send_eta'] : null;
        $this->container['send_executed'] = isset($data['send_executed']) ? $data['send_executed'] : null;
        $this->container['send_cancelled'] = isset($data['send_cancelled']) ? $data['send_cancelled'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Local Identifier of this activity
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets bumbal_activity_id
     * @return int
     */
    public function getBumbalActivityId()
    {
        return $this->container['bumbal_activity_id'];
    }

    /**
     * Sets bumbal_activity_id
     * @param int $bumbal_activity_id Bumbal Identifier of this activity
     * @return $this
     */
    public function setBumbalActivityId($bumbal_activity_id)
    {
        $this->container['bumbal_activity_id'] = $bumbal_activity_id;

        return $this;
    }

    /**
     * Gets send_invite
     * @return bool
     */
    public function getSendInvite()
    {
        return $this->container['send_invite'];
    }

    /**
     * Sets send_invite
     * @param bool $send_invite Send an Invite message for this activity
     * @return $this
     */
    public function setSendInvite($send_invite)
    {
        $this->container['send_invite'] = $send_invite;

        return $this;
    }

    /**
     * Gets send_planned
     * @return bool
     */
    public function getSendPlanned()
    {
        return $this->container['send_planned'];
    }

    /**
     * Sets send_planned
     * @param bool $send_planned Send an Planned message for this activity
     * @return $this
     */
    public function setSendPlanned($send_planned)
    {
        $this->container['send_planned'] = $send_planned;

        return $this;
    }

    /**
     * Gets send_eta
     * @return bool
     */
    public function getSendEta()
    {
        return $this->container['send_eta'];
    }

    /**
     * Sets send_eta
     * @param bool $send_eta Send an ETA message for this activity
     * @return $this
     */
    public function setSendEta($send_eta)
    {
        $this->container['send_eta'] = $send_eta;

        return $this;
    }

    /**
     * Gets send_executed
     * @return bool
     */
    public function getSendExecuted()
    {
        return $this->container['send_executed'];
    }

    /**
     * Sets send_executed
     * @param bool $send_executed Send an Exceuted message for this activity
     * @return $this
     */
    public function setSendExecuted($send_executed)
    {
        $this->container['send_executed'] = $send_executed;

        return $this;
    }

    /**
     * Gets send_cancelled
     * @return bool
     */
    public function getSendCancelled()
    {
        return $this->container['send_cancelled'];
    }

    /**
     * Sets send_cancelled
     * @param bool $send_cancelled Send an Cancelled message for this activity
     * @return $this
     */
    public function setSendCancelled($send_cancelled)
    {
        $this->container['send_cancelled'] = $send_cancelled;

        return $this;
    }

    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token GUID used for external identification
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets messages
     * @return \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageModel[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     * @param \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageModel[] $messages
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalCommunicationAdmin\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalCommunicationAdmin\ObjectSerializer::sanitizeForSerialization($this));
    }
}


