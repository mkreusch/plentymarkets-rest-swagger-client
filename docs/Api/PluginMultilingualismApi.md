# OpenAPI\Client\PluginMultilingualismApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restLanguagesTranslationsPost**](PluginMultilingualismApi.md#restLanguagesTranslationsPost) | **POST** /rest/languages/translations | Create a new translation
[**restLanguagesTranslationsTranslationIdDelete**](PluginMultilingualismApi.md#restLanguagesTranslationsTranslationIdDelete) | **DELETE** /rest/languages/translations/{translationId} | Delete a translation
[**restLanguagesTranslationsTranslationIdGet**](PluginMultilingualismApi.md#restLanguagesTranslationsTranslationIdGet) | **GET** /rest/languages/translations/{translationId} | Get a translation
[**restLanguagesTranslationsTranslationIdPut**](PluginMultilingualismApi.md#restLanguagesTranslationsTranslationIdPut) | **PUT** /rest/languages/translations/{translationId} | Update a translation
[**restPluginSetsPluginSetIdLanguagesLanguageCodeDelete**](PluginMultilingualismApi.md#restPluginSetsPluginSetIdLanguagesLanguageCodeDelete) | **DELETE** /rest/plugin_sets/{pluginSetId}/languages/{languageCode} | Delete multiple translation



## restLanguagesTranslationsPost

> \OpenAPI\Client\Model\PluginTranslation restLanguagesTranslationsPost($plugin_set_id, $plugin_name, $language_code, $key, $value, $file_name)

Create a new translation

Creates a new translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginMultilingualismApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int | The ID of the plugin set
$plugin_name = 'plugin_name_example'; // string | The name of the plugin
$language_code = 'language_code_example'; // string | The language code for the translation
$key = 'key_example'; // string | The translation key
$value = 'value_example'; // string | The value of the translation
$file_name = 'file_name_example'; // string | The of the file

try {
    $result = $apiInstance->restLanguagesTranslationsPost($plugin_set_id, $plugin_name, $language_code, $key, $value, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginMultilingualismApi->restLanguagesTranslationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_set_id** | **int**| The ID of the plugin set |
 **plugin_name** | **string**| The name of the plugin |
 **language_code** | **string**| The language code for the translation |
 **key** | **string**| The translation key |
 **value** | **string**| The value of the translation |
 **file_name** | **string**| The of the file |

### Return type

[**\OpenAPI\Client\Model\PluginTranslation**](../Model/PluginTranslation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restLanguagesTranslationsTranslationIdDelete

> restLanguagesTranslationsTranslationIdDelete($translation_id, $translation_id2)

Delete a translation

Deletes a translation. The ID of the translation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginMultilingualismApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$translation_id = 56; // int | The ID of the translation
$translation_id2 = 56; // int | 

try {
    $apiInstance->restLanguagesTranslationsTranslationIdDelete($translation_id, $translation_id2);
} catch (Exception $e) {
    echo 'Exception when calling PluginMultilingualismApi->restLanguagesTranslationsTranslationIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **translation_id** | **int**| The ID of the translation |
 **translation_id2** | **int**|  |

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


## restLanguagesTranslationsTranslationIdGet

> \OpenAPI\Client\Model\PluginTranslation restLanguagesTranslationsTranslationIdGet($id, $translation_id)

Get a translation

Gets a translation. The ID of the translation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginMultilingualismApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the translation
$translation_id = 56; // int | 

try {
    $result = $apiInstance->restLanguagesTranslationsTranslationIdGet($id, $translation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginMultilingualismApi->restLanguagesTranslationsTranslationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the translation |
 **translation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PluginTranslation**](../Model/PluginTranslation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restLanguagesTranslationsTranslationIdPut

> \OpenAPI\Client\Model\PluginTranslation restLanguagesTranslationsTranslationIdPut($id, $plugin_set_id, $plugin_name, $language_code, $key, $value, $file_name, $translation_id)

Update a translation

Updates a translation. The ID of the translation must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginMultilingualismApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the translation
$plugin_set_id = 56; // int | The ID of the plugin set
$plugin_name = 'plugin_name_example'; // string | The name of the plugin
$language_code = 'language_code_example'; // string | The language code for the translation
$key = 'key_example'; // string | The translation key
$value = 'value_example'; // string | The value of the translation
$file_name = 'file_name_example'; // string | The value of the translation
$translation_id = 56; // int | 

try {
    $result = $apiInstance->restLanguagesTranslationsTranslationIdPut($id, $plugin_set_id, $plugin_name, $language_code, $key, $value, $file_name, $translation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginMultilingualismApi->restLanguagesTranslationsTranslationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the translation |
 **plugin_set_id** | **int**| The ID of the plugin set |
 **plugin_name** | **string**| The name of the plugin |
 **language_code** | **string**| The language code for the translation |
 **key** | **string**| The translation key |
 **value** | **string**| The value of the translation |
 **file_name** | **string**| The value of the translation |
 **translation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PluginTranslation**](../Model/PluginTranslation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPluginSetsPluginSetIdLanguagesLanguageCodeDelete

> restPluginSetsPluginSetIdLanguagesLanguageCodeDelete($plugin_set_id, $language_code, $plugin_set_id2, $language_code2)

Delete multiple translation

Deletes multiple translation. The pluginSetId and languageCode must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PluginMultilingualismApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int | The ID of the plugin set
$language_code = 'language_code_example'; // string | The code of the language
$plugin_set_id2 = 56; // int | 
$language_code2 = 56; // int | 

try {
    $apiInstance->restPluginSetsPluginSetIdLanguagesLanguageCodeDelete($plugin_set_id, $language_code, $plugin_set_id2, $language_code2);
} catch (Exception $e) {
    echo 'Exception when calling PluginMultilingualismApi->restPluginSetsPluginSetIdLanguagesLanguageCodeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_set_id** | **int**| The ID of the plugin set |
 **language_code** | **string**| The code of the language |
 **plugin_set_id2** | **int**|  |
 **language_code2** | **int**|  |

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

