# BumbalCommunicationAdmin\ActivityApi

All URIs are relative to *https://communication.bumbal.eu/admin/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveActivity**](ActivityApi.md#retrieveActivity) | **GET** /activity/{activityId} | Find activity by ID
[**triggerMessageForActivity**](ActivityApi.md#triggerMessageForActivity) | **POST** /activity/trigger-message | Trigger a message for an Activity


# **retrieveActivity**
> \BumbalCommunicationAdmin\Model\ActivityModel retrieveActivity($activity_id, $include_messages, $include_messages_history)

Find activity by ID

Returns a single activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\ActivityApi();
$activity_id = 789; // int | ID of activity to return
$include_messages = true; // bool | Include messages
$include_messages_history = true; // bool | Include messages History

try {
    $result = $api_instance->retrieveActivity($activity_id, $include_messages, $include_messages_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->retrieveActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of activity to return |
 **include_messages** | **bool**| Include messages | [default to true]
 **include_messages_history** | **bool**| Include messages History | [default to true]

### Return type

[**\BumbalCommunicationAdmin\Model\ActivityModel**](../Model/ActivityModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **triggerMessageForActivity**
> \BumbalCommunicationAdmin\Model\ApiResponse triggerMessageForActivity($body)

Trigger a message for an Activity

Trigger a message for an Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\ActivityApi();
$body = new \BumbalCommunicationAdmin\Model\TriggerMessageArgsModel(); // \BumbalCommunicationAdmin\Model\TriggerMessageArgsModel | Trigger Message Args

try {
    $result = $api_instance->triggerMessageForActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->triggerMessageForActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalCommunicationAdmin\Model\TriggerMessageArgsModel**](../Model/TriggerMessageArgsModel.md)| Trigger Message Args | [optional]

### Return type

[**\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

