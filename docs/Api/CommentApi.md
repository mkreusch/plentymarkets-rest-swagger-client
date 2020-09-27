# OpenAPI\Client\CommentApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restCommentsCommentIdDelete**](CommentApi.md#restCommentsCommentIdDelete) | **DELETE** /rest/comments/{commentId} | Delete a comment
[**restCommentsCommentIdGet**](CommentApi.md#restCommentsCommentIdGet) | **GET** /rest/comments/{commentId} | Get a comment
[**restCommentsCommentIdPut**](CommentApi.md#restCommentsCommentIdPut) | **PUT** /rest/comments/{commentId} | 
[**restCommentsPost**](CommentApi.md#restCommentsPost) | **POST** /rest/comments | Create a comment
[**restCommentsReferenceTypeReferenceValueGet**](CommentApi.md#restCommentsReferenceTypeReferenceValueGet) | **GET** /rest/comments/{referenceType}/{referenceValue} | List comments



## restCommentsCommentIdDelete

> restCommentsCommentIdDelete($comment_id)

Delete a comment

Deletes a comment. The ID of the comment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | The ID of the comment

try {
    $apiInstance->restCommentsCommentIdDelete($comment_id);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->restCommentsCommentIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| The ID of the comment |

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


## restCommentsCommentIdGet

> \OpenAPI\Client\Model\Comment restCommentsCommentIdGet($comment_id)

Get a comment

Gets a comment. The ID of the comment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | The ID of the comment

try {
    $result = $apiInstance->restCommentsCommentIdGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->restCommentsCommentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| The ID of the comment |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restCommentsCommentIdPut

> \OpenAPI\Client\Model\Comment restCommentsCommentIdPut($comment_id, $reference_type, $reference_value, $user_id, $is_visible_for_contact)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 56; // int | The ID of the comment
$reference_type = 'reference_type_example'; // string | The reference type. Valid types are 'category', 'contact', 'order'.
$reference_value = 56; // int | The reference value
$user_id = 56; // int | The ID of the user the comment belongs to
$is_visible_for_contact = True; // bool | If true, the comment is visible for the associated contact.

try {
    $result = $apiInstance->restCommentsCommentIdPut($comment_id, $reference_type, $reference_value, $user_id, $is_visible_for_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->restCommentsCommentIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| The ID of the comment |
 **reference_type** | **string**| The reference type. Valid types are &#39;category&#39;, &#39;contact&#39;, &#39;order&#39;. |
 **reference_value** | **int**| The reference value |
 **user_id** | **int**| The ID of the user the comment belongs to | [optional]
 **is_visible_for_contact** | **bool**| If true, the comment is visible for the associated contact. | [optional]

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restCommentsPost

> \OpenAPI\Client\Model\Comment restCommentsPost($_rest_comments)

Create a comment

Creates a comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_comments = new \OpenAPI\Client\Model\InlineObject47(); // \OpenAPI\Client\Model\InlineObject47 | 

try {
    $result = $apiInstance->restCommentsPost($_rest_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->restCommentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_comments** | [**\OpenAPI\Client\Model\InlineObject47**](../Model/InlineObject47.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restCommentsReferenceTypeReferenceValueGet

> \OpenAPI\Client\Model\Comment[] restCommentsReferenceTypeReferenceValueGet($reference_type, $reference_value, $user_id, $is_visible_for_contact)

List comments

Lists comments. The reference type and the reference value must be specified (e.g. the reference type is 'order' and the reference value is the ID of the order).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_type = 'reference_type_example'; // string | The reference type. Valid types are 'category', 'contact', 'order', 'order_item'.
$reference_value = 56; // int | The reference value
$user_id = 56; // int | The ID of the user the comment belongs to
$is_visible_for_contact = True; // bool | If true, the comment is visible for the associated contact.

try {
    $result = $apiInstance->restCommentsReferenceTypeReferenceValueGet($reference_type, $reference_value, $user_id, $is_visible_for_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->restCommentsReferenceTypeReferenceValueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_type** | **string**| The reference type. Valid types are &#39;category&#39;, &#39;contact&#39;, &#39;order&#39;, &#39;order_item&#39;. |
 **reference_value** | **int**| The reference value |
 **user_id** | **int**| The ID of the user the comment belongs to | [optional]
 **is_visible_for_contact** | **bool**| If true, the comment is visible for the associated contact. | [optional]

### Return type

[**\OpenAPI\Client\Model\Comment[]**](../Model/Comment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

