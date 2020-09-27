# OpenAPI\Client\BoardsApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restBoardsBoardIdDelete**](BoardsApi.md#restBoardsBoardIdDelete) | **DELETE** /rest/boards/{boardId} | Delete board
[**restBoardsBoardIdGet**](BoardsApi.md#restBoardsBoardIdGet) | **GET** /rest/boards/{boardId} | Get board by ID
[**restBoardsBoardIdPost**](BoardsApi.md#restBoardsBoardIdPost) | **POST** /rest/boards/{boardId} | Copy board
[**restBoardsBoardIdPut**](BoardsApi.md#restBoardsBoardIdPut) | **PUT** /rest/boards/{boardId} | Update board
[**restBoardsGet**](BoardsApi.md#restBoardsGet) | **GET** /rest/boards | List all boards
[**restBoardsPost**](BoardsApi.md#restBoardsPost) | **POST** /rest/boards | Create new board



## restBoardsBoardIdDelete

> object restBoardsBoardIdDelete($board_id)

Delete board

Deletes a specific board.  The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board

try {
    $result = $apiInstance->restBoardsBoardIdDelete($board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsBoardIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |

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


## restBoardsBoardIdGet

> \OpenAPI\Client\Model\Board restBoardsBoardIdGet($board_id, $tasks_per_page)

Get board by ID

Gets a specific board by its ID. The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$tasks_per_page = 56; // int | Maximum number of tasks to list per column

try {
    $result = $apiInstance->restBoardsBoardIdGet($board_id, $tasks_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsBoardIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **tasks_per_page** | **int**| Maximum number of tasks to list per column | [optional]

### Return type

[**\OpenAPI\Client\Model\Board**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdPost

> \OpenAPI\Client\Model\Board restBoardsBoardIdPost($board_id)

Copy board

Copies a specific board.  The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board

try {
    $result = $apiInstance->restBoardsBoardIdPost($board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsBoardIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |

### Return type

[**\OpenAPI\Client\Model\Board**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdPut

> \OpenAPI\Client\Model\Board restBoardsBoardIdPut($board_id, $_rest_boards_board_id)

Update board

Updates a specific board. The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$_rest_boards_board_id = new \OpenAPI\Client\Model\InlineObject34(); // \OpenAPI\Client\Model\InlineObject34 | 

try {
    $result = $apiInstance->restBoardsBoardIdPut($board_id, $_rest_boards_board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsBoardIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **_rest_boards_board_id** | [**\OpenAPI\Client\Model\InlineObject34**](../Model/InlineObject34.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Board**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsGet

> \OpenAPI\Client\Model\Board[] restBoardsGet()

List all boards

Lists all boards.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restBoardsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Board[]**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsPost

> \OpenAPI\Client\Model\Board restBoardsPost($_rest_boards)

Create new board

Creates a new board.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_boards = new \OpenAPI\Client\Model\InlineObject33(); // \OpenAPI\Client\Model\InlineObject33 | 

try {
    $result = $apiInstance->restBoardsPost($_rest_boards);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_boards** | [**\OpenAPI\Client\Model\InlineObject33**](../Model/InlineObject33.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Board**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

