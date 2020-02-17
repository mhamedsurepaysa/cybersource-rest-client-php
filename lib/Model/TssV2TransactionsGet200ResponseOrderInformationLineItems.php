<?php
/**
 * TssV2TransactionsGet200ResponseOrderInformationLineItems
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
 * TssV2TransactionsGet200ResponseOrderInformationLineItems Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponseOrderInformationLineItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_orderInformation_lineItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productCode' => 'string',
        'productName' => 'string',
        'productSku' => 'string',
        'taxAmount' => 'string',
        'quantity' => 'int',
        'unitPrice' => 'string',
        'fulfillmentType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'productCode' => null,
        'productName' => null,
        'productSku' => null,
        'taxAmount' => null,
        'quantity' => null,
        'unitPrice' => null,
        'fulfillmentType' => null
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
        'productCode' => 'productCode',
        'productName' => 'productName',
        'productSku' => 'productSku',
        'taxAmount' => 'taxAmount',
        'quantity' => 'quantity',
        'unitPrice' => 'unitPrice',
        'fulfillmentType' => 'fulfillmentType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'productCode' => 'setProductCode',
        'productName' => 'setProductName',
        'productSku' => 'setProductSku',
        'taxAmount' => 'setTaxAmount',
        'quantity' => 'setQuantity',
        'unitPrice' => 'setUnitPrice',
        'fulfillmentType' => 'setFulfillmentType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'productCode' => 'getProductCode',
        'productName' => 'getProductName',
        'productSku' => 'getProductSku',
        'taxAmount' => 'getTaxAmount',
        'quantity' => 'getQuantity',
        'unitPrice' => 'getUnitPrice',
        'fulfillmentType' => 'getFulfillmentType'
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
        $this->container['productCode'] = isset($data['productCode']) ? $data['productCode'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productSku'] = isset($data['productSku']) ? $data['productSku'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['fulfillmentType'] = isset($data['fulfillmentType']) ? $data['fulfillmentType'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['productCode']) && (strlen($this->container['productCode']) > 255)) {
            $invalid_properties[] = "invalid value for 'productCode', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['productName']) && (strlen($this->container['productName']) > 255)) {
            $invalid_properties[] = "invalid value for 'productName', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['productSku']) && (strlen($this->container['productSku']) > 255)) {
            $invalid_properties[] = "invalid value for 'productSku', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['taxAmount']) && (strlen($this->container['taxAmount']) > 15)) {
            $invalid_properties[] = "invalid value for 'taxAmount', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] > 999999999)) {
            $invalid_properties[] = "invalid value for 'quantity', must be smaller than or equal to 999999999.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['unitPrice']) && (strlen($this->container['unitPrice']) > 15)) {
            $invalid_properties[] = "invalid value for 'unitPrice', the character length must be smaller than or equal to 15.";
        }

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

        if (strlen($this->container['productCode']) > 255) {
            return false;
        }
        if (strlen($this->container['productName']) > 255) {
            return false;
        }
        if (strlen($this->container['productSku']) > 255) {
            return false;
        }
        if (strlen($this->container['taxAmount']) > 15) {
            return false;
        }
        if ($this->container['quantity'] > 999999999) {
            return false;
        }
        if ($this->container['quantity'] < 1) {
            return false;
        }
        if (strlen($this->container['unitPrice']) > 15) {
            return false;
        }
        return true;
    }


    /**
     * Gets productCode
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     * @param string $productCode Type of product. This value is used to determine the category that the product is in: electronic, handling, physical, service, or shipping. The default value is **default**.  For a payment, when you set this field to a value other than default or any of the values related to shipping and handling, below fields _quantity_, _productName_, and _productSKU_ are required.
     * @return $this
     */
    public function setProductCode($productCode)
    {
        if (!is_null($productCode) && (strlen($productCode) > 255)) {
            throw new \InvalidArgumentException('invalid length for $productCode when calling TssV2TransactionsGet200ResponseOrderInformationLineItems., must be smaller than or equal to 255.');
        }

        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets productName
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     * @param string $productName For PAYMENT and CAPTURE API, this field is required when above _productCode_ is not **default** or one of the values related to shipping and handling.
     * @return $this
     */
    public function setProductName($productName)
    {
        if (!is_null($productName) && (strlen($productName) > 255)) {
            throw new \InvalidArgumentException('invalid length for $productName when calling TssV2TransactionsGet200ResponseOrderInformationLineItems., must be smaller than or equal to 255.');
        }

        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets productSku
     * @return string
     */
    public function getProductSku()
    {
        return $this->container['productSku'];
    }

    /**
     * Sets productSku
     * @param string $productSku Identification code for the product. For PAYMENT and CAPTURE API, this field is required when above _productCode_ is not **default** or one of the values related to shipping and/or handling.
     * @return $this
     */
    public function setProductSku($productSku)
    {
        if (!is_null($productSku) && (strlen($productSku) > 255)) {
            throw new \InvalidArgumentException('invalid length for $productSku when calling TssV2TransactionsGet200ResponseOrderInformationLineItems., must be smaller than or equal to 255.');
        }

        $this->container['productSku'] = $productSku;

        return $this;
    }

    /**
     * Gets taxAmount
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     * @param string $taxAmount Total tax to apply to the product. This value cannot be negative. The tax amount and the offer amount must be in the same currency. The tax amount field is additive.  The following example uses a two-exponent currency such as USD:  1. You include each line item in your request.     - 1st line item has `amount=10.00`, `quantity=1`, and `taxAmount=0.80`     - 2nd line item has `amount=20.00`, `quantity=1`, and `taxAmount=1.60` 2. The total amount authorized will be 32.40, not 30.00 with 2.40 of tax included.  This field is frequently used for Level II and Level III transactions.  For details, see `tax_amount` field description in [Level II and Level III Processing Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/)
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        if (!is_null($taxAmount) && (strlen($taxAmount) > 15)) {
            throw new \InvalidArgumentException('invalid length for $taxAmount when calling TssV2TransactionsGet200ResponseOrderInformationLineItems., must be smaller than or equal to 15.');
        }

        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity For a payment or capture, this field is required when _productCode_ is not **default** or one of the values related to shipping and handling.
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling TssV2TransactionsGet200ResponseOrderInformationLineItems., must be smaller than or equal to 999999999.');
        }
        if (!is_null($quantity) && ($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling TssV2TransactionsGet200ResponseOrderInformationLineItems., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitPrice
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     * @param string $unitPrice Per-item price of the product. This value cannot be negative. You can include a decimal point (.), but you cannot include any other special characters. CyberSource truncates the amount to the correct number of decimal places.  For processor-specific information, see the amount field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        if (!is_null($unitPrice) && (strlen($unitPrice) > 15)) {
            throw new \InvalidArgumentException('invalid length for $unitPrice when calling TssV2TransactionsGet200ResponseOrderInformationLineItems., must be smaller than or equal to 15.');
        }

        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets fulfillmentType
     * @return string
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     * @param string $fulfillmentType The description for this field is not available.
     * @return $this
     */
    public function setFulfillmentType($fulfillmentType)
    {
        $this->container['fulfillmentType'] = $fulfillmentType;

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
     * @return mixed
     */
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


