<?php
/**
 * Ptsv1pushfundstransferProcessingInformation
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
 * Ptsv1pushfundstransferProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv1pushfundstransferProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv1pushfundstransfer_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'businessApplicationId' => 'string',
        'payoutsOptions' => '\CyberSource\Model\Ptsv1pushfundstransferProcessingInformationPayoutsOptions',
        'feeProgramId' => 'string',
        'networkPartnerId' => 'string',
        'processingCode' => 'string',
        'sharingGroupCode' => 'string',
        'purposeOfPayment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'businessApplicationId' => null,
        'payoutsOptions' => null,
        'feeProgramId' => null,
        'networkPartnerId' => null,
        'processingCode' => null,
        'sharingGroupCode' => null,
        'purposeOfPayment' => null
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
        'businessApplicationId' => 'businessApplicationId',
        'payoutsOptions' => 'payoutsOptions',
        'feeProgramId' => 'feeProgramId',
        'networkPartnerId' => 'networkPartnerId',
        'processingCode' => 'processingCode',
        'sharingGroupCode' => 'sharingGroupCode',
        'purposeOfPayment' => 'purposeOfPayment'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'businessApplicationId' => 'setBusinessApplicationId',
        'payoutsOptions' => 'setPayoutsOptions',
        'feeProgramId' => 'setFeeProgramId',
        'networkPartnerId' => 'setNetworkPartnerId',
        'processingCode' => 'setProcessingCode',
        'sharingGroupCode' => 'setSharingGroupCode',
        'purposeOfPayment' => 'setPurposeOfPayment'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'businessApplicationId' => 'getBusinessApplicationId',
        'payoutsOptions' => 'getPayoutsOptions',
        'feeProgramId' => 'getFeeProgramId',
        'networkPartnerId' => 'getNetworkPartnerId',
        'processingCode' => 'getProcessingCode',
        'sharingGroupCode' => 'getSharingGroupCode',
        'purposeOfPayment' => 'getPurposeOfPayment'
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
        $this->container['businessApplicationId'] = isset($data['businessApplicationId']) ? $data['businessApplicationId'] : null;
        $this->container['payoutsOptions'] = isset($data['payoutsOptions']) ? $data['payoutsOptions'] : null;
        $this->container['feeProgramId'] = isset($data['feeProgramId']) ? $data['feeProgramId'] : null;
        $this->container['networkPartnerId'] = isset($data['networkPartnerId']) ? $data['networkPartnerId'] : null;
        $this->container['processingCode'] = isset($data['processingCode']) ? $data['processingCode'] : null;
        $this->container['sharingGroupCode'] = isset($data['sharingGroupCode']) ? $data['sharingGroupCode'] : null;
        $this->container['purposeOfPayment'] = isset($data['purposeOfPayment']) ? $data['purposeOfPayment'] : null;
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
     * Gets businessApplicationId
     * @return string
     */
    public function getBusinessApplicationId()
    {
        return $this->container['businessApplicationId'];
    }

    /**
     * Sets businessApplicationId
     * @param string $businessApplicationId Money Transfer (MT) - `AA`: Account to Account - `BI`: Bank-Initiated Money Transfer - `CD`: Cash Deposit - `FT`: Funds Transfer - `TU`: Prepaid Card Loan - `WT`: Wallet Transfer-Staged Digital Wallet (SDW) Transfer - `PP`: P2P Money Transfer  Funds Disbursement (FD) - `BB`: Business-to-business Supplier Payments - `BP`: Non-Card Bill Pay  - `CP`: Credit Card Bill Pay - `FD`: General Funds Disbursements - `GD`: Government Disbursements and Government Initiated Tax Refunds - `GP`: Gambling/Gaming Payouts (other than online gaming) - `LO`: Loyalty Payments - `MD`: Merchant Settlement - `MI`: Faster Refunds - `OG`: Online Gambling Payouts - `PD`: Payroll and Pension Disbursements - `RP`: Request-to-Pay Service
     * @return $this
     */
    public function setBusinessApplicationId($businessApplicationId)
    {
        $this->container['businessApplicationId'] = $businessApplicationId;

        return $this;
    }

    /**
     * Gets payoutsOptions
     * @return \CyberSource\Model\Ptsv1pushfundstransferProcessingInformationPayoutsOptions
     */
    public function getPayoutsOptions()
    {
        return $this->container['payoutsOptions'];
    }

    /**
     * Sets payoutsOptions
     * @param \CyberSource\Model\Ptsv1pushfundstransferProcessingInformationPayoutsOptions $payoutsOptions
     * @return $this
     */
    public function setPayoutsOptions($payoutsOptions)
    {
        $this->container['payoutsOptions'] = $payoutsOptions;

        return $this;
    }

    /**
     * Gets feeProgramId
     * @return string
     */
    public function getFeeProgramId()
    {
        return $this->container['feeProgramId'];
    }

    /**
     * Sets feeProgramId
     * @param string $feeProgramId Fee Program Indicator. This field identifies the interchange fee program applicable to each financial transaction. Fee program indicator (FPI) values correspond to the fee descriptor and rate for each existing fee program.
     * @return $this
     */
    public function setFeeProgramId($feeProgramId)
    {
        $this->container['feeProgramId'] = $feeProgramId;

        return $this;
    }

    /**
     * Gets networkPartnerId
     * @return string
     */
    public function getNetworkPartnerId()
    {
        return $this->container['networkPartnerId'];
    }

    /**
     * Sets networkPartnerId
     * @param string $networkPartnerId Merchant payment gateway ID that is assigned by Mastercard and is provided by the acquirer when a registered merchant payment gateway service provider is involved in the transaction.
     * @return $this
     */
    public function setNetworkPartnerId($networkPartnerId)
    {
        $this->container['networkPartnerId'] = $networkPartnerId;

        return $this;
    }

    /**
     * Gets processingCode
     * @return string
     */
    public function getProcessingCode()
    {
        return $this->container['processingCode'];
    }

    /**
     * Sets processingCode
     * @param string $processingCode This field contains coding that identifies (1) the customer transaction type and (2) the customer account types affected by the transaction.  Default: 5402 (Original Credit Transaction)  Contains codes that combined with some other fields such as the BAI (Business Application Id) identify some unique use cases. For Sales Tax rebates this field should be populated with the value 5120 (Value-added tax/Sales Tax) along with the businessApplicationId field set to the value 'FD' which indicates this push funds transfer is being conducted in order to facilitate a sales tax refund.
     * @return $this
     */
    public function setProcessingCode($processingCode)
    {
        $this->container['processingCode'] = $processingCode;

        return $this;
    }

    /**
     * Gets sharingGroupCode
     * @return string
     */
    public function getSharingGroupCode()
    {
        return $this->container['sharingGroupCode'];
    }

    /**
     * Sets sharingGroupCode
     * @param string $sharingGroupCode This U.S.-only field is optionally used by PIN Debit Gateway Service participants (merchants and acquirers) to specify the network access priority. VisaNet checks to determine if there are issuer routing preferences for a network specified by the sharing group code. If an issuer preference exists for one of the specified debit networks, VisaNet makes a routing selection based on issuer preference. If an preference exists for multiple specified debit networks, or if no issuer preference exists, VisaNet makes a selection based on acquirer routing priorities.  Valid Values:  ACCEL_EXCHANGE_E  CU24_C  INTERLINK_G  MAESTRO_8  NYCE_Y  NYCE_F  PULSE_S  PULSE_L  PULSE_H  STAR_N  STAR_W  STAR_Z  STAR_Q  STAR_M  VISA_V
     * @return $this
     */
    public function setSharingGroupCode($sharingGroupCode)
    {
        $this->container['sharingGroupCode'] = $sharingGroupCode;

        return $this;
    }

    /**
     * Gets purposeOfPayment
     * @return string
     */
    public function getPurposeOfPayment()
    {
        return $this->container['purposeOfPayment'];
    }

    /**
     * Sets purposeOfPayment
     * @param string $purposeOfPayment This will send purpose of funds code for original credit transactions (OCTs).
     * @return $this
     */
    public function setPurposeOfPayment($purposeOfPayment)
    {
        $this->container['purposeOfPayment'] = $purposeOfPayment;

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


