<?php
/**
 * CardProcessingConfigCommonAcquirer
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
 * CardProcessingConfigCommonAcquirer Class Doc Comment
 *
 * @category    Class
 * @description Identifies the financial institution acting as the acquirer of this customer transaction. The acquirer is the member or system user that signed the merchant.
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CardProcessingConfigCommonAcquirer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CardProcessingConfig_common_acquirer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'institutionId' => 'string',
        'interbankCardAssociationId' => 'string',
        'discoverInstitutionId' => 'string',
        'unionPayInstitutionId' => 'string',
        'dinersClubInstitutionId' => 'string',
        'countryCode' => 'string',
        'fileDestinationBin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'institutionId' => null,
        'interbankCardAssociationId' => null,
        'discoverInstitutionId' => null,
        'unionPayInstitutionId' => null,
        'dinersClubInstitutionId' => null,
        'countryCode' => null,
        'fileDestinationBin' => null
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
        'institutionId' => 'institutionId',
        'interbankCardAssociationId' => 'interbankCardAssociationId',
        'discoverInstitutionId' => 'discoverInstitutionId',
        'unionPayInstitutionId' => 'unionPayInstitutionId',
        'dinersClubInstitutionId' => 'dinersClubInstitutionId',
        'countryCode' => 'countryCode',
        'fileDestinationBin' => 'fileDestinationBin'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'institutionId' => 'setInstitutionId',
        'interbankCardAssociationId' => 'setInterbankCardAssociationId',
        'discoverInstitutionId' => 'setDiscoverInstitutionId',
        'unionPayInstitutionId' => 'setUnionPayInstitutionId',
        'dinersClubInstitutionId' => 'setDinersClubInstitutionId',
        'countryCode' => 'setCountryCode',
        'fileDestinationBin' => 'setFileDestinationBin'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'institutionId' => 'getInstitutionId',
        'interbankCardAssociationId' => 'getInterbankCardAssociationId',
        'discoverInstitutionId' => 'getDiscoverInstitutionId',
        'unionPayInstitutionId' => 'getUnionPayInstitutionId',
        'dinersClubInstitutionId' => 'getDinersClubInstitutionId',
        'countryCode' => 'getCountryCode',
        'fileDestinationBin' => 'getFileDestinationBin'
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
        $this->container['institutionId'] = isset($data['institutionId']) ? $data['institutionId'] : null;
        $this->container['interbankCardAssociationId'] = isset($data['interbankCardAssociationId']) ? $data['interbankCardAssociationId'] : null;
        $this->container['discoverInstitutionId'] = isset($data['discoverInstitutionId']) ? $data['discoverInstitutionId'] : null;
        $this->container['unionPayInstitutionId'] = isset($data['unionPayInstitutionId']) ? $data['unionPayInstitutionId'] : null;
        $this->container['dinersClubInstitutionId'] = isset($data['dinersClubInstitutionId']) ? $data['dinersClubInstitutionId'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['fileDestinationBin'] = isset($data['fileDestinationBin']) ? $data['fileDestinationBin'] : null;
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
     * Gets institutionId
     * @return string
     */
    public function getInstitutionId()
    {
        return $this->container['institutionId'];
    }

    /**
     * Sets institutionId
     * @param string $institutionId Identifier of the acquirer. This number is usually assigned by Visa. Applicable for VPC, GPX (gpx), CMCIC (cmcic), EFTPOS, CB2A, CUP, American Express Direct (amexdirect) and Six (six) processors.  Validation details (for selected processors)...  <table> <thead><tr><th>Processor</th><th>Acceptance Type</th><th>Required</th><th>Min. Length</th><th>Max. Length</th><th>Regex</th><th>Default Value</th></tr></thead> <tr><td>American Express Direct</td><td>cnp, cp, hybrid</td><td>Yes</td><td>1</td><td>13</td><td>^[0-9]+$</td><td>1111</td></tr> </table>
     * @return $this
     */
    public function setInstitutionId($institutionId)
    {
        $this->container['institutionId'] = $institutionId;

        return $this;
    }

    /**
     * Gets interbankCardAssociationId
     * @return string
     */
    public function getInterbankCardAssociationId()
    {
        return $this->container['interbankCardAssociationId'];
    }

    /**
     * Sets interbankCardAssociationId
     * @param string $interbankCardAssociationId Number assigned by MasterCard to banks to identify the member in transactions. Applicable for VPC and GPX (gpx) processors.
     * @return $this
     */
    public function setInterbankCardAssociationId($interbankCardAssociationId)
    {
        $this->container['interbankCardAssociationId'] = $interbankCardAssociationId;

        return $this;
    }

    /**
     * Gets discoverInstitutionId
     * @return string
     */
    public function getDiscoverInstitutionId()
    {
        return $this->container['discoverInstitutionId'];
    }

    /**
     * Sets discoverInstitutionId
     * @param string $discoverInstitutionId Assigned by Discover to identify the acquirer. Applicable for VPC and GPX (gpx) processors.
     * @return $this
     */
    public function setDiscoverInstitutionId($discoverInstitutionId)
    {
        $this->container['discoverInstitutionId'] = $discoverInstitutionId;

        return $this;
    }

    /**
     * Gets unionPayInstitutionId
     * @return string
     */
    public function getUnionPayInstitutionId()
    {
        return $this->container['unionPayInstitutionId'];
    }

    /**
     * Sets unionPayInstitutionId
     * @param string $unionPayInstitutionId Assigned by China Union Pay to identify the acquirer. Applicable for VPC processors.
     * @return $this
     */
    public function setUnionPayInstitutionId($unionPayInstitutionId)
    {
        $this->container['unionPayInstitutionId'] = $unionPayInstitutionId;

        return $this;
    }

    /**
     * Gets dinersClubInstitutionId
     * @return string
     */
    public function getDinersClubInstitutionId()
    {
        return $this->container['dinersClubInstitutionId'];
    }

    /**
     * Sets dinersClubInstitutionId
     * @param string $dinersClubInstitutionId Assigned by Diners Club to identify the acquirer. Applicable for VPC processors.
     * @return $this
     */
    public function setDinersClubInstitutionId($dinersClubInstitutionId)
    {
        $this->container['dinersClubInstitutionId'] = $dinersClubInstitutionId;

        return $this;
    }

    /**
     * Gets countryCode
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     * @param string $countryCode ISO 4217 format. Applicable for VPC, GPX (gpx), EFTPOS, RUPAY, Prisma (prisma) and CUP processors.
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets fileDestinationBin
     * @return string
     */
    public function getFileDestinationBin()
    {
        return $this->container['fileDestinationBin'];
    }

    /**
     * Sets fileDestinationBin
     * @param string $fileDestinationBin The BIN to which this capturefile is sent. This field must contain a valid BIN. Applicable for VPC and GPX (gpx) processors.
     * @return $this
     */
    public function setFileDestinationBin($fileDestinationBin)
    {
        $this->container['fileDestinationBin'] = $fileDestinationBin;

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


