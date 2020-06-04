<?php
/**
 * Body11
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
 * Body11 Class Doc Comment
 *
 * @category Class
 * @description Account options object.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body11 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_11';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'share_rc' => 'bool',
        'room_connector_list' => 'string[]',
        'share_mc' => 'bool',
        'meeting_connector_list' => 'string[]',
        'pay_mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'share_rc' => null,
        'room_connector_list' => null,
        'share_mc' => null,
        'meeting_connector_list' => null,
        'pay_mode' => null
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
        'share_rc' => 'share_rc',
        'room_connector_list' => 'room_connector_list',
        'share_mc' => 'share_mc',
        'meeting_connector_list' => 'meeting_connector_list',
        'pay_mode' => 'pay_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'share_rc' => 'setShareRc',
        'room_connector_list' => 'setRoomConnectorList',
        'share_mc' => 'setShareMc',
        'meeting_connector_list' => 'setMeetingConnectorList',
        'pay_mode' => 'setPayMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'share_rc' => 'getShareRc',
        'room_connector_list' => 'getRoomConnectorList',
        'share_mc' => 'getShareMc',
        'meeting_connector_list' => 'getMeetingConnectorList',
        'pay_mode' => 'getPayMode'
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

    const PAY_MODE_MASTER = 'master';
    const PAY_MODE_SUB = 'sub';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayModeAllowableValues()
    {
        return [
            self::PAY_MODE_MASTER,
            self::PAY_MODE_SUB,
        ];
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
        $this->container['share_rc'] = isset($data['share_rc']) ? $data['share_rc'] : false;
        $this->container['room_connector_list'] = isset($data['room_connector_list']) ? $data['room_connector_list'] : null;
        $this->container['share_mc'] = isset($data['share_mc']) ? $data['share_mc'] : false;
        $this->container['meeting_connector_list'] = isset($data['meeting_connector_list']) ? $data['meeting_connector_list'] : null;
        $this->container['pay_mode'] = isset($data['pay_mode']) ? $data['pay_mode'] : 'master';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPayModeAllowableValues();
        if (!is_null($this->container['pay_mode']) && !in_array($this->container['pay_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pay_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets share_rc
     *
     * @return bool
     */
    public function getShareRc()
    {
        return $this->container['share_rc'];
    }

    /**
     * Sets share_rc
     *
     * @param bool $share_rc Enable/disable the option for a Sub Account to use shared [Virtual Room Connector(s)](https://support.zoom.us/hc/en-us/articles/202134758-Getting-Started-With-Virtual-Room-Connector) that are set up by the Master Account. Virtual Room Connectors can only be used by On-prem users.
     *
     * @return $this
     */
    public function setShareRc($share_rc)
    {
        $this->container['share_rc'] = $share_rc;

        return $this;
    }

    /**
     * Gets room_connector_list
     *
     * @return string[]
     */
    public function getRoomConnectorList()
    {
        return $this->container['room_connector_list'];
    }

    /**
     * Sets room_connector_list
     *
     * @param string[] $room_connector_list Specify the IP addresses of the Room Connectors that you would like to share with the Sub Account. Multiple values can be separated by comma. If no value is provided in this field, all the Room Connectors of a Master Account will be shared with the Sub Account.   **Note:** This option can only be used if the value of `share_rc` is set to `true`.
     *
     * @return $this
     */
    public function setRoomConnectorList($room_connector_list)
    {
        $this->container['room_connector_list'] = $room_connector_list;

        return $this;
    }

    /**
     * Gets share_mc
     *
     * @return bool
     */
    public function getShareMc()
    {
        return $this->container['share_mc'];
    }

    /**
     * Sets share_mc
     *
     * @param bool $share_mc Enable/disable the option for a Sub Account to use shared [Meeting Connector(s)](https://support.zoom.us/hc/en-us/articles/201363093-Getting-Started-with-the-Meeting-Connector) that are set up by the Master Account. Meeting Connectors can only be used by On-prem users.
     *
     * @return $this
     */
    public function setShareMc($share_mc)
    {
        $this->container['share_mc'] = $share_mc;

        return $this;
    }

    /**
     * Gets meeting_connector_list
     *
     * @return string[]
     */
    public function getMeetingConnectorList()
    {
        return $this->container['meeting_connector_list'];
    }

    /**
     * Sets meeting_connector_list
     *
     * @param string[] $meeting_connector_list Specify the IP addresses of the Meeting Connectors that you would like to share with the Sub Account. Multiple values can be separated by comma. If no value is provided in this field, all the Meeting Connectors of a Master Account will be shared with the Sub Account.   **Note:** This option can only be used if the value of `share_mc` is set to `true`.
     *
     * @return $this
     */
    public function setMeetingConnectorList($meeting_connector_list)
    {
        $this->container['meeting_connector_list'] = $meeting_connector_list;

        return $this;
    }

    /**
     * Gets pay_mode
     *
     * @return string
     */
    public function getPayMode()
    {
        return $this->container['pay_mode'];
    }

    /**
     * Sets pay_mode
     *
     * @param string $pay_mode Payee:<br>`master` - Master account holder pays.<br>`sub` - Sub account holder pays.
     *
     * @return $this
     */
    public function setPayMode($pay_mode)
    {
        $allowedValues = $this->getPayModeAllowableValues();
        if (!is_null($pay_mode) && !in_array($pay_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pay_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pay_mode'] = $pay_mode;

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


