<?php
/**
 * MeetingRegistrant
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
 * MeetingRegistrant Class Doc Comment
 *
 * @category Class
 * @description Registrant.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingRegistrant implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MeetingRegistrant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'address' => 'string',
        'city' => 'string',
        'country' => 'string',
        'zip' => 'string',
        'state' => 'string',
        'phone' => 'string',
        'industry' => 'string',
        'org' => 'string',
        'job_title' => 'string',
        'purchasing_time_frame' => 'string',
        'role_in_purchase_process' => 'string',
        'no_of_employees' => 'string',
        'comments' => 'string',
        'custom_questions' => '\Weble\Zoom\Model\WebianrRegistrantCustomQuestions[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'address' => null,
        'city' => null,
        'country' => null,
        'zip' => null,
        'state' => null,
        'phone' => null,
        'industry' => null,
        'org' => null,
        'job_title' => null,
        'purchasing_time_frame' => null,
        'role_in_purchase_process' => null,
        'no_of_employees' => null,
        'comments' => null,
        'custom_questions' => null
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
        'email' => 'email',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'address' => 'address',
        'city' => 'city',
        'country' => 'country',
        'zip' => 'zip',
        'state' => 'state',
        'phone' => 'phone',
        'industry' => 'industry',
        'org' => 'org',
        'job_title' => 'job_title',
        'purchasing_time_frame' => 'purchasing_time_frame',
        'role_in_purchase_process' => 'role_in_purchase_process',
        'no_of_employees' => 'no_of_employees',
        'comments' => 'comments',
        'custom_questions' => 'custom_questions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'address' => 'setAddress',
        'city' => 'setCity',
        'country' => 'setCountry',
        'zip' => 'setZip',
        'state' => 'setState',
        'phone' => 'setPhone',
        'industry' => 'setIndustry',
        'org' => 'setOrg',
        'job_title' => 'setJobTitle',
        'purchasing_time_frame' => 'setPurchasingTimeFrame',
        'role_in_purchase_process' => 'setRoleInPurchaseProcess',
        'no_of_employees' => 'setNoOfEmployees',
        'comments' => 'setComments',
        'custom_questions' => 'setCustomQuestions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'address' => 'getAddress',
        'city' => 'getCity',
        'country' => 'getCountry',
        'zip' => 'getZip',
        'state' => 'getState',
        'phone' => 'getPhone',
        'industry' => 'getIndustry',
        'org' => 'getOrg',
        'job_title' => 'getJobTitle',
        'purchasing_time_frame' => 'getPurchasingTimeFrame',
        'role_in_purchase_process' => 'getRoleInPurchaseProcess',
        'no_of_employees' => 'getNoOfEmployees',
        'comments' => 'getComments',
        'custom_questions' => 'getCustomQuestions'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['org'] = isset($data['org']) ? $data['org'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['purchasing_time_frame'] = isset($data['purchasing_time_frame']) ? $data['purchasing_time_frame'] : null;
        $this->container['role_in_purchase_process'] = isset($data['role_in_purchase_process']) ? $data['role_in_purchase_process'] : null;
        $this->container['no_of_employees'] = isset($data['no_of_employees']) ? $data['no_of_employees'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['custom_questions'] = isset($data['custom_questions']) ? $data['custom_questions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email A valid email address of the registrant.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name Registrant's first name.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Registrant's last name.
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Registrant's address.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Registrant's city.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Registrant's country.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip Registrant's Zip/Postal Code.
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Registrant's State/Province.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Registrant's Phone number.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string $industry Registrant's Industry.
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets org
     *
     * @return string
     */
    public function getOrg()
    {
        return $this->container['org'];
    }

    /**
     * Sets org
     *
     * @param string $org Registrant's Organization.
     *
     * @return $this
     */
    public function setOrg($org)
    {
        $this->container['org'] = $org;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string $job_title Registrant's job title.
     *
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets purchasing_time_frame
     *
     * @return string
     */
    public function getPurchasingTimeFrame()
    {
        return $this->container['purchasing_time_frame'];
    }

    /**
     * Sets purchasing_time_frame
     *
     * @param string $purchasing_time_frame This field can be included to gauge interest of webinar attendees towards buying your product or service.  Purchasing Time Frame:<br>`Within a month`<br>`1-3 months`<br>`4-6 months`<br>`More than 6 months`<br>`No timeframe`
     *
     * @return $this
     */
    public function setPurchasingTimeFrame($purchasing_time_frame)
    {
        $this->container['purchasing_time_frame'] = $purchasing_time_frame;

        return $this;
    }

    /**
     * Gets role_in_purchase_process
     *
     * @return string
     */
    public function getRoleInPurchaseProcess()
    {
        return $this->container['role_in_purchase_process'];
    }

    /**
     * Sets role_in_purchase_process
     *
     * @param string $role_in_purchase_process Role in Purchase Process:<br>`Decision Maker`<br>`Evaluator/Recommender`<br>`Influencer`<br>`Not involved`
     *
     * @return $this
     */
    public function setRoleInPurchaseProcess($role_in_purchase_process)
    {
        $this->container['role_in_purchase_process'] = $role_in_purchase_process;

        return $this;
    }

    /**
     * Gets no_of_employees
     *
     * @return string
     */
    public function getNoOfEmployees()
    {
        return $this->container['no_of_employees'];
    }

    /**
     * Sets no_of_employees
     *
     * @param string $no_of_employees Number of Employees:<br>`1-20`<br>`21-50`<br>`51-100`<br>`101-500`<br>`500-1,000`<br>`1,001-5,000`<br>`5,001-10,000`<br>`More than 10,000`
     *
     * @return $this
     */
    public function setNoOfEmployees($no_of_employees)
    {
        $this->container['no_of_employees'] = $no_of_employees;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments A field that allows registrants to provide any questions or comments that they might have.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets custom_questions
     *
     * @return \Weble\Zoom\Model\WebianrRegistrantCustomQuestions[]
     */
    public function getCustomQuestions()
    {
        return $this->container['custom_questions'];
    }

    /**
     * Sets custom_questions
     *
     * @param \Weble\Zoom\Model\WebianrRegistrantCustomQuestions[] $custom_questions Custom questions.
     *
     * @return $this
     */
    public function setCustomQuestions($custom_questions)
    {
        $this->container['custom_questions'] = $custom_questions;

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


