# OpenAPI\Client\ConfigurationApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet**](ConfigurationApi.md#restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet) | **GET** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId}/configuration_layout | 
[**restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet**](ConfigurationApi.md#restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet) | **GET** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId}/configurations | 
[**restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut**](ConfigurationApi.md#restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut) | **PUT** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId}/configurations | 
[**restPluginsPluginSetsPluginSetIdConfigurationsExportGet**](ConfigurationApi.md#restPluginsPluginSetsPluginSetIdConfigurationsExportGet) | **GET** /rest/plugins/plugin_sets/{pluginSetId}/configurations/export | 
[**restPluginsPluginSetsPluginSetIdConfigurationsImportPost**](ConfigurationApi.md#restPluginsPluginSetsPluginSetIdConfigurationsImportPost) | **POST** /rest/plugins/plugin_sets/{pluginSetId}/configurations/import | 



## restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet

> object restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet($plugin_id, $plugin_set_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int | 
$plugin_set_id = 56; // int | 

try {
    $result = $apiInstance->restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet($plugin_id, $plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_id** | **int**|  |
 **plugin_set_id** | **int**|  |

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


## restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet

> \OpenAPI\Client\Model\Configuration[] restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet($plugin_id, $plugin_set_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int | 
$plugin_set_id = 56; // int | 

try {
    $result = $apiInstance->restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet($plugin_id, $plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_id** | **int**|  |
 **plugin_set_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Configuration[]**](../Model/Configuration.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut

> object restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut($plugin_id, $plugin_set_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int | 
$plugin_set_id = 56; // int | 

try {
    $result = $apiInstance->restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut($plugin_id, $plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_id** | **int**|  |
 **plugin_set_id** | **int**|  |

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


## restPluginsPluginSetsPluginSetIdConfigurationsExportGet

> object restPluginsPluginSetsPluginSetIdConfigurationsExportGet($plugin_set_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int | 

try {
    $result = $apiInstance->restPluginsPluginSetsPluginSetIdConfigurationsExportGet($plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginSetsPluginSetIdConfigurationsExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_set_id** | **int**|  |

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


## restPluginsPluginSetsPluginSetIdConfigurationsImportPost

> object restPluginsPluginSetsPluginSetIdConfigurationsImportPost($plugin_set_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int | 

try {
    $result = $apiInstance->restPluginsPluginSetsPluginSetIdConfigurationsImportPost($plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginSetsPluginSetIdConfigurationsImportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_set_id** | **int**|  |

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

