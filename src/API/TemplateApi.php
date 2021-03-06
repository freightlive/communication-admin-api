<?php
/**
 * TemplateApi
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
 * TemplateApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalCommunicationAdmin
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplateApi
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
     * @return TemplateApi
     */
    public function setApiClient(\BumbalCommunicationAdmin\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createTemplate
     *
     * Create a Template
     *
     * @param \BumbalCommunicationAdmin\Model\TemplateModel $body Template object (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\ApiResponse
     */
    public function createTemplate($body)
    {
        list($response) = $this->createTemplateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createTemplateWithHttpInfo
     *
     * Create a Template
     *
     * @param \BumbalCommunicationAdmin\Model\TemplateModel $body Template object (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTemplateWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createTemplate');
        }
        // parse inputs
        $resourcePath = "/template";
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
        if (isset($body)) {
            $_tempBody = $body;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationAdmin\Model\ApiResponse',
                '/template'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteTemplate
     *
     * Delete a Template
     *
     * @param int $template_id ID of the template to delete (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\ApiResponse
     */
    public function deleteTemplate($template_id)
    {
        list($response) = $this->deleteTemplateWithHttpInfo($template_id);
        return $response;
    }

    /**
     * Operation deleteTemplateWithHttpInfo
     *
     * Delete a Template
     *
     * @param int $template_id ID of the template to delete (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTemplateWithHttpInfo($template_id)
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $template_id when calling deleteTemplate');
        }
        // parse inputs
        $resourcePath = "/template/{templateId}";
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
        if ($template_id !== null) {
            $resourcePath = str_replace(
                "{" . "templateId" . "}",
                $this->apiClient->getSerializer()->toPathValue($template_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationAdmin\Model\ApiResponse',
                '/template/{templateId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListTemplate
     *
     * Retrieve List of Templates
     *
     * @param \BumbalCommunicationAdmin\Model\TemplateRetrieveListArguments $arguments Template RetrieveList Arguments (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\TemplateListResponse
     */
    public function retrieveListTemplate($arguments)
    {
        list($response) = $this->retrieveListTemplateWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListTemplateWithHttpInfo
     *
     * Retrieve List of Templates
     *
     * @param \BumbalCommunicationAdmin\Model\TemplateRetrieveListArguments $arguments Template RetrieveList Arguments (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\TemplateListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListTemplateWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListTemplate');
        }
        // parse inputs
        $resourcePath = "/template";
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
                '\BumbalCommunicationAdmin\Model\TemplateListResponse',
                '/template'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\Model\TemplateListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\Model\TemplateListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveTemplate
     *
     * Retrieve a Template
     *
     * @param int $template_id ID of template to return (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\TemplateModel
     */
    public function retrieveTemplate($template_id)
    {
        list($response) = $this->retrieveTemplateWithHttpInfo($template_id);
        return $response;
    }

    /**
     * Operation retrieveTemplateWithHttpInfo
     *
     * Retrieve a Template
     *
     * @param int $template_id ID of template to return (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\TemplateModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveTemplateWithHttpInfo($template_id)
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $template_id when calling retrieveTemplate');
        }
        // parse inputs
        $resourcePath = "/template/{templateId}";
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
        if ($template_id !== null) {
            $resourcePath = str_replace(
                "{" . "templateId" . "}",
                $this->apiClient->getSerializer()->toPathValue($template_id),
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
                '\BumbalCommunicationAdmin\Model\TemplateModel',
                '/template/{templateId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\Model\TemplateModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\Model\TemplateModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateTemplate
     *
     * Update an Template
     *
     * @param int $template_id ID of Template to update (required)
     * @param \BumbalCommunicationAdmin\Model\TemplateModel $body Template object that needs to be updated (optional)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\ApiResponse
     */
    public function updateTemplate($template_id, $body = null)
    {
        list($response) = $this->updateTemplateWithHttpInfo($template_id, $body);
        return $response;
    }

    /**
     * Operation updateTemplateWithHttpInfo
     *
     * Update an Template
     *
     * @param int $template_id ID of Template to update (required)
     * @param \BumbalCommunicationAdmin\Model\TemplateModel $body Template object that needs to be updated (optional)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateTemplateWithHttpInfo($template_id, $body = null)
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $template_id when calling updateTemplate');
        }
        // parse inputs
        $resourcePath = "/template/{templateId}";
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
        if ($template_id !== null) {
            $resourcePath = str_replace(
                "{" . "templateId" . "}",
                $this->apiClient->getSerializer()->toPathValue($template_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
                '\BumbalCommunicationAdmin\Model\ApiResponse',
                '/template/{templateId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
