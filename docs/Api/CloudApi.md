# OpenAPI\Client\CloudApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restStorageFrontendFileDelete**](CloudApi.md#restStorageFrontendFileDelete) | **DELETE** /rest/storage/frontend/file | Remove a single object from frontend storage.
[**restStorageFrontendFileGet**](CloudApi.md#restStorageFrontendFileGet) | **GET** /rest/storage/frontend/file | Get file information for a single object in frontend storage. Append public cloudfront url to retrieved object.
[**restStorageFrontendFileMetadataGet**](CloudApi.md#restStorageFrontendFileMetadataGet) | **GET** /rest/storage/frontend/file/metadata | Get assigend metadata for a single storage object
[**restStorageFrontendFileMetadataPost**](CloudApi.md#restStorageFrontendFileMetadataPost) | **POST** /rest/storage/frontend/file/metadata | Update metadata of an storage object
[**restStorageFrontendFilePost**](CloudApi.md#restStorageFrontendFilePost) | **POST** /rest/storage/frontend/file | Upload a single file to frontend storage.
[**restStorageFrontendFilesDelete**](CloudApi.md#restStorageFrontendFilesDelete) | **DELETE** /rest/storage/frontend/files | Delete files from frontend storage.
[**restStorageFrontendFilesGet**](CloudApi.md#restStorageFrontendFilesGet) | **GET** /rest/storage/frontend/files | List files from frontend storage. Append public cloudfront url to each retrieved object.
[**restStorageFrontendObjectUrlGet**](CloudApi.md#restStorageFrontendObjectUrlGet) | **GET** /rest/storage/frontend/object-url | Get the URL for a layout document
[**restStorageLayoutDelete**](CloudApi.md#restStorageLayoutDelete) | **DELETE** /rest/storage/layout | Delete layout documents
[**restStorageLayoutListGet**](CloudApi.md#restStorageLayoutListGet) | **GET** /rest/storage/layout/list | List layout documents
[**restStorageLayoutObjectUrlGet**](CloudApi.md#restStorageLayoutObjectUrlGet) | **GET** /rest/storage/layout/object-url | Get the URL for a layout document
[**restStorageLayoutPost**](CloudApi.md#restStorageLayoutPost) | **POST** /rest/storage/layout | Upload a layout document
[**restStorageOrderPropertiesObjectUrlGet**](CloudApi.md#restStorageOrderPropertiesObjectUrlGet) | **GET** /rest/storage/order-properties/object-url | Get the URL for a order property file
[**restStoragePluginsInboxCommitPost**](CloudApi.md#restStoragePluginsInboxCommitPost) | **POST** /rest/storage/plugins/inbox/commit | 
[**restStoragePluginsInboxDelete**](CloudApi.md#restStoragePluginsInboxDelete) | **DELETE** /rest/storage/plugins/inbox | Delete files from the inbox
[**restStoragePluginsInboxListGet**](CloudApi.md#restStoragePluginsInboxListGet) | **GET** /rest/storage/plugins/inbox/list | List files from the inbox
[**restStoragePluginsInboxObjectUrlGet**](CloudApi.md#restStoragePluginsInboxObjectUrlGet) | **GET** /rest/storage/plugins/inbox/object-url | Get the content of a file from the inbox
[**restStoragePluginsInboxPost**](CloudApi.md#restStoragePluginsInboxPost) | **POST** /rest/storage/plugins/inbox | Upload a file to the inbox
[**restSystemCloudMetricsGet**](CloudApi.md#restSystemCloudMetricsGet) | **GET** /rest/system/cloud/metrics | Get the cloud metrics for this system
[**restSystemMetricsPlentyIdDateGet**](CloudApi.md#restSystemMetricsPlentyIdDateGet) | **GET** /rest/system/metrics/{plentyId}/{date} | Supply usage data for given plentymarkets system



## restStorageFrontendFileDelete

> object restStorageFrontendFileDelete($key)

Remove a single object from frontend storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the object to delete.

try {
    $result = $apiInstance->restStorageFrontendFileDelete($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageFrontendFileDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the object to delete. |

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


## restStorageFrontendFileGet

> object[] restStorageFrontendFileGet($key)

Get file information for a single object in frontend storage. Append public cloudfront url to retrieved object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the object to get information about.

try {
    $result = $apiInstance->restStorageFrontendFileGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageFrontendFileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the object to get information about. |

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restStorageFrontendFileMetadataGet

> object[] restStorageFrontendFileMetadataGet($key)

Get assigend metadata for a single storage object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the object to get metadata for.

try {
    $result = $apiInstance->restStorageFrontendFileMetadataGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageFrontendFileMetadataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the object to get metadata for. |

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restStorageFrontendFileMetadataPost

> object[] restStorageFrontendFileMetadataPost($key, $metadata)

Update metadata of an storage object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the object to update metadata for.
$metadata = 56; // int | The metadata to assign to storage object

try {
    $result = $apiInstance->restStorageFrontendFileMetadataPost($key, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageFrontendFileMetadataPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the object to update metadata for. |
 **metadata** | **int**| The metadata to assign to storage object |

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restStorageFrontendFilePost

> object[] restStorageFrontendFilePost($key, $max_age)

Upload a single file to frontend storage.

If file is an image, generate a thumbnail and store dimensions in metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key for the uploaded object.
$max_age = 56; // int | Number of seconds until the content of the file expires.

try {
    $result = $apiInstance->restStorageFrontendFilePost($key, $max_age);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageFrontendFilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key for the uploaded object. |
 **max_age** | **int**| Number of seconds until the content of the file expires. | [optional]

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restStorageFrontendFilesDelete

> object restStorageFrontendFilesDelete($key_list)

Delete files from frontend storage.

Deletes a list of files from frontend storage. A list of storage keys must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_list = 56; // int | List of storage keys for the files to be deleted.

try {
    $result = $apiInstance->restStorageFrontendFilesDelete($key_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageFrontendFilesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_list** | **int**| List of storage keys for the files to be deleted. |

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


## restStorageFrontendFilesGet

> object[] restStorageFrontendFilesGet($continuation_token)

List files from frontend storage. Append public cloudfront url to each retrieved object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$continuation_token = 'continuation_token_example'; // string | The <code>continuationToken</code> of a previous request to continue listing objects with.

try {
    $result = $apiInstance->restStorageFrontendFilesGet($continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageFrontendFilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **continuation_token** | **string**| The &lt;code&gt;continuationToken&lt;/code&gt; of a previous request to continue listing objects with. | [optional]

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restStorageFrontendObjectUrlGet

> object restStorageFrontendObjectUrlGet($key)

Get the URL for a layout document

Gets the URL of a layout document. The storage key must be specified. The returned URL expires after 10 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key for the frontend document to retrieve the URL for. Include the storage key in the request in a <code>key</code> field.

try {
    $result = $apiInstance->restStorageFrontendObjectUrlGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageFrontendObjectUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The storage key for the frontend document to retrieve the URL for. Include the storage key in the request in a &lt;code&gt;key&lt;/code&gt; field. |

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


## restStorageLayoutDelete

> object restStorageLayoutDelete($key_list)

Delete layout documents

Deletes a list of layout documents from storage. A list of storage keys must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_list = 56; // int | List of storage keys for the files to be deleted.

try {
    $result = $apiInstance->restStorageLayoutDelete($key_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageLayoutDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_list** | **int**| List of storage keys for the files to be deleted. |

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


## restStorageLayoutListGet

> \OpenAPI\Client\Model\StorageObjectList restStorageLayoutListGet($continuation_token)

List layout documents

Lists up to 1000 layout documents per request. If more than 1000 layout documents are available, a <code>nextContinuationToken</code> is returned. Use this token to get the next (up to) 1000 layout documents. Use the same request and include a field with the key <code>continuationToken</code> as well as the returned token from the previous call as the value.  Check the <code>isTruncated</code> field in the response to see if more results are available. If <code>isTruncated</code> is true, repeat the request using the token from the <code>nextContinuationToken</code> field of the previous response to get all results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$continuation_token = 'continuation_token_example'; // string | Token for listing the next (up to) 1000 layout documents.

try {
    $result = $apiInstance->restStorageLayoutListGet($continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageLayoutListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **continuation_token** | **string**| Token for listing the next (up to) 1000 layout documents. | [optional]

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


## restStorageLayoutObjectUrlGet

> object restStorageLayoutObjectUrlGet($key)

Get the URL for a layout document

Gets the URL of a layout document. The storage key must be specified. The returned URL expires after 10 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key for the layout document to retrieve the URL for. Include the storage key in the request in a <code>key</code> field.

try {
    $result = $apiInstance->restStorageLayoutObjectUrlGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageLayoutObjectUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The storage key for the layout document to retrieve the URL for. Include the storage key in the request in a &lt;code&gt;key&lt;/code&gt; field. |

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


## restStorageLayoutPost

> \OpenAPI\Client\Model\StorageObject restStorageLayoutPost($key)

Upload a layout document

Uploads a layout document to storage. The storage key (i.e. file path) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key for the layout document to upload. Include the storage key (i.e. file path) in the request in a <code>key</code> field.

try {
    $result = $apiInstance->restStorageLayoutPost($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageLayoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The storage key for the layout document to upload. Include the storage key (i.e. file path) in the request in a &lt;code&gt;key&lt;/code&gt; field. |

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


## restStorageOrderPropertiesObjectUrlGet

> object restStorageOrderPropertiesObjectUrlGet($key)

Get the URL for a order property file

Gets the URL of a order property file. The storage key must be specified. The returned URL expires after 10 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key for the order property      *                        file to retrieve the URL for. Include the storage key in the request in a      *                        <code>key</code> field.

try {
    $result = $apiInstance->restStorageOrderPropertiesObjectUrlGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStorageOrderPropertiesObjectUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The storage key for the order property      *                        file to retrieve the URL for. Include the storage key in the request in a      *                        &lt;code&gt;key&lt;/code&gt; field. |

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


## restStoragePluginsInboxCommitPost

> object[] restStoragePluginsInboxCommitPost()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restStoragePluginsInboxCommitPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStoragePluginsInboxCommitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restStoragePluginsInboxDelete

> object restStoragePluginsInboxDelete($key_list)

Delete files from the inbox

Deletes a list of files from the inbox. A list of storage keys must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_list = 56; // int | List of storage keys for the files to be deleted.

try {
    $result = $apiInstance->restStoragePluginsInboxDelete($key_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStoragePluginsInboxDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_list** | **int**| List of storage keys for the files to be deleted. |

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


## restStoragePluginsInboxListGet

> \OpenAPI\Client\Model\StorageObjectList restStoragePluginsInboxListGet($prefix)

List files from the inbox

Lists all files of all plugins stored in the inbox. A prefix can be specified to list all files of a specific plugin folder only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prefix = 'prefix_example'; // string | Prefix to list all files of a specific plugin folder only. The prefix also means the plugin path. The <code>prefix</code> key with the value <code>PluginA/src/</code> will only return files in the <b>src</b> folder of <b>PluginA</b>.

try {
    $result = $apiInstance->restStoragePluginsInboxListGet($prefix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStoragePluginsInboxListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prefix** | **string**| Prefix to list all files of a specific plugin folder only. The prefix also means the plugin path. The &lt;code&gt;prefix&lt;/code&gt; key with the value &lt;code&gt;PluginA/src/&lt;/code&gt; will only return files in the &lt;b&gt;src&lt;/b&gt; folder of &lt;b&gt;PluginA&lt;/b&gt;. | [optional]

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


## restStoragePluginsInboxObjectUrlGet

> object restStoragePluginsInboxObjectUrlGet($key)

Get the content of a file from the inbox

Gets the content of a file stored in the inbox. The storage key (i.e. file path) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key for the file to retrieve. Include the storage key in the request in a <code>key</code> field.

try {
    $result = $apiInstance->restStoragePluginsInboxObjectUrlGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStoragePluginsInboxObjectUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The storage key for the file to retrieve. Include the storage key in the request in a &lt;code&gt;key&lt;/code&gt; field. | [optional]

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


## restStoragePluginsInboxPost

> \OpenAPI\Client\Model\StorageObject restStoragePluginsInboxPost($key)

Upload a file to the inbox

Uploads a file to the inbox. The storage key (i.e. file path) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key for the file to upload. Include the storage key in the request in a <code>key</code> field.

try {
    $result = $apiInstance->restStoragePluginsInboxPost($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restStoragePluginsInboxPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The storage key for the file to upload. Include the storage key in the request in a &lt;code&gt;key&lt;/code&gt; field. |

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


## restSystemCloudMetricsGet

> \OpenAPI\Client\Model\CloudMetricsList restSystemCloudMetricsGet()

Get the cloud metrics for this system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restSystemCloudMetricsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restSystemCloudMetricsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CloudMetricsList**](../Model/CloudMetricsList.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restSystemMetricsPlentyIdDateGet

> object restSystemMetricsPlentyIdDateGet($plenty_id, $date)

Supply usage data for given plentymarkets system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plenty_id = 56; // int | 
$date = 56; // int | 

try {
    $result = $apiInstance->restSystemMetricsPlentyIdDateGet($plenty_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->restSystemMetricsPlentyIdDateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plenty_id** | **int**|  |
 **date** | **int**|  |

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

