<?php
/**
 * ResponseAccountDefaultDetailAccountDefaultDetail
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
 * ResponseAccountDefaultDetailAccountDefaultDetail Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ResponseAccountDefaultDetailAccountDefaultDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResponseAccountDefaultDetail_accountDefaultDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_last_name' => 'string',
        'contact_first_name' => 'string',
        'contact_email' => 'string',
        'desired_port_time' => 'string',
        'desired_port_time_zone' => 'string',
        'web_hook_url' => 'string',
        'port_out_pin' => 'string',
        'cnam_dip' => 'string',
        'cnam_dip_tf' => 'string',
        'webhook_header' => 'string',
        'authorize_webhook_portout' => 'string',
        'msg_delivery_receipt' => 'string',
        'email_domain' => 'string',
        'ip_filtering_enabled' => 'string',
        'ip_range' => 'string',
        'slo_url' => 'string',
        'nnid_list' => '\OpenAPI\Client\Model\ResponseAccountDefaultDetailAccountDefaultDetailNnidList',
        'port_out_contact_list' => '\OpenAPI\Client\Model\ResponseAccountDefaultDetailAccountDefaultDetailPortOutContactList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contact_last_name' => null,
        'contact_first_name' => null,
        'contact_email' => null,
        'desired_port_time' => null,
        'desired_port_time_zone' => null,
        'web_hook_url' => null,
        'port_out_pin' => null,
        'cnam_dip' => null,
        'cnam_dip_tf' => null,
        'webhook_header' => null,
        'authorize_webhook_portout' => null,
        'msg_delivery_receipt' => null,
        'email_domain' => null,
        'ip_filtering_enabled' => null,
        'ip_range' => null,
        'slo_url' => null,
        'nnid_list' => null,
        'port_out_contact_list' => null
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
        'contact_last_name' => 'contactLastName',
        'contact_first_name' => 'contactFirstName',
        'contact_email' => 'contactEmail',
        'desired_port_time' => 'desiredPortTime',
        'desired_port_time_zone' => 'desiredPortTimeZone',
        'web_hook_url' => 'webHookUrl',
        'port_out_pin' => 'portOutPin',
        'cnam_dip' => 'cnamDip',
        'cnam_dip_tf' => 'cnamDipTf',
        'webhook_header' => 'webhookHeader',
        'authorize_webhook_portout' => 'authorizeWebhookPortout',
        'msg_delivery_receipt' => 'msgDeliveryReceipt',
        'email_domain' => 'emailDomain',
        'ip_filtering_enabled' => 'ipFilteringEnabled',
        'ip_range' => 'ipRange',
        'slo_url' => 'sloUrl',
        'nnid_list' => 'nnidList',
        'port_out_contact_list' => 'portOutContactList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_last_name' => 'setContactLastName',
        'contact_first_name' => 'setContactFirstName',
        'contact_email' => 'setContactEmail',
        'desired_port_time' => 'setDesiredPortTime',
        'desired_port_time_zone' => 'setDesiredPortTimeZone',
        'web_hook_url' => 'setWebHookUrl',
        'port_out_pin' => 'setPortOutPin',
        'cnam_dip' => 'setCnamDip',
        'cnam_dip_tf' => 'setCnamDipTf',
        'webhook_header' => 'setWebhookHeader',
        'authorize_webhook_portout' => 'setAuthorizeWebhookPortout',
        'msg_delivery_receipt' => 'setMsgDeliveryReceipt',
        'email_domain' => 'setEmailDomain',
        'ip_filtering_enabled' => 'setIpFilteringEnabled',
        'ip_range' => 'setIpRange',
        'slo_url' => 'setSloUrl',
        'nnid_list' => 'setNnidList',
        'port_out_contact_list' => 'setPortOutContactList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_last_name' => 'getContactLastName',
        'contact_first_name' => 'getContactFirstName',
        'contact_email' => 'getContactEmail',
        'desired_port_time' => 'getDesiredPortTime',
        'desired_port_time_zone' => 'getDesiredPortTimeZone',
        'web_hook_url' => 'getWebHookUrl',
        'port_out_pin' => 'getPortOutPin',
        'cnam_dip' => 'getCnamDip',
        'cnam_dip_tf' => 'getCnamDipTf',
        'webhook_header' => 'getWebhookHeader',
        'authorize_webhook_portout' => 'getAuthorizeWebhookPortout',
        'msg_delivery_receipt' => 'getMsgDeliveryReceipt',
        'email_domain' => 'getEmailDomain',
        'ip_filtering_enabled' => 'getIpFilteringEnabled',
        'ip_range' => 'getIpRange',
        'slo_url' => 'getSloUrl',
        'nnid_list' => 'getNnidList',
        'port_out_contact_list' => 'getPortOutContactList'
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
        $this->container['contact_last_name'] = $data['contact_last_name'] ?? null;
        $this->container['contact_first_name'] = $data['contact_first_name'] ?? null;
        $this->container['contact_email'] = $data['contact_email'] ?? null;
        $this->container['desired_port_time'] = $data['desired_port_time'] ?? null;
        $this->container['desired_port_time_zone'] = $data['desired_port_time_zone'] ?? null;
        $this->container['web_hook_url'] = $data['web_hook_url'] ?? null;
        $this->container['port_out_pin'] = $data['port_out_pin'] ?? null;
        $this->container['cnam_dip'] = $data['cnam_dip'] ?? null;
        $this->container['cnam_dip_tf'] = $data['cnam_dip_tf'] ?? null;
        $this->container['webhook_header'] = $data['webhook_header'] ?? null;
        $this->container['authorize_webhook_portout'] = $data['authorize_webhook_portout'] ?? null;
        $this->container['msg_delivery_receipt'] = $data['msg_delivery_receipt'] ?? null;
        $this->container['email_domain'] = $data['email_domain'] ?? null;
        $this->container['ip_filtering_enabled'] = $data['ip_filtering_enabled'] ?? null;
        $this->container['ip_range'] = $data['ip_range'] ?? null;
        $this->container['slo_url'] = $data['slo_url'] ?? null;
        $this->container['nnid_list'] = $data['nnid_list'] ?? null;
        $this->container['port_out_contact_list'] = $data['port_out_contact_list'] ?? null;
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
     * Gets contact_last_name
     *
     * @return string|null
     */
    public function getContactLastName()
    {
        return $this->container['contact_last_name'];
    }

    /**
     * Sets contact_last_name
     *
     * @param string|null $contact_last_name Contact Last Name.
     *
     * @return self
     */
    public function setContactLastName($contact_last_name)
    {
        $this->container['contact_last_name'] = $contact_last_name;

        return $this;
    }

    /**
     * Gets contact_first_name
     *
     * @return string|null
     */
    public function getContactFirstName()
    {
        return $this->container['contact_first_name'];
    }

    /**
     * Sets contact_first_name
     *
     * @param string|null $contact_first_name Contact First Name.
     *
     * @return self
     */
    public function setContactFirstName($contact_first_name)
    {
        $this->container['contact_first_name'] = $contact_first_name;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string|null $contact_email Contact Email.
     *
     * @return self
     */
    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets desired_port_time
     *
     * @return string|null
     */
    public function getDesiredPortTime()
    {
        return $this->container['desired_port_time'];
    }

    /**
     * Sets desired_port_time
     *
     * @param string|null $desired_port_time Desired Port Time
     *
     * @return self
     */
    public function setDesiredPortTime($desired_port_time)
    {
        $this->container['desired_port_time'] = $desired_port_time;

        return $this;
    }

    /**
     * Gets desired_port_time_zone
     *
     * @return string|null
     */
    public function getDesiredPortTimeZone()
    {
        return $this->container['desired_port_time_zone'];
    }

    /**
     * Sets desired_port_time_zone
     *
     * @param string|null $desired_port_time_zone desired_port_time_zone
     *
     * @return self
     */
    public function setDesiredPortTimeZone($desired_port_time_zone)
    {
        $this->container['desired_port_time_zone'] = $desired_port_time_zone;

        return $this;
    }

    /**
     * Gets web_hook_url
     *
     * @return string|null
     */
    public function getWebHookUrl()
    {
        return $this->container['web_hook_url'];
    }

    /**
     * Sets web_hook_url
     *
     * @param string|null $web_hook_url web_hook_url
     *
     * @return self
     */
    public function setWebHookUrl($web_hook_url)
    {
        $this->container['web_hook_url'] = $web_hook_url;

        return $this;
    }

    /**
     * Gets port_out_pin
     *
     * @return string|null
     */
    public function getPortOutPin()
    {
        return $this->container['port_out_pin'];
    }

    /**
     * Sets port_out_pin
     *
     * @param string|null $port_out_pin port_out_pin
     *
     * @return self
     */
    public function setPortOutPin($port_out_pin)
    {
        $this->container['port_out_pin'] = $port_out_pin;

        return $this;
    }

    /**
     * Gets cnam_dip
     *
     * @return string|null
     */
    public function getCnamDip()
    {
        return $this->container['cnam_dip'];
    }

    /**
     * Sets cnam_dip
     *
     * @param string|null $cnam_dip Allow customers to view and order cnam dips
     *
     * @return self
     */
    public function setCnamDip($cnam_dip)
    {
        $this->container['cnam_dip'] = $cnam_dip;

        return $this;
    }

    /**
     * Gets cnam_dip_tf
     *
     * @return string|null
     */
    public function getCnamDipTf()
    {
        return $this->container['cnam_dip_tf'];
    }

    /**
     * Sets cnam_dip_tf
     *
     * @param string|null $cnam_dip_tf Cnam dip flag for Toll Free Numbers
     *
     * @return self
     */
    public function setCnamDipTf($cnam_dip_tf)
    {
        $this->container['cnam_dip_tf'] = $cnam_dip_tf;

        return $this;
    }

    /**
     * Gets webhook_header
     *
     * @return string|null
     */
    public function getWebhookHeader()
    {
        return $this->container['webhook_header'];
    }

    /**
     * Sets webhook_header
     *
     * @param string|null $webhook_header webhook_header
     *
     * @return self
     */
    public function setWebhookHeader($webhook_header)
    {
        $this->container['webhook_header'] = $webhook_header;

        return $this;
    }

    /**
     * Gets authorize_webhook_portout
     *
     * @return string|null
     */
    public function getAuthorizeWebhookPortout()
    {
        return $this->container['authorize_webhook_portout'];
    }

    /**
     * Sets authorize_webhook_portout
     *
     * @param string|null $authorize_webhook_portout authorize_webhook_portout
     *
     * @return self
     */
    public function setAuthorizeWebhookPortout($authorize_webhook_portout)
    {
        $this->container['authorize_webhook_portout'] = $authorize_webhook_portout;

        return $this;
    }

    /**
     * Gets msg_delivery_receipt
     *
     * @return string|null
     */
    public function getMsgDeliveryReceipt()
    {
        return $this->container['msg_delivery_receipt'];
    }

    /**
     * Sets msg_delivery_receipt
     *
     * @param string|null $msg_delivery_receipt Y/N (delivery receipt should be sent or not)
     *
     * @return self
     */
    public function setMsgDeliveryReceipt($msg_delivery_receipt)
    {
        $this->container['msg_delivery_receipt'] = $msg_delivery_receipt;

        return $this;
    }

    /**
     * Gets email_domain
     *
     * @return string|null
     */
    public function getEmailDomain()
    {
        return $this->container['email_domain'];
    }

    /**
     * Sets email_domain
     *
     * @param string|null $email_domain List Email Domains
     *
     * @return self
     */
    public function setEmailDomain($email_domain)
    {
        $this->container['email_domain'] = $email_domain;

        return $this;
    }

    /**
     * Gets ip_filtering_enabled
     *
     * @return string|null
     */
    public function getIpFilteringEnabled()
    {
        return $this->container['ip_filtering_enabled'];
    }

    /**
     * Sets ip_filtering_enabled
     *
     * @param string|null $ip_filtering_enabled Y/N (ipFilteringEnabled should be sent or not)
     *
     * @return self
     */
    public function setIpFilteringEnabled($ip_filtering_enabled)
    {
        $this->container['ip_filtering_enabled'] = $ip_filtering_enabled;

        return $this;
    }

    /**
     * Gets ip_range
     *
     * @return string|null
     */
    public function getIpRange()
    {
        return $this->container['ip_range'];
    }

    /**
     * Sets ip_range
     *
     * @param string|null $ip_range if ipFiltering is enabled, allowed ipRange should be set, otherwise access will be denied
     *
     * @return self
     */
    public function setIpRange($ip_range)
    {
        $this->container['ip_range'] = $ip_range;

        return $this;
    }

    /**
     * Gets slo_url
     *
     * @return string|null
     */
    public function getSloUrl()
    {
        return $this->container['slo_url'];
    }

    /**
     * Sets slo_url
     *
     * @param string|null $slo_url if SSO enabled, Single Log out URL can be set to redirect customer portal logout to client's idp
     *
     * @return self
     */
    public function setSloUrl($slo_url)
    {
        $this->container['slo_url'] = $slo_url;

        return $this;
    }

    /**
     * Gets nnid_list
     *
     * @return \OpenAPI\Client\Model\ResponseAccountDefaultDetailAccountDefaultDetailNnidList|null
     */
    public function getNnidList()
    {
        return $this->container['nnid_list'];
    }

    /**
     * Sets nnid_list
     *
     * @param \OpenAPI\Client\Model\ResponseAccountDefaultDetailAccountDefaultDetailNnidList|null $nnid_list nnid_list
     *
     * @return self
     */
    public function setNnidList($nnid_list)
    {
        $this->container['nnid_list'] = $nnid_list;

        return $this;
    }

    /**
     * Gets port_out_contact_list
     *
     * @return \OpenAPI\Client\Model\ResponseAccountDefaultDetailAccountDefaultDetailPortOutContactList|null
     */
    public function getPortOutContactList()
    {
        return $this->container['port_out_contact_list'];
    }

    /**
     * Sets port_out_contact_list
     *
     * @param \OpenAPI\Client\Model\ResponseAccountDefaultDetailAccountDefaultDetailPortOutContactList|null $port_out_contact_list port_out_contact_list
     *
     * @return self
     */
    public function setPortOutContactList($port_out_contact_list)
    {
        $this->container['port_out_contact_list'] = $port_out_contact_list;

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


