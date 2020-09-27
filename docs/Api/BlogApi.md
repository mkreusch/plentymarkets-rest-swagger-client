# OpenAPI\Client\BlogApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restBlogsPostPost**](BlogApi.md#restBlogsPostPost) | **POST** /rest/blogs/post | Create a blog post
[**restBlogsPostPostIdDelete**](BlogApi.md#restBlogsPostPostIdDelete) | **DELETE** /rest/blogs/post/{postId} | Delete a blog post
[**restBlogsPostPostIdGet**](BlogApi.md#restBlogsPostPostIdGet) | **GET** /rest/blogs/post/{postId} | Get a blog post
[**restBlogsPostPostIdPut**](BlogApi.md#restBlogsPostPostIdPut) | **PUT** /rest/blogs/post/{postId} | Update a blog post
[**restBlogsPostsGet**](BlogApi.md#restBlogsPostsGet) | **GET** /rest/blogs/posts | List blog posts



## restBlogsPostPost

> \OpenAPI\Client\Model\BlogPost restBlogsPostPost()

Create a blog post

Creates a blog post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BlogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restBlogsPostPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogApi->restBlogsPostPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BlogPost**](../Model/BlogPost.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBlogsPostPostIdDelete

> restBlogsPostPostIdDelete($post_id)

Delete a blog post

Deletes a blog post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BlogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 56; // int | 

try {
    $apiInstance->restBlogsPostPostIdDelete($post_id);
} catch (Exception $e) {
    echo 'Exception when calling BlogApi->restBlogsPostPostIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_id** | **int**|  |

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


## restBlogsPostPostIdGet

> \OpenAPI\Client\Model\BlogPost restBlogsPostPostIdGet($post_id)

Get a blog post

Gets a blog post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BlogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 56; // int | 

try {
    $result = $apiInstance->restBlogsPostPostIdGet($post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogApi->restBlogsPostPostIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\BlogPost**](../Model/BlogPost.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBlogsPostPostIdPut

> \OpenAPI\Client\Model\BlogPost restBlogsPostPostIdPut($post_id)

Update a blog post

Updates a blog post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BlogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 56; // int | 

try {
    $result = $apiInstance->restBlogsPostPostIdPut($post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogApi->restBlogsPostPostIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\BlogPost**](../Model/BlogPost.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBlogsPostsGet

> \OpenAPI\Client\Model\BlogPost[] restBlogsPostsGet()

List blog posts

Lists blog posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BlogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restBlogsPostsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogApi->restBlogsPostsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BlogPost[]**](../Model/BlogPost.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

