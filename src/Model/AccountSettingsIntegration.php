<?php
/**
 * AccountSettingsIntegration
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
 * AccountSettingsIntegration Class Doc Comment
 *
 * @category Class
 * @description Account Settings: Integration.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountSettingsIntegration implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountSettings_integration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'google_calendar' => 'bool',
        'google_drive' => 'bool',
        'dropbox' => 'bool',
        'box' => 'bool',
        'microsoft_one_drive' => 'bool',
        'kubi' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'google_calendar' => null,
        'google_drive' => null,
        'dropbox' => null,
        'box' => null,
        'microsoft_one_drive' => null,
        'kubi' => null
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
        'google_calendar' => 'google_calendar',
        'google_drive' => 'google_drive',
        'dropbox' => 'dropbox',
        'box' => 'box',
        'microsoft_one_drive' => 'microsoft_one_drive',
        'kubi' => 'kubi'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'google_calendar' => 'setGoogleCalendar',
        'google_drive' => 'setGoogleDrive',
        'dropbox' => 'setDropbox',
        'box' => 'setBox',
        'microsoft_one_drive' => 'setMicrosoftOneDrive',
        'kubi' => 'setKubi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'google_calendar' => 'getGoogleCalendar',
        'google_drive' => 'getGoogleDrive',
        'dropbox' => 'getDropbox',
        'box' => 'getBox',
        'microsoft_one_drive' => 'getMicrosoftOneDrive',
        'kubi' => 'getKubi'
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
        $this->container['google_calendar'] = $data['google_calendar'] ?? null;
        $this->container['google_drive'] = $data['google_drive'] ?? null;
        $this->container['dropbox'] = $data['dropbox'] ?? null;
        $this->container['box'] = $data['box'] ?? null;
        $this->container['microsoft_one_drive'] = $data['microsoft_one_drive'] ?? null;
        $this->container['kubi'] = $data['kubi'] ?? null;
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
     * Gets google_calendar
     *
     * @return bool
     */
    public function getGoogleCalendar()
    {
        return $this->container['google_calendar'];
    }

    /**
     * Sets google_calendar
     *
     * @param bool $google_calendar Enable meetings to be scheduled using Google Calendar.
     *
     * @return $this
     */
    public function setGoogleCalendar($google_calendar)
    {
        $this->container['google_calendar'] = $google_calendar;

        return $this;
    }

    /**
     * Gets google_drive
     *
     * @return bool
     */
    public function getGoogleDrive()
    {
        return $this->container['google_drive'];
    }

    /**
     * Sets google_drive
     *
     * @param bool $google_drive Enable users who join a meeting from their mobile device to share content from their Google Drive.
     *
     * @return $this
     */
    public function setGoogleDrive($google_drive)
    {
        $this->container['google_drive'] = $google_drive;

        return $this;
    }

    /**
     * Gets dropbox
     *
     * @return bool
     */
    public function getDropbox()
    {
        return $this->container['dropbox'];
    }

    /**
     * Sets dropbox
     *
     * @param bool $dropbox Enable users who join a meeting from their mobile device to share content from their Dropbox account.
     *
     * @return $this
     */
    public function setDropbox($dropbox)
    {
        $this->container['dropbox'] = $dropbox;

        return $this;
    }

    /**
     * Gets box
     *
     * @return bool
     */
    public function getBox()
    {
        return $this->container['box'];
    }

    /**
     * Sets box
     *
     * @param bool $box Enable users who join a meeting from their mobile device to share content from their Box account.
     *
     * @return $this
     */
    public function setBox($box)
    {
        $this->container['box'] = $box;

        return $this;
    }

    /**
     * Gets microsoft_one_drive
     *
     * @return bool
     */
    public function getMicrosoftOneDrive()
    {
        return $this->container['microsoft_one_drive'];
    }

    /**
     * Sets microsoft_one_drive
     *
     * @param bool $microsoft_one_drive Enable users who join a meeting from their mobile device to share content from their Microsoft OneDrive account.
     *
     * @return $this
     */
    public function setMicrosoftOneDrive($microsoft_one_drive)
    {
        $this->container['microsoft_one_drive'] = $microsoft_one_drive;

        return $this;
    }

    /**
     * Gets kubi
     *
     * @return bool
     */
    public function getKubi()
    {
        return $this->container['kubi'];
    }

    /**
     * Sets kubi
     *
     * @param bool $kubi Enable users to control a connected Kubi device from within a Zoom meeting.
     *
     * @return $this
     */
    public function setKubi($kubi)
    {
        $this->container['kubi'] = $kubi;

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


