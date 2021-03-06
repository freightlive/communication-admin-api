<?php
/**
 * MessagesApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalCommunicationAdmin
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Communication Administration API
 *
 * Bumbal Communication Server Administration API documentation
 *
 * OpenAPI spec version: 1.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalCommunicationAdmin\API;

use \BumbalCommunicationAdmin\ApiClient;
use \BumbalCommunicationAdmin\ApiException;
use \BumbalCommunicationAdmin\Configuration;
use \BumbalCommunicationAdmin\ObjectSerializer;

/**
 * MessagesApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalCommunicationAdmin
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessagesApi
{
    /**
     * API Client
     *
     * @var \BumbalCommunicationAdmin\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BumbalCommunicationAdmin\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BumbalCommunicationAdmin\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BumbalCommunicationAdmin\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BumbalCommunicationAdmin\ApiClient $apiClient set the API client
     *
     * @return MessagesApi
     */
    public function setApiClient(\BumbalCommunicationAdmin\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation messageRetrieve
     *
     * Retrieve a Message
     *
     * @param int $message_id ID of Message to return (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\MessageModel
     */
    public function messageRetrieve($message_id)
    {
        list($response) = $this->messageRetrieveWithHttpInfo($message_id);
        return $response;
    }

    /**
     * Operation messageRetrieveWithHttpInfo
     *
     * Retrieve a Message
     *
     * @param int $message_id ID of Message to return (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\MessageModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function messageRetrieveWithHttpInfo($message_id)
    {
        // verify the required parameter 'message_id' is set
        if ($message_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message_id when calling messageRetrieve');
        }
        // parse inputs
        $resourcePath = "/message/{messageId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($message_id !== null) {
            $resourcePath = str_replace(
                "{" . "messageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($message_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationAdmin\Model\MessageModel',
                '/message/{messageId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\Model\MessageModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\Model\MessageModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListMessages
     *
     * Retrieve List of Messages
     *
     * @param \BumbalCommunicationAdmin\Model\MessageRetrieveListArguments $arguments Messages RetrieveList Arguments (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\MessageModel[]
     */
    public function retrieveListMessages($arguments)
    {
        list($response) = $this->retrieveListMessagesWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListMessagesWithHttpInfo
     *
     * Retrieve List of Messages
     *
     * @param \BumbalCommunicationAdmin\Model\MessageRetrieveListArguments $arguments Messages RetrieveList Arguments (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\MessageModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListMessagesWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListMessages');
        }
        // parse inputs
        $resourcePath = "/message";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationAdmin\Model\MessageModel[]',
                '/message'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\Model\MessageModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\Model\MessageModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
