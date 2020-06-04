<?php
/**
 * InlineResponse20058
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applications on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Weble\Zoom\Model;

use \ArrayAccess;
use \Weble\Zoom\ObjectSerializer;

/**
 * InlineResponse20058 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20058 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_58';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'message_id' => 'string',
        'robot_jid' => 'string',
        'sent_time' => 'string',
        'to_jid' => 'string',
        'user_jid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'message_id' => null,
        'robot_jid' => null,
        'sent_time' => null,
        'to_jid' => null,
        'user_jid' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'message_id' => 'message_id',
        'robot_jid' => 'robot_jid',
        'sent_time' => 'sent_time',
        'to_jid' => 'to_jid',
        'user_jid' => 'user_jid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_id' => 'setMessageId',
        'robot_jid' => 'setRobotJid',
        'sent_time' => 'setSentTime',
        'to_jid' => 'setToJid',
        'user_jid' => 'setUserJid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_id' => 'getMessageId',
        'robot_jid' => 'getRobotJid',
        'sent_time' => 'getSentTime',
        'to_jid' => 'getToJid',
        'user_jid' => 'getUserJid'
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
        return self::$swaggerModelName;
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
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['robot_jid'] = isset($data['robot_jid']) ? $data['robot_jid'] : null;
        $this->container['sent_time'] = isset($data['sent_time']) ? $data['sent_time'] : null;
        $this->container['to_jid'] = isset($data['to_jid']) ? $data['to_jid'] : null;
        $this->container['user_jid'] = isset($data['user_jid']) ? $data['user_jid'] : null;
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
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id Unique identifier of the message that was deleted.
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets robot_jid
     *
     * @return string
     */
    public function getRobotJid()
    {
        return $this->container['robot_jid'];
    }

    /**
     * Sets robot_jid
     *
     * @param string $robot_jid The BotJID of the Chatbot app. It can be found in the Chat Subscription Section on the Features page of your App Dashboard
     *
     * @return $this
     */
    public function setRobotJid($robot_jid)
    {
        $this->container['robot_jid'] = $robot_jid;

        return $this;
    }

    /**
     * Gets sent_time
     *
     * @return string
     */
    public function getSentTime()
    {
        return $this->container['sent_time'];
    }

    /**
     * Sets sent_time
     *
     * @param string $sent_time The date and time at which the message was deleted.
     *
     * @return $this
     */
    public function setSentTime($sent_time)
    {
        $this->container['sent_time'] = $sent_time;

        return $this;
    }

    /**
     * Gets to_jid
     *
     * @return string
     */
    public function getToJid()
    {
        return $this->container['to_jid'];
    }

    /**
     * Sets to_jid
     *
     * @param string $to_jid The JID of the Channel or User to whom the message was sent.
     *
     * @return $this
     */
    public function setToJid($to_jid)
    {
        $this->container['to_jid'] = $to_jid;

        return $this;
    }

    /**
     * Gets user_jid
     *
     * @return string
     */
    public function getUserJid()
    {
        return $this->container['user_jid'];
    }

    /**
     * Sets user_jid
     *
     * @param string $user_jid The UserJID of the user on whose behalf the message was sent. Used to prevent members of a channel from getting notifications that were set up by a user who has left the channel.
     *
     * @return $this
     */
    public function setUserJid($user_jid)
    {
        $this->container['user_jid'] = $user_jid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


