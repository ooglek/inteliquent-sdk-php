<?php
/**
 * TfMoveTfMoveTnListTnItem
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
 * TfMoveTfMoveTnListTnItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TfMoveTfMoveTnListTnItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_tfMove_tfMove_tnList_tnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tn' => 'string',
        'resporg_id' => 'string',
        'routing_label' => 'string',
        'cic_list' => '\OpenAPI\Client\Model\TfMoveTfMoveTnListCicList',
        'dnis' => 'string',
        'dnis_operation' => 'string',
        'tn_note' => 'string',
        'tn_note_operation' => 'string',
        'forward_to' => 'string',
        'forward_to_operation' => 'string',
        'tn_feature' => '\OpenAPI\Client\Model\TfMoveTfMoveTnListTnFeature'
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
        'resporg_id' => null,
        'routing_label' => null,
        'cic_list' => null,
        'dnis' => null,
        'dnis_operation' => null,
        'tn_note' => null,
        'tn_note_operation' => null,
        'forward_to' => null,
        'forward_to_operation' => null,
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
        'resporg_id' => 'resporgId',
        'routing_label' => 'routingLabel',
        'cic_list' => 'cicList',
        'dnis' => 'dnis',
        'dnis_operation' => 'dnisOperation',
        'tn_note' => 'tnNote',
        'tn_note_operation' => 'tnNoteOperation',
        'forward_to' => 'forwardTo',
        'forward_to_operation' => 'forwardToOperation',
        'tn_feature' => 'tnFeature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tn' => 'setTn',
        'resporg_id' => 'setResporgId',
        'routing_label' => 'setRoutingLabel',
        'cic_list' => 'setCicList',
        'dnis' => 'setDnis',
        'dnis_operation' => 'setDnisOperation',
        'tn_note' => 'setTnNote',
        'tn_note_operation' => 'setTnNoteOperation',
        'forward_to' => 'setForwardTo',
        'forward_to_operation' => 'setForwardToOperation',
        'tn_feature' => 'setTnFeature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tn' => 'getTn',
        'resporg_id' => 'getResporgId',
        'routing_label' => 'getRoutingLabel',
        'cic_list' => 'getCicList',
        'dnis' => 'getDnis',
        'dnis_operation' => 'getDnisOperation',
        'tn_note' => 'getTnNote',
        'tn_note_operation' => 'getTnNoteOperation',
        'forward_to' => 'getForwardTo',
        'forward_to_operation' => 'getForwardToOperation',
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
        $this->container['resporg_id'] = $data['resporg_id'] ?? null;
        $this->container['routing_label'] = $data['routing_label'] ?? null;
        $this->container['cic_list'] = $data['cic_list'] ?? null;
        $this->container['dnis'] = $data['dnis'] ?? null;
        $this->container['dnis_operation'] = $data['dnis_operation'] ?? null;
        $this->container['tn_note'] = $data['tn_note'] ?? null;
        $this->container['tn_note_operation'] = $data['tn_note_operation'] ?? null;
        $this->container['forward_to'] = $data['forward_to'] ?? null;
        $this->container['forward_to_operation'] = $data['forward_to_operation'] ?? null;
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
        if ($this->container['resporg_id'] === null) {
            $invalidProperties[] = "'resporg_id' can't be null";
        }
        if ($this->container['routing_label'] === null) {
            $invalidProperties[] = "'routing_label' can't be null";
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
     * @param string $tn Ten-digit toll free number to update (e.g. 8886680000)
     *
     * @return self
     */
    public function setTn($tn)
    {
        $this->container['tn'] = $tn;

        return $this;
    }

    /**
     * Gets resporg_id
     *
     * @return string
     */
    public function getResporgId()
    {
        return $this->container['resporg_id'];
    }

    /**
     * Sets resporg_id
     *
     * @param string $resporg_id Five character RespOrg ID for the toll-free number
     *
     * @return self
     */
    public function setResporgId($resporg_id)
    {
        $this->container['resporg_id'] = $resporg_id;

        return $this;
    }

    /**
     * Gets routing_label
     *
     * @return string
     */
    public function getRoutingLabel()
    {
        return $this->container['routing_label'];
    }

    /**
     * Sets routing_label
     *
     * @param string $routing_label Routing option to assign the toll-free number; use routingLabelSearchAssigned and routingLabelDetail to view your company’s toll-free routing options
     *
     * @return self
     */
    public function setRoutingLabel($routing_label)
    {
        $this->container['routing_label'] = $routing_label;

        return $this;
    }

    /**
     * Gets cic_list
     *
     * @return \OpenAPI\Client\Model\TfMoveTfMoveTnListCicList|null
     */
    public function getCicList()
    {
        return $this->container['cic_list'];
    }

    /**
     * Sets cic_list
     *
     * @param \OpenAPI\Client\Model\TfMoveTfMoveTnListCicList|null $cic_list cic_list
     *
     * @return self
     */
    public function setCicList($cic_list)
    {
        $this->container['cic_list'] = $cic_list;

        return $this;
    }

    /**
     * Gets dnis
     *
     * @return string|null
     */
    public function getDnis()
    {
        return $this->container['dnis'];
    }

    /**
     * Sets dnis
     *
     * @param string|null $dnis Dnis value for toll free numer
     *
     * @return self
     */
    public function setDnis($dnis)
    {
        $this->container['dnis'] = $dnis;

        return $this;
    }

    /**
     * Gets dnis_operation
     *
     * @return string|null
     */
    public function getDnisOperation()
    {
        return $this->container['dnis_operation'];
    }

    /**
     * Sets dnis_operation
     *
     * @param string|null $dnis_operation Options to preserve, remove. Default is remove.
     *
     * @return self
     */
    public function setDnisOperation($dnis_operation)
    {
        $this->container['dnis_operation'] = $dnis_operation;

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
     * @param string|null $tn_note Optional to note value to be stored on the number.
     *
     * @return self
     */
    public function setTnNote($tn_note)
    {
        $this->container['tn_note'] = $tn_note;

        return $this;
    }

    /**
     * Gets tn_note_operation
     *
     * @return string|null
     */
    public function getTnNoteOperation()
    {
        return $this->container['tn_note_operation'];
    }

    /**
     * Sets tn_note_operation
     *
     * @param string|null $tn_note_operation Options to preserve, remove. Default is remove.
     *
     * @return self
     */
    public function setTnNoteOperation($tn_note_operation)
    {
        $this->container['tn_note_operation'] = $tn_note_operation;

        return $this;
    }

    /**
     * Gets forward_to
     *
     * @return string|null
     */
    public function getForwardTo()
    {
        return $this->container['forward_to'];
    }

    /**
     * Sets forward_to
     *
     * @param string|null $forward_to forward To number for toll free number
     *
     * @return self
     */
    public function setForwardTo($forward_to)
    {
        $this->container['forward_to'] = $forward_to;

        return $this;
    }

    /**
     * Gets forward_to_operation
     *
     * @return string|null
     */
    public function getForwardToOperation()
    {
        return $this->container['forward_to_operation'];
    }

    /**
     * Sets forward_to_operation
     *
     * @param string|null $forward_to_operation Options to preserve, remove. Default is remove.
     *
     * @return self
     */
    public function setForwardToOperation($forward_to_operation)
    {
        $this->container['forward_to_operation'] = $forward_to_operation;

        return $this;
    }

    /**
     * Gets tn_feature
     *
     * @return \OpenAPI\Client\Model\TfMoveTfMoveTnListTnFeature|null
     */
    public function getTnFeature()
    {
        return $this->container['tn_feature'];
    }

    /**
     * Sets tn_feature
     *
     * @param \OpenAPI\Client\Model\TfMoveTfMoveTnListTnFeature|null $tn_feature tn_feature
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


