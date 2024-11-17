<?php
/**
 * InlineResponseDefaultLinks
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
 * InlineResponseDefaultLinks Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponseDefaultLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_default__links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'next' => '\CyberSource\Model\InlineResponseDefaultLinksNext[]',
        'documentation' => '\CyberSource\Model\InlineResponseDefaultLinksNext[]',
        'self' => '\CyberSource\Model\InlineResponseDefaultLinksNext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'next' => null,
        'documentation' => null,
        'self' => null
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
        'next' => 'next',
        'documentation' => 'documentation',
        'self' => 'self'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'next' => 'setNext',
        'documentation' => 'setDocumentation',
        'self' => 'setSelf'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'next' => 'getNext',
        'documentation' => 'getDocumentation',
        'self' => 'getSelf'
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
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['documentation'] = isset($data['documentation']) ? $data['documentation'] : null;
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
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
     * Gets next
     * @return \CyberSource\Model\InlineResponseDefaultLinksNext[]
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     * @param \CyberSource\Model\InlineResponseDefaultLinksNext[] $next
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets documentation
     * @return \CyberSource\Model\InlineResponseDefaultLinksNext[]
     */
    public function getDocumentation()
    {
        return $this->container['documentation'];
    }

    /**
     * Sets documentation
     * @param \CyberSource\Model\InlineResponseDefaultLinksNext[] $documentation
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        $this->container['documentation'] = $documentation;

        return $this;
    }

    /**
     * Gets self
     * @return \CyberSource\Model\InlineResponseDefaultLinksNext
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     * @param \CyberSource\Model\InlineResponseDefaultLinksNext $self
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

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


