<?php
/**
 * Ptsv2paymentsTokenInformation
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
 * Ptsv2paymentsTokenInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsTokenInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_tokenInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'jti' => 'string',
        'transientTokenJwt' => 'string',
        'paymentInstrument' => '\CyberSource\Model\Ptsv2paymentsTokenInformationPaymentInstrument',
        'shippingAddress' => '\CyberSource\Model\Ptsv2paymentsTokenInformationShippingAddress',
        'networkTokenOption' => 'string',
        'tokenProvisioningInformation' => '\CyberSource\Model\Ptsv2paymentsTokenInformationTokenProvisioningInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'jti' => null,
        'transientTokenJwt' => null,
        'paymentInstrument' => null,
        'shippingAddress' => null,
        'networkTokenOption' => null,
        'tokenProvisioningInformation' => null
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
        'jti' => 'jti',
        'transientTokenJwt' => 'transientTokenJwt',
        'paymentInstrument' => 'paymentInstrument',
        'shippingAddress' => 'shippingAddress',
        'networkTokenOption' => 'networkTokenOption',
        'tokenProvisioningInformation' => 'tokenProvisioningInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'jti' => 'setJti',
        'transientTokenJwt' => 'setTransientTokenJwt',
        'paymentInstrument' => 'setPaymentInstrument',
        'shippingAddress' => 'setShippingAddress',
        'networkTokenOption' => 'setNetworkTokenOption',
        'tokenProvisioningInformation' => 'setTokenProvisioningInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'jti' => 'getJti',
        'transientTokenJwt' => 'getTransientTokenJwt',
        'paymentInstrument' => 'getPaymentInstrument',
        'shippingAddress' => 'getShippingAddress',
        'networkTokenOption' => 'getNetworkTokenOption',
        'tokenProvisioningInformation' => 'getTokenProvisioningInformation'
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
        $this->container['jti'] = isset($data['jti']) ? $data['jti'] : null;
        $this->container['transientTokenJwt'] = isset($data['transientTokenJwt']) ? $data['transientTokenJwt'] : null;
        $this->container['paymentInstrument'] = isset($data['paymentInstrument']) ? $data['paymentInstrument'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['networkTokenOption'] = isset($data['networkTokenOption']) ? $data['networkTokenOption'] : null;
        $this->container['tokenProvisioningInformation'] = isset($data['tokenProvisioningInformation']) ? $data['tokenProvisioningInformation'] : null;
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
     * Gets jti
     * @return string
     */
    public function getJti()
    {
        return $this->container['jti'];
    }

    /**
     * Sets jti
     * @param string $jti TMS Transient Token, 64 hexadecimal id value representing captured payment credentials (including Sensitive Authentication Data, e.g. CVV).
     * @return $this
     */
    public function setJti($jti)
    {
        $this->container['jti'] = $jti;

        return $this;
    }

    /**
     * Gets transientTokenJwt
     * @return string
     */
    public function getTransientTokenJwt()
    {
        return $this->container['transientTokenJwt'];
    }

    /**
     * Sets transientTokenJwt
     * @param string $transientTokenJwt Flex API Transient Token encoded as JWT (JSON Web Token), e.g. Flex microform or Unified Payment checkout result.
     * @return $this
     */
    public function setTransientTokenJwt($transientTokenJwt)
    {
        $this->container['transientTokenJwt'] = $transientTokenJwt;

        return $this;
    }

    /**
     * Gets paymentInstrument
     * @return \CyberSource\Model\Ptsv2paymentsTokenInformationPaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->container['paymentInstrument'];
    }

    /**
     * Sets paymentInstrument
     * @param \CyberSource\Model\Ptsv2paymentsTokenInformationPaymentInstrument $paymentInstrument
     * @return $this
     */
    public function setPaymentInstrument($paymentInstrument)
    {
        $this->container['paymentInstrument'] = $paymentInstrument;

        return $this;
    }

    /**
     * Gets shippingAddress
     * @return \CyberSource\Model\Ptsv2paymentsTokenInformationShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     * @param \CyberSource\Model\Ptsv2paymentsTokenInformationShippingAddress $shippingAddress
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets networkTokenOption
     * @return string
     */
    public function getNetworkTokenOption()
    {
        return $this->container['networkTokenOption'];
    }

    /**
     * Sets networkTokenOption
     * @param string $networkTokenOption Indicates whether a payment network token associated with a TMS token should be used for authorization. This field can contain one of following values:  - `ignore`: Use a tokenized card number for an authorization, even if the TMS token has an associated payment network token. - `prefer`: (Default) Use an associated payment network token for an authorization if the TMS token has one; otherwise, use the tokenized card number.
     * @return $this
     */
    public function setNetworkTokenOption($networkTokenOption)
    {
        $this->container['networkTokenOption'] = $networkTokenOption;

        return $this;
    }

    /**
     * Gets tokenProvisioningInformation
     * @return \CyberSource\Model\Ptsv2paymentsTokenInformationTokenProvisioningInformation
     */
    public function getTokenProvisioningInformation()
    {
        return $this->container['tokenProvisioningInformation'];
    }

    /**
     * Sets tokenProvisioningInformation
     * @param \CyberSource\Model\Ptsv2paymentsTokenInformationTokenProvisioningInformation $tokenProvisioningInformation
     * @return $this
     */
    public function setTokenProvisioningInformation($tokenProvisioningInformation)
    {
        $this->container['tokenProvisioningInformation'] = $tokenProvisioningInformation;

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


