<?php
/**
 * InlineObject143
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inteliquent Services API
 *
 * &nbsp; ## Introduction This document explains how to access and use the Inteliquent Services API to integrate your applications with Inteliquent’s for automated processing of telephone number, port-in, and order management operations. <br> Only RESTful protocol is supported (the Services API accepts information in JSON format). Use the following URLs to make API calls:<br> <ul>  <li>Production: https://services.inteliquent.com<br>  <li>Sandbox: https://services-sandbox.inteliquent.com (please use this environment for initial integration testing) </ul> ## Accounts and Access Request an account from Inteliquent (portal.support@inteliquent.com) for the production and sandbox API environments. After an account has been created and API access is enabled for your company, you can retrieve your company’s key and secret from the Admin section of the customer portal for the appropriate environment. <p>Access the portal using the following URLs: <ul> <li> Production: https://portal.inteliquent.com <li> Sandbox: https://portal-sandbox.inteliquent.com </ul> ### Security The Inteliquent Services API accepts HTTPS connections using TLS version 1.2. ### Authentication Two forms of authentication are supported by Services API:<br> <ul>  <li>OAuth2 Authentication and Authorization<br>  <li>Basic Authentication<br> </ul> <br><br> &nbsp; ### OAuth 2.0 <br><br> OAuth 2.0 is the authentication and authorization mechanism for the Inteliquent Services API. Your application must pass the correct token in the HTTP header to make API calls to Inteliquent. <br> Your application can request a token from the Inteliquent Token Generator with your consumer key and secret, as shown below. Tokens expire after one hour.<br><br> <b>Example Request (using curl):</b><br> <code>curl -X POST -H \"Content-Type:application/x-www-form-urlencoded\" –H \"charset:UTF-8\" https://services-token.inteliquent.com/oauth2/token --insecure --data \"client_id=YOURCONSUMERKEY&client_secret=YOURCONSUMERSECRET&grant_type=client_credentials\"</code><br> <b>Example Response:</b><br> <code>{\"scope\":\"am_application_scope default\",\"token_type\":\"bearer\",\"expires_in\":9223372036854775807,\"access_token\":\"a12b34567c89012def34g56789hi0j12\"}</code><br><br> Note- Substitute “services-token-sandbox” for “services-token” in the above URL to retrieve your token for the sandbox environment. <br><br> &nbsp; ### Authorization <br><br>  You must provide the token as part of the HTTP Header each time you make an API call.<br> When your application calls the Inteliquent services API, the API first validates that the OAuth2.0 token is valid. If so, the service call will be executed. If not, the following error message will be returned: <br> <code> <ams:fault xmlns:ams=\"http://wso2.org/apimanager/security\"> <ams:code>900901</ams:code> <ams:message>Invalid Credentials</ams:message> <ams:description>Access failure for API: /Services/2.0.0, version: 2.0.0 with key: Abcd1FghIjK23l4mno5pqrX6yzab. Make sure you have given the correct access token</ams:description> </ams:fault></code> <br><br> &nbsp; ### Basic Authentication <br><br> You can use your API Key and Secret to set the Basic Authorization header.<br><br> <b> Example Request: </b> <br> Authorization: Basic Base64 encoded(Key:Secret)  <br><br> When your application calls the Inteliquent Services API, the API first validates that the Basic Auth is valid. If so, the service call will be executed. If not, the following error message will be returned:<br><br> { \"message\": \"Invalid authentication information provided\", \"status\": \"Invalid credentials\", \"statusCode\": \"401001\", \"timestamp\": \"2019-12-10T14:07:32.310-0600\" } <br><br> &nbsp;
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: portal.support@inteliquent.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * InlineObject143 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject143 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_143';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message' => 'string',
        'notification_type' => 'string',
        'order_id' => 'int',
        'customer_order_reference' => 'string',
        'order_type' => 'string',
        'order_status' => 'string',
        'timestamp' => 'string',
        'tn_group' => 'string',
        'group_status' => 'string',
        'tn_list' => '\OpenAPI\Client\Model\CustomerConfiguredWebhookURLForOrderUpdatesTnList',
        'tn_item' => '\OpenAPI\Client\Model\CustomerConfiguredWebhookURLForOrderUpdatesTnItem'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'message' => null,
        'notification_type' => null,
        'order_id' => null,
        'customer_order_reference' => null,
        'order_type' => null,
        'order_status' => null,
        'timestamp' => null,
        'tn_group' => null,
        'group_status' => null,
        'tn_list' => null,
        'tn_item' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'message' => 'message',
        'notification_type' => 'notificationType',
        'order_id' => 'orderId',
        'customer_order_reference' => 'customerOrderReference',
        'order_type' => 'orderType',
        'order_status' => 'orderStatus',
        'timestamp' => 'timestamp',
        'tn_group' => 'tnGroup',
        'group_status' => 'groupStatus',
        'tn_list' => 'tnList',
        'tn_item' => 'tnItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'notification_type' => 'setNotificationType',
        'order_id' => 'setOrderId',
        'customer_order_reference' => 'setCustomerOrderReference',
        'order_type' => 'setOrderType',
        'order_status' => 'setOrderStatus',
        'timestamp' => 'setTimestamp',
        'tn_group' => 'setTnGroup',
        'group_status' => 'setGroupStatus',
        'tn_list' => 'setTnList',
        'tn_item' => 'setTnItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'notification_type' => 'getNotificationType',
        'order_id' => 'getOrderId',
        'customer_order_reference' => 'getCustomerOrderReference',
        'order_type' => 'getOrderType',
        'order_status' => 'getOrderStatus',
        'timestamp' => 'getTimestamp',
        'tn_group' => 'getTnGroup',
        'group_status' => 'getGroupStatus',
        'tn_list' => 'getTnList',
        'tn_item' => 'getTnItem'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['message'] = $data['message'] ?? null;
        $this->container['notification_type'] = $data['notification_type'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['customer_order_reference'] = $data['customer_order_reference'] ?? null;
        $this->container['order_type'] = $data['order_type'] ?? null;
        $this->container['order_status'] = $data['order_status'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['tn_group'] = $data['tn_group'] ?? null;
        $this->container['group_status'] = $data['group_status'] ?? null;
        $this->container['tn_list'] = $data['tn_list'] ?? null;
        $this->container['tn_item'] = $data['tn_item'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets notification_type
     *
     * @return string|null
     */
    public function getNotificationType()
    {
        return $this->container['notification_type'];
    }

    /**
     * Sets notification_type
     *
     * @param string|null $notification_type notification_type
     *
     * @return self
     */
    public function setNotificationType($notification_type)
    {
        $this->container['notification_type'] = $notification_type;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id Order Id of the order.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets customer_order_reference
     *
     * @return string|null
     */
    public function getCustomerOrderReference()
    {
        return $this->container['customer_order_reference'];
    }

    /**
     * Sets customer_order_reference
     *
     * @param string|null $customer_order_reference Customer for whom the order is.
     *
     * @return self
     */
    public function setCustomerOrderReference($customer_order_reference)
    {
        $this->container['customer_order_reference'] = $customer_order_reference;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string|null $order_type Type of order submitted
     *
     * @return self
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string|null $order_status order_status
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string|null $timestamp The timestamp format should match \"7/31/2017 4:56:06.000000 AM -05:00\"
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets tn_group
     *
     * @return string|null
     */
    public function getTnGroup()
    {
        return $this->container['tn_group'];
    }

    /**
     * Sets tn_group
     *
     * @param string|null $tn_group tn_group
     *
     * @return self
     */
    public function setTnGroup($tn_group)
    {
        $this->container['tn_group'] = $tn_group;

        return $this;
    }

    /**
     * Gets group_status
     *
     * @return string|null
     */
    public function getGroupStatus()
    {
        return $this->container['group_status'];
    }

    /**
     * Sets group_status
     *
     * @param string|null $group_status group_status
     *
     * @return self
     */
    public function setGroupStatus($group_status)
    {
        $this->container['group_status'] = $group_status;

        return $this;
    }

    /**
     * Gets tn_list
     *
     * @return \OpenAPI\Client\Model\CustomerConfiguredWebhookURLForOrderUpdatesTnList|null
     */
    public function getTnList()
    {
        return $this->container['tn_list'];
    }

    /**
     * Sets tn_list
     *
     * @param \OpenAPI\Client\Model\CustomerConfiguredWebhookURLForOrderUpdatesTnList|null $tn_list tn_list
     *
     * @return self
     */
    public function setTnList($tn_list)
    {
        $this->container['tn_list'] = $tn_list;

        return $this;
    }

    /**
     * Gets tn_item
     *
     * @return \OpenAPI\Client\Model\CustomerConfiguredWebhookURLForOrderUpdatesTnItem|null
     */
    public function getTnItem()
    {
        return $this->container['tn_item'];
    }

    /**
     * Sets tn_item
     *
     * @param \OpenAPI\Client\Model\CustomerConfiguredWebhookURLForOrderUpdatesTnItem|null $tn_item tn_item
     *
     * @return self
     */
    public function setTnItem($tn_item)
    {
        $this->container['tn_item'] = $tn_item;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


