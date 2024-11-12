<?php
/**
 * TssV2TransactionsPost201ResponseEmbeddedProcessorInformation
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
 * TssV2TransactionsPost201ResponseEmbeddedProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsPost201ResponseEmbeddedProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsPost201Response__embedded_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'processor' => '\CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationProcessor',
        'approvalCode' => 'string',
        'retrievalReferenceNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'processor' => null,
        'approvalCode' => null,
        'retrievalReferenceNumber' => null
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
        'processor' => 'processor',
        'approvalCode' => 'approvalCode',
        'retrievalReferenceNumber' => 'retrievalReferenceNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'processor' => 'setProcessor',
        'approvalCode' => 'setApprovalCode',
        'retrievalReferenceNumber' => 'setRetrievalReferenceNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'processor' => 'getProcessor',
        'approvalCode' => 'getApprovalCode',
        'retrievalReferenceNumber' => 'getRetrievalReferenceNumber'
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
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        $this->container['approvalCode'] = isset($data['approvalCode']) ? $data['approvalCode'] : null;
        $this->container['retrievalReferenceNumber'] = isset($data['retrievalReferenceNumber']) ? $data['retrievalReferenceNumber'] : null;
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
     * Gets processor
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationProcessor
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationProcessor $processor
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets approvalCode
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->container['approvalCode'];
    }

    /**
     * Sets approvalCode
     * @param string $approvalCode Authorization code. Returned only when the processor returns this value.  The length of this value depends on your processor.  Returned by authorization service.  #### PIN debit Authorization code that is returned by the processor.  Returned by PIN debit credit.  #### Elavon Encrypted Account Number Program The returned value is OFFLINE.  #### TSYS Acquiring Solutions The returned value for a successful zero amount authorization is 000000.
     * @return $this
     */
    public function setApprovalCode($approvalCode)
    {
        $this->container['approvalCode'] = $approvalCode;

        return $this;
    }

    /**
     * Gets retrievalReferenceNumber
     * @return string
     */
    public function getRetrievalReferenceNumber()
    {
        return $this->container['retrievalReferenceNumber'];
    }

    /**
     * Sets retrievalReferenceNumber
     * @param string $retrievalReferenceNumber #### Ingenico ePayments Unique number that CyberSource generates to identify the transaction. You can use this value to identify transactions in the Ingenico ePayments Collections Report, which provides settlement information. Contact customer support for information about the report.  ### CyberSource through VisaNet Retrieval request number.
     * @return $this
     */
    public function setRetrievalReferenceNumber($retrievalReferenceNumber)
    {
        $this->container['retrievalReferenceNumber'] = $retrievalReferenceNumber;

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


