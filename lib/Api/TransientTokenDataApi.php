<?php
/**
 * TransientTokenDataApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
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

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;
use \CyberSource\Logging\LogFactory as LogFactory;

/**
 * TransientTokenDataApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransientTokenDataApi
{
    private static $logger = null;
    
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $apiClient->merchantConfig->getLogConfiguration());
        }
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return TransientTokenDataApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getPaymentCredentialsForTransientToken
     *
     * Get Payment Credentials
     *
     * @param string $paymentCredentialsReference The paymentCredentialsReference field contained within the Transient token returned from a successful Unified Checkout transaction (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentCredentialsForTransientToken($paymentCredentialsReference)
    {
        self::$logger->info('CALL TO METHOD getPaymentCredentialsForTransientToken STARTED');
        list($response, $statusCode, $httpHeader) = $this->getPaymentCredentialsForTransientTokenWithHttpInfo($paymentCredentialsReference);
        self::$logger->info('CALL TO METHOD getPaymentCredentialsForTransientToken ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getPaymentCredentialsForTransientTokenWithHttpInfo
     *
     * Get Payment Credentials
     *
     * @param string $paymentCredentialsReference The paymentCredentialsReference field contained within the Transient token returned from a successful Unified Checkout transaction (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentCredentialsForTransientTokenWithHttpInfo($paymentCredentialsReference)
    {
        // verify the required parameter 'paymentCredentialsReference' is set
        if ($paymentCredentialsReference === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $paymentCredentialsReference when calling getPaymentCredentialsForTransientToken");
            throw new \InvalidArgumentException('Missing the required parameter $paymentCredentialsReference when calling getPaymentCredentialsForTransientToken');
        }
        // parse inputs
        $resourcePath = "/flex/v2/payment-credentials/{paymentCredentialsReference}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($paymentCredentialsReference !== null) {
            $resourcePath = str_replace(
                "{" . "paymentCredentialsReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($paymentCredentialsReference),
                $resourcePath
            );
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : string");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/flex/v2/payment-credentials/{paymentCredentialsReference}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getTransactionForTransientToken
     *
     * Get Transient Token Data
     *
     * @param string $transientToken Transient Token returned by the Unified Checkout application. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionForTransientToken($transientToken)
    {
        self::$logger->info('CALL TO METHOD getTransactionForTransientToken STARTED');
        list($response, $statusCode, $httpHeader) = $this->getTransactionForTransientTokenWithHttpInfo($transientToken);
        self::$logger->info('CALL TO METHOD getTransactionForTransientToken ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getTransactionForTransientTokenWithHttpInfo
     *
     * Get Transient Token Data
     *
     * @param string $transientToken Transient Token returned by the Unified Checkout application. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionForTransientTokenWithHttpInfo($transientToken)
    {
        // verify the required parameter 'transientToken' is set
        if ($transientToken === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $transientToken when calling getTransactionForTransientToken");
            throw new \InvalidArgumentException('Missing the required parameter $transientToken when calling getTransactionForTransientToken');
        }
        // parse inputs
        $resourcePath = "/up/v1/payment-details/{transientToken}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($transientToken !== null) {
            $resourcePath = str_replace(
                "{" . "transientToken" . "}",
                $this->apiClient->getSerializer()->toPathValue($transientToken),
                $resourcePath
            );
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : null");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/up/v1/payment-details/{transientToken}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
