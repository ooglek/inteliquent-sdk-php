<?php
/**
 * PortInOrderPortInOrderTnListTnItem
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
 * PortInOrderPortInOrderTnListTnItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PortInOrderPortInOrderTnListTnItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_portInOrder_portInOrder_tnList_tnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tn' => 'string',
        'tn_note' => 'string',
        'port_out_pin' => 'string',
        'trunk_group' => 'string',
        'routing_option' => 'string',
        'account_num' => 'string',
        'atn' => 'string',
        'auth_name' => 'string',
        'auth_date' => '\DateTime',
        'account_pin' => 'string',
        'end_user' => '\OpenAPI\Client\Model\PortInOrderPortInOrderTnListEndUser',
        'tn_feature' => '\OpenAPI\Client\Model\PortInOrderPortInOrderTnListTnFeature'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tn' => null,
        'tn_note' => null,
        'port_out_pin' => null,
        'trunk_group' => null,
        'routing_option' => null,
        'account_num' => null,
        'atn' => null,
        'auth_name' => null,
        'auth_date' => 'date',
        'account_pin' => null,
        'end_user' => null,
        'tn_feature' => null
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
        'tn' => 'tn',
        'tn_note' => 'tnNote',
        'port_out_pin' => 'portOutPin',
        'trunk_group' => 'trunkGroup',
        'routing_option' => 'routingOption',
        'account_num' => 'accountNum',
        'atn' => 'atn',
        'auth_name' => 'authName',
        'auth_date' => 'authDate',
        'account_pin' => 'accountPin',
        'end_user' => 'endUser',
        'tn_feature' => 'tnFeature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tn' => 'setTn',
        'tn_note' => 'setTnNote',
        'port_out_pin' => 'setPortOutPin',
        'trunk_group' => 'setTrunkGroup',
        'routing_option' => 'setRoutingOption',
        'account_num' => 'setAccountNum',
        'atn' => 'setAtn',
        'auth_name' => 'setAuthName',
        'auth_date' => 'setAuthDate',
        'account_pin' => 'setAccountPin',
        'end_user' => 'setEndUser',
        'tn_feature' => 'setTnFeature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tn' => 'getTn',
        'tn_note' => 'getTnNote',
        'port_out_pin' => 'getPortOutPin',
        'trunk_group' => 'getTrunkGroup',
        'routing_option' => 'getRoutingOption',
        'account_num' => 'getAccountNum',
        'atn' => 'getAtn',
        'auth_name' => 'getAuthName',
        'auth_date' => 'getAuthDate',
        'account_pin' => 'getAccountPin',
        'end_user' => 'getEndUser',
        'tn_feature' => 'getTnFeature'
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
        $this->container['tn'] = $data['tn'] ?? null;
        $this->container['tn_note'] = $data['tn_note'] ?? null;
        $this->container['port_out_pin'] = $data['port_out_pin'] ?? null;
        $this->container['trunk_group'] = $data['trunk_group'] ?? null;
        $this->container['routing_option'] = $data['routing_option'] ?? null;
        $this->container['account_num'] = $data['account_num'] ?? null;
        $this->container['atn'] = $data['atn'] ?? null;
        $this->container['auth_name'] = $data['auth_name'] ?? null;
        $this->container['auth_date'] = $data['auth_date'] ?? null;
        $this->container['account_pin'] = $data['account_pin'] ?? null;
        $this->container['end_user'] = $data['end_user'] ?? null;
        $this->container['tn_feature'] = $data['tn_feature'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tn'] === null) {
            $invalidProperties[] = "'tn' can't be null";
        }
        if ($this->container['account_num'] === null) {
            $invalidProperties[] = "'account_num' can't be null";
        }
        if ($this->container['atn'] === null) {
            $invalidProperties[] = "'atn' can't be null";
        }
        if ($this->container['auth_name'] === null) {
            $invalidProperties[] = "'auth_name' can't be null";
        }
        if ($this->container['auth_date'] === null) {
            $invalidProperties[] = "'auth_date' can't be null";
        }
        if ($this->container['end_user'] === null) {
            $invalidProperties[] = "'end_user' can't be null";
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
     * Gets tn
     *
     * @return string
     */
    public function getTn()
    {
        return $this->container['tn'];
    }

    /**
     * Sets tn
     *
     * @param string $tn telephone number requested
     *
     * @return self
     */
    public function setTn($tn)
    {
        $this->container['tn'] = $tn;

        return $this;
    }

    /**
     * Gets tn_note
     *
     * @return string|null
     */
    public function getTnNote()
    {
        return $this->container['tn_note'];
    }

    /**
     * Sets tn_note
     *
     * @param string|null $tn_note tn_note
     *
     * @return self
     */
    public function setTnNote($tn_note)
    {
        $this->container['tn_note'] = $tn_note;

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
     * Gets trunk_group
     *
     * @return string|null
     */
    public function getTrunkGroup()
    {
        return $this->container['trunk_group'];
    }

    /**
     * Sets trunk_group
     *
     * @param string|null $trunk_group trunk group for the telephone number
     *
     * @return self
     */
    public function setTrunkGroup($trunk_group)
    {
        $this->container['trunk_group'] = $trunk_group;

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
     * @param string|null $routing_option routing option for the telephone number
     *
     * @return self
     */
    public function setRoutingOption($routing_option)
    {
        $this->container['routing_option'] = $routing_option;

        return $this;
    }

    /**
     * Gets account_num
     *
     * @return string
     */
    public function getAccountNum()
    {
        return $this->container['account_num'];
    }

    /**
     * Sets account_num
     *
     * @param string $account_num account_num
     *
     * @return self
     */
    public function setAccountNum($account_num)
    {
        $this->container['account_num'] = $account_num;

        return $this;
    }

    /**
     * Gets atn
     *
     * @return string
     */
    public function getAtn()
    {
        return $this->container['atn'];
    }

    /**
     * Sets atn
     *
     * @param string $atn atn
     *
     * @return self
     */
    public function setAtn($atn)
    {
        $this->container['atn'] = $atn;

        return $this;
    }

    /**
     * Gets auth_name
     *
     * @return string
     */
    public function getAuthName()
    {
        return $this->container['auth_name'];
    }

    /**
     * Sets auth_name
     *
     * @param string $auth_name auth_name
     *
     * @return self
     */
    public function setAuthName($auth_name)
    {
        $this->container['auth_name'] = $auth_name;

        return $this;
    }

    /**
     * Gets auth_date
     *
     * @return \DateTime
     */
    public function getAuthDate()
    {
        return $this->container['auth_date'];
    }

    /**
     * Sets auth_date
     *
     * @param \DateTime $auth_date auth_date
     *
     * @return self
     */
    public function setAuthDate($auth_date)
    {
        $this->container['auth_date'] = $auth_date;

        return $this;
    }

    /**
     * Gets account_pin
     *
     * @return string|null
     */
    public function getAccountPin()
    {
        return $this->container['account_pin'];
    }

    /**
     * Sets account_pin
     *
     * @param string|null $account_pin account_pin
     *
     * @return self
     */
    public function setAccountPin($account_pin)
    {
        $this->container['account_pin'] = $account_pin;

        return $this;
    }

    /**
     * Gets end_user
     *
     * @return \OpenAPI\Client\Model\PortInOrderPortInOrderTnListEndUser
     */
    public function getEndUser()
    {
        return $this->container['end_user'];
    }

    /**
     * Sets end_user
     *
     * @param \OpenAPI\Client\Model\PortInOrderPortInOrderTnListEndUser $end_user end_user
     *
     * @return self
     */
    public function setEndUser($end_user)
    {
        $this->container['end_user'] = $end_user;

        return $this;
    }

    /**
     * Gets tn_feature
     *
     * @return \OpenAPI\Client\Model\PortInOrderPortInOrderTnListTnFeature|null
     */
    public function getTnFeature()
    {
        return $this->container['tn_feature'];
    }

    /**
     * Sets tn_feature
     *
     * @param \OpenAPI\Client\Model\PortInOrderPortInOrderTnListTnFeature|null $tn_feature tn_feature
     *
     * @return self
     */
    public function setTnFeature($tn_feature)
    {
        $this->container['tn_feature'] = $tn_feature;

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


