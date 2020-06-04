<?php
/**
 * InlineResponse20073Meetings
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
 * InlineResponse20073Meetings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20073Meetings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_73_meetings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
        'id' => 'string',
        'host_id' => 'string',
        'topic' => 'string',
        'start_time' => '\DateTime',
        'duration' => 'int',
        'total_size' => 'int',
        'recording_count' => 'int',
        'recording_files' => '\Weble\Zoom\Model\InlineResponse20073RecordingFiles[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => null,
        'id' => null,
        'host_id' => null,
        'topic' => null,
        'start_time' => 'date-time',
        'duration' => null,
        'total_size' => null,
        'recording_count' => null,
        'recording_files' => null
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
        'uuid' => 'uuid',
        'id' => 'id',
        'host_id' => 'host_id',
        'topic' => 'topic',
        'start_time' => 'start_time',
        'duration' => 'duration',
        'total_size' => 'total_size',
        'recording_count' => 'recording_count',
        'recording_files' => 'recording_files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'id' => 'setId',
        'host_id' => 'setHostId',
        'topic' => 'setTopic',
        'start_time' => 'setStartTime',
        'duration' => 'setDuration',
        'total_size' => 'setTotalSize',
        'recording_count' => 'setRecordingCount',
        'recording_files' => 'setRecordingFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'id' => 'getId',
        'host_id' => 'getHostId',
        'topic' => 'getTopic',
        'start_time' => 'getStartTime',
        'duration' => 'getDuration',
        'total_size' => 'getTotalSize',
        'recording_count' => 'getRecordingCount',
        'recording_files' => 'getRecordingFiles'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['host_id'] = isset($data['host_id']) ? $data['host_id'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['total_size'] = isset($data['total_size']) ? $data['total_size'] : null;
        $this->container['recording_count'] = isset($data['recording_count']) ? $data['recording_count'] : null;
        $this->container['recording_files'] = isset($data['recording_files']) ? $data['recording_files'] : null;
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid Universally Unique Identifier of a meeting instance. Each meeting instance will have its own meeting UUID.
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
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
     * @param string $id Meeting ID - Unique Identifier for a meeting, also known as Meeting Number.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets host_id
     *
     * @return string
     */
    public function getHostId()
    {
        return $this->container['host_id'];
    }

    /**
     * Sets host_id
     *
     * @param string $host_id User ID of the user who is set as the host of the meeting.
     *
     * @return $this
     */
    public function setHostId($host_id)
    {
        $this->container['host_id'] = $host_id;

        return $this;
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
     * @param \DateTime $start_time The date and time at which the meeting started.
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
     * @param int $duration The scheduled duration of the meeting.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets total_size
     *
     * @return int
     */
    public function getTotalSize()
    {
        return $this->container['total_size'];
    }

    /**
     * Sets total_size
     *
     * @param int $total_size The total size of the meeting in bytes.
     *
     * @return $this
     */
    public function setTotalSize($total_size)
    {
        $this->container['total_size'] = $total_size;

        return $this;
    }

    /**
     * Gets recording_count
     *
     * @return int
     */
    public function getRecordingCount()
    {
        return $this->container['recording_count'];
    }

    /**
     * Sets recording_count
     *
     * @param int $recording_count The total number of recordings retrieved from the account.
     *
     * @return $this
     */
    public function setRecordingCount($recording_count)
    {
        $this->container['recording_count'] = $recording_count;

        return $this;
    }

    /**
     * Gets recording_files
     *
     * @return \Weble\Zoom\Model\InlineResponse20073RecordingFiles[]
     */
    public function getRecordingFiles()
    {
        return $this->container['recording_files'];
    }

    /**
     * Sets recording_files
     *
     * @param \Weble\Zoom\Model\InlineResponse20073RecordingFiles[] $recording_files Recording files object
     *
     * @return $this
     */
    public function setRecordingFiles($recording_files)
    {
        $this->container['recording_files'] = $recording_files;

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


