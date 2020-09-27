# OpenAPI\Client\BatchApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restBatchGet**](BatchApi.md#restBatchGet) | **GET** /rest/batch | Make batch requests



## restBatchGet

> object[] restBatchGet($_rest_batch)

Make batch requests

Pass several operations into a single HTTP request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_batch = new \OpenAPI\Client\Model\InlineObject32(); // \OpenAPI\Client\Model\InlineObject32 | 

try {
    $result = $apiInstance->restBatchGet($_rest_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->restBatchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_batch** | [**\OpenAPI\Client\Model\InlineObject32**](../Model/InlineObject32.md)|  | [optional]

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

