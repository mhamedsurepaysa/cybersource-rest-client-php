<?php
/**
 * PtsV2PaymentsReversalsPost201ResponseProcessorInformation
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
 * PtsV2PaymentsReversalsPost201ResponseProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsReversalsPost201ResponseProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsReversalsPost201Response_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionId' => 'string',
        'responseCode' => 'string',
        'responseCategoryCode' => 'string',
        'forwardedAcquirerCode' => 'string',
        'masterCardServiceCode' => 'string',
        'masterCardServiceReplyCode' => 'string',
        'responseDetails' => 'string',
        'providerResponse' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionId' => null,
        'responseCode' => null,
        'responseCategoryCode' => null,
        'forwardedAcquirerCode' => null,
        'masterCardServiceCode' => null,
        'masterCardServiceReplyCode' => null,
        'responseDetails' => null,
        'providerResponse' => null
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
        'transactionId' => 'transactionId',
        'responseCode' => 'responseCode',
        'responseCategoryCode' => 'responseCategoryCode',
        'forwardedAcquirerCode' => 'forwardedAcquirerCode',
        'masterCardServiceCode' => 'masterCardServiceCode',
        'masterCardServiceReplyCode' => 'masterCardServiceReplyCode',
        'responseDetails' => 'responseDetails',
        'providerResponse' => 'providerResponse'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
        'responseCode' => 'setResponseCode',
        'responseCategoryCode' => 'setResponseCategoryCode',
        'forwardedAcquirerCode' => 'setForwardedAcquirerCode',
        'masterCardServiceCode' => 'setMasterCardServiceCode',
        'masterCardServiceReplyCode' => 'setMasterCardServiceReplyCode',
        'responseDetails' => 'setResponseDetails',
        'providerResponse' => 'setProviderResponse'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
        'responseCode' => 'getResponseCode',
        'responseCategoryCode' => 'getResponseCategoryCode',
        'forwardedAcquirerCode' => 'getForwardedAcquirerCode',
        'masterCardServiceCode' => 'getMasterCardServiceCode',
        'masterCardServiceReplyCode' => 'getMasterCardServiceReplyCode',
        'responseDetails' => 'getResponseDetails',
        'providerResponse' => 'getProviderResponse'
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
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['responseCategoryCode'] = isset($data['responseCategoryCode']) ? $data['responseCategoryCode'] : null;
        $this->container['forwardedAcquirerCode'] = isset($data['forwardedAcquirerCode']) ? $data['forwardedAcquirerCode'] : null;
        $this->container['masterCardServiceCode'] = isset($data['masterCardServiceCode']) ? $data['masterCardServiceCode'] : null;
        $this->container['masterCardServiceReplyCode'] = isset($data['masterCardServiceReplyCode']) ? $data['masterCardServiceReplyCode'] : null;
        $this->container['responseDetails'] = isset($data['responseDetails']) ? $data['responseDetails'] : null;
        $this->container['providerResponse'] = isset($data['providerResponse']) ? $data['providerResponse'] : null;
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
     * Gets transactionId
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param string $transactionId Processor transaction ID.  This value identifies the transaction on a host system. This value is supported only for Moneris. It contains this information:   - Terminal used to process the transaction  - Shift during which the transaction took place  - Batch number  - Transaction number within the batch  You must store this value. If you give the customer a receipt, display this value on the receipt.  Example For the value 66012345001069003:   - Terminal ID = 66012345  - Shift number = 001  - Batch number = 069  - Transaction number = 003
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets responseCode
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     * @param string $responseCode For most processors, this is the error message sent directly from the bank. Returned only when the processor returns this value.  **Important** Do not use this field to evaluate the result of the authorization.  #### PIN debit Response value that is returned by the processor or bank. **Important** Do not use this field to evaluate the results of the transaction request.  Returned by PIN debit credit, PIN debit purchase, and PIN debit reversal.  #### AIBMS If this value is `08`, you can accept the transaction if the customer provides you with identification.  #### Atos This value is the response code sent from Atos and it might also include the response code from the bank. Format: `aa,bb` with the two values separated by a comma and where: - `aa` is the two-digit error message from Atos. - `bb` is the optional two-digit error message from the bank.  #### Comercio Latino This value is the status code and the error or response code received from the processor separated by a colon. Format: [status code]:E[error code] or [status code]:R[response code] Example `2:R06`  #### JCN Gateway Processor-defined detail error code. The associated response category code is in the `processorInformation.responseCategoryCode` field. String (3)  #### paypalgateway Processor generated ID for the itemized detail.
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets responseCategoryCode
     * @return string
     */
    public function getResponseCategoryCode()
    {
        return $this->container['responseCategoryCode'];
    }

    /**
     * Sets responseCategoryCode
     * @param string $responseCategoryCode Processor-defined response category code. The associated detail error code is in the `processorInformation.responseCode` or `issuerInformation.responseCode` field of the service you requested.  This field is supported only for:   - Japanese issuers  - Domestic transactions in Japan  - Comercio Latino—processor transaction ID required for troubleshooting  #### Maximum length for processors   - Comercio Latino: 36  - All other processors: 3
     * @return $this
     */
    public function setResponseCategoryCode($responseCategoryCode)
    {
        $this->container['responseCategoryCode'] = $responseCategoryCode;

        return $this;
    }

    /**
     * Gets forwardedAcquirerCode
     * @return string
     */
    public function getForwardedAcquirerCode()
    {
        return $this->container['forwardedAcquirerCode'];
    }

    /**
     * Sets forwardedAcquirerCode
     * @param string $forwardedAcquirerCode Name of the Japanese acquirer that processed the transaction. Returned only for JCN Gateway. Please contact the CyberSource Japan Support Group for more information.
     * @return $this
     */
    public function setForwardedAcquirerCode($forwardedAcquirerCode)
    {
        $this->container['forwardedAcquirerCode'] = $forwardedAcquirerCode;

        return $this;
    }

    /**
     * Gets masterCardServiceCode
     * @return string
     */
    public function getMasterCardServiceCode()
    {
        return $this->container['masterCardServiceCode'];
    }

    /**
     * Sets masterCardServiceCode
     * @param string $masterCardServiceCode Mastercard service that was used for the transaction. Mastercard provides this value to CyberSource.  Possible value:  - 53: Mastercard card-on-file token service  #### CyberSource through VisaNet The value for this field corresponds to the following data in the TC 33 capture file: - Record: CP01 TCR6 - Position: 133-134 - Field: Mastercard Merchant on-behalf service. **Note** This field is returned only for CyberSource through VisaNet.
     * @return $this
     */
    public function setMasterCardServiceCode($masterCardServiceCode)
    {
        $this->container['masterCardServiceCode'] = $masterCardServiceCode;

        return $this;
    }

    /**
     * Gets masterCardServiceReplyCode
     * @return string
     */
    public function getMasterCardServiceReplyCode()
    {
        return $this->container['masterCardServiceReplyCode'];
    }

    /**
     * Sets masterCardServiceReplyCode
     * @param string $masterCardServiceReplyCode Result of the Mastercard card-on-file token service. Mastercard provides this value to CyberSource.  Possible values:   - `C`: Service completed successfully.  - `F`: One of the following:    - Incorrect Mastercard POS entry mode. The Mastercard POS entry mode should be 81 for an authorization or      authorization reversal.    - Incorrect Mastercard POS entry mode. The Mastercard POS entry mode should be 01 for a tokenized request.    - Token requestor ID is missing or formatted incorrectly.  - `I`: One of the following:    - Invalid token requestor ID.    - Suspended or deactivated token.    - Invalid token (not in mapping table).  - `T`: Invalid combination of token requestor ID and token.  - `U`: Expired token.  - `W`: Primary account number (PAN) listed in electronic warning bulletin.  **Note** This field is returned only for **CyberSource through VisaNet**.
     * @return $this
     */
    public function setMasterCardServiceReplyCode($masterCardServiceReplyCode)
    {
        $this->container['masterCardServiceReplyCode'] = $masterCardServiceReplyCode;

        return $this;
    }

    /**
     * Gets responseDetails
     * @return string
     */
    public function getResponseDetails()
    {
        return $this->container['responseDetails'];
    }

    /**
     * Sets responseDetails
     * @param string $responseDetails This field might contain information about a decline. This field is supported only for **CyberSource through VisaNet**.
     * @return $this
     */
    public function setResponseDetails($responseDetails)
    {
        $this->container['responseDetails'] = $responseDetails;

        return $this;
    }

    /**
     * Gets providerResponse
     * @return string
     */
    public function getProviderResponse()
    {
        return $this->container['providerResponse'];
    }

    /**
     * Sets providerResponse
     * @param string $providerResponse Processor response to the API request.
     * @return $this
     */
    public function setProviderResponse($providerResponse)
    {
        $this->container['providerResponse'] = $providerResponse;

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


