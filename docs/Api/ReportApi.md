# OpenAPI\Client\ReportApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restReportsKeyFiguresConfigGet**](ReportApi.md#restReportsKeyFiguresConfigGet) | **GET** /rest/reports/key-figures/config | Returns all key figure configs
[**restReportsKeyFiguresConfigKeyFigureConfigIdDelete**](ReportApi.md#restReportsKeyFiguresConfigKeyFigureConfigIdDelete) | **DELETE** /rest/reports/key-figures/config/{keyFigureConfigId} | Delete key figure configuration
[**restReportsKeyFiguresConfigKeyFigureConfigIdGet**](ReportApi.md#restReportsKeyFiguresConfigKeyFigureConfigIdGet) | **GET** /rest/reports/key-figures/config/{keyFigureConfigId} | Get key figure config
[**restReportsKeyFiguresConfigKeyFigureConfigIdPut**](ReportApi.md#restReportsKeyFiguresConfigKeyFigureConfigIdPut) | **PUT** /rest/reports/key-figures/config/{keyFigureConfigId} | Update key figure configuration
[**restReportsKeyFiguresConfigPost**](ReportApi.md#restReportsKeyFiguresConfigPost) | **POST** /rest/reports/key-figures/config | Add a key figure configuration
[**restReportsKeyFiguresConfigTemplatePost**](ReportApi.md#restReportsKeyFiguresConfigTemplatePost) | **POST** /rest/reports/key-figures/config/template | Generate key figure config from template class
[**restReportsKeyFiguresConfigTemplatesGet**](ReportApi.md#restReportsKeyFiguresConfigTemplatesGet) | **GET** /rest/reports/key-figures/config/templates | Get key figure templates
[**restReportsKeyFiguresConfigsDelete**](ReportApi.md#restReportsKeyFiguresConfigsDelete) | **DELETE** /rest/reports/key-figures/configs | Delete multiple key figure configurations
[**restReportsKeyFiguresDetailsKeyFigureNameGet**](ReportApi.md#restReportsKeyFiguresDetailsKeyFigureNameGet) | **GET** /rest/reports/key-figures/details/{keyFigureName} | Return key figure calculation details
[**restReportsKeyFiguresGet**](ReportApi.md#restReportsKeyFiguresGet) | **GET** /rest/reports/key-figures | Return list of key figure classes
[**restReportsKeyFiguresResultsPost**](ReportApi.md#restReportsKeyFiguresResultsPost) | **POST** /rest/reports/key-figures/results | Search for key figure calculation results
[**restReportsOrderTypesGet**](ReportApi.md#restReportsOrderTypesGet) | **GET** /rest/reports/order-types | Get order types in string format
[**restReportsRawDataConfigGet**](ReportApi.md#restReportsRawDataConfigGet) | **GET** /rest/reports/raw-data/config | Returns list of all saved configurations
[**restReportsRawDataConfigPut**](ReportApi.md#restReportsRawDataConfigPut) | **PUT** /rest/reports/raw-data/config | Resets all saved raw data configurations with given data
[**restReportsRawDataCreatorsConfigsGet**](ReportApi.md#restReportsRawDataCreatorsConfigsGet) | **GET** /rest/reports/raw-data/creators-configs | Return a list of raw data creators with their configurations
[**restReportsRawDataCreatorsGet**](ReportApi.md#restReportsRawDataCreatorsGet) | **GET** /rest/reports/raw-data/creators | Get list of all raw data creators
[**restReportsRawDataFileGet**](ReportApi.md#restReportsRawDataFileGet) | **GET** /rest/reports/raw-data/file | Get a raw data file from the storage, the storage path of the file must be specified.
[**restReportsRawDataGet**](ReportApi.md#restReportsRawDataGet) | **GET** /rest/reports/raw-data | Get list of raw data files. Valid filter combinations: (dataName), (dataName &amp; processStatus), (createdAtTimestamp)



## restReportsKeyFiguresConfigGet

> \OpenAPI\Client\Model\KeyFigureConfigSearchResult restReportsKeyFiguresConfigGet()

Returns all key figure configs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\KeyFigureConfigSearchResult**](../Model/KeyFigureConfigSearchResult.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restReportsKeyFiguresConfigKeyFigureConfigIdDelete

> object restReportsKeyFiguresConfigKeyFigureConfigIdDelete($key_figure_config_id)

Delete key figure configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_config_id = 56; // int | 

try {
    $result = $apiInstance->restReportsKeyFiguresConfigKeyFigureConfigIdDelete($key_figure_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigKeyFigureConfigIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_figure_config_id** | **int**|  |

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


## restReportsKeyFiguresConfigKeyFigureConfigIdGet

> \OpenAPI\Client\Model\KeyFigureConfig restReportsKeyFiguresConfigKeyFigureConfigIdGet($key_figure_config_id)

Get key figure config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_config_id = 56; // int | 

try {
    $result = $apiInstance->restReportsKeyFiguresConfigKeyFigureConfigIdGet($key_figure_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigKeyFigureConfigIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_figure_config_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\KeyFigureConfig**](../Model/KeyFigureConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restReportsKeyFiguresConfigKeyFigureConfigIdPut

> \OpenAPI\Client\Model\KeyFigureConfig restReportsKeyFiguresConfigKeyFigureConfigIdPut($key_figure_config_id)

Update key figure configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_config_id = 56; // int | 

try {
    $result = $apiInstance->restReportsKeyFiguresConfigKeyFigureConfigIdPut($key_figure_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigKeyFigureConfigIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_figure_config_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\KeyFigureConfig**](../Model/KeyFigureConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restReportsKeyFiguresConfigPost

> \OpenAPI\Client\Model\KeyFigureConfig restReportsKeyFiguresConfigPost()

Add a key figure configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresConfigPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\KeyFigureConfig**](../Model/KeyFigureConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restReportsKeyFiguresConfigTemplatePost

> \OpenAPI\Client\Model\KeyFigureConfig restReportsKeyFiguresConfigTemplatePost($key_figure_class)

Generate key figure config from template class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_class = 'key_figure_class_example'; // string | Template class name

try {
    $result = $apiInstance->restReportsKeyFiguresConfigTemplatePost($key_figure_class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigTemplatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_figure_class** | **string**| Template class name |

### Return type

[**\OpenAPI\Client\Model\KeyFigureConfig**](../Model/KeyFigureConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restReportsKeyFiguresConfigTemplatesGet

> object[] restReportsKeyFiguresConfigTemplatesGet()

Get key figure templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresConfigTemplatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigTemplatesGet: ', $e->getMessage(), PHP_EOL;
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


## restReportsKeyFiguresConfigsDelete

> object restReportsKeyFiguresConfigsDelete()

Delete multiple key figure configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresConfigsDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigsDelete: ', $e->getMessage(), PHP_EOL;
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


## restReportsKeyFiguresDetailsKeyFigureNameGet

> \OpenAPI\Client\Model\KeyFigure restReportsKeyFiguresDetailsKeyFigureNameGet($key_figure_name)

Return key figure calculation details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_name = 56; // int | 

try {
    $result = $apiInstance->restReportsKeyFiguresDetailsKeyFigureNameGet($key_figure_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresDetailsKeyFigureNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_figure_name** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\KeyFigure**](../Model/KeyFigure.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restReportsKeyFiguresGet

> object[] restReportsKeyFiguresGet()

Return list of key figure classes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresGet: ', $e->getMessage(), PHP_EOL;
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


## restReportsKeyFiguresResultsPost

> object restReportsKeyFiguresResultsPost()

Search for key figure calculation results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresResultsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresResultsPost: ', $e->getMessage(), PHP_EOL;
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


## restReportsOrderTypesGet

> object[] restReportsOrderTypesGet()

Get order types in string format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsOrderTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsOrderTypesGet: ', $e->getMessage(), PHP_EOL;
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


## restReportsRawDataConfigGet

> \OpenAPI\Client\Model\RawDataConfigs restReportsRawDataConfigGet()

Returns list of all saved configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsRawDataConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RawDataConfigs**](../Model/RawDataConfigs.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restReportsRawDataConfigPut

> \OpenAPI\Client\Model\RawDataConfigs restReportsRawDataConfigPut($configs)

Resets all saved raw data configurations with given data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configs = 56; // int | Resets all saved raw data configurations with given configs

try {
    $result = $apiInstance->restReportsRawDataConfigPut($configs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataConfigPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configs** | **int**| Resets all saved raw data configurations with given configs |

### Return type

[**\OpenAPI\Client\Model\RawDataConfigs**](../Model/RawDataConfigs.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restReportsRawDataCreatorsConfigsGet

> object restReportsRawDataCreatorsConfigsGet()

Return a list of raw data creators with their configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsRawDataCreatorsConfigsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataCreatorsConfigsGet: ', $e->getMessage(), PHP_EOL;
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


## restReportsRawDataCreatorsGet

> object[] restReportsRawDataCreatorsGet()

Get list of all raw data creators

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsRawDataCreatorsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataCreatorsGet: ', $e->getMessage(), PHP_EOL;
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


## restReportsRawDataFileGet

> object restReportsRawDataFileGet($path)

Get a raw data file from the storage, the storage path of the file must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | The raw data file path

try {
    $result = $apiInstance->restReportsRawDataFileGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataFileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The raw data file path |

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


## restReportsRawDataGet

> \OpenAPI\Client\Model\RawDataSearchResult restReportsRawDataGet($data_name, $process_status, $created_at_timestamp, $items_per_page, $sort_order, $page)

Get list of raw data files. Valid filter combinations: (dataName), (dataName & processStatus), (createdAtTimestamp)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_name = 'data_name_example'; // string | Filter that restricts the search result to raw data files e.g. orders,orderItems.
$process_status = 'process_status_example'; // string | Current process status, the status is only changed by internal processing. If this filter is used, the filter dataNames may only contain one value.
$created_at_timestamp = 56; // int | Timestamp from when daily generated raw data are to be filtered. This filter cannot be combined with the following filters: dataNames, processStatus
$items_per_page = 56; // int | The number of raw data files to be returned. The default number of files is 20 and the maximum is 100.
$sort_order = 'sort_order_example'; // string | Defines the sort order, possible values are: asc, desc
$page = 56; // int | Page

try {
    $result = $apiInstance->restReportsRawDataGet($data_name, $process_status, $created_at_timestamp, $items_per_page, $sort_order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_name** | **string**| Filter that restricts the search result to raw data files e.g. orders,orderItems. | [optional]
 **process_status** | **string**| Current process status, the status is only changed by internal processing. If this filter is used, the filter dataNames may only contain one value. | [optional]
 **created_at_timestamp** | **int**| Timestamp from when daily generated raw data are to be filtered. This filter cannot be combined with the following filters: dataNames, processStatus | [optional]
 **items_per_page** | **int**| The number of raw data files to be returned. The default number of files is 20 and the maximum is 100. | [optional]
 **sort_order** | **string**| Defines the sort order, possible values are: asc, desc | [optional]
 **page** | **int**| Page | [optional]

### Return type

[**\OpenAPI\Client\Model\RawDataSearchResult**](../Model/RawDataSearchResult.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

