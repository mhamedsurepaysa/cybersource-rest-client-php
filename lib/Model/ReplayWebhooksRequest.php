<?php
/**
 * ReplayWebhooksRequest
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
 * ReplayWebhooksRequest Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReplayWebhooksRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'replayWebhooksRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'byTransactionTraceIdentifiers' => 'string[]',
        'byDeliveryStatus' => '\CyberSource\Model\Nrtfv1webhookswebhookIdreplaysByDeliveryStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'byTransactionTraceIdentifiers' => null,
        'byDeliveryStatus' => null
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
        'byTransactionTraceIdentifiers' => 'byTransactionTraceIdentifiers',
        'byDeliveryStatus' => 'byDeliveryStatus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'byTransactionTraceIdentifiers' => 'setByTransactionTraceIdentifiers',
        'byDeliveryStatus' => 'setByDeliveryStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'byTransactionTraceIdentifiers' => 'getByTransactionTraceIdentifiers',
        'byDeliveryStatus' => 'getByDeliveryStatus'
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
        $this->container['byTransactionTraceIdentifiers'] = isset($data['byTransactionTraceIdentifiers']) ? $data['byTransactionTraceIdentifiers'] : null;
        $this->container['byDeliveryStatus'] = isset($data['byDeliveryStatus']) ? $data['byDeliveryStatus'] : null;
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
     * Gets byTransactionTraceIdentifiers
     * @return string[]
     */
    public function getByTransactionTraceIdentifiers()
    {
        return $this->container['byTransactionTraceIdentifiers'];
    }

    /**
     * Sets byTransactionTraceIdentifiers
     * @param string[] $byTransactionTraceIdentifiers
     * @return $this
     */
    public function setByTransactionTraceIdentifiers($byTransactionTraceIdentifiers)
    {
        $this->container['byTransactionTraceIdentifiers'] = $byTransactionTraceIdentifiers;

        return $this;
    }

    /**
     * Gets byDeliveryStatus
     * @return \CyberSource\Model\Nrtfv1webhookswebhookIdreplaysByDeliveryStatus
     */
    public function getByDeliveryStatus()
    {
        return $this->container['byDeliveryStatus'];
    }

    /**
     * Sets byDeliveryStatus
     * @param \CyberSource\Model\Nrtfv1webhookswebhookIdreplaysByDeliveryStatus $byDeliveryStatus
     * @return $this
     */
    public function setByDeliveryStatus($byDeliveryStatus)
    {
        $this->container['byDeliveryStatus'] = $byDeliveryStatus;

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


