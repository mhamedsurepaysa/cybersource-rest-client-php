<?php
/**
 * Tmsv2TokenizedCardMetadataCardArt
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
 * Tmsv2TokenizedCardMetadataCardArt Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tmsv2TokenizedCardMetadataCardArt implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tmsv2TokenizedCard_metadata_cardArt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'combinedAsset' => '\CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtCombinedAsset',
        'brandLogoAsset' => '\CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtBrandLogoAsset',
        'coBrandLogoAsset' => '\CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtCoBrandLogoAsset',
        'issuerLogoAsset' => '\CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtIssuerLogoAsset',
        'iconAsset' => '\CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtIconAsset',
        'foregroundColor' => 'string',
        'backgroundAsset' => '\CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtBackgroundAsset'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'combinedAsset' => null,
        'brandLogoAsset' => null,
        'coBrandLogoAsset' => null,
        'issuerLogoAsset' => null,
        'iconAsset' => null,
        'foregroundColor' => null,
        'backgroundAsset' => null
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
        'combinedAsset' => 'combinedAsset',
        'brandLogoAsset' => 'brandLogoAsset',
        'coBrandLogoAsset' => 'coBrandLogoAsset',
        'issuerLogoAsset' => 'issuerLogoAsset',
        'iconAsset' => 'iconAsset',
        'foregroundColor' => 'foregroundColor',
        'backgroundAsset' => 'backgroundAsset'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'combinedAsset' => 'setCombinedAsset',
        'brandLogoAsset' => 'setBrandLogoAsset',
        'coBrandLogoAsset' => 'setCoBrandLogoAsset',
        'issuerLogoAsset' => 'setIssuerLogoAsset',
        'iconAsset' => 'setIconAsset',
        'foregroundColor' => 'setForegroundColor',
        'backgroundAsset' => 'setBackgroundAsset'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'combinedAsset' => 'getCombinedAsset',
        'brandLogoAsset' => 'getBrandLogoAsset',
        'coBrandLogoAsset' => 'getCoBrandLogoAsset',
        'issuerLogoAsset' => 'getIssuerLogoAsset',
        'iconAsset' => 'getIconAsset',
        'foregroundColor' => 'getForegroundColor',
        'backgroundAsset' => 'getBackgroundAsset'
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
        $this->container['combinedAsset'] = isset($data['combinedAsset']) ? $data['combinedAsset'] : null;
        $this->container['brandLogoAsset'] = isset($data['brandLogoAsset']) ? $data['brandLogoAsset'] : null;
        $this->container['coBrandLogoAsset'] = isset($data['coBrandLogoAsset']) ? $data['coBrandLogoAsset'] : null;
        $this->container['issuerLogoAsset'] = isset($data['issuerLogoAsset']) ? $data['issuerLogoAsset'] : null;
        $this->container['iconAsset'] = isset($data['iconAsset']) ? $data['iconAsset'] : null;
        $this->container['foregroundColor'] = isset($data['foregroundColor']) ? $data['foregroundColor'] : null;
        $this->container['backgroundAsset'] = isset($data['backgroundAsset']) ? $data['backgroundAsset'] : null;
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
     * Gets combinedAsset
     * @return \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtCombinedAsset
     */
    public function getCombinedAsset()
    {
        return $this->container['combinedAsset'];
    }

    /**
     * Sets combinedAsset
     * @param \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtCombinedAsset $combinedAsset
     * @return $this
     */
    public function setCombinedAsset($combinedAsset)
    {
        $this->container['combinedAsset'] = $combinedAsset;

        return $this;
    }

    /**
     * Gets brandLogoAsset
     * @return \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtBrandLogoAsset
     */
    public function getBrandLogoAsset()
    {
        return $this->container['brandLogoAsset'];
    }

    /**
     * Sets brandLogoAsset
     * @param \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtBrandLogoAsset $brandLogoAsset
     * @return $this
     */
    public function setBrandLogoAsset($brandLogoAsset)
    {
        $this->container['brandLogoAsset'] = $brandLogoAsset;

        return $this;
    }

    /**
     * Gets coBrandLogoAsset
     * @return \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtCoBrandLogoAsset
     */
    public function getCoBrandLogoAsset()
    {
        return $this->container['coBrandLogoAsset'];
    }

    /**
     * Sets coBrandLogoAsset
     * @param \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtCoBrandLogoAsset $coBrandLogoAsset
     * @return $this
     */
    public function setCoBrandLogoAsset($coBrandLogoAsset)
    {
        $this->container['coBrandLogoAsset'] = $coBrandLogoAsset;

        return $this;
    }

    /**
     * Gets issuerLogoAsset
     * @return \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtIssuerLogoAsset
     */
    public function getIssuerLogoAsset()
    {
        return $this->container['issuerLogoAsset'];
    }

    /**
     * Sets issuerLogoAsset
     * @param \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtIssuerLogoAsset $issuerLogoAsset
     * @return $this
     */
    public function setIssuerLogoAsset($issuerLogoAsset)
    {
        $this->container['issuerLogoAsset'] = $issuerLogoAsset;

        return $this;
    }

    /**
     * Gets iconAsset
     * @return \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtIconAsset
     */
    public function getIconAsset()
    {
        return $this->container['iconAsset'];
    }

    /**
     * Sets iconAsset
     * @param \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtIconAsset $iconAsset
     * @return $this
     */
    public function setIconAsset($iconAsset)
    {
        $this->container['iconAsset'] = $iconAsset;

        return $this;
    }

    /**
     * Gets foregroundColor
     * @return string
     */
    public function getForegroundColor()
    {
        return $this->container['foregroundColor'];
    }

    /**
     * Sets foregroundColor
     * @param string $foregroundColor The foreground color of the brand logo asset.
     * @return $this
     */
    public function setForegroundColor($foregroundColor)
    {
        $this->container['foregroundColor'] = $foregroundColor;

        return $this;
    }

    /**
     * Gets backgroundAsset
     * @return \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtBackgroundAsset
     */
    public function getBackgroundAsset()
    {
        return $this->container['backgroundAsset'];
    }

    /**
     * Sets backgroundAsset
     * @param \CyberSource\Model\Tmsv2TokenizedCardMetadataCardArtBackgroundAsset $backgroundAsset
     * @return $this
     */
    public function setBackgroundAsset($backgroundAsset)
    {
        $this->container['backgroundAsset'] = $backgroundAsset;

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

