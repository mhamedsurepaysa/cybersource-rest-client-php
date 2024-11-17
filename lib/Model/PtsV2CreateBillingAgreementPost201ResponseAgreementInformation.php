<?php
/**
 * PtsV2CreateBillingAgreementPost201ResponseAgreementInformation
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
 * PtsV2CreateBillingAgreementPost201ResponseAgreementInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2CreateBillingAgreementPost201ResponseAgreementInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2CreateBillingAgreementPost201Response_agreementInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'dateSigned' => 'string',
        'dateCreated' => 'string',
        'encodedHtml' => 'string',
        'encodedHtmlPopup' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'dateSigned' => null,
        'dateCreated' => null,
        'encodedHtml' => null,
        'encodedHtmlPopup' => null,
        'url' => null
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
        'id' => 'id',
        'dateSigned' => 'dateSigned',
        'dateCreated' => 'dateCreated',
        'encodedHtml' => 'encodedHtml',
        'encodedHtmlPopup' => 'encodedHtmlPopup',
        'url' => 'url'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'dateSigned' => 'setDateSigned',
        'dateCreated' => 'setDateCreated',
        'encodedHtml' => 'setEncodedHtml',
        'encodedHtmlPopup' => 'setEncodedHtmlPopup',
        'url' => 'setUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'dateSigned' => 'getDateSigned',
        'dateCreated' => 'getDateCreated',
        'encodedHtml' => 'getEncodedHtml',
        'encodedHtmlPopup' => 'getEncodedHtmlPopup',
        'url' => 'getUrl'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dateSigned'] = isset($data['dateSigned']) ? $data['dateSigned'] : null;
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['encodedHtml'] = isset($data['encodedHtml']) ? $data['encodedHtml'] : null;
        $this->container['encodedHtmlPopup'] = isset($data['encodedHtmlPopup']) ? $data['encodedHtmlPopup'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Identifier for the mandate.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets dateSigned
     * @return string
     */
    public function getDateSigned()
    {
        return $this->container['dateSigned'];
    }

    /**
     * Sets dateSigned
     * @param string $dateSigned Date the mandate has been signed.  Format YYYYMMdd
     * @return $this
     */
    public function setDateSigned($dateSigned)
    {
        $this->container['dateSigned'] = $dateSigned;

        return $this;
    }

    /**
     * Gets dateCreated
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     * @param string $dateCreated Date the mandate has been created.  Format YYYYMMdd
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets encodedHtml
     * @return string
     */
    public function getEncodedHtml()
    {
        return $this->container['encodedHtml'];
    }

    /**
     * Sets encodedHtml
     * @param string $encodedHtml Base64 encoded html string
     * @return $this
     */
    public function setEncodedHtml($encodedHtml)
    {
        $this->container['encodedHtml'] = $encodedHtml;

        return $this;
    }

    /**
     * Gets encodedHtmlPopup
     * @return string
     */
    public function getEncodedHtmlPopup()
    {
        return $this->container['encodedHtmlPopup'];
    }

    /**
     * Sets encodedHtmlPopup
     * @param string $encodedHtmlPopup Base64 encoded popup html string
     * @return $this
     */
    public function setEncodedHtmlPopup($encodedHtmlPopup)
    {
        $this->container['encodedHtmlPopup'] = $encodedHtmlPopup;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url URL for redirecting the customer for creating the mandate.
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


