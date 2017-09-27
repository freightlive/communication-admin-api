<?php
/**
 * ActivityOptionsModel
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

namespace BumbalCommunicationAdmin\Model;

use \ArrayAccess;

/**
 * ActivityOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalCommunicationAdmin
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_messages' => 'bool',
        'include_messages_history' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_messages' => null,
        'include_messages_history' => null
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
        'include_messages' => 'include_messages',
        'include_messages_history' => 'include_messages_history'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_messages' => 'setIncludeMessages',
        'include_messages_history' => 'setIncludeMessagesHistory'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_messages' => 'getIncludeMessages',
        'include_messages_history' => 'getIncludeMessagesHistory'
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
        $this->container['include_messages'] = isset($data['include_messages']) ? $data['include_messages'] : null;
        $this->container['include_messages_history'] = isset($data['include_messages_history']) ? $data['include_messages_history'] : null;
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
     * Gets include_messages
     * @return bool
     */
    public function getIncludeMessages()
    {
        return $this->container['include_messages'];
    }

    /**
     * Sets include_messages
     * @param bool $include_messages
     * @return $this
     */
    public function setIncludeMessages($include_messages)
    {
        $this->container['include_messages'] = $include_messages;

        return $this;
    }

    /**
     * Gets include_messages_history
     * @return bool
     */
    public function getIncludeMessagesHistory()
    {
        return $this->container['include_messages_history'];
    }

    /**
     * Sets include_messages_history
     * @param bool $include_messages_history
     * @return $this
     */
    public function setIncludeMessagesHistory($include_messages_history)
    {
        $this->container['include_messages_history'] = $include_messages_history;

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


