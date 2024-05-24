<?php
/**
 * ManageWebhooksApi
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
 * ManageWebhooksApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManageWebhooksApi
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
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), $apiClient->merchantConfig->getLogConfiguration());
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
     * @return ManageWebhooksApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteWebhookSubscription
     *
     * Delete a Webhook Subscription
     *
     * DISCLAIMER : Cybersource may allow Customer to access, use, and/or test a Cybersource product or service that may still be in development or has not been market-tested ("Beta Product") solely for the purpose of evaluating the functionality or marketability of the Beta Product (a "Beta Evaluation"). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer's participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period ("Beta Product Form"). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer's use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. Cybersource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided "AS IS" and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.
     *
     * @param string $webhookId The webhook identifier. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWebhookSubscription($webhookId)
    {
        self::$logger->info('CALL TO METHOD deleteWebhookSubscription STARTED');
        list($response, $statusCode, $httpHeader) = $this->deleteWebhookSubscriptionWithHttpInfo($webhookId);
        self::$logger->info('CALL TO METHOD deleteWebhookSubscription ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation deleteWebhookSubscriptionWithHttpInfo
     *
     * Delete a Webhook Subscription
     *
     * @param string $webhookId The webhook identifier. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWebhookSubscriptionWithHttpInfo($webhookId)
    {
        // verify the required parameter 'webhookId' is set
        if ($webhookId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $webhookId when calling deleteWebhookSubscription");
            throw new \InvalidArgumentException('Missing the required parameter $webhookId when calling deleteWebhookSubscription');
        }
        // parse inputs
        $resourcePath = "/notification-subscriptions/v1/webhooks/{webhookId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($webhookId !== null) {
            $resourcePath = str_replace(
                "{" . "webhookId" . "}",
                $this->apiClient->getSerializer()->toPathValue($webhookId),
                $resourcePath
            );
        }
        if ('DELETE' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : DELETE $resourcePath");
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/notification-subscriptions/v1/webhooks/{webhookId}'
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

    /**
     * Operation getWebhookSubscriptionById
     *
     * Get Details On a Single Webhook
     *
     * DISCLAIMER : Cybersource may allow Customer to access, use, and/or test a Cybersource product or service that may still be in development or has not been market-tested ("Beta Product") solely for the purpose of evaluating the functionality or marketability of the Beta Product (a "Beta Evaluation"). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer's participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period ("Beta Product Form"). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer's use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. Cybersource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided "AS IS" and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.
     *
     * @param string $webhookId The webhook Identifier (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWebhookSubscriptionById($webhookId)
    {
        self::$logger->info('CALL TO METHOD getWebhookSubscriptionById STARTED');
        list($response, $statusCode, $httpHeader) = $this->getWebhookSubscriptionByIdWithHttpInfo($webhookId);
        self::$logger->info('CALL TO METHOD getWebhookSubscriptionById ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getWebhookSubscriptionByIdWithHttpInfo
     *
     * Get Details On a Single Webhook
     *
     * @param string $webhookId The webhook Identifier (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWebhookSubscriptionByIdWithHttpInfo($webhookId)
    {
        // verify the required parameter 'webhookId' is set
        if ($webhookId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $webhookId when calling getWebhookSubscriptionById");
            throw new \InvalidArgumentException('Missing the required parameter $webhookId when calling getWebhookSubscriptionById');
        }
        // parse inputs
        $resourcePath = "/notification-subscriptions/v1/webhooks/{webhookId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($webhookId !== null) {
            $resourcePath = str_replace(
                "{" . "webhookId" . "}",
                $this->apiClient->getSerializer()->toPathValue($webhookId),
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

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2005");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2005',
                '/notification-subscriptions/v1/webhooks/{webhookId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2005', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getWebhookSubscriptionsByOrg
     *
     * Get Details On All Created Webhooks
     *
     * DISCLAIMER : Cybersource may allow Customer to access, use, and/or test a Cybersource product or service that may still be in development or has not been market-tested ("Beta Product") solely for the purpose of evaluating the functionality or marketability of the Beta Product (a "Beta Evaluation"). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer's participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period ("Beta Product Form"). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer's use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. Cybersource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided "AS IS" and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.
     *
     * @param string $organizationId The Organization Identifier. (required)
     * @param string $productId The Product Identifier. (required)
     * @param string $eventType The Event Type. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2004[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getWebhookSubscriptionsByOrg($organizationId, $productId, $eventType)
    {
        self::$logger->info('CALL TO METHOD getWebhookSubscriptionsByOrg STARTED');
        list($response, $statusCode, $httpHeader) = $this->getWebhookSubscriptionsByOrgWithHttpInfo($organizationId, $productId, $eventType);
        self::$logger->info('CALL TO METHOD getWebhookSubscriptionsByOrg ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getWebhookSubscriptionsByOrgWithHttpInfo
     *
     * Get Details On All Created Webhooks
     *
     * @param string $organizationId The Organization Identifier. (required)
     * @param string $productId The Product Identifier. (required)
     * @param string $eventType The Event Type. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2004[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getWebhookSubscriptionsByOrgWithHttpInfo($organizationId, $productId, $eventType)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $organizationId when calling getWebhookSubscriptionsByOrg");
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling getWebhookSubscriptionsByOrg');
        }
        // verify the required parameter 'productId' is set
        if ($productId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $productId when calling getWebhookSubscriptionsByOrg");
            throw new \InvalidArgumentException('Missing the required parameter $productId when calling getWebhookSubscriptionsByOrg');
        }
        // verify the required parameter 'eventType' is set
        if ($eventType === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $eventType when calling getWebhookSubscriptionsByOrg");
            throw new \InvalidArgumentException('Missing the required parameter $eventType when calling getWebhookSubscriptionsByOrg');
        }
        // parse inputs
        $resourcePath = "/notification-subscriptions/v1/webhooks";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // query params
        if ($productId !== null) {
            $queryParams['productId'] = $this->apiClient->getSerializer()->toQueryValue($productId);
        }
        // query params
        if ($eventType !== null) {
            $queryParams['eventType'] = $this->apiClient->getSerializer()->toQueryValue($eventType);
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
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2004[]");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2004[]',
                '/notification-subscriptions/v1/webhooks'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2004[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2004[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation saveAsymEgressKey
     *
     * Message Level Encryption
     *
     * DISCLAIMER : Cybersource may allow Customer to access, use, and/or test a Cybersource product or service that may still be in development or has not been market-tested ("Beta Product") solely for the purpose of evaluating the functionality or marketability of the Beta Product (a "Beta Evaluation"). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer's participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period ("Beta Product Form"). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer's use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. Cybersource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided "AS IS" and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.
     *
     * @param string $vCSenderOrganizationId Sender organization id (required)
     * @param string $vCPermissions Encoded user permissions returned by the CGK, for the entity user who initiated the boarding (required)
     * @param \CyberSource\Model\SaveAsymEgressKey $saveAsymEgressKey Provide egress Asymmetric key information to save (create or store) (required)
     * @param string $vCCorrelationId A globally unique id associated with your request (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2014, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveAsymEgressKey($vCSenderOrganizationId, $vCPermissions, $saveAsymEgressKey, $vCCorrelationId = null)
    {
        self::$logger->info('CALL TO METHOD saveAsymEgressKey STARTED');
        list($response, $statusCode, $httpHeader) = $this->saveAsymEgressKeyWithHttpInfo($vCSenderOrganizationId, $vCPermissions, $saveAsymEgressKey, $vCCorrelationId);
        self::$logger->info('CALL TO METHOD saveAsymEgressKey ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation saveAsymEgressKeyWithHttpInfo
     *
     * Message Level Encryption
     *
     * @param string $vCSenderOrganizationId Sender organization id (required)
     * @param string $vCPermissions Encoded user permissions returned by the CGK, for the entity user who initiated the boarding (required)
     * @param \CyberSource\Model\SaveAsymEgressKey $saveAsymEgressKey Provide egress Asymmetric key information to save (create or store) (required)
     * @param string $vCCorrelationId A globally unique id associated with your request (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2014, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveAsymEgressKeyWithHttpInfo($vCSenderOrganizationId, $vCPermissions, $saveAsymEgressKey, $vCCorrelationId = null)
    {
        // verify the required parameter 'vCSenderOrganizationId' is set
        if ($vCSenderOrganizationId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $vCSenderOrganizationId when calling saveAsymEgressKey");
            throw new \InvalidArgumentException('Missing the required parameter $vCSenderOrganizationId when calling saveAsymEgressKey');
        }
        if (!preg_match("/^[A-Za-z0-9\\-_]+$/", $vCSenderOrganizationId)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"vCSenderOrganizationId\" when calling ManageWebhooksApi.saveAsymEgressKey, must conform to the pattern /^[A-Za-z0-9\\-_]+$/.");
            throw new \InvalidArgumentException('Invalid value for \"vCSenderOrganizationId\" when calling ManageWebhooksApi.saveAsymEgressKey, must conform to the pattern /^[A-Za-z0-9\\-_]+$/.');
        }

        // verify the required parameter 'vCPermissions' is set
        if ($vCPermissions === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $vCPermissions when calling saveAsymEgressKey");
            throw new \InvalidArgumentException('Missing the required parameter $vCPermissions when calling saveAsymEgressKey');
        }
        // verify the required parameter 'saveAsymEgressKey' is set
        if ($saveAsymEgressKey === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $saveAsymEgressKey when calling saveAsymEgressKey");
            throw new \InvalidArgumentException('Missing the required parameter $saveAsymEgressKey when calling saveAsymEgressKey');
        }
        if (!is_null($vCCorrelationId) && !preg_match("/^[A-Za-z0-9\\.\\-_:]+$/", $vCCorrelationId)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"vCCorrelationId\" when calling ManageWebhooksApi.saveAsymEgressKey, must conform to the pattern /^[A-Za-z0-9\\.\\-_:]+$/.");
            throw new \InvalidArgumentException('Invalid value for \"vCCorrelationId\" when calling ManageWebhooksApi.saveAsymEgressKey, must conform to the pattern /^[A-Za-z0-9\\.\\-_:]+$/.');
        }

        // parse inputs
        $resourcePath = "/kms/egress/v2/keys-asym";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($vCCorrelationId !== null) {
            $headerParams['v-c-correlation-id'] = $this->apiClient->getSerializer()->toHeaderValue($vCCorrelationId);
        }
        // header params
        if ($vCSenderOrganizationId !== null) {
            $headerParams['v-c-sender-organization-id'] = $this->apiClient->getSerializer()->toHeaderValue($vCSenderOrganizationId);
        }
        // header params
        if ($vCPermissions !== null) {
            $headerParams['v-c-permissions'] = $this->apiClient->getSerializer()->toHeaderValue($vCPermissions);
        }
        // body params
        $_tempBody = null;
        if (isset($saveAsymEgressKey)) {
            $_tempBody = $saveAsymEgressKey;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\SaveAsymEgressKey');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2014");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2014',
                '/kms/egress/v2/keys-asym'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2014', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2014', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation updateWebhookSubscription
     *
     * Update a Webhook Subscription
     *
     * DISCLAIMER : Cybersource may allow Customer to access, use, and/or test a Cybersource product or service that may still be in development or has not been market-tested ("Beta Product") solely for the purpose of evaluating the functionality or marketability of the Beta Product (a "Beta Evaluation"). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer's participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period ("Beta Product Form"). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer's use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. Cybersource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided "AS IS" and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.
     *
     * @param string $webhookId The Webhook Identifier. (required)
     * @param \CyberSource\Model\UpdateWebhookRequest $updateWebhookRequest The webhook payload or changes to apply. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWebhookSubscription($webhookId, $updateWebhookRequest = null)
    {
        self::$logger->info('CALL TO METHOD updateWebhookSubscription STARTED');
        list($response, $statusCode, $httpHeader) = $this->updateWebhookSubscriptionWithHttpInfo($webhookId, $updateWebhookRequest);
        self::$logger->info('CALL TO METHOD updateWebhookSubscription ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation updateWebhookSubscriptionWithHttpInfo
     *
     * Update a Webhook Subscription
     *
     * @param string $webhookId The Webhook Identifier. (required)
     * @param \CyberSource\Model\UpdateWebhookRequest $updateWebhookRequest The webhook payload or changes to apply. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWebhookSubscriptionWithHttpInfo($webhookId, $updateWebhookRequest = null)
    {
        // verify the required parameter 'webhookId' is set
        if ($webhookId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $webhookId when calling updateWebhookSubscription");
            throw new \InvalidArgumentException('Missing the required parameter $webhookId when calling updateWebhookSubscription');
        }
        // parse inputs
        $resourcePath = "/notification-subscriptions/v1/webhooks/{webhookId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($webhookId !== null) {
            $resourcePath = str_replace(
                "{" . "webhookId" . "}",
                $this->apiClient->getSerializer()->toPathValue($webhookId),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($updateWebhookRequest)) {
            $_tempBody = $updateWebhookRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\UpdateWebhookRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : PATCH $resourcePath");
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/notification-subscriptions/v1/webhooks/{webhookId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4042', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
