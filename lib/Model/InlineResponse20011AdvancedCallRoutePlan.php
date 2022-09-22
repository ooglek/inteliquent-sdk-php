<?php
/**
 * InlineResponse20011AdvancedCallRoutePlan
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
 * InlineResponse20011AdvancedCallRoutePlan Class Doc Comment
 *
 * @category Class
 * @description Contains advanced call route plan object
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20011AdvancedCallRoutePlan implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_11_advancedCallRoutePlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advanced_call_route_plan_id' => 'int',
        'route_plan_name' => 'string',
        'default_routing_label' => 'string',
        'time_zone' => 'string',
        'status' => 'string',
        'created_user' => 'string',
        'routes' => '\OpenAPI\Client\Model\InlineResponse20011AdvancedCallRoutePlanRoutes[]',
        'special_day_route' => '\OpenAPI\Client\Model\InlineResponse20011AdvancedCallRoutePlanSpecialDayRoute'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'advanced_call_route_plan_id' => null,
        'route_plan_name' => null,
        'default_routing_label' => null,
        'time_zone' => null,
        'status' => null,
        'created_user' => null,
        'routes' => null,
        'special_day_route' => null
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
        'advanced_call_route_plan_id' => 'advancedCallRoutePlanId',
        'route_plan_name' => 'routePlanName',
        'default_routing_label' => 'defaultRoutingLabel',
        'time_zone' => 'timeZone',
        'status' => 'status',
        'created_user' => 'createdUser',
        'routes' => 'routes',
        'special_day_route' => 'specialDayRoute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advanced_call_route_plan_id' => 'setAdvancedCallRoutePlanId',
        'route_plan_name' => 'setRoutePlanName',
        'default_routing_label' => 'setDefaultRoutingLabel',
        'time_zone' => 'setTimeZone',
        'status' => 'setStatus',
        'created_user' => 'setCreatedUser',
        'routes' => 'setRoutes',
        'special_day_route' => 'setSpecialDayRoute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advanced_call_route_plan_id' => 'getAdvancedCallRoutePlanId',
        'route_plan_name' => 'getRoutePlanName',
        'default_routing_label' => 'getDefaultRoutingLabel',
        'time_zone' => 'getTimeZone',
        'status' => 'getStatus',
        'created_user' => 'getCreatedUser',
        'routes' => 'getRoutes',
        'special_day_route' => 'getSpecialDayRoute'
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
        $this->container['advanced_call_route_plan_id'] = $data['advanced_call_route_plan_id'] ?? null;
        $this->container['route_plan_name'] = $data['route_plan_name'] ?? null;
        $this->container['default_routing_label'] = $data['default_routing_label'] ?? null;
        $this->container['time_zone'] = $data['time_zone'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['created_user'] = $data['created_user'] ?? null;
        $this->container['routes'] = $data['routes'] ?? null;
        $this->container['special_day_route'] = $data['special_day_route'] ?? null;
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
     * Gets advanced_call_route_plan_id
     *
     * @return int|null
     */
    public function getAdvancedCallRoutePlanId()
    {
        return $this->container['advanced_call_route_plan_id'];
    }

    /**
     * Sets advanced_call_route_plan_id
     *
     * @param int|null $advanced_call_route_plan_id Name of route plan
     *
     * @return self
     */
    public function setAdvancedCallRoutePlanId($advanced_call_route_plan_id)
    {
        $this->container['advanced_call_route_plan_id'] = $advanced_call_route_plan_id;

        return $this;
    }

    /**
     * Gets route_plan_name
     *
     * @return string|null
     */
    public function getRoutePlanName()
    {
        return $this->container['route_plan_name'];
    }

    /**
     * Sets route_plan_name
     *
     * @param string|null $route_plan_name Name of route plan
     *
     * @return self
     */
    public function setRoutePlanName($route_plan_name)
    {
        $this->container['route_plan_name'] = $route_plan_name;

        return $this;
    }

    /**
     * Gets default_routing_label
     *
     * @return string|null
     */
    public function getDefaultRoutingLabel()
    {
        return $this->container['default_routing_label'];
    }

    /**
     * Sets default_routing_label
     *
     * @param string|null $default_routing_label Default routing label for advanced call route plan
     *
     * @return self
     */
    public function setDefaultRoutingLabel($default_routing_label)
    {
        $this->container['default_routing_label'] = $default_routing_label;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone Timezone for advanced call route plan
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status of the advanced call route plan
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_user
     *
     * @return string|null
     */
    public function getCreatedUser()
    {
        return $this->container['created_user'];
    }

    /**
     * Sets created_user
     *
     * @param string|null $created_user user name who created the advanced call route plan
     *
     * @return self
     */
    public function setCreatedUser($created_user)
    {
        $this->container['created_user'] = $created_user;

        return $this;
    }

    /**
     * Gets routes
     *
     * @return \OpenAPI\Client\Model\InlineResponse20011AdvancedCallRoutePlanRoutes[]|null
     */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
     * Sets routes
     *
     * @param \OpenAPI\Client\Model\InlineResponse20011AdvancedCallRoutePlanRoutes[]|null $routes List of routes
     *
     * @return self
     */
    public function setRoutes($routes)
    {
        $this->container['routes'] = $routes;

        return $this;
    }

    /**
     * Gets special_day_route
     *
     * @return \OpenAPI\Client\Model\InlineResponse20011AdvancedCallRoutePlanSpecialDayRoute|null
     */
    public function getSpecialDayRoute()
    {
        return $this->container['special_day_route'];
    }

    /**
     * Sets special_day_route
     *
     * @param \OpenAPI\Client\Model\InlineResponse20011AdvancedCallRoutePlanSpecialDayRoute|null $special_day_route special_day_route
     *
     * @return self
     */
    public function setSpecialDayRoute($special_day_route)
    {
        $this->container['special_day_route'] = $special_day_route;

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

