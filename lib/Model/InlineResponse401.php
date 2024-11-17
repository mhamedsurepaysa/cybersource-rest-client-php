<?php
/**
 * InlineResponse401
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
 * InlineResponse401 Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse401 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_401';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\InlineResponse401Links',
        'code' => 'string',
        'correlationId' => 'string',
        'detail' => 'string',
        'fields' => '\CyberSource\Model\InlineResponse401Fields[]',
        'localizationKey' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'code' => null,
        'correlationId' => null,
        'detail' => null,
        'fields' => null,
        'localizationKey' => null,
        'message' => null
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
        'links' => '_links',
        'code' => 'code',
        'correlationId' => 'correlationId',
        'detail' => 'detail',
        'fields' => 'fields',
        'localizationKey' => 'localizationKey',
        'message' => 'message'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'code' => 'setCode',
        'correlationId' => 'setCorrelationId',
        'detail' => 'setDetail',
        'fields' => 'setFields',
        'localizationKey' => 'setLocalizationKey',
        'message' => 'setMessage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'code' => 'getCode',
        'correlationId' => 'getCorrelationId',
        'detail' => 'getDetail',
        'fields' => 'getFields',
        'localizationKey' => 'getLocalizationKey',
        'message' => 'getMessage'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['correlationId'] = isset($data['correlationId']) ? $data['correlationId'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['localizationKey'] = isset($data['localizationKey']) ? $data['localizationKey'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
     * Gets links
     * @return \CyberSource\Model\InlineResponse401Links
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\InlineResponse401Links $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Valid Values:   * FORBIDDEN_RESPONSE   * VALIDATION_ERROR   * UNSUPPORTED_MEDIA_TYPE   * MALFORMED_PAYLOAD_ERROR   * SERVER_ERROR
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets correlationId
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->container['correlationId'];
    }

    /**
     * Sets correlationId
     * @param string $correlationId
     * @return $this
     */
    public function setCorrelationId($correlationId)
    {
        $this->container['correlationId'] = $correlationId;

        return $this;
    }

    /**
     * Gets detail
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     * @param string $detail
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets fields
     * @return \CyberSource\Model\InlineResponse401Fields[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     * @param \CyberSource\Model\InlineResponse401Fields[] $fields
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets localizationKey
     * @return string
     */
    public function getLocalizationKey()
    {
        return $this->container['localizationKey'];
    }

    /**
     * Sets localizationKey
     * @param string $localizationKey Valid Values:   * cybsapi.forbidden.response   * cybsapi.validation.error   * cybsapi.media.notsupported
     * @return $this
     */
    public function setLocalizationKey($localizationKey)
    {
        $this->container['localizationKey'] = $localizationKey;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
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


