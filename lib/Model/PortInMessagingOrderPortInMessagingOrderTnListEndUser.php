<?php
/**
 * PortInMessagingOrderPortInMessagingOrderTnListEndUser
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
 * PortInMessagingOrderPortInMessagingOrderTnListEndUser Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PortInMessagingOrderPortInMessagingOrderTnListEndUser implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_portInMessagingOrder_portInMessagingOrder_tnList_endUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'street_num' => 'string',
        'street_pre_dir' => 'string',
        'street_name' => 'string',
        'street_type' => 'string',
        'street_post_dir' => 'string',
        'location_type1' => 'string',
        'location_value1' => 'string',
        'location_type2' => 'string',
        'location_value2' => 'string',
        'location_type3' => 'string',
        'location_value3' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'type_of_service' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'street_num' => null,
        'street_pre_dir' => null,
        'street_name' => null,
        'street_type' => null,
        'street_post_dir' => null,
        'location_type1' => null,
        'location_value1' => null,
        'location_type2' => null,
        'location_value2' => null,
        'location_type3' => null,
        'location_value3' => null,
        'city' => null,
        'state' => null,
        'postal_code' => null,
        'type_of_service' => null
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
        'name' => 'name',
        'street_num' => 'streetNum',
        'street_pre_dir' => 'streetPreDir',
        'street_name' => 'streetName',
        'street_type' => 'streetType',
        'street_post_dir' => 'streetPostDir',
        'location_type1' => 'locationType1',
        'location_value1' => 'locationValue1',
        'location_type2' => 'locationType2',
        'location_value2' => 'locationValue2',
        'location_type3' => 'locationType3',
        'location_value3' => 'locationValue3',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postalCode',
        'type_of_service' => 'typeOfService'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'street_num' => 'setStreetNum',
        'street_pre_dir' => 'setStreetPreDir',
        'street_name' => 'setStreetName',
        'street_type' => 'setStreetType',
        'street_post_dir' => 'setStreetPostDir',
        'location_type1' => 'setLocationType1',
        'location_value1' => 'setLocationValue1',
        'location_type2' => 'setLocationType2',
        'location_value2' => 'setLocationValue2',
        'location_type3' => 'setLocationType3',
        'location_value3' => 'setLocationValue3',
        'city' => 'setCity',
        'state' => 'setState',
        'postal_code' => 'setPostalCode',
        'type_of_service' => 'setTypeOfService'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'street_num' => 'getStreetNum',
        'street_pre_dir' => 'getStreetPreDir',
        'street_name' => 'getStreetName',
        'street_type' => 'getStreetType',
        'street_post_dir' => 'getStreetPostDir',
        'location_type1' => 'getLocationType1',
        'location_value1' => 'getLocationValue1',
        'location_type2' => 'getLocationType2',
        'location_value2' => 'getLocationValue2',
        'location_type3' => 'getLocationType3',
        'location_value3' => 'getLocationValue3',
        'city' => 'getCity',
        'state' => 'getState',
        'postal_code' => 'getPostalCode',
        'type_of_service' => 'getTypeOfService'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['street_num'] = $data['street_num'] ?? null;
        $this->container['street_pre_dir'] = $data['street_pre_dir'] ?? null;
        $this->container['street_name'] = $data['street_name'] ?? null;
        $this->container['street_type'] = $data['street_type'] ?? null;
        $this->container['street_post_dir'] = $data['street_post_dir'] ?? null;
        $this->container['location_type1'] = $data['location_type1'] ?? null;
        $this->container['location_value1'] = $data['location_value1'] ?? null;
        $this->container['location_type2'] = $data['location_type2'] ?? null;
        $this->container['location_value2'] = $data['location_value2'] ?? null;
        $this->container['location_type3'] = $data['location_type3'] ?? null;
        $this->container['location_value3'] = $data['location_value3'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['type_of_service'] = $data['type_of_service'] ?? null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets street_num
     *
     * @return string|null
     */
    public function getStreetNum()
    {
        return $this->container['street_num'];
    }

    /**
     * Sets street_num
     *
     * @param string|null $street_num street_num
     *
     * @return self
     */
    public function setStreetNum($street_num)
    {
        $this->container['street_num'] = $street_num;

        return $this;
    }

    /**
     * Gets street_pre_dir
     *
     * @return string|null
     */
    public function getStreetPreDir()
    {
        return $this->container['street_pre_dir'];
    }

    /**
     * Sets street_pre_dir
     *
     * @param string|null $street_pre_dir street_pre_dir
     *
     * @return self
     */
    public function setStreetPreDir($street_pre_dir)
    {
        $this->container['street_pre_dir'] = $street_pre_dir;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string|null $street_name street_name
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets street_type
     *
     * @return string|null
     */
    public function getStreetType()
    {
        return $this->container['street_type'];
    }

    /**
     * Sets street_type
     *
     * @param string|null $street_type street_type
     *
     * @return self
     */
    public function setStreetType($street_type)
    {
        $this->container['street_type'] = $street_type;

        return $this;
    }

    /**
     * Gets street_post_dir
     *
     * @return string|null
     */
    public function getStreetPostDir()
    {
        return $this->container['street_post_dir'];
    }

    /**
     * Sets street_post_dir
     *
     * @param string|null $street_post_dir street_post_dir
     *
     * @return self
     */
    public function setStreetPostDir($street_post_dir)
    {
        $this->container['street_post_dir'] = $street_post_dir;

        return $this;
    }

    /**
     * Gets location_type1
     *
     * @return string|null
     */
    public function getLocationType1()
    {
        return $this->container['location_type1'];
    }

    /**
     * Sets location_type1
     *
     * @param string|null $location_type1 location_type1
     *
     * @return self
     */
    public function setLocationType1($location_type1)
    {
        $this->container['location_type1'] = $location_type1;

        return $this;
    }

    /**
     * Gets location_value1
     *
     * @return string|null
     */
    public function getLocationValue1()
    {
        return $this->container['location_value1'];
    }

    /**
     * Sets location_value1
     *
     * @param string|null $location_value1 location_value1
     *
     * @return self
     */
    public function setLocationValue1($location_value1)
    {
        $this->container['location_value1'] = $location_value1;

        return $this;
    }

    /**
     * Gets location_type2
     *
     * @return string|null
     */
    public function getLocationType2()
    {
        return $this->container['location_type2'];
    }

    /**
     * Sets location_type2
     *
     * @param string|null $location_type2 location_type2
     *
     * @return self
     */
    public function setLocationType2($location_type2)
    {
        $this->container['location_type2'] = $location_type2;

        return $this;
    }

    /**
     * Gets location_value2
     *
     * @return string|null
     */
    public function getLocationValue2()
    {
        return $this->container['location_value2'];
    }

    /**
     * Sets location_value2
     *
     * @param string|null $location_value2 location_value2
     *
     * @return self
     */
    public function setLocationValue2($location_value2)
    {
        $this->container['location_value2'] = $location_value2;

        return $this;
    }

    /**
     * Gets location_type3
     *
     * @return string|null
     */
    public function getLocationType3()
    {
        return $this->container['location_type3'];
    }

    /**
     * Sets location_type3
     *
     * @param string|null $location_type3 location_type3
     *
     * @return self
     */
    public function setLocationType3($location_type3)
    {
        $this->container['location_type3'] = $location_type3;

        return $this;
    }

    /**
     * Gets location_value3
     *
     * @return string|null
     */
    public function getLocationValue3()
    {
        return $this->container['location_value3'];
    }

    /**
     * Sets location_value3
     *
     * @param string|null $location_value3 location_value3
     *
     * @return self
     */
    public function setLocationValue3($location_value3)
    {
        $this->container['location_value3'] = $location_value3;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets type_of_service
     *
     * @return string|null
     */
    public function getTypeOfService()
    {
        return $this->container['type_of_service'];
    }

    /**
     * Sets type_of_service
     *
     * @param string|null $type_of_service type_of_service
     *
     * @return self
     */
    public function setTypeOfService($type_of_service)
    {
        $this->container['type_of_service'] = $type_of_service;

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


