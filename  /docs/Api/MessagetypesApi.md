# BumbalCommunicationAdmin\MessagetypesApi

All URIs are relative to *https://communication.bumbal.eu/admin/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listMessageTypes**](MessagetypesApi.md#listMessageTypes) | **GET** /message-type | List all MessageTypes


# **listMessageTypes**
> \BumbalCommunicationAdmin\Model\MessageTypeModel[] listMessageTypes()

List all MessageTypes

List all MessageTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\MessagetypesApi();

try {
    $result = $api_instance->listMessageTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagetypesApi->listMessageTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalCommunicationAdmin\Model\MessageTypeModel[]**](../Model/MessageTypeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

