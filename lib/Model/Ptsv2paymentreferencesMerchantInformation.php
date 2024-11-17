<?php
/**
 * Ptsv2paymentreferencesMerchantInformation
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
 * Ptsv2paymentreferencesMerchantInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentreferencesMerchantInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentreferences_merchantInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantDescriptor' => '\CyberSource\Model\Ptsv2paymentsMerchantInformationMerchantDescriptor',
        'cancelUrl' => 'string',
        'successUrl' => 'string',
        'failureUrl' => 'string',
        'noteToBuyer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantDescriptor' => null,
        'cancelUrl' => null,
        'successUrl' => null,
        'failureUrl' => null,
        'noteToBuyer' => null
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
        'merchantDescriptor' => 'merchantDescriptor',
        'cancelUrl' => 'cancelUrl',
        'successUrl' => 'successUrl',
        'failureUrl' => 'failureUrl',
        'noteToBuyer' => 'noteToBuyer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantDescriptor' => 'setMerchantDescriptor',
        'cancelUrl' => 'setCancelUrl',
        'successUrl' => 'setSuccessUrl',
        'failureUrl' => 'setFailureUrl',
        'noteToBuyer' => 'setNoteToBuyer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantDescriptor' => 'getMerchantDescriptor',
        'cancelUrl' => 'getCancelUrl',
        'successUrl' => 'getSuccessUrl',
        'failureUrl' => 'getFailureUrl',
        'noteToBuyer' => 'getNoteToBuyer'
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
        $this->container['merchantDescriptor'] = isset($data['merchantDescriptor']) ? $data['merchantDescriptor'] : null;
        $this->container['cancelUrl'] = isset($data['cancelUrl']) ? $data['cancelUrl'] : null;
        $this->container['successUrl'] = isset($data['successUrl']) ? $data['successUrl'] : null;
        $this->container['failureUrl'] = isset($data['failureUrl']) ? $data['failureUrl'] : null;
        $this->container['noteToBuyer'] = isset($data['noteToBuyer']) ? $data['noteToBuyer'] : null;
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
     * Gets merchantDescriptor
     * @return \CyberSource\Model\Ptsv2paymentsMerchantInformationMerchantDescriptor
     */
    public function getMerchantDescriptor()
    {
        return $this->container['merchantDescriptor'];
    }

    /**
     * Sets merchantDescriptor
     * @param \CyberSource\Model\Ptsv2paymentsMerchantInformationMerchantDescriptor $merchantDescriptor
     * @return $this
     */
    public function setMerchantDescriptor($merchantDescriptor)
    {
        $this->container['merchantDescriptor'] = $merchantDescriptor;

        return $this;
    }

    /**
     * Gets cancelUrl
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancelUrl'];
    }

    /**
     * Sets cancelUrl
     * @param string $cancelUrl customer would be redirected to this url based on the decision of the transaction
     * @return $this
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->container['cancelUrl'] = $cancelUrl;

        return $this;
    }

    /**
     * Gets successUrl
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['successUrl'];
    }

    /**
     * Sets successUrl
     * @param string $successUrl customer would be redirected to this url based on the decision of the transaction
     * @return $this
     */
    public function setSuccessUrl($successUrl)
    {
        $this->container['successUrl'] = $successUrl;

        return $this;
    }

    /**
     * Gets failureUrl
     * @return string
     */
    public function getFailureUrl()
    {
        return $this->container['failureUrl'];
    }

    /**
     * Sets failureUrl
     * @param string $failureUrl customer would be redirected to this url based on the decision of the transaction
     * @return $this
     */
    public function setFailureUrl($failureUrl)
    {
        $this->container['failureUrl'] = $failureUrl;

        return $this;
    }

    /**
     * Gets noteToBuyer
     * @return string
     */
    public function getNoteToBuyer()
    {
        return $this->container['noteToBuyer'];
    }

    /**
     * Sets noteToBuyer
     * @param string $noteToBuyer Free-form text field.
     * @return $this
     */
    public function setNoteToBuyer($noteToBuyer)
    {
        $this->container['noteToBuyer'] = $noteToBuyer;

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


