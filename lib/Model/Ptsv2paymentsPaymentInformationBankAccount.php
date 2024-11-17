<?php
/**
 * Ptsv2paymentsPaymentInformationBankAccount
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
 * Ptsv2paymentsPaymentInformationBankAccount Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsPaymentInformationBankAccount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_paymentInformation_bank_account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'number' => 'string',
        'encoderId' => 'string',
        'checkNumber' => 'string',
        'checkImageReferenceNumber' => 'string',
        'iban' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'number' => null,
        'encoderId' => null,
        'checkNumber' => null,
        'checkImageReferenceNumber' => null,
        'iban' => null
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
        'type' => 'type',
        'number' => 'number',
        'encoderId' => 'encoderId',
        'checkNumber' => 'checkNumber',
        'checkImageReferenceNumber' => 'checkImageReferenceNumber',
        'iban' => 'iban'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'number' => 'setNumber',
        'encoderId' => 'setEncoderId',
        'checkNumber' => 'setCheckNumber',
        'checkImageReferenceNumber' => 'setCheckImageReferenceNumber',
        'iban' => 'setIban'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'number' => 'getNumber',
        'encoderId' => 'getEncoderId',
        'checkNumber' => 'getCheckNumber',
        'checkImageReferenceNumber' => 'getCheckImageReferenceNumber',
        'iban' => 'getIban'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['encoderId'] = isset($data['encoderId']) ? $data['encoderId'] : null;
        $this->container['checkNumber'] = isset($data['checkNumber']) ? $data['checkNumber'] : null;
        $this->container['checkImageReferenceNumber'] = isset($data['checkImageReferenceNumber']) ? $data['checkImageReferenceNumber'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Account type.  Possible values:  - **C**: Checking.  - **G**: General ledger. This value is supported only on Wells Fargo ACH.  - **S**: Savings (U.S. dollars only).  - **X**: Corporate checking (U.S. dollars only).
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number Account number.  When processing encoded account numbers, use this field for the encoded account number.
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets encoderId
     * @return string
     */
    public function getEncoderId()
    {
        return $this->container['encoderId'];
    }

    /**
     * Sets encoderId
     * @param string $encoderId Identifier for the bank that provided the customer's encoded account number.  To obtain the bank identifier, contact your processor.
     * @return $this
     */
    public function setEncoderId($encoderId)
    {
        $this->container['encoderId'] = $encoderId;

        return $this;
    }

    /**
     * Gets checkNumber
     * @return string
     */
    public function getCheckNumber()
    {
        return $this->container['checkNumber'];
    }

    /**
     * Sets checkNumber
     * @param string $checkNumber Check number.  Chase Paymentech Solutions - Optional. CyberSource ACH Service - Not used. RBS WorldPay Atlanta - Optional on debits. Required on credits. TeleCheck - Strongly recommended on debit requests. Optional on credits.
     * @return $this
     */
    public function setCheckNumber($checkNumber)
    {
        $this->container['checkNumber'] = $checkNumber;

        return $this;
    }

    /**
     * Gets checkImageReferenceNumber
     * @return string
     */
    public function getCheckImageReferenceNumber()
    {
        return $this->container['checkImageReferenceNumber'];
    }

    /**
     * Sets checkImageReferenceNumber
     * @param string $checkImageReferenceNumber Image reference number associated with the check. You cannot include any special characters.
     * @return $this
     */
    public function setCheckImageReferenceNumber($checkImageReferenceNumber)
    {
        $this->container['checkImageReferenceNumber'] = $checkImageReferenceNumber;

        return $this;
    }

    /**
     * Gets iban
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     * @param string $iban International Bank Account Number (IBAN) for the bank account. For some countries you can provide this number instead of the traditional bank account information. You can use this field only when scoring a direct debit transaction.
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

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


