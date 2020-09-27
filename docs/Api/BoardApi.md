# OpenAPI\Client\BoardApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restBoardsBoardIdColumnsColumnIdDelete**](BoardApi.md#restBoardsBoardIdColumnsColumnIdDelete) | **DELETE** /rest/boards/{boardId}/columns/{columnId} | Delete column
[**restBoardsBoardIdColumnsColumnIdPositionPut**](BoardApi.md#restBoardsBoardIdColumnsColumnIdPositionPut) | **PUT** /rest/boards/{boardId}/columns/{columnId}/position | Update position of of a column
[**restBoardsBoardIdColumnsColumnIdPost**](BoardApi.md#restBoardsBoardIdColumnsColumnIdPost) | **POST** /rest/boards/{boardId}/columns/{columnId} | Copy column
[**restBoardsBoardIdColumnsColumnIdPut**](BoardApi.md#restBoardsBoardIdColumnsColumnIdPut) | **PUT** /rest/boards/{boardId}/columns/{columnId} | Update column
[**restBoardsBoardIdColumnsColumnIdTasksGet**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksGet) | **GET** /rest/boards/{boardId}/columns/{columnId}/tasks | List all task of a column
[**restBoardsBoardIdColumnsColumnIdTasksPost**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksPost) | **POST** /rest/boards/{boardId}/columns/{columnId}/tasks | Create task in specific column
[**restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete) | **DELETE** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Delete task
[**restBoardsBoardIdColumnsColumnIdTasksTaskIdGet**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdGet) | **GET** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Get task by ID
[**restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut) | **PUT** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/position | Update task position
[**restBoardsBoardIdColumnsColumnIdTasksTaskIdPost**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdPost) | **POST** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Copy task
[**restBoardsBoardIdColumnsColumnIdTasksTaskIdPut**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdPut) | **PUT** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Update task
[**restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost) | **POST** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/references | Create reference
[**restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete) | **DELETE** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/references/{referenceId} | Delete reference from a given task
[**restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet) | **GET** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/references/{referenceType}/{referenceKey} | Check reference key
[**restBoardsBoardIdColumnsGet**](BoardApi.md#restBoardsBoardIdColumnsGet) | **GET** /rest/boards/{boardId}/columns | List all columns of a given board
[**restBoardsBoardIdColumnsPost**](BoardApi.md#restBoardsBoardIdColumnsPost) | **POST** /rest/boards/{boardId}/columns | Create column and assign it to a board



## restBoardsBoardIdColumnsColumnIdDelete

> object restBoardsBoardIdColumnsColumnIdDelete($board_id, $column_id)

Delete column

Deletes a specific column. The ID of the board and the ID of column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdDelete($board_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |

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


## restBoardsBoardIdColumnsColumnIdPositionPut

> object restBoardsBoardIdColumnsColumnIdPositionPut($position, $board_id, $column_id)

Update position of of a column

Updates the position of a specific column. Also updates the positions of all following columns on the same board. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$position = 56; // int | The position number
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdPositionPut($position, $board_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdPositionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **position** | **int**| The position number |
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |

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


## restBoardsBoardIdColumnsColumnIdPost

> \OpenAPI\Client\Model\BoardColumn restBoardsBoardIdColumnsColumnIdPost($board_id, $column_id)

Copy column

Copies a specific column. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdPost($board_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |

### Return type

[**\OpenAPI\Client\Model\BoardColumn**](../Model/BoardColumn.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdColumnsColumnIdPut

> \OpenAPI\Client\Model\BoardColumn restBoardsBoardIdColumnsColumnIdPut($board_id, $column_id, $_rest_boards_board_id_columns_column_id)

Update column

Updates a specific column. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$_rest_boards_board_id_columns_column_id = new \OpenAPI\Client\Model\InlineObject36(); // \OpenAPI\Client\Model\InlineObject36 | 

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdPut($board_id, $column_id, $_rest_boards_board_id_columns_column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |
 **_rest_boards_board_id_columns_column_id** | [**\OpenAPI\Client\Model\InlineObject36**](../Model/InlineObject36.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BoardColumn**](../Model/BoardColumn.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdColumnsColumnIdTasksGet

> \OpenAPI\Client\Model\BoardTask[] restBoardsBoardIdColumnsColumnIdTasksGet($board_id, $column_id, $start_at, $tasks_per_page)

List all task of a column

Lists all tasks of a given column. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$start_at = 56; // int | The position of a task to start listing at
$tasks_per_page = 56; // int | The number of tasks to list per page

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksGet($board_id, $column_id, $start_at, $tasks_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |
 **start_at** | **int**| The position of a task to start listing at | [optional]
 **tasks_per_page** | **int**| The number of tasks to list per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BoardTask[]**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdColumnsColumnIdTasksPost

> \OpenAPI\Client\Model\BoardTask restBoardsBoardIdColumnsColumnIdTasksPost($board_id, $column_id, $_rest_boards_board_id_columns_column_id_tasks)

Create task in specific column

Creates a new task in a specific column. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$_rest_boards_board_id_columns_column_id_tasks = new \OpenAPI\Client\Model\InlineObject37(); // \OpenAPI\Client\Model\InlineObject37 | 

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksPost($board_id, $column_id, $_rest_boards_board_id_columns_column_id_tasks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |
 **_rest_boards_board_id_columns_column_id_tasks** | [**\OpenAPI\Client\Model\InlineObject37**](../Model/InlineObject37.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BoardTask**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete

> object restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete($board_id, $column_id, $task_id)

Delete task

Deletes a task. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete($board_id, $column_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |
 **task_id** | **string**| The ID of the task |

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


## restBoardsBoardIdColumnsColumnIdTasksTaskIdGet

> \OpenAPI\Client\Model\BoardTask restBoardsBoardIdColumnsColumnIdTasksTaskIdGet($board_id, $column_id, $task_id)

Get task by ID

Gets a task by its ID. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdGet($board_id, $column_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |
 **task_id** | **string**| The ID of the task |

### Return type

[**\OpenAPI\Client\Model\BoardTask**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut

> object restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut($board_id, $position, $column_id, $task_id)

Update task position

Updates the position of a task. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$position = 56; // int | The new position of the task
$column_id = 'column_id_example'; // string | The ID of the column the task belongs to
$task_id = 'task_id_example'; // string | The ID of the task

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut($board_id, $position, $column_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **position** | **int**| The new position of the task |
 **column_id** | **string**| The ID of the column the task belongs to |
 **task_id** | **string**| The ID of the task |

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


## restBoardsBoardIdColumnsColumnIdTasksTaskIdPost

> \OpenAPI\Client\Model\BoardTask restBoardsBoardIdColumnsColumnIdTasksTaskIdPost($board_id, $column_id, $task_id)

Copy task

Copies a specific task. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdPost($board_id, $column_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |
 **task_id** | **string**| The ID of the task |

### Return type

[**\OpenAPI\Client\Model\BoardTask**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdColumnsColumnIdTasksTaskIdPut

> \OpenAPI\Client\Model\BoardTask restBoardsBoardIdColumnsColumnIdTasksTaskIdPut($board_id, $column_id, $task_id, $_rest_boards_board_id_columns_column_id_tasks_task_id)

Update task

Updates a task. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task
$_rest_boards_board_id_columns_column_id_tasks_task_id = new \OpenAPI\Client\Model\InlineObject38(); // \OpenAPI\Client\Model\InlineObject38 | 

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdPut($board_id, $column_id, $task_id, $_rest_boards_board_id_columns_column_id_tasks_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |
 **task_id** | **string**| The ID of the task |
 **_rest_boards_board_id_columns_column_id_tasks_task_id** | [**\OpenAPI\Client\Model\InlineObject38**](../Model/InlineObject38.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BoardTask**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost

> \OpenAPI\Client\Model\BoardTaskReference restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost($board_id, $column_id, $task_id, $reference_value)

Create reference

Creates a new reference from a given task to a contact or a ticket. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task
$reference_value = 'reference_value_example'; // string | Reference type followed by foreign ID of the referenced object. Syntax: TYPE-ID Example: user-123456 Types: user,ticket,contact,order,item

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost($board_id, $column_id, $task_id, $reference_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |
 **task_id** | **string**| The ID of the task |
 **reference_value** | **string**| Reference type followed by foreign ID of the referenced object. Syntax: TYPE-ID Example: user-123456 Types: user,ticket,contact,order,item |

### Return type

[**\OpenAPI\Client\Model\BoardTaskReference**](../Model/BoardTaskReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete

> object restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete($board_id, $column_id, $task_id, $reference_id)

Delete reference from a given task

Deletes a reference from a given task. The ID of the board, the ID of the column, the ID of the task and the ID of the reference must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the task
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task
$reference_id = 'reference_id_example'; // string | The ID of the reference

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete($board_id, $column_id, $task_id, $reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the task |
 **column_id** | **string**| The ID of the column |
 **task_id** | **string**| The ID of the task |
 **reference_id** | **string**| The ID of the reference |

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


## restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet

> object restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet($board_id, $column_id, $task_id, $reference_type, $reference_key)

Check reference key

Checks the reference key. The ID of the board, the ID of the column and the ID of the task as well as the reference type and the reference key must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task
$reference_type = 'reference_type_example'; // string | The type of the reference
$reference_key = 56; // int | The key of the reference

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet($board_id, $column_id, $task_id, $reference_type, $reference_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **column_id** | **string**| The ID of the column |
 **task_id** | **string**| The ID of the task |
 **reference_type** | **string**| The type of the reference |
 **reference_key** | **int**| The key of the reference |

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


## restBoardsBoardIdColumnsGet

> \OpenAPI\Client\Model\BoardColumn[] restBoardsBoardIdColumnsGet($board_id)

List all columns of a given board

Lists all columns of a given board. The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board

try {
    $result = $apiInstance->restBoardsBoardIdColumnsGet($board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |

### Return type

[**\OpenAPI\Client\Model\BoardColumn[]**](../Model/BoardColumn.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restBoardsBoardIdColumnsPost

> \OpenAPI\Client\Model\BoardColumn restBoardsBoardIdColumnsPost($board_id, $_rest_boards_board_id_columns)

Create column and assign it to a board

Creates a new column and assigns it to a given board. The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$_rest_boards_board_id_columns = new \OpenAPI\Client\Model\InlineObject35(); // \OpenAPI\Client\Model\InlineObject35 | 

try {
    $result = $apiInstance->restBoardsBoardIdColumnsPost($board_id, $_rest_boards_board_id_columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_id** | **string**| The ID of the board |
 **_rest_boards_board_id_columns** | [**\OpenAPI\Client\Model\InlineObject35**](../Model/InlineObject35.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BoardColumn**](../Model/BoardColumn.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

