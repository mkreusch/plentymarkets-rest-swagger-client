# OpenAPI\Client\AccountingApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restAccountingLocationsExistingAccountsGet**](AccountingApi.md#restAccountingLocationsExistingAccountsGet) | **GET** /rest/accounting/locations/existing_accounts | Get all unique posting accounts
[**restAccountingLocationsLocationIdCountriesCountryIdRevenueAccountsGet**](AccountingApi.md#restAccountingLocationsLocationIdCountriesCountryIdRevenueAccountsGet) | **GET** /rest/accounting/locations/{locationId}/countries/{countryId}/revenue_accounts | Get the revenue account configuration of a country
[**restAccountingLocationsLocationIdDebtorAccountConfigurationsGet**](AccountingApi.md#restAccountingLocationsLocationIdDebtorAccountConfigurationsGet) | **GET** /rest/accounting/locations/{locationId}/debtor_account_configurations | Get debtor account configuration of an accounting location
[**restAccountingLocationsLocationIdDebtorAccountsModeGet**](AccountingApi.md#restAccountingLocationsLocationIdDebtorAccountsModeGet) | **GET** /rest/accounting/locations/{locationId}/debtor_accounts/{mode} | Lists the debtor accounts by mode.
[**restAccountingLocationsLocationIdDelete**](AccountingApi.md#restAccountingLocationsLocationIdDelete) | **DELETE** /rest/accounting/locations/{locationId} | Delete an accounting location
[**restAccountingLocationsLocationIdGet**](AccountingApi.md#restAccountingLocationsLocationIdGet) | **GET** /rest/accounting/locations/{locationId} | Get an accounting location
[**restAccountingLocationsLocationIdPostingAccountsGet**](AccountingApi.md#restAccountingLocationsLocationIdPostingAccountsGet) | **GET** /rest/accounting/locations/{locationId}/posting_accounts | Get all posting accounts by locationId
[**restAccountingLocationsLocationIdPostingKeyConfigurationsGet**](AccountingApi.md#restAccountingLocationsLocationIdPostingKeyConfigurationsGet) | **GET** /rest/accounting/locations/{locationId}/posting_key_configurations | Get a posting key configuration of an accounting location
[**restAccountingLocationsLocationIdPut**](AccountingApi.md#restAccountingLocationsLocationIdPut) | **PUT** /rest/accounting/locations/{locationId} | Update an accounting location
[**restAccountingLocationsLocationIdRevenueAccountConfigurationsGet**](AccountingApi.md#restAccountingLocationsLocationIdRevenueAccountConfigurationsGet) | **GET** /rest/accounting/locations/{locationId}/revenue_account_configurations | Get the revenue account configuration of an accounting location
[**restAccountingLocationsLocationIdSettingsGet**](AccountingApi.md#restAccountingLocationsLocationIdSettingsGet) | **GET** /rest/accounting/locations/{locationId}/settings | Get accounting location settings
[**restAccountingLocationsLocationIdTypePostingAccountsGet**](AccountingApi.md#restAccountingLocationsLocationIdTypePostingAccountsGet) | **GET** /rest/accounting/locations/{locationId}/{type}/posting_accounts | Get all posting accounts by locationId and type
[**restAccountingLocationsPost**](AccountingApi.md#restAccountingLocationsPost) | **POST** /rest/accounting/locations | Create an accounting location
[**restAccountingLocationsPostingAccountsGet**](AccountingApi.md#restAccountingLocationsPostingAccountsGet) | **GET** /rest/accounting/locations/posting_accounts | Get all posting accounts
[**restAccountingLocationsPostingAccountsIdDelete**](AccountingApi.md#restAccountingLocationsPostingAccountsIdDelete) | **DELETE** /rest/accounting/locations/posting_accounts/{id} | Delete an posting account
[**restAccountingLocationsPostingAccountsIdGet**](AccountingApi.md#restAccountingLocationsPostingAccountsIdGet) | **GET** /rest/accounting/locations/posting_accounts/{id} | Gets posting account by the unique id
[**restAccountingLocationsPostingAccountsPost**](AccountingApi.md#restAccountingLocationsPostingAccountsPost) | **POST** /rest/accounting/locations/posting_accounts | Save posting accounts
[**restAccountingLocationsRevenueAccountConfigurationsGet**](AccountingApi.md#restAccountingLocationsRevenueAccountConfigurationsGet) | **GET** /rest/accounting/locations/revenue_account_configurations | List revenue account configurations
[**restAccountingLocationsWebstoreIdCountryIdPostingAccountsGet**](AccountingApi.md#restAccountingLocationsWebstoreIdCountryIdPostingAccountsGet) | **GET** /rest/accounting/locations/{webstoreId}/{countryId}/posting_accounts | Get all posting accounts for a country of a webstore
[**restAccountingStoresLocationsGet**](AccountingApi.md#restAccountingStoresLocationsGet) | **GET** /rest/accounting/stores/locations | List all accounting locations
[**restAccountingStoresPlentyIdLocationsGet**](AccountingApi.md#restAccountingStoresPlentyIdLocationsGet) | **GET** /rest/accounting/stores/{plentyId}/locations | List accounting locations of a client
[**restStoresPlentyIdLocationsGet**](AccountingApi.md#restStoresPlentyIdLocationsGet) | **GET** /rest/stores/{plentyId}/locations | Get the ID of an accounting location of a country
[**restVatGet**](AccountingApi.md#restVatGet) | **GET** /rest/vat | List VAT configurations.
[**restVatLocationsLocationIdCountriesCountryIdDateDateGet**](AccountingApi.md#restVatLocationsLocationIdCountriesCountryIdDateDateGet) | **GET** /rest/vat/locations/{locationId}/countries/{countryId}/date/{date} | Get a VAT configuration for a country in a location.
[**restVatLocationsLocationIdCountriesCountryIdGet**](AccountingApi.md#restVatLocationsLocationIdCountriesCountryIdGet) | **GET** /rest/vat/locations/{locationId}/countries/{countryId} | List VAT configurations for one country of delivery
[**restVatLocationsLocationIdGet**](AccountingApi.md#restVatLocationsLocationIdGet) | **GET** /rest/vat/locations/{locationId} | List VAT configurations of an accounting location
[**restVatPost**](AccountingApi.md#restVatPost) | **POST** /rest/vat | Create a VAT configuration
[**restVatStandardGet**](AccountingApi.md#restVatStandardGet) | **GET** /rest/vat/standard | Get a VAT configuration for the standard accounting location of a client
[**restVatVatIdGet**](AccountingApi.md#restVatVatIdGet) | **GET** /rest/vat/{vatId} | Get a VAT configuration by id
[**restVatVatIdPut**](AccountingApi.md#restVatVatIdPut) | **PUT** /rest/vat/{vatId} | Update a VAT configuration



## restAccountingLocationsExistingAccountsGet

> \OpenAPI\Client\Model\PostingAccounts[] restAccountingLocationsExistingAccountsGet()

Get all unique posting accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountingLocationsExistingAccountsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsExistingAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PostingAccounts[]**](../Model/PostingAccounts.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsLocationIdCountriesCountryIdRevenueAccountsGet

> \OpenAPI\Client\Model\RevenueAccountCountryConfiguration restAccountingLocationsLocationIdCountriesCountryIdRevenueAccountsGet($location_id, $country_id)

Get the revenue account configuration of a country

Get the revenue account configuration of a country. The ID of the accounting location that the country is associated with as well as the ID of the country must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location.
$country_id = 56; // int | The ID of the country.

try {
    $result = $apiInstance->restAccountingLocationsLocationIdCountriesCountryIdRevenueAccountsGet($location_id, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdCountriesCountryIdRevenueAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location. |
 **country_id** | **int**| The ID of the country. |

### Return type

[**\OpenAPI\Client\Model\RevenueAccountCountryConfiguration**](../Model/RevenueAccountCountryConfiguration.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsLocationIdDebtorAccountConfigurationsGet

> \OpenAPI\Client\Model\DebtorAccountConfiguration restAccountingLocationsLocationIdDebtorAccountConfigurationsGet($location_id)

Get debtor account configuration of an accounting location

Gets the debtor account configuration of an accounting location. The ID of the accounting location has to be specified. The debtor account configuration can contain one standard debtor account only or e.g. several accounts for each country of delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location.

try {
    $result = $apiInstance->restAccountingLocationsLocationIdDebtorAccountConfigurationsGet($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdDebtorAccountConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location. |

### Return type

[**\OpenAPI\Client\Model\DebtorAccountConfiguration**](../Model/DebtorAccountConfiguration.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsLocationIdDebtorAccountsModeGet

> object restAccountingLocationsLocationIdDebtorAccountsModeGet($location_id, $mode)

Lists the debtor accounts by mode.

Lists the debtor accounts of an accounting location by mode. The ID of the accounting location and the mode have to be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location.
$mode = 'mode_example'; // string | The mode defines how pending amounts are assigned to debtor accounts. The following modes are available:      <ul>       <li>character        = The debtor accounts are selected based on the first character of customer information. The information and the order of the information that will be used are defined with the sequence. There are 3 different sequences available.</li>       <li>payment          = The debtor accounts are selected based on the payment method.</li>       <li>country          = The debtor accounts are selected based on the country of delivery.</li>       <li>country_payment  = The debtor accounts are selected based on two criteria. The first criteria is the country and if the country is same as the country of the accounting location then the payment method is used to select the deptor account.</li>      </ul>

try {
    $result = $apiInstance->restAccountingLocationsLocationIdDebtorAccountsModeGet($location_id, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdDebtorAccountsModeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location. |
 **mode** | **string**| The mode defines how pending amounts are assigned to debtor accounts. The following modes are available:      &lt;ul&gt;       &lt;li&gt;character        &#x3D; The debtor accounts are selected based on the first character of customer information. The information and the order of the information that will be used are defined with the sequence. There are 3 different sequences available.&lt;/li&gt;       &lt;li&gt;payment          &#x3D; The debtor accounts are selected based on the payment method.&lt;/li&gt;       &lt;li&gt;country          &#x3D; The debtor accounts are selected based on the country of delivery.&lt;/li&gt;       &lt;li&gt;country_payment  &#x3D; The debtor accounts are selected based on two criteria. The first criteria is the country and if the country is same as the country of the accounting location then the payment method is used to select the deptor account.&lt;/li&gt;      &lt;/ul&gt; |

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


## restAccountingLocationsLocationIdDelete

> restAccountingLocationsLocationIdDelete($location_id)

Delete an accounting location

Deletes an accounting location. The ID of the accounting location must be specified. Standard accounting locations can not be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location

try {
    $apiInstance->restAccountingLocationsLocationIdDelete($location_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location |

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


## restAccountingLocationsLocationIdGet

> \OpenAPI\Client\Model\AccountingLocation restAccountingLocationsLocationIdGet($location_id)

Get an accounting location

Gets an accounting location. The ID of the accounting location must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location

try {
    $result = $apiInstance->restAccountingLocationsLocationIdGet($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location |

### Return type

[**\OpenAPI\Client\Model\AccountingLocation**](../Model/AccountingLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsLocationIdPostingAccountsGet

> \OpenAPI\Client\Model\PostingAccounts[] restAccountingLocationsLocationIdPostingAccountsGet($location_id)

Get all posting accounts by locationId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location.

try {
    $result = $apiInstance->restAccountingLocationsLocationIdPostingAccountsGet($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdPostingAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location. |

### Return type

[**\OpenAPI\Client\Model\PostingAccounts[]**](../Model/PostingAccounts.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsLocationIdPostingKeyConfigurationsGet

> \OpenAPI\Client\Model\PostingKeyConfiguration restAccountingLocationsLocationIdPostingKeyConfigurationsGet($location_id)

Get a posting key configuration of an accounting location

Gets a posting key configuration of an accounting location. The ID of the accounting location has to be specified. The posting key configuration can contain up to 4 posting keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location.

try {
    $result = $apiInstance->restAccountingLocationsLocationIdPostingKeyConfigurationsGet($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdPostingKeyConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location. |

### Return type

[**\OpenAPI\Client\Model\PostingKeyConfiguration**](../Model/PostingKeyConfiguration.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsLocationIdPut

> \OpenAPI\Client\Model\AccountingLocation restAccountingLocationsLocationIdPut($location_id, $_rest_accounting_locations_location_id)

Update an accounting location

Updates an accounting location. The ID of the accounting location must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location
$_rest_accounting_locations_location_id = new \OpenAPI\Client\Model\InlineObject2(); // \OpenAPI\Client\Model\InlineObject2 | 

try {
    $result = $apiInstance->restAccountingLocationsLocationIdPut($location_id, $_rest_accounting_locations_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location |
 **_rest_accounting_locations_location_id** | [**\OpenAPI\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AccountingLocation**](../Model/AccountingLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsLocationIdRevenueAccountConfigurationsGet

> \OpenAPI\Client\Model\RevenueAccountLocationConfiguration restAccountingLocationsLocationIdRevenueAccountConfigurationsGet($location_id)

Get the revenue account configuration of an accounting location

Gets the revenue account configuration of an accounting location. A revenue account location configuration contains several revenue accounts. The ID of the accounting location has to be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location.

try {
    $result = $apiInstance->restAccountingLocationsLocationIdRevenueAccountConfigurationsGet($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdRevenueAccountConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location. |

### Return type

[**\OpenAPI\Client\Model\RevenueAccountLocationConfiguration**](../Model/RevenueAccountLocationConfiguration.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsLocationIdSettingsGet

> \OpenAPI\Client\Model\AccountingLocationSettings restAccountingLocationsLocationIdSettingsGet($location_id)

Get accounting location settings

Gets accounting location settings. The ID of the accounting location must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location

try {
    $result = $apiInstance->restAccountingLocationsLocationIdSettingsGet($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdSettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location |

### Return type

[**\OpenAPI\Client\Model\AccountingLocationSettings**](../Model/AccountingLocationSettings.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsLocationIdTypePostingAccountsGet

> \OpenAPI\Client\Model\PostingAccounts[] restAccountingLocationsLocationIdTypePostingAccountsGet($location_id, $type)

Get all posting accounts by locationId and type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location.
$type = 'type_example'; // string | The type of the PostingAccount.

try {
    $result = $apiInstance->restAccountingLocationsLocationIdTypePostingAccountsGet($location_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsLocationIdTypePostingAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location. |
 **type** | **string**| The type of the PostingAccount. |

### Return type

[**\OpenAPI\Client\Model\PostingAccounts[]**](../Model/PostingAccounts.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsPost

> \OpenAPI\Client\Model\AccountingLocation restAccountingLocationsPost($_rest_accounting_locations)

Create an accounting location

Creates an accounting location for a client. The plenty ID of the client must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounting_locations = new \OpenAPI\Client\Model\InlineObject1(); // \OpenAPI\Client\Model\InlineObject1 | 

try {
    $result = $apiInstance->restAccountingLocationsPost($_rest_accounting_locations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_accounting_locations** | [**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AccountingLocation**](../Model/AccountingLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsPostingAccountsGet

> \OpenAPI\Client\Model\PostingAccounts[] restAccountingLocationsPostingAccountsGet()

Get all posting accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountingLocationsPostingAccountsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsPostingAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PostingAccounts[]**](../Model/PostingAccounts.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsPostingAccountsIdDelete

> restAccountingLocationsPostingAccountsIdDelete($id)

Delete an posting account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the posting account

try {
    $apiInstance->restAccountingLocationsPostingAccountsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsPostingAccountsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the posting account |

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


## restAccountingLocationsPostingAccountsIdGet

> \OpenAPI\Client\Model\PostingAccounts restAccountingLocationsPostingAccountsIdGet($id)

Gets posting account by the unique id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restAccountingLocationsPostingAccountsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsPostingAccountsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PostingAccounts**](../Model/PostingAccounts.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsPostingAccountsPost

> \OpenAPI\Client\Model\PostingAccounts[] restAccountingLocationsPostingAccountsPost()

Save posting accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountingLocationsPostingAccountsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsPostingAccountsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PostingAccounts[]**](../Model/PostingAccounts.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsRevenueAccountConfigurationsGet

> \OpenAPI\Client\Model\InlineResponse200 restAccountingLocationsRevenueAccountConfigurationsGet($page, $items_per_page)

List revenue account configurations

Lists revenue account configurations of a system. The revenue accounts are returned as paginated result. By default 50 revenue accounts are on one page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page to get. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of revenue accounts to be displayed per page. The default number of orders per page is 50.

try {
    $result = $apiInstance->restAccountingLocationsRevenueAccountConfigurationsGet($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsRevenueAccountConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to get. The default page that will be returned is page 1. | [optional]
 **items_per_page** | **int**| The number of revenue accounts to be displayed per page. The default number of orders per page is 50. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingLocationsWebstoreIdCountryIdPostingAccountsGet

> \OpenAPI\Client\Model\PostingAccounts[] restAccountingLocationsWebstoreIdCountryIdPostingAccountsGet($country_id, $webstore_id, $webstore_id2)

Get all posting accounts for a country of a webstore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 56; // int | The ID of the country
$webstore_id = 56; // int | The ID of the webstore
$webstore_id2 = 56; // int | 

try {
    $result = $apiInstance->restAccountingLocationsWebstoreIdCountryIdPostingAccountsGet($country_id, $webstore_id, $webstore_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingLocationsWebstoreIdCountryIdPostingAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_id** | **int**| The ID of the country |
 **webstore_id** | **int**| The ID of the webstore |
 **webstore_id2** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PostingAccounts[]**](../Model/PostingAccounts.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingStoresLocationsGet

> \OpenAPI\Client\Model\AccountingLocation[] restAccountingStoresLocationsGet()

List all accounting locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountingStoresLocationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingStoresLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AccountingLocation[]**](../Model/AccountingLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAccountingStoresPlentyIdLocationsGet

> \OpenAPI\Client\Model\AccountingLocation[] restAccountingStoresPlentyIdLocationsGet($plenty_id)

List accounting locations of a client

Lists accounting locations of a client. The plenty ID of the client must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plenty_id = 56; // int | 

try {
    $result = $apiInstance->restAccountingStoresPlentyIdLocationsGet($plenty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restAccountingStoresPlentyIdLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plenty_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AccountingLocation[]**](../Model/AccountingLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restStoresPlentyIdLocationsGet

> \OpenAPI\Client\Model\AccountingLocation restStoresPlentyIdLocationsGet($plenty_id, $country_id)

Get the ID of an accounting location of a country

Gets the ID of an accounting location of a country. The plenty ID of the client and the ID of the country must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plenty_id = 56; // int | 
$country_id = 56; // int | The ID of the country of the accounting location. The default accounting location of the client will be returned if the ID of a country is not specified.

try {
    $result = $apiInstance->restStoresPlentyIdLocationsGet($plenty_id, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restStoresPlentyIdLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plenty_id** | **int**|  |
 **country_id** | **int**| The ID of the country of the accounting location. The default accounting location of the client will be returned if the ID of a country is not specified. | [optional]

### Return type

[**\OpenAPI\Client\Model\AccountingLocation**](../Model/AccountingLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restVatGet

> \OpenAPI\Client\Model\InlineResponse20058 restVatGet($page, $items_per_page, $with, $columns)

List VAT configurations.

Lists the VAT configurations for the given filter. Possible filters are <code>locationId</code>, <code>countryId</code>, <code>taxIdNumber</code> and <code>startedAt</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page.
$items_per_page = 56; // int | The number of items per page.
$with = 56; // int | The relations to load with the VAT object. The relations available are location or country.
$columns = 56; // int | The properties to be loaded.

try {
    $result = $apiInstance->restVatGet($page, $items_per_page, $with, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restVatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page. | [optional]
 **items_per_page** | **int**| The number of items per page. | [optional]
 **with** | **int**| The relations to load with the VAT object. The relations available are location or country. | [optional]
 **columns** | **int**| The properties to be loaded. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restVatLocationsLocationIdCountriesCountryIdDateDateGet

> \OpenAPI\Client\Model\Vat restVatLocationsLocationIdCountriesCountryIdDateDateGet($location_id, $country_id, $start_date, $date, $with, $columns)

Get a VAT configuration for a country in a location.

Gets the VAT configuration found by matching the given location, delivery country and date of validity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location
$country_id = 56; // int | The ID of the country of delivery
$start_date = 'start_date_example'; // string | The date of validity
$date = 56; // int | 
$with = 56; // int | The relations to load with the VAT object. The relations available are location or country.
$columns = 56; // int | The attributes of the VAT configuration

try {
    $result = $apiInstance->restVatLocationsLocationIdCountriesCountryIdDateDateGet($location_id, $country_id, $start_date, $date, $with, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restVatLocationsLocationIdCountriesCountryIdDateDateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location |
 **country_id** | **int**| The ID of the country of delivery |
 **start_date** | **string**| The date of validity |
 **date** | **int**|  |
 **with** | **int**| The relations to load with the VAT object. The relations available are location or country. | [optional]
 **columns** | **int**| The attributes of the VAT configuration | [optional]

### Return type

[**\OpenAPI\Client\Model\Vat**](../Model/Vat.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restVatLocationsLocationIdCountriesCountryIdGet

> \OpenAPI\Client\Model\Vat[] restVatLocationsLocationIdCountriesCountryIdGet($location_id, $country_id, $with, $columns)

List VAT configurations for one country of delivery

Lists the VAT configurations for a country of delivery of one accounting location. The ID of the accounting location and the ID of the country of delivery must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location
$country_id = 56; // int | The ID of the country of delivery
$with = 56; // int | The relations to load with the VAT object. The relations available are location or country.
$columns = 56; // int | The attributes of the VAT configuration

try {
    $result = $apiInstance->restVatLocationsLocationIdCountriesCountryIdGet($location_id, $country_id, $with, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restVatLocationsLocationIdCountriesCountryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location |
 **country_id** | **int**| The ID of the country of delivery |
 **with** | **int**| The relations to load with the VAT object. The relations available are location or country. | [optional]
 **columns** | **int**| The attributes of the VAT configuration | [optional]

### Return type

[**\OpenAPI\Client\Model\Vat[]**](../Model/Vat.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restVatLocationsLocationIdGet

> object restVatLocationsLocationIdGet($location_id, $with, $columns)

List VAT configurations of an accounting location

Lists the VAT configurations for all countries of one accounting location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The ID of the accounting location
$with = 56; // int | The relations to load with the VAT object. The relations available are location and country.
$columns = 56; // int | The attributes of the VAT configuration

try {
    $result = $apiInstance->restVatLocationsLocationIdGet($location_id, $with, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restVatLocationsLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The ID of the accounting location |
 **with** | **int**| The relations to load with the VAT object. The relations available are location and country. | [optional]
 **columns** | **int**| The attributes of the VAT configuration | [optional]

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


## restVatPost

> \OpenAPI\Client\Model\Vat restVatPost($_rest_vat)

Create a VAT configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_vat = new \OpenAPI\Client\Model\InlineObject249(); // \OpenAPI\Client\Model\InlineObject249 | 

try {
    $result = $apiInstance->restVatPost($_rest_vat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restVatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_vat** | [**\OpenAPI\Client\Model\InlineObject249**](../Model/InlineObject249.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Vat**](../Model/Vat.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restVatStandardGet

> \OpenAPI\Client\Model\Vat restVatStandardGet($plenty_id, $started_at)

Get a VAT configuration for the standard accounting location of a client

Gets the VAT configuration currently used for the country of the standard accounting location of a client (store). The ID of the client (store) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plenty_id = 56; // int | The plenty ID of the client (store)
$started_at = 'started_at_example'; // string | The date in the W3C format when the vat configuration went into effect

try {
    $result = $apiInstance->restVatStandardGet($plenty_id, $started_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restVatStandardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plenty_id** | **int**| The plenty ID of the client (store) | [optional]
 **started_at** | **string**| The date in the W3C format when the vat configuration went into effect | [optional]

### Return type

[**\OpenAPI\Client\Model\Vat**](../Model/Vat.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restVatVatIdGet

> \OpenAPI\Client\Model\Vat restVatVatIdGet($vat_id)

Get a VAT configuration by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vat_id = 56; // int | 

try {
    $result = $apiInstance->restVatVatIdGet($vat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restVatVatIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vat_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Vat**](../Model/Vat.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restVatVatIdPut

> \OpenAPI\Client\Model\Vat restVatVatIdPut($vat_id, $_rest_vat_vat_id)

Update a VAT configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vat_id = 56; // int | 
$_rest_vat_vat_id = new \OpenAPI\Client\Model\InlineObject250(); // \OpenAPI\Client\Model\InlineObject250 | 

try {
    $result = $apiInstance->restVatVatIdPut($vat_id, $_rest_vat_vat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->restVatVatIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vat_id** | **int**|  |
 **_rest_vat_vat_id** | [**\OpenAPI\Client\Model\InlineObject250**](../Model/InlineObject250.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Vat**](../Model/Vat.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

