<?php
/**
 * PtsV2PaymentsPost201ResponseOrderInformation
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
 * PtsV2PaymentsPost201ResponseOrderInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseOrderInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_orderInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amountDetails' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationAmountDetails',
        'invoiceDetails' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationInvoiceDetails',
        'rewardPointsDetails' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationRewardPointsDetails',
        'billTo' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationBillTo',
        'shipTo' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationShipTo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amountDetails' => null,
        'invoiceDetails' => null,
        'rewardPointsDetails' => null,
        'billTo' => null,
        'shipTo' => null
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
        'amountDetails' => 'amountDetails',
        'invoiceDetails' => 'invoiceDetails',
        'rewardPointsDetails' => 'rewardPointsDetails',
        'billTo' => 'billTo',
        'shipTo' => 'shipTo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amountDetails' => 'setAmountDetails',
        'invoiceDetails' => 'setInvoiceDetails',
        'rewardPointsDetails' => 'setRewardPointsDetails',
        'billTo' => 'setBillTo',
        'shipTo' => 'setShipTo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amountDetails' => 'getAmountDetails',
        'invoiceDetails' => 'getInvoiceDetails',
        'rewardPointsDetails' => 'getRewardPointsDetails',
        'billTo' => 'getBillTo',
        'shipTo' => 'getShipTo'
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
        $this->container['amountDetails'] = isset($data['amountDetails']) ? $data['amountDetails'] : null;
        $this->container['invoiceDetails'] = isset($data['invoiceDetails']) ? $data['invoiceDetails'] : null;
        $this->container['rewardPointsDetails'] = isset($data['rewardPointsDetails']) ? $data['rewardPointsDetails'] : null;
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['shipTo'] = isset($data['shipTo']) ? $data['shipTo'] : null;
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
     * Gets amountDetails
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationAmountDetails
     */
    public function getAmountDetails()
    {
        return $this->container['amountDetails'];
    }

    /**
     * Sets amountDetails
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationAmountDetails $amountDetails
     * @return $this
     */
    public function setAmountDetails($amountDetails)
    {
        $this->container['amountDetails'] = $amountDetails;

        return $this;
    }

    /**
     * Gets invoiceDetails
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationInvoiceDetails
     */
    public function getInvoiceDetails()
    {
        return $this->container['invoiceDetails'];
    }

    /**
     * Sets invoiceDetails
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationInvoiceDetails $invoiceDetails
     * @return $this
     */
    public function setInvoiceDetails($invoiceDetails)
    {
        $this->container['invoiceDetails'] = $invoiceDetails;

        return $this;
    }

    /**
     * Gets rewardPointsDetails
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationRewardPointsDetails
     */
    public function getRewardPointsDetails()
    {
        return $this->container['rewardPointsDetails'];
    }

    /**
     * Sets rewardPointsDetails
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationRewardPointsDetails $rewardPointsDetails
     * @return $this
     */
    public function setRewardPointsDetails($rewardPointsDetails)
    {
        $this->container['rewardPointsDetails'] = $rewardPointsDetails;

        return $this;
    }

    /**
     * Gets billTo
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationBillTo
     */
    public function getBillTo()
    {
        return $this->container['billTo'];
    }

    /**
     * Sets billTo
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationBillTo $billTo
     * @return $this
     */
    public function setBillTo($billTo)
    {
        $this->container['billTo'] = $billTo;

        return $this;
    }

    /**
     * Gets shipTo
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationShipTo
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformationShipTo $shipTo
     * @return $this
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

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


