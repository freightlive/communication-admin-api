# BumbalCommunicationAdmin\MessagevariablesApi

All URIs are relative to *https://communication.bumbal.eu/admin/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMessageVariable**](MessagevariablesApi.md#createMessageVariable) | **POST** /message-variable | Create a MessageVariable
[**deleteMessageVariable**](MessagevariablesApi.md#deleteMessageVariable) | **DELETE** /message-variable/{messageVariableId} | Delete a message variables
[**retrieveListMessageVariables**](MessagevariablesApi.md#retrieveListMessageVariables) | **PUT** /message-variable | Retrieve List of Message Variables
[**retrieveMessageVariable**](MessagevariablesApi.md#retrieveMessageVariable) | **GET** /message-variable/{messageVariableId} | Retrieve a message variable
[**updateMessageVariable**](MessagevariablesApi.md#updateMessageVariable) | **PUT** /message-variable/{messageVariableId} | Update an MessageVariable


# **createMessageVariable**
> \BumbalCommunicationAdmin\Model\ApiResponse createMessageVariable($body)

Create a MessageVariable

Create a MessageVariable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MessagevariablesApi();
$body = new \BumbalCommunicationAdmin\Model\MessageVariableModel(); // \BumbalCommunicationAdmin\Model\MessageVariableModel | MessageVariable object

try {
    $result = $api_instance->createMessageVariable($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagevariablesApi->createMessageVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalCommunicationAdmin\Model\MessageVariableModel**](../Model/\BumbalCommunicationAdmin\Model\MessageVariableModel.md)| MessageVariable object |

### Return type

[**\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageVariable**
> \BumbalCommunicationAdmin\Model\ApiResponse deleteMessageVariable($message_variable_id)

Delete a message variables

Delete an MessageVariable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MessagevariablesApi();
$message_variable_id = 789; // int | ID of the message variable to delete

try {
    $result = $api_instance->deleteMessageVariable($message_variable_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagevariablesApi->deleteMessageVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_variable_id** | **int**| ID of the message variable to delete |

### Return type

[**\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListMessageVariables**
> \BumbalCommunicationAdmin\Model\MessageVariableModel[] retrieveListMessageVariables($arguments)

Retrieve List of Message Variables

Retrieve List of Message Variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MessagevariablesApi();
$arguments = new \BumbalCommunicationAdmin\Model\MessageVariableRetrieveListArguments(); // \BumbalCommunicationAdmin\Model\MessageVariableRetrieveListArguments | MessageVariables RetrieveList Arguments

try {
    $result = $api_instance->retrieveListMessageVariables($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagevariablesApi->retrieveListMessageVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalCommunicationAdmin\Model\MessageVariableRetrieveListArguments**](../Model/\BumbalCommunicationAdmin\Model\MessageVariableRetrieveListArguments.md)| MessageVariables RetrieveList Arguments |

### Return type

[**\BumbalCommunicationAdmin\Model\MessageVariableModel[]**](../Model/MessageVariableModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveMessageVariable**
> \BumbalCommunicationAdmin\Model\MessageVariableModel retrieveMessageVariable($message_variable_id)

Retrieve a message variable

Retrieve a message variable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MessagevariablesApi();
$message_variable_id = 789; // int | ID of message variable to return

try {
    $result = $api_instance->retrieveMessageVariable($message_variable_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagevariablesApi->retrieveMessageVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_variable_id** | **int**| ID of message variable to return |

### Return type

[**\BumbalCommunicationAdmin\Model\MessageVariableModel**](../Model/MessageVariableModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMessageVariable**
> \BumbalCommunicationAdmin\Model\ApiResponse updateMessageVariable($message_variable_id, $body)

Update an MessageVariable

Update an Message Variable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MessagevariablesApi();
$message_variable_id = 789; // int | ID of Message Variable to update
$body = new \BumbalCommunicationAdmin\Model\MessageVariableModel(); // \BumbalCommunicationAdmin\Model\MessageVariableModel | Message Variable object that needs to be updated

try {
    $result = $api_instance->updateMessageVariable($message_variable_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagevariablesApi->updateMessageVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_variable_id** | **int**| ID of Message Variable to update |
 **body** | [**\BumbalCommunicationAdmin\Model\MessageVariableModel**](../Model/\BumbalCommunicationAdmin\Model\MessageVariableModel.md)| Message Variable object that needs to be updated | [optional]

### Return type

[**\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

