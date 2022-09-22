<?php
/**
 * ReferenceApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ReferenceApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReferenceApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for addressValidatePost
     *
     * Validate E911 Address.
     *
     */
    public function testAddressValidatePost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for cicListPost
     *
     * Retrieve Toll Free CICs.
     *
     */
    public function testCicListPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for customerE911NotificationListPost
     *
     * Customer Notification List for Unprovisioned E911 alerts.
     *
     */
    public function testCustomerE911NotificationListPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for customerE911NotificationPost
     *
     * Customer Notification Settings for Unprovisioned E911 alerts.
     *
     */
    public function testCustomerE911NotificationPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for lataInventoryPost
     *
     * Retrieve LATA List.
     *
     */
    public function testLataInventoryPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for rateCenterCoveragePost
     *
     * Retrieve Approved DID and LNP Rate Center Coverage.
     *
     */
    public function testRateCenterCoveragePost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnE911NotificationListPost
     *
     * E911 Notification List.
     *
     */
    public function testTnE911NotificationListPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnE911NotificationPost
     *
     * E911 Notification.
     *
     */
    public function testTnE911NotificationPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnE911Post
     *
     * Provision E911.
     *
     */
    public function testTnE911Post()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnE911ValidatePost
     *
     * Validate E911.
     *
     */
    public function testTnE911ValidatePost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnFeatureCNamListPost
     *
     * Retrieve CNAM Storage Numbers.
     *
     */
    public function testTnFeatureCNamListPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnFeatureCnamDipPost
     *
     * Retrieve CNAM Dip Setting on All Numbers.
     *
     */
    public function testTnFeatureCnamDipPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnFeatureDLListPost
     *
     * Retrieve Directory Listing Numbers.
     *
     */
    public function testTnFeatureDLListPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnFeatureE911ListPost
     *
     * Retrieve E911 Numbers.
     *
     */
    public function testTnFeatureE911ListPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnFeatureMessageListPost
     *
     * Retrieve Messaging Numbers.
     *
     */
    public function testTnFeatureMessageListPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for tnPortOutHistoryPost
     *
     * Telephone Number Port-Out History.
     *
     */
    public function testTnPortOutHistoryPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for whitelistedAddressPost
     *
     * White List Address.
     *
     */
    public function testWhitelistedAddressPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
