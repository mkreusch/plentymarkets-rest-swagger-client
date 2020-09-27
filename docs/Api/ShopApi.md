# OpenAPI\Client\ShopApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restShopBuilderContentLinksContentLinkIdDelete**](ShopApi.md#restShopBuilderContentLinksContentLinkIdDelete) | **DELETE** /rest/shop_builder/content_links/{contentLinkId} | Delete a content link.
[**restShopBuilderContentLinksContentLinkIdGet**](ShopApi.md#restShopBuilderContentLinksContentLinkIdGet) | **GET** /rest/shop_builder/content_links/{contentLinkId} | Find a content link by id.
[**restShopBuilderContentLinksContentLinkIdPreviewUrlGet**](ShopApi.md#restShopBuilderContentLinksContentLinkIdPreviewUrlGet) | **GET** /rest/shop_builder/content_links/{contentLinkId}/preview_url | Generate a preview link for a contentLink.
[**restShopBuilderContentLinksContentLinkIdPut**](ShopApi.md#restShopBuilderContentLinksContentLinkIdPut) | **PUT** /rest/shop_builder/content_links/{contentLinkId} | Update a content link.
[**restShopBuilderContentLinksGet**](ShopApi.md#restShopBuilderContentLinksGet) | **GET** /rest/shop_builder/content_links | List all content links for a given plugin set
[**restShopBuilderContentLinksPost**](ShopApi.md#restShopBuilderContentLinksPost) | **POST** /rest/shop_builder/content_links | Link a content to a layout container of a frontend plugin.
[**restShopBuilderContentsContentIdDelete**](ShopApi.md#restShopBuilderContentsContentIdDelete) | **DELETE** /rest/shop_builder/contents/{contentId} | Delete a content
[**restShopBuilderContentsContentIdGet**](ShopApi.md#restShopBuilderContentsContentIdGet) | **GET** /rest/shop_builder/contents/{contentId} | Find a content by id.
[**restShopBuilderContentsContentIdOptions**](ShopApi.md#restShopBuilderContentsContentIdOptions) | **OPTIONS** /rest/shop_builder/contents/{contentId} | Get cross origin headers.
[**restShopBuilderContentsContentIdPost**](ShopApi.md#restShopBuilderContentsContentIdPost) | **POST** /rest/shop_builder/contents/{contentId} | Duplicate a content by id.
[**restShopBuilderContentsContentIdPut**](ShopApi.md#restShopBuilderContentsContentIdPut) | **PUT** /rest/shop_builder/contents/{contentId} | Update a content.
[**restShopBuilderContentsGet**](ShopApi.md#restShopBuilderContentsGet) | **GET** /rest/shop_builder/contents | List all contents.
[**restShopBuilderContentsPost**](ShopApi.md#restShopBuilderContentsPost) | **POST** /rest/shop_builder/contents | Create new content.
[**restShopBuilderContentsPut**](ShopApi.md#restShopBuilderContentsPut) | **PUT** /rest/shop_builder/contents | Generate templates for all contents.
[**restShopBuilderContentsSearchGet**](ShopApi.md#restShopBuilderContentsSearchGet) | **GET** /rest/shop_builder/contents/search | Search for contents.
[**restShopBuilderPagesGet**](ShopApi.md#restShopBuilderPagesGet) | **GET** /rest/shop_builder/pages | List content pages
[**restShopBuilderWidgetsGet**](ShopApi.md#restShopBuilderWidgetsGet) | **GET** /rest/shop_builder/widgets | List all widgets
[**restShopBuilderWidgetsOptions**](ShopApi.md#restShopBuilderWidgetsOptions) | **OPTIONS** /rest/shop_builder/widgets | Get cross origin headers.
[**restShopBuilderWidgetsPost**](ShopApi.md#restShopBuilderWidgetsPost) | **POST** /rest/shop_builder/widgets | Render the preview for widgets



## restShopBuilderContentLinksContentLinkIdDelete

> restShopBuilderContentLinksContentLinkIdDelete($content_link_id)

Delete a content link.

Delete a content link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_link_id = 56; // int | 

try {
    $apiInstance->restShopBuilderContentLinksContentLinkIdDelete($content_link_id);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentLinksContentLinkIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_link_id** | **int**|  |

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


## restShopBuilderContentLinksContentLinkIdGet

> \OpenAPI\Client\Model\ContentLink restShopBuilderContentLinksContentLinkIdGet($content_link_id)

Find a content link by id.

Find a content link by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_link_id = 56; // int | 

try {
    $result = $apiInstance->restShopBuilderContentLinksContentLinkIdGet($content_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentLinksContentLinkIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_link_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ContentLink**](../Model/ContentLink.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderContentLinksContentLinkIdPreviewUrlGet

> object[] restShopBuilderContentLinksContentLinkIdPreviewUrlGet($content_link_id)

Generate a preview link for a contentLink.

Generate a preview link for a contentLink

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_link_id = 56; // int | 

try {
    $result = $apiInstance->restShopBuilderContentLinksContentLinkIdPreviewUrlGet($content_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentLinksContentLinkIdPreviewUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_link_id** | **int**|  |

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


## restShopBuilderContentLinksContentLinkIdPut

> \OpenAPI\Client\Model\ContentLink restShopBuilderContentLinksContentLinkIdPut($content_link_id, $_rest_shop_builder_content_links_content_link_id)

Update a content link.

Update a content link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_link_id = 56; // int | 
$_rest_shop_builder_content_links_content_link_id = new \OpenAPI\Client\Model\InlineObject232(); // \OpenAPI\Client\Model\InlineObject232 | 

try {
    $result = $apiInstance->restShopBuilderContentLinksContentLinkIdPut($content_link_id, $_rest_shop_builder_content_links_content_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentLinksContentLinkIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_link_id** | **int**|  |
 **_rest_shop_builder_content_links_content_link_id** | [**\OpenAPI\Client\Model\InlineObject232**](../Model/InlineObject232.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ContentLink**](../Model/ContentLink.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderContentLinksGet

> \OpenAPI\Client\Model\ContentLink[] restShopBuilderContentLinksGet()

List all content links for a given plugin set

List all content links for a given plugin set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restShopBuilderContentLinksGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentLinksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ContentLink[]**](../Model/ContentLink.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderContentLinksPost

> \OpenAPI\Client\Model\ContentLink restShopBuilderContentLinksPost($_rest_shop_builder_content_links)

Link a content to a layout container of a frontend plugin.

Link a content to a layout container of a frontend plugin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_shop_builder_content_links = new \OpenAPI\Client\Model\InlineObject231(); // \OpenAPI\Client\Model\InlineObject231 | 

try {
    $result = $apiInstance->restShopBuilderContentLinksPost($_rest_shop_builder_content_links);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentLinksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_shop_builder_content_links** | [**\OpenAPI\Client\Model\InlineObject231**](../Model/InlineObject231.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ContentLink**](../Model/ContentLink.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderContentsContentIdDelete

> restShopBuilderContentsContentIdDelete($content_id)

Delete a content

Deletes a ShopBuilder content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_id = 56; // int | 

try {
    $apiInstance->restShopBuilderContentsContentIdDelete($content_id);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentsContentIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **int**|  |

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


## restShopBuilderContentsContentIdGet

> \OpenAPI\Client\Model\Content restShopBuilderContentsContentIdGet($content_id)

Find a content by id.

Finds a ShopBuilder content by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_id = 56; // int | 

try {
    $result = $apiInstance->restShopBuilderContentsContentIdGet($content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentsContentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Content**](../Model/Content.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderContentsContentIdOptions

> object restShopBuilderContentsContentIdOptions($content_id)

Get cross origin headers.

Get cross origin headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_id = 56; // int | 

try {
    $result = $apiInstance->restShopBuilderContentsContentIdOptions($content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentsContentIdOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **int**|  |

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


## restShopBuilderContentsContentIdPost

> \OpenAPI\Client\Model\Content restShopBuilderContentsContentIdPost($content_id)

Duplicate a content by id.

Duplicates a ShopBuilder content by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_id = 56; // int | 

try {
    $result = $apiInstance->restShopBuilderContentsContentIdPost($content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentsContentIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Content**](../Model/Content.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderContentsContentIdPut

> \OpenAPI\Client\Model\Content restShopBuilderContentsContentIdPut($content_id, $frontend_lang, $_rest_shop_builder_contents_content_id)

Update a content.

Updates a ShopBuilder content. If not data are provided, content will be rebuilt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_id = 56; // int | 
$frontend_lang = 'frontend_lang_example'; // string | Language to be used when rendering frontend widgets.
$_rest_shop_builder_contents_content_id = new \OpenAPI\Client\Model\InlineObject234(); // \OpenAPI\Client\Model\InlineObject234 | 

try {
    $result = $apiInstance->restShopBuilderContentsContentIdPut($content_id, $frontend_lang, $_rest_shop_builder_contents_content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentsContentIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **int**|  |
 **frontend_lang** | **string**| Language to be used when rendering frontend widgets. | [optional]
 **_rest_shop_builder_contents_content_id** | [**\OpenAPI\Client\Model\InlineObject234**](../Model/InlineObject234.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Content**](../Model/Content.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderContentsGet

> \OpenAPI\Client\Model\Content[] restShopBuilderContentsGet()

List all contents.

Lists all available ShopBuilder contents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restShopBuilderContentsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Content[]**](../Model/Content.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderContentsPost

> \OpenAPI\Client\Model\Content restShopBuilderContentsPost($frontend_lang, $_rest_shop_builder_contents)

Create new content.

Creates a new ShopBuilder content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$frontend_lang = 'frontend_lang_example'; // string | Language to be used when rendering frontend widgets.
$_rest_shop_builder_contents = new \OpenAPI\Client\Model\InlineObject233(); // \OpenAPI\Client\Model\InlineObject233 | 

try {
    $result = $apiInstance->restShopBuilderContentsPost($frontend_lang, $_rest_shop_builder_contents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **frontend_lang** | **string**| Language to be used when rendering frontend widgets. | [optional]
 **_rest_shop_builder_contents** | [**\OpenAPI\Client\Model\InlineObject233**](../Model/InlineObject233.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Content**](../Model/Content.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderContentsPut

> object restShopBuilderContentsPut()

Generate templates for all contents.

Re-generates the templates for all ShopBuilder contents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restShopBuilderContentsPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentsPut: ', $e->getMessage(), PHP_EOL;
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


## restShopBuilderContentsSearchGet

> \OpenAPI\Client\Model\InlineResponse2005 restShopBuilderContentsSearchGet($page, $items_per_page, $data_provider_name, $type, $container_name, $plugin_set_id, $language, $active)

Search for contents.

Searches for specific contents based on the provided parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page
$data_provider_name = 'data_provider_name_example'; // string | Name of the content
$type = 'type_example'; // string | Type of the content
$container_name = 'container_name_example'; // string | Name of the linked container
$plugin_set_id = 56; // int | Id of the linked plugin set
$language = 'language_example'; // string | Language of the content link
$active = 56; // int | Active state of the content link

try {
    $result = $apiInstance->restShopBuilderContentsSearchGet($page, $items_per_page, $data_provider_name, $type, $container_name, $plugin_set_id, $language, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderContentsSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page of results to search for | [optional]
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **data_provider_name** | **string**| Name of the content | [optional]
 **type** | **string**| Type of the content | [optional]
 **container_name** | **string**| Name of the linked container | [optional]
 **plugin_set_id** | **int**| Id of the linked plugin set | [optional]
 **language** | **string**| Language of the content link | [optional]
 **active** | **int**| Active state of the content link | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderPagesGet

> \OpenAPI\Client\Model\ContentPage[] restShopBuilderPagesGet()

List content pages

List content pages from all plugins in a given plugin set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restShopBuilderPagesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderPagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ContentPage[]**](../Model/ContentPage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restShopBuilderWidgetsGet

> object restShopBuilderWidgetsGet($identifier)

List all widgets

List all widgets provided by all frontend plugins of a given plugin set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Filter results by widget identifier.

try {
    $result = $apiInstance->restShopBuilderWidgetsGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderWidgetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Filter results by widget identifier. | [optional]

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


## restShopBuilderWidgetsOptions

> object restShopBuilderWidgetsOptions()

Get cross origin headers.

Get cross origin headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restShopBuilderWidgetsOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderWidgetsOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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


## restShopBuilderWidgetsPost

> object restShopBuilderWidgetsPost($frontend_lang)

Render the preview for widgets

Render the preview for widgets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$frontend_lang = 'frontend_lang_example'; // string | Language to be used when rendering frontend widgets.

try {
    $result = $apiInstance->restShopBuilderWidgetsPost($frontend_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->restShopBuilderWidgetsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **frontend_lang** | **string**| Language to be used when rendering frontend widgets. | [optional]

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

