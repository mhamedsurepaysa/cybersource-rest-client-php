<?php
/**
 * PtsV1TransactionBatchesIdGet200Response
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
 * PtsV1TransactionBatchesIdGet200Response Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV1TransactionBatchesIdGet200Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV1TransactionBatchesIdGet200Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'uploadDate' => 'string',
        'completionDate' => 'string',
        'transactionCount' => 'int',
        'acceptedTransactionCount' => 'int',
        'rejectedTransactionCount' => 'string',
        'status' => 'string',
        'links' => '\CyberSource\Model\PtsV1TransactionBatchesIdGet200ResponseLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'uploadDate' => null,
        'completionDate' => null,
        'transactionCount' => null,
        'acceptedTransactionCount' => null,
        'rejectedTransactionCount' => null,
        'status' => null,
        'links' => null
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
        'id' => 'id',
        'uploadDate' => 'uploadDate',
        'completionDate' => 'completionDate',
        'transactionCount' => 'transactionCount',
        'acceptedTransactionCount' => 'acceptedTransactionCount',
        'rejectedTransactionCount' => 'rejectedTransactionCount',
        'status' => 'status',
        'links' => '_links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uploadDate' => 'setUploadDate',
        'completionDate' => 'setCompletionDate',
        'transactionCount' => 'setTransactionCount',
        'acceptedTransactionCount' => 'setAcceptedTransactionCount',
        'rejectedTransactionCount' => 'setRejectedTransactionCount',
        'status' => 'setStatus',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uploadDate' => 'getUploadDate',
        'completionDate' => 'getCompletionDate',
        'transactionCount' => 'getTransactionCount',
        'acceptedTransactionCount' => 'getAcceptedTransactionCount',
        'rejectedTransactionCount' => 'getRejectedTransactionCount',
        'status' => 'getStatus',
        'links' => 'getLinks'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uploadDate'] = isset($data['uploadDate']) ? $data['uploadDate'] : null;
        $this->container['completionDate'] = isset($data['completionDate']) ? $data['completionDate'] : null;
        $this->container['transactionCount'] = isset($data['transactionCount']) ? $data['transactionCount'] : null;
        $this->container['acceptedTransactionCount'] = isset($data['acceptedTransactionCount']) ? $data['acceptedTransactionCount'] : null;
        $this->container['rejectedTransactionCount'] = isset($data['rejectedTransactionCount']) ? $data['rejectedTransactionCount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique identifier assigned to the batch file.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets uploadDate
     * @return string
     */
    public function getUploadDate()
    {
        return $this->container['uploadDate'];
    }

    /**
     * Sets uploadDate
     * @param string $uploadDate Date when the batch template was update.
     * @return $this
     */
    public function setUploadDate($uploadDate)
    {
        $this->container['uploadDate'] = $uploadDate;

        return $this;
    }

    /**
     * Gets completionDate
     * @return string
     */
    public function getCompletionDate()
    {
        return $this->container['completionDate'];
    }

    /**
     * Sets completionDate
     * @param string $completionDate The date when the batch template processing completed.
     * @return $this
     */
    public function setCompletionDate($completionDate)
    {
        $this->container['completionDate'] = $completionDate;

        return $this;
    }

    /**
     * Gets transactionCount
     * @return int
     */
    public function getTransactionCount()
    {
        return $this->container['transactionCount'];
    }

    /**
     * Sets transactionCount
     * @param int $transactionCount Number of transactions in the transaction.
     * @return $this
     */
    public function setTransactionCount($transactionCount)
    {
        $this->container['transactionCount'] = $transactionCount;

        return $this;
    }

    /**
     * Gets acceptedTransactionCount
     * @return int
     */
    public function getAcceptedTransactionCount()
    {
        return $this->container['acceptedTransactionCount'];
    }

    /**
     * Sets acceptedTransactionCount
     * @param int $acceptedTransactionCount Number of transactions accepted.
     * @return $this
     */
    public function setAcceptedTransactionCount($acceptedTransactionCount)
    {
        $this->container['acceptedTransactionCount'] = $acceptedTransactionCount;

        return $this;
    }

    /**
     * Gets rejectedTransactionCount
     * @return string
     */
    public function getRejectedTransactionCount()
    {
        return $this->container['rejectedTransactionCount'];
    }

    /**
     * Sets rejectedTransactionCount
     * @param string $rejectedTransactionCount Number of transactions rejected.
     * @return $this
     */
    public function setRejectedTransactionCount($rejectedTransactionCount)
    {
        $this->container['rejectedTransactionCount'] = $rejectedTransactionCount;

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
     * @param string $status The status of you batch template processing.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets links
     * @return \CyberSource\Model\PtsV1TransactionBatchesIdGet200ResponseLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\PtsV1TransactionBatchesIdGet200ResponseLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


