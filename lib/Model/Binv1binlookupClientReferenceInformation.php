<?php
/**
 * Binv1binlookupClientReferenceInformation
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
 * Binv1binlookupClientReferenceInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Binv1binlookupClientReferenceInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'binv1binlookup_clientReferenceInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'partner' => '\CyberSource\Model\Riskv1decisionsClientReferenceInformationPartner',
        'applicationName' => 'string',
        'applicationVersion' => 'string',
        'applicationUser' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'partner' => null,
        'applicationName' => null,
        'applicationVersion' => null,
        'applicationUser' => null
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
        'partner' => 'partner',
        'applicationName' => 'applicationName',
        'applicationVersion' => 'applicationVersion',
        'applicationUser' => 'applicationUser'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'partner' => 'setPartner',
        'applicationName' => 'setApplicationName',
        'applicationVersion' => 'setApplicationVersion',
        'applicationUser' => 'setApplicationUser'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'partner' => 'getPartner',
        'applicationName' => 'getApplicationName',
        'applicationVersion' => 'getApplicationVersion',
        'applicationUser' => 'getApplicationUser'
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
     * @var
     */
    protected $container = [];

    /**
     * Constructor
     * @param  $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['applicationVersion'] = isset($data['applicationVersion']) ? $data['applicationVersion'] : null;
        $this->container['applicationUser'] = isset($data['applicationUser']) ? $data['applicationUser'] : null;
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
     * Gets partner
     * @return \CyberSource\Model\Riskv1decisionsClientReferenceInformationPartner
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \CyberSource\Model\Riskv1decisionsClientReferenceInformationPartner $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets applicationName
     * @return string
     */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
     * Sets applicationName
     * @param string $applicationName The name of the Connection Method client (such as Virtual Terminal or SOAP Toolkit API) that the merchant uses to send a transaction request to CyberSource.
     * @return $this
     */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;

        return $this;
    }

    /**
     * Gets applicationVersion
     * @return string
     */
    public function getApplicationVersion()
    {
        return $this->container['applicationVersion'];
    }

    /**
     * Sets applicationVersion
     * @param string $applicationVersion Version of the CyberSource application or integration used for a transaction.
     * @return $this
     */
    public function setApplicationVersion($applicationVersion)
    {
        $this->container['applicationVersion'] = $applicationVersion;

        return $this;
    }

    /**
     * Gets applicationUser
     * @return string
     */
    public function getApplicationUser()
    {
        return $this->container['applicationUser'];
    }

    /**
     * Sets applicationUser
     * @param string $applicationUser The entity that is responsible for running the transaction and submitting the processing request to CyberSource. This could be a person, a system, or a connection method.
     * @return $this
     */
    public function setApplicationUser($applicationUser)
    {
        $this->container['applicationUser'] = $applicationUser;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param     $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
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


