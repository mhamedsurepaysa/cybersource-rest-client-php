<?php
/**
 * Ptsv2paymentsPointOfSaleInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
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
 * Ptsv2paymentsPointOfSaleInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsPointOfSaleInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_pointOfSaleInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminalId' => 'string',
        'terminalSerialNumber' => 'string',
        'laneNumber' => 'string',
        'cardPresent' => 'bool',
        'catLevel' => 'int',
        'entryMode' => 'string',
        'terminalCapability' => 'int',
        'pinEntryCapability' => 'int',
        'operatingEnvironment' => 'string',
        'emv' => '\CyberSource\Model\Ptsv2paymentsPointOfSaleInformationEmv',
        'amexCapnData' => 'string',
        'trackData' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminalId' => null,
        'terminalSerialNumber' => null,
        'laneNumber' => null,
        'cardPresent' => null,
        'catLevel' => null,
        'entryMode' => null,
        'terminalCapability' => null,
        'pinEntryCapability' => null,
        'operatingEnvironment' => null,
        'emv' => null,
        'amexCapnData' => null,
        'trackData' => null
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
        'terminalId' => 'terminalId',
        'terminalSerialNumber' => 'terminalSerialNumber',
        'laneNumber' => 'laneNumber',
        'cardPresent' => 'cardPresent',
        'catLevel' => 'catLevel',
        'entryMode' => 'entryMode',
        'terminalCapability' => 'terminalCapability',
        'pinEntryCapability' => 'pinEntryCapability',
        'operatingEnvironment' => 'operatingEnvironment',
        'emv' => 'emv',
        'amexCapnData' => 'amexCapnData',
        'trackData' => 'trackData'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'terminalId' => 'setTerminalId',
        'terminalSerialNumber' => 'setTerminalSerialNumber',
        'laneNumber' => 'setLaneNumber',
        'cardPresent' => 'setCardPresent',
        'catLevel' => 'setCatLevel',
        'entryMode' => 'setEntryMode',
        'terminalCapability' => 'setTerminalCapability',
        'pinEntryCapability' => 'setPinEntryCapability',
        'operatingEnvironment' => 'setOperatingEnvironment',
        'emv' => 'setEmv',
        'amexCapnData' => 'setAmexCapnData',
        'trackData' => 'setTrackData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'terminalId' => 'getTerminalId',
        'terminalSerialNumber' => 'getTerminalSerialNumber',
        'laneNumber' => 'getLaneNumber',
        'cardPresent' => 'getCardPresent',
        'catLevel' => 'getCatLevel',
        'entryMode' => 'getEntryMode',
        'terminalCapability' => 'getTerminalCapability',
        'pinEntryCapability' => 'getPinEntryCapability',
        'operatingEnvironment' => 'getOperatingEnvironment',
        'emv' => 'getEmv',
        'amexCapnData' => 'getAmexCapnData',
        'trackData' => 'getTrackData'
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
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['terminalSerialNumber'] = isset($data['terminalSerialNumber']) ? $data['terminalSerialNumber'] : null;
        $this->container['laneNumber'] = isset($data['laneNumber']) ? $data['laneNumber'] : null;
        $this->container['cardPresent'] = isset($data['cardPresent']) ? $data['cardPresent'] : null;
        $this->container['catLevel'] = isset($data['catLevel']) ? $data['catLevel'] : null;
        $this->container['entryMode'] = isset($data['entryMode']) ? $data['entryMode'] : null;
        $this->container['terminalCapability'] = isset($data['terminalCapability']) ? $data['terminalCapability'] : null;
        $this->container['pinEntryCapability'] = isset($data['pinEntryCapability']) ? $data['pinEntryCapability'] : null;
        $this->container['operatingEnvironment'] = isset($data['operatingEnvironment']) ? $data['operatingEnvironment'] : null;
        $this->container['emv'] = isset($data['emv']) ? $data['emv'] : null;
        $this->container['amexCapnData'] = isset($data['amexCapnData']) ? $data['amexCapnData'] : null;
        $this->container['trackData'] = isset($data['trackData']) ? $data['trackData'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['terminalId']) && (strlen($this->container['terminalId']) > 8)) {
            $invalid_properties[] = "invalid value for 'terminalId', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['laneNumber']) && (strlen($this->container['laneNumber']) > 8)) {
            $invalid_properties[] = "invalid value for 'laneNumber', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['catLevel']) && ($this->container['catLevel'] > 9)) {
            $invalid_properties[] = "invalid value for 'catLevel', must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['catLevel']) && ($this->container['catLevel'] < 1)) {
            $invalid_properties[] = "invalid value for 'catLevel', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['entryMode']) && (strlen($this->container['entryMode']) > 11)) {
            $invalid_properties[] = "invalid value for 'entryMode', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['terminalCapability']) && ($this->container['terminalCapability'] > 5)) {
            $invalid_properties[] = "invalid value for 'terminalCapability', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['terminalCapability']) && ($this->container['terminalCapability'] < 1)) {
            $invalid_properties[] = "invalid value for 'terminalCapability', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['pinEntryCapability']) && ($this->container['pinEntryCapability'] > 1)) {
            $invalid_properties[] = "invalid value for 'pinEntryCapability', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['pinEntryCapability']) && ($this->container['pinEntryCapability'] < 1)) {
            $invalid_properties[] = "invalid value for 'pinEntryCapability', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['operatingEnvironment']) && (strlen($this->container['operatingEnvironment']) > 1)) {
            $invalid_properties[] = "invalid value for 'operatingEnvironment', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['amexCapnData']) && (strlen($this->container['amexCapnData']) > 12)) {
            $invalid_properties[] = "invalid value for 'amexCapnData', the character length must be smaller than or equal to 12.";
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

        if (strlen($this->container['terminalId']) > 8) {
            return false;
        }
        if (strlen($this->container['laneNumber']) > 8) {
            return false;
        }
        if ($this->container['catLevel'] > 9) {
            return false;
        }
        if ($this->container['catLevel'] < 1) {
            return false;
        }
        if (strlen($this->container['entryMode']) > 11) {
            return false;
        }
        if ($this->container['terminalCapability'] > 5) {
            return false;
        }
        if ($this->container['terminalCapability'] < 1) {
            return false;
        }
        if ($this->container['pinEntryCapability'] > 1) {
            return false;
        }
        if ($this->container['pinEntryCapability'] < 1) {
            return false;
        }
        if (strlen($this->container['operatingEnvironment']) > 1) {
            return false;
        }
        if (strlen($this->container['amexCapnData']) > 12) {
            return false;
        }
        return true;
    }


    /**
     * Gets terminalId
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     * @param string $terminalId Identifier for the terminal at your retail location. You can define this value yourself, but consult the processor for requirements.  For Payouts: This field is applicable for CtV.
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        if (!is_null($terminalId) && (strlen($terminalId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $terminalId when calling Ptsv2paymentsPointOfSaleInformation., must be smaller than or equal to 8.');
        }

        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets terminalSerialNumber
     * @return string
     */
    public function getTerminalSerialNumber()
    {
        return $this->container['terminalSerialNumber'];
    }

    /**
     * Sets terminalSerialNumber
     * @param string $terminalSerialNumber Description of this field is not available.
     * @return $this
     */
    public function setTerminalSerialNumber($terminalSerialNumber)
    {
        $this->container['terminalSerialNumber'] = $terminalSerialNumber;

        return $this;
    }

    /**
     * Gets laneNumber
     * @return string
     */
    public function getLaneNumber()
    {
        return $this->container['laneNumber'];
    }

    /**
     * Sets laneNumber
     * @param string $laneNumber Identifier for an alternate terminal at your retail location. You define the value for this field.  This field is supported only for MasterCard transactions on FDC Nashville Global. Use the _terminalID_ field to identify the main terminal at your retail location. If your retail location has multiple terminals, use this _alternateTerminalID_ field to identify the terminal used for the transaction.  This field is a pass-through, which means that CyberSource does not check the value or modify the value in any way before sending it to the processor.
     * @return $this
     */
    public function setLaneNumber($laneNumber)
    {
        if (!is_null($laneNumber) && (strlen($laneNumber) > 8)) {
            throw new \InvalidArgumentException('invalid length for $laneNumber when calling Ptsv2paymentsPointOfSaleInformation., must be smaller than or equal to 8.');
        }

        $this->container['laneNumber'] = $laneNumber;

        return $this;
    }

    /**
     * Gets cardPresent
     * @return bool
     */
    public function getCardPresent()
    {
        return $this->container['cardPresent'];
    }

    /**
     * Sets cardPresent
     * @param bool $cardPresent Indicates whether the card is present at the time of the transaction. Possible values:   - **true**: Card is present.  - **false**: Card is not present.
     * @return $this
     */
    public function setCardPresent($cardPresent)
    {
        $this->container['cardPresent'] = $cardPresent;

        return $this;
    }

    /**
     * Gets catLevel
     * @return int
     */
    public function getCatLevel()
    {
        return $this->container['catLevel'];
    }

    /**
     * Sets catLevel
     * @param int $catLevel Type of cardholder-activated terminal. Possible values:   - 1: Automated dispensing machine  - 2: Self-service terminal  - 3: Limited amount terminal  - 4: In-flight commerce (IFC) terminal  - 5: Radio frequency device  - 6: Mobile acceptance terminal  - 7: Electronic cash register  - 8: E-commerce device at your location  - 9: Terminal or cash register that uses a dialup connection to connect to the transaction processing network  * Applicable only for CTV for Payouts.
     * @return $this
     */
    public function setCatLevel($catLevel)
    {

        if (!is_null($catLevel) && ($catLevel > 9)) {
            throw new \InvalidArgumentException('invalid value for $catLevel when calling Ptsv2paymentsPointOfSaleInformation., must be smaller than or equal to 9.');
        }
        if (!is_null($catLevel) && ($catLevel < 1)) {
            throw new \InvalidArgumentException('invalid value for $catLevel when calling Ptsv2paymentsPointOfSaleInformation., must be bigger than or equal to 1.');
        }

        $this->container['catLevel'] = $catLevel;

        return $this;
    }

    /**
     * Gets entryMode
     * @return string
     */
    public function getEntryMode()
    {
        return $this->container['entryMode'];
    }

    /**
     * Sets entryMode
     * @param string $entryMode Method of entering credit card information into the POS terminal. Possible values:   - contact: Read from direct contact with chip card.  - contactless: Read from a contactless interface using chip data.  - keyed: Manually keyed into POS terminal.  - msd: Read from a contactless interface using magnetic stripe data (MSD).  - swiped: Read from credit card magnetic stripe.  The contact, contactless, and msd values are supported only for EMV transactions. * Applicable only for CTV for Payouts.
     * @return $this
     */
    public function setEntryMode($entryMode)
    {
        if (!is_null($entryMode) && (strlen($entryMode) > 11)) {
            throw new \InvalidArgumentException('invalid length for $entryMode when calling Ptsv2paymentsPointOfSaleInformation., must be smaller than or equal to 11.');
        }

        $this->container['entryMode'] = $entryMode;

        return $this;
    }

    /**
     * Gets terminalCapability
     * @return int
     */
    public function getTerminalCapability()
    {
        return $this->container['terminalCapability'];
    }

    /**
     * Sets terminalCapability
     * @param int $terminalCapability POS terminal’s capability. Possible values:   - 1: Terminal has a magnetic stripe reader only.  - 2: Terminal has a magnetic stripe reader and manual entry capability.  - 3: Terminal has manual entry capability only.  - 4: Terminal can read chip cards.  - 5: Terminal can read contactless chip cards.  The values of 4 and 5 are supported only for EMV transactions. * Applicable only for CTV for Payouts.
     * @return $this
     */
    public function setTerminalCapability($terminalCapability)
    {

        if (!is_null($terminalCapability) && ($terminalCapability > 5)) {
            throw new \InvalidArgumentException('invalid value for $terminalCapability when calling Ptsv2paymentsPointOfSaleInformation., must be smaller than or equal to 5.');
        }
        if (!is_null($terminalCapability) && ($terminalCapability < 1)) {
            throw new \InvalidArgumentException('invalid value for $terminalCapability when calling Ptsv2paymentsPointOfSaleInformation., must be bigger than or equal to 1.');
        }

        $this->container['terminalCapability'] = $terminalCapability;

        return $this;
    }

    /**
     * Gets pinEntryCapability
     * @return int
     */
    public function getPinEntryCapability()
    {
        return $this->container['pinEntryCapability'];
    }

    /**
     * Sets pinEntryCapability
     * @param int $pinEntryCapability A one-digit code that identifies the capability of terminal to capture PINs.  This code does not necessarily mean that a PIN was entered or is included in this message.  For Payouts: This field is applicable for CtV.
     * @return $this
     */
    public function setPinEntryCapability($pinEntryCapability)
    {

        if (!is_null($pinEntryCapability) && ($pinEntryCapability > 1)) {
            throw new \InvalidArgumentException('invalid value for $pinEntryCapability when calling Ptsv2paymentsPointOfSaleInformation., must be smaller than or equal to 1.');
        }
        if (!is_null($pinEntryCapability) && ($pinEntryCapability < 1)) {
            throw new \InvalidArgumentException('invalid value for $pinEntryCapability when calling Ptsv2paymentsPointOfSaleInformation., must be bigger than or equal to 1.');
        }

        $this->container['pinEntryCapability'] = $pinEntryCapability;

        return $this;
    }

    /**
     * Gets operatingEnvironment
     * @return string
     */
    public function getOperatingEnvironment()
    {
        return $this->container['operatingEnvironment'];
    }

    /**
     * Sets operatingEnvironment
     * @param string $operatingEnvironment Operating environment. Possible values:   - 0: No terminal used or unknown environment.  - 1: On merchant premises, attended.  - 2: On merchant premises, unattended, or cardholder terminal. Examples: oil, kiosks, self-checkout, home       computer, mobile telephone, personal digital assistant (PDA). Cardholder terminal is supported only for       MasterCard transactions on **CyberSource through VisaNet**.  - 3: Off merchant premises, attended. Examples: portable POS devices at trade shows, at service calls, or in       taxis.  - 4: Off merchant premises, unattended, or cardholder terminal. Examples: vending machines, home computer,       mobile telephone, PDA. Cardholder terminal is supported only for MasterCard transactions on **CyberSource       through VisaNet**.  - 5: On premises of cardholder, unattended.  - 9: Unknown delivery mode.  - S: Electronic delivery of product. Examples: music, software, or eTickets that are downloaded over the       internet.  - T: Physical delivery of product. Examples: music or software that is delivered by mail or by a courier.  This field is supported only for **American Express Direct** and **CyberSource through VisaNet**.  **CyberSource through VisaNet**  For MasterCard transactions, the only valid values are 2 and 4.
     * @return $this
     */
    public function setOperatingEnvironment($operatingEnvironment)
    {
        if (!is_null($operatingEnvironment) && (strlen($operatingEnvironment) > 1)) {
            throw new \InvalidArgumentException('invalid length for $operatingEnvironment when calling Ptsv2paymentsPointOfSaleInformation., must be smaller than or equal to 1.');
        }

        $this->container['operatingEnvironment'] = $operatingEnvironment;

        return $this;
    }

    /**
     * Gets emv
     * @return \CyberSource\Model\Ptsv2paymentsPointOfSaleInformationEmv
     */
    public function getEmv()
    {
        return $this->container['emv'];
    }

    /**
     * Sets emv
     * @param \CyberSource\Model\Ptsv2paymentsPointOfSaleInformationEmv $emv
     * @return $this
     */
    public function setEmv($emv)
    {
        $this->container['emv'] = $emv;

        return $this;
    }

    /**
     * Gets amexCapnData
     * @return string
     */
    public function getAmexCapnData()
    {
        return $this->container['amexCapnData'];
    }

    /**
     * Sets amexCapnData
     * @param string $amexCapnData Point-of-sale details for the transaction. This value is returned only for **American Express Direct**. CyberSource generates this value, which consists of a series of codes that identify terminal capability, security data, and specific conditions present at the time the transaction occurred. To comply with the CAPN requirements, this  value must be included in all subsequent follow-on requests, such as captures and follow-on credits.  When you perform authorizations, captures, and credits through CyberSource, CyberSource passes this value from the authorization service to the subsequent services for you. However, when you perform authorizations through CyberSource and perform subsequent services through other financial institutions, you must ensure that your requests for captures and credits include this value.
     * @return $this
     */
    public function setAmexCapnData($amexCapnData)
    {
        if (!is_null($amexCapnData) && (strlen($amexCapnData) > 12)) {
            throw new \InvalidArgumentException('invalid length for $amexCapnData when calling Ptsv2paymentsPointOfSaleInformation., must be smaller than or equal to 12.');
        }

        $this->container['amexCapnData'] = $amexCapnData;

        return $this;
    }

    /**
     * Gets trackData
     * @return string
     */
    public function getTrackData()
    {
        return $this->container['trackData'];
    }

    /**
     * Sets trackData
     * @param string $trackData Card’s track 1 and 2 data. For all processors except FDMS Nashville, this value consists of one of the following:   - Track 1 data  - Track 2 data  - Data for both tracks 1 and 2  For FDMS Nashville, this value consists of one of the following:  - Track 1 data  - Data for both tracks 1 and 2  Example: %B4111111111111111^SMITH/JOHN ^1612101976110000868000000?;4111111111111111=16121019761186800000?
     * @return $this
     */
    public function setTrackData($trackData)
    {
        $this->container['trackData'] = $trackData;

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
     * @return mixed
     */
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

