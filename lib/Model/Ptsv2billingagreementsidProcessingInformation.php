<?php
/**
 * Ptsv2billingagreementsidProcessingInformation
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
 * Ptsv2billingagreementsidProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2billingagreementsidProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2billingagreementsid_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commerceIndicator' => 'string',
        'actionList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commerceIndicator' => null,
        'actionList' => null
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
        'commerceIndicator' => 'commerceIndicator',
        'actionList' => 'actionList'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'commerceIndicator' => 'setCommerceIndicator',
        'actionList' => 'setActionList'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'commerceIndicator' => 'getCommerceIndicator',
        'actionList' => 'getActionList'
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
        $this->container['commerceIndicator'] = isset($data['commerceIndicator']) ? $data['commerceIndicator'] : null;
        $this->container['actionList'] = isset($data['actionList']) ? $data['actionList'] : null;
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
     * Gets commerceIndicator
     * @return string
     */
    public function getCommerceIndicator()
    {
        return $this->container['commerceIndicator'];
    }

    /**
     * Sets commerceIndicator
     * @param string $commerceIndicator Type of transaction. Used to determine fees based on channel.  Possible values:    - aesk: American Express SafeKey authentication was successful.   - aesk_attempted: American Express SafeKey authentication was attempted but did not succeed. • install: Installment payment.   - install_internet: Non-U.S. e-commerce (Internet) installment payment. This value is supported only on Visa Platform Connect.   - internet (default for authorizations): E-commerce order placed using a web site.   - js: JCB J/Secure authentication was successful.   - js_attempted: JCB J/Secure authentication was attempted but did not succeed.   - moto: Mail order or telephone order.   - moto_cc: Mail order or telephone order from a call center. This value is supported only on the Asia, Middle East, and Africa Gateway.   - pb: ProtectBuy authentication was successful.   - pb_attempted: ProtectBuy authentication was attempted but did not succeed.   - recurring: Recurring payment that is a U.S. transaction or non-U.S. mail order / telephone order (MOTO) transaction.   - recurring_internet: Recurring payment that is a non-U.S. e-commerce (Internet) transaction.   - retail: Card-present transaction.   - spa: For Mastercard Identity Check: Authentication was successful or was attempted but did not succeed. The e-commerce indicator for all Mastercard Identity Check transactions, including authentication attempts, must be set to spa.   - spa_attempted: Authentication for a co-badged Mastercard and Cartes Bancaires card was attempted but did not succeed.   - spa_failure: – For Mastercard Identity Check: Authentication failed. This value is supported only on Elavon, HSBC, and Streamline.   - vbv: – For Visa Secure: Authentication was successful.   - vbv_attempted: – For Visa Secure: Authentication was attempted but did not succeed.   - vbv_failure: – For Visa Secure: Authentication failed. This value is supported only on HSBC and Streamline.
     * @return $this
     */
    public function setCommerceIndicator($commerceIndicator)
    {
        $this->container['commerceIndicator'] = $commerceIndicator;

        return $this;
    }

    /**
     * Gets actionList
     * @return string[]
     */
    public function getActionList()
    {
        return $this->container['actionList'];
    }

    /**
     * Sets actionList
     * @param string[] $actionList - Use `CONSUMER_AUTHENTICATION` to use Payer Authentication along with Decision Manager. For any other value, only Decision Manager will run. - Use `WATCHLIST_SCREENING`  when you want to call Watchlist Screening service. - Use `BILLING_AGREEMENT_CREATE` when Paypal billing agreements service is requested. - Use `UPDATE_AGREEMENT` - Use `CANCEL_AGREEMENT` - Use `AP_UPDATE_AGREEMENT` when Alternative Payment update mandate service is requested. - Use `AP_CANCEL_AGREEMENT` when Alternative Payment revoke mandate service is requested. - Use `AP_REFRESH_AGREEMENT_STATUS` when Alternative Payment mandate status service is requested.
     * @return $this
     */
    public function setActionList($actionList)
    {
        $this->container['actionList'] = $actionList;

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


