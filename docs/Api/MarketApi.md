# OpenAPI\Client\MarketApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restMarketsCredentialsCredentialsIdDelete**](MarketApi.md#restMarketsCredentialsCredentialsIdDelete) | **DELETE** /rest/markets/credentials/{credentialsId} | Delete a credential
[**restMarketsCredentialsCredentialsIdGet**](MarketApi.md#restMarketsCredentialsCredentialsIdGet) | **GET** /rest/markets/credentials/{credentialsId} | Get a credential
[**restMarketsCredentialsCredentialsIdPut**](MarketApi.md#restMarketsCredentialsCredentialsIdPut) | **PUT** /rest/markets/credentials/{credentialsId} | Update a credential
[**restMarketsCredentialsGet**](MarketApi.md#restMarketsCredentialsGet) | **GET** /rest/markets/credentials | List credentials
[**restMarketsCredentialsPost**](MarketApi.md#restMarketsCredentialsPost) | **POST** /rest/markets/credentials | Create a credential
[**restMarketsEbayAuthLoginGet**](MarketApi.md#restMarketsEbayAuthLoginGet) | **GET** /rest/markets/ebay/auth/login | Get the login URL.
[**restMarketsEbayAuthRefreshTokenPut**](MarketApi.md#restMarketsEbayAuthRefreshTokenPut) | **PUT** /rest/markets/ebay/auth/refresh-token | Refresh an expired access token.
[**restMarketsEbayCategoriesGet**](MarketApi.md#restMarketsEbayCategoriesGet) | **GET** /rest/markets/ebay/categories | List categories
[**restMarketsEbayCategoriesIdGet**](MarketApi.md#restMarketsEbayCategoriesIdGet) | **GET** /rest/markets/ebay/categories/{id} | Get category
[**restMarketsEbayFulfillmentPoliciesIdGet**](MarketApi.md#restMarketsEbayFulfillmentPoliciesIdGet) | **GET** /rest/markets/ebay/fulfillment_policies/{id} | Get fulfillment policy
[**restMarketsEbayItemSpecificsGet**](MarketApi.md#restMarketsEbayItemSpecificsGet) | **GET** /rest/markets/ebay/item_specifics | List item specifics
[**restMarketsEbayMarketplacesGet**](MarketApi.md#restMarketsEbayMarketplacesGet) | **GET** /rest/markets/ebay/marketplaces | Get all eBay marketplaces.
[**restMarketsEbayPartsFitmentsFitmentIdDelete**](MarketApi.md#restMarketsEbayPartsFitmentsFitmentIdDelete) | **DELETE** /rest/markets/ebay/parts-fitments/{fitmentId} | Delete a fitment.
[**restMarketsEbayPartsFitmentsFitmentIdGet**](MarketApi.md#restMarketsEbayPartsFitmentsFitmentIdGet) | **GET** /rest/markets/ebay/parts-fitments/{fitmentId} | Get a fitment
[**restMarketsEbayPartsFitmentsFitmentIdPut**](MarketApi.md#restMarketsEbayPartsFitmentsFitmentIdPut) | **PUT** /rest/markets/ebay/parts-fitments/{fitmentId} | Update fitment.
[**restMarketsEbayPartsFitmentsGet**](MarketApi.md#restMarketsEbayPartsFitmentsGet) | **GET** /rest/markets/ebay/parts-fitments | List fitments
[**restMarketsEbayPartsFitmentsPost**](MarketApi.md#restMarketsEbayPartsFitmentsPost) | **POST** /rest/markets/ebay/parts-fitments | Create a fitment
[**restMarketsEbayPartsFitmentsSearchGet**](MarketApi.md#restMarketsEbayPartsFitmentsSearchGet) | **GET** /rest/markets/ebay/parts-fitments/search | Search fitments
[**restMarketsEbayPaymentPoliciesIdGet**](MarketApi.md#restMarketsEbayPaymentPoliciesIdGet) | **GET** /rest/markets/ebay/payment_policies/{id} | Get payment policy
[**restMarketsEbayReturnPoliciesIdGet**](MarketApi.md#restMarketsEbayReturnPoliciesIdGet) | **GET** /rest/markets/ebay/return_policies/{id} | Get return policy
[**restMarketsEbayShopCategoriesGet**](MarketApi.md#restMarketsEbayShopCategoriesGet) | **GET** /rest/markets/ebay/shop_categories | List all eBay shop categories
[**restMarketsListingsMarketplacesGet**](MarketApi.md#restMarketsListingsMarketplacesGet) | **GET** /rest/markets/listings/marketplaces | Get all listing marketplaces.
[**restMarketsSettingsBulkPost**](MarketApi.md#restMarketsSettingsBulkPost) | **POST** /rest/markets/settings/bulk | Create market settings
[**restMarketsSettingsBulkPut**](MarketApi.md#restMarketsSettingsBulkPut) | **PUT** /rest/markets/settings/bulk | Update market settings
[**restMarketsSettingsCorrelationsBulkPost**](MarketApi.md#restMarketsSettingsCorrelationsBulkPost) | **POST** /rest/markets/settings/correlations/bulk | Create multiple correlations
[**restMarketsSettingsCorrelationsGet**](MarketApi.md#restMarketsSettingsCorrelationsGet) | **GET** /rest/markets/settings/correlations | List correlation
[**restMarketsSettingsCorrelationsPost**](MarketApi.md#restMarketsSettingsCorrelationsPost) | **POST** /rest/markets/settings/correlations | Create a correlation
[**restMarketsSettingsGet**](MarketApi.md#restMarketsSettingsGet) | **GET** /rest/markets/settings | List market settings
[**restMarketsSettingsPost**](MarketApi.md#restMarketsSettingsPost) | **POST** /rest/markets/settings | Create market settings
[**restMarketsSettingsSettingIdDelete**](MarketApi.md#restMarketsSettingsSettingIdDelete) | **DELETE** /rest/markets/settings/{settingId} | Delete market settings
[**restMarketsSettingsSettingIdGet**](MarketApi.md#restMarketsSettingsSettingIdGet) | **GET** /rest/markets/settings/{settingId} | Get market settings
[**restMarketsSettingsSettingIdPut**](MarketApi.md#restMarketsSettingsSettingIdPut) | **PUT** /rest/markets/settings/{settingId} | Update market settings



## restMarketsCredentialsCredentialsIdDelete

> object restMarketsCredentialsCredentialsIdDelete($id, $credentials_id)

Delete a credential

Deletes a credential by given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the credentials to be deleted.
$credentials_id = 56; // int | 

try {
    $result = $apiInstance->restMarketsCredentialsCredentialsIdDelete($id, $credentials_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsCredentialsCredentialsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the credentials to be deleted. |
 **credentials_id** | **int**|  |

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


## restMarketsCredentialsCredentialsIdGet

> \OpenAPI\Client\Model\Credentials restMarketsCredentialsCredentialsIdGet($id, $credentials_id)

Get a credential

Gets a credential by given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the credentials to be found.
$credentials_id = 56; // int | 

try {
    $result = $apiInstance->restMarketsCredentialsCredentialsIdGet($id, $credentials_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsCredentialsCredentialsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the credentials to be found. |
 **credentials_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Credentials**](../Model/Credentials.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsCredentialsCredentialsIdPut

> \OpenAPI\Client\Model\Credentials restMarketsCredentialsCredentialsIdPut($credentials_id, $_rest_markets_credentials_credentials_id)

Update a credential

Update a credential with the given data and ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentials_id = 56; // int | 
$_rest_markets_credentials_credentials_id = new \OpenAPI\Client\Model\InlineObject157(); // \OpenAPI\Client\Model\InlineObject157 | 

try {
    $result = $apiInstance->restMarketsCredentialsCredentialsIdPut($credentials_id, $_rest_markets_credentials_credentials_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsCredentialsCredentialsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials_id** | **int**|  |
 **_rest_markets_credentials_credentials_id** | [**\OpenAPI\Client\Model\InlineObject157**](../Model/InlineObject157.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Credentials**](../Model/Credentials.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsCredentialsGet

> \OpenAPI\Client\Model\InlineResponse20034 restMarketsCredentialsGet($page, $items_per_page)

List credentials

Lists credentials by filter options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The items per page to search for

try {
    $result = $apiInstance->restMarketsCredentialsGet($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsCredentialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page of results to search for |
 **items_per_page** | **int**| The items per page to search for |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsCredentialsPost

> \OpenAPI\Client\Model\Credentials restMarketsCredentialsPost($_rest_markets_credentials)

Create a credential

Create a new credential with the given data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_markets_credentials = new \OpenAPI\Client\Model\InlineObject156(); // \OpenAPI\Client\Model\InlineObject156 | 

try {
    $result = $apiInstance->restMarketsCredentialsPost($_rest_markets_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsCredentialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_markets_credentials** | [**\OpenAPI\Client\Model\InlineObject156**](../Model/InlineObject156.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Credentials**](../Model/Credentials.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayAuthLoginGet

> object restMarketsEbayAuthLoginGet()

Get the login URL.

Generates the eBay login URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restMarketsEbayAuthLoginGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayAuthLoginGet: ', $e->getMessage(), PHP_EOL;
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


## restMarketsEbayAuthRefreshTokenPut

> object restMarketsEbayAuthRefreshTokenPut()

Refresh an expired access token.

Refreshes the expired eBay access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restMarketsEbayAuthRefreshTokenPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayAuthRefreshTokenPut: ', $e->getMessage(), PHP_EOL;
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


## restMarketsEbayCategoriesGet

> \OpenAPI\Client\Model\Category[] restMarketsEbayCategoriesGet($marketplace_id, $category_id)

List categories

Lists categories. By passing category ID as filter, only subcategories of that category will be returned. The marketplace ID filter is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | Filter that restricts the search result to categories that belong to the specified marketplace ID.
$category_id = 'category_id_example'; // string | Filter that restricts the search result to categories that belong to the specified category ID.

try {
    $result = $apiInstance->restMarketsEbayCategoriesGet($marketplace_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| Filter that restricts the search result to categories that belong to the specified marketplace ID. |
 **category_id** | **string**| Filter that restricts the search result to categories that belong to the specified category ID. | [optional]

### Return type

[**\OpenAPI\Client\Model\Category[]**](../Model/Category.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayCategoriesIdGet

> \OpenAPI\Client\Model\Category restMarketsEbayCategoriesIdGet($id)

Get category

Get category for given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the category to be found.

try {
    $result = $apiInstance->restMarketsEbayCategoriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayCategoriesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the category to be found. |

### Return type

[**\OpenAPI\Client\Model\Category**](../Model/Category.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayFulfillmentPoliciesIdGet

> \OpenAPI\Client\Model\FulfillmentPolicy restMarketsEbayFulfillmentPoliciesIdGet($marketplace_id, $credentials_id, $id)

Get fulfillment policy

Get fulfillment policy for given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | The ID of the marketplace for which to get the policy.
$credentials_id = 56; // int | The ID of credentials for which to get the policy.
$id = 56; // int | 

try {
    $result = $apiInstance->restMarketsEbayFulfillmentPoliciesIdGet($marketplace_id, $credentials_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayFulfillmentPoliciesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The ID of the marketplace for which to get the policy. |
 **credentials_id** | **int**| The ID of credentials for which to get the policy. |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\FulfillmentPolicy**](../Model/FulfillmentPolicy.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayItemSpecificsGet

> \OpenAPI\Client\Model\ItemSpecific[] restMarketsEbayItemSpecificsGet($category_id, $marketplace_id)

List item specifics

List item specifics for a given category Id and referrerId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | The ID of the category for which to list item specifics
$marketplace_id = 'marketplace_id_example'; // string | Filter that restricts the search result to categories that belong to the specified marketplace ID.

try {
    $result = $apiInstance->restMarketsEbayItemSpecificsGet($category_id, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayItemSpecificsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| The ID of the category for which to list item specifics |
 **marketplace_id** | **string**| Filter that restricts the search result to categories that belong to the specified marketplace ID. |

### Return type

[**\OpenAPI\Client\Model\ItemSpecific[]**](../Model/ItemSpecific.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayMarketplacesGet

> \OpenAPI\Client\Model\Marketplace[] restMarketsEbayMarketplacesGet($referrer_id, $marketplace_id, $market_id, $site_id)

Get all eBay marketplaces.

List eBay marketplaces. Use filters to find specific ones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$referrer_id = 3.4; // float | Get only marketplaces that match the given referrer ID
$marketplace_id = 'marketplace_id_example'; // string | Get only marketplaces that match the given marketplace ID
$market_id = 56; // int | Get only marketplaces that match the given market ID
$site_id = 56; // int | Get only marketplaces that match the given site ID

try {
    $result = $apiInstance->restMarketsEbayMarketplacesGet($referrer_id, $marketplace_id, $market_id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayMarketplacesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referrer_id** | **float**| Get only marketplaces that match the given referrer ID | [optional]
 **marketplace_id** | **string**| Get only marketplaces that match the given marketplace ID | [optional]
 **market_id** | **int**| Get only marketplaces that match the given market ID | [optional]
 **site_id** | **int**| Get only marketplaces that match the given site ID | [optional]

### Return type

[**\OpenAPI\Client\Model\Marketplace[]**](../Model/Marketplace.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayPartsFitmentsFitmentIdDelete

> object restMarketsEbayPartsFitmentsFitmentIdDelete($id, $fitment_id)

Delete a fitment.

Deletes a fitment. The ID of the fitment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The fitment ID.
$fitment_id = 56; // int | 

try {
    $result = $apiInstance->restMarketsEbayPartsFitmentsFitmentIdDelete($id, $fitment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayPartsFitmentsFitmentIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The fitment ID. |
 **fitment_id** | **int**|  |

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


## restMarketsEbayPartsFitmentsFitmentIdGet

> \OpenAPI\Client\Model\Fitment restMarketsEbayPartsFitmentsFitmentIdGet($id, $fitment_id)

Get a fitment

Gets a fitment. The id of the fitment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The fitment ID.
$fitment_id = 56; // int | 

try {
    $result = $apiInstance->restMarketsEbayPartsFitmentsFitmentIdGet($id, $fitment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayPartsFitmentsFitmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The fitment ID. |
 **fitment_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Fitment**](../Model/Fitment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayPartsFitmentsFitmentIdPut

> \OpenAPI\Client\Model\Fitment restMarketsEbayPartsFitmentsFitmentIdPut($id, $fitment_id, $_rest_markets_ebay_parts_fitments_fitment_id)

Update fitment.

Updates a fitment. Items that do not occur anymore will be replaced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the fitment list.
$fitment_id = 56; // int | 
$_rest_markets_ebay_parts_fitments_fitment_id = new \OpenAPI\Client\Model\InlineObject159(); // \OpenAPI\Client\Model\InlineObject159 | 

try {
    $result = $apiInstance->restMarketsEbayPartsFitmentsFitmentIdPut($id, $fitment_id, $_rest_markets_ebay_parts_fitments_fitment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayPartsFitmentsFitmentIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the fitment list. |
 **fitment_id** | **int**|  |
 **_rest_markets_ebay_parts_fitments_fitment_id** | [**\OpenAPI\Client\Model\InlineObject159**](../Model/InlineObject159.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Fitment**](../Model/Fitment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayPartsFitmentsGet

> \OpenAPI\Client\Model\Fitment[] restMarketsEbayPartsFitmentsGet()

List fitments

Lists fitments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restMarketsEbayPartsFitmentsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayPartsFitmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Fitment[]**](../Model/Fitment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayPartsFitmentsPost

> \OpenAPI\Client\Model\Fitment restMarketsEbayPartsFitmentsPost($_rest_markets_ebay_parts_fitments)

Create a fitment

Create a new fitment for the given data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_markets_ebay_parts_fitments = new \OpenAPI\Client\Model\InlineObject158(); // \OpenAPI\Client\Model\InlineObject158 | 

try {
    $result = $apiInstance->restMarketsEbayPartsFitmentsPost($_rest_markets_ebay_parts_fitments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayPartsFitmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_markets_ebay_parts_fitments** | [**\OpenAPI\Client\Model\InlineObject158**](../Model/InlineObject158.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Fitment**](../Model/Fitment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayPartsFitmentsSearchGet

> \OpenAPI\Client\Model\InlineResponse20035 restMarketsEbayPartsFitmentsSearchGet($category_id, $id, $market_id, $name, $property_name, $property_value, $page, $items_per_page, $with)

Search fitments

Search fitments by filter options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | Filter that restricts the search result to fitments with specific eBay category ID. Several IDs can be entered as array.
$id = 56; // int | Filter that restricts the search result to fitments with specific ID. Several IDs can be entered as array.
$market_id = 56; // int | Filter that restricts the search result to fitments with specific market ID. Several IDs can be entered as array.
$name = 'name_example'; // string | Filter that restricts the search result to fitments with specific name.
$property_name = 'property_name_example'; // string | Filter that restricts the search result to fitments with specific property name.
$property_value = 'property_value_example'; // string | Filter that restricts the search result to fitments with specific property value.
$page = 56; // int | The page of results to search for.
$items_per_page = 56; // int | The number of items to list per page.
$with = 56; // int | An array with child instances to be loaded. Available values: 'items', 'items.properties'.

try {
    $result = $apiInstance->restMarketsEbayPartsFitmentsSearchGet($category_id, $id, $market_id, $name, $property_name, $property_value, $page, $items_per_page, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayPartsFitmentsSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Filter that restricts the search result to fitments with specific eBay category ID. Several IDs can be entered as array. | [optional]
 **id** | **int**| Filter that restricts the search result to fitments with specific ID. Several IDs can be entered as array. | [optional]
 **market_id** | **int**| Filter that restricts the search result to fitments with specific market ID. Several IDs can be entered as array. | [optional]
 **name** | **string**| Filter that restricts the search result to fitments with specific name. | [optional]
 **property_name** | **string**| Filter that restricts the search result to fitments with specific property name. | [optional]
 **property_value** | **string**| Filter that restricts the search result to fitments with specific property value. | [optional]
 **page** | **int**| The page of results to search for. | [optional]
 **items_per_page** | **int**| The number of items to list per page. | [optional]
 **with** | **int**| An array with child instances to be loaded. Available values: &#39;items&#39;, &#39;items.properties&#39;. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayPaymentPoliciesIdGet

> \OpenAPI\Client\Model\PaymentPolicy restMarketsEbayPaymentPoliciesIdGet($marketplace_id, $credentials_id, $id)

Get payment policy

Get payment policy for given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | The ID of the marketplace for which to get the policy.
$credentials_id = 56; // int | The ID of credentials for which to get the policy.
$id = 56; // int | 

try {
    $result = $apiInstance->restMarketsEbayPaymentPoliciesIdGet($marketplace_id, $credentials_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayPaymentPoliciesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The ID of the marketplace for which to get the policy. |
 **credentials_id** | **int**| The ID of credentials for which to get the policy. |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PaymentPolicy**](../Model/PaymentPolicy.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayReturnPoliciesIdGet

> \OpenAPI\Client\Model\ReturnPolicy restMarketsEbayReturnPoliciesIdGet($marketplace_id, $credentials_id, $id)

Get return policy

Get return policy for given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | The ID of the marketplace for which to get the policy.
$credentials_id = 56; // int | The ID of credentials for which to get the policy.
$id = 56; // int | 

try {
    $result = $apiInstance->restMarketsEbayReturnPoliciesIdGet($marketplace_id, $credentials_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayReturnPoliciesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The ID of the marketplace for which to get the policy. |
 **credentials_id** | **int**| The ID of credentials for which to get the policy. |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ReturnPolicy**](../Model/ReturnPolicy.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsEbayShopCategoriesGet

> object[] restMarketsEbayShopCategoriesGet($credentials_id, $view_type)

List all eBay shop categories

Lists all eBay shop categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentials_id = 56; // int | The credentials ID for whom to fetch eBay shop categories.
$view_type = 'view_type_example'; // string | How should the eBay shop categories be returned. Possible values: 'list' or 'tree'. Default is 'list'

try {
    $result = $apiInstance->restMarketsEbayShopCategoriesGet($credentials_id, $view_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsEbayShopCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials_id** | **int**| The credentials ID for whom to fetch eBay shop categories. |
 **view_type** | **string**| How should the eBay shop categories be returned. Possible values: &#39;list&#39; or &#39;tree&#39;. Default is &#39;list&#39; | [optional]

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


## restMarketsListingsMarketplacesGet

> \OpenAPI\Client\Model\Marketplace[] restMarketsListingsMarketplacesGet($referrer_id, $marketplace_id, $market_id, $site_id)

Get all listing marketplaces.

List listing marketplaces. Use filters to find specific ones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$referrer_id = 3.4; // float | Get only marketplaces that match the given referrer ID
$marketplace_id = 'marketplace_id_example'; // string | Get only marketplaces that match the given marketplace ID
$market_id = 56; // int | Get only marketplaces that match the given market ID
$site_id = 56; // int | Get only marketplaces that match the given site ID

try {
    $result = $apiInstance->restMarketsListingsMarketplacesGet($referrer_id, $marketplace_id, $market_id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsListingsMarketplacesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referrer_id** | **float**| Get only marketplaces that match the given referrer ID | [optional]
 **marketplace_id** | **string**| Get only marketplaces that match the given marketplace ID | [optional]
 **market_id** | **int**| Get only marketplaces that match the given market ID | [optional]
 **site_id** | **int**| Get only marketplaces that match the given site ID | [optional]

### Return type

[**\OpenAPI\Client\Model\Marketplace[]**](../Model/Marketplace.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsSettingsBulkPost

> \OpenAPI\Client\Model\Settings[] restMarketsSettingsBulkPost()

Create market settings

Creates new market settings by given data. The marketplace ID and the type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restMarketsSettingsBulkPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Settings[]**](../Model/Settings.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsSettingsBulkPut

> \OpenAPI\Client\Model\Settings[] restMarketsSettingsBulkPut()

Update market settings

Updates market settings. The market settings ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restMarketsSettingsBulkPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsBulkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Settings[]**](../Model/Settings.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsSettingsCorrelationsBulkPost

> object restMarketsSettingsCorrelationsBulkPost()

Create multiple correlations

Creates multiple correlations. The type, market settings ID and the correlation ID for each param combination must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restMarketsSettingsCorrelationsBulkPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsCorrelationsBulkPost: ', $e->getMessage(), PHP_EOL;
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


## restMarketsSettingsCorrelationsGet

> \OpenAPI\Client\Model\Settings restMarketsSettingsCorrelationsGet()

List correlation

Lists correlations. The type, the market settings ID and the correlation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restMarketsSettingsCorrelationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsCorrelationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Settings**](../Model/Settings.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsSettingsCorrelationsPost

> restMarketsSettingsCorrelationsPost()

Create a correlation

Creates a correlation. The type, the market settings ID and the correlation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restMarketsSettingsCorrelationsPost();
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsCorrelationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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


## restMarketsSettingsGet

> \OpenAPI\Client\Model\Settings[] restMarketsSettingsGet()

List market settings

Lists market settings. The marketplace ID and the type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restMarketsSettingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Settings[]**](../Model/Settings.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsSettingsPost

> \OpenAPI\Client\Model\Settings restMarketsSettingsPost()

Create market settings

Creates new market settings by given data. The marketplace ID and the type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restMarketsSettingsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Settings**](../Model/Settings.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsSettingsSettingIdDelete

> object restMarketsSettingsSettingIdDelete($setting_id)

Delete market settings

Deletes market settings. The market settings ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_id = 56; // int | 

try {
    $result = $apiInstance->restMarketsSettingsSettingIdDelete($setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsSettingIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_id** | **int**|  |

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


## restMarketsSettingsSettingIdGet

> \OpenAPI\Client\Model\Settings restMarketsSettingsSettingIdGet($setting_id)

Get market settings

Gets market settings. The market settings ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_id = 56; // int | 

try {
    $result = $apiInstance->restMarketsSettingsSettingIdGet($setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsSettingIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Settings**](../Model/Settings.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restMarketsSettingsSettingIdPut

> \OpenAPI\Client\Model\Settings restMarketsSettingsSettingIdPut($setting_id)

Update market settings

Updates market settings. The market settings ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_id = 56; // int | 

try {
    $result = $apiInstance->restMarketsSettingsSettingIdPut($setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->restMarketsSettingsSettingIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Settings**](../Model/Settings.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

