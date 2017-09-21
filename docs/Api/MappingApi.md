# BumbalCommunicationAdmin\MappingApi

All URIs are relative to *https://communication.bumbal.eu/admin/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMapping**](MappingApi.md#createMapping) | **POST** /mapping | Create a Mapping
[**deleteMapping**](MappingApi.md#deleteMapping) | **DELETE** /mapping/{mappingId} | Delete a mapping
[**retrieveListMapping**](MappingApi.md#retrieveListMapping) | **PUT** /mapping | Retrieve List of Mapping
[**retrieveMapping**](MappingApi.md#retrieveMapping) | **GET** /mapping/{mappingId} | Retrieve a mapping
[**updateMapping**](MappingApi.md#updateMapping) | **PUT** /mapping/{mappingId} | Update an mapping


# **createMapping**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse createMapping($body)

Create a Mapping

Create a mapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MappingApi();
$body = new \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingModel(); // \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingModel | Mapping object

try {
    $result = $api_instance->createMapping($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->createMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingModel**](../Model/MappingModel.md)| Mapping object | [optional]

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMapping**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse deleteMapping($mapping_id)

Delete a mapping

Delete an Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MappingApi();
$mapping_id = 789; // int | ID of the mapping to delete

try {
    $result = $api_instance->deleteMapping($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->deleteMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**| ID of the mapping to delete |

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListMapping**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingListResponse retrieveListMapping($arguments)

Retrieve List of Mapping

Retrieve List of Mapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MappingApi();
$arguments = new \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingRetrieveListArguments(); // \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingRetrieveListArguments | Mapping RetrieveList Arguments

try {
    $result = $api_instance->retrieveListMapping($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->retrieveListMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingRetrieveListArguments**](../Model/MappingRetrieveListArguments.md)| Mapping RetrieveList Arguments |

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingListResponse**](../Model/MappingListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveMapping**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingModel retrieveMapping($mapping_id, $include_message_type_name, $include_delivery_method_name, $include_template_name, $include_template_object)

Retrieve a mapping

Retrieve a mapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MappingApi();
$mapping_id = 789; // int | ID of mapping to return
$include_message_type_name = true; // bool | Show the text value of the message type
$include_delivery_method_name = true; // bool | Show the text value of the delivery method
$include_template_name = true; // bool | Show the text value of the template
$include_template_object = true; // bool | Include the template object

try {
    $result = $api_instance->retrieveMapping($mapping_id, $include_message_type_name, $include_delivery_method_name, $include_template_name, $include_template_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->retrieveMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**| ID of mapping to return |
 **include_message_type_name** | **bool**| Show the text value of the message type |
 **include_delivery_method_name** | **bool**| Show the text value of the delivery method |
 **include_template_name** | **bool**| Show the text value of the template |
 **include_template_object** | **bool**| Include the template object |

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingModel**](../Model/MappingModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMapping**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse updateMapping($mapping_id, $body)

Update an mapping

Update an mapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MappingApi();
$mapping_id = 789; // int | ID of mapping to update
$body = new \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingModel(); // \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingModel | Activity object that needs to be updated

try {
    $result = $api_instance->updateMapping($mapping_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->updateMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**| ID of mapping to update |
 **body** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MappingModel**](../Model/MappingModel.md)| Activity object that needs to be updated | [optional]

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

