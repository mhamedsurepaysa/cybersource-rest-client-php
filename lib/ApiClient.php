<?php
/**
 * ApiClient
 *
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

namespace CyberSource;
use CyberSource\Authentication\Core\Authentication as Authentication;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\PayloadDigest\PayloadDigest as PayloadDigest;
use \CyberSource\Logging\LogFactory as LogFactory;

$stream_headers = array();

/**
 * ApiClient Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiClient
{
    private static $logger = null;
    
    public static $PATCH = "PATCH";
    public static $POST = "POST";
    public static $GET = "GET";
    public static $HEAD = "HEAD";
    public static $OPTIONS = "OPTIONS";
    public static $PUT = "PUT";
    public static $DELETE = "DELETE";

    /**
     * Client ID
     *
     */
    protected $clientId;

    /**
     * Configuration
     *
     * @var Configuration
     */
    protected $config;

    /**
     * Object Serializer
     *
     * @var ObjectSerializer
     */
    protected $serializer;

    /**
     * Download File Path
     *
     * @var DownloadFilePath
     */
    public $downloadFilePath = null;

    /**
     * User-defined Accept Header Type
     *
     * @var AcceptHeader
     */
    public $acceptHeader = null;

    /**
     * Constructor of the class
     *
     * @param Configuration $config config for this ApiClient
     */
    public function __construct(\CyberSource\Configuration $config = null, \CyberSource\Authentication\Core\MerchantConfiguration $merchantConfig = null)
    {
        if ($config === null) {
            $config = Configuration::getDefaultConfiguration();
        }
        
        if ($merchantConfig === null) {
            echo "Merchant Configuration cannot be null.";
        }

        $this->config = $config;
        $this->merchantConfig = $merchantConfig;
        $this->serializer = new ObjectSerializer();

        $this->clientId = $this->getClientId();

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $merchantConfig->getLogConfiguration());
        }
    }

    /**
     * Get Client ID 
     * 
     * @return String
     */
    public function getClientId()
    {
        $versionInfo = "";
        $packages = json_decode(file_get_contents(__DIR__ . "/../../../../vendor/composer/installed.json"), true);

        foreach ($packages as $package) {
            if (isset($package['name']) && strcmp($package['name'], "cybersource/rest-client-php") == 0)
            {
                $versionInfo = "cybs-rest-sdk-php-" . $package['version'];
            }
        }

        return $versionInfo;
    }

    /**
     * Get the config
     *
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Get the serializer
     *
     * @return ObjectSerializer
     */
    public function getSerializer()
    {
        return $this->serializer;
    }

    /**
     * Set user-defined Accept Header Type
     *
     * @param  string $headerType user-defined Accept Header Type
     */
    public function setAcceptHeader($headerType)
    {
        $this->acceptHeader = $headerType;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->config->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->config->getApiKey($apiKeyIdentifier);

        if (!isset($apiKey)) {
            return null;
        }

        if (isset($prefix)) {
            $keyWithPrefix = $prefix." ".$apiKey;
        } else {
            $keyWithPrefix = $apiKey;
        }

        return $keyWithPrefix;
    }

    /**
     * Make the HTTP call (Sync)
     *
     * @param string $resourcePath path to method endpoint
     * @param string $method       method to call
     * @param array  $queryParams  parameters to be place in query URL
     * @param array  $postData     parameters to be placed in POST body
     * @param array  $headerParams parameters to be place in request header
     * @param string $responseType expected response type of the endpoint
     * @param string $endpointPath path to method endpoint before expanding parameters
     *
     * @throws \CyberSource\ApiException on a non 2xx response
     * @return mixed
     */
    public function callApi($resourcePath, $method, $queryParams, $postData, $headerParams, $responseType = null, $endpointPath = null)
    {
        self::$logger->info("CALLING API \"$resourcePath\" STARTED");
        $headers = [];
        global $stream_headers;

        if (!($this->acceptHeader === NULL)) {
            $defaultAcceptHeader = ',' . $headerParams['Accept'];
            $defaultAcceptHeader = $this->acceptHeader . str_replace(',' . $this->acceptHeader, '', $defaultAcceptHeader);
            $headerParams['Accept'] = $defaultAcceptHeader;
        }

        // construct the http header
        $headerParams = array_merge(
            (array)$this->config->getDefaultHeaders(),
            (array)$headerParams
        );
        
        if (!empty($queryParams)) {
            $resourcePath = ($resourcePath . '?' . http_build_query($queryParams));
            $queryParams=null;
        }
        
        foreach ($headerParams as $key => $val) {
            $headers[] = "$key: $val";
        }

        // form data
        if ($postData and in_array('Content-Type: application/x-www-form-urlencoded', $headers, true)) {
            $postData = http_build_query($postData);
        } elseif ((is_object($postData) or is_array($postData)) and !in_array('Content-Type: multipart/form-data', $headers, true)) { // json model
            $postData = json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($postData));
        }
        $resourcePath= utf8_encode($resourcePath);

        if($this->merchantConfig->getAuthenticationType() != GlobalParameter::MUTUAL_AUTH)
        {
            $authHeader = $this->callAuthenticationHeader($method, $postData, $resourcePath);
        }

        foreach ($headers as $value) {
            $splitArr= explode(":", $value, 2);
            $this->config->addRequestHeader($splitArr[0], $splitArr[1]);
        }

        foreach ($authHeader as $value) {
            $splitArr= explode(":", $value, 2);

            if(strcasecmp($splitArr[0],"Signature")==0){
                $requestHeader= $this->config->getHeaderIfExistInRequestHeaderByCaseInsensitive($splitArr[0]);
                if($requestHeader != -1){
                    $this->config->deleteRequestHeader($requestHeader);
                }
            }
            if(strcasecmp($splitArr[0],"Authorization")==0){
                $requestHeader= $this->config->getHeaderIfExistInRequestHeaderByCaseInsensitive($splitArr[0]);
                if($requestHeader != -1){
                    $this->config->deleteRequestHeader($requestHeader);
                }
            }
            $requestHeader= $this->config->getHeaderIfExistInRequestHeaderByCaseInsensitive($splitArr[0]);
            if($requestHeader == -1){
                $this->config->addRequestHeader($splitArr[0], $splitArr[1]);
            }
        }

        $requestHeaders=[];
        foreach ( $this->config->getRequestHeaders() as $key => $val) {
            $requestHeaders[] = "$key: $val";
        }

        if ($this->merchantConfig->getIntermediateHost()) {
            $intermediateHostUrl= $this->merchantConfig->getIntermediateHost();
            if(substr( $intermediateHostUrl, 0, 7 ) === "http://" || substr( $intermediateHostUrl, 0, 8 ) === "https://"){
                $url = $this->merchantConfig->getIntermediateHost() . $resourcePath;
            }else{
                $url =  GlobalParameter::HTTPS_PREFIX.$this->merchantConfig->getIntermediateHost() . $resourcePath;
            }
        }else{
            $url = GlobalParameter::HTTPS_PREFIX.$this->config->getHost() . $resourcePath;
        }

        self::$logger->debug("Request Headers :\n" . \CyberSource\Utilities\Helpers\DataMasker::maskAuthenticationData(\CyberSource\Utilities\Helpers\ListHelper::toString($requestHeaders)));

        $curl = curl_init();
        // set timeout, if needed
        if ($this->config->getCurlTimeout() !== 0) {
            curl_setopt($curl, CURLOPT_TIMEOUT, $this->config->getCurlTimeout());
        }
        // set connect timeout, if needed
        if ($this->config->getCurlConnectTimeout() != 0) {
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->config->getCurlConnectTimeout());
        }

        // return the result on success, rather than just true
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $requestHeaders);

        // disable SSL verification, if needed
        if ($this->config->getSSLVerification() === false) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        }else{
            curl_setopt($curl, CURLOPT_CAINFO, __DIR__. DIRECTORY_SEPARATOR . 'ssl/cacert.pem');
        }

        if ($this->config->getCurlProxyHost()) {
            curl_setopt($curl, CURLOPT_PROXY, $this->config->getCurlProxyHost());
        }

        if ($this->config->getCurlProxyPort()) {
            curl_setopt($curl, CURLOPT_PROXYPORT, $this->config->getCurlProxyPort());
        }

        if ($this->config->getCurlProxyType()) {
            curl_setopt($curl, CURLOPT_PROXYTYPE, $this->config->getCurlProxyType());
        }

        if ($this->config->getCurlProxyUser()) {
            curl_setopt($curl, CURLOPT_PROXYUSERPWD, $this->config->getCurlProxyUser() . ':' .$this->config->getCurlProxyPassword());
        }

        if (!empty($queryParams)) {
            $url = ($url . '?' . http_build_query($queryParams));
        }

        if ($this->config->getAllowEncoding()) {
            curl_setopt($curl, CURLOPT_ENCODING, '');
        }

        if ($method === self::$POST) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$HEAD) {
            curl_setopt($curl, CURLOPT_NOBODY, true);
        } elseif ($method === self::$OPTIONS) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "OPTIONS");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$PATCH) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$PUT) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$DELETE) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method !== self::$GET) {
            self::$logger->error("ApiException : Method . $method . is not recognized.");
            self::$logger->close();
            throw new ApiException('Method ' . $method . ' is not recognized.');
        }
        curl_setopt($curl, CURLOPT_URL, $url);

        // Set user agent
        curl_setopt($curl, CURLOPT_USERAGENT, $this->config->getUserAgent());

        if ($this->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
            $printPostData = \CyberSource\Utilities\Helpers\DataMasker::maskData($postData);
        } else {
            $printPostData = $postData;
        }
        self::$logger->debug("HTTP Request Body:\n" . print_r($printPostData, true));
        
        // debugging for curl
        if (($this->merchantConfig->getLogConfiguration())->isLoggingEnabled()) {
            curl_setopt($curl, CURLOPT_VERBOSE, 1);
            $tempBlowup = explode(DIRECTORY_SEPARATOR, ($this->merchantConfig->getLogConfiguration())->getDebugLogFile());
            $normalLogFilename = end($tempBlowup);
            $filenameIndex = key($tempBlowup);
            $tempBlowup[$filenameIndex] = "curlNetwork.log";
            $curlLog = join(DIRECTORY_SEPARATOR, $tempBlowup);
            curl_setopt($curl, CURLOPT_STDERR, fopen($curlLog, 'a'));
        } else {
            curl_setopt($curl, CURLOPT_VERBOSE, 0);
        }

        // File download functionality
        $fileHandle = Null;
        if (isset($this->downloadFilePath) && trim($this->downloadFilePath ?? '') != '') {
            // obtain the HTTP response headers
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_HEADERFUNCTION, array($this, 'header_callback'));
            
            $fileHandle = fopen($this->downloadFilePath, 'w+');
            curl_setopt($curl, CURLOPT_FILE, $fileHandle);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        } else {
            // obtain the HTTP response headers
            curl_setopt($curl, CURLOPT_HEADER, 1);
        }

        // Adding Client Cert if Required
        if($this->merchantConfig->isEnableClientCert())
        {
            $clientCertPath = $this->merchantConfig->getClientCertDirectory().$this->merchantConfig->getClientCertFile();
            curl_setopt($curl, CURLOPT_SSLCERT, $clientCertPath);
            curl_setopt($curl, CURLOPT_SSLCERTTYPE, 'P12');
            curl_setopt($curl, CURLOPT_SSLCERTPASSWD, $this->merchantConfig->getClientCertPassword());
        }

        // Make the request
        $response = curl_exec($curl);

        if (!isset($this->downloadFilePath) && trim($this->downloadFilePath ?? '') == '') {
            $http_header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
            $http_header = $this->httpParseHeaders(substr($response, 0, $http_header_size));
            $http_body = substr($response, $http_header_size);
            $response_info = curl_getinfo($curl);

            if ($this->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($http_body);
            } else {
                $printHttpBody = $http_body;
            }
            self::$logger->debug("HTTP Response Body:\n" . print_r($printHttpBody, true));
    
            // Handle the response
            if ($response_info['http_code'] === 0) {
                $curl_error_message = curl_error($curl);
    
                // curl_exec can sometimes fail but still return a blank message from curl_error().
                if (!empty($curl_error_message)) {
                    $error_message = "API call to $url failed: $curl_error_message";
                } else {
                    $error_message = "API call to $url failed, but for an unknown reason. " .
                        "This could happen if you are disconnected from the network.";
                }
    
                self::$logger->error("ApiException : " . print_r($error_message, true));
                $exception = new ApiException($error_message, 0, null, null);
                $exception->setResponseObject($response_info);
                self::$logger->close();
                throw $exception;
            } elseif ($response_info['http_code'] >= 200 && $response_info['http_code'] <= 299) {
                // return raw body if response is a file
                if ($responseType === '\SplFileObject' || $responseType === 'string') {
                    self::$logger->close();
                    return [$http_body, $response_info['http_code'], $http_header];
                }
    
                $data = json_decode($http_body);
                if (json_last_error() > 0) { // if response is a string
                    $data = $http_body;
                }
            } else {
                $data = json_decode($http_body);
                if (json_last_error() > 0) { // if response is a string
                    $data = $http_body;
                }

                self::$logger->error("ApiException : [".$response_info['http_code']."] Error connecting to the API ($url)");
                self::$logger->close();
                throw new ApiException(
                    "[".$response_info['http_code']."] Error connecting to the API ($url)",
                    $response_info['http_code'],
                    $http_header,
                    $data
                );
            }
            self::$logger->close();
            return [$data, $response_info['http_code'], $http_header];
        } else {
            $http_header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
            $http_header = $this->httpParseHeaders(substr($response, 0, $http_header_size));
            $http_body = substr($response, $http_header_size);
            $response_info = curl_getinfo($curl);
            curl_close($curl);
            
            if ($fileHandle) {
                fclose($fileHandle);
            }
            
            $downloadFilePath = null;
            
            // Handle the response
            if ($response_info['http_code'] === 0) {
                $curl_error_message = curl_error($curl);

                // curl_exec can sometimes fail but still return a blank message from curl_error().
                if (!empty($curl_error_message)) {
                    $error_message = "API call to $url failed: $curl_error_message";
                } else {
                    $error_message = "API call to $url failed, but for an unknown reason. " .
                        "This could happen if you are disconnected from the network.";
                }

                self::$logger->error("ApiException : " . print_r($error_message, true));
                $exception = new ApiException($error_message, 0, null, null);
                $exception->setResponseObject($response_info);
                self::$logger->close();
                throw $exception;
            } elseif ($response_info['http_code'] >= 200 && $response_info['http_code'] <= 299) {
                $stream_headers['http_code'] = $response_info['http_code'];

                self::$logger->close();
                return [$http_body, $stream_headers['http_code'], $stream_headers];
            } else {
                self::$logger->error("ApiException : [".$response_info['http_code']."] Error connecting to the API ($url)");
                self::$logger->close();
                throw new ApiException(
                    "[".$response_info['http_code']."] Error connecting to the API ($url)",
                    $response_info['http_code'],
                    $stream_headers,
                    null
                );
            }
        }
    }
    
    function header_callback($curl, $header_line) { 
        global $stream_headers;
        
        $stream_headers[] = $this->httpParseHeaders($header_line);
        return strlen($header_line);
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string Accept (e.g. application/json)
     */
    public function selectHeaderAccept($accept)
    {
        if (count($accept) === 0 or (count($accept) === 1 and $accept[0] === '')) {
            return null;
        } elseif (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        } else {
            return implode(',', $accept);
        }
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $content_type Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    public function selectHeaderContentType($content_type)
    {
        if (count($content_type) === 0 or (count($content_type) === 1 and $content_type[0] === '')) {
            return 'application/json';
        } elseif (preg_grep("/application\/json/i", $content_type)) {
            return 'application/json';
        } else {
            return implode(',', $content_type);
        }
    }

   /**
    * Return an array of HTTP response headers
    *
    * @param string $raw_headers A string of raw HTTP response headers
    *
    * @return string[] Array of HTTP response heaers
    */
    protected function httpParseHeaders($raw_headers)
    {
        // ref/credit: http://php.net/manual/en/function.http-parse-headers.php#112986
        $headers = [];
        $key = '';

        foreach (explode("\n", $raw_headers) as $h) {
            $h = explode(':', $h, 2);

            if (isset($h[1])) {
                if (!isset($headers[$h[0]])) {
                    $headers[$h[0]] = trim($h[1] ?? '');
                } elseif (is_array($headers[$h[0]])) {
                    $headers[$h[0]] = array_merge($headers[$h[0]], [trim($h[1] ?? '')]);
                } else {
                    $headers[$h[0]] = array_merge([$headers[$h[0]]], [trim($h[1] ?? '')]);
                }

                $key = $h[0];
            } else {
                if (substr($h[0], 0, 1) === "\t") {
                    $headers[$key] .= "\r\n\t".trim($h[0] ?? '');
                } elseif (!$key) {
                    $headers[0] = trim($h[0] ?? '');
                }
                trim($h[0] ?? '');
            }
        }

        return $headers;
    }
    
    /*
    * Purpose : This function calling the Authentication and making an Auth Header
    *
    */
    public function callAuthenticationHeader($method, $postData, $resourcePath)
    {
        $merchantConfig = $this->merchantConfig;
        $authentication = new Authentication($merchantConfig->getLogConfiguration());
        $getToken = $authentication->generateToken($resourcePath, $postData, $method, $merchantConfig); 
        if($merchantConfig->getAuthenticationType() == GlobalParameter::HTTP_SIGNATURE){
            $host = "Host:".$merchantConfig->getHost();
            $vcMerchant = "v-c-merchant-id:".$merchantConfig->getMerchantID();
            $date = date("D, d M Y G:i:s ").GlobalParameter::GMT;
            $headers = array(
                $vcMerchant,
                $getToken,
                $host,
                'Date:'.$date
            ); 

        } else if($merchantConfig->getAuthenticationType() == GlobalParameter::JWT){
            $headers = array(
                'Authorization:'.$getToken
            );
        }
        else if($merchantConfig->getAuthenticationType()==GlobalParameter::OAUTH){
            $headers = array(
                'Authorization:'.$getToken
            );
        }
        else{
            self::$logger->error("InvalidArgumentException : Invalid Authentication Type : " . $merchantConfig->getAuthenticationType());
            throw new \InvalidArgumentException("Invalid Authentication Type : " . $merchantConfig->getAuthenticationType());
        }

        array_push($headers, "v-c-client-id:" . $this->clientId);

        // if ($merchantConfig->getSolutionId() != null && trim($merchantConfig->getSolutionId() ?? '') != '')
        // {
            // array_push($headers, "v-c-solution-id:" . $merchantConfig->getSolutionId());
        // }
        
        if($method == GlobalParameter::POST || $method == GlobalParameter::PUT || $method== GlobalParameter::PATCH){
            $digestCon = new PayloadDigest($merchantConfig->getLogConfiguration());
            $digest = $digestCon->generateDigest($postData);
            $digestArray = array(GlobalParameter::POSTHTTPDIGEST.$digest);
            $headers = array_merge($headers, $digestArray);
        }
        return $headers;
    }
}
