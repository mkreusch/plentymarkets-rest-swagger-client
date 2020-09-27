# OpenAPI\Client\FulfillmentApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restFulfillmentPicklistPickingOrderItemGet**](FulfillmentApi.md#restFulfillmentPicklistPickingOrderItemGet) | **GET** /rest/fulfillment/picklist/picking_order_item | 
[**restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet**](FulfillmentApi.md#restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet) | **GET** /rest/fulfillment/picklist/picking_order_item/{pickingOrderItemId} | 



## restFulfillmentPicklistPickingOrderItemGet

> \OpenAPI\Client\Model\PickingOrderItem[] restFulfillmentPicklistPickingOrderItemGet()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restFulfillmentPicklistPickingOrderItemGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->restFulfillmentPicklistPickingOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PickingOrderItem[]**](../Model/PickingOrderItem.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet

> \OpenAPI\Client\Model\PickingOrderItem restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet($picking_order_item_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$picking_order_item_id = 56; // int | The PickingOrderItemId

try {
    $result = $apiInstance->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet($picking_order_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **picking_order_item_id** | **int**| The PickingOrderItemId |

### Return type

[**\OpenAPI\Client\Model\PickingOrderItem**](../Model/PickingOrderItem.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

