# OpenAPI\Client\WebstoreApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restWebstoresGet**](WebstoreApi.md#restWebstoresGet) | **GET** /rest/webstores | List clients (stores)
[**restWebstoresWebstoreIdPluginSetGet**](WebstoreApi.md#restWebstoresWebstoreIdPluginSetGet) | **GET** /rest/webstores/{webstoreId}/plugin_set | Find a plugin set
[**restWebstoresWebstoreIdPluginSetPost**](WebstoreApi.md#restWebstoresWebstoreIdPluginSetPost) | **POST** /rest/webstores/{webstoreId}/plugin_set | Set a plugin set relation to a webstore



## restWebstoresGet

> \OpenAPI\Client\Model\Webstore[] restWebstoresGet()

List clients (stores)

Lists all clients (stores)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebstoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restWebstoresGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebstoreApi->restWebstoresGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Webstore[]**](../Model/Webstore.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restWebstoresWebstoreIdPluginSetGet

> \OpenAPI\Client\Model\PluginSet restWebstoresWebstoreIdPluginSetGet($webstore_id)

Find a plugin set

Retrieve a plugin set by a webstore id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebstoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webstore_id = 56; // int | 

try {
    $result = $apiInstance->restWebstoresWebstoreIdPluginSetGet($webstore_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebstoreApi->restWebstoresWebstoreIdPluginSetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webstore_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PluginSet**](../Model/PluginSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restWebstoresWebstoreIdPluginSetPost

> restWebstoresWebstoreIdPluginSetPost($webstore_id)

Set a plugin set relation to a webstore

Set a plugin set relation to a webstore by a webstore id and plugin set id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebstoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webstore_id = 56; // int | 

try {
    $apiInstance->restWebstoresWebstoreIdPluginSetPost($webstore_id);
} catch (Exception $e) {
    echo 'Exception when calling WebstoreApi->restWebstoresWebstoreIdPluginSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webstore_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

