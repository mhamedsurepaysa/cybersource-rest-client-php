<?php
/**
 * Boardingv1registrationsOrganizationInformationKYCDepositBankAccount
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
 * Boardingv1registrationsOrganizationInformationKYCDepositBankAccount Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Boardingv1registrationsOrganizationInformationKYCDepositBankAccount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'boardingv1registrations_organizationInformation_KYC_depositBankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountHolderName' => 'string',
        'accountType' => 'string',
        'accountRoutingNumber' => 'string',
        'accountNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountHolderName' => null,
        'accountType' => null,
        'accountRoutingNumber' => null,
        'accountNumber' => null
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
        'accountHolderName' => 'accountHolderName',
        'accountType' => 'accountType',
        'accountRoutingNumber' => 'accountRoutingNumber',
        'accountNumber' => 'accountNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accountHolderName' => 'setAccountHolderName',
        'accountType' => 'setAccountType',
        'accountRoutingNumber' => 'setAccountRoutingNumber',
        'accountNumber' => 'setAccountNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accountHolderName' => 'getAccountHolderName',
        'accountType' => 'getAccountType',
        'accountRoutingNumber' => 'getAccountRoutingNumber',
        'accountNumber' => 'getAccountNumber'
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
        $this->container['accountHolderName'] = isset($data['accountHolderName']) ? $data['accountHolderName'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['accountRoutingNumber'] = isset($data['accountRoutingNumber']) ? $data['accountRoutingNumber'] : null;
        $this->container['accountNumber'] = isset($data['accountNumber']) ? $data['accountNumber'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['accountHolderName'] === null) {
            $invalid_properties[] = "'accountHolderName' can't be null";
        }
        if ($this->container['accountType'] === null) {
            $invalid_properties[] = "'accountType' can't be null";
        }
        if ($this->container['accountRoutingNumber'] === null) {
            $invalid_properties[] = "'accountRoutingNumber' can't be null";
        }
        if ($this->container['accountNumber'] === null) {
            $invalid_properties[] = "'accountNumber' can't be null";
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

        if ($this->container['accountHolderName'] === null) {
            return false;
        }
        if ($this->container['accountType'] === null) {
            return false;
        }
        if ($this->container['accountRoutingNumber'] === null) {
            return false;
        }
        if ($this->container['accountNumber'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets accountHolderName
     * @return string
     */
    public function getAccountHolderName()
    {
        return $this->container['accountHolderName'];
    }

    /**
     * Sets accountHolderName
     * @param string $accountHolderName
     * @return $this
     */
    public function setAccountHolderName($accountHolderName)
    {
        $this->container['accountHolderName'] = $accountHolderName;

        return $this;
    }

    /**
     * Gets accountType
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     * @param string $accountType Possible values: - checking - savings - corporatechecking - corporatesavings
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets accountRoutingNumber
     * @return string
     */
    public function getAccountRoutingNumber()
    {
        return $this->container['accountRoutingNumber'];
    }

    /**
     * Sets accountRoutingNumber
     * @param string $accountRoutingNumber
     * @return $this
     */
    public function setAccountRoutingNumber($accountRoutingNumber)
    {
        $this->container['accountRoutingNumber'] = $accountRoutingNumber;

        return $this;
    }

    /**
     * Gets accountNumber
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['accountNumber'];
    }

    /**
     * Sets accountNumber
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->container['accountNumber'] = $accountNumber;

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


