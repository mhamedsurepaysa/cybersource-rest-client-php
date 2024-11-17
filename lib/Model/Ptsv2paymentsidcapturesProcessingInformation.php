<?php
/**
 * Ptsv2paymentsidcapturesProcessingInformation
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
 * Ptsv2paymentsidcapturesProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsidcapturesProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentsidcaptures_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentSolution' => 'string',
        'reconciliationId' => 'string',
        'linkId' => 'string',
        'reportGroup' => 'string',
        'visaCheckoutId' => 'string',
        'purchaseLevel' => 'string',
        'industryDataType' => 'string',
        'issuer' => '\CyberSource\Model\Ptsv2paymentsIssuerInformation',
        'authorizationOptions' => '\CyberSource\Model\Ptsv2paymentsidcapturesProcessingInformationAuthorizationOptions',
        'captureOptions' => '\CyberSource\Model\Ptsv2paymentsidcapturesProcessingInformationCaptureOptions',
        'loanOptions' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationLoanOptions',
        'payByPointsIndicator' => 'bool',
        'actionList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentSolution' => null,
        'reconciliationId' => null,
        'linkId' => null,
        'reportGroup' => null,
        'visaCheckoutId' => null,
        'purchaseLevel' => null,
        'industryDataType' => null,
        'issuer' => null,
        'authorizationOptions' => null,
        'captureOptions' => null,
        'loanOptions' => null,
        'payByPointsIndicator' => null,
        'actionList' => null
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
        'paymentSolution' => 'paymentSolution',
        'reconciliationId' => 'reconciliationId',
        'linkId' => 'linkId',
        'reportGroup' => 'reportGroup',
        'visaCheckoutId' => 'visaCheckoutId',
        'purchaseLevel' => 'purchaseLevel',
        'industryDataType' => 'industryDataType',
        'issuer' => 'issuer',
        'authorizationOptions' => 'authorizationOptions',
        'captureOptions' => 'captureOptions',
        'loanOptions' => 'loanOptions',
        'payByPointsIndicator' => 'payByPointsIndicator',
        'actionList' => 'actionList'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentSolution' => 'setPaymentSolution',
        'reconciliationId' => 'setReconciliationId',
        'linkId' => 'setLinkId',
        'reportGroup' => 'setReportGroup',
        'visaCheckoutId' => 'setVisaCheckoutId',
        'purchaseLevel' => 'setPurchaseLevel',
        'industryDataType' => 'setIndustryDataType',
        'issuer' => 'setIssuer',
        'authorizationOptions' => 'setAuthorizationOptions',
        'captureOptions' => 'setCaptureOptions',
        'loanOptions' => 'setLoanOptions',
        'payByPointsIndicator' => 'setPayByPointsIndicator',
        'actionList' => 'setActionList'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentSolution' => 'getPaymentSolution',
        'reconciliationId' => 'getReconciliationId',
        'linkId' => 'getLinkId',
        'reportGroup' => 'getReportGroup',
        'visaCheckoutId' => 'getVisaCheckoutId',
        'purchaseLevel' => 'getPurchaseLevel',
        'industryDataType' => 'getIndustryDataType',
        'issuer' => 'getIssuer',
        'authorizationOptions' => 'getAuthorizationOptions',
        'captureOptions' => 'getCaptureOptions',
        'loanOptions' => 'getLoanOptions',
        'payByPointsIndicator' => 'getPayByPointsIndicator',
        'actionList' => 'getActionList'
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
        $this->container['paymentSolution'] = isset($data['paymentSolution']) ? $data['paymentSolution'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['linkId'] = isset($data['linkId']) ? $data['linkId'] : null;
        $this->container['reportGroup'] = isset($data['reportGroup']) ? $data['reportGroup'] : null;
        $this->container['visaCheckoutId'] = isset($data['visaCheckoutId']) ? $data['visaCheckoutId'] : null;
        $this->container['purchaseLevel'] = isset($data['purchaseLevel']) ? $data['purchaseLevel'] : null;
        $this->container['industryDataType'] = isset($data['industryDataType']) ? $data['industryDataType'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['authorizationOptions'] = isset($data['authorizationOptions']) ? $data['authorizationOptions'] : null;
        $this->container['captureOptions'] = isset($data['captureOptions']) ? $data['captureOptions'] : null;
        $this->container['loanOptions'] = isset($data['loanOptions']) ? $data['loanOptions'] : null;
        $this->container['payByPointsIndicator'] = isset($data['payByPointsIndicator']) ? $data['payByPointsIndicator'] : null;
        $this->container['actionList'] = isset($data['actionList']) ? $data['actionList'] : null;
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
     * Gets paymentSolution
     * @return string
     */
    public function getPaymentSolution()
    {
        return $this->container['paymentSolution'];
    }

    /**
     * Sets paymentSolution
     * @param string $paymentSolution Type of digital payment solution for the transaction. Possible Values:   - `visacheckout`: Visa Checkout. This value is required for Visa Checkout transactions. For details, see `payment_solution` field description in [Visa Checkout Using the REST API.](https://developer.cybersource.com/content/dam/docs/cybs/en-us/apifields/reference/all/rest/api-fields.pdf)  - `001`: Apple Pay.  - `004`: Cybersource In-App Solution.  - `005`: Masterpass. This value is required for Masterpass transactions on OmniPay Direct.   - `006`: Android Pay.  - `007`: Chase Pay.  - `008`: Samsung Pay.  - `012`: Google Pay.  - `013`: Cybersource P2PE Decryption  - `014`: Mastercard credential on file (COF) payment network token. Returned in authorizations that use a payment network token associated with a TMS token.  - `015`: Visa credential on file (COF) payment network token. Returned in authorizations that use a payment network token associated with a TMS token.  - `027`: Click to Pay.
     * @return $this
     */
    public function setPaymentSolution($paymentSolution)
    {
        $this->container['paymentSolution'] = $paymentSolution;

        return $this;
    }

    /**
     * Gets reconciliationId
     * @return string
     */
    public function getReconciliationId()
    {
        return $this->container['reconciliationId'];
    }

    /**
     * Sets reconciliationId
     * @param string $reconciliationId Please check with Cybersource customer support to see if your merchant account is configured correctly so you can include this field in your request. * For Payouts: max length for FDCCompass is String (22).
     * @return $this
     */
    public function setReconciliationId($reconciliationId)
    {
        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets linkId
     * @return string
     */
    public function getLinkId()
    {
        return $this->container['linkId'];
    }

    /**
     * Sets linkId
     * @param string $linkId Value that links the current authorization request to the original authorization request. Set this value to the ID that was returned in the reply message from the original authorization request.  This value is used for:  - Partial authorizations - Split shipments
     * @return $this
     */
    public function setLinkId($linkId)
    {
        $this->container['linkId'] = $linkId;

        return $this;
    }

    /**
     * Gets reportGroup
     * @return string
     */
    public function getReportGroup()
    {
        return $this->container['reportGroup'];
    }

    /**
     * Sets reportGroup
     * @param string $reportGroup Attribute that lets you define custom grouping for your processor reports. This field is supported only for **Worldpay VAP**.
     * @return $this
     */
    public function setReportGroup($reportGroup)
    {
        $this->container['reportGroup'] = $reportGroup;

        return $this;
    }

    /**
     * Gets visaCheckoutId
     * @return string
     */
    public function getVisaCheckoutId()
    {
        return $this->container['visaCheckoutId'];
    }

    /**
     * Sets visaCheckoutId
     * @param string $visaCheckoutId Identifier for the **Visa Checkout** order. Visa Checkout provides a unique order ID for every transaction in the Visa Checkout **callID** field.
     * @return $this
     */
    public function setVisaCheckoutId($visaCheckoutId)
    {
        $this->container['visaCheckoutId'] = $visaCheckoutId;

        return $this;
    }

    /**
     * Gets purchaseLevel
     * @return string
     */
    public function getPurchaseLevel()
    {
        return $this->container['purchaseLevel'];
    }

    /**
     * Sets purchaseLevel
     * @param string $purchaseLevel Set this field to 3 to indicate that the request includes Level III data.
     * @return $this
     */
    public function setPurchaseLevel($purchaseLevel)
    {
        $this->container['purchaseLevel'] = $purchaseLevel;

        return $this;
    }

    /**
     * Gets industryDataType
     * @return string
     */
    public function getIndustryDataType()
    {
        return $this->container['industryDataType'];
    }

    /**
     * Sets industryDataType
     * @param string $industryDataType Indicates that the transaction includes industry-specific data.  Possible Values: - `airline` - `restaurant` - `lodging` - `auto_rental` - `transit` - `healthcare_medical` - `healthcare_transit` - `transit`  #### Card Present, Airlines and Auto Rental You must set this field to `airline` in order for airline data to be sent to the processor. For example, if this field is not set to `airline` or is not included in the request, no airline data is sent to the processor.  You must set this field to `restaurant` in order for restaurant data to be sent to the processor. When this field is not set to `restaurant` or is not included in the request, no restaurant data is sent to the processor.  You must set this field to `auto_rental` in order for auto rental data to be sent to the processor. For example, if this field is not set to `auto_rental` or is not included in the request, no auto rental data is sent to the processor.  Restaurant data is supported only on CyberSource through VisaNet.
     * @return $this
     */
    public function setIndustryDataType($industryDataType)
    {
        $this->container['industryDataType'] = $industryDataType;

        return $this;
    }

    /**
     * Gets issuer
     * @return \CyberSource\Model\Ptsv2paymentsIssuerInformation
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param \CyberSource\Model\Ptsv2paymentsIssuerInformation $issuer
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets authorizationOptions
     * @return \CyberSource\Model\Ptsv2paymentsidcapturesProcessingInformationAuthorizationOptions
     */
    public function getAuthorizationOptions()
    {
        return $this->container['authorizationOptions'];
    }

    /**
     * Sets authorizationOptions
     * @param \CyberSource\Model\Ptsv2paymentsidcapturesProcessingInformationAuthorizationOptions $authorizationOptions
     * @return $this
     */
    public function setAuthorizationOptions($authorizationOptions)
    {
        $this->container['authorizationOptions'] = $authorizationOptions;

        return $this;
    }

    /**
     * Gets captureOptions
     * @return \CyberSource\Model\Ptsv2paymentsidcapturesProcessingInformationCaptureOptions
     */
    public function getCaptureOptions()
    {
        return $this->container['captureOptions'];
    }

    /**
     * Sets captureOptions
     * @param \CyberSource\Model\Ptsv2paymentsidcapturesProcessingInformationCaptureOptions $captureOptions
     * @return $this
     */
    public function setCaptureOptions($captureOptions)
    {
        $this->container['captureOptions'] = $captureOptions;

        return $this;
    }

    /**
     * Gets loanOptions
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationLoanOptions
     */
    public function getLoanOptions()
    {
        return $this->container['loanOptions'];
    }

    /**
     * Sets loanOptions
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationLoanOptions $loanOptions
     * @return $this
     */
    public function setLoanOptions($loanOptions)
    {
        $this->container['loanOptions'] = $loanOptions;

        return $this;
    }

    /**
     * Gets payByPointsIndicator
     * @return bool
     */
    public function getPayByPointsIndicator()
    {
        return $this->container['payByPointsIndicator'];
    }

    /**
     * Sets payByPointsIndicator
     * @param bool $payByPointsIndicator Flag that indicates if the transaction is pay by points transaction true: Transaction uses loyalty points false: Transaction does not use loyalty points Default: false
     * @return $this
     */
    public function setPayByPointsIndicator($payByPointsIndicator)
    {
        $this->container['payByPointsIndicator'] = $payByPointsIndicator;

        return $this;
    }

    /**
     * Gets actionList
     * @return string[]
     */
    public function getActionList()
    {
        return $this->container['actionList'];
    }

    /**
     * Sets actionList
     * @param string[] $actionList Array of actions (one or more) to be included in the capture to invoke bundled services along with capture.  Possible values :   - `AP_CAPTURE`: Use this when Alternative Payment Capture service is requested.
     * @return $this
     */
    public function setActionList($actionList)
    {
        $this->container['actionList'] = $actionList;

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


