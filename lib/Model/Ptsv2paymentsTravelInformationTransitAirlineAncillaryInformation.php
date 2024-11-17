<?php
/**
 * Ptsv2paymentsTravelInformationTransitAirlineAncillaryInformation
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
 * Ptsv2paymentsTravelInformationTransitAirlineAncillaryInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsTravelInformationTransitAirlineAncillaryInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_travelInformation_transit_airline_ancillaryInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ticketNumber' => 'string',
        'passengerName' => 'string',
        'connectedTicketNumber' => 'string',
        'creditReasonIndicator' => 'string',
        'service' => '\CyberSource\Model\Ptsv2paymentsTravelInformationTransitAirlineAncillaryInformationService[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ticketNumber' => null,
        'passengerName' => null,
        'connectedTicketNumber' => null,
        'creditReasonIndicator' => null,
        'service' => null
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
        'ticketNumber' => 'ticketNumber',
        'passengerName' => 'passengerName',
        'connectedTicketNumber' => 'connectedTicketNumber',
        'creditReasonIndicator' => 'creditReasonIndicator',
        'service' => 'service'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ticketNumber' => 'setTicketNumber',
        'passengerName' => 'setPassengerName',
        'connectedTicketNumber' => 'setConnectedTicketNumber',
        'creditReasonIndicator' => 'setCreditReasonIndicator',
        'service' => 'setService'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ticketNumber' => 'getTicketNumber',
        'passengerName' => 'getPassengerName',
        'connectedTicketNumber' => 'getConnectedTicketNumber',
        'creditReasonIndicator' => 'getCreditReasonIndicator',
        'service' => 'getService'
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
        $this->container['ticketNumber'] = isset($data['ticketNumber']) ? $data['ticketNumber'] : null;
        $this->container['passengerName'] = isset($data['passengerName']) ? $data['passengerName'] : null;
        $this->container['connectedTicketNumber'] = isset($data['connectedTicketNumber']) ? $data['connectedTicketNumber'] : null;
        $this->container['creditReasonIndicator'] = isset($data['creditReasonIndicator']) ? $data['creditReasonIndicator'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
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
     * Gets ticketNumber
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->container['ticketNumber'];
    }

    /**
     * Sets ticketNumber
     * @param string $ticketNumber Ticket number, which consists of the carrier code, form, and serial number, without the check digit. **Important** This field is required in the U.S. in order for you to qualify for either the custom payment service (CPS) or the electronic interchange reimbursement fee (EIRF) program. Format: English characters only. Optional field for ancillary services.
     * @return $this
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->container['ticketNumber'] = $ticketNumber;

        return $this;
    }

    /**
     * Gets passengerName
     * @return string
     */
    public function getPassengerName()
    {
        return $this->container['passengerName'];
    }

    /**
     * Sets passengerName
     * @param string $passengerName Name of the passenger. If the passenger's name is not available, this value is the cardholder's name. If neither the passenger's name nor the cardholder's name is available, this value is a description of the ancillary purchase. **Important** This field is required in the U.S. in order for you to qualify for either the custom payment service (CPS) or the electronic interchange reimbursement fee (EIRF) program. Format: English characters only. Optional field for ancillary service.
     * @return $this
     */
    public function setPassengerName($passengerName)
    {
        $this->container['passengerName'] = $passengerName;

        return $this;
    }

    /**
     * Gets connectedTicketNumber
     * @return string
     */
    public function getConnectedTicketNumber()
    {
        return $this->container['connectedTicketNumber'];
    }

    /**
     * Sets connectedTicketNumber
     * @param string $connectedTicketNumber Number for the airline ticket to which the ancillary purchase is connected.  If this purchase has a connection or relationship to another purchase such as a baggage fee for a passenger transport ticket, this field must contain the ticket number for the other purchase.  For a stand-alone purchase, the value for this field must be the same as the value for the `travelInformation.transit.airline.ancillaryInformation.ticketNumber` field. **Important** This field is required in the U.S. in order for you to qualify for either the custom payment service (CPS) or the electronic interchange reimbursement fee (EIRF) program. Format: English characters only. Optional request field for ancillary services.
     * @return $this
     */
    public function setConnectedTicketNumber($connectedTicketNumber)
    {
        $this->container['connectedTicketNumber'] = $connectedTicketNumber;

        return $this;
    }

    /**
     * Gets creditReasonIndicator
     * @return string
     */
    public function getCreditReasonIndicator()
    {
        return $this->container['creditReasonIndicator'];
    }

    /**
     * Sets creditReasonIndicator
     * @param string $creditReasonIndicator Reason for the credit. Possible values: - `A`: Cancellation of the ancillary passenger transport purchase. - `B`: Cancellation of the airline ticket and the passenger transport ancillary purchase. - `C`: Cancellation of the airline ticket. - `O`: Other. - `P`: Partial refund of the airline ticket. Format: English characters only. Optional field for ancillary services.
     * @return $this
     */
    public function setCreditReasonIndicator($creditReasonIndicator)
    {
        $this->container['creditReasonIndicator'] = $creditReasonIndicator;

        return $this;
    }

    /**
     * Gets service
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformationTransitAirlineAncillaryInformationService[]
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformationTransitAirlineAncillaryInformationService[] $service
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

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


