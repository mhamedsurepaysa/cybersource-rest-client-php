<?php
/**
 * PtsV2PaymentsPost201ResponseTokenInformation
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
 * PtsV2PaymentsPost201ResponseTokenInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseTokenInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_tokenInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'instrumentidentifierNew' => 'bool',
        'customer' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationCustomer',
        'paymentInstrument' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationPaymentInstrument',
        'shippingAddress' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationShippingAddress',
        'instrumentIdentifier' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationInstrumentIdentifier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'instrumentidentifierNew' => null,
        'customer' => null,
        'paymentInstrument' => null,
        'shippingAddress' => null,
        'instrumentIdentifier' => null
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
        'instrumentidentifierNew' => 'instrumentidentifierNew',
        'customer' => 'customer',
        'paymentInstrument' => 'paymentInstrument',
        'shippingAddress' => 'shippingAddress',
        'instrumentIdentifier' => 'instrumentIdentifier'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'instrumentidentifierNew' => 'setInstrumentidentifierNew',
        'customer' => 'setCustomer',
        'paymentInstrument' => 'setPaymentInstrument',
        'shippingAddress' => 'setShippingAddress',
        'instrumentIdentifier' => 'setInstrumentIdentifier'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'instrumentidentifierNew' => 'getInstrumentidentifierNew',
        'customer' => 'getCustomer',
        'paymentInstrument' => 'getPaymentInstrument',
        'shippingAddress' => 'getShippingAddress',
        'instrumentIdentifier' => 'getInstrumentIdentifier'
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
        $this->container['instrumentidentifierNew'] = isset($data['instrumentidentifierNew']) ? $data['instrumentidentifierNew'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['paymentInstrument'] = isset($data['paymentInstrument']) ? $data['paymentInstrument'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['instrumentIdentifier'] = isset($data['instrumentIdentifier']) ? $data['instrumentIdentifier'] : null;
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
     * Gets instrumentidentifierNew
     * @return bool
     */
    public function getInstrumentidentifierNew()
    {
        return $this->container['instrumentidentifierNew'];
    }

    /**
     * Sets instrumentidentifierNew
     * @param bool $instrumentidentifierNew A value of true means the card number or bank account used to create an Instrument Identifier was new and did not already exist in the token vault. A value of false means the card number or bank account used to create an Instrument Identifier already existed in the token vault.
     * @return $this
     */
    public function setInstrumentidentifierNew($instrumentidentifierNew)
    {
        $this->container['instrumentidentifierNew'] = $instrumentidentifierNew;

        return $this;
    }

    /**
     * Gets customer
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationCustomer $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets paymentInstrument
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationPaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->container['paymentInstrument'];
    }

    /**
     * Sets paymentInstrument
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationPaymentInstrument $paymentInstrument
     * @return $this
     */
    public function setPaymentInstrument($paymentInstrument)
    {
        $this->container['paymentInstrument'] = $paymentInstrument;

        return $this;
    }

    /**
     * Gets shippingAddress
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationShippingAddress $shippingAddress
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets instrumentIdentifier
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationInstrumentIdentifier
     */
    public function getInstrumentIdentifier()
    {
        return $this->container['instrumentIdentifier'];
    }

    /**
     * Sets instrumentIdentifier
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationInstrumentIdentifier $instrumentIdentifier
     * @return $this
     */
    public function setInstrumentIdentifier($instrumentIdentifier)
    {
        $this->container['instrumentIdentifier'] = $instrumentIdentifier;

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


