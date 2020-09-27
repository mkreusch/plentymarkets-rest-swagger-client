# OpenAPI\Client\ExportApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportExportKeyGet**](ExportApi.md#exportExportKeyGet) | **GET** /export/{exportKey} | 
[**exportExportKeyTokenGet**](ExportApi.md#exportExportKeyTokenGet) | **GET** /export/{exportKey}/{token} | 
[**restExportsFormatKeysGet**](ExportApi.md#restExportsFormatKeysGet) | **GET** /rest/exports/format_keys | Get format keys
[**restExportsFormatKeysTypeGet**](ExportApi.md#restExportsFormatKeysTypeGet) | **GET** /rest/exports/format_keys/{type} | Get format keys
[**restExportsGenerateTokenGet**](ExportApi.md#restExportsGenerateTokenGet) | **GET** /rest/exports/generate_token | Generate a token
[**restOrdersShippingExportDocumentsOrderIdGet**](ExportApi.md#restOrdersShippingExportDocumentsOrderIdGet) | **GET** /rest/orders/shipping/export_documents/{orderId} | List export documents by order ID



## exportExportKeyGet

> object exportExportKeyGet($export_key)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_key = 56; // int | 

try {
    $result = $apiInstance->exportExportKeyGet($export_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportExportKeyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_key** | **int**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportExportKeyTokenGet

> object exportExportKeyTokenGet($export_key, $token)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_key = 56; // int | 
$token = 56; // int | 

try {
    $result = $apiInstance->exportExportKeyTokenGet($export_key, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportExportKeyTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_key** | **int**|  |
 **token** | **int**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restExportsFormatKeysGet

> object[] restExportsFormatKeysGet()

Get format keys

Shows all format keys registered by plugins in production state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restExportsFormatKeysGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->restExportsFormatKeysGet: ', $e->getMessage(), PHP_EOL;
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


## restExportsFormatKeysTypeGet

> object[] restExportsFormatKeysTypeGet($type)

Get format keys

Shows all format keys registered by plugins in production state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | 

try {
    $result = $apiInstance->restExportsFormatKeysTypeGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->restExportsFormatKeysTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**|  |

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


## restExportsGenerateTokenGet

> object restExportsGenerateTokenGet()

Generate a token

Creates a new token which can be used as <code>OutputParam</code> entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restExportsGenerateTokenGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->restExportsGenerateTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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


## restOrdersShippingExportDocumentsOrderIdGet

> \OpenAPI\Client\Model\ExportDocument restOrdersShippingExportDocumentsOrderIdGet($order_id)

List export documents by order ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | 

try {
    $result = $apiInstance->restOrdersShippingExportDocumentsOrderIdGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->restOrdersShippingExportDocumentsOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ExportDocument**](../Model/ExportDocument.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

