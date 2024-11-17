<?php
/**
 * ModifyBillingAgreement
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
 * ModifyBillingAgreement Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModifyBillingAgreement implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'modifyBillingAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreementInformation' => '\CyberSource\Model\Ptsv2billingagreementsidAgreementInformation',
        'clientReferenceInformation' => '\CyberSource\Model\Ptsv2billingagreementsClientReferenceInformation',
        'aggregatorInformation' => '\CyberSource\Model\Ptsv2billingagreementsAggregatorInformation',
        'consumerAuthenticationInformation' => '\CyberSource\Model\Ptsv2billingagreementsConsumerAuthenticationInformation',
        'deviceInformation' => '\CyberSource\Model\Ptsv2billingagreementsDeviceInformation',
        'installmentInformation' => '\CyberSource\Model\Ptsv2billingagreementsInstallmentInformation',
        'merchantInformation' => '\CyberSource\Model\Ptsv2billingagreementsMerchantInformation',
        'orderInformation' => '\CyberSource\Model\Ptsv2billingagreementsOrderInformation',
        'paymentInformation' => '\CyberSource\Model\Ptsv2billingagreementsPaymentInformation',
        'processingInformation' => '\CyberSource\Model\Ptsv2billingagreementsidProcessingInformation',
        'buyerInformation' => '\CyberSource\Model\Ptsv2billingagreementsidBuyerInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agreementInformation' => null,
        'clientReferenceInformation' => null,
        'aggregatorInformation' => null,
        'consumerAuthenticationInformation' => null,
        'deviceInformation' => null,
        'installmentInformation' => null,
        'merchantInformation' => null,
        'orderInformation' => null,
        'paymentInformation' => null,
        'processingInformation' => null,
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
        'agreementInformation' => 'agreementInformation',
        'clientReferenceInformation' => 'clientReferenceInformation',
        'aggregatorInformation' => 'aggregatorInformation',
        'consumerAuthenticationInformation' => 'consumerAuthenticationInformation',
        'deviceInformation' => 'deviceInformation',
        'installmentInformation' => 'installmentInformation',
        'merchantInformation' => 'merchantInformation',
        'orderInformation' => 'orderInformation',
        'paymentInformation' => 'paymentInformation',
        'processingInformation' => 'processingInformation',
        'buyerInformation' => 'buyerInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'agreementInformation' => 'setAgreementInformation',
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'aggregatorInformation' => 'setAggregatorInformation',
        'consumerAuthenticationInformation' => 'setConsumerAuthenticationInformation',
        'deviceInformation' => 'setDeviceInformation',
        'installmentInformation' => 'setInstallmentInformation',
        'merchantInformation' => 'setMerchantInformation',
        'orderInformation' => 'setOrderInformation',
        'paymentInformation' => 'setPaymentInformation',
        'processingInformation' => 'setProcessingInformation',
        'buyerInformation' => 'setBuyerInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'agreementInformation' => 'getAgreementInformation',
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'aggregatorInformation' => 'getAggregatorInformation',
        'consumerAuthenticationInformation' => 'getConsumerAuthenticationInformation',
        'deviceInformation' => 'getDeviceInformation',
        'installmentInformation' => 'getInstallmentInformation',
        'merchantInformation' => 'getMerchantInformation',
        'orderInformation' => 'getOrderInformation',
        'paymentInformation' => 'getPaymentInformation',
        'processingInformation' => 'getProcessingInformation',
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
        $this->container['agreementInformation'] = isset($data['agreementInformation']) ? $data['agreementInformation'] : null;
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['aggregatorInformation'] = isset($data['aggregatorInformation']) ? $data['aggregatorInformation'] : null;
        $this->container['consumerAuthenticationInformation'] = isset($data['consumerAuthenticationInformation']) ? $data['consumerAuthenticationInformation'] : null;
        $this->container['deviceInformation'] = isset($data['deviceInformation']) ? $data['deviceInformation'] : null;
        $this->container['installmentInformation'] = isset($data['installmentInformation']) ? $data['installmentInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
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
     * Gets agreementInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsidAgreementInformation
     */
    public function getAgreementInformation()
    {
        return $this->container['agreementInformation'];
    }

    /**
     * Sets agreementInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsidAgreementInformation $agreementInformation
     * @return $this
     */
    public function setAgreementInformation($agreementInformation)
    {
        $this->container['agreementInformation'] = $agreementInformation;

        return $this;
    }

    /**
     * Gets clientReferenceInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets aggregatorInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsAggregatorInformation
     */
    public function getAggregatorInformation()
    {
        return $this->container['aggregatorInformation'];
    }

    /**
     * Sets aggregatorInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsAggregatorInformation $aggregatorInformation
     * @return $this
     */
    public function setAggregatorInformation($aggregatorInformation)
    {
        $this->container['aggregatorInformation'] = $aggregatorInformation;

        return $this;
    }

    /**
     * Gets consumerAuthenticationInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsConsumerAuthenticationInformation
     */
    public function getConsumerAuthenticationInformation()
    {
        return $this->container['consumerAuthenticationInformation'];
    }

    /**
     * Sets consumerAuthenticationInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsConsumerAuthenticationInformation $consumerAuthenticationInformation
     * @return $this
     */
    public function setConsumerAuthenticationInformation($consumerAuthenticationInformation)
    {
        $this->container['consumerAuthenticationInformation'] = $consumerAuthenticationInformation;

        return $this;
    }

    /**
     * Gets deviceInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsDeviceInformation
     */
    public function getDeviceInformation()
    {
        return $this->container['deviceInformation'];
    }

    /**
     * Sets deviceInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsDeviceInformation $deviceInformation
     * @return $this
     */
    public function setDeviceInformation($deviceInformation)
    {
        $this->container['deviceInformation'] = $deviceInformation;

        return $this;
    }

    /**
     * Gets installmentInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsInstallmentInformation
     */
    public function getInstallmentInformation()
    {
        return $this->container['installmentInformation'];
    }

    /**
     * Sets installmentInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsInstallmentInformation $installmentInformation
     * @return $this
     */
    public function setInstallmentInformation($installmentInformation)
    {
        $this->container['installmentInformation'] = $installmentInformation;

        return $this;
    }

    /**
     * Gets merchantInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsMerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    /**
     * Sets merchantInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsMerchantInformation $merchantInformation
     * @return $this
     */
    public function setMerchantInformation($merchantInformation)
    {
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets paymentInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsPaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsPaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsidProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsidProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets buyerInformation
     * @return \CyberSource\Model\Ptsv2billingagreementsidBuyerInformation
     */
    public function getBuyerInformation()
    {
        return $this->container['buyerInformation'];
    }

    /**
     * Sets buyerInformation
     * @param \CyberSource\Model\Ptsv2billingagreementsidBuyerInformation $buyerInformation
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


