<?php
/**
 * PaymentProductsSecureAcceptanceConfigurationInformationConfigurationsService
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
 * PaymentProductsSecureAcceptanceConfigurationInformationConfigurationsService Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentProductsSecureAcceptanceConfigurationInformationConfigurationsService implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'paymentProducts_secureAcceptance_configurationInformation_configurations_service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'decisionManagerVerboseEnabled' => 'bool',
        'declinedRetryLimit' => 'float',
        'decisionManagerEnabled' => 'bool',
        'tokenizationEnabled' => 'bool',
        'reverseAuthOnAddressVerificationSystemFailure' => 'bool',
        'deviceFingerprintEnabled' => 'bool',
        'reverseAuthOnCardVerificationNumberFailure' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'decisionManagerVerboseEnabled' => null,
        'declinedRetryLimit' => null,
        'decisionManagerEnabled' => null,
        'tokenizationEnabled' => null,
        'reverseAuthOnAddressVerificationSystemFailure' => null,
        'deviceFingerprintEnabled' => null,
        'reverseAuthOnCardVerificationNumberFailure' => null
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
        'decisionManagerVerboseEnabled' => 'decisionManagerVerboseEnabled',
        'declinedRetryLimit' => 'declinedRetryLimit',
        'decisionManagerEnabled' => 'decisionManagerEnabled',
        'tokenizationEnabled' => 'tokenizationEnabled',
        'reverseAuthOnAddressVerificationSystemFailure' => 'reverseAuthOnAddressVerificationSystemFailure',
        'deviceFingerprintEnabled' => 'deviceFingerprintEnabled',
        'reverseAuthOnCardVerificationNumberFailure' => 'reverseAuthOnCardVerificationNumberFailure'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'decisionManagerVerboseEnabled' => 'setDecisionManagerVerboseEnabled',
        'declinedRetryLimit' => 'setDeclinedRetryLimit',
        'decisionManagerEnabled' => 'setDecisionManagerEnabled',
        'tokenizationEnabled' => 'setTokenizationEnabled',
        'reverseAuthOnAddressVerificationSystemFailure' => 'setReverseAuthOnAddressVerificationSystemFailure',
        'deviceFingerprintEnabled' => 'setDeviceFingerprintEnabled',
        'reverseAuthOnCardVerificationNumberFailure' => 'setReverseAuthOnCardVerificationNumberFailure'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'decisionManagerVerboseEnabled' => 'getDecisionManagerVerboseEnabled',
        'declinedRetryLimit' => 'getDeclinedRetryLimit',
        'decisionManagerEnabled' => 'getDecisionManagerEnabled',
        'tokenizationEnabled' => 'getTokenizationEnabled',
        'reverseAuthOnAddressVerificationSystemFailure' => 'getReverseAuthOnAddressVerificationSystemFailure',
        'deviceFingerprintEnabled' => 'getDeviceFingerprintEnabled',
        'reverseAuthOnCardVerificationNumberFailure' => 'getReverseAuthOnCardVerificationNumberFailure'
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
        $this->container['decisionManagerVerboseEnabled'] = isset($data['decisionManagerVerboseEnabled']) ? $data['decisionManagerVerboseEnabled'] : null;
        $this->container['declinedRetryLimit'] = isset($data['declinedRetryLimit']) ? $data['declinedRetryLimit'] : null;
        $this->container['decisionManagerEnabled'] = isset($data['decisionManagerEnabled']) ? $data['decisionManagerEnabled'] : null;
        $this->container['tokenizationEnabled'] = isset($data['tokenizationEnabled']) ? $data['tokenizationEnabled'] : null;
        $this->container['reverseAuthOnAddressVerificationSystemFailure'] = isset($data['reverseAuthOnAddressVerificationSystemFailure']) ? $data['reverseAuthOnAddressVerificationSystemFailure'] : null;
        $this->container['deviceFingerprintEnabled'] = isset($data['deviceFingerprintEnabled']) ? $data['deviceFingerprintEnabled'] : null;
        $this->container['reverseAuthOnCardVerificationNumberFailure'] = isset($data['reverseAuthOnCardVerificationNumberFailure']) ? $data['reverseAuthOnCardVerificationNumberFailure'] : null;
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
     * Gets decisionManagerVerboseEnabled
     * @return bool
     */
    public function getDecisionManagerVerboseEnabled()
    {
        return $this->container['decisionManagerVerboseEnabled'];
    }

    /**
     * Sets decisionManagerVerboseEnabled
     * @param bool $decisionManagerVerboseEnabled Toggles whether verbose Decision Manager results should be present in the Secure Acceptance response. As this response passes through the browser, it is recommended to set this to \"false\" outside of debugging.
     * @return $this
     */
    public function setDecisionManagerVerboseEnabled($decisionManagerVerboseEnabled)
    {
        $this->container['decisionManagerVerboseEnabled'] = $decisionManagerVerboseEnabled;

        return $this;
    }

    /**
     * Gets declinedRetryLimit
     * @return float
     */
    public function getDeclinedRetryLimit()
    {
        return $this->container['declinedRetryLimit'];
    }

    /**
     * Sets declinedRetryLimit
     * @param float $declinedRetryLimit Defines the number of retries a payer is presented with on payment declines on Hosted Checkout. Valid values are between 0 and 5.
     * @return $this
     */
    public function setDeclinedRetryLimit($declinedRetryLimit)
    {
        $this->container['declinedRetryLimit'] = $declinedRetryLimit;

        return $this;
    }

    /**
     * Gets decisionManagerEnabled
     * @return bool
     */
    public function getDecisionManagerEnabled()
    {
        return $this->container['decisionManagerEnabled'];
    }

    /**
     * Sets decisionManagerEnabled
     * @param bool $decisionManagerEnabled Toggles whether Decision Manager is enabled or not for Secure Acceptance transactions. Requires the transacting MID to be enabled and configured for Decicion Manager.
     * @return $this
     */
    public function setDecisionManagerEnabled($decisionManagerEnabled)
    {
        $this->container['decisionManagerEnabled'] = $decisionManagerEnabled;

        return $this;
    }

    /**
     * Gets tokenizationEnabled
     * @return bool
     */
    public function getTokenizationEnabled()
    {
        return $this->container['tokenizationEnabled'];
    }

    /**
     * Sets tokenizationEnabled
     * @param bool $tokenizationEnabled Toggles whether Tokenization is enabled or not for Secure Acceptance transactions. Requires the transacting MID to be enabled and configured for Tokenization.
     * @return $this
     */
    public function setTokenizationEnabled($tokenizationEnabled)
    {
        $this->container['tokenizationEnabled'] = $tokenizationEnabled;

        return $this;
    }

    /**
     * Gets reverseAuthOnAddressVerificationSystemFailure
     * @return bool
     */
    public function getReverseAuthOnAddressVerificationSystemFailure()
    {
        return $this->container['reverseAuthOnAddressVerificationSystemFailure'];
    }

    /**
     * Sets reverseAuthOnAddressVerificationSystemFailure
     * @param bool $reverseAuthOnAddressVerificationSystemFailure Toggles whether or not an approved Authorization that fails AVS should be automatically reversed.
     * @return $this
     */
    public function setReverseAuthOnAddressVerificationSystemFailure($reverseAuthOnAddressVerificationSystemFailure)
    {
        $this->container['reverseAuthOnAddressVerificationSystemFailure'] = $reverseAuthOnAddressVerificationSystemFailure;

        return $this;
    }

    /**
     * Gets deviceFingerprintEnabled
     * @return bool
     */
    public function getDeviceFingerprintEnabled()
    {
        return $this->container['deviceFingerprintEnabled'];
    }

    /**
     * Sets deviceFingerprintEnabled
     * @param bool $deviceFingerprintEnabled Toggles whether or not fraud Device Fingerprinting is enabled on the Hosted Checkout. This simplifies enablement for Decision Manager.
     * @return $this
     */
    public function setDeviceFingerprintEnabled($deviceFingerprintEnabled)
    {
        $this->container['deviceFingerprintEnabled'] = $deviceFingerprintEnabled;

        return $this;
    }

    /**
     * Gets reverseAuthOnCardVerificationNumberFailure
     * @return bool
     */
    public function getReverseAuthOnCardVerificationNumberFailure()
    {
        return $this->container['reverseAuthOnCardVerificationNumberFailure'];
    }

    /**
     * Sets reverseAuthOnCardVerificationNumberFailure
     * @param bool $reverseAuthOnCardVerificationNumberFailure Toggles whether or not an approved Authorization that fails CVN check that should be automatically reversed.
     * @return $this
     */
    public function setReverseAuthOnCardVerificationNumberFailure($reverseAuthOnCardVerificationNumberFailure)
    {
        $this->container['reverseAuthOnCardVerificationNumberFailure'] = $reverseAuthOnCardVerificationNumberFailure;

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


