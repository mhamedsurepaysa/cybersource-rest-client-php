<?php
/**
 * InlineResponse2004
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
 * InlineResponse2004 Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2004 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_4';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'webhookId' => 'string',
        'organizationId' => 'string',
        'products' => '\CyberSource\Model\Notificationsubscriptionsv1webhooksProducts[]',
        'webhookUrl' => 'string',
        'healthCheckUrl' => 'string',
        'notificationScope' => '\CyberSource\Model\Notificationsubscriptionsv1webhooksNotificationScope',
        'status' => 'string',
        'name' => 'string',
        'description' => 'string',
        'retryPolicy' => '\CyberSource\Model\Notificationsubscriptionsv1webhooksRetryPolicy',
        'securityPolicy' => '\CyberSource\Model\Notificationsubscriptionsv1webhooksSecurityPolicy',
        'createdOn' => 'string',
        'updatedOn' => 'string',
        'additionalAttributes' => 'map[string,string][]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'webhookId' => null,
        'organizationId' => null,
        'products' => null,
        'webhookUrl' => null,
        'healthCheckUrl' => null,
        'notificationScope' => null,
        'status' => null,
        'name' => null,
        'description' => null,
        'retryPolicy' => null,
        'securityPolicy' => null,
        'createdOn' => null,
        'updatedOn' => null,
        'additionalAttributes' => null
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
        'webhookId' => 'webhookId',
        'organizationId' => 'organizationId',
        'products' => 'products',
        'webhookUrl' => 'webhookUrl',
        'healthCheckUrl' => 'healthCheckUrl',
        'notificationScope' => 'notificationScope',
        'status' => 'status',
        'name' => 'name',
        'description' => 'description',
        'retryPolicy' => 'retryPolicy',
        'securityPolicy' => 'securityPolicy',
        'createdOn' => 'createdOn',
        'updatedOn' => 'updatedOn',
        'additionalAttributes' => 'additionalAttributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'webhookId' => 'setWebhookId',
        'organizationId' => 'setOrganizationId',
        'products' => 'setProducts',
        'webhookUrl' => 'setWebhookUrl',
        'healthCheckUrl' => 'setHealthCheckUrl',
        'notificationScope' => 'setNotificationScope',
        'status' => 'setStatus',
        'name' => 'setName',
        'description' => 'setDescription',
        'retryPolicy' => 'setRetryPolicy',
        'securityPolicy' => 'setSecurityPolicy',
        'createdOn' => 'setCreatedOn',
        'updatedOn' => 'setUpdatedOn',
        'additionalAttributes' => 'setAdditionalAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'webhookId' => 'getWebhookId',
        'organizationId' => 'getOrganizationId',
        'products' => 'getProducts',
        'webhookUrl' => 'getWebhookUrl',
        'healthCheckUrl' => 'getHealthCheckUrl',
        'notificationScope' => 'getNotificationScope',
        'status' => 'getStatus',
        'name' => 'getName',
        'description' => 'getDescription',
        'retryPolicy' => 'getRetryPolicy',
        'securityPolicy' => 'getSecurityPolicy',
        'createdOn' => 'getCreatedOn',
        'updatedOn' => 'getUpdatedOn',
        'additionalAttributes' => 'getAdditionalAttributes'
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
        $this->container['webhookId'] = isset($data['webhookId']) ? $data['webhookId'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['webhookUrl'] = isset($data['webhookUrl']) ? $data['webhookUrl'] : null;
        $this->container['healthCheckUrl'] = isset($data['healthCheckUrl']) ? $data['healthCheckUrl'] : null;
        $this->container['notificationScope'] = isset($data['notificationScope']) ? $data['notificationScope'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'INACTIVE';
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['retryPolicy'] = isset($data['retryPolicy']) ? $data['retryPolicy'] : null;
        $this->container['securityPolicy'] = isset($data['securityPolicy']) ? $data['securityPolicy'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['updatedOn'] = isset($data['updatedOn']) ? $data['updatedOn'] : null;
        $this->container['additionalAttributes'] = isset($data['additionalAttributes']) ? $data['additionalAttributes'] : null;
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
     * Gets webhookId
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhookId'];
    }

    /**
     * Sets webhookId
     * @param string $webhookId Webhook Id. This is generated by the server.
     * @return $this
     */
    public function setWebhookId($webhookId)
    {
        $this->container['webhookId'] = $webhookId;

        return $this;
    }

    /**
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId Organization ID.
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets products
     * @return \CyberSource\Model\Notificationsubscriptionsv1webhooksProducts[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param \CyberSource\Model\Notificationsubscriptionsv1webhooksProducts[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets webhookUrl
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->container['webhookUrl'];
    }

    /**
     * Sets webhookUrl
     * @param string $webhookUrl The client's endpoint (URL) to receive webhooks.
     * @return $this
     */
    public function setWebhookUrl($webhookUrl)
    {
        $this->container['webhookUrl'] = $webhookUrl;

        return $this;
    }

    /**
     * Gets healthCheckUrl
     * @return string
     */
    public function getHealthCheckUrl()
    {
        return $this->container['healthCheckUrl'];
    }

    /**
     * Sets healthCheckUrl
     * @param string $healthCheckUrl The client's health check endpoint (URL). This should be as close as possible to the actual webhookUrl.
     * @return $this
     */
    public function setHealthCheckUrl($healthCheckUrl)
    {
        $this->container['healthCheckUrl'] = $healthCheckUrl;

        return $this;
    }

    /**
     * Gets notificationScope
     * @return \CyberSource\Model\Notificationsubscriptionsv1webhooksNotificationScope
     */
    public function getNotificationScope()
    {
        return $this->container['notificationScope'];
    }

    /**
     * Sets notificationScope
     * @param \CyberSource\Model\Notificationsubscriptionsv1webhooksNotificationScope $notificationScope
     * @return $this
     */
    public function setNotificationScope($notificationScope)
    {
        $this->container['notificationScope'] = $notificationScope;

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
     * @param string $status Webhook status.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Client friendly webhook name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Client friendly webhook description.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets retryPolicy
     * @return \CyberSource\Model\Notificationsubscriptionsv1webhooksRetryPolicy
     */
    public function getRetryPolicy()
    {
        return $this->container['retryPolicy'];
    }

    /**
     * Sets retryPolicy
     * @param \CyberSource\Model\Notificationsubscriptionsv1webhooksRetryPolicy $retryPolicy
     * @return $this
     */
    public function setRetryPolicy($retryPolicy)
    {
        $this->container['retryPolicy'] = $retryPolicy;

        return $this;
    }

    /**
     * Gets securityPolicy
     * @return \CyberSource\Model\Notificationsubscriptionsv1webhooksSecurityPolicy
     */
    public function getSecurityPolicy()
    {
        return $this->container['securityPolicy'];
    }

    /**
     * Sets securityPolicy
     * @param \CyberSource\Model\Notificationsubscriptionsv1webhooksSecurityPolicy $securityPolicy
     * @return $this
     */
    public function setSecurityPolicy($securityPolicy)
    {
        $this->container['securityPolicy'] = $securityPolicy;

        return $this;
    }

    /**
     * Gets createdOn
     * @return string
     */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
     * Sets createdOn
     * @param string $createdOn Date on which webhook was created/registered.
     * @return $this
     */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;

        return $this;
    }

    /**
     * Gets updatedOn
     * @return string
     */
    public function getUpdatedOn()
    {
        return $this->container['updatedOn'];
    }

    /**
     * Sets updatedOn
     * @param string $updatedOn Date on which webhook was most recently updated.
     * @return $this
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->container['updatedOn'] = $updatedOn;

        return $this;
    }

    /**
     * Gets additionalAttributes
     * @return map[string,string][]
     */
    public function getAdditionalAttributes()
    {
        return $this->container['additionalAttributes'];
    }

    /**
     * Sets additionalAttributes
     * @param map[string,string][] $additionalAttributes Additional, free form configuration data.
     * @return $this
     */
    public function setAdditionalAttributes($additionalAttributes)
    {
        $this->container['additionalAttributes'] = $additionalAttributes;

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


