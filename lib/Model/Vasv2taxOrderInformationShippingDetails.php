<?php
/**
 * Vasv2taxOrderInformationShippingDetails
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
 * Vasv2taxOrderInformationShippingDetails Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Vasv2taxOrderInformationShippingDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'vasv2tax_orderInformation_shippingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipFromLocality' => 'string',
        'shipFromCountry' => 'string',
        'shipFromPostalCode' => 'string',
        'shipFromAdministrativeArea' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipFromLocality' => null,
        'shipFromCountry' => null,
        'shipFromPostalCode' => null,
        'shipFromAdministrativeArea' => null
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
        'shipFromLocality' => 'shipFromLocality',
        'shipFromCountry' => 'shipFromCountry',
        'shipFromPostalCode' => 'shipFromPostalCode',
        'shipFromAdministrativeArea' => 'shipFromAdministrativeArea'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'shipFromLocality' => 'setShipFromLocality',
        'shipFromCountry' => 'setShipFromCountry',
        'shipFromPostalCode' => 'setShipFromPostalCode',
        'shipFromAdministrativeArea' => 'setShipFromAdministrativeArea'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'shipFromLocality' => 'getShipFromLocality',
        'shipFromCountry' => 'getShipFromCountry',
        'shipFromPostalCode' => 'getShipFromPostalCode',
        'shipFromAdministrativeArea' => 'getShipFromAdministrativeArea'
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
        $this->container['shipFromLocality'] = isset($data['shipFromLocality']) ? $data['shipFromLocality'] : null;
        $this->container['shipFromCountry'] = isset($data['shipFromCountry']) ? $data['shipFromCountry'] : null;
        $this->container['shipFromPostalCode'] = isset($data['shipFromPostalCode']) ? $data['shipFromPostalCode'] : null;
        $this->container['shipFromAdministrativeArea'] = isset($data['shipFromAdministrativeArea']) ? $data['shipFromAdministrativeArea'] : null;
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
     * Gets shipFromLocality
     * @return string
     */
    public function getShipFromLocality()
    {
        return $this->container['shipFromLocality'];
    }

    /**
     * Sets shipFromLocality
     * @param string $shipFromLocality City where the product is shipped from. This field is used only when the `orderInformation.shipTo.administrativeArea` and `orderInformation.shipTo.country` fields are present.  **NOTE** If this field appears in a `lineItems` object, then the value of this field in the `lineItems` object overrides the value of the corresponding field at the request-level or order-level object.  #### Tax Calculation This field is used to determine tax rules and/or rates applied to the transaction based on sourcing.  Optional for U.S. and Canadian taxes. Not applicable to international and value added taxes.
     * @return $this
     */
    public function setShipFromLocality($shipFromLocality)
    {
        $this->container['shipFromLocality'] = $shipFromLocality;

        return $this;
    }

    /**
     * Gets shipFromCountry
     * @return string
     */
    public function getShipFromCountry()
    {
        return $this->container['shipFromCountry'];
    }

    /**
     * Sets shipFromCountry
     * @param string $shipFromCountry Country from which the order is shipped. This field is used only when `orderInformation.shippingDetails.shipFromLocality` and `orderInformation.shippingDetails.shipFromAdministrativeArea` are present. Use the [ISO Standard Country Codes](http://apps.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf).  **NOTE** If this field appears in a `lineItems` object, then the value of this field in the `lineItems` object overrides the value of the corresponding field at the request-level or order-level object.  #### Tax Calculation This field is used to determine tax rules and/ or rates applied to the transaction based on sourcing.  Optional for U.S., Canadian, international tax, and value added taxes.
     * @return $this
     */
    public function setShipFromCountry($shipFromCountry)
    {
        $this->container['shipFromCountry'] = $shipFromCountry;

        return $this;
    }

    /**
     * Gets shipFromPostalCode
     * @return string
     */
    public function getShipFromPostalCode()
    {
        return $this->container['shipFromPostalCode'];
    }

    /**
     * Sets shipFromPostalCode
     * @param string $shipFromPostalCode Postal code where the product is shipped from.  #### Tax Calculation This field is used to determine tax rules and/or rates applied to the transaction based on sourcing.  Optional for U.S. and Canadian taxes. Not applicable to international and value added taxes.
     * @return $this
     */
    public function setShipFromPostalCode($shipFromPostalCode)
    {
        $this->container['shipFromPostalCode'] = $shipFromPostalCode;

        return $this;
    }

    /**
     * Gets shipFromAdministrativeArea
     * @return string
     */
    public function getShipFromAdministrativeArea()
    {
        return $this->container['shipFromAdministrativeArea'];
    }

    /**
     * Sets shipFromAdministrativeArea
     * @param string $shipFromAdministrativeArea State from which the order is shipped. This field is used only when `orderInformation.shippingDetails.shipFromLocality` and `orderInformation.shippingDetails.shipFromCountry` are present. Use the [State, Province, and Territory Codes for the United States and Canada](http://apps.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf).  **NOTE** If this field appears in a `lineItems` object, then the value of this field in the `lineItems` object overrides the value of the corresponding field at the request-level or order-level object.  #### Tax Calculation This field is used to determine tax rules and/or rates applied to the transaction based on sourcing.  Optional for U.S. and Canadian taxes. Not applicable to international and value added taxes.
     * @return $this
     */
    public function setShipFromAdministrativeArea($shipFromAdministrativeArea)
    {
        $this->container['shipFromAdministrativeArea'] = $shipFromAdministrativeArea;

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


