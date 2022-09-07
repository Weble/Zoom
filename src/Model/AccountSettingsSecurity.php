<?php
/**
 * AccountSettingsSecurity
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
 * AccountSettingsSecurity Class Doc Comment
 *
 * @category Class
 * @description Account Settings: Security.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountSettingsSecurity implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountSettings_security';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'admin_change_name_pic' => 'bool',
        'import_photos_from_devices' => 'bool',
        'hide_billing_info' => 'bool',
        'password_requirement' => '\\' . \Weble\Zoom\Model\AccountSettingsSecurityPasswordRequirement::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'admin_change_name_pic' => null,
        'import_photos_from_devices' => null,
        'hide_billing_info' => null,
        'password_requirement' => null
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
        'admin_change_name_pic' => 'admin_change_name_pic',
        'import_photos_from_devices' => 'import_photos_from_devices',
        'hide_billing_info' => 'hide_billing_info',
        'password_requirement' => 'password_requirement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_change_name_pic' => 'setAdminChangeNamePic',
        'import_photos_from_devices' => 'setImportPhotosFromDevices',
        'hide_billing_info' => 'setHideBillingInfo',
        'password_requirement' => 'setPasswordRequirement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_change_name_pic' => 'getAdminChangeNamePic',
        'import_photos_from_devices' => 'getImportPhotosFromDevices',
        'hide_billing_info' => 'getHideBillingInfo',
        'password_requirement' => 'getPasswordRequirement'
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
        $this->container['admin_change_name_pic'] = $data['admin_change_name_pic'] ?? null;
        $this->container['import_photos_from_devices'] = $data['import_photos_from_devices'] ?? null;
        $this->container['hide_billing_info'] = $data['hide_billing_info'] ?? null;
        $this->container['password_requirement'] = $data['password_requirement'] ?? null;
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
     * Gets admin_change_name_pic
     *
     * @return bool
     */
    public function getAdminChangeNamePic()
    {
        return $this->container['admin_change_name_pic'];
    }

    /**
     * Sets admin_change_name_pic
     *
     * @param bool $admin_change_name_pic Only account administrators can change a user's username and picture.
     *
     * @return $this
     */
    public function setAdminChangeNamePic($admin_change_name_pic)
    {
        $this->container['admin_change_name_pic'] = $admin_change_name_pic;

        return $this;
    }

    /**
     * Gets import_photos_from_devices
     *
     * @return bool
     */
    public function getImportPhotosFromDevices()
    {
        return $this->container['import_photos_from_devices'];
    }

    /**
     * Sets import_photos_from_devices
     *
     * @param bool $import_photos_from_devices Allow users to import photos from a photo library on a  device.
     *
     * @return $this
     */
    public function setImportPhotosFromDevices($import_photos_from_devices)
    {
        $this->container['import_photos_from_devices'] = $import_photos_from_devices;

        return $this;
    }

    /**
     * Gets hide_billing_info
     *
     * @return bool
     */
    public function getHideBillingInfo()
    {
        return $this->container['hide_billing_info'];
    }

    /**
     * Sets hide_billing_info
     *
     * @param bool $hide_billing_info Hide billing information.
     *
     * @return $this
     */
    public function setHideBillingInfo($hide_billing_info)
    {
        $this->container['hide_billing_info'] = $hide_billing_info;

        return $this;
    }

    /**
     * Gets password_requirement
     *
     * @return \Weble\Zoom\Model\AccountSettingsSecurityPasswordRequirement
     */
    public function getPasswordRequirement()
    {
        return $this->container['password_requirement'];
    }

    /**
     * Sets password_requirement
     *
     * @param \Weble\Zoom\Model\AccountSettingsSecurityPasswordRequirement $password_requirement password_requirement
     *
     * @return $this
     */
    public function setPasswordRequirement($password_requirement)
    {
        $this->container['password_requirement'] = $password_requirement;

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


