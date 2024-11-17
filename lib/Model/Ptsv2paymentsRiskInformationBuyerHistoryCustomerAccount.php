<?php
/**
 * Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccount
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
 * Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccount Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_riskInformation_buyerHistory_customerAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lastChangeDate' => 'string',
        'creationHistory' => 'string',
        'modificationHistory' => 'string',
        'passwordHistory' => 'string',
        'createDate' => 'string',
        'passwordChangeDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lastChangeDate' => null,
        'creationHistory' => null,
        'modificationHistory' => null,
        'passwordHistory' => null,
        'createDate' => null,
        'passwordChangeDate' => null
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
        'lastChangeDate' => 'lastChangeDate',
        'creationHistory' => 'creationHistory',
        'modificationHistory' => 'modificationHistory',
        'passwordHistory' => 'passwordHistory',
        'createDate' => 'createDate',
        'passwordChangeDate' => 'passwordChangeDate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'lastChangeDate' => 'setLastChangeDate',
        'creationHistory' => 'setCreationHistory',
        'modificationHistory' => 'setModificationHistory',
        'passwordHistory' => 'setPasswordHistory',
        'createDate' => 'setCreateDate',
        'passwordChangeDate' => 'setPasswordChangeDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'lastChangeDate' => 'getLastChangeDate',
        'creationHistory' => 'getCreationHistory',
        'modificationHistory' => 'getModificationHistory',
        'passwordHistory' => 'getPasswordHistory',
        'createDate' => 'getCreateDate',
        'passwordChangeDate' => 'getPasswordChangeDate'
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
        $this->container['lastChangeDate'] = isset($data['lastChangeDate']) ? $data['lastChangeDate'] : null;
        $this->container['creationHistory'] = isset($data['creationHistory']) ? $data['creationHistory'] : null;
        $this->container['modificationHistory'] = isset($data['modificationHistory']) ? $data['modificationHistory'] : null;
        $this->container['passwordHistory'] = isset($data['passwordHistory']) ? $data['passwordHistory'] : null;
        $this->container['createDate'] = isset($data['createDate']) ? $data['createDate'] : null;
        $this->container['passwordChangeDate'] = isset($data['passwordChangeDate']) ? $data['passwordChangeDate'] : null;
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
     * Gets lastChangeDate
     * @return string
     */
    public function getLastChangeDate()
    {
        return $this->container['lastChangeDate'];
    }

    /**
     * Sets lastChangeDate
     * @param string $lastChangeDate Date the cardholder's account was last changed. This includes changes to the billing or shipping address, new payment accounts or new users added. Recommended for Discover ProtectBuy.
     * @return $this
     */
    public function setLastChangeDate($lastChangeDate)
    {
        $this->container['lastChangeDate'] = $lastChangeDate;

        return $this;
    }

    /**
     * Gets creationHistory
     * @return string
     */
    public function getCreationHistory()
    {
        return $this->container['creationHistory'];
    }

    /**
     * Sets creationHistory
     * @param string $creationHistory The values from the enum can be: - GUEST - NEW_ACCOUNT - EXISTING_ACCOUNT
     * @return $this
     */
    public function setCreationHistory($creationHistory)
    {
        $this->container['creationHistory'] = $creationHistory;

        return $this;
    }

    /**
     * Gets modificationHistory
     * @return string
     */
    public function getModificationHistory()
    {
        return $this->container['modificationHistory'];
    }

    /**
     * Sets modificationHistory
     * @param string $modificationHistory This field is applicable only in case of EXISTING_ACCOUNT in creationHistory. Possible values: - ACCOUNT_UPDATED_NOW - ACCOUNT_UPDATED_PAST
     * @return $this
     */
    public function setModificationHistory($modificationHistory)
    {
        $this->container['modificationHistory'] = $modificationHistory;

        return $this;
    }

    /**
     * Gets passwordHistory
     * @return string
     */
    public function getPasswordHistory()
    {
        return $this->container['passwordHistory'];
    }

    /**
     * Sets passwordHistory
     * @param string $passwordHistory This only applies for EXISTING_ACCOUNT in creationHistory. The values from the enum can be: - PASSWORD_CHANGED_NOW - PASSWORD_CHANGED_PAST - PASSWORD_NEVER_CHANGED
     * @return $this
     */
    public function setPasswordHistory($passwordHistory)
    {
        $this->container['passwordHistory'] = $passwordHistory;

        return $this;
    }

    /**
     * Gets createDate
     * @return string
     */
    public function getCreateDate()
    {
        return $this->container['createDate'];
    }

    /**
     * Sets createDate
     * @param string $createDate Date the cardholder opened the account. Recommended for Discover ProtectBuy. This only applies for EXISTING_ACCOUNT in creationHistory.
     * @return $this
     */
    public function setCreateDate($createDate)
    {
        $this->container['createDate'] = $createDate;

        return $this;
    }

    /**
     * Gets passwordChangeDate
     * @return string
     */
    public function getPasswordChangeDate()
    {
        return $this->container['passwordChangeDate'];
    }

    /**
     * Sets passwordChangeDate
     * @param string $passwordChangeDate Date the cardholder last changed or reset password on account. Recommended for Discover ProtectBuy. This only applies for PASSWORD_CHANGED_PAST in passwordHistory.
     * @return $this
     */
    public function setPasswordChangeDate($passwordChangeDate)
    {
        $this->container['passwordChangeDate'] = $passwordChangeDate;

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


