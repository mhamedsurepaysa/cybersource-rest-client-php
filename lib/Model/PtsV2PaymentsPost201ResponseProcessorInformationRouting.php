<?php
/**
 * PtsV2PaymentsPost201ResponseProcessorInformationRouting
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
 * PtsV2PaymentsPost201ResponseProcessorInformationRouting Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseProcessorInformationRouting implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_processorInformation_routing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'network' => 'string',
        'networkName' => 'string',
        'customerSignatureRequired' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'network' => null,
        'networkName' => null,
        'customerSignatureRequired' => null
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
        'network' => 'network',
        'networkName' => 'networkName',
        'customerSignatureRequired' => 'customerSignatureRequired'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'network' => 'setNetwork',
        'networkName' => 'setNetworkName',
        'customerSignatureRequired' => 'setCustomerSignatureRequired'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'network' => 'getNetwork',
        'networkName' => 'getNetworkName',
        'customerSignatureRequired' => 'getCustomerSignatureRequired'
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
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['networkName'] = isset($data['networkName']) ? $data['networkName'] : null;
        $this->container['customerSignatureRequired'] = isset($data['customerSignatureRequired']) ? $data['customerSignatureRequired'] : null;
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
     * Gets network
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     * @param string $network PIN Debit Services: Contains the ID of the debit network to which the transaction was routed.  | Code | Network | | --- | --- | | 0000 | Priority Routing or Generic File Update | | 0002 | Visa programs, Private Label and non-Visa Authorization Gateway Services | | 0003 | Interlink | | 0004 | Plus | | 0008 | Star | | 0009 | Pulse| | 0010 | Star | | 0011 | Star | | 0012 | Star (primary network ID) | | 0013 | AFFN | | 0015 | Star | | 0016 | Maestro | | 0017 | Pulse (primary network ID) | | 0018 | NYCE (primary network ID) | | 0019 | Pulse | | 0020 | Accel | | 0023 | NETS | | 0024 | CU24 | | 0025 | Alaska Option | | 0027 | NYCE | | 0028 | Shazam | | 0029 | EBT POS |  FDC Nashville Global authorization service:  Indicates whether the transaction was routed to a credit network, a debit network, or the STAR signature debit network. - `C`: Credit network - `D`: Debit network (without signature) - `S`: STAR signature debit network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets networkName
     * @return string
     */
    public function getNetworkName()
    {
        return $this->container['networkName'];
    }

    /**
     * Sets networkName
     * @param string $networkName Name of the network to which the transaction was routed.
     * @return $this
     */
    public function setNetworkName($networkName)
    {
        $this->container['networkName'] = $networkName;

        return $this;
    }

    /**
     * Gets customerSignatureRequired
     * @return string
     */
    public function getCustomerSignatureRequired()
    {
        return $this->container['customerSignatureRequired'];
    }

    /**
     * Sets customerSignatureRequired
     * @param string $customerSignatureRequired Indicates whether you need to obtain the cardholder's signature.  Possible values: - `Y`: You need to obtain the cardholder's signature. - `N`: You do not need to obtain the cardholder's signature.
     * @return $this
     */
    public function setCustomerSignatureRequired($customerSignatureRequired)
    {
        $this->container['customerSignatureRequired'] = $customerSignatureRequired;

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


