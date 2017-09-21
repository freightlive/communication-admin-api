# MessageModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional] 
**delivery_method_id** | **int** | DeliveryMethod ID | [optional] 
**delivery_method_name** | **string** | DeliveryMethod Name | [optional] 
**message_type_id** | **int** | MessageType ID | [optional] 
**message_type_name** | **string** | MessageType Name | [optional] 
**activity_id** | **int** | Activity ID | [optional] 
**template** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\TemplateModel**](TemplateModel.md) |  | [optional] 
**scheduled_job** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\ScheduledJobModel**](ScheduledJobModel.md) |  | [optional] 
**provider_id** | **int** | Provider ID | [optional] 
**provider_name** | **string** | Provider Name | [optional] 
**provider_reference** | **string** | Reference used by Provider | [optional] 
**sent** | **bool** | Message Sent flag | [optional] 
**history** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageHistoryModel[]**](MessageHistoryModel.md) |  | [optional] 
**content** | [**\BumbalCommunicationAdmin\BumbalCommunicationAdmin\Model\MessageContentModel**](MessageContentModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


