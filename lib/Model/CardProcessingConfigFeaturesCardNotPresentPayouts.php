<?php
/**
 * CardProcessingConfigFeaturesCardNotPresentPayouts
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
 * CardProcessingConfigFeaturesCardNotPresentPayouts Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CardProcessingConfigFeaturesCardNotPresentPayouts implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CardProcessingConfig_features_cardNotPresent_payouts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reimbursementCode' => 'string',
        'acquiringInstitutionId' => 'string',
        'businessApplicationId' => 'string',
        'financialInstitutionId' => 'string',
        'merchantAbaNumber' => 'string',
        'networkOrder' => 'string',
        'currencies' => 'map[string,\CyberSource\Model\CardProcessingConfigFeaturesCardNotPresentPayoutsCurrencies]',
        'merchantId' => 'string',
        'terminalId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reimbursementCode' => null,
        'acquiringInstitutionId' => null,
        'businessApplicationId' => null,
        'financialInstitutionId' => null,
        'merchantAbaNumber' => null,
        'networkOrder' => null,
        'currencies' => null,
        'merchantId' => null,
        'terminalId' => null
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
        'reimbursementCode' => 'reimbursementCode',
        'acquiringInstitutionId' => 'acquiringInstitutionId',
        'businessApplicationId' => 'businessApplicationId',
        'financialInstitutionId' => 'financialInstitutionId',
        'merchantAbaNumber' => 'merchantAbaNumber',
        'networkOrder' => 'networkOrder',
        'currencies' => 'currencies',
        'merchantId' => 'merchantId',
        'terminalId' => 'terminalId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'reimbursementCode' => 'setReimbursementCode',
        'acquiringInstitutionId' => 'setAcquiringInstitutionId',
        'businessApplicationId' => 'setBusinessApplicationId',
        'financialInstitutionId' => 'setFinancialInstitutionId',
        'merchantAbaNumber' => 'setMerchantAbaNumber',
        'networkOrder' => 'setNetworkOrder',
        'currencies' => 'setCurrencies',
        'merchantId' => 'setMerchantId',
        'terminalId' => 'setTerminalId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'reimbursementCode' => 'getReimbursementCode',
        'acquiringInstitutionId' => 'getAcquiringInstitutionId',
        'businessApplicationId' => 'getBusinessApplicationId',
        'financialInstitutionId' => 'getFinancialInstitutionId',
        'merchantAbaNumber' => 'getMerchantAbaNumber',
        'networkOrder' => 'getNetworkOrder',
        'currencies' => 'getCurrencies',
        'merchantId' => 'getMerchantId',
        'terminalId' => 'getTerminalId'
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
        $this->container['reimbursementCode'] = isset($data['reimbursementCode']) ? $data['reimbursementCode'] : null;
        $this->container['acquiringInstitutionId'] = isset($data['acquiringInstitutionId']) ? $data['acquiringInstitutionId'] : null;
        $this->container['businessApplicationId'] = isset($data['businessApplicationId']) ? $data['businessApplicationId'] : null;
        $this->container['financialInstitutionId'] = isset($data['financialInstitutionId']) ? $data['financialInstitutionId'] : null;
        $this->container['merchantAbaNumber'] = isset($data['merchantAbaNumber']) ? $data['merchantAbaNumber'] : null;
        $this->container['networkOrder'] = isset($data['networkOrder']) ? $data['networkOrder'] : null;
        $this->container['currencies'] = isset($data['currencies']) ? $data['currencies'] : null;
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
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
     * Gets reimbursementCode
     * @return string
     */
    public function getReimbursementCode()
    {
        return $this->container['reimbursementCode'];
    }

    /**
     * Sets reimbursementCode
     * @param string $reimbursementCode Applicable for VPC processors.
     * @return $this
     */
    public function setReimbursementCode($reimbursementCode)
    {
        $this->container['reimbursementCode'] = $reimbursementCode;

        return $this;
    }

    /**
     * Gets acquiringInstitutionId
     * @return string
     */
    public function getAcquiringInstitutionId()
    {
        return $this->container['acquiringInstitutionId'];
    }

    /**
     * Sets acquiringInstitutionId
     * @param string $acquiringInstitutionId This code identifies the financial institution acting as the acquirer of this customer transaction. The acquirer is the member or system user that signed the merchant. This number is usually a Visa-assigned. Applicable for VPC processors.
     * @return $this
     */
    public function setAcquiringInstitutionId($acquiringInstitutionId)
    {
        $this->container['acquiringInstitutionId'] = $acquiringInstitutionId;

        return $this;
    }

    /**
     * Gets businessApplicationId
     * @return string
     */
    public function getBusinessApplicationId()
    {
        return $this->container['businessApplicationId'];
    }

    /**
     * Sets businessApplicationId
     * @param string $businessApplicationId Transaction type. List of supported identifiers documented in the Developer Guide. Applicable for GPX (gpx) and VPC processors.
     * @return $this
     */
    public function setBusinessApplicationId($businessApplicationId)
    {
        $this->container['businessApplicationId'] = $businessApplicationId;

        return $this;
    }

    /**
     * Gets financialInstitutionId
     * @return string
     */
    public function getFinancialInstitutionId()
    {
        return $this->container['financialInstitutionId'];
    }

    /**
     * Sets financialInstitutionId
     * @param string $financialInstitutionId Applicable for GPX (gpx) and VPC processors.
     * @return $this
     */
    public function setFinancialInstitutionId($financialInstitutionId)
    {
        $this->container['financialInstitutionId'] = $financialInstitutionId;

        return $this;
    }

    /**
     * Gets merchantAbaNumber
     * @return string
     */
    public function getMerchantAbaNumber()
    {
        return $this->container['merchantAbaNumber'];
    }

    /**
     * Sets merchantAbaNumber
     * @param string $merchantAbaNumber Routing Number to identify banks within the United States. Applicable for VPC processors.
     * @return $this
     */
    public function setMerchantAbaNumber($merchantAbaNumber)
    {
        $this->container['merchantAbaNumber'] = $merchantAbaNumber;

        return $this;
    }

    /**
     * Gets networkOrder
     * @return string
     */
    public function getNetworkOrder()
    {
        return $this->container['networkOrder'];
    }

    /**
     * Sets networkOrder
     * @param string $networkOrder Order of the networks in which Visa should make routing decisions. Applicable for VPC processors.
     * @return $this
     */
    public function setNetworkOrder($networkOrder)
    {
        $this->container['networkOrder'] = $networkOrder;

        return $this;
    }

    /**
     * Gets currencies
     * @return map[string,\CyberSource\Model\CardProcessingConfigFeaturesCardNotPresentPayoutsCurrencies]
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     * @param map[string,\CyberSource\Model\CardProcessingConfigFeaturesCardNotPresentPayoutsCurrencies] $currencies Three-character [ISO 4217 ALPHA-3 Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf)
     * @return $this
     */
    public function setCurrencies($currencies)
    {
        $this->container['currencies'] = $currencies;

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
     * @param string $merchantId Merchant ID assigned by an acquirer or a processor. Should not be overridden by any other party.  Validation details (for selected processors)...  <table> <thead><tr><th>Processor</th><th>Acceptance Type</th><th>Required</th><th>Min. Length</th><th>Max. Length</th><th>Regex</th></tr></thead> <tr><td>Barclays</td><td>cnp, hybrid</td><td>No</td><td>1</td><td>11</td><td>^[0-9]+$</td></tr> </table>
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
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
     * @param string $terminalId The 'Terminal Id' aka TID, is an identifier used for with your payments processor. Depending on the processor and payment acceptance type this may also be the default Terminal ID used for Card Present and Virtual Terminal transactions.  Validation details (for selected processors)...  <table> <thead><tr><th>Processor</th><th>Acceptance Type</th><th>Required</th><th>Min. Length</th><th>Max. Length</th><th>Regex</th></tr></thead> <tr><td>Barclays</td><td>cnp, hybrid</td><td>No</td><td>1</td><td>255</td><td>^[0-9:&#92;-]+$</td></tr> </table>
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        $this->container['terminalId'] = $terminalId;

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


