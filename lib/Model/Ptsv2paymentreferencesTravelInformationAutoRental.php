<?php
/**
 * Ptsv2paymentreferencesTravelInformationAutoRental
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
 * Ptsv2paymentreferencesTravelInformationAutoRental Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentreferencesTravelInformationAutoRental implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentreferences_travelInformation_autoRental';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'companyName' => 'string',
        'affiliateName' => 'string',
        'rentalAddress' => '\CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalRentalAddress',
        'returnAddress' => '\CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalReturnAddress',
        'returnDateTime' => 'string',
        'rentalDateTime' => 'string',
        'customerName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'companyName' => null,
        'affiliateName' => null,
        'rentalAddress' => null,
        'returnAddress' => null,
        'returnDateTime' => null,
        'rentalDateTime' => null,
        'customerName' => null
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
        'companyName' => 'companyName',
        'affiliateName' => 'affiliateName',
        'rentalAddress' => 'rentalAddress',
        'returnAddress' => 'returnAddress',
        'returnDateTime' => 'returnDateTime',
        'rentalDateTime' => 'rentalDateTime',
        'customerName' => 'customerName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'companyName' => 'setCompanyName',
        'affiliateName' => 'setAffiliateName',
        'rentalAddress' => 'setRentalAddress',
        'returnAddress' => 'setReturnAddress',
        'returnDateTime' => 'setReturnDateTime',
        'rentalDateTime' => 'setRentalDateTime',
        'customerName' => 'setCustomerName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'companyName' => 'getCompanyName',
        'affiliateName' => 'getAffiliateName',
        'rentalAddress' => 'getRentalAddress',
        'returnAddress' => 'getReturnAddress',
        'returnDateTime' => 'getReturnDateTime',
        'rentalDateTime' => 'getRentalDateTime',
        'customerName' => 'getCustomerName'
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
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['affiliateName'] = isset($data['affiliateName']) ? $data['affiliateName'] : null;
        $this->container['rentalAddress'] = isset($data['rentalAddress']) ? $data['rentalAddress'] : null;
        $this->container['returnAddress'] = isset($data['returnAddress']) ? $data['returnAddress'] : null;
        $this->container['returnDateTime'] = isset($data['returnDateTime']) ? $data['returnDateTime'] : null;
        $this->container['rentalDateTime'] = isset($data['rentalDateTime']) ? $data['rentalDateTime'] : null;
        $this->container['customerName'] = isset($data['customerName']) ? $data['customerName'] : null;
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
     * Gets companyName
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     * @param string $companyName Merchant to send their auto rental company name
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets affiliateName
     * @return string
     */
    public function getAffiliateName()
    {
        return $this->container['affiliateName'];
    }

    /**
     * Sets affiliateName
     * @param string $affiliateName When merchant wants to send the affiliate name.
     * @return $this
     */
    public function setAffiliateName($affiliateName)
    {
        $this->container['affiliateName'] = $affiliateName;

        return $this;
    }

    /**
     * Gets rentalAddress
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalRentalAddress
     */
    public function getRentalAddress()
    {
        return $this->container['rentalAddress'];
    }

    /**
     * Sets rentalAddress
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalRentalAddress $rentalAddress
     * @return $this
     */
    public function setRentalAddress($rentalAddress)
    {
        $this->container['rentalAddress'] = $rentalAddress;

        return $this;
    }

    /**
     * Gets returnAddress
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalReturnAddress
     */
    public function getReturnAddress()
    {
        return $this->container['returnAddress'];
    }

    /**
     * Sets returnAddress
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalReturnAddress $returnAddress
     * @return $this
     */
    public function setReturnAddress($returnAddress)
    {
        $this->container['returnAddress'] = $returnAddress;

        return $this;
    }

    /**
     * Gets returnDateTime
     * @return string
     */
    public function getReturnDateTime()
    {
        return $this->container['returnDateTime'];
    }

    /**
     * Sets returnDateTime
     * @param string $returnDateTime Date/time the auto was returned to the rental agency. Format: ``yyyy-MM-dd HH-mm-ss z`` This field is supported for Visa, MasterCard, and American Express.
     * @return $this
     */
    public function setReturnDateTime($returnDateTime)
    {
        $this->container['returnDateTime'] = $returnDateTime;

        return $this;
    }

    /**
     * Gets rentalDateTime
     * @return string
     */
    public function getRentalDateTime()
    {
        return $this->container['rentalDateTime'];
    }

    /**
     * Sets rentalDateTime
     * @param string $rentalDateTime Date/time the auto was picked up from the rental agency. Format: `yyyy-MM-dd HH-mm-ss z` This field is supported for Visa, MasterCard, and American Express.
     * @return $this
     */
    public function setRentalDateTime($rentalDateTime)
    {
        $this->container['rentalDateTime'] = $rentalDateTime;

        return $this;
    }

    /**
     * Gets customerName
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    /**
     * Sets customerName
     * @param string $customerName Name of the individual making the rental agreement.  Valid data lengths by card:  |Card Specific Validation|VISA|MasterCard|Discover|AMEX| |--- |--- |--- |--- | | Filed Length| 40| 40| 29| 26| | Field Type| AN| ANS| AN| AN| | M/O/C| O| M| M| M|
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        $this->container['customerName'] = $customerName;

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


