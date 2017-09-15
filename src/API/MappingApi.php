<?php
/**
 * MappingApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalCommunicationAdmin
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
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
 * MappingApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalCommunicationAdmin
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MappingApi
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
            $apiClient->getConfig()->setHost('https://communication.bumbal.eu/admin/v1');
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
     * @return MappingApi
     */
    public function setApiClient(\BumbalCommunicationAdmin\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createMapping
     *
     * Create a Mapping
     *
     * @param \BumbalCommunicationAdmin\Model\MappingModel $body Mapping object (optional)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\ApiResponse
     */
    public function createMapping($body = null)
    {
        list($response) = $this->createMappingWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createMappingWithHttpInfo
     *
     * Create a Mapping
     *
     * @param \BumbalCommunicationAdmin\Model\MappingModel $body Mapping object (optional)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createMappingWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/mapping";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

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
                '/mapping'
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
     * Operation deleteMapping
     *
     * Delete a mapping
     *
     * @param int $mapping_id ID of the mapping to delete (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\ApiResponse
     */
    public function deleteMapping($mapping_id)
    {
        list($response) = $this->deleteMappingWithHttpInfo($mapping_id);
        return $response;
    }

    /**
     * Operation deleteMappingWithHttpInfo
     *
     * Delete a mapping
     *
     * @param int $mapping_id ID of the mapping to delete (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteMappingWithHttpInfo($mapping_id)
    {
        // verify the required parameter 'mapping_id' is set
        if ($mapping_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $mapping_id when calling deleteMapping');
        }
        // parse inputs
        $resourcePath = "/mapping/{mappingId}";
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
        if ($mapping_id !== null) {
            $resourcePath = str_replace(
                "{" . "mappingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($mapping_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '/mapping/{mappingId}'
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
     * Operation retrieveListMapping
     *
     * Retrieve List of Mapping
     *
     * @param \BumbalCommunicationAdmin\Model\MappingRetrieveListArguments $arguments Mapping RetrieveList Arguments (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\MappingListResponse
     */
    public function retrieveListMapping($arguments)
    {
        list($response) = $this->retrieveListMappingWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListMappingWithHttpInfo
     *
     * Retrieve List of Mapping
     *
     * @param \BumbalCommunicationAdmin\Model\MappingRetrieveListArguments $arguments Mapping RetrieveList Arguments (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\MappingListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListMappingWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListMapping');
        }
        // parse inputs
        $resourcePath = "/mapping";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

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
                '\BumbalCommunicationAdmin\Model\MappingListResponse',
                '/mapping'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\Model\MappingListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\Model\MappingListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveMapping
     *
     * Retrieve a mapping
     *
     * @param int $mapping_id ID of mapping to return (required)
     * @param bool $include_message_type_name Show the text value of the message type (required)
     * @param bool $include_delivery_method_name Show the text value of the delivery method (required)
     * @param bool $include_template_name Show the text value of the template (required)
     * @param bool $include_template_object Include the template object (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\MappingModel
     */
    public function retrieveMapping($mapping_id, $include_message_type_name, $include_delivery_method_name, $include_template_name, $include_template_object)
    {
        list($response) = $this->retrieveMappingWithHttpInfo($mapping_id, $include_message_type_name, $include_delivery_method_name, $include_template_name, $include_template_object);
        return $response;
    }

    /**
     * Operation retrieveMappingWithHttpInfo
     *
     * Retrieve a mapping
     *
     * @param int $mapping_id ID of mapping to return (required)
     * @param bool $include_message_type_name Show the text value of the message type (required)
     * @param bool $include_delivery_method_name Show the text value of the delivery method (required)
     * @param bool $include_template_name Show the text value of the template (required)
     * @param bool $include_template_object Include the template object (required)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\MappingModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveMappingWithHttpInfo($mapping_id, $include_message_type_name, $include_delivery_method_name, $include_template_name, $include_template_object)
    {
        // verify the required parameter 'mapping_id' is set
        if ($mapping_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $mapping_id when calling retrieveMapping');
        }
        // verify the required parameter 'include_message_type_name' is set
        if ($include_message_type_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_message_type_name when calling retrieveMapping');
        }
        // verify the required parameter 'include_delivery_method_name' is set
        if ($include_delivery_method_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_delivery_method_name when calling retrieveMapping');
        }
        // verify the required parameter 'include_template_name' is set
        if ($include_template_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_template_name when calling retrieveMapping');
        }
        // verify the required parameter 'include_template_object' is set
        if ($include_template_object === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_template_object when calling retrieveMapping');
        }
        // parse inputs
        $resourcePath = "/mapping/{mappingId}";
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
        if ($include_message_type_name !== null) {
            $queryParams['include_message_type_name'] = $this->apiClient->getSerializer()->toQueryValue($include_message_type_name);
        }
        // query params
        if ($include_delivery_method_name !== null) {
            $queryParams['include_delivery_method_name'] = $this->apiClient->getSerializer()->toQueryValue($include_delivery_method_name);
        }
        // query params
        if ($include_template_name !== null) {
            $queryParams['include_template_name'] = $this->apiClient->getSerializer()->toQueryValue($include_template_name);
        }
        // query params
        if ($include_template_object !== null) {
            $queryParams['include_template_object'] = $this->apiClient->getSerializer()->toQueryValue($include_template_object);
        }
        // path params
        if ($mapping_id !== null) {
            $resourcePath = str_replace(
                "{" . "mappingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($mapping_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '\BumbalCommunicationAdmin\Model\MappingModel',
                '/mapping/{mappingId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationAdmin\Model\MappingModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationAdmin\Model\MappingModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateMapping
     *
     * Update an mapping
     *
     * @param int $mapping_id ID of mapping to update (required)
     * @param \BumbalCommunicationAdmin\Model\MappingModel $body Activity object that needs to be updated (optional)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return \BumbalCommunicationAdmin\Model\ApiResponse
     */
    public function updateMapping($mapping_id, $body = null)
    {
        list($response) = $this->updateMappingWithHttpInfo($mapping_id, $body);
        return $response;
    }

    /**
     * Operation updateMappingWithHttpInfo
     *
     * Update an mapping
     *
     * @param int $mapping_id ID of mapping to update (required)
     * @param \BumbalCommunicationAdmin\Model\MappingModel $body Activity object that needs to be updated (optional)
     * @throws \BumbalCommunicationAdmin\ApiException on non-2xx response
     * @return array of \BumbalCommunicationAdmin\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMappingWithHttpInfo($mapping_id, $body = null)
    {
        // verify the required parameter 'mapping_id' is set
        if ($mapping_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $mapping_id when calling updateMapping');
        }
        // parse inputs
        $resourcePath = "/mapping/{mappingId}";
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
        if ($mapping_id !== null) {
            $resourcePath = str_replace(
                "{" . "mappingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($mapping_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

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
                '/mapping/{mappingId}'
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
