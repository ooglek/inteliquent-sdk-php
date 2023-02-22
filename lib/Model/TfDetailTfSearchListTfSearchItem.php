<?php
/**
 * TfDetailTfSearchListTfSearchItem
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
 * TfDetailTfSearchListTfSearchItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TfDetailTfSearchListTfSearchItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_tfDetail_tfSearchList_tfSearchItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tn_mask' => 'string',
        'type_tf_status_reference' => 'string',
        'rounting_label' => 'string',
        'activate_start_date_range' => 'string',
        'activate_end_date_range' => 'string',
        'activate_user' => 'string',
        'tn_note' => 'string',
        'cnam_dip' => 'string',
        'cnam' => 'string',
        'messaging' => 'string',
        'calling_name_contains' => 'string',
        'calling_name' => 'string',
        'e911_contains' => 'string',
        'e911' => 'string',
        'message_class' => 'string',
        'message_type' => 'string',
        'net_number_id' => 'string',
        'dnis' => 'string',
        'billing_tn' => 'string',
        'dno' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tn_mask' => null,
        'type_tf_status_reference' => null,
        'rounting_label' => null,
        'activate_start_date_range' => null,
        'activate_end_date_range' => null,
        'activate_user' => null,
        'tn_note' => null,
        'cnam_dip' => null,
        'cnam' => null,
        'messaging' => null,
        'calling_name_contains' => null,
        'calling_name' => null,
        'e911_contains' => null,
        'e911' => null,
        'message_class' => null,
        'message_type' => null,
        'net_number_id' => null,
        'dnis' => null,
        'billing_tn' => null,
        'dno' => null
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
        'tn_mask' => 'tnMask',
        'type_tf_status_reference' => 'typeTfStatusReference',
        'rounting_label' => 'rountingLabel',
        'activate_start_date_range' => 'activateStartDateRange',
        'activate_end_date_range' => 'activateEndDateRange',
        'activate_user' => 'activateUser',
        'tn_note' => 'tnNote',
        'cnam_dip' => 'cnamDip',
        'cnam' => 'cnam',
        'messaging' => 'messaging',
        'calling_name_contains' => 'callingNameContains',
        'calling_name' => 'callingName',
        'e911_contains' => 'e911Contains',
        'e911' => 'e911',
        'message_class' => 'messageClass',
        'message_type' => 'messageType',
        'net_number_id' => 'netNumberId',
        'dnis' => 'dnis',
        'billing_tn' => 'billingTn',
        'dno' => 'dno'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tn_mask' => 'setTnMask',
        'type_tf_status_reference' => 'setTypeTfStatusReference',
        'rounting_label' => 'setRountingLabel',
        'activate_start_date_range' => 'setActivateStartDateRange',
        'activate_end_date_range' => 'setActivateEndDateRange',
        'activate_user' => 'setActivateUser',
        'tn_note' => 'setTnNote',
        'cnam_dip' => 'setCnamDip',
        'cnam' => 'setCnam',
        'messaging' => 'setMessaging',
        'calling_name_contains' => 'setCallingNameContains',
        'calling_name' => 'setCallingName',
        'e911_contains' => 'setE911Contains',
        'e911' => 'setE911',
        'message_class' => 'setMessageClass',
        'message_type' => 'setMessageType',
        'net_number_id' => 'setNetNumberId',
        'dnis' => 'setDnis',
        'billing_tn' => 'setBillingTn',
        'dno' => 'setDno'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tn_mask' => 'getTnMask',
        'type_tf_status_reference' => 'getTypeTfStatusReference',
        'rounting_label' => 'getRountingLabel',
        'activate_start_date_range' => 'getActivateStartDateRange',
        'activate_end_date_range' => 'getActivateEndDateRange',
        'activate_user' => 'getActivateUser',
        'tn_note' => 'getTnNote',
        'cnam_dip' => 'getCnamDip',
        'cnam' => 'getCnam',
        'messaging' => 'getMessaging',
        'calling_name_contains' => 'getCallingNameContains',
        'calling_name' => 'getCallingName',
        'e911_contains' => 'getE911Contains',
        'e911' => 'getE911',
        'message_class' => 'getMessageClass',
        'message_type' => 'getMessageType',
        'net_number_id' => 'getNetNumberId',
        'dnis' => 'getDnis',
        'billing_tn' => 'getBillingTn',
        'dno' => 'getDno'
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

    const E911_Y = 'Y';
    const E911_N = 'N';
    const MESSAGE_CLASS_P2_P = 'P2P';
    const MESSAGE_CLASS_A2_PLC = 'A2PLC';
    const MESSAGE_CLASS_A2_P8_XX = 'A2P8XX';
    const MESSAGE_TYPE_SMS = 'SMS';
    const MESSAGE_TYPE_MMS = 'MMS';
    const MESSAGE_TYPE_SMSMMS = 'SMSMMS';
    const MESSAGE_TYPE_SMS_ALT = 'SMS_ALT';
    const MESSAGE_TYPE_MMS_ALT = 'MMS_ALT';
    const MESSAGE_TYPE_SMSMMS_ALT = 'SMSMMS_ALT';
    const DNO_Y = 'Y';
    const DNO_N = 'N';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getE911AllowableValues()
    {
        return [
            self::E911_Y,
            self::E911_N,
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
    public function getDnoAllowableValues()
    {
        return [
            self::DNO_Y,
            self::DNO_N,
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
        $this->container['tn_mask'] = $data['tn_mask'] ?? null;
        $this->container['type_tf_status_reference'] = $data['type_tf_status_reference'] ?? null;
        $this->container['rounting_label'] = $data['rounting_label'] ?? null;
        $this->container['activate_start_date_range'] = $data['activate_start_date_range'] ?? null;
        $this->container['activate_end_date_range'] = $data['activate_end_date_range'] ?? null;
        $this->container['activate_user'] = $data['activate_user'] ?? null;
        $this->container['tn_note'] = $data['tn_note'] ?? null;
        $this->container['cnam_dip'] = $data['cnam_dip'] ?? null;
        $this->container['cnam'] = $data['cnam'] ?? null;
        $this->container['messaging'] = $data['messaging'] ?? null;
        $this->container['calling_name_contains'] = $data['calling_name_contains'] ?? null;
        $this->container['calling_name'] = $data['calling_name'] ?? null;
        $this->container['e911_contains'] = $data['e911_contains'] ?? null;
        $this->container['e911'] = $data['e911'] ?? null;
        $this->container['message_class'] = $data['message_class'] ?? null;
        $this->container['message_type'] = $data['message_type'] ?? null;
        $this->container['net_number_id'] = $data['net_number_id'] ?? null;
        $this->container['dnis'] = $data['dnis'] ?? null;
        $this->container['billing_tn'] = $data['billing_tn'] ?? null;
        $this->container['dno'] = $data['dno'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getE911AllowableValues();
        if (!is_null($this->container['e911']) && !in_array($this->container['e911'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'e911', must be one of '%s'",
                $this->container['e911'],
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

        $allowedValues = $this->getDnoAllowableValues();
        if (!is_null($this->container['dno']) && !in_array($this->container['dno'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dno', must be one of '%s'",
                $this->container['dno'],
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
     * Gets tn_mask
     *
     * @return string|null
     */
    public function getTnMask()
    {
        return $this->container['tn_mask'];
    }

    /**
     * Sets tn_mask
     *
     * @param string|null $tn_mask Ten-digit toll free number; enter x as wildcard (e.g. 877xxxxxxx, xxx4xxxxx1, xxxxxxxxxx)
     *
     * @return self
     */
    public function setTnMask($tn_mask)
    {
        $this->container['tn_mask'] = $tn_mask;

        return $this;
    }

    /**
     * Gets type_tf_status_reference
     *
     * @return string|null
     */
    public function getTypeTfStatusReference()
    {
        return $this->container['type_tf_status_reference'];
    }

    /**
     * Sets type_tf_status_reference
     *
     * @param string|null $type_tf_status_reference Toll free number status
     *
     * @return self
     */
    public function setTypeTfStatusReference($type_tf_status_reference)
    {
        $this->container['type_tf_status_reference'] = $type_tf_status_reference;

        return $this;
    }

    /**
     * Gets rounting_label
     *
     * @return string|null
     */
    public function getRountingLabel()
    {
        return $this->container['rounting_label'];
    }

    /**
     * Sets rounting_label
     *
     * @param string|null $rounting_label Assigned toll free routing option for the number
     *
     * @return self
     */
    public function setRountingLabel($rounting_label)
    {
        $this->container['rounting_label'] = $rounting_label;

        return $this;
    }

    /**
     * Gets activate_start_date_range
     *
     * @return string|null
     */
    public function getActivateStartDateRange()
    {
        return $this->container['activate_start_date_range'];
    }

    /**
     * Sets activate_start_date_range
     *
     * @param string|null $activate_start_date_range Start date range for number activation to current trunk group; use format 2017-03-29T14:00:46.000Z
     *
     * @return self
     */
    public function setActivateStartDateRange($activate_start_date_range)
    {
        $this->container['activate_start_date_range'] = $activate_start_date_range;

        return $this;
    }

    /**
     * Gets activate_end_date_range
     *
     * @return string|null
     */
    public function getActivateEndDateRange()
    {
        return $this->container['activate_end_date_range'];
    }

    /**
     * Sets activate_end_date_range
     *
     * @param string|null $activate_end_date_range End date range for number activation to current trunk group; use format 2017-03-29T14:00:46.000Z
     *
     * @return self
     */
    public function setActivateEndDateRange($activate_end_date_range)
    {
        $this->container['activate_end_date_range'] = $activate_end_date_range;

        return $this;
    }

    /**
     * Gets activate_user
     *
     * @return string|null
     */
    public function getActivateUser()
    {
        return $this->container['activate_user'];
    }

    /**
     * Sets activate_user
     *
     * @param string|null $activate_user Search for specific string in activation user name
     *
     * @return self
     */
    public function setActivateUser($activate_user)
    {
        $this->container['activate_user'] = $activate_user;

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
     * @param string|null $tn_note Search for specific string contained in toll free number note
     *
     * @return self
     */
    public function setTnNote($tn_note)
    {
        $this->container['tn_note'] = $tn_note;

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
     * Gets cnam
     *
     * @return string|null
     */
    public function getCnam()
    {
        return $this->container['cnam'];
    }

    /**
     * Sets cnam
     *
     * @param string|null $cnam cnam
     *
     * @return self
     */
    public function setCnam($cnam)
    {
        $this->container['cnam'] = $cnam;

        return $this;
    }

    /**
     * Gets messaging
     *
     * @return string|null
     */
    public function getMessaging()
    {
        return $this->container['messaging'];
    }

    /**
     * Sets messaging
     *
     * @param string|null $messaging Text messaging services for the telephone number
     *
     * @return self
     */
    public function setMessaging($messaging)
    {
        $this->container['messaging'] = $messaging;

        return $this;
    }

    /**
     * Gets calling_name_contains
     *
     * @return string|null
     */
    public function getCallingNameContains()
    {
        return $this->container['calling_name_contains'];
    }

    /**
     * Sets calling_name_contains
     *
     * @param string|null $calling_name_contains calling_name_contains
     *
     * @return self
     */
    public function setCallingNameContains($calling_name_contains)
    {
        $this->container['calling_name_contains'] = $calling_name_contains;

        return $this;
    }

    /**
     * Gets calling_name
     *
     * @return string|null
     */
    public function getCallingName()
    {
        return $this->container['calling_name'];
    }

    /**
     * Sets calling_name
     *
     * @param string|null $calling_name Caller display name for outbound / LIDB storage; must be 15 characters or fewer
     *
     * @return self
     */
    public function setCallingName($calling_name)
    {
        $this->container['calling_name'] = $calling_name;

        return $this;
    }

    /**
     * Gets e911_contains
     *
     * @return string|null
     */
    public function getE911Contains()
    {
        return $this->container['e911_contains'];
    }

    /**
     * Sets e911_contains
     *
     * @param string|null $e911_contains Search for specific string contained in any E911 field
     *
     * @return self
     */
    public function setE911Contains($e911_contains)
    {
        $this->container['e911_contains'] = $e911_contains;

        return $this;
    }

    /**
     * Gets e911
     *
     * @return string|null
     */
    public function getE911()
    {
        return $this->container['e911'];
    }

    /**
     * Sets e911
     *
     * @param string|null $e911 Search for numbers with or without E911 information stored; acceptable values are Y and N
     *
     * @return self
     */
    public function setE911($e911)
    {
        $allowedValues = $this->getE911AllowableValues();
        if (!is_null($e911) && !in_array($e911, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'e911', must be one of '%s'",
                    $e911,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['e911'] = $e911;

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
     * Gets net_number_id
     *
     * @return string|null
     */
    public function getNetNumberId()
    {
        return $this->container['net_number_id'];
    }

    /**
     * Sets net_number_id
     *
     * @param string|null $net_number_id net_number_id
     *
     * @return self
     */
    public function setNetNumberId($net_number_id)
    {
        $this->container['net_number_id'] = $net_number_id;

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
     * @param string|null $dnis dnis
     *
     * @return self
     */
    public function setDnis($dnis)
    {
        $this->container['dnis'] = $dnis;

        return $this;
    }

    /**
     * Gets billing_tn
     *
     * @return string|null
     */
    public function getBillingTn()
    {
        return $this->container['billing_tn'];
    }

    /**
     * Sets billing_tn
     *
     * @param string|null $billing_tn billing_tn
     *
     * @return self
     */
    public function setBillingTn($billing_tn)
    {
        $this->container['billing_tn'] = $billing_tn;

        return $this;
    }

    /**
     * Gets dno
     *
     * @return string|null
     */
    public function getDno()
    {
        return $this->container['dno'];
    }

    /**
     * Sets dno
     *
     * @param string|null $dno Search for tns that have DNO set to Y or N.Acceptable values are Y and N
     *
     * @return self
     */
    public function setDno($dno)
    {
        $allowedValues = $this->getDnoAllowableValues();
        if (!is_null($dno) && !in_array($dno, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dno', must be one of '%s'",
                    $dno,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dno'] = $dno;

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


