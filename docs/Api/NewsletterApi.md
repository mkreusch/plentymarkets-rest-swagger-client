# OpenAPI\Client\NewsletterApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restNewslettersDelete**](NewsletterApi.md#restNewslettersDelete) | **DELETE** /rest/newsletters | Delete entries
[**restNewslettersDoubleOptInContactIdPost**](NewsletterApi.md#restNewslettersDoubleOptInContactIdPost) | **POST** /rest/newsletters/double_opt_in/{contactId} | Send doubleOptIn mail
[**restNewslettersEntryIdDelete**](NewsletterApi.md#restNewslettersEntryIdDelete) | **DELETE** /rest/newsletters/{entryId} | Delete entry
[**restNewslettersEntryIdGet**](NewsletterApi.md#restNewslettersEntryIdGet) | **GET** /rest/newsletters/{entryId} | List details of an entry
[**restNewslettersEntryIdPut**](NewsletterApi.md#restNewslettersEntryIdPut) | **PUT** /rest/newsletters/{entryId} | Update entry
[**restNewslettersFoldersDelete**](NewsletterApi.md#restNewslettersFoldersDelete) | **DELETE** /rest/newsletters/folders | Delete folders
[**restNewslettersFoldersFolderIdDelete**](NewsletterApi.md#restNewslettersFoldersFolderIdDelete) | **DELETE** /rest/newsletters/folders/{folderId} | Delete folder
[**restNewslettersFoldersFolderIdGet**](NewsletterApi.md#restNewslettersFoldersFolderIdGet) | **GET** /rest/newsletters/folders/{folderId} | List details of a folder
[**restNewslettersFoldersFolderIdPut**](NewsletterApi.md#restNewslettersFoldersFolderIdPut) | **PUT** /rest/newsletters/folders/{folderId} | Update folder
[**restNewslettersFoldersFolderIdRecipientsGet**](NewsletterApi.md#restNewslettersFoldersFolderIdRecipientsGet) | **GET** /rest/newsletters/folders/{folderId}/recipients | List all recipients of a folder
[**restNewslettersFoldersGet**](NewsletterApi.md#restNewslettersFoldersGet) | **GET** /rest/newsletters/folders | List newsletter folders
[**restNewslettersFoldersPost**](NewsletterApi.md#restNewslettersFoldersPost) | **POST** /rest/newsletters/folders | Create folder
[**restNewslettersGet**](NewsletterApi.md#restNewslettersGet) | **GET** /rest/newsletters | List newsletter entries
[**restNewslettersListRecipientsGet**](NewsletterApi.md#restNewslettersListRecipientsGet) | **GET** /rest/newsletters/list_recipients | List recipients
[**restNewslettersPost**](NewsletterApi.md#restNewslettersPost) | **POST** /rest/newsletters | Create entry
[**restNewslettersRecipientsDelete**](NewsletterApi.md#restNewslettersRecipientsDelete) | **DELETE** /rest/newsletters/recipients | Delete recipients
[**restNewslettersRecipientsGet**](NewsletterApi.md#restNewslettersRecipientsGet) | **GET** /rest/newsletters/recipients | List recipients of folder
[**restNewslettersRecipientsPost**](NewsletterApi.md#restNewslettersRecipientsPost) | **POST** /rest/newsletters/recipients | Create recipient
[**restNewslettersRecipientsRecipientIdDelete**](NewsletterApi.md#restNewslettersRecipientsRecipientIdDelete) | **DELETE** /rest/newsletters/recipients/{recipientId} | Delete recipient
[**restNewslettersRecipientsRecipientIdGet**](NewsletterApi.md#restNewslettersRecipientsRecipientIdGet) | **GET** /rest/newsletters/recipients/{recipientId} | List recipient
[**restNewslettersRecipientsRecipientIdPut**](NewsletterApi.md#restNewslettersRecipientsRecipientIdPut) | **PUT** /rest/newsletters/recipients/{recipientId} | Update recipient



## restNewslettersDelete

> \OpenAPI\Client\Model\Entry[] restNewslettersDelete()

Delete entries

Deletes all entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restNewslettersDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Entry[]**](../Model/Entry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersDoubleOptInContactIdPost

> object restNewslettersDoubleOptInContactIdPost($contact_id)

Send doubleOptIn mail

Sends a mail with a doubleOptIn. The ID of the costumer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the costumer contact

try {
    $result = $apiInstance->restNewslettersDoubleOptInContactIdPost($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersDoubleOptInContactIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| The ID of the costumer contact |

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


## restNewslettersEntryIdDelete

> \OpenAPI\Client\Model\Entry restNewslettersEntryIdDelete($entry_id)

Delete entry

Deletes an entry. The ID of the entry must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_id = 56; // int | The ID of the newsletter entry

try {
    $result = $apiInstance->restNewslettersEntryIdDelete($entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersEntryIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entry_id** | **int**| The ID of the newsletter entry |

### Return type

[**\OpenAPI\Client\Model\Entry**](../Model/Entry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersEntryIdGet

> \OpenAPI\Client\Model\Entry restNewslettersEntryIdGet($entry_id)

List details of an entry

Lists details of an entry. The ID of the entry must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_id = 56; // int | The ID of the newsletter entry.

try {
    $result = $apiInstance->restNewslettersEntryIdGet($entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersEntryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entry_id** | **int**| The ID of the newsletter entry. |

### Return type

[**\OpenAPI\Client\Model\Entry**](../Model/Entry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersEntryIdPut

> \OpenAPI\Client\Model\Entry restNewslettersEntryIdPut($entry_id, $folder_id, $subject, $body, $kind)

Update entry

Updates an entry. The ID of the entry must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_id = 56; // int | The ID of the entry
$folder_id = 56; // int | The ID of the newsletter folder
$subject = 'subject_example'; // string | The subject of the entry
$body = 'body_example'; // string | The body of the entry
$kind = 'kind_example'; // string | The type of the entry. The content can be saved as plain text or in HTML format. Possible values: ['plain', 'html'].

try {
    $result = $apiInstance->restNewslettersEntryIdPut($entry_id, $folder_id, $subject, $body, $kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersEntryIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entry_id** | **int**| The ID of the entry |
 **folder_id** | **int**| The ID of the newsletter folder |
 **subject** | **string**| The subject of the entry | [optional]
 **body** | **string**| The body of the entry | [optional]
 **kind** | **string**| The type of the entry. The content can be saved as plain text or in HTML format. Possible values: [&#39;plain&#39;, &#39;html&#39;]. | [optional]

### Return type

[**\OpenAPI\Client\Model\Entry**](../Model/Entry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersFoldersDelete

> \OpenAPI\Client\Model\Folder[] restNewslettersFoldersDelete()

Delete folders

Deletes all folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restNewslettersFoldersDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Folder[]**](../Model/Folder.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersFoldersFolderIdDelete

> \OpenAPI\Client\Model\Folder restNewslettersFoldersFolderIdDelete($folder_id)

Delete folder

Deletes a folder. The ID of the folder must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 56; // int | The ID of the newsletter folder

try {
    $result = $apiInstance->restNewslettersFoldersFolderIdDelete($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersFoldersFolderIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **int**| The ID of the newsletter folder |

### Return type

[**\OpenAPI\Client\Model\Folder**](../Model/Folder.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersFoldersFolderIdGet

> \OpenAPI\Client\Model\Folder restNewslettersFoldersFolderIdGet($folder_id)

List details of a folder

Lists details of a folder. The ID of the folder must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 56; // int | The ID of the newsletter folder.

try {
    $result = $apiInstance->restNewslettersFoldersFolderIdGet($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersFoldersFolderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **int**| The ID of the newsletter folder. |

### Return type

[**\OpenAPI\Client\Model\Folder**](../Model/Folder.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersFoldersFolderIdPut

> \OpenAPI\Client\Model\Folder restNewslettersFoldersFolderIdPut($folder_id, $name, $position, $client_ids, $is_deletable, $is_selectable)

Update folder

Updates a folder. The ID of the folder must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 56; // int | The ID of the newsletter folder
$name = 'name_example'; // string | The name of the newsletter folder
$position = 56; // int | The position of the newsletter folder
$client_ids = 56; // int | The IDs of the clients (stores). It is possible to determine which clients (stores) the newsletter folder is visible for.
$is_deletable = True; // bool | Flag that indicates if the newsletter folder can be deleted. The folders 'Customers' and 'Interested parties' are available by default and cannot be deleted.
$is_selectable = True; // bool | Flag that indicates if the newsletter folder can be selected by customers in the online store. If it is allowed, the folder will be displayed in the My account area of the online store. Customers will then be able to subscribe to the newsletters that are included in this folder.

try {
    $result = $apiInstance->restNewslettersFoldersFolderIdPut($folder_id, $name, $position, $client_ids, $is_deletable, $is_selectable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersFoldersFolderIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **int**| The ID of the newsletter folder |
 **name** | **string**| The name of the newsletter folder | [optional]
 **position** | **int**| The position of the newsletter folder | [optional]
 **client_ids** | **int**| The IDs of the clients (stores). It is possible to determine which clients (stores) the newsletter folder is visible for. | [optional]
 **is_deletable** | **bool**| Flag that indicates if the newsletter folder can be deleted. The folders &#39;Customers&#39; and &#39;Interested parties&#39; are available by default and cannot be deleted. | [optional]
 **is_selectable** | **bool**| Flag that indicates if the newsletter folder can be selected by customers in the online store. If it is allowed, the folder will be displayed in the My account area of the online store. Customers will then be able to subscribe to the newsletters that are included in this folder. | [optional]

### Return type

[**\OpenAPI\Client\Model\Folder**](../Model/Folder.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersFoldersFolderIdRecipientsGet

> \OpenAPI\Client\Model\Recipient[] restNewslettersFoldersFolderIdRecipientsGet($folder_id)

List all recipients of a folder

Lists all recipients of a folder. The ID of the folder must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 56; // int | The ID of the newsletter folder.

try {
    $result = $apiInstance->restNewslettersFoldersFolderIdRecipientsGet($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersFoldersFolderIdRecipientsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **int**| The ID of the newsletter folder. |

### Return type

[**\OpenAPI\Client\Model\Recipient[]**](../Model/Recipient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersFoldersGet

> \OpenAPI\Client\Model\Recipient[] restNewslettersFoldersGet($folder_id)

List newsletter folders

Lists all newsletter folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 56; // int | The ID of the newsletter folder

try {
    $result = $apiInstance->restNewslettersFoldersGet($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **int**| The ID of the newsletter folder |

### Return type

[**\OpenAPI\Client\Model\Recipient[]**](../Model/Recipient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersFoldersPost

> \OpenAPI\Client\Model\Folder restNewslettersFoldersPost($id, $name, $position, $is_deletable, $is_selectable, $_rest_newsletters_folders)

Create folder

Creates a folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the newsletter folder
$name = 'name_example'; // string | The name of the newsletter folder
$position = 56; // int | The position of the newsletter folder
$is_deletable = True; // bool | Flag that indicates if the newsletter folder can be deleted. Default value of is deletable is 1. The folders 'Customers' and 'Interested parties' are available by default and cannot be deleted.
$is_selectable = True; // bool | Flag that indicates if the newsletter folder can be selected by customers in the online store. If it is allowed, the folder will be displayed in the My account area of the online store. Customers will then be able to subscribe to the newsletters that are included in this folder.
$_rest_newsletters_folders = new \OpenAPI\Client\Model\InlineObject165(); // \OpenAPI\Client\Model\InlineObject165 | 

try {
    $result = $apiInstance->restNewslettersFoldersPost($id, $name, $position, $is_deletable, $is_selectable, $_rest_newsletters_folders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the newsletter folder | [optional]
 **name** | **string**| The name of the newsletter folder | [optional]
 **position** | **int**| The position of the newsletter folder | [optional]
 **is_deletable** | **bool**| Flag that indicates if the newsletter folder can be deleted. Default value of is deletable is 1. The folders &#39;Customers&#39; and &#39;Interested parties&#39; are available by default and cannot be deleted. | [optional]
 **is_selectable** | **bool**| Flag that indicates if the newsletter folder can be selected by customers in the online store. If it is allowed, the folder will be displayed in the My account area of the online store. Customers will then be able to subscribe to the newsletters that are included in this folder. | [optional]
 **_rest_newsletters_folders** | [**\OpenAPI\Client\Model\InlineObject165**](../Model/InlineObject165.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Folder**](../Model/Folder.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersGet

> \OpenAPI\Client\Model\Entry[] restNewslettersGet()

List newsletter entries

Lists all newsletter entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restNewslettersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Entry[]**](../Model/Entry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersListRecipientsGet

> \OpenAPI\Client\Model\InlineResponse2005 restNewslettersListRecipientsGet($recipient_id, $columns, $page, $items_per_page, $folder_id, $is_confirmed, $with)

List recipients

Lists a recipients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recipient_id = 56; // int | The ID of the recipient
$columns = 56; // int | Filter that restricts the search result to specific columns
$page = 56; // int | The page to get. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of orders to be displayed per page. The default number of orders per page is 50.
$folder_id = 56; // int | Filter that restricts the search result to a specific folderId.
$is_confirmed = True; // bool | Filter that restricts the search result to confirmed recipients.
$with = 56; // int | Load additional relations for a Recipient. CURRENTLY NOT AVAILABLE

try {
    $result = $apiInstance->restNewslettersListRecipientsGet($recipient_id, $columns, $page, $items_per_page, $folder_id, $is_confirmed, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersListRecipientsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipient_id** | **int**| The ID of the recipient |
 **columns** | **int**| Filter that restricts the search result to specific columns | [optional]
 **page** | **int**| The page to get. The default page that will be returned is page 1. | [optional]
 **items_per_page** | **int**| The number of orders to be displayed per page. The default number of orders per page is 50. | [optional]
 **folder_id** | **int**| Filter that restricts the search result to a specific folderId. | [optional]
 **is_confirmed** | **bool**| Filter that restricts the search result to confirmed recipients. | [optional]
 **with** | **int**| Load additional relations for a Recipient. CURRENTLY NOT AVAILABLE | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersPost

> \OpenAPI\Client\Model\Entry restNewslettersPost($subject, $body, $kind, $_rest_newsletters)

Create entry

Creates an entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject = 'subject_example'; // string | The subject of the newsletter entry
$body = 'body_example'; // string | The body of the newsletter entry
$kind = 'kind_example'; // string | The type of the entry. The content can be saved as plain text or in HTML format. Possible values: ['plain', 'html'].
$_rest_newsletters = new \OpenAPI\Client\Model\InlineObject164(); // \OpenAPI\Client\Model\InlineObject164 | 

try {
    $result = $apiInstance->restNewslettersPost($subject, $body, $kind, $_rest_newsletters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject** | **string**| The subject of the newsletter entry | [optional]
 **body** | **string**| The body of the newsletter entry | [optional]
 **kind** | **string**| The type of the entry. The content can be saved as plain text or in HTML format. Possible values: [&#39;plain&#39;, &#39;html&#39;]. | [optional]
 **_rest_newsletters** | [**\OpenAPI\Client\Model\InlineObject164**](../Model/InlineObject164.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Entry**](../Model/Entry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersRecipientsDelete

> \OpenAPI\Client\Model\Recipient[] restNewslettersRecipientsDelete()

Delete recipients

Deletes a recipients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restNewslettersRecipientsDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersRecipientsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Recipient[]**](../Model/Recipient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersRecipientsGet

> \OpenAPI\Client\Model\Recipient[] restNewslettersRecipientsGet($email, $folder_id, $recipient_id)

List recipients of folder

Lists all recipients of a folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Filter that restricts the search result to the email address of the recipient
$folder_id = 56; // int | Filter that restricts the search result to the folder ID
$recipient_id = 56; // int | Filter that restricts the search result to the recipient ID

try {
    $result = $apiInstance->restNewslettersRecipientsGet($email, $folder_id, $recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersRecipientsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Filter that restricts the search result to the email address of the recipient | [optional]
 **folder_id** | **int**| Filter that restricts the search result to the folder ID | [optional]
 **recipient_id** | **int**| Filter that restricts the search result to the recipient ID | [optional]

### Return type

[**\OpenAPI\Client\Model\Recipient[]**](../Model/Recipient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersRecipientsPost

> \OpenAPI\Client\Model\Recipient[] restNewslettersRecipientsPost($email, $first_name, $last_name, $folder_ids, $is_frontend, $ignore_visibility, $ip_address, $_rest_newsletters_recipients)

Create recipient

Creates a recipient.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | The email address of the recipient
$first_name = 'first_name_example'; // string | The first name of the recipient
$last_name = 'last_name_example'; // string | The last name of the recipient
$folder_ids = 56; // int | The IDs of the newsletter folders. These folders were selected by the customer in the online store in order to receive newsletters included in these folders.
$is_frontend = True; // bool | Value that indicates if the REST call was retrieved from the front end. Possible values are: 'true' or 'false'. True = The REST call was retrieved from the front end. False = The REST call was not retrieved from the front end.
$ignore_visibility = True; // bool | Value that indicates if the REST call considers folders without visibility. Possible value: 'true'. If the value 'true' is set, the folder visibility will be ignored. This means that both visible and invisible folders will be listed depending on the folder IDs entered in the REST call.
$ip_address = 'ip_address_example'; // string | The IP address from where the customer has confirmed the newsletter
$_rest_newsletters_recipients = new \OpenAPI\Client\Model\InlineObject166(); // \OpenAPI\Client\Model\InlineObject166 | 

try {
    $result = $apiInstance->restNewslettersRecipientsPost($email, $first_name, $last_name, $folder_ids, $is_frontend, $ignore_visibility, $ip_address, $_rest_newsletters_recipients);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersRecipientsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address of the recipient | [optional]
 **first_name** | **string**| The first name of the recipient | [optional]
 **last_name** | **string**| The last name of the recipient | [optional]
 **folder_ids** | **int**| The IDs of the newsletter folders. These folders were selected by the customer in the online store in order to receive newsletters included in these folders. | [optional]
 **is_frontend** | **bool**| Value that indicates if the REST call was retrieved from the front end. Possible values are: &#39;true&#39; or &#39;false&#39;. True &#x3D; The REST call was retrieved from the front end. False &#x3D; The REST call was not retrieved from the front end. | [optional]
 **ignore_visibility** | **bool**| Value that indicates if the REST call considers folders without visibility. Possible value: &#39;true&#39;. If the value &#39;true&#39; is set, the folder visibility will be ignored. This means that both visible and invisible folders will be listed depending on the folder IDs entered in the REST call. | [optional]
 **ip_address** | **string**| The IP address from where the customer has confirmed the newsletter | [optional]
 **_rest_newsletters_recipients** | [**\OpenAPI\Client\Model\InlineObject166**](../Model/InlineObject166.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Recipient[]**](../Model/Recipient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersRecipientsRecipientIdDelete

> \OpenAPI\Client\Model\Recipient restNewslettersRecipientsRecipientIdDelete($recipient_id)

Delete recipient

Deletes a recipient. The ID of the recipient must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recipient_id = 56; // int | The ID of the recipient

try {
    $result = $apiInstance->restNewslettersRecipientsRecipientIdDelete($recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersRecipientsRecipientIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipient_id** | **int**| The ID of the recipient |

### Return type

[**\OpenAPI\Client\Model\Recipient**](../Model/Recipient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersRecipientsRecipientIdGet

> \OpenAPI\Client\Model\Recipient restNewslettersRecipientsRecipientIdGet($recipient_id)

List recipient

Lists a recipient. The ID of the recipient must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recipient_id = 56; // int | The ID of the newsletter folder.

try {
    $result = $apiInstance->restNewslettersRecipientsRecipientIdGet($recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersRecipientsRecipientIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipient_id** | **int**| The ID of the newsletter folder. |

### Return type

[**\OpenAPI\Client\Model\Recipient**](../Model/Recipient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restNewslettersRecipientsRecipientIdPut

> \OpenAPI\Client\Model\Recipient restNewslettersRecipientsRecipientIdPut($recipient_id, $email, $first_name, $last_name, $folder_ids, $folder_id, $ip_address, $birthday, $gender, $_rest_newsletters_recipients_recipient_id)

Update recipient

Updates a recipient that is assigned to a folder. The ID of the recipient must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recipient_id = 56; // int | The ID of the recipient
$email = 'email_example'; // string | The email address of the newsletter recipient
$first_name = 'first_name_example'; // string | The first name of the newsletter recipient
$last_name = 'last_name_example'; // string | The last name of the newsletter recipient
$folder_ids = 56; // int | DEPRECATED: The IDs of the newsletter folders. These folders were selected by the customer in the online store in order to receive newsletters included in these folders.
$folder_id = 56; // int | The ID of the newsletter folder.
$ip_address = 'ip_address_example'; // string | The IP address from where the customer has confirmed the newsletter
$birthday = 'birthday_example'; // string | The customer birthday as Date string (e.g. '1982-11-24', '1982/11/24' or '24.11.1982')
$gender = 'gender_example'; // string | The gender of the customer, one of the following values: 'm','f','d'.
$_rest_newsletters_recipients_recipient_id = new \OpenAPI\Client\Model\InlineObject167(); // \OpenAPI\Client\Model\InlineObject167 | 

try {
    $result = $apiInstance->restNewslettersRecipientsRecipientIdPut($recipient_id, $email, $first_name, $last_name, $folder_ids, $folder_id, $ip_address, $birthday, $gender, $_rest_newsletters_recipients_recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->restNewslettersRecipientsRecipientIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipient_id** | **int**| The ID of the recipient |
 **email** | **string**| The email address of the newsletter recipient | [optional]
 **first_name** | **string**| The first name of the newsletter recipient | [optional]
 **last_name** | **string**| The last name of the newsletter recipient | [optional]
 **folder_ids** | **int**| DEPRECATED: The IDs of the newsletter folders. These folders were selected by the customer in the online store in order to receive newsletters included in these folders. | [optional]
 **folder_id** | **int**| The ID of the newsletter folder. | [optional]
 **ip_address** | **string**| The IP address from where the customer has confirmed the newsletter | [optional]
 **birthday** | **string**| The customer birthday as Date string (e.g. &#39;1982-11-24&#39;, &#39;1982/11/24&#39; or &#39;24.11.1982&#39;) | [optional]
 **gender** | **string**| The gender of the customer, one of the following values: &#39;m&#39;,&#39;f&#39;,&#39;d&#39;. | [optional]
 **_rest_newsletters_recipients_recipient_id** | [**\OpenAPI\Client\Model\InlineObject167**](../Model/InlineObject167.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Recipient**](../Model/Recipient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

