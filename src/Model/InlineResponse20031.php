<?php
/**
 * InlineResponse20031
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
 * InlineResponse20031 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20031 implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_31';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from' => '\\' . \DateTime::class,
        'next_page_token' => 'string',
        'page_count' => 'int',
        'page_size' => 'int',
        'to' => '\\' . \DateTime::class,
        'total_records' => 'int',
        'users' => '\Weble\Zoom\Model\InlineResponse20031Users[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'from' => 'date',
        'next_page_token' => null,
        'page_count' => null,
        'page_size' => null,
        'to' => 'date',
        'total_records' => null,
        'users' => null
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
        'from' => 'from',
        'next_page_token' => 'next_page_token',
        'page_count' => 'page_count',
        'page_size' => 'page_size',
        'to' => 'to',
        'total_records' => 'total_records',
        'users' => 'users'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'next_page_token' => 'setNextPageToken',
        'page_count' => 'setPageCount',
        'page_size' => 'setPageSize',
        'to' => 'setTo',
        'total_records' => 'setTotalRecords',
        'users' => 'setUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'next_page_token' => 'getNextPageToken',
        'page_count' => 'getPageCount',
        'page_size' => 'getPageSize',
        'to' => 'getTo',
        'total_records' => 'getTotalRecords',
        'users' => 'getUsers'
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
        $this->container['from'] = $data['from'] ?? null;
        $this->container['next_page_token'] = $data['next_page_token'] ?? null;
        $this->container['page_count'] = $data['page_count'] ?? null;
        $this->container['page_size'] = $data['page_size'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['total_records'] = $data['total_records'] ?? null;
        $this->container['users'] = $data['users'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] > 300)) {
            $invalidProperties[] = "invalid value for 'page_size', must be smaller than or equal to 300.";
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
     * Gets from
     *
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \DateTime $from Start date for this report.
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets next_page_token
     *
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->container['next_page_token'];
    }

    /**
     * Sets next_page_token
     *
     * @param string $next_page_token The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
     *
     * @return $this
     */
    public function setNextPageToken($next_page_token)
    {
        $this->container['next_page_token'] = $next_page_token;

        return $this;
    }

    /**
     * Gets page_count
     *
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     *
     * @param int $page_count The number of pages returned for the request made.
     *
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size The number of records returned within a single API call.
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {

        if (!is_null($page_size) && ($page_size > 300)) {
            throw new \InvalidArgumentException('invalid value for $page_size when calling InlineResponse20031., must be smaller than or equal to 300.');
        }

        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \DateTime $to End date for this report.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets total_records
     *
     * @return int
     */
    public function getTotalRecords()
    {
        return $this->container['total_records'];
    }

    /**
     * Sets total_records
     *
     * @param int $total_records The number of all records available across pages.
     *
     * @return $this
     */
    public function setTotalRecords($total_records)
    {
        $this->container['total_records'] = $total_records;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \Weble\Zoom\Model\InlineResponse20031Users[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \Weble\Zoom\Model\InlineResponse20031Users[] $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

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


