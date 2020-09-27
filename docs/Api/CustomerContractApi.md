# OpenAPI\Client\CustomerContractApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restCustomerContractsContractIdDocumentGet**](CustomerContractApi.md#restCustomerContractsContractIdDocumentGet) | **GET** /rest/customer_contracts/{contractId}/document | Starts download of contract document
[**restCustomerContractsContractIdGet**](CustomerContractApi.md#restCustomerContractsContractIdGet) | **GET** /rest/customer_contracts/{contractId} | Returns a single contract
[**restCustomerContractsContractIdSignDocumentGet**](CustomerContractApi.md#restCustomerContractsContractIdSignDocumentGet) | **GET** /rest/customer_contracts/{contractId}/sign/document | Starts download of signed contract document
[**restCustomerContractsContractIdSignGet**](CustomerContractApi.md#restCustomerContractsContractIdSignGet) | **GET** /rest/customer_contracts/{contractId}/sign | Returns signing of a contract
[**restCustomerContractsContractIdSignPost**](CustomerContractApi.md#restCustomerContractsContractIdSignPost) | **POST** /rest/customer_contracts/{contractId}/sign | Sign a contract
[**restCustomerContractsGet**](CustomerContractApi.md#restCustomerContractsGet) | **GET** /rest/customer_contracts | List contracts
[**restCustomerContractsPost**](CustomerContractApi.md#restCustomerContractsPost) | **POST** /rest/customer_contracts | Creates a new contract



## restCustomerContractsContractIdDocumentGet

> object restCustomerContractsContractIdDocumentGet($contract_id)

Starts download of contract document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 56; // int | 

try {
    $result = $apiInstance->restCustomerContractsContractIdDocumentGet($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdDocumentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **int**|  |

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


## restCustomerContractsContractIdGet

> \OpenAPI\Client\Model\CustomerContract restCustomerContractsContractIdGet($contract_id)

Returns a single contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | The ID of the contract

try {
    $result = $apiInstance->restCustomerContractsContractIdGet($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| The ID of the contract |

### Return type

[**\OpenAPI\Client\Model\CustomerContract**](../Model/CustomerContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restCustomerContractsContractIdSignDocumentGet

> object restCustomerContractsContractIdSignDocumentGet($contract_id)

Starts download of signed contract document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 56; // int | 

try {
    $result = $apiInstance->restCustomerContractsContractIdSignDocumentGet($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdSignDocumentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **int**|  |

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


## restCustomerContractsContractIdSignGet

> \OpenAPI\Client\Model\Signing restCustomerContractsContractIdSignGet($contract_id)

Returns signing of a contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | The ID of the contract

try {
    $result = $apiInstance->restCustomerContractsContractIdSignGet($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdSignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| The ID of the contract |

### Return type

[**\OpenAPI\Client\Model\Signing**](../Model/Signing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restCustomerContractsContractIdSignPost

> \OpenAPI\Client\Model\Signing restCustomerContractsContractIdSignPost($contract_id)

Sign a contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | The ID of the contract

try {
    $result = $apiInstance->restCustomerContractsContractIdSignPost($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdSignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| The ID of the contract |

### Return type

[**\OpenAPI\Client\Model\Signing**](../Model/Signing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restCustomerContractsGet

> \OpenAPI\Client\Model\CustomerContract[] restCustomerContractsGet()

List contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restCustomerContractsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CustomerContract[]**](../Model/CustomerContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restCustomerContractsPost

> \OpenAPI\Client\Model\CustomerContract restCustomerContractsPost()

Creates a new contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restCustomerContractsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CustomerContract**](../Model/CustomerContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

