<?php
/**
 * RecurrenceWebinar
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
 * RecurrenceWebinar Class Doc Comment
 *
 * @category Class
 * @description Recurrence object. Use this object only for a webinar of type &#x60;9&#x60; i.e., a recurring webinar with fixed time.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecurrenceWebinar implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Recurrence Webinar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'int',
        'repeat_interval' => 'int',
        'weekly_days' => 'int',
        'monthly_day' => 'int',
        'monthly_week' => 'int',
        'monthly_week_day' => 'int',
        'end_times' => 'int',
        'end_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'repeat_interval' => null,
        'weekly_days' => null,
        'monthly_day' => null,
        'monthly_week' => null,
        'monthly_week_day' => null,
        'end_times' => null,
        'end_date_time' => 'date-time'
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
        'type' => 'type',
        'repeat_interval' => 'repeat_interval',
        'weekly_days' => 'weekly_days',
        'monthly_day' => 'monthly_day',
        'monthly_week' => 'monthly_week',
        'monthly_week_day' => 'monthly_week_day',
        'end_times' => 'end_times',
        'end_date_time' => 'end_date_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'repeat_interval' => 'setRepeatInterval',
        'weekly_days' => 'setWeeklyDays',
        'monthly_day' => 'setMonthlyDay',
        'monthly_week' => 'setMonthlyWeek',
        'monthly_week_day' => 'setMonthlyWeekDay',
        'end_times' => 'setEndTimes',
        'end_date_time' => 'setEndDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'repeat_interval' => 'getRepeatInterval',
        'weekly_days' => 'getWeeklyDays',
        'monthly_day' => 'getMonthlyDay',
        'monthly_week' => 'getMonthlyWeek',
        'monthly_week_day' => 'getMonthlyWeekDay',
        'end_times' => 'getEndTimes',
        'end_date_time' => 'getEndDateTime'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['repeat_interval'] = isset($data['repeat_interval']) ? $data['repeat_interval'] : null;
        $this->container['weekly_days'] = isset($data['weekly_days']) ? $data['weekly_days'] : null;
        $this->container['monthly_day'] = isset($data['monthly_day']) ? $data['monthly_day'] : null;
        $this->container['monthly_week'] = isset($data['monthly_week']) ? $data['monthly_week'] : null;
        $this->container['monthly_week_day'] = isset($data['monthly_week_day']) ? $data['monthly_week_day'] : null;
        $this->container['end_times'] = isset($data['end_times']) ? $data['end_times'] : null;
        $this->container['end_date_time'] = isset($data['end_date_time']) ? $data['end_date_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if (!is_null($this->container['end_times']) && ($this->container['end_times'] > 50)) {
            $invalidProperties[] = "invalid value for 'end_times', must be smaller than or equal to 50.";
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
     * @param int $type Recurrence webinar types:<br>`1` - Daily.<br>`2` - Weekly.<br>`3` - Monthly.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets repeat_interval
     *
     * @return int
     */
    public function getRepeatInterval()
    {
        return $this->container['repeat_interval'];
    }

    /**
     * Sets repeat_interval
     *
     * @param int $repeat_interval Define the interval at which the webinar should recur. For instance, if you would like to schedule a Webinar that recurs every two months, you must set the value of this field as `2` and the value of the `type` parameter as `3`.   For a daily webinar, the maximum interval you can set is `90` days. For a weekly webinar, the maximum interval that you can set is `12` weeks. For a monthly webinar, the maximum interval that you can set is `3` months.
     *
     * @return $this
     */
    public function setRepeatInterval($repeat_interval)
    {
        $this->container['repeat_interval'] = $repeat_interval;

        return $this;
    }

    /**
     * Gets weekly_days
     *
     * @return int
     */
    public function getWeeklyDays()
    {
        return $this->container['weekly_days'];
    }

    /**
     * Sets weekly_days
     *
     * @param int $weekly_days Use this field **only if you're scheduling a recurring webinar of type** `2` to state which day(s) of the week the webinar should repeat. <br> **Note:** If you would like the webinar to occur on multiple days of a week, you should provide comma separated values for this field.<br>`1`  - Sunday. <br>`2` - Monday.<br>`3` - Tuesday.<br>`4` -  Wednesday.<br>`5` -  Thursday.<br>`6` - Friday.<br>`7` - Saturday.
     *
     * @return $this
     */
    public function setWeeklyDays($weekly_days)
    {
        $this->container['weekly_days'] = $weekly_days;

        return $this;
    }

    /**
     * Gets monthly_day
     *
     * @return int
     */
    public function getMonthlyDay()
    {
        return $this->container['monthly_day'];
    }

    /**
     * Sets monthly_day
     *
     * @param int $monthly_day Use this field **only if you're scheduling a recurring webinar of type** `3` to state which day in a month, the webinar should recur. The value range is from 1 to 31.  For instance, if you would like the webinar to recur on 23rd of each month, provide `23` as the value of this field and `1` as the value of the `repeat_interval` field. Instead, if you would like the webinar to recur once every three months, on 23rd of the month, change the value of the `repeat_interval` field to `3`.
     *
     * @return $this
     */
    public function setMonthlyDay($monthly_day)
    {
        $this->container['monthly_day'] = $monthly_day;

        return $this;
    }

    /**
     * Gets monthly_week
     *
     * @return int
     */
    public function getMonthlyWeek()
    {
        return $this->container['monthly_week'];
    }

    /**
     * Sets monthly_week
     *
     * @param int $monthly_week Use this field **only if you're scheduling a recurring webinar of type** `3` to state the week of the month when the webinar should recur. If you use this field, **you must also use the `monthly_week_day` field to state the day of the week when the webinar should recur.** <br>`-1` - Last week of the month.<br>`1` - First week of the month.<br>`2` - Second week of the month.<br>`3` - Third week of the month.<br>`4` - Fourth week of the month.
     *
     * @return $this
     */
    public function setMonthlyWeek($monthly_week)
    {
        $this->container['monthly_week'] = $monthly_week;

        return $this;
    }

    /**
     * Gets monthly_week_day
     *
     * @return int
     */
    public function getMonthlyWeekDay()
    {
        return $this->container['monthly_week_day'];
    }

    /**
     * Sets monthly_week_day
     *
     * @param int $monthly_week_day Use this field **only if you're scheduling a recurring webinar of type** `3` to state a specific day in a week when the monthly webinar should recur. To use this field, you must also use the `monthly_week` field. <br>`1` - Sunday.<br>`2` - Monday.<br>`3` - Tuesday.<br>`4` -  Wednesday.<br>`5` - Thursday.<br>`6` - Friday.<br>`7` - Saturday.
     *
     * @return $this
     */
    public function setMonthlyWeekDay($monthly_week_day)
    {
        $this->container['monthly_week_day'] = $monthly_week_day;

        return $this;
    }

    /**
     * Gets end_times
     *
     * @return int
     */
    public function getEndTimes()
    {
        return $this->container['end_times'];
    }

    /**
     * Sets end_times
     *
     * @param int $end_times Select how many times the webinar will recur before it is canceled. (Cannot be used with \"end_date_time\".)
     *
     * @return $this
     */
    public function setEndTimes($end_times)
    {

        if (!is_null($end_times) && ($end_times > 50)) {
            throw new \InvalidArgumentException('invalid value for $end_times when calling RecurrenceWebinar., must be smaller than or equal to 50.');
        }

        $this->container['end_times'] = $end_times;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime $end_date_time Select a date when the webinar will recur before it is canceled. Should be in UTC time, such as 2017-11-25T12:00:00Z. (Cannot be used with \"end_times\".)
     *
     * @return $this
     */
    public function setEndDateTime($end_date_time)
    {
        $this->container['end_date_time'] = $end_date_time;

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


