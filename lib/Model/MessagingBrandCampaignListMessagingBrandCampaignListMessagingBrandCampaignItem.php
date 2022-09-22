<?php
/**
 * MessagingBrandCampaignListMessagingBrandCampaignListMessagingBrandCampaignItem
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
 * MessagingBrandCampaignListMessagingBrandCampaignListMessagingBrandCampaignItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MessagingBrandCampaignListMessagingBrandCampaignListMessagingBrandCampaignItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MessagingBrandCampaignList_messagingBrandCampaignList_messagingBrandCampaignItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'messaging_campaign_id' => 'string',
        'messaging_brand_name' => 'string',
        'messaging_brand_description' => 'string',
        'external_campaign_id' => 'string',
        'campaign_description' => 'string',
        'campaign_class_name' => 'string',
        'campaign_start_date' => 'string',
        'campaign_end_date' => 'string',
        'is_dca_approved' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'messaging_campaign_id' => null,
        'messaging_brand_name' => null,
        'messaging_brand_description' => null,
        'external_campaign_id' => null,
        'campaign_description' => null,
        'campaign_class_name' => null,
        'campaign_start_date' => null,
        'campaign_end_date' => null,
        'is_dca_approved' => null
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
        'messaging_campaign_id' => 'messagingCampaignId',
        'messaging_brand_name' => 'messagingBrandName',
        'messaging_brand_description' => 'messagingBrandDescription',
        'external_campaign_id' => 'externalCampaignId',
        'campaign_description' => 'campaignDescription',
        'campaign_class_name' => 'campaignClassName',
        'campaign_start_date' => 'campaignStartDate',
        'campaign_end_date' => 'campaignEndDate',
        'is_dca_approved' => 'isDcaApproved'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'messaging_campaign_id' => 'setMessagingCampaignId',
        'messaging_brand_name' => 'setMessagingBrandName',
        'messaging_brand_description' => 'setMessagingBrandDescription',
        'external_campaign_id' => 'setExternalCampaignId',
        'campaign_description' => 'setCampaignDescription',
        'campaign_class_name' => 'setCampaignClassName',
        'campaign_start_date' => 'setCampaignStartDate',
        'campaign_end_date' => 'setCampaignEndDate',
        'is_dca_approved' => 'setIsDcaApproved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'messaging_campaign_id' => 'getMessagingCampaignId',
        'messaging_brand_name' => 'getMessagingBrandName',
        'messaging_brand_description' => 'getMessagingBrandDescription',
        'external_campaign_id' => 'getExternalCampaignId',
        'campaign_description' => 'getCampaignDescription',
        'campaign_class_name' => 'getCampaignClassName',
        'campaign_start_date' => 'getCampaignStartDate',
        'campaign_end_date' => 'getCampaignEndDate',
        'is_dca_approved' => 'getIsDcaApproved'
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
        $this->container['messaging_campaign_id'] = $data['messaging_campaign_id'] ?? null;
        $this->container['messaging_brand_name'] = $data['messaging_brand_name'] ?? null;
        $this->container['messaging_brand_description'] = $data['messaging_brand_description'] ?? null;
        $this->container['external_campaign_id'] = $data['external_campaign_id'] ?? null;
        $this->container['campaign_description'] = $data['campaign_description'] ?? null;
        $this->container['campaign_class_name'] = $data['campaign_class_name'] ?? null;
        $this->container['campaign_start_date'] = $data['campaign_start_date'] ?? null;
        $this->container['campaign_end_date'] = $data['campaign_end_date'] ?? null;
        $this->container['is_dca_approved'] = $data['is_dca_approved'] ?? null;
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
     * Gets messaging_campaign_id
     *
     * @return string|null
     */
    public function getMessagingCampaignId()
    {
        return $this->container['messaging_campaign_id'];
    }

    /**
     * Sets messaging_campaign_id
     *
     * @param string|null $messaging_campaign_id Messaging Campaign Id
     *
     * @return self
     */
    public function setMessagingCampaignId($messaging_campaign_id)
    {
        $this->container['messaging_campaign_id'] = $messaging_campaign_id;

        return $this;
    }

    /**
     * Gets messaging_brand_name
     *
     * @return string|null
     */
    public function getMessagingBrandName()
    {
        return $this->container['messaging_brand_name'];
    }

    /**
     * Sets messaging_brand_name
     *
     * @param string|null $messaging_brand_name Messaging Brand Name
     *
     * @return self
     */
    public function setMessagingBrandName($messaging_brand_name)
    {
        $this->container['messaging_brand_name'] = $messaging_brand_name;

        return $this;
    }

    /**
     * Gets messaging_brand_description
     *
     * @return string|null
     */
    public function getMessagingBrandDescription()
    {
        return $this->container['messaging_brand_description'];
    }

    /**
     * Sets messaging_brand_description
     *
     * @param string|null $messaging_brand_description Messaging Brand Description
     *
     * @return self
     */
    public function setMessagingBrandDescription($messaging_brand_description)
    {
        $this->container['messaging_brand_description'] = $messaging_brand_description;

        return $this;
    }

    /**
     * Gets external_campaign_id
     *
     * @return string|null
     */
    public function getExternalCampaignId()
    {
        return $this->container['external_campaign_id'];
    }

    /**
     * Sets external_campaign_id
     *
     * @param string|null $external_campaign_id Messaging Campaign External Id
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
     * @return string|null
     */
    public function getCampaignClassName()
    {
        return $this->container['campaign_class_name'];
    }

    /**
     * Sets campaign_class_name
     *
     * @param string|null $campaign_class_name Messaging Campaign Class Name
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
     * @return string|null
     */
    public function getCampaignStartDate()
    {
        return $this->container['campaign_start_date'];
    }

    /**
     * Sets campaign_start_date
     *
     * @param string|null $campaign_start_date Messaging Campaign Start Date
     *
     * @return self
     */
    public function setCampaignStartDate($campaign_start_date)
    {
        $this->container['campaign_start_date'] = $campaign_start_date;

        return $this;
    }

    /**
     * Gets campaign_end_date
     *
     * @return string|null
     */
    public function getCampaignEndDate()
    {
        return $this->container['campaign_end_date'];
    }

    /**
     * Sets campaign_end_date
     *
     * @param string|null $campaign_end_date Messaging Campaign End Date
     *
     * @return self
     */
    public function setCampaignEndDate($campaign_end_date)
    {
        $this->container['campaign_end_date'] = $campaign_end_date;

        return $this;
    }

    /**
     * Gets is_dca_approved
     *
     * @return string|null
     */
    public function getIsDcaApproved()
    {
        return $this->container['is_dca_approved'];
    }

    /**
     * Sets is_dca_approved
     *
     * @param string|null $is_dca_approved Indicates if the campaign is approved by the DCA. Possible values Y and N
     *
     * @return self
     */
    public function setIsDcaApproved($is_dca_approved)
    {
        $this->container['is_dca_approved'] = $is_dca_approved;

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


