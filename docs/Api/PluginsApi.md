# OpenAPI\Client\PluginsApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restPluginsGet**](PluginsApi.md#restPluginsGet) | **GET** /rest/plugins | List plugins
[**restPluginsMailPost**](PluginsApi.md#restPluginsMailPost) | **POST** /rest/plugins_mail | Send mail
[**restPluginsPluginIdDelete**](PluginsApi.md#restPluginsPluginIdDelete) | **DELETE** /rest/plugins/{pluginId} | Delete a plugin
[**restPluginsPluginIdGet**](PluginsApi.md#restPluginsPluginIdGet) | **GET** /rest/plugins/{pluginId} | Get a plugin
[**restPluginsPluginIdPluginSetsPluginSetIdDelete**](PluginsApi.md#restPluginsPluginIdPluginSetsPluginSetIdDelete) | **DELETE** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId} | Delete a plugin
[**restPluginsPluginIdPut**](PluginsApi.md#restPluginsPluginIdPut) | **PUT** /rest/plugins/{pluginId} | Update a plugin
[**restPluginsPost**](PluginsApi.md#restPluginsPost) | **POST** /rest/plugins | Create a plugin
[**restPluginsSearchGet**](PluginsApi.md#restPluginsSearchGet) | **GET** /rest/plugins/search | List plugins
[**restPluginsSeoSitemapGet**](PluginsApi.md#restPluginsSeoSitemapGet) | **GET** /rest/plugins/seo/sitemap | Load sitemap patterns
[**restPluginsUiGet**](PluginsApi.md#restPluginsUiGet) | **GET** /rest/plugins/ui | List plugins for backend UI



## restPluginsGet

> \OpenAPI\Client\Model\Plugin[] restPluginsGet()

List plugins

Lists all plugins saved in the inbox folder. Plugins that have not been provisioned to Stage or Productive will also be shown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPluginsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Plugin[]**](../Model/Plugin.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPluginsMailPost

> object[] restPluginsMailPost()

Send mail

Send mail from booted plugins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restPluginsMailPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsMailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPluginsPluginIdDelete

> restPluginsPluginIdDelete($plugin_id)

Delete a plugin

Deletes a plugin. This call also deletes all plugin files in the inbox folder! To commit the deletion, the plugin must be provisioned in Stage or Productive. The ID of the plugin must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int | 

try {
    $apiInstance->restPluginsPluginIdDelete($plugin_id);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsPluginIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_id** | **int**|  |

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


## restPluginsPluginIdGet

> \OpenAPI\Client\Model\Plugin restPluginsPluginIdGet($plugin_id)

Get a plugin

Gets a plugin. The ID of the plugin must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int | 

try {
    $result = $apiInstance->restPluginsPluginIdGet($plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsPluginIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Plugin**](../Model/Plugin.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPluginsPluginIdPluginSetsPluginSetIdDelete

> restPluginsPluginIdPluginSetsPluginSetIdDelete($plugin_id, $plugin_set_id)

Delete a plugin

Deletes a plugin. This call also deletes all plugin files in the inbox folder! To commit the deletion, the plugin must be provisioned in Stage or Productive. The ID of the plugin must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int | 
$plugin_set_id = 56; // int | 

try {
    $apiInstance->restPluginsPluginIdPluginSetsPluginSetIdDelete($plugin_id, $plugin_set_id);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsPluginIdPluginSetsPluginSetIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_id** | **int**|  |
 **plugin_set_id** | **int**|  |

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


## restPluginsPluginIdPut

> \OpenAPI\Client\Model\Plugin restPluginsPluginIdPut($plugin_id, $_rest_plugins_plugin_id)

Update a plugin

Updates a plugin. The plugin position can be changed. The plugin can be activated or deactivated for Stage or Productive. The plugin can be activated or deactivated for online stores. The ID of the plugin must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int | 
$_rest_plugins_plugin_id = new \OpenAPI\Client\Model\InlineObject211(); // \OpenAPI\Client\Model\InlineObject211 | 

try {
    $result = $apiInstance->restPluginsPluginIdPut($plugin_id, $_rest_plugins_plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsPluginIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_id** | **int**|  |
 **_rest_plugins_plugin_id** | [**\OpenAPI\Client\Model\InlineObject211**](../Model/InlineObject211.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Plugin**](../Model/Plugin.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPluginsPost

> \OpenAPI\Client\Model\Plugin restPluginsPost($_rest_plugins)

Create a plugin

Creates a plugin with empty plugin folders and a plugin.json file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_plugins = new \OpenAPI\Client\Model\InlineObject210(); // \OpenAPI\Client\Model\InlineObject210 | 

try {
    $result = $apiInstance->restPluginsPost($_rest_plugins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_plugins** | [**\OpenAPI\Client\Model\InlineObject210**](../Model/InlineObject210.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Plugin**](../Model/Plugin.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPluginsSearchGet

> \OpenAPI\Client\Model\InlineResponse20051 restPluginsSearchGet($name, $type, $webstore_id, $page, $items_per_page)

List plugins

Lists all plugins saved in the inbox folder. Plugins that have not been provisioned to Stage or Productive will also be shown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the plugin
$type = 'type_example'; // string | The type of the plugin (template, theme, etc.)
$webstore_id = 56; // int | The ID of the client (store)
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page

try {
    $result = $apiInstance->restPluginsSearchGet($name, $type, $webstore_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the plugin | [optional]
 **type** | **string**| The type of the plugin (template, theme, etc.) | [optional]
 **webstore_id** | **int**| The ID of the client (store) | [optional]
 **page** | **int**| The page of results to search for | [optional]
 **items_per_page** | **int**| The number of items to list per page | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPluginsSeoSitemapGet

> object[] restPluginsSeoSitemapGet()

Load sitemap patterns

Loads all given sitemap patterns from booted plugins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restPluginsSeoSitemapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsSeoSitemapGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPluginsUiGet

> \OpenAPI\Client\Model\Plugin[] restPluginsUiGet()

List plugins for backend UI

Lists all plugins provisioned in Stage or Productive that contain a plugin.js file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPluginsUiGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->restPluginsUiGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Plugin[]**](../Model/Plugin.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

