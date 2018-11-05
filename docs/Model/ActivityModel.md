# ActivityModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Local Identifier of this activity | [optional] 
**bumbal_activity_id** | **int** | Bumbal Identifier of this activity | [optional] 
**send_invite** | **bool** | Send an Invite message for this activity | [optional] 
**send_pref_confirmation** | **bool** | Send an Confirmation message if prefferences are received | [optional] 
**send_planned** | **bool** | Send an Planned message for this activity | [optional] 
**send_eta** | **bool** | Send an ETA message for this activity | [optional] 
**send_executed** | **bool** | Send an Exceuted message for this activity | [optional] 
**send_cancelled** | **bool** | Send an Cancelled message for this activity | [optional] 
**token** | **string** | GUID used for external identification | [optional] 
**messages** | [**\BumbalCommunicationAdmin\Model\MessageModel[]**](MessageModel.md) |  | [optional] 
**archived** | **bool** | Whether this activity is already archived | [optional] 
**archive_data** | **string** | JSON string with all archived data | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


