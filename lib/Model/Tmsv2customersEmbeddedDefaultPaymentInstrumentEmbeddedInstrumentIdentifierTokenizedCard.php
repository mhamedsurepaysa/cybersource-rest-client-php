<?php
/**
 * Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierTokenizedCard
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
 * Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierTokenizedCard Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierTokenizedCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tmsv2customers__embedded_defaultPaymentInstrument__embedded_instrumentIdentifier_tokenizedCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'state' => 'string',
        'enrollmentId' => 'string',
        'tokenReferenceId' => 'string',
        'reason' => 'string',
        'number' => 'string',
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'cryptogram' => 'string',
        'card' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierTokenizedCardCard'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'state' => null,
        'enrollmentId' => null,
        'tokenReferenceId' => null,
        'reason' => null,
        'number' => null,
        'expirationMonth' => null,
        'expirationYear' => null,
        'cryptogram' => null,
        'card' => null
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
        'type' => 'type',
        'state' => 'state',
        'enrollmentId' => 'enrollmentId',
        'tokenReferenceId' => 'tokenReferenceId',
        'reason' => 'reason',
        'number' => 'number',
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'cryptogram' => 'cryptogram',
        'card' => 'card'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'state' => 'setState',
        'enrollmentId' => 'setEnrollmentId',
        'tokenReferenceId' => 'setTokenReferenceId',
        'reason' => 'setReason',
        'number' => 'setNumber',
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'cryptogram' => 'setCryptogram',
        'card' => 'setCard'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'state' => 'getState',
        'enrollmentId' => 'getEnrollmentId',
        'tokenReferenceId' => 'getTokenReferenceId',
        'reason' => 'getReason',
        'number' => 'getNumber',
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'cryptogram' => 'getCryptogram',
        'card' => 'getCard'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['enrollmentId'] = isset($data['enrollmentId']) ? $data['enrollmentId'] : null;
        $this->container['tokenReferenceId'] = isset($data['tokenReferenceId']) ? $data['tokenReferenceId'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['cryptogram'] = isset($data['cryptogram']) ? $data['cryptogram'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The network token card association brand Possible Values: - visa - mastercard - americanexpress
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state State of the network token or network token provision Possible Values: - ACTIVE : Network token is active. - SUSPENDED : Network token is suspended. This state can change back to ACTIVE. - DELETED : This is a final state for a network token instance. - UNPROVISIONED : A previous network token provision was unsuccessful.
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets enrollmentId
     * @return string
     */
    public function getEnrollmentId()
    {
        return $this->container['enrollmentId'];
    }

    /**
     * Sets enrollmentId
     * @param string $enrollmentId Unique Identifier for the enrolled PAN. This Id is provided by the card association when a network token is provisioned successfully.
     * @return $this
     */
    public function setEnrollmentId($enrollmentId)
    {
        $this->container['enrollmentId'] = $enrollmentId;

        return $this;
    }

    /**
     * Gets tokenReferenceId
     * @return string
     */
    public function getTokenReferenceId()
    {
        return $this->container['tokenReferenceId'];
    }

    /**
     * Sets tokenReferenceId
     * @param string $tokenReferenceId Unique Identifier for the network token. This Id is provided by the card association when a network token is provisioned successfully.
     * @return $this
     */
    public function setTokenReferenceId($tokenReferenceId)
    {
        $this->container['tokenReferenceId'] = $tokenReferenceId;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason Issuers state for the network token Possible Values: - INVALID_REQUEST : The network token provision request contained invalid data. - CARD_VERIFICATION_FAILED : The network token provision request contained data that could not be verified. - CARD_NOT_ELIGIBLE : Card can currently not be used with issuer for tokenization. - CARD_NOT_ALLOWED : Card can currently not be used with card association for tokenization. - DECLINED : Card can currently not be used with issuer for tokenization. - SERVICE_UNAVAILABLE : The network token service was unavailable or timed out. - SYSTEM_ERROR : An unexpected error occurred with network token service, check configuration.
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number The token requestors network token
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets expirationMonth
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->container['expirationMonth'];
    }

    /**
     * Sets expirationMonth
     * @param string $expirationMonth Two-digit month in which the network token expires.  Format: `MM`.  Possible Values: `01` through `12`.
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->container['expirationMonth'] = $expirationMonth;

        return $this;
    }

    /**
     * Gets expirationYear
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->container['expirationYear'];
    }

    /**
     * Sets expirationYear
     * @param string $expirationYear Four-digit year in which the network token expires.  Format: `YYYY`.
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        $this->container['expirationYear'] = $expirationYear;

        return $this;
    }

    /**
     * Gets cryptogram
     * @return string
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     * @param string $cryptogram Generated value used in conjunction with the network token for making a payment.
     * @return $this
     */
    public function setCryptogram($cryptogram)
    {
        $this->container['cryptogram'] = $cryptogram;

        return $this;
    }

    /**
     * Gets card
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierTokenizedCardCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierTokenizedCardCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

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


