# BumbalCommunicationAdmin\SettingsApi

All URIs are relative to *https://communication.bumbal.eu/admin/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListSettings**](SettingsApi.md#retrieveListSettings) | **PUT** /setting | Retrieve List of Settings
[**settingRetrieve**](SettingsApi.md#settingRetrieve) | **GET** /setting/{settingId} | Retrieve a Setting
[**settingsUpdate**](SettingsApi.md#settingsUpdate) | **PUT** /setting/{settingId} | Update a Setting


# **retrieveListSettings**
> \BumbalCommunicationAdmin\Model\SettingListResponse retrieveListSettings($arguments)

Retrieve List of Settings

Retrieve List of Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\SettingsApi();
$arguments = new \BumbalCommunicationAdmin\Model\SettingRetrieveListArguments(); // \BumbalCommunicationAdmin\Model\SettingRetrieveListArguments | Settings RetrieveList Arguments

try {
    $result = $api_instance->retrieveListSettings($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->retrieveListSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalCommunicationAdmin\Model\SettingRetrieveListArguments**](../Model/SettingRetrieveListArguments.md)| Settings RetrieveList Arguments |

### Return type

[**\BumbalCommunicationAdmin\Model\SettingListResponse**](../Model/SettingListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingRetrieve**
> \BumbalCommunicationAdmin\Model\SettingModel settingRetrieve($setting_id)

Retrieve a Setting

Retrieve a Setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\SettingsApi();
$setting_id = 789; // int | ID of setting variable to return

try {
    $result = $api_instance->settingRetrieve($setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingRetrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_id** | **int**| ID of setting variable to return |

### Return type

[**\BumbalCommunicationAdmin\Model\SettingModel**](../Model/SettingModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsUpdate**
> \BumbalCommunicationAdmin\Model\ApiResponse settingsUpdate($setting_id, $body)

Update a Setting

Update a Setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\SettingsApi();
$setting_id = 789; // int | ID of Setting to update
$body = new \BumbalCommunicationAdmin\Model\SettingModel(); // \BumbalCommunicationAdmin\Model\SettingModel | Settings object

try {
    $result = $api_instance->settingsUpdate($setting_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_id** | **int**| ID of Setting to update |
 **body** | [**\BumbalCommunicationAdmin\Model\SettingModel**](../Model/SettingModel.md)| Settings object | [optional]

### Return type

[**\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

