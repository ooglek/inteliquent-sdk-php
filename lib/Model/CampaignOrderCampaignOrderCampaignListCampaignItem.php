<?php
/**
 * CampaignOrderCampaignOrderCampaignListCampaignItem
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
 * CampaignOrderCampaignOrderCampaignListCampaignItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CampaignOrderCampaignOrderCampaignListCampaignItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_campaignOrder_campaignOrder_campaignList_campaignItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'msg_brand_id' => 'string',
        'brand_name' => 'string',
        'vertical' => 'string',
        'usecase' => 'string',
        'description' => 'string',
        'embedded_link' => 'string',
        'embedded_phone' => 'string',
        'number_pool' => 'string',
        'age_gated' => 'string',
        'direct_lending' => 'string',
        'subscriber_optin' => 'string',
        'subscriber_optout' => 'string',
        'subscriber_help' => 'string',
        'auto_renewal' => 'string',
        'terms_and_conditions' => 'string',
        'sample1' => 'string',
        'sample2' => 'string',
        'sample3' => 'string',
        'sample4' => 'string',
        'sample5' => 'string',
        'message_flow' => 'string',
        'help_message' => 'string',
        'cancel_campaign' => 'string',
        'opt_out_message' => 'string',
        'opt_in_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'msg_brand_id' => null,
        'brand_name' => null,
        'vertical' => null,
        'usecase' => null,
        'description' => null,
        'embedded_link' => null,
        'embedded_phone' => null,
        'number_pool' => null,
        'age_gated' => null,
        'direct_lending' => null,
        'subscriber_optin' => null,
        'subscriber_optout' => null,
        'subscriber_help' => null,
        'auto_renewal' => null,
        'terms_and_conditions' => null,
        'sample1' => null,
        'sample2' => null,
        'sample3' => null,
        'sample4' => null,
        'sample5' => null,
        'message_flow' => null,
        'help_message' => null,
        'cancel_campaign' => null,
        'opt_out_message' => null,
        'opt_in_message' => null
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
        'msg_brand_id' => 'msgBrandId',
        'brand_name' => 'brandName',
        'vertical' => 'vertical',
        'usecase' => 'usecase',
        'description' => 'description',
        'embedded_link' => 'embeddedLink',
        'embedded_phone' => 'embeddedPhone',
        'number_pool' => 'numberPool',
        'age_gated' => 'ageGated',
        'direct_lending' => 'directLending',
        'subscriber_optin' => 'subscriberOptin',
        'subscriber_optout' => 'subscriberOptout',
        'subscriber_help' => 'subscriberHelp',
        'auto_renewal' => 'autoRenewal',
        'terms_and_conditions' => 'termsAndConditions',
        'sample1' => 'sample1',
        'sample2' => 'sample2',
        'sample3' => 'sample3',
        'sample4' => 'sample4',
        'sample5' => 'sample5',
        'message_flow' => 'messageFlow',
        'help_message' => 'helpMessage',
        'cancel_campaign' => 'cancelCampaign',
        'opt_out_message' => 'optOutMessage',
        'opt_in_message' => 'optInMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'msg_brand_id' => 'setMsgBrandId',
        'brand_name' => 'setBrandName',
        'vertical' => 'setVertical',
        'usecase' => 'setUsecase',
        'description' => 'setDescription',
        'embedded_link' => 'setEmbeddedLink',
        'embedded_phone' => 'setEmbeddedPhone',
        'number_pool' => 'setNumberPool',
        'age_gated' => 'setAgeGated',
        'direct_lending' => 'setDirectLending',
        'subscriber_optin' => 'setSubscriberOptin',
        'subscriber_optout' => 'setSubscriberOptout',
        'subscriber_help' => 'setSubscriberHelp',
        'auto_renewal' => 'setAutoRenewal',
        'terms_and_conditions' => 'setTermsAndConditions',
        'sample1' => 'setSample1',
        'sample2' => 'setSample2',
        'sample3' => 'setSample3',
        'sample4' => 'setSample4',
        'sample5' => 'setSample5',
        'message_flow' => 'setMessageFlow',
        'help_message' => 'setHelpMessage',
        'cancel_campaign' => 'setCancelCampaign',
        'opt_out_message' => 'setOptOutMessage',
        'opt_in_message' => 'setOptInMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'msg_brand_id' => 'getMsgBrandId',
        'brand_name' => 'getBrandName',
        'vertical' => 'getVertical',
        'usecase' => 'getUsecase',
        'description' => 'getDescription',
        'embedded_link' => 'getEmbeddedLink',
        'embedded_phone' => 'getEmbeddedPhone',
        'number_pool' => 'getNumberPool',
        'age_gated' => 'getAgeGated',
        'direct_lending' => 'getDirectLending',
        'subscriber_optin' => 'getSubscriberOptin',
        'subscriber_optout' => 'getSubscriberOptout',
        'subscriber_help' => 'getSubscriberHelp',
        'auto_renewal' => 'getAutoRenewal',
        'terms_and_conditions' => 'getTermsAndConditions',
        'sample1' => 'getSample1',
        'sample2' => 'getSample2',
        'sample3' => 'getSample3',
        'sample4' => 'getSample4',
        'sample5' => 'getSample5',
        'message_flow' => 'getMessageFlow',
        'help_message' => 'getHelpMessage',
        'cancel_campaign' => 'getCancelCampaign',
        'opt_out_message' => 'getOptOutMessage',
        'opt_in_message' => 'getOptInMessage'
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
        $this->container['msg_brand_id'] = $data['msg_brand_id'] ?? null;
        $this->container['brand_name'] = $data['brand_name'] ?? null;
        $this->container['vertical'] = $data['vertical'] ?? null;
        $this->container['usecase'] = $data['usecase'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['embedded_link'] = $data['embedded_link'] ?? null;
        $this->container['embedded_phone'] = $data['embedded_phone'] ?? null;
        $this->container['number_pool'] = $data['number_pool'] ?? null;
        $this->container['age_gated'] = $data['age_gated'] ?? null;
        $this->container['direct_lending'] = $data['direct_lending'] ?? null;
        $this->container['subscriber_optin'] = $data['subscriber_optin'] ?? null;
        $this->container['subscriber_optout'] = $data['subscriber_optout'] ?? null;
        $this->container['subscriber_help'] = $data['subscriber_help'] ?? null;
        $this->container['auto_renewal'] = $data['auto_renewal'] ?? null;
        $this->container['terms_and_conditions'] = $data['terms_and_conditions'] ?? null;
        $this->container['sample1'] = $data['sample1'] ?? null;
        $this->container['sample2'] = $data['sample2'] ?? null;
        $this->container['sample3'] = $data['sample3'] ?? null;
        $this->container['sample4'] = $data['sample4'] ?? null;
        $this->container['sample5'] = $data['sample5'] ?? null;
        $this->container['message_flow'] = $data['message_flow'] ?? null;
        $this->container['help_message'] = $data['help_message'] ?? null;
        $this->container['cancel_campaign'] = $data['cancel_campaign'] ?? null;
        $this->container['opt_out_message'] = $data['opt_out_message'] ?? null;
        $this->container['opt_in_message'] = $data['opt_in_message'] ?? null;
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
     * Gets msg_brand_id
     *
     * @return string|null
     */
    public function getMsgBrandId()
    {
        return $this->container['msg_brand_id'];
    }

    /**
     * Sets msg_brand_id
     *
     * @param string|null $msg_brand_id Brand ID against which the campaign is to be registered.
     *
     * @return self
     */
    public function setMsgBrandId($msg_brand_id)
    {
        $this->container['msg_brand_id'] = $msg_brand_id;

        return $this;
    }

    /**
     * Gets brand_name
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string|null $brand_name Brand name against which the campaign is to be registered
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets vertical
     *
     * @return string|null
     */
    public function getVertical()
    {
        return $this->container['vertical'];
    }

    /**
     * Sets vertical
     *
     * @param string|null $vertical Vertical for which the campaign is targeted
     *
     * @return self
     */
    public function setVertical($vertical)
    {
        $this->container['vertical'] = $vertical;

        return $this;
    }

    /**
     * Gets usecase
     *
     * @return string|null
     */
    public function getUsecase()
    {
        return $this->container['usecase'];
    }

    /**
     * Sets usecase
     *
     * @param string|null $usecase Use case for which the campaign is targeted
     *
     * @return self
     */
    public function setUsecase($usecase)
    {
        $this->container['usecase'] = $usecase;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description for the campaign. Min length is 40.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets embedded_link
     *
     * @return string|null
     */
    public function getEmbeddedLink()
    {
        return $this->container['embedded_link'];
    }

    /**
     * Sets embedded_link
     *
     * @param string|null $embedded_link Valid Values – Y or N
     *
     * @return self
     */
    public function setEmbeddedLink($embedded_link)
    {
        $this->container['embedded_link'] = $embedded_link;

        return $this;
    }

    /**
     * Gets embedded_phone
     *
     * @return string|null
     */
    public function getEmbeddedPhone()
    {
        return $this->container['embedded_phone'];
    }

    /**
     * Sets embedded_phone
     *
     * @param string|null $embedded_phone Valid Values – Y or N
     *
     * @return self
     */
    public function setEmbeddedPhone($embedded_phone)
    {
        $this->container['embedded_phone'] = $embedded_phone;

        return $this;
    }

    /**
     * Gets number_pool
     *
     * @return string|null
     */
    public function getNumberPool()
    {
        return $this->container['number_pool'];
    }

    /**
     * Sets number_pool
     *
     * @param string|null $number_pool Valid Values – Y or N
     *
     * @return self
     */
    public function setNumberPool($number_pool)
    {
        $this->container['number_pool'] = $number_pool;

        return $this;
    }

    /**
     * Gets age_gated
     *
     * @return string|null
     */
    public function getAgeGated()
    {
        return $this->container['age_gated'];
    }

    /**
     * Sets age_gated
     *
     * @param string|null $age_gated Valid Values – Y or N
     *
     * @return self
     */
    public function setAgeGated($age_gated)
    {
        $this->container['age_gated'] = $age_gated;

        return $this;
    }

    /**
     * Gets direct_lending
     *
     * @return string|null
     */
    public function getDirectLending()
    {
        return $this->container['direct_lending'];
    }

    /**
     * Sets direct_lending
     *
     * @param string|null $direct_lending Valid Values – Y or N
     *
     * @return self
     */
    public function setDirectLending($direct_lending)
    {
        $this->container['direct_lending'] = $direct_lending;

        return $this;
    }

    /**
     * Gets subscriber_optin
     *
     * @return string|null
     */
    public function getSubscriberOptin()
    {
        return $this->container['subscriber_optin'];
    }

    /**
     * Sets subscriber_optin
     *
     * @param string|null $subscriber_optin Valid Values – Y or N
     *
     * @return self
     */
    public function setSubscriberOptin($subscriber_optin)
    {
        $this->container['subscriber_optin'] = $subscriber_optin;

        return $this;
    }

    /**
     * Gets subscriber_optout
     *
     * @return string|null
     */
    public function getSubscriberOptout()
    {
        return $this->container['subscriber_optout'];
    }

    /**
     * Sets subscriber_optout
     *
     * @param string|null $subscriber_optout Valid Values – Y or N
     *
     * @return self
     */
    public function setSubscriberOptout($subscriber_optout)
    {
        $this->container['subscriber_optout'] = $subscriber_optout;

        return $this;
    }

    /**
     * Gets subscriber_help
     *
     * @return string|null
     */
    public function getSubscriberHelp()
    {
        return $this->container['subscriber_help'];
    }

    /**
     * Sets subscriber_help
     *
     * @param string|null $subscriber_help Valid Values – Y or N
     *
     * @return self
     */
    public function setSubscriberHelp($subscriber_help)
    {
        $this->container['subscriber_help'] = $subscriber_help;

        return $this;
    }

    /**
     * Gets auto_renewal
     *
     * @return string|null
     */
    public function getAutoRenewal()
    {
        return $this->container['auto_renewal'];
    }

    /**
     * Sets auto_renewal
     *
     * @param string|null $auto_renewal Valid Values – Y or N
     *
     * @return self
     */
    public function setAutoRenewal($auto_renewal)
    {
        $this->container['auto_renewal'] = $auto_renewal;

        return $this;
    }

    /**
     * Gets terms_and_conditions
     *
     * @return string|null
     */
    public function getTermsAndConditions()
    {
        return $this->container['terms_and_conditions'];
    }

    /**
     * Sets terms_and_conditions
     *
     * @param string|null $terms_and_conditions Valid Values – Y or N
     *
     * @return self
     */
    public function setTermsAndConditions($terms_and_conditions)
    {
        $this->container['terms_and_conditions'] = $terms_and_conditions;

        return $this;
    }

    /**
     * Gets sample1
     *
     * @return string|null
     */
    public function getSample1()
    {
        return $this->container['sample1'];
    }

    /**
     * Sets sample1
     *
     * @param string|null $sample1 Sample message. Min length is 20.
     *
     * @return self
     */
    public function setSample1($sample1)
    {
        $this->container['sample1'] = $sample1;

        return $this;
    }

    /**
     * Gets sample2
     *
     * @return string|null
     */
    public function getSample2()
    {
        return $this->container['sample2'];
    }

    /**
     * Sets sample2
     *
     * @param string|null $sample2 Sample message. Min length is 20.
     *
     * @return self
     */
    public function setSample2($sample2)
    {
        $this->container['sample2'] = $sample2;

        return $this;
    }

    /**
     * Gets sample3
     *
     * @return string|null
     */
    public function getSample3()
    {
        return $this->container['sample3'];
    }

    /**
     * Sets sample3
     *
     * @param string|null $sample3 Sample message. Min length is 20.
     *
     * @return self
     */
    public function setSample3($sample3)
    {
        $this->container['sample3'] = $sample3;

        return $this;
    }

    /**
     * Gets sample4
     *
     * @return string|null
     */
    public function getSample4()
    {
        return $this->container['sample4'];
    }

    /**
     * Sets sample4
     *
     * @param string|null $sample4 Sample message. Min length is 20.
     *
     * @return self
     */
    public function setSample4($sample4)
    {
        $this->container['sample4'] = $sample4;

        return $this;
    }

    /**
     * Gets sample5
     *
     * @return string|null
     */
    public function getSample5()
    {
        return $this->container['sample5'];
    }

    /**
     * Sets sample5
     *
     * @param string|null $sample5 Sample message. Min length is 20.
     *
     * @return self
     */
    public function setSample5($sample5)
    {
        $this->container['sample5'] = $sample5;

        return $this;
    }

    /**
     * Gets message_flow
     *
     * @return string|null
     */
    public function getMessageFlow()
    {
        return $this->container['message_flow'];
    }

    /**
     * Sets message_flow
     *
     * @param string|null $message_flow Message flow description. Min length is 40.
     *
     * @return self
     */
    public function setMessageFlow($message_flow)
    {
        $this->container['message_flow'] = $message_flow;

        return $this;
    }

    /**
     * Gets help_message
     *
     * @return string|null
     */
    public function getHelpMessage()
    {
        return $this->container['help_message'];
    }

    /**
     * Sets help_message
     *
     * @param string|null $help_message Help message for campaign. Min length is 20.
     *
     * @return self
     */
    public function setHelpMessage($help_message)
    {
        $this->container['help_message'] = $help_message;

        return $this;
    }

    /**
     * Gets cancel_campaign
     *
     * @return string|null
     */
    public function getCancelCampaign()
    {
        return $this->container['cancel_campaign'];
    }

    /**
     * Sets cancel_campaign
     *
     * @param string|null $cancel_campaign Valid Values – Y or N
     *
     * @return self
     */
    public function setCancelCampaign($cancel_campaign)
    {
        $this->container['cancel_campaign'] = $cancel_campaign;

        return $this;
    }

    /**
     * Gets opt_out_message
     *
     * @return string|null
     */
    public function getOptOutMessage()
    {
        return $this->container['opt_out_message'];
    }

    /**
     * Sets opt_out_message
     *
     * @param string|null $opt_out_message Opt-out message for campaign. Min length is 20.
     *
     * @return self
     */
    public function setOptOutMessage($opt_out_message)
    {
        $this->container['opt_out_message'] = $opt_out_message;

        return $this;
    }

    /**
     * Gets opt_in_message
     *
     * @return string|null
     */
    public function getOptInMessage()
    {
        return $this->container['opt_in_message'];
    }

    /**
     * Sets opt_in_message
     *
     * @param string|null $opt_in_message Opt-in message for campaign. Min length is 20.
     *
     * @return self
     */
    public function setOptInMessage($opt_in_message)
    {
        $this->container['opt_in_message'] = $opt_in_message;

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


