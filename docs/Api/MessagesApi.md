# BumbalCommunicationAdmin\MessagesApi

All URIs are relative to *https://communication.bumbal.eu/admin/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messageRetrieve**](MessagesApi.md#messageRetrieve) | **GET** /message/{messageId} | Retrieve a Message
[**retrieveListMessages**](MessagesApi.md#retrieveListMessages) | **PUT** /message | Retrieve List of Messages


# **messageRetrieve**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageModel messageRetrieve($message_id)

Retrieve a Message

Retrieve a Message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MessagesApi();
$message_id = 789; // int | ID of Message to return

try {
    $result = $api_instance->messageRetrieve($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->messageRetrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **int**| ID of Message to return |

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageModel**](../Model/MessageModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListMessages**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageModel[] retrieveListMessages($arguments)

Retrieve List of Messages

Retrieve List of Messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MessagesApi();
$arguments = new \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageRetrieveListArguments(); // \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageRetrieveListArguments | Messages RetrieveList Arguments

try {
    $result = $api_instance->retrieveListMessages($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->retrieveListMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageRetrieveListArguments**](../Model/MessageRetrieveListArguments.md)| Messages RetrieveList Arguments |

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageModel[]**](../Model/MessageModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

