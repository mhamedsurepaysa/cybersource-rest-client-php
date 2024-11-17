<?php
/**
 * Ptsv2paymentsAcquirerInformation
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
 * Ptsv2paymentsAcquirerInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsAcquirerInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_acquirerInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acquirerBin' => 'string',
        'country' => 'string',
        'password' => 'string',
        'merchantId' => 'string',
        'acquirerMerchantId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acquirerBin' => null,
        'country' => null,
        'password' => null,
        'merchantId' => null,
        'acquirerMerchantId' => null
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
        'acquirerBin' => 'acquirerBin',
        'country' => 'country',
        'password' => 'password',
        'merchantId' => 'merchantId',
        'acquirerMerchantId' => 'acquirerMerchantId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'acquirerBin' => 'setAcquirerBin',
        'country' => 'setCountry',
        'password' => 'setPassword',
        'merchantId' => 'setMerchantId',
        'acquirerMerchantId' => 'setAcquirerMerchantId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'acquirerBin' => 'getAcquirerBin',
        'country' => 'getCountry',
        'password' => 'getPassword',
        'merchantId' => 'getMerchantId',
        'acquirerMerchantId' => 'getAcquirerMerchantId'
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
        $this->container['acquirerBin'] = isset($data['acquirerBin']) ? $data['acquirerBin'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
        $this->container['acquirerMerchantId'] = isset($data['acquirerMerchantId']) ? $data['acquirerMerchantId'] : null;
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
     * Gets acquirerBin
     * @return string
     */
    public function getAcquirerBin()
    {
        return $this->container['acquirerBin'];
    }

    /**
     * Sets acquirerBin
     * @param string $acquirerBin Acquirer bank ID number that  corresponds to a certificate that Cybersource already has.This ID has this format. 4XXXXX for Visa and 5XXXXX for Mastercard.
     * @return $this
     */
    public function setAcquirerBin($acquirerBin)
    {
        $this->container['acquirerBin'] = $acquirerBin;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Issuers need to be aware of the Acquirer's Country Code when the Acquirer country differs from the Merchant country and the Acquirer is in the EEA (European Economic Area).
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password Registered password for the Visa directory server.
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets merchantId
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     * @param string $merchantId Username for the visa directory server that is created when your acquirer sets up your account. This ID might be the same as your merchant ID. the username can be 15 or 23 characters.
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets acquirerMerchantId
     * @return string
     */
    public function getAcquirerMerchantId()
    {
        return $this->container['acquirerMerchantId'];
    }

    /**
     * Sets acquirerMerchantId
     * @param string $acquirerMerchantId Acquirer assigned merchant id. Check if your processor supports this field.
     * @return $this
     */
    public function setAcquirerMerchantId($acquirerMerchantId)
    {
        $this->container['acquirerMerchantId'] = $acquirerMerchantId;

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


