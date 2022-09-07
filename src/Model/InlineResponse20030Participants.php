<?php
/**
 * InlineResponse20030Participants
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
 * InlineResponse20030Participants Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20030Participants implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_30_participants';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'user_id' => 'string',
        'user_name' => 'string',
        'device' => 'string',
        'ip_address' => 'string',
        'location' => 'string',
        'network_type' => 'string',
        'microphone' => 'string',
        'speaker' => 'string',
        'data_center' => 'string',
        'connection_type' => 'string',
        'join_time' => '\\' . \DateTime::class,
        'leave_time' => '\\' . \DateTime::class,
        'share_application' => 'bool',
        'share_desktop' => 'bool',
        'share_whiteboard' => 'bool',
        'recording' => 'bool',
        'pc_name' => 'string',
        'domain' => 'string',
        'mac_addr' => 'string',
        'harddisk_id' => 'string',
        'version' => 'string',
        'leave_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'user_id' => null,
        'user_name' => null,
        'device' => null,
        'ip_address' => null,
        'location' => null,
        'network_type' => null,
        'microphone' => null,
        'speaker' => null,
        'data_center' => null,
        'connection_type' => null,
        'join_time' => 'date-time',
        'leave_time' => 'date-time',
        'share_application' => null,
        'share_desktop' => null,
        'share_whiteboard' => null,
        'recording' => null,
        'pc_name' => null,
        'domain' => null,
        'mac_addr' => null,
        'harddisk_id' => null,
        'version' => null,
        'leave_reason' => null
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
        'id' => 'id',
        'user_id' => 'user_id',
        'user_name' => 'user_name',
        'device' => 'device',
        'ip_address' => 'ip_address',
        'location' => 'location',
        'network_type' => 'network_type',
        'microphone' => 'microphone',
        'speaker' => 'speaker',
        'data_center' => 'data_center',
        'connection_type' => 'connection_type',
        'join_time' => 'join_time',
        'leave_time' => 'leave_time',
        'share_application' => 'share_application',
        'share_desktop' => 'share_desktop',
        'share_whiteboard' => 'share_whiteboard',
        'recording' => 'recording',
        'pc_name' => 'pc_name',
        'domain' => 'domain',
        'mac_addr' => 'mac_addr',
        'harddisk_id' => 'harddisk_id',
        'version' => 'version',
        'leave_reason' => 'leave_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'device' => 'setDevice',
        'ip_address' => 'setIpAddress',
        'location' => 'setLocation',
        'network_type' => 'setNetworkType',
        'microphone' => 'setMicrophone',
        'speaker' => 'setSpeaker',
        'data_center' => 'setDataCenter',
        'connection_type' => 'setConnectionType',
        'join_time' => 'setJoinTime',
        'leave_time' => 'setLeaveTime',
        'share_application' => 'setShareApplication',
        'share_desktop' => 'setShareDesktop',
        'share_whiteboard' => 'setShareWhiteboard',
        'recording' => 'setRecording',
        'pc_name' => 'setPcName',
        'domain' => 'setDomain',
        'mac_addr' => 'setMacAddr',
        'harddisk_id' => 'setHarddiskId',
        'version' => 'setVersion',
        'leave_reason' => 'setLeaveReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'device' => 'getDevice',
        'ip_address' => 'getIpAddress',
        'location' => 'getLocation',
        'network_type' => 'getNetworkType',
        'microphone' => 'getMicrophone',
        'speaker' => 'getSpeaker',
        'data_center' => 'getDataCenter',
        'connection_type' => 'getConnectionType',
        'join_time' => 'getJoinTime',
        'leave_time' => 'getLeaveTime',
        'share_application' => 'getShareApplication',
        'share_desktop' => 'getShareDesktop',
        'share_whiteboard' => 'getShareWhiteboard',
        'recording' => 'getRecording',
        'pc_name' => 'getPcName',
        'domain' => 'getDomain',
        'mac_addr' => 'getMacAddr',
        'harddisk_id' => 'getHarddiskId',
        'version' => 'getVersion',
        'leave_reason' => 'getLeaveReason'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['user_name'] = $data['user_name'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['ip_address'] = $data['ip_address'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['network_type'] = $data['network_type'] ?? null;
        $this->container['microphone'] = $data['microphone'] ?? null;
        $this->container['speaker'] = $data['speaker'] ?? null;
        $this->container['data_center'] = $data['data_center'] ?? null;
        $this->container['connection_type'] = $data['connection_type'] ?? null;
        $this->container['join_time'] = $data['join_time'] ?? null;
        $this->container['leave_time'] = $data['leave_time'] ?? null;
        $this->container['share_application'] = $data['share_application'] ?? null;
        $this->container['share_desktop'] = $data['share_desktop'] ?? null;
        $this->container['share_whiteboard'] = $data['share_whiteboard'] ?? null;
        $this->container['recording'] = $data['recording'] ?? null;
        $this->container['pc_name'] = $data['pc_name'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['mac_addr'] = $data['mac_addr'] ?? null;
        $this->container['harddisk_id'] = $data['harddisk_id'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['leave_reason'] = $data['leave_reason'] ?? null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Participant UUID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id Participant ID.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name Participant display name.
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string $device Participant device.
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address Participant IP address.
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Participant location.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets network_type
     *
     * @return string
     */
    public function getNetworkType()
    {
        return $this->container['network_type'];
    }

    /**
     * Sets network_type
     *
     * @param string $network_type Participant network type.
     *
     * @return $this
     */
    public function setNetworkType($network_type)
    {
        $this->container['network_type'] = $network_type;

        return $this;
    }

    /**
     * Gets microphone
     *
     * @return string
     */
    public function getMicrophone()
    {
        return $this->container['microphone'];
    }

    /**
     * Sets microphone
     *
     * @param string $microphone Participant microphone.
     *
     * @return $this
     */
    public function setMicrophone($microphone)
    {
        $this->container['microphone'] = $microphone;

        return $this;
    }

    /**
     * Gets speaker
     *
     * @return string
     */
    public function getSpeaker()
    {
        return $this->container['speaker'];
    }

    /**
     * Sets speaker
     *
     * @param string $speaker Participant speaker.
     *
     * @return $this
     */
    public function setSpeaker($speaker)
    {
        $this->container['speaker'] = $speaker;

        return $this;
    }

    /**
     * Gets data_center
     *
     * @return string
     */
    public function getDataCenter()
    {
        return $this->container['data_center'];
    }

    /**
     * Sets data_center
     *
     * @param string $data_center Participant data center.
     *
     * @return $this
     */
    public function setDataCenter($data_center)
    {
        $this->container['data_center'] = $data_center;

        return $this;
    }

    /**
     * Gets connection_type
     *
     * @return string
     */
    public function getConnectionType()
    {
        return $this->container['connection_type'];
    }

    /**
     * Sets connection_type
     *
     * @param string $connection_type Participant connection type.
     *
     * @return $this
     */
    public function setConnectionType($connection_type)
    {
        $this->container['connection_type'] = $connection_type;

        return $this;
    }

    /**
     * Gets join_time
     *
     * @return \DateTime
     */
    public function getJoinTime()
    {
        return $this->container['join_time'];
    }

    /**
     * Sets join_time
     *
     * @param \DateTime $join_time Participant join time.
     *
     * @return $this
     */
    public function setJoinTime($join_time)
    {
        $this->container['join_time'] = $join_time;

        return $this;
    }

    /**
     * Gets leave_time
     *
     * @return \DateTime
     */
    public function getLeaveTime()
    {
        return $this->container['leave_time'];
    }

    /**
     * Sets leave_time
     *
     * @param \DateTime $leave_time Participant leave time.
     *
     * @return $this
     */
    public function setLeaveTime($leave_time)
    {
        $this->container['leave_time'] = $leave_time;

        return $this;
    }

    /**
     * Gets share_application
     *
     * @return bool
     */
    public function getShareApplication()
    {
        return $this->container['share_application'];
    }

    /**
     * Sets share_application
     *
     * @param bool $share_application Did the participant share an application?
     *
     * @return $this
     */
    public function setShareApplication($share_application)
    {
        $this->container['share_application'] = $share_application;

        return $this;
    }

    /**
     * Gets share_desktop
     *
     * @return bool
     */
    public function getShareDesktop()
    {
        return $this->container['share_desktop'];
    }

    /**
     * Sets share_desktop
     *
     * @param bool $share_desktop Did the participant share their desktop?
     *
     * @return $this
     */
    public function setShareDesktop($share_desktop)
    {
        $this->container['share_desktop'] = $share_desktop;

        return $this;
    }

    /**
     * Gets share_whiteboard
     *
     * @return bool
     */
    public function getShareWhiteboard()
    {
        return $this->container['share_whiteboard'];
    }

    /**
     * Sets share_whiteboard
     *
     * @param bool $share_whiteboard Did the participant share their whiteboard?
     *
     * @return $this
     */
    public function setShareWhiteboard($share_whiteboard)
    {
        $this->container['share_whiteboard'] = $share_whiteboard;

        return $this;
    }

    /**
     * Gets recording
     *
     * @return bool
     */
    public function getRecording()
    {
        return $this->container['recording'];
    }

    /**
     * Sets recording
     *
     * @param bool $recording Participant record?
     *
     * @return $this
     */
    public function setRecording($recording)
    {
        $this->container['recording'] = $recording;

        return $this;
    }

    /**
     * Gets pc_name
     *
     * @return string
     */
    public function getPcName()
    {
        return $this->container['pc_name'];
    }

    /**
     * Sets pc_name
     *
     * @param string $pc_name Participant PC name.
     *
     * @return $this
     */
    public function setPcName($pc_name)
    {
        $this->container['pc_name'] = $pc_name;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain Participant domain.
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets mac_addr
     *
     * @return string
     */
    public function getMacAddr()
    {
        return $this->container['mac_addr'];
    }

    /**
     * Sets mac_addr
     *
     * @param string $mac_addr Participant MAC address.
     *
     * @return $this
     */
    public function setMacAddr($mac_addr)
    {
        $this->container['mac_addr'] = $mac_addr;

        return $this;
    }

    /**
     * Gets harddisk_id
     *
     * @return string
     */
    public function getHarddiskId()
    {
        return $this->container['harddisk_id'];
    }

    /**
     * Sets harddisk_id
     *
     * @param string $harddisk_id Participant hard disk ID.
     *
     * @return $this
     */
    public function setHarddiskId($harddisk_id)
    {
        $this->container['harddisk_id'] = $harddisk_id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version Participant version.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets leave_reason
     *
     * @return string
     */
    public function getLeaveReason()
    {
        return $this->container['leave_reason'];
    }

    /**
     * Sets leave_reason
     *
     * @param string $leave_reason Possible reasons for why a participant left the Webinar.
     *
     * @return $this
     */
    public function setLeaveReason($leave_reason)
    {
        $this->container['leave_reason'] = $leave_reason;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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

        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}


