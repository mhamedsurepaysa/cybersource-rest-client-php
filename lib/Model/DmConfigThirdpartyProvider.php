<?php
/**
 * DmConfigThirdpartyProvider
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
 * DmConfigThirdpartyProvider Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DmConfigThirdpartyProvider implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DmConfig_thirdparty_provider';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accurint' => '\CyberSource\Model\DmConfigThirdpartyProviderAccurint',
        'credilink' => '\CyberSource\Model\DmConfigThirdpartyProviderCredilink',
        'ekata' => '\CyberSource\Model\DmConfigThirdpartyProviderEkata',
        'emailage' => '\CyberSource\Model\DmConfigThirdpartyProviderEmailage',
        'perseuss' => '\CyberSource\Model\DmConfigThirdpartyProviderPerseuss',
        'signifyd' => '\CyberSource\Model\DmConfigThirdpartyProviderSignifyd',
        'targus' => '\CyberSource\Model\DmConfigThirdpartyProviderTargus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accurint' => null,
        'credilink' => null,
        'ekata' => null,
        'emailage' => null,
        'perseuss' => null,
        'signifyd' => null,
        'targus' => null
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
        'accurint' => 'accurint',
        'credilink' => 'credilink',
        'ekata' => 'ekata',
        'emailage' => 'emailage',
        'perseuss' => 'perseuss',
        'signifyd' => 'signifyd',
        'targus' => 'targus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accurint' => 'setAccurint',
        'credilink' => 'setCredilink',
        'ekata' => 'setEkata',
        'emailage' => 'setEmailage',
        'perseuss' => 'setPerseuss',
        'signifyd' => 'setSignifyd',
        'targus' => 'setTargus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accurint' => 'getAccurint',
        'credilink' => 'getCredilink',
        'ekata' => 'getEkata',
        'emailage' => 'getEmailage',
        'perseuss' => 'getPerseuss',
        'signifyd' => 'getSignifyd',
        'targus' => 'getTargus'
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
        $this->container['accurint'] = isset($data['accurint']) ? $data['accurint'] : null;
        $this->container['credilink'] = isset($data['credilink']) ? $data['credilink'] : null;
        $this->container['ekata'] = isset($data['ekata']) ? $data['ekata'] : null;
        $this->container['emailage'] = isset($data['emailage']) ? $data['emailage'] : null;
        $this->container['perseuss'] = isset($data['perseuss']) ? $data['perseuss'] : null;
        $this->container['signifyd'] = isset($data['signifyd']) ? $data['signifyd'] : null;
        $this->container['targus'] = isset($data['targus']) ? $data['targus'] : null;
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
     * Gets accurint
     * @return \CyberSource\Model\DmConfigThirdpartyProviderAccurint
     */
    public function getAccurint()
    {
        return $this->container['accurint'];
    }

    /**
     * Sets accurint
     * @param \CyberSource\Model\DmConfigThirdpartyProviderAccurint $accurint
     * @return $this
     */
    public function setAccurint($accurint)
    {
        $this->container['accurint'] = $accurint;

        return $this;
    }

    /**
     * Gets credilink
     * @return \CyberSource\Model\DmConfigThirdpartyProviderCredilink
     */
    public function getCredilink()
    {
        return $this->container['credilink'];
    }

    /**
     * Sets credilink
     * @param \CyberSource\Model\DmConfigThirdpartyProviderCredilink $credilink
     * @return $this
     */
    public function setCredilink($credilink)
    {
        $this->container['credilink'] = $credilink;

        return $this;
    }

    /**
     * Gets ekata
     * @return \CyberSource\Model\DmConfigThirdpartyProviderEkata
     */
    public function getEkata()
    {
        return $this->container['ekata'];
    }

    /**
     * Sets ekata
     * @param \CyberSource\Model\DmConfigThirdpartyProviderEkata $ekata
     * @return $this
     */
    public function setEkata($ekata)
    {
        $this->container['ekata'] = $ekata;

        return $this;
    }

    /**
     * Gets emailage
     * @return \CyberSource\Model\DmConfigThirdpartyProviderEmailage
     */
    public function getEmailage()
    {
        return $this->container['emailage'];
    }

    /**
     * Sets emailage
     * @param \CyberSource\Model\DmConfigThirdpartyProviderEmailage $emailage
     * @return $this
     */
    public function setEmailage($emailage)
    {
        $this->container['emailage'] = $emailage;

        return $this;
    }

    /**
     * Gets perseuss
     * @return \CyberSource\Model\DmConfigThirdpartyProviderPerseuss
     */
    public function getPerseuss()
    {
        return $this->container['perseuss'];
    }

    /**
     * Sets perseuss
     * @param \CyberSource\Model\DmConfigThirdpartyProviderPerseuss $perseuss
     * @return $this
     */
    public function setPerseuss($perseuss)
    {
        $this->container['perseuss'] = $perseuss;

        return $this;
    }

    /**
     * Gets signifyd
     * @return \CyberSource\Model\DmConfigThirdpartyProviderSignifyd
     */
    public function getSignifyd()
    {
        return $this->container['signifyd'];
    }

    /**
     * Sets signifyd
     * @param \CyberSource\Model\DmConfigThirdpartyProviderSignifyd $signifyd
     * @return $this
     */
    public function setSignifyd($signifyd)
    {
        $this->container['signifyd'] = $signifyd;

        return $this;
    }

    /**
     * Gets targus
     * @return \CyberSource\Model\DmConfigThirdpartyProviderTargus
     */
    public function getTargus()
    {
        return $this->container['targus'];
    }

    /**
     * Sets targus
     * @param \CyberSource\Model\DmConfigThirdpartyProviderTargus $targus
     * @return $this
     */
    public function setTargus($targus)
    {
        $this->container['targus'] = $targus;

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


