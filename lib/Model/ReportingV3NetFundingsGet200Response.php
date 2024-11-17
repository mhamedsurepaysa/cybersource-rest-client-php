<?php
/**
 * ReportingV3NetFundingsGet200Response
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
 * ReportingV3NetFundingsGet200Response Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3NetFundingsGet200Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3NetFundingsGet200Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'netFundingSummaries' => '\CyberSource\Model\ReportingV3NetFundingsGet200ResponseNetFundingSummaries[]',
        'totalPurchases' => '\CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]',
        'totalRefunds' => '\CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]',
        'totalFees' => '\CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]',
        'totalChargebacks' => '\CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]',
        'netTotal' => '\CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'netFundingSummaries' => null,
        'totalPurchases' => null,
        'totalRefunds' => null,
        'totalFees' => null,
        'totalChargebacks' => null,
        'netTotal' => null
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
        'startTime' => 'startTime',
        'endTime' => 'endTime',
        'netFundingSummaries' => 'netFundingSummaries',
        'totalPurchases' => 'totalPurchases',
        'totalRefunds' => 'totalRefunds',
        'totalFees' => 'totalFees',
        'totalChargebacks' => 'totalChargebacks',
        'netTotal' => 'netTotal'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'netFundingSummaries' => 'setNetFundingSummaries',
        'totalPurchases' => 'setTotalPurchases',
        'totalRefunds' => 'setTotalRefunds',
        'totalFees' => 'setTotalFees',
        'totalChargebacks' => 'setTotalChargebacks',
        'netTotal' => 'setNetTotal'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'netFundingSummaries' => 'getNetFundingSummaries',
        'totalPurchases' => 'getTotalPurchases',
        'totalRefunds' => 'getTotalRefunds',
        'totalFees' => 'getTotalFees',
        'totalChargebacks' => 'getTotalChargebacks',
        'netTotal' => 'getNetTotal'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['netFundingSummaries'] = isset($data['netFundingSummaries']) ? $data['netFundingSummaries'] : null;
        $this->container['totalPurchases'] = isset($data['totalPurchases']) ? $data['totalPurchases'] : null;
        $this->container['totalRefunds'] = isset($data['totalRefunds']) ? $data['totalRefunds'] : null;
        $this->container['totalFees'] = isset($data['totalFees']) ? $data['totalFees'] : null;
        $this->container['totalChargebacks'] = isset($data['totalChargebacks']) ? $data['totalChargebacks'] : null;
        $this->container['netTotal'] = isset($data['netTotal']) ? $data['netTotal'] : null;
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
     * Gets startTime
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param \DateTime $startTime Valid report Start Date in **ISO 8601 format**. Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example:** - yyyy-MM-dd'T'HH:mm:ss.SSSZZ
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     * @param \DateTime $endTime Valid report End Date in **ISO 8601 format** **Example date format:** - yyyy-MM-dd'T'HH:mm:ss.SSSZZ
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets netFundingSummaries
     * @return \CyberSource\Model\ReportingV3NetFundingsGet200ResponseNetFundingSummaries[]
     */
    public function getNetFundingSummaries()
    {
        return $this->container['netFundingSummaries'];
    }

    /**
     * Sets netFundingSummaries
     * @param \CyberSource\Model\ReportingV3NetFundingsGet200ResponseNetFundingSummaries[] $netFundingSummaries List of Netfunding summary objects
     * @return $this
     */
    public function setNetFundingSummaries($netFundingSummaries)
    {
        $this->container['netFundingSummaries'] = $netFundingSummaries;

        return $this;
    }

    /**
     * Gets totalPurchases
     * @return \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]
     */
    public function getTotalPurchases()
    {
        return $this->container['totalPurchases'];
    }

    /**
     * Sets totalPurchases
     * @param \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[] $totalPurchases List of total purchases currency wise
     * @return $this
     */
    public function setTotalPurchases($totalPurchases)
    {
        $this->container['totalPurchases'] = $totalPurchases;

        return $this;
    }

    /**
     * Gets totalRefunds
     * @return \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]
     */
    public function getTotalRefunds()
    {
        return $this->container['totalRefunds'];
    }

    /**
     * Sets totalRefunds
     * @param \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[] $totalRefunds List of total refunds currency wise
     * @return $this
     */
    public function setTotalRefunds($totalRefunds)
    {
        $this->container['totalRefunds'] = $totalRefunds;

        return $this;
    }

    /**
     * Gets totalFees
     * @return \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]
     */
    public function getTotalFees()
    {
        return $this->container['totalFees'];
    }

    /**
     * Sets totalFees
     * @param \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[] $totalFees List of total fees currency wise
     * @return $this
     */
    public function setTotalFees($totalFees)
    {
        $this->container['totalFees'] = $totalFees;

        return $this;
    }

    /**
     * Gets totalChargebacks
     * @return \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]
     */
    public function getTotalChargebacks()
    {
        return $this->container['totalChargebacks'];
    }

    /**
     * Sets totalChargebacks
     * @param \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[] $totalChargebacks List of total chargebacks currency wise
     * @return $this
     */
    public function setTotalChargebacks($totalChargebacks)
    {
        $this->container['totalChargebacks'] = $totalChargebacks;

        return $this;
    }

    /**
     * Gets netTotal
     * @return \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[]
     */
    public function getNetTotal()
    {
        return $this->container['netTotal'];
    }

    /**
     * Sets netTotal
     * @param \CyberSource\Model\ReportingV3NetFundingsGet200ResponseTotalPurchases[] $netTotal List of new total currency wise
     * @return $this
     */
    public function setNetTotal($netTotal)
    {
        $this->container['netTotal'] = $netTotal;

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


