<?php
/**
 * ResponseRoutingOptionListRoutingOptionList
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
 * ResponseRoutingOptionListRoutingOptionList Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ResponseRoutingOptionListRoutingOptionList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResponseRoutingOptionList_routingOptionList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_routing_option' => 'string',
        'routing_option' => 'string',
        'trunk_group_name' => 'string',
        'routing_product_type_ref' => 'string',
        'routing_product_type_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_routing_option' => null,
        'routing_option' => null,
        'trunk_group_name' => null,
        'routing_product_type_ref' => null,
        'routing_product_type_name' => null
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
        'customer_routing_option' => 'customerRoutingOption',
        'routing_option' => 'routingOption',
        'trunk_group_name' => 'trunkGroupName',
        'routing_product_type_ref' => 'routingProductTypeRef',
        'routing_product_type_name' => 'routingProductTypeName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_routing_option' => 'setCustomerRoutingOption',
        'routing_option' => 'setRoutingOption',
        'trunk_group_name' => 'setTrunkGroupName',
        'routing_product_type_ref' => 'setRoutingProductTypeRef',
        'routing_product_type_name' => 'setRoutingProductTypeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_routing_option' => 'getCustomerRoutingOption',
        'routing_option' => 'getRoutingOption',
        'trunk_group_name' => 'getTrunkGroupName',
        'routing_product_type_ref' => 'getRoutingProductTypeRef',
        'routing_product_type_name' => 'getRoutingProductTypeName'
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
        $this->container['customer_routing_option'] = $data['customer_routing_option'] ?? null;
        $this->container['routing_option'] = $data['routing_option'] ?? null;
        $this->container['trunk_group_name'] = $data['trunk_group_name'] ?? null;
        $this->container['routing_product_type_ref'] = $data['routing_product_type_ref'] ?? null;
        $this->container['routing_product_type_name'] = $data['routing_product_type_name'] ?? null;
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
     * Gets customer_routing_option
     *
     * @return string|null
     */
    public function getCustomerRoutingOption()
    {
        return $this->container['customer_routing_option'];
    }

    /**
     * Sets customer_routing_option
     *
     * @param string|null $customer_routing_option customer assigned Name
     *
     * @return self
     */
    public function setCustomerRoutingOption($customer_routing_option)
    {
        $this->container['customer_routing_option'] = $customer_routing_option;

        return $this;
    }

    /**
     * Gets routing_option
     *
     * @return string|null
     */
    public function getRoutingOption()
    {
        return $this->container['routing_option'];
    }

    /**
     * Sets routing_option
     *
     * @param string|null $routing_option routing option Name
     *
     * @return self
     */
    public function setRoutingOption($routing_option)
    {
        $this->container['routing_option'] = $routing_option;

        return $this;
    }

    /**
     * Gets trunk_group_name
     *
     * @return string|null
     */
    public function getTrunkGroupName()
    {
        return $this->container['trunk_group_name'];
    }

    /**
     * Sets trunk_group_name
     *
     * @param string|null $trunk_group_name primary trunk group Name
     *
     * @return self
     */
    public function setTrunkGroupName($trunk_group_name)
    {
        $this->container['trunk_group_name'] = $trunk_group_name;

        return $this;
    }

    /**
     * Gets routing_product_type_ref
     *
     * @return string|null
     */
    public function getRoutingProductTypeRef()
    {
        return $this->container['routing_product_type_ref'];
    }

    /**
     * Sets routing_product_type_ref
     *
     * @param string|null $routing_product_type_ref routing product type ref
     *
     * @return self
     */
    public function setRoutingProductTypeRef($routing_product_type_ref)
    {
        $this->container['routing_product_type_ref'] = $routing_product_type_ref;

        return $this;
    }

    /**
     * Gets routing_product_type_name
     *
     * @return string|null
     */
    public function getRoutingProductTypeName()
    {
        return $this->container['routing_product_type_name'];
    }

    /**
     * Sets routing_product_type_name
     *
     * @param string|null $routing_product_type_name routing product type name
     *
     * @return self
     */
    public function setRoutingProductTypeName($routing_product_type_name)
    {
        $this->container['routing_product_type_name'] = $routing_product_type_name;

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


