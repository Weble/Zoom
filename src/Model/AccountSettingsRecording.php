<?php
/**
 * AccountSettingsRecording
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
 * AccountSettingsRecording Class Doc Comment
 *
 * @category Class
 * @description Account Settings: Recording.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountSettingsRecording implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountSettings_recording';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'local_recording' => 'bool',
        'cloud_recording' => 'bool',
        'record_speaker_view' => 'bool',
        'record_gallery_view' => 'bool',
        'record_audio_file' => 'bool',
        'save_chat_text' => 'bool',
        'show_timestamp' => 'bool',
        'recording_audio_transcript' => 'bool',
        'auto_recording' => 'string',
        'cloud_recording_download' => 'bool',
        'cloud_recording_download_host' => 'bool',
        'account_user_access_recording' => 'bool',
        'auto_delete_cmr' => 'bool',
        'auto_delete_cmr_days' => 'int',
        'recording_password_requirement' => '\Weble\Zoom\Model\AccountSettingsRecordingRecordingPasswordRequirement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'local_recording' => null,
        'cloud_recording' => null,
        'record_speaker_view' => null,
        'record_gallery_view' => null,
        'record_audio_file' => null,
        'save_chat_text' => null,
        'show_timestamp' => null,
        'recording_audio_transcript' => null,
        'auto_recording' => null,
        'cloud_recording_download' => null,
        'cloud_recording_download_host' => null,
        'account_user_access_recording' => null,
        'auto_delete_cmr' => null,
        'auto_delete_cmr_days' => null,
        'recording_password_requirement' => null
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
        'local_recording' => 'local_recording',
        'cloud_recording' => 'cloud_recording',
        'record_speaker_view' => 'record_speaker_view',
        'record_gallery_view' => 'record_gallery_view',
        'record_audio_file' => 'record_audio_file',
        'save_chat_text' => 'save_chat_text',
        'show_timestamp' => 'show_timestamp',
        'recording_audio_transcript' => 'recording_audio_transcript',
        'auto_recording' => 'auto_recording',
        'cloud_recording_download' => 'cloud_recording_download',
        'cloud_recording_download_host' => 'cloud_recording_download_host',
        'account_user_access_recording' => 'account_user_access_recording',
        'auto_delete_cmr' => 'auto_delete_cmr',
        'auto_delete_cmr_days' => 'auto_delete_cmr_days',
        'recording_password_requirement' => 'recording_password_requirement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'local_recording' => 'setLocalRecording',
        'cloud_recording' => 'setCloudRecording',
        'record_speaker_view' => 'setRecordSpeakerView',
        'record_gallery_view' => 'setRecordGalleryView',
        'record_audio_file' => 'setRecordAudioFile',
        'save_chat_text' => 'setSaveChatText',
        'show_timestamp' => 'setShowTimestamp',
        'recording_audio_transcript' => 'setRecordingAudioTranscript',
        'auto_recording' => 'setAutoRecording',
        'cloud_recording_download' => 'setCloudRecordingDownload',
        'cloud_recording_download_host' => 'setCloudRecordingDownloadHost',
        'account_user_access_recording' => 'setAccountUserAccessRecording',
        'auto_delete_cmr' => 'setAutoDeleteCmr',
        'auto_delete_cmr_days' => 'setAutoDeleteCmrDays',
        'recording_password_requirement' => 'setRecordingPasswordRequirement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'local_recording' => 'getLocalRecording',
        'cloud_recording' => 'getCloudRecording',
        'record_speaker_view' => 'getRecordSpeakerView',
        'record_gallery_view' => 'getRecordGalleryView',
        'record_audio_file' => 'getRecordAudioFile',
        'save_chat_text' => 'getSaveChatText',
        'show_timestamp' => 'getShowTimestamp',
        'recording_audio_transcript' => 'getRecordingAudioTranscript',
        'auto_recording' => 'getAutoRecording',
        'cloud_recording_download' => 'getCloudRecordingDownload',
        'cloud_recording_download_host' => 'getCloudRecordingDownloadHost',
        'account_user_access_recording' => 'getAccountUserAccessRecording',
        'auto_delete_cmr' => 'getAutoDeleteCmr',
        'auto_delete_cmr_days' => 'getAutoDeleteCmrDays',
        'recording_password_requirement' => 'getRecordingPasswordRequirement'
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

    const AUTO_RECORDING_LOCAL = 'local';
    const AUTO_RECORDING_CLOUD = 'cloud';
    const AUTO_RECORDING_NONE = 'none';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutoRecordingAllowableValues()
    {
        return [
            self::AUTO_RECORDING_LOCAL,
            self::AUTO_RECORDING_CLOUD,
            self::AUTO_RECORDING_NONE,
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
        $this->container['local_recording'] = isset($data['local_recording']) ? $data['local_recording'] : null;
        $this->container['cloud_recording'] = isset($data['cloud_recording']) ? $data['cloud_recording'] : null;
        $this->container['record_speaker_view'] = isset($data['record_speaker_view']) ? $data['record_speaker_view'] : null;
        $this->container['record_gallery_view'] = isset($data['record_gallery_view']) ? $data['record_gallery_view'] : null;
        $this->container['record_audio_file'] = isset($data['record_audio_file']) ? $data['record_audio_file'] : null;
        $this->container['save_chat_text'] = isset($data['save_chat_text']) ? $data['save_chat_text'] : null;
        $this->container['show_timestamp'] = isset($data['show_timestamp']) ? $data['show_timestamp'] : null;
        $this->container['recording_audio_transcript'] = isset($data['recording_audio_transcript']) ? $data['recording_audio_transcript'] : null;
        $this->container['auto_recording'] = isset($data['auto_recording']) ? $data['auto_recording'] : null;
        $this->container['cloud_recording_download'] = isset($data['cloud_recording_download']) ? $data['cloud_recording_download'] : null;
        $this->container['cloud_recording_download_host'] = isset($data['cloud_recording_download_host']) ? $data['cloud_recording_download_host'] : null;
        $this->container['account_user_access_recording'] = isset($data['account_user_access_recording']) ? $data['account_user_access_recording'] : null;
        $this->container['auto_delete_cmr'] = isset($data['auto_delete_cmr']) ? $data['auto_delete_cmr'] : null;
        $this->container['auto_delete_cmr_days'] = isset($data['auto_delete_cmr_days']) ? $data['auto_delete_cmr_days'] : null;
        $this->container['recording_password_requirement'] = isset($data['recording_password_requirement']) ? $data['recording_password_requirement'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAutoRecordingAllowableValues();
        if (!is_null($this->container['auto_recording']) && !in_array($this->container['auto_recording'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'auto_recording', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets local_recording
     *
     * @return bool
     */
    public function getLocalRecording()
    {
        return $this->container['local_recording'];
    }

    /**
     * Sets local_recording
     *
     * @param bool $local_recording Allow hosts and participants to record the meeting using a local file.
     *
     * @return $this
     */
    public function setLocalRecording($local_recording)
    {
        $this->container['local_recording'] = $local_recording;

        return $this;
    }

    /**
     * Gets cloud_recording
     *
     * @return bool
     */
    public function getCloudRecording()
    {
        return $this->container['cloud_recording'];
    }

    /**
     * Sets cloud_recording
     *
     * @param bool $cloud_recording Allow hosts to record and save the meeting in the cloud.
     *
     * @return $this
     */
    public function setCloudRecording($cloud_recording)
    {
        $this->container['cloud_recording'] = $cloud_recording;

        return $this;
    }

    /**
     * Gets record_speaker_view
     *
     * @return bool
     */
    public function getRecordSpeakerView()
    {
        return $this->container['record_speaker_view'];
    }

    /**
     * Sets record_speaker_view
     *
     * @param bool $record_speaker_view Record the active speaker with a shared screen.
     *
     * @return $this
     */
    public function setRecordSpeakerView($record_speaker_view)
    {
        $this->container['record_speaker_view'] = $record_speaker_view;

        return $this;
    }

    /**
     * Gets record_gallery_view
     *
     * @return bool
     */
    public function getRecordGalleryView()
    {
        return $this->container['record_gallery_view'];
    }

    /**
     * Sets record_gallery_view
     *
     * @param bool $record_gallery_view Record the gallery view with a shared screen.
     *
     * @return $this
     */
    public function setRecordGalleryView($record_gallery_view)
    {
        $this->container['record_gallery_view'] = $record_gallery_view;

        return $this;
    }

    /**
     * Gets record_audio_file
     *
     * @return bool
     */
    public function getRecordAudioFile()
    {
        return $this->container['record_audio_file'];
    }

    /**
     * Sets record_audio_file
     *
     * @param bool $record_audio_file Record an audio only file.
     *
     * @return $this
     */
    public function setRecordAudioFile($record_audio_file)
    {
        $this->container['record_audio_file'] = $record_audio_file;

        return $this;
    }

    /**
     * Gets save_chat_text
     *
     * @return bool
     */
    public function getSaveChatText()
    {
        return $this->container['save_chat_text'];
    }

    /**
     * Sets save_chat_text
     *
     * @param bool $save_chat_text Save the chat text from the meeting.
     *
     * @return $this
     */
    public function setSaveChatText($save_chat_text)
    {
        $this->container['save_chat_text'] = $save_chat_text;

        return $this;
    }

    /**
     * Gets show_timestamp
     *
     * @return bool
     */
    public function getShowTimestamp()
    {
        return $this->container['show_timestamp'];
    }

    /**
     * Sets show_timestamp
     *
     * @param bool $show_timestamp Add a timestamp to the recording.
     *
     * @return $this
     */
    public function setShowTimestamp($show_timestamp)
    {
        $this->container['show_timestamp'] = $show_timestamp;

        return $this;
    }

    /**
     * Gets recording_audio_transcript
     *
     * @return bool
     */
    public function getRecordingAudioTranscript()
    {
        return $this->container['recording_audio_transcript'];
    }

    /**
     * Sets recording_audio_transcript
     *
     * @param bool $recording_audio_transcript Automatically transcribe the audio of the meeting or webinar to the cloud.
     *
     * @return $this
     */
    public function setRecordingAudioTranscript($recording_audio_transcript)
    {
        $this->container['recording_audio_transcript'] = $recording_audio_transcript;

        return $this;
    }

    /**
     * Gets auto_recording
     *
     * @return string
     */
    public function getAutoRecording()
    {
        return $this->container['auto_recording'];
    }

    /**
     * Sets auto_recording
     *
     * @param string $auto_recording Automatic recording:<br>`local` - Record on local.<br>`cloud` -  Record on cloud.<br>`none` - Disabled.
     *
     * @return $this
     */
    public function setAutoRecording($auto_recording)
    {
        $allowedValues = $this->getAutoRecordingAllowableValues();
        if (!is_null($auto_recording) && !in_array($auto_recording, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'auto_recording', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auto_recording'] = $auto_recording;

        return $this;
    }

    /**
     * Gets cloud_recording_download
     *
     * @return bool
     */
    public function getCloudRecordingDownload()
    {
        return $this->container['cloud_recording_download'];
    }

    /**
     * Sets cloud_recording_download
     *
     * @param bool $cloud_recording_download Cloud recording downloads.
     *
     * @return $this
     */
    public function setCloudRecordingDownload($cloud_recording_download)
    {
        $this->container['cloud_recording_download'] = $cloud_recording_download;

        return $this;
    }

    /**
     * Gets cloud_recording_download_host
     *
     * @return bool
     */
    public function getCloudRecordingDownloadHost()
    {
        return $this->container['cloud_recording_download_host'];
    }

    /**
     * Sets cloud_recording_download_host
     *
     * @param bool $cloud_recording_download_host Only the host can download cloud recordings.
     *
     * @return $this
     */
    public function setCloudRecordingDownloadHost($cloud_recording_download_host)
    {
        $this->container['cloud_recording_download_host'] = $cloud_recording_download_host;

        return $this;
    }

    /**
     * Gets account_user_access_recording
     *
     * @return bool
     */
    public function getAccountUserAccessRecording()
    {
        return $this->container['account_user_access_recording'];
    }

    /**
     * Sets account_user_access_recording
     *
     * @param bool $account_user_access_recording Cloud recordings are only accessible to account members. People outside of your organization cannot open links that provide access to cloud recordings.
     *
     * @return $this
     */
    public function setAccountUserAccessRecording($account_user_access_recording)
    {
        $this->container['account_user_access_recording'] = $account_user_access_recording;

        return $this;
    }

    /**
     * Gets auto_delete_cmr
     *
     * @return bool
     */
    public function getAutoDeleteCmr()
    {
        return $this->container['auto_delete_cmr'];
    }

    /**
     * Sets auto_delete_cmr
     *
     * @param bool $auto_delete_cmr Allow Zoom to permanantly delete recordings automatically after a specified number of days.
     *
     * @return $this
     */
    public function setAutoDeleteCmr($auto_delete_cmr)
    {
        $this->container['auto_delete_cmr'] = $auto_delete_cmr;

        return $this;
    }

    /**
     * Gets auto_delete_cmr_days
     *
     * @return int
     */
    public function getAutoDeleteCmrDays()
    {
        return $this->container['auto_delete_cmr_days'];
    }

    /**
     * Sets auto_delete_cmr_days
     *
     * @param int $auto_delete_cmr_days When `auto_delete_cmr` function is 'true' this value will set the number of days before the auto deletion of cloud recordings.
     *
     * @return $this
     */
    public function setAutoDeleteCmrDays($auto_delete_cmr_days)
    {
        $this->container['auto_delete_cmr_days'] = $auto_delete_cmr_days;

        return $this;
    }

    /**
     * Gets recording_password_requirement
     *
     * @return \Weble\Zoom\Model\AccountSettingsRecordingRecordingPasswordRequirement
     */
    public function getRecordingPasswordRequirement()
    {
        return $this->container['recording_password_requirement'];
    }

    /**
     * Sets recording_password_requirement
     *
     * @param \Weble\Zoom\Model\AccountSettingsRecordingRecordingPasswordRequirement $recording_password_requirement recording_password_requirement
     *
     * @return $this
     */
    public function setRecordingPasswordRequirement($recording_password_requirement)
    {
        $this->container['recording_password_requirement'] = $recording_password_requirement;

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

