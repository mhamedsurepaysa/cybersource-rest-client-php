<?php
/**
 * Kmsegressv2keysasymKeyInformation
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
 * Kmsegressv2keysasymKeyInformation Class Doc Comment
 *
 * @category    Class
 * @description Egress Asymmetric  Key Information Request
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Kmsegressv2keysasymKeyInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'kmsegressv2keysasym_keyInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'provider' => 'string',
        'tenant' => 'string',
        'keyType' => 'string',
        'organizationId' => 'string',
        'pub' => 'string',
        'keyId' => 'string',
        'pvt' => 'string',
        'status' => 'string',
        'expiryDuration' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'provider' => null,
        'tenant' => null,
        'keyType' => null,
        'organizationId' => null,
        'pub' => null,
        'keyId' => null,
        'pvt' => null,
        'status' => null,
        'expiryDuration' => null
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
        'provider' => 'provider',
        'tenant' => 'tenant',
        'keyType' => 'keyType',
        'organizationId' => 'organizationId',
        'pub' => 'pub',
        'keyId' => 'keyId',
        'pvt' => 'pvt',
        'status' => 'status',
        'expiryDuration' => 'expiryDuration'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'provider' => 'setProvider',
        'tenant' => 'setTenant',
        'keyType' => 'setKeyType',
        'organizationId' => 'setOrganizationId',
        'pub' => 'setPub',
        'keyId' => 'setKeyId',
        'pvt' => 'setPvt',
        'status' => 'setStatus',
        'expiryDuration' => 'setExpiryDuration'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'provider' => 'getProvider',
        'tenant' => 'getTenant',
        'keyType' => 'getKeyType',
        'organizationId' => 'getOrganizationId',
        'pub' => 'getPub',
        'keyId' => 'getKeyId',
        'pvt' => 'getPvt',
        'status' => 'getStatus',
        'expiryDuration' => 'getExpiryDuration'
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
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['tenant'] = isset($data['tenant']) ? $data['tenant'] : null;
        $this->container['keyType'] = isset($data['keyType']) ? $data['keyType'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['pub'] = isset($data['pub']) ? $data['pub'] : null;
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['pvt'] = isset($data['pvt']) ? $data['pvt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['expiryDuration'] = isset($data['expiryDuration']) ? $data['expiryDuration'] : null;
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
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider Provider name
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets tenant
     * @return string
     */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
     * Sets tenant
     * @param string $tenant Tenant name
     * @return $this
     */
    public function setTenant($tenant)
    {
        $this->container['tenant'] = $tenant;

        return $this;
    }

    /**
     * Gets keyType
     * @return string
     */
    public function getKeyType()
    {
        return $this->container['keyType'];
    }

    /**
     * Sets keyType
     * @param string $keyType Type of the key
     * @return $this
     */
    public function setKeyType($keyType)
    {
        $this->container['keyType'] = $keyType;

        return $this;
    }

    /**
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId Organization Id
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets pub
     * @return string
     */
    public function getPub()
    {
        return $this->container['pub'];
    }

    /**
     * Sets pub
     * @param string $pub Public certificate with only base64 encoded payload and not the header (BEGIN CERTIFICATE) and footer (END CERTIFICATE)
     * @return $this
     */
    public function setPub($pub)
    {
        $this->container['pub'] = $pub;

        return $this;
    }

    /**
     * Gets keyId
     * @return string
     */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
     * Sets keyId
     * @param string $keyId Key Serial Number
     * @return $this
     */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;

        return $this;
    }

    /**
     * Gets pvt
     * @return string
     */
    public function getPvt()
    {
        return $this->container['pvt'];
    }

    /**
     * Sets pvt
     * @param string $pvt Private certificate with only base64 encoded payload and not header (BEGIN CERTIFICATE) and footer (END CERTIFICATE)
     * @return $this
     */
    public function setPvt($pvt)
    {
        $this->container['pvt'] = $pvt;

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
     * @param string $status The status of the key
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets expiryDuration
     * @return string
     */
    public function getExpiryDuration()
    {
        return $this->container['expiryDuration'];
    }

    /**
     * Sets expiryDuration
     * @param string $expiryDuration Key expiry duration in days
     * @return $this
     */
    public function setExpiryDuration($expiryDuration)
    {
        $this->container['expiryDuration'] = $expiryDuration;

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


