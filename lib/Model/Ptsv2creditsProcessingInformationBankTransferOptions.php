<?php
/**
 * Ptsv2creditsProcessingInformationBankTransferOptions
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
 * Ptsv2creditsProcessingInformationBankTransferOptions Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2creditsProcessingInformationBankTransferOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2credits_processingInformation_bankTransferOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customerMemo' => 'string',
        'secCode' => 'string',
        'terminalCity' => 'string',
        'terminalState' => 'string',
        'effectiveDate' => 'string',
        'partialPaymentId' => 'string',
        'settlementMethod' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customerMemo' => null,
        'secCode' => null,
        'terminalCity' => null,
        'terminalState' => null,
        'effectiveDate' => null,
        'partialPaymentId' => null,
        'settlementMethod' => null
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
        'customerMemo' => 'customerMemo',
        'secCode' => 'secCode',
        'terminalCity' => 'terminalCity',
        'terminalState' => 'terminalState',
        'effectiveDate' => 'effectiveDate',
        'partialPaymentId' => 'partialPaymentId',
        'settlementMethod' => 'settlementMethod'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customerMemo' => 'setCustomerMemo',
        'secCode' => 'setSecCode',
        'terminalCity' => 'setTerminalCity',
        'terminalState' => 'setTerminalState',
        'effectiveDate' => 'setEffectiveDate',
        'partialPaymentId' => 'setPartialPaymentId',
        'settlementMethod' => 'setSettlementMethod'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customerMemo' => 'getCustomerMemo',
        'secCode' => 'getSecCode',
        'terminalCity' => 'getTerminalCity',
        'terminalState' => 'getTerminalState',
        'effectiveDate' => 'getEffectiveDate',
        'partialPaymentId' => 'getPartialPaymentId',
        'settlementMethod' => 'getSettlementMethod'
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
        $this->container['customerMemo'] = isset($data['customerMemo']) ? $data['customerMemo'] : null;
        $this->container['secCode'] = isset($data['secCode']) ? $data['secCode'] : null;
        $this->container['terminalCity'] = isset($data['terminalCity']) ? $data['terminalCity'] : null;
        $this->container['terminalState'] = isset($data['terminalState']) ? $data['terminalState'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['partialPaymentId'] = isset($data['partialPaymentId']) ? $data['partialPaymentId'] : null;
        $this->container['settlementMethod'] = isset($data['settlementMethod']) ? $data['settlementMethod'] : null;
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
     * Gets customerMemo
     * @return string
     */
    public function getCustomerMemo()
    {
        return $this->container['customerMemo'];
    }

    /**
     * Sets customerMemo
     * @param string $customerMemo Payment related information.  This information is included on the customer's statement.
     * @return $this
     */
    public function setCustomerMemo($customerMemo)
    {
        $this->container['customerMemo'] = $customerMemo;

        return $this;
    }

    /**
     * Gets secCode
     * @return string
     */
    public function getSecCode()
    {
        return $this->container['secCode'];
    }

    /**
     * Sets secCode
     * @param string $secCode Specifies the authorization method for the transaction.  #### TeleCheck Accepts only the following values: - `ARC`: account receivable conversion - `CCD`: corporate cash disbursement - `POP`: point of purchase conversion - `PPD`: prearranged payment and deposit entry - `TEL`: telephone-initiated entry - `WEB`: internet-initiated entry
     * @return $this
     */
    public function setSecCode($secCode)
    {
        $this->container['secCode'] = $secCode;

        return $this;
    }

    /**
     * Gets terminalCity
     * @return string
     */
    public function getTerminalCity()
    {
        return $this->container['terminalCity'];
    }

    /**
     * Sets terminalCity
     * @param string $terminalCity City in which the terminal is located. If more than four alphanumeric characters are submitted, the transaction will be declined.  You cannot include any special characters.
     * @return $this
     */
    public function setTerminalCity($terminalCity)
    {
        $this->container['terminalCity'] = $terminalCity;

        return $this;
    }

    /**
     * Gets terminalState
     * @return string
     */
    public function getTerminalState()
    {
        return $this->container['terminalState'];
    }

    /**
     * Sets terminalState
     * @param string $terminalState State in which the terminal is located. If more than two alphanumeric characters are submitted, the transaction will be declined.  You cannot include any special characters.
     * @return $this
     */
    public function setTerminalState($terminalState)
    {
        $this->container['terminalState'] = $terminalState;

        return $this;
    }

    /**
     * Gets effectiveDate
     * @return string
     */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
     * Sets effectiveDate
     * @param string $effectiveDate Effective date for the transaction. The effective date must be within 45 days of the current day. If you do not include this value, CyberSource sets the effective date to the next business day.  Format: `MMDDYYYY`  Supported only for the CyberSource ACH Service.
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;

        return $this;
    }

    /**
     * Gets partialPaymentId
     * @return string
     */
    public function getPartialPaymentId()
    {
        return $this->container['partialPaymentId'];
    }

    /**
     * Sets partialPaymentId
     * @param string $partialPaymentId Identifier for a partial payment or partial credit.  The value for each debit request or credit request must be unique within the scope of the order.
     * @return $this
     */
    public function setPartialPaymentId($partialPaymentId)
    {
        $this->container['partialPaymentId'] = $partialPaymentId;

        return $this;
    }

    /**
     * Gets settlementMethod
     * @return string
     */
    public function getSettlementMethod()
    {
        return $this->container['settlementMethod'];
    }

    /**
     * Sets settlementMethod
     * @param string $settlementMethod Method used for settlement.  Possible values: - `A`: Automated Clearing House (default for credits and for transactions using Canadian dollars) - `F`: Facsimile draft (U.S. dollars only) - `B`: Best possible (U.S. dollars only) (default if the field has not already been configured for your merchant ID)
     * @return $this
     */
    public function setSettlementMethod($settlementMethod)
    {
        $this->container['settlementMethod'] = $settlementMethod;

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


