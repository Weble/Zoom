<?php
/**
 * UserSettingsFeatureSettings
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
 * UserSettingsFeatureSettings Class Doc Comment
 *
 * @category Class
 * @description
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserSettingsFeatureSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User settings Feature settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meeting_capacity' => 'int',
        'large_meeting' => 'bool',
        'large_meeting_capacity' => 'int',
        'webinar' => 'bool',
        'webinar_capacity' => 'int',
        'cn_meeting' => 'bool',
        'in_meeting' => 'bool',
        'zoom_phone' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meeting_capacity' => null,
        'large_meeting' => null,
        'large_meeting_capacity' => null,
        'webinar' => null,
        'webinar_capacity' => null,
        'cn_meeting' => null,
        'in_meeting' => null,
        'zoom_phone' => null
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
        'meeting_capacity' => 'meeting_capacity',
        'large_meeting' => 'large_meeting',
        'large_meeting_capacity' => 'large_meeting_capacity',
        'webinar' => 'webinar',
        'webinar_capacity' => 'webinar_capacity',
        'cn_meeting' => 'cn_meeting',
        'in_meeting' => 'in_meeting',
        'zoom_phone' => 'zoom_phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_capacity' => 'setMeetingCapacity',
        'large_meeting' => 'setLargeMeeting',
        'large_meeting_capacity' => 'setLargeMeetingCapacity',
        'webinar' => 'setWebinar',
        'webinar_capacity' => 'setWebinarCapacity',
        'cn_meeting' => 'setCnMeeting',
        'in_meeting' => 'setInMeeting',
        'zoom_phone' => 'setZoomPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_capacity' => 'getMeetingCapacity',
        'large_meeting' => 'getLargeMeeting',
        'large_meeting_capacity' => 'getLargeMeetingCapacity',
        'webinar' => 'getWebinar',
        'webinar_capacity' => 'getWebinarCapacity',
        'cn_meeting' => 'getCnMeeting',
        'in_meeting' => 'getInMeeting',
        'zoom_phone' => 'getZoomPhone'
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
        $this->container['meeting_capacity'] = isset($data['meeting_capacity']) ? $data['meeting_capacity'] : null;
        $this->container['large_meeting'] = isset($data['large_meeting']) ? $data['large_meeting'] : null;
        $this->container['large_meeting_capacity'] = isset($data['large_meeting_capacity']) ? $data['large_meeting_capacity'] : null;
        $this->container['webinar'] = isset($data['webinar']) ? $data['webinar'] : null;
        $this->container['webinar_capacity'] = isset($data['webinar_capacity']) ? $data['webinar_capacity'] : null;
        $this->container['cn_meeting'] = isset($data['cn_meeting']) ? $data['cn_meeting'] : null;
        $this->container['in_meeting'] = isset($data['in_meeting']) ? $data['in_meeting'] : null;
        $this->container['zoom_phone'] = isset($data['zoom_phone']) ? $data['zoom_phone'] : null;
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
     * Gets meeting_capacity
     *
     * @return int
     */
    public function getMeetingCapacity()
    {
        return $this->container['meeting_capacity'];
    }

    /**
     * Sets meeting_capacity
     *
     * @param int $meeting_capacity User’s meeting capacity.
     *
     * @return $this
     */
    public function setMeetingCapacity($meeting_capacity)
    {
        $this->container['meeting_capacity'] = $meeting_capacity;

        return $this;
    }

    /**
     * Gets large_meeting
     *
     * @return bool
     */
    public function getLargeMeeting()
    {
        return $this->container['large_meeting'];
    }

    /**
     * Sets large_meeting
     *
     * @param bool $large_meeting Large meeting feature.
     *
     * @return $this
     */
    public function setLargeMeeting($large_meeting)
    {
        $this->container['large_meeting'] = $large_meeting;

        return $this;
    }

    /**
     * Gets large_meeting_capacity
     *
     * @return int
     */
    public function getLargeMeetingCapacity()
    {
        return $this->container['large_meeting_capacity'];
    }

    /**
     * Sets large_meeting_capacity
     *
     * @param int $large_meeting_capacity Large meeting capacity: can be 500 or 1000, depending on if the user has a large meeting capacity plan subscription or not.
     *
     * @return $this
     */
    public function setLargeMeetingCapacity($large_meeting_capacity)
    {
        $this->container['large_meeting_capacity'] = $large_meeting_capacity;

        return $this;
    }

    /**
     * Gets webinar
     *
     * @return bool
     */
    public function getWebinar()
    {
        return $this->container['webinar'];
    }

    /**
     * Sets webinar
     *
     * @param bool $webinar Webinar feature.
     *
     * @return $this
     */
    public function setWebinar($webinar)
    {
        $this->container['webinar'] = $webinar;

        return $this;
    }

    /**
     * Gets webinar_capacity
     *
     * @return int
     */
    public function getWebinarCapacity()
    {
        return $this->container['webinar_capacity'];
    }

    /**
     * Sets webinar_capacity
     *
     * @param int $webinar_capacity Webinar capacity: can be 100, 500, 1000, 3000, 5000 or 10000, depending on if the user has a webinar capacity plan subscription or not.
     *
     * @return $this
     */
    public function setWebinarCapacity($webinar_capacity)
    {
        $this->container['webinar_capacity'] = $webinar_capacity;

        return $this;
    }

    /**
     * Gets cn_meeting
     *
     * @return bool
     */
    public function getCnMeeting()
    {
        return $this->container['cn_meeting'];
    }

    /**
     * Sets cn_meeting
     *
     * @param bool $cn_meeting CN meeting feature.
     *
     * @return $this
     */
    public function setCnMeeting($cn_meeting)
    {
        $this->container['cn_meeting'] = $cn_meeting;

        return $this;
    }

    /**
     * Gets in_meeting
     *
     * @return bool
     */
    public function getInMeeting()
    {
        return $this->container['in_meeting'];
    }

    /**
     * Sets in_meeting
     *
     * @param bool $in_meeting IN meeting feature.
     *
     * @return $this
     */
    public function setInMeeting($in_meeting)
    {
        $this->container['in_meeting'] = $in_meeting;

        return $this;
    }

    /**
     * Gets zoom_phone
     *
     * @return bool
     */
    public function getZoomPhone()
    {
        return $this->container['zoom_phone'];
    }

    /**
     * Sets zoom_phone
     *
     * @param bool $zoom_phone Zoom phone feature.
     *
     * @return $this
     */
    public function setZoomPhone($zoom_phone)
    {
        $this->container['zoom_phone'] = $zoom_phone;

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


