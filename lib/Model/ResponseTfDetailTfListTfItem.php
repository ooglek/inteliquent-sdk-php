<?php
/**
 * ResponseTfDetailTfListTfItem
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
 * ResponseTfDetailTfListTfItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ResponseTfDetailTfListTfItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResponseTfDetail_tfList_tfItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tn' => 'string',
        'tn_status_ref' => 'string',
        'tn_status_name' => 'string',
        'routing_label' => 'string',
        'resp_org_name' => 'string',
        'resp_org_prefix' => 'string',
        'cic' => 'string',
        'cic_company_name' => 'string',
        'activate_display_name' => 'string',
        'activate_date' => 'string',
        'tn_note' => 'string',
        'dno' => 'string',
        'tn_feature' => '\OpenAPI\Client\Model\ResponseTfDetailTfListTnFeature',
        'dnis' => 'string',
        'billing_tn' => 'string',
        'term_tn' => 'string'
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
        'tn_status_ref' => null,
        'tn_status_name' => null,
        'routing_label' => null,
        'resp_org_name' => null,
        'resp_org_prefix' => null,
        'cic' => null,
        'cic_company_name' => null,
        'activate_display_name' => null,
        'activate_date' => null,
        'tn_note' => null,
        'dno' => null,
        'tn_feature' => null,
        'dnis' => null,
        'billing_tn' => null,
        'term_tn' => null
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
        'tn_status_ref' => 'tnStatusRef',
        'tn_status_name' => 'tnStatusName',
        'routing_label' => 'routingLabel',
        'resp_org_name' => 'respOrgName',
        'resp_org_prefix' => 'respOrgPrefix',
        'cic' => 'cic',
        'cic_company_name' => 'cicCompanyName',
        'activate_display_name' => 'activateDisplayName',
        'activate_date' => 'activateDate',
        'tn_note' => 'tnNote',
        'dno' => 'dno',
        'tn_feature' => 'tnFeature',
        'dnis' => 'dnis',
        'billing_tn' => 'billingTn',
        'term_tn' => 'termTn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tn' => 'setTn',
        'tn_status_ref' => 'setTnStatusRef',
        'tn_status_name' => 'setTnStatusName',
        'routing_label' => 'setRoutingLabel',
        'resp_org_name' => 'setRespOrgName',
        'resp_org_prefix' => 'setRespOrgPrefix',
        'cic' => 'setCic',
        'cic_company_name' => 'setCicCompanyName',
        'activate_display_name' => 'setActivateDisplayName',
        'activate_date' => 'setActivateDate',
        'tn_note' => 'setTnNote',
        'dno' => 'setDno',
        'tn_feature' => 'setTnFeature',
        'dnis' => 'setDnis',
        'billing_tn' => 'setBillingTn',
        'term_tn' => 'setTermTn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tn' => 'getTn',
        'tn_status_ref' => 'getTnStatusRef',
        'tn_status_name' => 'getTnStatusName',
        'routing_label' => 'getRoutingLabel',
        'resp_org_name' => 'getRespOrgName',
        'resp_org_prefix' => 'getRespOrgPrefix',
        'cic' => 'getCic',
        'cic_company_name' => 'getCicCompanyName',
        'activate_display_name' => 'getActivateDisplayName',
        'activate_date' => 'getActivateDate',
        'tn_note' => 'getTnNote',
        'dno' => 'getDno',
        'tn_feature' => 'getTnFeature',
        'dnis' => 'getDnis',
        'billing_tn' => 'getBillingTn',
        'term_tn' => 'getTermTn'
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
        $this->container['tn_status_ref'] = $data['tn_status_ref'] ?? null;
        $this->container['tn_status_name'] = $data['tn_status_name'] ?? null;
        $this->container['routing_label'] = $data['routing_label'] ?? null;
        $this->container['resp_org_name'] = $data['resp_org_name'] ?? null;
        $this->container['resp_org_prefix'] = $data['resp_org_prefix'] ?? null;
        $this->container['cic'] = $data['cic'] ?? null;
        $this->container['cic_company_name'] = $data['cic_company_name'] ?? null;
        $this->container['activate_display_name'] = $data['activate_display_name'] ?? null;
        $this->container['activate_date'] = $data['activate_date'] ?? null;
        $this->container['tn_note'] = $data['tn_note'] ?? null;
        $this->container['dno'] = $data['dno'] ?? null;
        $this->container['tn_feature'] = $data['tn_feature'] ?? null;
        $this->container['dnis'] = $data['dnis'] ?? null;
        $this->container['billing_tn'] = $data['billing_tn'] ?? null;
        $this->container['term_tn'] = $data['term_tn'] ?? null;
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
     * Gets tn
     *
     * @return string|null
     */
    public function getTn()
    {
        return $this->container['tn'];
    }

    /**
     * Sets tn
     *
     * @param string|null $tn telephone number requested
     *
     * @return self
     */
    public function setTn($tn)
    {
        $this->container['tn'] = $tn;

        return $this;
    }

    /**
     * Gets tn_status_ref
     *
     * @return string|null
     */
    public function getTnStatusRef()
    {
        return $this->container['tn_status_ref'];
    }

    /**
     * Sets tn_status_ref
     *
     * @param string|null $tn_status_ref tn_status_ref
     *
     * @return self
     */
    public function setTnStatusRef($tn_status_ref)
    {
        $this->container['tn_status_ref'] = $tn_status_ref;

        return $this;
    }

    /**
     * Gets tn_status_name
     *
     * @return string|null
     */
    public function getTnStatusName()
    {
        return $this->container['tn_status_name'];
    }

    /**
     * Sets tn_status_name
     *
     * @param string|null $tn_status_name tn_status_name
     *
     * @return self
     */
    public function setTnStatusName($tn_status_name)
    {
        $this->container['tn_status_name'] = $tn_status_name;

        return $this;
    }

    /**
     * Gets routing_label
     *
     * @return string|null
     */
    public function getRoutingLabel()
    {
        return $this->container['routing_label'];
    }

    /**
     * Sets routing_label
     *
     * @param string|null $routing_label routing_label
     *
     * @return self
     */
    public function setRoutingLabel($routing_label)
    {
        $this->container['routing_label'] = $routing_label;

        return $this;
    }

    /**
     * Gets resp_org_name
     *
     * @return string|null
     */
    public function getRespOrgName()
    {
        return $this->container['resp_org_name'];
    }

    /**
     * Sets resp_org_name
     *
     * @param string|null $resp_org_name resp_org_name
     *
     * @return self
     */
    public function setRespOrgName($resp_org_name)
    {
        $this->container['resp_org_name'] = $resp_org_name;

        return $this;
    }

    /**
     * Gets resp_org_prefix
     *
     * @return string|null
     */
    public function getRespOrgPrefix()
    {
        return $this->container['resp_org_prefix'];
    }

    /**
     * Sets resp_org_prefix
     *
     * @param string|null $resp_org_prefix resp_org_prefix
     *
     * @return self
     */
    public function setRespOrgPrefix($resp_org_prefix)
    {
        $this->container['resp_org_prefix'] = $resp_org_prefix;

        return $this;
    }

    /**
     * Gets cic
     *
     * @return string|null
     */
    public function getCic()
    {
        return $this->container['cic'];
    }

    /**
     * Sets cic
     *
     * @param string|null $cic cic
     *
     * @return self
     */
    public function setCic($cic)
    {
        $this->container['cic'] = $cic;

        return $this;
    }

    /**
     * Gets cic_company_name
     *
     * @return string|null
     */
    public function getCicCompanyName()
    {
        return $this->container['cic_company_name'];
    }

    /**
     * Sets cic_company_name
     *
     * @param string|null $cic_company_name cic_company_name
     *
     * @return self
     */
    public function setCicCompanyName($cic_company_name)
    {
        $this->container['cic_company_name'] = $cic_company_name;

        return $this;
    }

    /**
     * Gets activate_display_name
     *
     * @return string|null
     */
    public function getActivateDisplayName()
    {
        return $this->container['activate_display_name'];
    }

    /**
     * Sets activate_display_name
     *
     * @param string|null $activate_display_name activate_display_name
     *
     * @return self
     */
    public function setActivateDisplayName($activate_display_name)
    {
        $this->container['activate_display_name'] = $activate_display_name;

        return $this;
    }

    /**
     * Gets activate_date
     *
     * @return string|null
     */
    public function getActivateDate()
    {
        return $this->container['activate_date'];
    }

    /**
     * Sets activate_date
     *
     * @param string|null $activate_date activate_date
     *
     * @return self
     */
    public function setActivateDate($activate_date)
    {
        $this->container['activate_date'] = $activate_date;

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
     * @param string|null $dno dno
     *
     * @return self
     */
    public function setDno($dno)
    {
        $this->container['dno'] = $dno;

        return $this;
    }

    /**
     * Gets tn_feature
     *
     * @return \OpenAPI\Client\Model\ResponseTfDetailTfListTnFeature|null
     */
    public function getTnFeature()
    {
        return $this->container['tn_feature'];
    }

    /**
     * Sets tn_feature
     *
     * @param \OpenAPI\Client\Model\ResponseTfDetailTfListTnFeature|null $tn_feature tn_feature
     *
     * @return self
     */
    public function setTnFeature($tn_feature)
    {
        $this->container['tn_feature'] = $tn_feature;

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
     * Gets term_tn
     *
     * @return string|null
     */
    public function getTermTn()
    {
        return $this->container['term_tn'];
    }

    /**
     * Sets term_tn
     *
     * @param string|null $term_tn term_tn
     *
     * @return self
     */
    public function setTermTn($term_tn)
    {
        $this->container['term_tn'] = $term_tn;

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


