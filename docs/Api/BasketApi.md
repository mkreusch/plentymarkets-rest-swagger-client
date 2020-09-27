# OpenAPI\Client\BasketApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restBasketGet**](BasketApi.md#restBasketGet) | **GET** /rest/basket | Get basket
[**restBasketItemsGet**](BasketApi.md#restBasketItemsGet) | **GET** /rest/basket/items | List basket items
[**restBasketItemsIdGet**](BasketApi.md#restBasketItemsIdGet) | **GET** /rest/basket/items/{id} | Find a basket item by it&#39;s ID
[**restBasketItemsPost**](BasketApi.md#restBasketItemsPost) | **POST** /rest/basket/items | Add item to basket



## restBasketGet

> \OpenAPI\Client\Model\Basket restBasketGet()

Get basket

Gets the shopping cart for the current customer session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restBasketGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->restBasketGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Basket**](../Model/Basket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBasketItemsGet

> \OpenAPI\Client\Model\BasketItem[] restBasketItemsGet()

List basket items

Lists all items in the shopping cart for the current customer session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restBasketItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->restBasketItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BasketItem[]**](../Model/BasketItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBasketItemsIdGet

> \OpenAPI\Client\Model\BasketItem restBasketItemsIdGet($id)

Find a basket item by it's ID

Retrieve an item that is currently in the basket by it's ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->restBasketItemsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->restBasketItemsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\BasketItem**](../Model/BasketItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBasketItemsPost

> \OpenAPI\Client\Model\BasketItem restBasketItemsPost($_rest_basket_items)

Add item to basket

Adds a new item to the shopping cart using the request parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_rest_basket_items = new \OpenAPI\Client\Model\InlineObject31(); // \OpenAPI\Client\Model\InlineObject31 | 

try {
    $result = $apiInstance->restBasketItemsPost($_rest_basket_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->restBasketItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_basket_items** | [**\OpenAPI\Client\Model\InlineObject31**](../Model/InlineObject31.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BasketItem**](../Model/BasketItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

