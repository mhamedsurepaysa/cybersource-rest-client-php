<?php
/**
 * PtsV2CreateOrderPost201Response
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
 * PtsV2CreateOrderPost201Response Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2CreateOrderPost201Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2CreateOrderPost201Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'submitTimeUtc' => 'string',
        'updateTimeUtc' => 'string',
        'status' => 'string',
        'reconciliationId' => 'string',
        'clientReferenceInformation' => '\CyberSource\Model\PtsV2IncrementalAuthorizationPatch201ResponseClientReferenceInformation',
        'processorInformation' => '\CyberSource\Model\PtsV2CreateOrderPost201ResponseProcessorInformation',
        'paymentInformation' => '\CyberSource\Model\PtsV2PaymentsOrderPost201ResponsePaymentInformation',
        'buyerInformation' => '\CyberSource\Model\PtsV2CreateOrderPost201ResponseBuyerInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'submitTimeUtc' => null,
        'updateTimeUtc' => null,
        'status' => null,
        'reconciliationId' => null,
        'clientReferenceInformation' => null,
        'processorInformation' => null,
        'paymentInformation' => null,
        'buyerInformation' => null
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
        'submitTimeUtc' => 'submitTimeUtc',
        'updateTimeUtc' => 'updateTimeUtc',
        'status' => 'status',
        'reconciliationId' => 'reconciliationId',
        'clientReferenceInformation' => 'clientReferenceInformation',
        'processorInformation' => 'processorInformation',
        'paymentInformation' => 'paymentInformation',
        'buyerInformation' => 'buyerInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'submitTimeUtc' => 'setSubmitTimeUtc',
        'updateTimeUtc' => 'setUpdateTimeUtc',
        'status' => 'setStatus',
        'reconciliationId' => 'setReconciliationId',
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'processorInformation' => 'setProcessorInformation',
        'paymentInformation' => 'setPaymentInformation',
        'buyerInformation' => 'setBuyerInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'submitTimeUtc' => 'getSubmitTimeUtc',
        'updateTimeUtc' => 'getUpdateTimeUtc',
        'status' => 'getStatus',
        'reconciliationId' => 'getReconciliationId',
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'processorInformation' => 'getProcessorInformation',
        'paymentInformation' => 'getPaymentInformation',
        'buyerInformation' => 'getBuyerInformation'
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
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
        $this->container['updateTimeUtc'] = isset($data['updateTimeUtc']) ? $data['updateTimeUtc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['processorInformation'] = isset($data['processorInformation']) ? $data['processorInformation'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['buyerInformation'] = isset($data['buyerInformation']) ? $data['buyerInformation'] : null;
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
     * Gets submitTimeUtc
     * @return string
     */
    public function getSubmitTimeUtc()
    {
        return $this->container['submitTimeUtc'];
    }

    /**
     * Sets submitTimeUtc
     * @param string $submitTimeUtc Time of request in UTC. Format: `YYYY-MM-DDThh:mm:ssZ` **Example** `2016-08-11T22:47:57Z` equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The `T` separates the date and the time. The `Z` indicates UTC.  Returned by Cybersource for all services.
     * @return $this
     */
    public function setSubmitTimeUtc($submitTimeUtc)
    {
        $this->container['submitTimeUtc'] = $submitTimeUtc;

        return $this;
    }

    /**
     * Gets updateTimeUtc
     * @return string
     */
    public function getUpdateTimeUtc()
    {
        return $this->container['updateTimeUtc'];
    }

    /**
     * Sets updateTimeUtc
     * @param string $updateTimeUtc The date and time when the request was last updated. **Example** `2016-08-11T22:47:57Z` equals August 11, 2016, at 22:47:57 (10:47:57 p.m.).
     * @return $this
     */
    public function setUpdateTimeUtc($updateTimeUtc)
    {
        $this->container['updateTimeUtc'] = $updateTimeUtc;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of the submitted transaction. Possible values:   - CREATED   - SAVED   - APPROVED   - VOIDED   - COMPLETED   - PAYER_ACTION_REQUIRED
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reconciliationId
     * @return string
     */
    public function getReconciliationId()
    {
        return $this->container['reconciliationId'];
    }

    /**
     * Sets reconciliationId
     * @param string $reconciliationId Reference number for the transaction. Depending on how your Cybersource account is configured, this value could either be provided in the API request or generated by CyberSource. The actual value used in the request to the processor is provided back to you by Cybersource in the response.
     * @return $this
     */
    public function setReconciliationId($reconciliationId)
    {
        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets clientReferenceInformation
     * @return \CyberSource\Model\PtsV2IncrementalAuthorizationPatch201ResponseClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \CyberSource\Model\PtsV2IncrementalAuthorizationPatch201ResponseClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets processorInformation
     * @return \CyberSource\Model\PtsV2CreateOrderPost201ResponseProcessorInformation
     */
    public function getProcessorInformation()
    {
        return $this->container['processorInformation'];
    }

    /**
     * Sets processorInformation
     * @param \CyberSource\Model\PtsV2CreateOrderPost201ResponseProcessorInformation $processorInformation
     * @return $this
     */
    public function setProcessorInformation($processorInformation)
    {
        $this->container['processorInformation'] = $processorInformation;

        return $this;
    }

    /**
     * Gets paymentInformation
     * @return \CyberSource\Model\PtsV2PaymentsOrderPost201ResponsePaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \CyberSource\Model\PtsV2PaymentsOrderPost201ResponsePaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

        return $this;
    }

    /**
     * Gets buyerInformation
     * @return \CyberSource\Model\PtsV2CreateOrderPost201ResponseBuyerInformation
     */
    public function getBuyerInformation()
    {
        return $this->container['buyerInformation'];
    }

    /**
     * Sets buyerInformation
     * @param \CyberSource\Model\PtsV2CreateOrderPost201ResponseBuyerInformation $buyerInformation
     * @return $this
     */
    public function setBuyerInformation($buyerInformation)
    {
        $this->container['buyerInformation'] = $buyerInformation;

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

