<?php
/**
 * Boardingv1registrationsOrganizationInformation
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
 * Boardingv1registrationsOrganizationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Boardingv1registrationsOrganizationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'boardingv1registrations_organizationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organizationId' => 'string',
        'parentOrganizationId' => 'string',
        'childOrganizations' => 'string[]',
        'type' => 'string',
        'status' => 'string',
        'configurable' => 'bool',
        'businessInformation' => '\CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformation',
        'kYC' => '\CyberSource\Model\Boardingv1registrationsOrganizationInformationKYC',
        'owners' => '\CyberSource\Model\Boardingv1registrationsOrganizationInformationOwners[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organizationId' => null,
        'parentOrganizationId' => null,
        'childOrganizations' => null,
        'type' => null,
        'status' => null,
        'configurable' => null,
        'businessInformation' => null,
        'kYC' => null,
        'owners' => null
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
        'organizationId' => 'organizationId',
        'parentOrganizationId' => 'parentOrganizationId',
        'childOrganizations' => 'childOrganizations',
        'type' => 'type',
        'status' => 'status',
        'configurable' => 'configurable',
        'businessInformation' => 'businessInformation',
        'kYC' => 'KYC',
        'owners' => 'owners'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'organizationId' => 'setOrganizationId',
        'parentOrganizationId' => 'setParentOrganizationId',
        'childOrganizations' => 'setChildOrganizations',
        'type' => 'setType',
        'status' => 'setStatus',
        'configurable' => 'setConfigurable',
        'businessInformation' => 'setBusinessInformation',
        'kYC' => 'setKYC',
        'owners' => 'setOwners'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'organizationId' => 'getOrganizationId',
        'parentOrganizationId' => 'getParentOrganizationId',
        'childOrganizations' => 'getChildOrganizations',
        'type' => 'getType',
        'status' => 'getStatus',
        'configurable' => 'getConfigurable',
        'businessInformation' => 'getBusinessInformation',
        'kYC' => 'getKYC',
        'owners' => 'getOwners'
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['parentOrganizationId'] = isset($data['parentOrganizationId']) ? $data['parentOrganizationId'] : null;
        $this->container['childOrganizations'] = isset($data['childOrganizations']) ? $data['childOrganizations'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['configurable'] = isset($data['configurable']) ? $data['configurable'] : false;
        $this->container['businessInformation'] = isset($data['businessInformation']) ? $data['businessInformation'] : null;
        $this->container['kYC'] = isset($data['kYC']) ? $data['kYC'] : null;
        $this->container['owners'] = isset($data['owners']) ? $data['owners'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['businessInformation'] === null) {
            $invalid_properties[] = "'businessInformation' can't be null";
        }
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

        if ($this->container['businessInformation'] === null) {
            return false;
        }
        return true;
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
     * @param string $organizationId
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets parentOrganizationId
     * @return string
     */
    public function getParentOrganizationId()
    {
        return $this->container['parentOrganizationId'];
    }

    /**
     * Sets parentOrganizationId
     * @param string $parentOrganizationId This field is required for Organization Types: MERCHANT, TRANSACTING
     * @return $this
     */
    public function setParentOrganizationId($parentOrganizationId)
    {
        $this->container['parentOrganizationId'] = $parentOrganizationId;

        return $this;
    }

    /**
     * Gets childOrganizations
     * @return string[]
     */
    public function getChildOrganizations()
    {
        return $this->container['childOrganizations'];
    }

    /**
     * Sets childOrganizations
     * @param string[] $childOrganizations
     * @return $this
     */
    public function setChildOrganizations($childOrganizations)
    {
        $this->container['childOrganizations'] = $childOrganizations;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Determines the type of organization in the hirarchy that this registration will use to onboard this Organization Possible Values:   - 'TRANSACTING'   - 'STRUCTURAL'   - 'MERCHANT'
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $status Determines the status that the organization will be after being onboarded Possible Values:             - 'LIVE'             - 'TEST'             - 'DRAFT'
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets configurable
     * @return bool
     */
    public function getConfigurable()
    {
        return $this->container['configurable'];
    }

    /**
     * Sets configurable
     * @param bool $configurable This denotes the one organization, with exception to the TRANSACTING types, that is allowed to be used for configuration purposes against products.  Eventually this field will be deprecated and all organizations will be allowed for product configuration.
     * @return $this
     */
    public function setConfigurable($configurable)
    {
        $this->container['configurable'] = $configurable;

        return $this;
    }

    /**
     * Gets businessInformation
     * @return \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformation
     */
    public function getBusinessInformation()
    {
        return $this->container['businessInformation'];
    }

    /**
     * Sets businessInformation
     * @param \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformation $businessInformation
     * @return $this
     */
    public function setBusinessInformation($businessInformation)
    {
        $this->container['businessInformation'] = $businessInformation;

        return $this;
    }

    /**
     * Gets kYC
     * @return \CyberSource\Model\Boardingv1registrationsOrganizationInformationKYC
     */
    public function getKYC()
    {
        return $this->container['kYC'];
    }

    /**
     * Sets kYC
     * @param \CyberSource\Model\Boardingv1registrationsOrganizationInformationKYC $kYC
     * @return $this
     */
    public function setKYC($kYC)
    {
        $this->container['kYC'] = $kYC;

        return $this;
    }

    /**
     * Gets owners
     * @return \CyberSource\Model\Boardingv1registrationsOrganizationInformationOwners[]
     */
    public function getOwners()
    {
        return $this->container['owners'];
    }

    /**
     * Sets owners
     * @param \CyberSource\Model\Boardingv1registrationsOrganizationInformationOwners[] $owners
     * @return $this
     */
    public function setOwners($owners)
    {
        $this->container['owners'] = $owners;

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


