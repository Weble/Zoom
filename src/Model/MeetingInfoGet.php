<?php
/**
 * MeetingInfoGet
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
 * MeetingInfoGet Class Doc Comment
 *
 * @category Class
 * @description Meeting object.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingInfoGet implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MeetingInfoGet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'topic' => 'string',
        'type' => 'int',
        'status' => 'string',
        'start_time' => '\\' . \DateTime::class,
        'duration' => 'int',
        'timezone' => 'string',
        'created_at' => '\\' . \DateTime::class,
        'agenda' => 'string',
        'start_url' => 'string',
        'join_url' => 'string',
        'password' => 'string',
        'h323_password' => 'string',
        'encrypted_password' => 'string',
        'pmi' => 'int',
        'tracking_fields' => '\Weble\Zoom\Model\InlineResponse20110TrackingFields[]',
        'occurrences' => '\Weble\Zoom\Model\InlineResponse20110Occurrences[]',
        'settings' => '\\' . \Weble\Zoom\Model\InlineResponse20110Settings::class,
        'recurrence' => '\\' . \Weble\Zoom\Model\UsersuserIdmeetingsRecurrence::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'topic' => null,
        'type' => null,
        'status' => null,
        'start_time' => 'date-time',
        'duration' => null,
        'timezone' => null,
        'created_at' => 'date-time',
        'agenda' => null,
        'start_url' => null,
        'join_url' => null,
        'password' => null,
        'h323_password' => null,
        'encrypted_password' => null,
        'pmi' => 'int64',
        'tracking_fields' => null,
        'occurrences' => null,
        'settings' => null,
        'recurrence' => null
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
        'topic' => 'topic',
        'type' => 'type',
        'status' => 'status',
        'start_time' => 'start_time',
        'duration' => 'duration',
        'timezone' => 'timezone',
        'created_at' => 'created_at',
        'agenda' => 'agenda',
        'start_url' => 'start_url',
        'join_url' => 'join_url',
        'password' => 'password',
        'h323_password' => 'h323_password',
        'encrypted_password' => 'encrypted_password',
        'pmi' => 'pmi',
        'tracking_fields' => 'tracking_fields',
        'occurrences' => 'occurrences',
        'settings' => 'settings',
        'recurrence' => 'recurrence'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'topic' => 'setTopic',
        'type' => 'setType',
        'status' => 'setStatus',
        'start_time' => 'setStartTime',
        'duration' => 'setDuration',
        'timezone' => 'setTimezone',
        'created_at' => 'setCreatedAt',
        'agenda' => 'setAgenda',
        'start_url' => 'setStartUrl',
        'join_url' => 'setJoinUrl',
        'password' => 'setPassword',
        'h323_password' => 'setH323Password',
        'encrypted_password' => 'setEncryptedPassword',
        'pmi' => 'setPmi',
        'tracking_fields' => 'setTrackingFields',
        'occurrences' => 'setOccurrences',
        'settings' => 'setSettings',
        'recurrence' => 'setRecurrence'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'topic' => 'getTopic',
        'type' => 'getType',
        'status' => 'getStatus',
        'start_time' => 'getStartTime',
        'duration' => 'getDuration',
        'timezone' => 'getTimezone',
        'created_at' => 'getCreatedAt',
        'agenda' => 'getAgenda',
        'start_url' => 'getStartUrl',
        'join_url' => 'getJoinUrl',
        'password' => 'getPassword',
        'h323_password' => 'getH323Password',
        'encrypted_password' => 'getEncryptedPassword',
        'pmi' => 'getPmi',
        'tracking_fields' => 'getTrackingFields',
        'occurrences' => 'getOccurrences',
        'settings' => 'getSettings',
        'recurrence' => 'getRecurrence'
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

    public const STATUS_WAITING = 'waiting';
    public const STATUS_STARTED = 'started';
    public const STATUS_FINISHED = 'finished';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_STARTED,
            self::STATUS_FINISHED,
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
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['agenda'] = $data['agenda'] ?? null;
        $this->container['start_url'] = $data['start_url'] ?? null;
        $this->container['join_url'] = $data['join_url'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['h323_password'] = $data['h323_password'] ?? null;
        $this->container['encrypted_password'] = $data['encrypted_password'] ?? null;
        $this->container['pmi'] = $data['pmi'] ?? null;
        $this->container['tracking_fields'] = $data['tracking_fields'] ?? null;
        $this->container['occurrences'] = $data['occurrences'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['recurrence'] = $data['recurrence'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string $topic Meeting topic.
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Meeting Types:<br>`1` - Instant meeting.<br>`2` - Scheduled meeting.<br>`3` - Recurring meeting with no fixed time.<br>`4` - PMI Meeting<br> `8` - Recurring meeting with a fixed time.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Meeting status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time Meeting start time in GMT/UTC. Start time will not be returned if the meeting is an **instant** meeting.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Meeting duration.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone Timezone to format the meeting start time on the .
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Time of creation.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets agenda
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->container['agenda'];
    }

    /**
     * Sets agenda
     *
     * @param string $agenda Agenda.
     *
     * @return $this
     */
    public function setAgenda($agenda)
    {
        $this->container['agenda'] = $agenda;

        return $this;
    }

    /**
     * Gets start_url
     *
     * @return string
     */
    public function getStartUrl()
    {
        return $this->container['start_url'];
    }

    /**
     * Sets start_url
     *
     * @param string $start_url <br><aside>The <code>start_url</code> of a Meeting is a URL using which a host or an alternative host can start the Meeting.   The expiration time for the <code>start_url</code> field listed in the response of [Create a Meeting API](https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meetingcreate) is two hours for all regular users.    For users created using the <code>custCreate</code> option via the [Create Users](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usercreate) API, the expiration time of the <code>start_url</code> field is 90 days.   For security reasons, to retrieve the updated value for the <code>start_url</code> field programmatically (after the expiry time), you must call the [Retrieve a Meeting API](https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meeting) and refer to the value of the <code>start_url</code> field in the response.</aside><br>This URL should only be used by the host of the meeting and **should not be shared with anyone other than the host** of the meeting as anyone with this URL will be able to login to the Zoom Client as the host of the meeting.
     *
     * @return $this
     */
    public function setStartUrl($start_url)
    {
        $this->container['start_url'] = $start_url;

        return $this;
    }

    /**
     * Gets join_url
     *
     * @return string
     */
    public function getJoinUrl()
    {
        return $this->container['join_url'];
    }

    /**
     * Sets join_url
     *
     * @param string $join_url URL for participants to join the meeting. This URL should only be shared with users that you would like to invite for the meeting.
     *
     * @return $this
     */
    public function setJoinUrl($join_url)
    {
        $this->container['join_url'] = $join_url;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Meeting password.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets h323_password
     *
     * @return string
     */
    public function getH323Password()
    {
        return $this->container['h323_password'];
    }

    /**
     * Sets h323_password
     *
     * @param string $h323_password H.323/SIP room system password.
     *
     * @return $this
     */
    public function setH323Password($h323_password)
    {
        $this->container['h323_password'] = $h323_password;

        return $this;
    }

    /**
     * Gets encrypted_password
     *
     * @return string
     */
    public function getEncryptedPassword()
    {
        return $this->container['encrypted_password'];
    }

    /**
     * Sets encrypted_password
     *
     * @param string $encrypted_password Encrypted password for third party endpoints (H323/SIP).
     *
     * @return $this
     */
    public function setEncryptedPassword($encrypted_password)
    {
        $this->container['encrypted_password'] = $encrypted_password;

        return $this;
    }

    /**
     * Gets pmi
     *
     * @return int
     */
    public function getPmi()
    {
        return $this->container['pmi'];
    }

    /**
     * Sets pmi
     *
     * @param int $pmi Personal Meeting Id. Only used for scheduled meetings and recurring meetings with no fixed time.
     *
     * @return $this
     */
    public function setPmi($pmi)
    {
        $this->container['pmi'] = $pmi;

        return $this;
    }

    /**
     * Gets tracking_fields
     *
     * @return \Weble\Zoom\Model\InlineResponse20110TrackingFields[]
     */
    public function getTrackingFields()
    {
        return $this->container['tracking_fields'];
    }

    /**
     * Sets tracking_fields
     *
     * @param \Weble\Zoom\Model\InlineResponse20110TrackingFields[] $tracking_fields Tracking fields
     *
     * @return $this
     */
    public function setTrackingFields($tracking_fields)
    {
        $this->container['tracking_fields'] = $tracking_fields;

        return $this;
    }

    /**
     * Gets occurrences
     *
     * @return \Weble\Zoom\Model\InlineResponse20110Occurrences[]
     */
    public function getOccurrences()
    {
        return $this->container['occurrences'];
    }

    /**
     * Sets occurrences
     *
     * @param \Weble\Zoom\Model\InlineResponse20110Occurrences[] $occurrences Array of occurrence objects.
     *
     * @return $this
     */
    public function setOccurrences($occurrences)
    {
        $this->container['occurrences'] = $occurrences;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Weble\Zoom\Model\InlineResponse20110Settings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Weble\Zoom\Model\InlineResponse20110Settings $settings settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return \Weble\Zoom\Model\UsersuserIdmeetingsRecurrence
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \Weble\Zoom\Model\UsersuserIdmeetingsRecurrence $recurrence recurrence
     *
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

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


