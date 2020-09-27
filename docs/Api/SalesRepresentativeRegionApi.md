# OpenAPI\Client\SalesRepresentativeRegionApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet**](SalesRepresentativeRegionApi.md#restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet) | **GET** /rest/accounts/{accountId}/contacts/{contactId}/sales_representative_regions | Get region by contactId and accountId
[**restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost**](SalesRepresentativeRegionApi.md#restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost) | **POST** /rest/accounts/{accountId}/contacts/{contactId}/sales_representative_regions | Create region for sales representative
[**restAccountsContactsContactIdSalesRepresentativeRegionsGet**](SalesRepresentativeRegionApi.md#restAccountsContactsContactIdSalesRepresentativeRegionsGet) | **GET** /rest/accounts/contacts/{contactId}/sales_representative_regions | List regions by contactId
[**restAccountsContactsSalesRepresentativeRegionsGet**](SalesRepresentativeRegionApi.md#restAccountsContactsSalesRepresentativeRegionsGet) | **GET** /rest/accounts/contacts/sales_representative_regions | Get sales representative of region
[**restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete**](SalesRepresentativeRegionApi.md#restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete) | **DELETE** /rest/accounts/sales_representative_regions/{salesRepresentativeRegionId} | Delete region
[**restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet**](SalesRepresentativeRegionApi.md#restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet) | **GET** /rest/accounts/sales_representative_regions/{salesRepresentativeRegionId} | Get region by ID
[**restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut**](SalesRepresentativeRegionApi.md#restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut) | **PUT** /rest/accounts/sales_representative_regions/{salesRepresentativeRegionId} | Update region



## restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet

> \OpenAPI\Client\Model\SalesRepresentativeRegion restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet($account_id, $contact_id)

Get region by contactId and accountId

Gets a region. The ID of the contact and the ID of the account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet($account_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account |
 **contact_id** | **int**| The ID of the contact |

### Return type

[**\OpenAPI\Client\Model\SalesRepresentativeRegion**](../Model/SalesRepresentativeRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost

> \OpenAPI\Client\Model\SalesRepresentativeRegion restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost($account_id, $contact_id)

Create region for sales representative

Creates a region for the sales representative. The ID of the account and the ID of the sales representative (contactId) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost($account_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account |
 **contact_id** | **int**| The ID of the contact |

### Return type

[**\OpenAPI\Client\Model\SalesRepresentativeRegion**](../Model/SalesRepresentativeRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountsContactsContactIdSalesRepresentativeRegionsGet

> object restAccountsContactsContactIdSalesRepresentativeRegionsGet($contact_id)

List regions by contactId

Lists the regions. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdSalesRepresentativeRegionsGet($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsContactsContactIdSalesRepresentativeRegionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| The ID of the contact |

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


## restAccountsContactsSalesRepresentativeRegionsGet

> \OpenAPI\Client\Model\InlineResponse2005 restAccountsContactsSalesRepresentativeRegionsGet()

Get sales representative of region

Gets the a sales representative of the region.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsContactsSalesRepresentativeRegionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsContactsSalesRepresentativeRegionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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


## restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete

> object restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete($sales_representative_region_id)

Delete region

Deletes a region. The ID of the sales representative`s region must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_representative_region_id = 56; // int | The ID of the account contact relation

try {
    $result = $apiInstance->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete($sales_representative_region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_representative_region_id** | **int**| The ID of the account contact relation |

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


## restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet

> \OpenAPI\Client\Model\SalesRepresentativeRegion restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet($sales_representative_region_id)

Get region by ID

Gets the region of the sales representative. The ID of the sales representative`s region must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_representative_region_id = 56; // int | The ID of the account contact relation

try {
    $result = $apiInstance->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet($sales_representative_region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_representative_region_id** | **int**| The ID of the account contact relation |

### Return type

[**\OpenAPI\Client\Model\SalesRepresentativeRegion**](../Model/SalesRepresentativeRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut

> \OpenAPI\Client\Model\SalesRepresentativeRegion restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut($sales_representative_region_id)

Update region

Updates the region. The ID of the sales representative`s region must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_representative_region_id = 56; // int | The ID of the account contact relation

try {
    $result = $apiInstance->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut($sales_representative_region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_representative_region_id** | **int**| The ID of the account contact relation |

### Return type

[**\OpenAPI\Client\Model\SalesRepresentativeRegion**](../Model/SalesRepresentativeRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

