<?php
/**
 * WebinarInfo
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
 * WebinarInfo Class Doc Comment
 *
 * @category Class
 * @description Webinar object.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebinarInfo implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebinarInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'topic' => 'string',
        'type' => 'int',
        'start_time' => '\\' . \DateTime::class,
        'duration' => 'int',
        'timezone' => 'string',
        'agenda' => 'string',
        'created_at' => '\\' . \DateTime::class,
        'start_url' => 'string',
        'join_url' => 'string',
        'tracking_fields' => '\Weble\Zoom\Model\InlineResponse20110TrackingFields[]',
        'occurrences' => '\Weble\Zoom\Model\InlineResponse20110Occurrences[]',
        'settings' => '\\' . \Weble\Zoom\Model\InlineResponse20118Settings::class,
        'recurrence' => '\\' . \Weble\Zoom\Model\RecurrenceWebinar::class,
        'password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'topic' => null,
        'type' => null,
        'start_time' => 'date-time',
        'duration' => null,
        'timezone' => null,
        'agenda' => null,
        'created_at' => 'date-time',
        'start_url' => null,
        'join_url' => null,
        'tracking_fields' => null,
        'occurrences' => null,
        'settings' => null,
        'recurrence' => null,
        'password' => null
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
        'start_time' => 'start_time',
        'duration' => 'duration',
        'timezone' => 'timezone',
        'agenda' => 'agenda',
        'created_at' => 'created_at',
        'start_url' => 'start_url',
        'join_url' => 'join_url',
        'tracking_fields' => 'tracking_fields',
        'occurrences' => 'occurrences',
        'settings' => 'settings',
        'recurrence' => 'recurrence',
        'password' => 'password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'topic' => 'setTopic',
        'type' => 'setType',
        'start_time' => 'setStartTime',
        'duration' => 'setDuration',
        'timezone' => 'setTimezone',
        'agenda' => 'setAgenda',
        'created_at' => 'setCreatedAt',
        'start_url' => 'setStartUrl',
        'join_url' => 'setJoinUrl',
        'tracking_fields' => 'setTrackingFields',
        'occurrences' => 'setOccurrences',
        'settings' => 'setSettings',
        'recurrence' => 'setRecurrence',
        'password' => 'setPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'topic' => 'getTopic',
        'type' => 'getType',
        'start_time' => 'getStartTime',
        'duration' => 'getDuration',
        'timezone' => 'getTimezone',
        'agenda' => 'getAgenda',
        'created_at' => 'getCreatedAt',
        'start_url' => 'getStartUrl',
        'join_url' => 'getJoinUrl',
        'tracking_fields' => 'getTrackingFields',
        'occurrences' => 'getOccurrences',
        'settings' => 'getSettings',
        'recurrence' => 'getRecurrence',
        'password' => 'getPassword'
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
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
        $this->container['agenda'] = $data['agenda'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['start_url'] = $data['start_url'] ?? null;
        $this->container['join_url'] = $data['join_url'] ?? null;
        $this->container['tracking_fields'] = $data['tracking_fields'] ?? null;
        $this->container['occurrences'] = $data['occurrences'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['recurrence'] = $data['recurrence'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 10)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 10.";
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
     * @param string $topic Webinar topic.
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
     * @param int $type Webinar Types:<br>`5` - Webinar.<br>`6` - Recurring webinar with no fixed time.<br>`9` - Recurring webinar with a fixed time.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param \DateTime $start_time Webinar start time in GMT/UTC.
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
     * @param int $duration Webinar duration.
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
     * @param string $timezone Time zone to format start_time.
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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
     * @param string $agenda Webinar agenda.
     *
     * @return $this
     */
    public function setAgenda($agenda)
    {
        $this->container['agenda'] = $agenda;

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
     * @param \DateTime $created_at Create time.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param string $start_url <br><aside>The <code>start_url</code> of a Webinar is a URL using which a host or an alternative host can start the Webinar. This URL should only be used by the host of the meeting and should not be shared with anyone other than the host of the Webinar.   The expiration time for the <code>start_url</code> field listed in the response of [Create a Webinar API](https://marketplace.zoom.us/docs/api-reference/zoom-api/webinars/webinarcreate) is two hours for all regular users.    For users created using the <code>custCreate</code> option via the [Create Users](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usercreate) API, the expiration time of the <code>start_url</code> field is 90 days.   For security reasons, to retrieve the latest value for the <code>start_url</code> field programmatically (after expiry), you must call the [Retrieve a Webinar API](https://marketplace.zoom.us/docs/api-reference/zoom-api/webinars/webinar) and refer to the value of the <code>start_url</code> field in the response.</aside><br><br><br>
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
     * @param string $join_url URL to join the Webinar. This URL should only be shared with the users who should be invited to the Webinar.
     *
     * @return $this
     */
    public function setJoinUrl($join_url)
    {
        $this->container['join_url'] = $join_url;

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
     * @return \Weble\Zoom\Model\InlineResponse20118Settings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Weble\Zoom\Model\InlineResponse20118Settings $settings settings
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
     * @return \Weble\Zoom\Model\RecurrenceWebinar
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \Weble\Zoom\Model\RecurrenceWebinar $recurrence recurrence
     *
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

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
     * @param string $password Webinar password.   If \"Require a password when scheduling new meetings\" setting has been **enabled** **and** [locked](https://support.zoom.us/hc/en-us/articles/115005269866-Using-Tiered-Settings#locked) for the user, the password field will be autogenerated for the Webinar in the response even if it is not provided in the API request. <br><br> **Note:** If the account owner or the admin has configured [minimum password requirement settings](https://support.zoom.us/hc/en-us/articles/360033559832-Meeting-and-webinar-passwords#h_a427384b-e383-4f80-864d-794bf0a37604), the password value provided here must meet those requirements. <br><br>If the requirements are enabled, you can view those requirements by calling either the [Get User Settings API](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usersettings) or the  [Get Account Settings](https://marketplace.zoom.us/docs/api-reference/zoom-api/accounts/accountsettings) API.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        if (!is_null($password) && (mb_strlen($password) > 10)) {
            throw new \InvalidArgumentException('invalid length for $password when calling WebinarInfo., must be smaller than or equal to 10.');
        }

        $this->container['password'] = $password;

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


