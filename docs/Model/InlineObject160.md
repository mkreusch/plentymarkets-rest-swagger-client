# # InlineObject160

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | The content of the message | 
**whispered** | **bool** | Whether the message is whispered (not visible for the contact/order linked to the message) or not optional | [optional] 
**to** | [**\OpenAPI\Client\Model\MessageTo[]**](MessageTo.md) |  | 
**linked_to** | [**\OpenAPI\Client\Model\MessageLinkedTo[]**](MessageLinkedTo.md) |  | [optional] 
**meta_data** | [**\OpenAPI\Client\Model\MessageMetaData[]**](MessageMetaData.md) |  | [optional] 
**from** | [**\OpenAPI\Client\Model\MessageFrom[]**](MessageFrom.md) |  | 
**tags** | **object[]** |  | [optional] 
**referrer** | [**\OpenAPI\Client\Model\MessageReferrer[]**](MessageReferrer.md) |  | 
**attachments** | [**\OpenAPI\Client\Model\Attachment[]**](Attachment.md) |  | [optional] 
**name** | **string** | The file name of the attachment | 
**size** | **int** | The size of the attachment in bytes | 
**content_type** | **string** | The content type fo the attachment  allowed values are image/png, image/jpeg, image/gif, image/bmp, image/tiff, application/pdf, application/zip, application/json, application/octet-stream, text/plain, text/csv | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


