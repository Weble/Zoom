<?php
/**
 * Body77
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
 * Body77 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body77 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_77';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'match_type' => 'string',
        'phone_number' => 'string',
        'block_type' => 'string',
        'status' => 'string',
        'comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'match_type' => null,
        'phone_number' => null,
        'block_type' => null,
        'status' => null,
        'comment' => null
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
        'match_type' => 'match_type',
        'phone_number' => 'phone_number',
        'block_type' => 'block_type',
        'status' => 'status',
        'comment' => 'comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'match_type' => 'setMatchType',
        'phone_number' => 'setPhoneNumber',
        'block_type' => 'setBlockType',
        'status' => 'setStatus',
        'comment' => 'setComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'match_type' => 'getMatchType',
        'phone_number' => 'getPhoneNumber',
        'block_type' => 'getBlockType',
        'status' => 'getStatus',
        'comment' => 'getComment'
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

    const MATCH_TYPE_PHONE_NUMBER = 'phoneNumber';
    const MATCH_TYPE_PREFIX = 'prefix';
    const BLOCK_TYPE_INBOUND = 'inbound';
    const BLOCK_TYPE_OUTBOUND = 'outbound';
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatchTypeAllowableValues()
    {
        return [
            self::MATCH_TYPE_PHONE_NUMBER,
            self::MATCH_TYPE_PREFIX,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBlockTypeAllowableValues()
    {
        return [
            self::BLOCK_TYPE_INBOUND,
            self::BLOCK_TYPE_OUTBOUND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
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
        $this->container['match_type'] = isset($data['match_type']) ? $data['match_type'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['block_type'] = isset($data['block_type']) ? $data['block_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!is_null($this->container['match_type']) && !in_array($this->container['match_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'match_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getBlockTypeAllowableValues();
        if (!is_null($this->container['block_type']) && !in_array($this->container['block_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'block_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 255)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 255.";
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
     * Gets match_type
     *
     * @return string
     */
    public function getMatchType()
    {
        return $this->container['match_type'];
    }

    /**
     * Sets match_type
     *
     * @param string $match_type Specify the match type for the blocked list. The values can be one of the following:<br><br> `phoneNumber`: Choose this option (Phone Number Match) if you want to block a specific phone number. Then, in the `phone_number` field, provide the phone number along with the country code.<br><br> `prefix`: Choose this option (Prefix Match) if you want to block all numbers with a specific country code and area code. Next, in the `phone_number` field, enter a country code as part of the prefix. For example, entering 1907 blocks numbers with country code 1 and area code 907.
     *
     * @return $this
     */
    public function setMatchType($match_type)
    {
        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!is_null($match_type) && !in_array($match_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'match_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['match_type'] = $match_type;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number The phone number to be blocked if you passed \"phoneNumber\" as the value for the `match_type` field. If you passed \"prefix\" as the value for the `match_type` field, provide the prefix of the phone number here including the country code. For example, entering 1905 blocks numbers with country code 1 and area code 905.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Body77., must be smaller than or equal to 50.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets block_type
     *
     * @return string
     */
    public function getBlockType()
    {
        return $this->container['block_type'];
    }

    /**
     * Sets block_type
     *
     * @param string $block_type State whether you want the block type to be inbound or outbound.<br> `inbound`: Pass this value to prevent the blocked number or prefix from calling in to phone users.<br> `outbound`: Pass this value to prevent phone users from calling the blocked number or prefix.
     *
     * @return $this
     */
    public function setBlockType($block_type)
    {
        $allowedValues = $this->getBlockTypeAllowableValues();
        if (!is_null($block_type) && !in_array($block_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'block_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['block_type'] = $block_type;

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
     * @param string $status Enable or disable the blocking. One of the following values are allowed:<br> `active`: Keep the blocking active.<br> `inactive`: Disable the blocking.
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
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Provide a comment to help you identify the blocked number or prefix.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        if (!is_null($comment) && (mb_strlen($comment) > 255)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling Body77., must be smaller than or equal to 255.');
        }

        $this->container['comment'] = $comment;

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


