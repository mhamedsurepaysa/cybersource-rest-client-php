<?php
/**
 * Ptsv2paymentreferencesOrderInformationAmountDetails
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
 * Ptsv2paymentreferencesOrderInformationAmountDetails Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentreferencesOrderInformationAmountDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentreferences_orderInformation_amountDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalAmount' => 'string',
        'currency' => 'string',
        'discountAmount' => 'string',
        'taxAmount' => 'string',
        'dutyAmount' => 'string',
        'exchangeRate' => 'string',
        'exchangeRateTimeStamp' => 'string',
        'settlementCurrency' => 'string',
        'giftwrapAmount' => 'string',
        'handlingAmount' => 'string',
        'shippingAmount' => 'string',
        'shippingDiscountAmount' => 'string',
        'insuranceAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalAmount' => null,
        'currency' => null,
        'discountAmount' => null,
        'taxAmount' => null,
        'dutyAmount' => null,
        'exchangeRate' => null,
        'exchangeRateTimeStamp' => null,
        'settlementCurrency' => null,
        'giftwrapAmount' => null,
        'handlingAmount' => null,
        'shippingAmount' => null,
        'shippingDiscountAmount' => null,
        'insuranceAmount' => null
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
        'totalAmount' => 'totalAmount',
        'currency' => 'currency',
        'discountAmount' => 'discountAmount',
        'taxAmount' => 'taxAmount',
        'dutyAmount' => 'dutyAmount',
        'exchangeRate' => 'exchangeRate',
        'exchangeRateTimeStamp' => 'exchangeRateTimeStamp',
        'settlementCurrency' => 'settlementCurrency',
        'giftwrapAmount' => 'giftwrapAmount',
        'handlingAmount' => 'handlingAmount',
        'shippingAmount' => 'shippingAmount',
        'shippingDiscountAmount' => 'shippingDiscountAmount',
        'insuranceAmount' => 'insuranceAmount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'totalAmount' => 'setTotalAmount',
        'currency' => 'setCurrency',
        'discountAmount' => 'setDiscountAmount',
        'taxAmount' => 'setTaxAmount',
        'dutyAmount' => 'setDutyAmount',
        'exchangeRate' => 'setExchangeRate',
        'exchangeRateTimeStamp' => 'setExchangeRateTimeStamp',
        'settlementCurrency' => 'setSettlementCurrency',
        'giftwrapAmount' => 'setGiftwrapAmount',
        'handlingAmount' => 'setHandlingAmount',
        'shippingAmount' => 'setShippingAmount',
        'shippingDiscountAmount' => 'setShippingDiscountAmount',
        'insuranceAmount' => 'setInsuranceAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'totalAmount' => 'getTotalAmount',
        'currency' => 'getCurrency',
        'discountAmount' => 'getDiscountAmount',
        'taxAmount' => 'getTaxAmount',
        'dutyAmount' => 'getDutyAmount',
        'exchangeRate' => 'getExchangeRate',
        'exchangeRateTimeStamp' => 'getExchangeRateTimeStamp',
        'settlementCurrency' => 'getSettlementCurrency',
        'giftwrapAmount' => 'getGiftwrapAmount',
        'handlingAmount' => 'getHandlingAmount',
        'shippingAmount' => 'getShippingAmount',
        'shippingDiscountAmount' => 'getShippingDiscountAmount',
        'insuranceAmount' => 'getInsuranceAmount'
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
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['dutyAmount'] = isset($data['dutyAmount']) ? $data['dutyAmount'] : null;
        $this->container['exchangeRate'] = isset($data['exchangeRate']) ? $data['exchangeRate'] : null;
        $this->container['exchangeRateTimeStamp'] = isset($data['exchangeRateTimeStamp']) ? $data['exchangeRateTimeStamp'] : null;
        $this->container['settlementCurrency'] = isset($data['settlementCurrency']) ? $data['settlementCurrency'] : null;
        $this->container['giftwrapAmount'] = isset($data['giftwrapAmount']) ? $data['giftwrapAmount'] : null;
        $this->container['handlingAmount'] = isset($data['handlingAmount']) ? $data['handlingAmount'] : null;
        $this->container['shippingAmount'] = isset($data['shippingAmount']) ? $data['shippingAmount'] : null;
        $this->container['shippingDiscountAmount'] = isset($data['shippingDiscountAmount']) ? $data['shippingDiscountAmount'] : null;
        $this->container['insuranceAmount'] = isset($data['insuranceAmount']) ? $data['insuranceAmount'] : null;
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
     * Gets totalAmount
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     * @param string $totalAmount Grand total for the order. This value cannot be negative. You can include a decimal point (.), but no other special characters. CyberSource truncates the amount to the correct number of decimal places.  **Note** For CTV, FDCCompass, Paymentech processors, the maximum length for this field is 12.  **Important** Some processors have specific requirements and limitations, such as maximum amounts and maximum field lengths. For details, see: - \"Authorization Information for Specific Processors\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/). - \"Capture Information for Specific Processors\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/). - \"Credit Information for Specific Processors\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/).  If your processor supports zero amount authorizations, you can set this field to 0 for the authorization to check if the card is lost or stolen. For details, see \"Zero Amount Authorizations,\" \"Credit Information for Specific Processors\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Card Present Required to include either this field or `orderInformation.lineItems[].unitPrice` for the order.  #### Invoicing Required for creating a new invoice.  #### PIN Debit Amount you requested for the PIN debit purchase. This value is returned for partial authorizations. The issuing bank can approve a partial amount if the balance on the debit card is less than the requested transaction amount.  Required field for PIN Debit purchase and PIN Debit credit requests. Optional field for PIN Debit reversal requests.  #### GPX This field is optional for reversing an authorization or credit; however, for all other processors, these fields are required.  #### DCC with a Third-Party Provider Set this field to the converted amount that was returned by the DCC provider. You must include either this field or the 1st line item in the order and the specific line-order amount in your request. For details, see `grand_total_amount` field description in [Dynamic Currency Conversion For First Data Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/DCC_FirstData_SCMP/DCC_FirstData_SCMP_API.pdf).  #### FDMS South If you accept IDR or CLP currencies, see the entry for FDMS South in \"Authorization Information for Specific Processors\" of the [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### DCC for First Data Not used.
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency used for the order. Use the three-character [ISO Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf)  #### Used by **Authorization** Required field.  **Authorization Reversal** For an authorization reversal (`reversalInformation`) or a capture (`processingOptions.capture` is set to `true`), you must use the same currency that you used in your payment authorization request.  #### PIN Debit Currency for the amount you requested for the PIN debit purchase. This value is returned for partial authorizations. The issuing bank can approve a partial amount if the balance on the debit card is less than the requested transaction amount. For the possible values, see the [ISO Standard Currency Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/currencies.pdf). Returned by PIN debit purchase.  For PIN debit reversal requests, you must use the same currency that was used for the PIN debit purchase or PIN debit credit that you are reversing. For the possible values, see the [ISO Standard Currency Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/currencies.pdf).  Required field for PIN Debit purchase and PIN Debit credit requests. Optional field for PIN Debit reversal requests.  #### GPX This field is optional for reversing an authorization or credit.  #### DCC for First Data Your local currency. For details, see the `currency` field description in [Dynamic Currency Conversion For First Data Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/DCC_FirstData_SCMP/DCC_FirstData_SCMP_API.pdf).  #### Tax Calculation Required for international tax and value added tax only. Optional for U.S. and Canadian taxes. Your local currency.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets discountAmount
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     * @param string $discountAmount Total discount amount applied to the order.
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     * @param string $taxAmount Total tax amount for all the items in the order.
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets dutyAmount
     * @return string
     */
    public function getDutyAmount()
    {
        return $this->container['dutyAmount'];
    }

    /**
     * Sets dutyAmount
     * @param string $dutyAmount Total charges for any import or export duties included in the order.
     * @return $this
     */
    public function setDutyAmount($dutyAmount)
    {
        $this->container['dutyAmount'] = $dutyAmount;

        return $this;
    }

    /**
     * Gets exchangeRate
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->container['exchangeRate'];
    }

    /**
     * Sets exchangeRate
     * @param string $exchangeRate Exchange rate returned by the DCC service. Includes a decimal point and a maximum of 4 decimal places.  For details, see `exchange_rate` request-level field description in the [Dynamic Currency Conversion For First Data Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/DCC_FirstData_SCMP/DCC_FirstData_SCMP_API.pdf)
     * @return $this
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->container['exchangeRate'] = $exchangeRate;

        return $this;
    }

    /**
     * Gets exchangeRateTimeStamp
     * @return string
     */
    public function getExchangeRateTimeStamp()
    {
        return $this->container['exchangeRateTimeStamp'];
    }

    /**
     * Sets exchangeRateTimeStamp
     * @param string $exchangeRateTimeStamp Time stamp for the exchange rate. This value is returned by the DCC service.  Format: `YYYYMMDD~HH:MM`  where ~ denotes a space.
     * @return $this
     */
    public function setExchangeRateTimeStamp($exchangeRateTimeStamp)
    {
        $this->container['exchangeRateTimeStamp'] = $exchangeRateTimeStamp;

        return $this;
    }

    /**
     * Gets settlementCurrency
     * @return string
     */
    public function getSettlementCurrency()
    {
        return $this->container['settlementCurrency'];
    }

    /**
     * Sets settlementCurrency
     * @param string $settlementCurrency This is a multicurrency-only field. It contains a 3-digit numeric code that identifies the currency used by the issuer to bill the cardholder's account. This field is returned for OCT transactions.
     * @return $this
     */
    public function setSettlementCurrency($settlementCurrency)
    {
        $this->container['settlementCurrency'] = $settlementCurrency;

        return $this;
    }

    /**
     * Gets giftwrapAmount
     * @return string
     */
    public function getGiftwrapAmount()
    {
        return $this->container['giftwrapAmount'];
    }

    /**
     * Sets giftwrapAmount
     * @param string $giftwrapAmount giftwrap amount (RFU).
     * @return $this
     */
    public function setGiftwrapAmount($giftwrapAmount)
    {
        $this->container['giftwrapAmount'] = $giftwrapAmount;

        return $this;
    }

    /**
     * Gets handlingAmount
     * @return string
     */
    public function getHandlingAmount()
    {
        return $this->container['handlingAmount'];
    }

    /**
     * Sets handlingAmount
     * @param string $handlingAmount handling amount (RFU)
     * @return $this
     */
    public function setHandlingAmount($handlingAmount)
    {
        $this->container['handlingAmount'] = $handlingAmount;

        return $this;
    }

    /**
     * Gets shippingAmount
     * @return string
     */
    public function getShippingAmount()
    {
        return $this->container['shippingAmount'];
    }

    /**
     * Sets shippingAmount
     * @param string $shippingAmount shipping amount (RFU)
     * @return $this
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->container['shippingAmount'] = $shippingAmount;

        return $this;
    }

    /**
     * Gets shippingDiscountAmount
     * @return string
     */
    public function getShippingDiscountAmount()
    {
        return $this->container['shippingDiscountAmount'];
    }

    /**
     * Sets shippingDiscountAmount
     * @param string $shippingDiscountAmount shipping discount amount (RFU)
     * @return $this
     */
    public function setShippingDiscountAmount($shippingDiscountAmount)
    {
        $this->container['shippingDiscountAmount'] = $shippingDiscountAmount;

        return $this;
    }

    /**
     * Gets insuranceAmount
     * @return string
     */
    public function getInsuranceAmount()
    {
        return $this->container['insuranceAmount'];
    }

    /**
     * Sets insuranceAmount
     * @param string $insuranceAmount insurance amount (RFU)
     * @return $this
     */
    public function setInsuranceAmount($insuranceAmount)
    {
        $this->container['insuranceAmount'] = $insuranceAmount;

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

