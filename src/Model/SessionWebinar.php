<?php
/**
 * SessionWebinar
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
 * SessionWebinar Class Doc Comment
 *
 * @category Class
 * @description Base webinar object for sessions.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SessionWebinar implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SessionWebinar';

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
        'password' => 'string',
        'agenda' => 'string',
        'tracking_fields' => '\Weble\Zoom\Model\InlineResponse20110TrackingFields[]',
        'recurrence' => '\\' . \Weble\Zoom\Model\RecurrenceWebinar::class,
        'settings' => '\\' . \Weble\Zoom\Model\InlineResponse20118Settings::class
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
        'password' => null,
        'agenda' => null,
        'tracking_fields' => null,
        'recurrence' => null,
        'settings' => null
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
        'password' => 'password',
        'agenda' => 'agenda',
        'tracking_fields' => 'tracking_fields',
        'recurrence' => 'recurrence',
        'settings' => 'settings'
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
        'password' => 'setPassword',
        'agenda' => 'setAgenda',
        'tracking_fields' => 'setTrackingFields',
        'recurrence' => 'setRecurrence',
        'settings' => 'setSettings'
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
        'password' => 'getPassword',
        'agenda' => 'getAgenda',
        'tracking_fields' => 'getTrackingFields',
        'recurrence' => 'getRecurrence',
        'settings' => 'getSettings'
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
        $this->container['password'] = $data['password'] ?? null;
        $this->container['agenda'] = $data['agenda'] ?? null;
        $this->container['tracking_fields'] = $data['tracking_fields'] ?? null;
        $this->container['recurrence'] = $data['recurrence'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
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
     * @param \DateTime $start_time Webinar start time. We support two formats for `start_time` - local time and GMT.<br>   To set time as GMT the format should be `yyyy-MM-dd`T`HH:mm:ssZ`.  To set time using a specific timezone, use `yyyy-MM-dd`T`HH:mm:ss` format and specify the timezone [ID](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#timezones) in the `timezone` field OR leave it blank and the timezone set on your Zoom account will be used. You can also set the time as UTC as the timezone field.  The `start_time` should only be used for scheduled and / or recurring webinars with fixed time.
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
     * @param int $duration Webinar duration (minutes). Used for scheduled webinars only.
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
     * @param string $timezone Time zone to format start_time. For example, \"America/Los_Angeles\". For scheduled meetings only. Please reference our [time zone](#timezones) list for supported time zones and their formats.
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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
     * @param string $password Webinar password. Password may only contain the following characters: [a-z A-Z 0-9 @ - _ *]. Max of 10 characters.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

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
     * @param string $agenda Webinar description.
     *
     * @return $this
     */
    public function setAgenda($agenda)
    {
        $this->container['agenda'] = $agenda;

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


