<?php
/**
 * InlineObject113
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
 * InlineObject113 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject113 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_113';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'private_key' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'direction' => 'string',
        'message_class' => 'string',
        'message_type' => 'string',
        'disposition' => 'string',
        'region' => 'string',
        'country' => 'string',
        'operators' => 'string[]',
        'source_tn' => 'string',
        'destination_tn' => 'string'
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
        'start_date' => 'date',
        'end_date' => 'date',
        'direction' => null,
        'message_class' => null,
        'message_type' => null,
        'disposition' => null,
        'region' => null,
        'country' => null,
        'operators' => null,
        'source_tn' => null,
        'destination_tn' => null
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
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'direction' => 'direction',
        'message_class' => 'messageClass',
        'message_type' => 'messageType',
        'disposition' => 'disposition',
        'region' => 'region',
        'country' => 'country',
        'operators' => 'operators',
        'source_tn' => 'sourceTn',
        'destination_tn' => 'destinationTn;'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'private_key' => 'setPrivateKey',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'direction' => 'setDirection',
        'message_class' => 'setMessageClass',
        'message_type' => 'setMessageType',
        'disposition' => 'setDisposition',
        'region' => 'setRegion',
        'country' => 'setCountry',
        'operators' => 'setOperators',
        'source_tn' => 'setSourceTn',
        'destination_tn' => 'setDestinationTn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'private_key' => 'getPrivateKey',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'direction' => 'getDirection',
        'message_class' => 'getMessageClass',
        'message_type' => 'getMessageType',
        'disposition' => 'getDisposition',
        'region' => 'getRegion',
        'country' => 'getCountry',
        'operators' => 'getOperators',
        'source_tn' => 'getSourceTn',
        'destination_tn' => 'getDestinationTn'
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

    const DIRECTION_INBOUND = 'Inbound';
    const DIRECTION_OUTBOUND = 'Outbound';
    const MESSAGE_CLASS_P2_P = 'P2P';
    const MESSAGE_CLASS_A2_PLC = 'A2PLC';
    const MESSAGE_CLASS_A2_P8_XX = 'A2P8XX';
    const MESSAGE_TYPE_SMS = 'SMS';
    const MESSAGE_TYPE_MMS = 'MMS';
    const MESSAGE_TYPE_SMSMMS = 'SMSMMS';
    const MESSAGE_TYPE_SMS_ALT = 'SMS_ALT';
    const MESSAGE_TYPE_MMS_ALT = 'MMS_ALT';
    const MESSAGE_TYPE_SMSMMS_ALT = 'SMSMMS_ALT';
    const REGION_AFRICA_AND_MIDDLE_EAST = 'Africa and Middle East';
    const REGION_ASIA_AND_PACIFIC = 'Asia and Pacific';
    const REGION_EUROPE = 'Europe';
    const REGION_GLOBAL___SATELLITE = 'Global / Satellite';
    const REGION_LATIN = 'Latin';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INBOUND,
            self::DIRECTION_OUTBOUND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessageClassAllowableValues()
    {
        return [
            self::MESSAGE_CLASS_P2_P,
            self::MESSAGE_CLASS_A2_PLC,
            self::MESSAGE_CLASS_A2_P8_XX,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessageTypeAllowableValues()
    {
        return [
            self::MESSAGE_TYPE_SMS,
            self::MESSAGE_TYPE_MMS,
            self::MESSAGE_TYPE_SMSMMS,
            self::MESSAGE_TYPE_SMS_ALT,
            self::MESSAGE_TYPE_MMS_ALT,
            self::MESSAGE_TYPE_SMSMMS_ALT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_AFRICA_AND_MIDDLE_EAST,
            self::REGION_ASIA_AND_PACIFIC,
            self::REGION_EUROPE,
            self::REGION_GLOBAL___SATELLITE,
            self::REGION_LATIN,
        ];
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
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['direction'] = $data['direction'] ?? null;
        $this->container['message_class'] = $data['message_class'] ?? null;
        $this->container['message_type'] = $data['message_type'] ?? null;
        $this->container['disposition'] = $data['disposition'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['operators'] = $data['operators'] ?? null;
        $this->container['source_tn'] = $data['source_tn'] ?? null;
        $this->container['destination_tn'] = $data['destination_tn'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'direction', must be one of '%s'",
                $this->container['direction'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMessageClassAllowableValues();
        if (!is_null($this->container['message_class']) && !in_array($this->container['message_class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'message_class', must be one of '%s'",
                $this->container['message_class'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!is_null($this->container['message_type']) && !in_array($this->container['message_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'message_type', must be one of '%s'",
                $this->container['message_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($this->container['region']) && !in_array($this->container['region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'region', must be one of '%s'",
                $this->container['region'],
                implode("', '", $allowedValues)
            );
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
     * @return string|null
     */
    public function getPrivateKey()
    {
        return $this->container['private_key'];
    }

    /**
     * Sets private_key
     *
     * @param string|null $private_key API key required to validate your application
     *
     * @return self
     */
    public function setPrivateKey($private_key)
    {
        $this->container['private_key'] = $private_key;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Start of date range (e.g. 2015-12-15T00:00:00.000Z)
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date End of date range (e.g. 2015-12-15T00:00:00.000Z)
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string|null $direction Message direction; acceptable values are Outbound and Inbound
     *
     * @return self
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($direction) && !in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'direction', must be one of '%s'",
                    $direction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets message_class
     *
     * @return string|null
     */
    public function getMessageClass()
    {
        return $this->container['message_class'];
    }

    /**
     * Sets message_class
     *
     * @param string|null $message_class Acceptable values are P2P, A2PLC, and A2P8XX
     *
     * @return self
     */
    public function setMessageClass($message_class)
    {
        $allowedValues = $this->getMessageClassAllowableValues();
        if (!is_null($message_class) && !in_array($message_class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'message_class', must be one of '%s'",
                    $message_class,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['message_class'] = $message_class;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param string|null $message_type Acceptable values are SMS, MMS, SMSMMS, SMS_ALT, MMS_ALT, and SMSMMS_ALT
     *
     * @return self
     */
    public function setMessageType($message_type)
    {
        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!is_null($message_type) && !in_array($message_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'message_type', must be one of '%s'",
                    $message_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets disposition
     *
     * @return string|null
     */
    public function getDisposition()
    {
        return $this->container['disposition'];
    }

    /**
     * Sets disposition
     *
     * @param string|null $disposition Message disposition; acceptable values are Enroute, Successful, Unknown, Blocked, and Failed
     *
     * @return self
     */
    public function setDisposition($disposition)
    {
        $this->container['disposition'] = $disposition;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region Message region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($region) && !in_array($region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'region', must be one of '%s'",
                    $region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Message origin or destination (based on direction value sent) country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets operators
     *
     * @return string[]|null
     */
    public function getOperators()
    {
        return $this->container['operators'];
    }

    /**
     * Sets operators
     *
     * @param string[]|null $operators Message origin or destination (based on direction value sent) operator(s)
     *
     * @return self
     */
    public function setOperators($operators)
    {
        $this->container['operators'] = $operators;

        return $this;
    }

    /**
     * Gets source_tn
     *
     * @return string|null
     */
    public function getSourceTn()
    {
        return $this->container['source_tn'];
    }

    /**
     * Sets source_tn
     *
     * @param string|null $source_tn 10-digit or E.164 message sent from number (e.g. 3121231234 or 13121231234)
     *
     * @return self
     */
    public function setSourceTn($source_tn)
    {
        $this->container['source_tn'] = $source_tn;

        return $this;
    }

    /**
     * Gets destination_tn
     *
     * @return string|null
     */
    public function getDestinationTn()
    {
        return $this->container['destination_tn'];
    }

    /**
     * Sets destination_tn
     *
     * @param string|null $destination_tn 10-digit or E.164 message sent to number (e.g. 3121231234 or 13121231234)
     *
     * @return self
     */
    public function setDestinationTn($destination_tn)
    {
        $this->container['destination_tn'] = $destination_tn;

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


