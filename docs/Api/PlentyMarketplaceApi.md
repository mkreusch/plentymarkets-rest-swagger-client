# OpenAPI\Client\PlentyMarketplaceApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restIoCustomerLoginPost**](PlentyMarketplaceApi.md#restIoCustomerLoginPost) | **POST** /rest/io/customer/login | plentyMarketplace login
[**restPartnerPortalPartnerPluginVisibilityPost**](PlentyMarketplaceApi.md#restPartnerPortalPartnerPluginVisibilityPost) | **POST** /rest/partner-portal/partner-plugin/visibility | Change plugin visibility



## restIoCustomerLoginPost

> restIoCustomerLoginPost($body)

plentyMarketplace login

Log in to plentyMarketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PlentyMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\InlineObject251(); // \OpenAPI\Client\Model\InlineObject251 | 

try {
    $apiInstance->restIoCustomerLoginPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PlentyMarketplaceApi->restIoCustomerLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\InlineObject251**](../Model/InlineObject251.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPartnerPortalPartnerPluginVisibilityPost

> restPartnerPortalPartnerPluginVisibilityPost($plenty_id, $body)

Change plugin visibility

Make a plugin visible or invisible on plentyMarketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PlentyMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$plenty_id = 'plenty_id_example'; // string | Cookie from a successful login.
$body = new \OpenAPI\Client\Model\InlineObject252(); // \OpenAPI\Client\Model\InlineObject252 | 

try {
    $apiInstance->restPartnerPortalPartnerPluginVisibilityPost($plenty_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlentyMarketplaceApi->restPartnerPortalPartnerPluginVisibilityPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plenty_id** | **string**| Cookie from a successful login. |
 **body** | [**\OpenAPI\Client\Model\InlineObject252**](../Model/InlineObject252.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

