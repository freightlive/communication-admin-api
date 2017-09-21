<?php
/**
 * ActivityApi
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
 * ActivityApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalCommunicationAdmin
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityApi
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
     * @return ActivityApi
     */
    public function setApiClient(\BumbalCommunicationAdmin\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation retrieveActivity
     *
     * Find activity by ID
     *
     * @param int $activity_id ID of activity to return (required)
     * @param bool $include_messages Include messages (required)
     * @param bool $include_messages_history Include messages History (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ActivityModel
     */
    public function retrieveActivity($activity_id, $include_messages, $include_messages_history)
    {
        list($response) = $this->retrieveActivityWithHttpInfo($activity_id, $include_messages, $include_messages_history);
        return $response;
    }

    /**
     * Operation retrieveActivityWithHttpInfo
     *
     * Find activity by ID
     *
     * @param int $activity_id ID of activity to return (required)
     * @param bool $include_messages Include messages (required)
     * @param bool $include_messages_history Include messages History (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ActivityModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveActivityWithHttpInfo($activity_id, $include_messages, $include_messages_history)
    {
        // verify the required parameter 'activity_id' is set
        if ($activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_id when calling retrieveActivity');
        }
        // verify the required parameter 'include_messages' is set
        if ($include_messages === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_messages when calling retrieveActivity');
        }
        // verify the required parameter 'include_messages_history' is set
        if ($include_messages_history === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_messages_history when calling retrieveActivity');
        }
        // parse inputs
        $resourcePath = "/activity/{activityId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($include_messages !== null) {
            $queryParams['include_messages'] = $this->apiClient->getSerializer()->toQueryValue($include_messages);
        }
        // query params
        if ($include_messages_history !== null) {
            $queryParams['include_messages_history'] = $this->apiClient->getSerializer()->toQueryValue($include_messages_history);
        }
        // path params
        if ($activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "activityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($activity_id),
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
                '\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ActivityModel',
                '/activity/{activityId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ActivityModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ActivityModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
