<?php
/**
 * RiskV1DecisionsPost201Response
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
 * RiskV1DecisionsPost201Response Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1DecisionsPost201Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1DecisionsPost201Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseLinks',
        'id' => 'string',
        'submitTimeUtc' => 'string',
        'submitTimeLocal' => 'string',
        'status' => 'string',
        'riskInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformation',
        'paymentInformation' => '\CyberSource\Model\RiskV1DecisionsPost201ResponsePaymentInformation',
        'clientReferenceInformation' => '\CyberSource\Model\RiskV1DecisionsPost201ResponseClientReferenceInformation',
        'orderInformation' => '\CyberSource\Model\RiskV1DecisionsPost201ResponseOrderInformation',
        'consumerAuthenticationInformation' => '\CyberSource\Model\RiskV1DecisionsPost201ResponseConsumerAuthenticationInformation',
        'watchlistScreeningInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseWatchlistScreeningInformation',
        'errorInformation' => '\CyberSource\Model\RiskV1DecisionsPost201ResponseErrorInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'id' => null,
        'submitTimeUtc' => null,
        'submitTimeLocal' => null,
        'status' => null,
        'riskInformation' => null,
        'paymentInformation' => null,
        'clientReferenceInformation' => null,
        'orderInformation' => null,
        'consumerAuthenticationInformation' => null,
        'watchlistScreeningInformation' => null,
        'errorInformation' => null
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
        'id' => 'id',
        'submitTimeUtc' => 'submitTimeUtc',
        'submitTimeLocal' => 'submitTimeLocal',
        'status' => 'status',
        'riskInformation' => 'riskInformation',
        'paymentInformation' => 'paymentInformation',
        'clientReferenceInformation' => 'clientReferenceInformation',
        'orderInformation' => 'orderInformation',
        'consumerAuthenticationInformation' => 'consumerAuthenticationInformation',
        'watchlistScreeningInformation' => 'watchlistScreeningInformation',
        'errorInformation' => 'errorInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'submitTimeUtc' => 'setSubmitTimeUtc',
        'submitTimeLocal' => 'setSubmitTimeLocal',
        'status' => 'setStatus',
        'riskInformation' => 'setRiskInformation',
        'paymentInformation' => 'setPaymentInformation',
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'orderInformation' => 'setOrderInformation',
        'consumerAuthenticationInformation' => 'setConsumerAuthenticationInformation',
        'watchlistScreeningInformation' => 'setWatchlistScreeningInformation',
        'errorInformation' => 'setErrorInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'submitTimeUtc' => 'getSubmitTimeUtc',
        'submitTimeLocal' => 'getSubmitTimeLocal',
        'status' => 'getStatus',
        'riskInformation' => 'getRiskInformation',
        'paymentInformation' => 'getPaymentInformation',
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'orderInformation' => 'getOrderInformation',
        'consumerAuthenticationInformation' => 'getConsumerAuthenticationInformation',
        'watchlistScreeningInformation' => 'getWatchlistScreeningInformation',
        'errorInformation' => 'getErrorInformation'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
        $this->container['submitTimeLocal'] = isset($data['submitTimeLocal']) ? $data['submitTimeLocal'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['riskInformation'] = isset($data['riskInformation']) ? $data['riskInformation'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['consumerAuthenticationInformation'] = isset($data['consumerAuthenticationInformation']) ? $data['consumerAuthenticationInformation'] : null;
        $this->container['watchlistScreeningInformation'] = isset($data['watchlistScreeningInformation']) ? $data['watchlistScreeningInformation'] : null;
        $this->container['errorInformation'] = isset($data['errorInformation']) ? $data['errorInformation'] : null;
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
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
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
     * @param string $id An unique identification number generated by Cybersource to identify the submitted request. Returned by all services. It is also appended to the endpoint of the resource. On incremental authorizations, this value with be the same as the identification number returned in the original authorization response.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * Gets submitTimeLocal
     * @return string
     */
    public function getSubmitTimeLocal()
    {
        return $this->container['submitTimeLocal'];
    }

    /**
     * Sets submitTimeLocal
     * @param string $submitTimeLocal Time that the transaction was submitted in local time. Generated by Cybersource.
     * @return $this
     */
    public function setSubmitTimeLocal($submitTimeLocal)
    {
        $this->container['submitTimeLocal'] = $submitTimeLocal;

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
     * @param string $status The status of the submitted transaction.  Possible values:   - `ACCEPTED`   - `REJECTED`   - `PENDING_REVIEW`   - `DECLINED`   - `PENDING_AUTHENTICATION`   - `INVALID_REQUEST`   - `AUTHENTICATION_FAILED`   - `CHALLENGE`
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets riskInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformation
     */
    public function getRiskInformation()
    {
        return $this->container['riskInformation'];
    }

    /**
     * Sets riskInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformation $riskInformation
     * @return $this
     */
    public function setRiskInformation($riskInformation)
    {
        $this->container['riskInformation'] = $riskInformation;

        return $this;
    }

    /**
     * Gets paymentInformation
     * @return \CyberSource\Model\RiskV1DecisionsPost201ResponsePaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \CyberSource\Model\RiskV1DecisionsPost201ResponsePaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

        return $this;
    }

    /**
     * Gets clientReferenceInformation
     * @return \CyberSource\Model\RiskV1DecisionsPost201ResponseClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \CyberSource\Model\RiskV1DecisionsPost201ResponseClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \CyberSource\Model\RiskV1DecisionsPost201ResponseOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \CyberSource\Model\RiskV1DecisionsPost201ResponseOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets consumerAuthenticationInformation
     * @return \CyberSource\Model\RiskV1DecisionsPost201ResponseConsumerAuthenticationInformation
     */
    public function getConsumerAuthenticationInformation()
    {
        return $this->container['consumerAuthenticationInformation'];
    }

    /**
     * Sets consumerAuthenticationInformation
     * @param \CyberSource\Model\RiskV1DecisionsPost201ResponseConsumerAuthenticationInformation $consumerAuthenticationInformation
     * @return $this
     */
    public function setConsumerAuthenticationInformation($consumerAuthenticationInformation)
    {
        $this->container['consumerAuthenticationInformation'] = $consumerAuthenticationInformation;

        return $this;
    }

    /**
     * Gets watchlistScreeningInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseWatchlistScreeningInformation
     */
    public function getWatchlistScreeningInformation()
    {
        return $this->container['watchlistScreeningInformation'];
    }

    /**
     * Sets watchlistScreeningInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseWatchlistScreeningInformation $watchlistScreeningInformation
     * @return $this
     */
    public function setWatchlistScreeningInformation($watchlistScreeningInformation)
    {
        $this->container['watchlistScreeningInformation'] = $watchlistScreeningInformation;

        return $this;
    }

    /**
     * Gets errorInformation
     * @return \CyberSource\Model\RiskV1DecisionsPost201ResponseErrorInformation
     */
    public function getErrorInformation()
    {
        return $this->container['errorInformation'];
    }

    /**
     * Sets errorInformation
     * @param \CyberSource\Model\RiskV1DecisionsPost201ResponseErrorInformation $errorInformation
     * @return $this
     */
    public function setErrorInformation($errorInformation)
    {
        $this->container['errorInformation'] = $errorInformation;

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


