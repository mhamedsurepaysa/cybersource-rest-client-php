<?php
/**
 * PaymentProductsCardProcessingConfigurationInformationConfigurationsFeaturesCardNotPresentInstallment
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
 * PaymentProductsCardProcessingConfigurationInformationConfigurationsFeaturesCardNotPresentInstallment Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentProductsCardProcessingConfigurationInformationConfigurationsFeaturesCardNotPresentInstallment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'paymentProducts_cardProcessing_configurationInformation_configurations_features_cardNotPresent_installment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enableInstallment' => 'bool',
        'installmentPlan' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enableInstallment' => null,
        'installmentPlan' => null
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
        'enableInstallment' => 'enableInstallment',
        'installmentPlan' => 'installmentPlan'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'enableInstallment' => 'setEnableInstallment',
        'installmentPlan' => 'setInstallmentPlan'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'enableInstallment' => 'getEnableInstallment',
        'installmentPlan' => 'getInstallmentPlan'
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
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['enableInstallment'] = isset($data['enableInstallment']) ? $data['enableInstallment'] : null;
        $this->container['installmentPlan'] = isset($data['installmentPlan']) ? $data['installmentPlan'] : null;
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
     * Gets enableInstallment
     * @return bool
     */
    public function getEnableInstallment()
    {
        return $this->container['enableInstallment'];
    }

    /**
     * Sets enableInstallment
     * @param bool $enableInstallment This flag is to enable for installment plan programs. Applicable for Fiserv (fiserv), Vero (vero) and American Express Direct (amexdirect) processors.  Validation details (for selected processors)...  <table> <thead><tr><th>Processor</th><th>Acceptance Type</th><th>Required</th><th>Default Value</th></tr></thead> <tr><td>American Express Direct</td><td>cnp</td><td>No</td><td>No</td></tr> </table>
     * @return $this
     */
    public function setEnableInstallment($enableInstallment)
    {
        $this->container['enableInstallment'] = $enableInstallment;

        return $this;
    }

    /**
     * Gets installmentPlan
     * @return string
     */
    public function getInstallmentPlan()
    {
        return $this->container['installmentPlan'];
    }

    /**
     * Sets installmentPlan
     * @param string $installmentPlan This indicates the type of funding for the installment plan associated with the payment.  Valid values: \"merchant\" - Merchant-funded installment plan \"issuer\" - Issuer-funded installment plan  Applicable for Fiserv (fiserv), American Express Direct (amexdirect) and Vero (vero) processors.  Validation details (for selected processors)...  <table> <thead><tr><th>Processor</th><th>Acceptance Type</th><th>Required</th></tr></thead> <tr><td>American Express Direct</td><td>cnp</td><td>No</td></tr> </table>
     * @return $this
     */
    public function setInstallmentPlan($installmentPlan)
    {
        $this->container['installmentPlan'] = $installmentPlan;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


