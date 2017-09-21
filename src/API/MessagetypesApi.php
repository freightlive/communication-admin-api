<?php
/**
 * MessagetypesApi
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

namespace BumbalCommunicationAdmin\BumbalCommunicationAdmin\API;

use \BumbalCommunicationAdmin\ApiClient;
use \BumbalCommunicationAdmin\ApiException;
use \BumbalCommunicationAdmin\Configuration;
use \BumbalCommunicationAdmin\ObjectSerializer;

/**
 * MessagetypesApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalCommunicationAdmin
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessagetypesApi
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
     * @return MessagetypesApi
     */
    public function setApiClient(\BumbalCommunicationAdmin\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation listMessageTypes
     *
     * List all MessageTypes
     *
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageTypeModel[]
     */
    public function listMessageTypes()
    {
        list($response) = $this->listMessageTypesWithHttpInfo();
        return $response;
    }

    /**
     * Operation listMessageTypesWithHttpInfo
     *
     * List all MessageTypes
     *
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageTypeModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listMessageTypesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/message-type";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);


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
                '\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageTypeModel[]',
                '/message-type'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageTypeModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageTypeModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
