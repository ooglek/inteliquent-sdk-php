<?php
/**
 * InlineObject29
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
 * InlineObject29 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject29 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_29';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'private_key' => 'string',
        'messaging_brand_id' => 'string',
        'messaging_brand_name' => 'string',
        'external_campaign_id' => 'string',
        'campaign_description' => 'string',
        'campaign_class_name' => 'string',
        'campaign_start_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'private_key' => null,
        'messaging_brand_id' => null,
        'messaging_brand_name' => null,
        'external_campaign_id' => null,
        'campaign_description' => null,
        'campaign_class_name' => null,
        'campaign_start_date' => null
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
        'private_key' => 'privateKey',
        'messaging_brand_id' => 'messagingBrandId',
        'messaging_brand_name' => 'messagingBrandName',
        'external_campaign_id' => 'externalCampaignId',
        'campaign_description' => 'campaignDescription',
        'campaign_class_name' => 'campaignClassName',
        'campaign_start_date' => 'campaignStartDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'private_key' => 'setPrivateKey',
        'messaging_brand_id' => 'setMessagingBrandId',
        'messaging_brand_name' => 'setMessagingBrandName',
        'external_campaign_id' => 'setExternalCampaignId',
        'campaign_description' => 'setCampaignDescription',
        'campaign_class_name' => 'setCampaignClassName',
        'campaign_start_date' => 'setCampaignStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'private_key' => 'getPrivateKey',
        'messaging_brand_id' => 'getMessagingBrandId',
        'messaging_brand_name' => 'getMessagingBrandName',
        'external_campaign_id' => 'getExternalCampaignId',
        'campaign_description' => 'getCampaignDescription',
        'campaign_class_name' => 'getCampaignClassName',
        'campaign_start_date' => 'getCampaignStartDate'
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
        $this->container['private_key'] = $data['private_key'] ?? null;
        $this->container['messaging_brand_id'] = $data['messaging_brand_id'] ?? null;
        $this->container['messaging_brand_name'] = $data['messaging_brand_name'] ?? null;
        $this->container['external_campaign_id'] = $data['external_campaign_id'] ?? null;
        $this->container['campaign_description'] = $data['campaign_description'] ?? null;
        $this->container['campaign_class_name'] = $data['campaign_class_name'] ?? null;
        $this->container['campaign_start_date'] = $data['campaign_start_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['private_key'] === null) {
            $invalidProperties[] = "'private_key' can't be null";
        }
        if ($this->container['messaging_brand_id'] === null) {
            $invalidProperties[] = "'messaging_brand_id' can't be null";
        }
        if ($this->container['messaging_brand_name'] === null) {
            $invalidProperties[] = "'messaging_brand_name' can't be null";
        }
        if ($this->container['external_campaign_id'] === null) {
            $invalidProperties[] = "'external_campaign_id' can't be null";
        }
        if ($this->container['campaign_class_name'] === null) {
            $invalidProperties[] = "'campaign_class_name' can't be null";
        }
        if ($this->container['campaign_start_date'] === null) {
            $invalidProperties[] = "'campaign_start_date' can't be null";
        }
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
     * Gets private_key
     *
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->container['private_key'];
    }

    /**
     * Sets private_key
     *
     * @param string $private_key API key required to validate your application
     *
     * @return self
     */
    public function setPrivateKey($private_key)
    {
        $this->container['private_key'] = $private_key;

        return $this;
    }

    /**
     * Gets messaging_brand_id
     *
     * @return string
     */
    public function getMessagingBrandId()
    {
        return $this->container['messaging_brand_id'];
    }

    /**
     * Sets messaging_brand_id
     *
     * @param string $messaging_brand_id Messaging Brand id
     *
     * @return self
     */
    public function setMessagingBrandId($messaging_brand_id)
    {
        $this->container['messaging_brand_id'] = $messaging_brand_id;

        return $this;
    }

    /**
     * Gets messaging_brand_name
     *
     * @return string
     */
    public function getMessagingBrandName()
    {
        return $this->container['messaging_brand_name'];
    }

    /**
     * Sets messaging_brand_name
     *
     * @param string $messaging_brand_name Messaging Brand Name
     *
     * @return self
     */
    public function setMessagingBrandName($messaging_brand_name)
    {
        $this->container['messaging_brand_name'] = $messaging_brand_name;

        return $this;
    }

    /**
     * Gets external_campaign_id
     *
     * @return string
     */
    public function getExternalCampaignId()
    {
        return $this->container['external_campaign_id'];
    }

    /**
     * Sets external_campaign_id
     *
     * @param string $external_campaign_id Messaging Campaign Any External Campaign Id
     *
     * @return self
     */
    public function setExternalCampaignId($external_campaign_id)
    {
        $this->container['external_campaign_id'] = $external_campaign_id;

        return $this;
    }

    /**
     * Gets campaign_description
     *
     * @return string|null
     */
    public function getCampaignDescription()
    {
        return $this->container['campaign_description'];
    }

    /**
     * Sets campaign_description
     *
     * @param string|null $campaign_description Messaging Campaign Description
     *
     * @return self
     */
    public function setCampaignDescription($campaign_description)
    {
        $this->container['campaign_description'] = $campaign_description;

        return $this;
    }

    /**
     * Gets campaign_class_name
     *
     * @return string
     */
    public function getCampaignClassName()
    {
        return $this->container['campaign_class_name'];
    }

    /**
     * Sets campaign_class_name
     *
     * @param string $campaign_class_name Messaging Campaign Class Name
     *
     * @return self
     */
    public function setCampaignClassName($campaign_class_name)
    {
        $this->container['campaign_class_name'] = $campaign_class_name;

        return $this;
    }

    /**
     * Gets campaign_start_date
     *
     * @return string
     */
    public function getCampaignStartDate()
    {
        return $this->container['campaign_start_date'];
    }

    /**
     * Sets campaign_start_date
     *
     * @param string $campaign_start_date Messaging Campaign Start Date
     *
     * @return self
     */
    public function setCampaignStartDate($campaign_start_date)
    {
        $this->container['campaign_start_date'] = $campaign_start_date;

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


