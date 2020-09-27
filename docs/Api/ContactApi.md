# OpenAPI\Client\ContactApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restAccountsContactsContactIdDocumentGet**](ContactApi.md#restAccountsContactsContactIdDocumentGet) | **GET** /rest/accounts/contacts/{contactId}/document | Get storage object from contact documents
[**restAccountsContactsContactIdDocumentPost**](ContactApi.md#restAccountsContactsContactIdDocumentPost) | **POST** /rest/accounts/contacts/{contactId}/document | Upload document to contact directory
[**restAccountsContactsContactIdDocumentUrlGet**](ContactApi.md#restAccountsContactsContactIdDocumentUrlGet) | **GET** /rest/accounts/contacts/{contactId}/document/url | Get temporary url for document
[**restAccountsContactsContactIdDocumentsDelete**](ContactApi.md#restAccountsContactsContactIdDocumentsDelete) | **DELETE** /rest/accounts/contacts/{contactId}/documents | Delete files from contact documents
[**restAccountsContactsContactIdDocumentsGet**](ContactApi.md#restAccountsContactsContactIdDocumentsGet) | **GET** /rest/accounts/contacts/{contactId}/documents | List documents of a contact



## restAccountsContactsContactIdDocumentGet

> \OpenAPI\Client\Model\StorageObject restAccountsContactsContactIdDocumentGet($key, $contact_id)

Get storage object from contact documents

Gets a storage object from contact documents. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key of the object to get from contact documents.
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdDocumentGet($key, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->restAccountsContactsContactIdDocumentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The storage key of the object to get from contact documents. |
 **contact_id** | **int**| The ID of the contact |

### Return type

[**\OpenAPI\Client\Model\StorageObject**](../Model/StorageObject.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountsContactsContactIdDocumentPost

> \OpenAPI\Client\Model\StorageObject restAccountsContactsContactIdDocumentPost($key, $contact_id)

Upload document to contact directory

Uploads a document to the contact directory. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key for the file to upload
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdDocumentPost($key, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->restAccountsContactsContactIdDocumentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The storage key for the file to upload |
 **contact_id** | **int**| The ID of the contact |

### Return type

[**\OpenAPI\Client\Model\StorageObject**](../Model/StorageObject.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountsContactsContactIdDocumentUrlGet

> object restAccountsContactsContactIdDocumentUrlGet($key, $contact_id)

Get temporary url for document

Gets a temporary url for a document. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key to get temporary url for
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdDocumentUrlGet($key, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->restAccountsContactsContactIdDocumentUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The storage key to get temporary url for |
 **contact_id** | **int**| The ID of the contact |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountsContactsContactIdDocumentsDelete

> object restAccountsContactsContactIdDocumentsDelete($key_list, $contact_id)

Delete files from contact documents

Deletes files from contact documents. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_list = 56; // int | List of storage keys to delete
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdDocumentsDelete($key_list, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->restAccountsContactsContactIdDocumentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_list** | **int**| List of storage keys to delete |
 **contact_id** | **int**| The ID of the contact |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountsContactsContactIdDocumentsGet

> \OpenAPI\Client\Model\StorageObjectList restAccountsContactsContactIdDocumentsGet($contact_id, $continuation_token)

List documents of a contact

Lists all documents that are saved for a contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$continuation_token = 'continuation_token_example'; // string | token from previous request to continue listing documents

try {
    $result = $apiInstance->restAccountsContactsContactIdDocumentsGet($contact_id, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->restAccountsContactsContactIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| The ID of the contact |
 **continuation_token** | **string**| token from previous request to continue listing documents | [optional]

### Return type

[**\OpenAPI\Client\Model\StorageObjectList**](../Model/StorageObjectList.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

