<?php
/**
 * Boardingv1registrationsRegistrationInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Boardingv1registrationsRegistrationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Boardingv1registrationsRegistrationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'boardingv1registrations_registrationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'boardingRegistrationId' => 'string',
        'submitTimeUtc' => '\DateTime',
        'status' => 'string',
        'boardingPackageId' => 'string',
        'boardingFlow' => 'string',
        'mode' => 'string',
        'salesRepId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'boardingRegistrationId' => null,
        'submitTimeUtc' => 'date-time',
        'status' => null,
        'boardingPackageId' => null,
        'boardingFlow' => null,
        'mode' => null,
        'salesRepId' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'boardingRegistrationId' => 'boardingRegistrationId',
        'submitTimeUtc' => 'submitTimeUtc',
        'status' => 'status',
        'boardingPackageId' => 'boardingPackageId',
        'boardingFlow' => 'boardingFlow',
        'mode' => 'mode',
        'salesRepId' => 'salesRepId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'boardingRegistrationId' => 'setBoardingRegistrationId',
        'submitTimeUtc' => 'setSubmitTimeUtc',
        'status' => 'setStatus',
        'boardingPackageId' => 'setBoardingPackageId',
        'boardingFlow' => 'setBoardingFlow',
        'mode' => 'setMode',
        'salesRepId' => 'setSalesRepId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'boardingRegistrationId' => 'getBoardingRegistrationId',
        'submitTimeUtc' => 'getSubmitTimeUtc',
        'status' => 'getStatus',
        'boardingPackageId' => 'getBoardingPackageId',
        'boardingFlow' => 'getBoardingFlow',
        'mode' => 'getMode',
        'salesRepId' => 'getSalesRepId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['boardingRegistrationId'] = isset($data['boardingRegistrationId']) ? $data['boardingRegistrationId'] : null;
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['boardingPackageId'] = isset($data['boardingPackageId']) ? $data['boardingPackageId'] : null;
        $this->container['boardingFlow'] = isset($data['boardingFlow']) ? $data['boardingFlow'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['salesRepId'] = isset($data['salesRepId']) ? $data['salesRepId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets boardingRegistrationId
     * @return string
     */
    public function getBoardingRegistrationId()
    {
        return $this->container['boardingRegistrationId'];
    }

    /**
     * Sets boardingRegistrationId
     * @param string $boardingRegistrationId
     * @return $this
     */
    public function setBoardingRegistrationId($boardingRegistrationId)
    {
        $this->container['boardingRegistrationId'] = $boardingRegistrationId;

        return $this;
    }

    /**
     * Gets submitTimeUtc
     * @return \DateTime
     */
    public function getSubmitTimeUtc()
    {
        return $this->container['submitTimeUtc'];
    }

    /**
     * Sets submitTimeUtc
     * @param \DateTime $submitTimeUtc Time of request in UTC. `Format: YYYY-MM-DDThh:mm:ssZ`  Example 2016-08-11T22:47:57Z equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC.
     * @return $this
     */
    public function setSubmitTimeUtc($submitTimeUtc)
    {
        $this->container['submitTimeUtc'] = $submitTimeUtc;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of Registration request Possible Values:   - 'PROCESSING': This status is for Registrations that are still in Progress, you can get the latest status by calling the GET endpoint using the Registration Id   - 'SUCCESS': This status is for Registrations that were successfull on every step of the on boarding process.   - 'FAILURE': This status is for Registrations that fail before the Organization was created; please refer to the details section in the reponse for more information.   - 'PARTIAL': This status is for Registrations that created the Organization successfully but fail in at least on step while configuring it; please refer to the details section in the response for more information.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets boardingPackageId
     * @return string
     */
    public function getBoardingPackageId()
    {
        return $this->container['boardingPackageId'];
    }

    /**
     * Sets boardingPackageId
     * @param string $boardingPackageId
     * @return $this
     */
    public function setBoardingPackageId($boardingPackageId)
    {
        $this->container['boardingPackageId'] = $boardingPackageId;

        return $this;
    }

    /**
     * Gets boardingFlow
     * @return string
     */
    public function getBoardingFlow()
    {
        return $this->container['boardingFlow'];
    }

    /**
     * Sets boardingFlow
     * @param string $boardingFlow Determines the boarding flow for this registration. Possible Values:   - 'ENTERPRISE'   - 'SMB'   - 'ADDPRODUCT'
     * @return $this
     */
    public function setBoardingFlow($boardingFlow)
    {
        $this->container['boardingFlow'] = $boardingFlow;

        return $this;
    }

    /**
     * Gets mode
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string $mode In case mode is not provided the API will use COMPLETE as default Possible Values:   - 'COMPLETE'   - 'PARTIAL'
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets salesRepId
     * @return string
     */
    public function getSalesRepId()
    {
        return $this->container['salesRepId'];
    }

    /**
     * Sets salesRepId
     * @param string $salesRepId
     * @return $this
     */
    public function setSalesRepId($salesRepId)
    {
        $this->container['salesRepId'] = $salesRepId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


