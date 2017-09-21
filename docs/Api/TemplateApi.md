# BumbalCommunicationAdmin\TemplateApi

All URIs are relative to *https://communication.bumbal.eu/admin/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTemplate**](TemplateApi.md#createTemplate) | **POST** /template | Create a Template
[**deleteTemplate**](TemplateApi.md#deleteTemplate) | **DELETE** /template/{templateId} | Delete a Template
[**retrieveListTemplate**](TemplateApi.md#retrieveListTemplate) | **PUT** /template | Retrieve List of Templates
[**retrieveTemplate**](TemplateApi.md#retrieveTemplate) | **GET** /template/{templateId} | Retrieve a Template
[**updateTemplate**](TemplateApi.md#updateTemplate) | **PUT** /template/{templateId} | Update an Template


# **createTemplate**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse createTemplate($body)

Create a Template

Create an template for a message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\TemplateApi();
$body = new \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateModel(); // \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateModel | Template object

try {
    $result = $api_instance->createTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateModel**](../Model/TemplateModel.md)| Template object |

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplate**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse deleteTemplate($template_id)

Delete a Template

Delete an Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\TemplateApi();
$template_id = 789; // int | ID of the template to delete

try {
    $result = $api_instance->deleteTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| ID of the template to delete |

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListTemplate**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateListResponse retrieveListTemplate($arguments)

Retrieve List of Templates

Retrieve List of Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\TemplateApi();
$arguments = new \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateRetrieveListArguments(); // \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateRetrieveListArguments | Template RetrieveList Arguments

try {
    $result = $api_instance->retrieveListTemplate($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->retrieveListTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateRetrieveListArguments**](../Model/TemplateRetrieveListArguments.md)| Template RetrieveList Arguments |

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateListResponse**](../Model/TemplateListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateModel retrieveTemplate($template_id)

Retrieve a Template

Retrieve an template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\TemplateApi();
$template_id = 789; // int | ID of template to return

try {
    $result = $api_instance->retrieveTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->retrieveTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| ID of template to return |

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateModel**](../Model/TemplateModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTemplate**
> \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse updateTemplate($template_id, $body)

Update an Template

Update an Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationAdmin\Api\TemplateApi();
$template_id = 789; // int | ID of Template to update
$body = new \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateModel(); // \BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateModel | Template object that needs to be updated

try {
    $result = $api_instance->updateTemplate($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| ID of Template to update |
 **body** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateModel**](../Model/TemplateModel.md)| Template object that needs to be updated | [optional]

### Return type

[**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

