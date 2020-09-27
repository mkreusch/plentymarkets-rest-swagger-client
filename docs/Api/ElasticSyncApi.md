# OpenAPI\Client\ElasticSyncApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restElasticSyncMappingCsvRowsSyncIdGet**](ElasticSyncApi.md#restElasticSyncMappingCsvRowsSyncIdGet) | **GET** /rest/elastic-sync/mapping/csv-rows/{syncId} | Get the csv rows.
[**restElasticSyncMappingFieldsSyncTypeGet**](ElasticSyncApi.md#restElasticSyncMappingFieldsSyncTypeGet) | **GET** /rest/elastic-sync/mapping/fields/{syncType} | Get the plenty fields value map for a particular sync type.
[**restElasticSyncMappingFilterLabelsGet**](ElasticSyncApi.md#restElasticSyncMappingFilterLabelsGet) | **GET** /rest/elastic-sync/mapping/filter/labels | Get the label list for mapping filtration.
[**restElasticSyncMappingMapCsvColumnsSyncIdGet**](ElasticSyncApi.md#restElasticSyncMappingMapCsvColumnsSyncIdGet) | **GET** /rest/elastic-sync/mapping/map/csv-columns/{syncId} | Get the csv columns of a sync.
[**restElasticSyncMappingMapTreeGet**](ElasticSyncApi.md#restElasticSyncMappingMapTreeGet) | **GET** /rest/elastic-sync/mapping/map/tree | Get the mapping values tree.
[**restElasticSyncMappingModelSyncTypeGet**](ElasticSyncApi.md#restElasticSyncMappingModelSyncTypeGet) | **GET** /rest/elastic-sync/mapping/model/{syncType} | Get the model key to field value key.
[**restElasticSyncMappingValuesSyncTypeGet**](ElasticSyncApi.md#restElasticSyncMappingValuesSyncTypeGet) | **GET** /rest/elastic-sync/mapping/values/{syncType} | Get the mapping values.
[**restElasticSyncMappingVariationGet**](ElasticSyncApi.md#restElasticSyncMappingVariationGet) | **GET** /rest/elastic-sync/mapping/variation | Get a list with variation matches.
[**restElasticSyncSyncChangeCsvPut**](ElasticSyncApi.md#restElasticSyncSyncChangeCsvPut) | **PUT** /rest/elastic-sync/sync/change-csv | Update the Csv of a Sync.
[**restElasticSyncSyncImportDifferentPost**](ElasticSyncApi.md#restElasticSyncSyncImportDifferentPost) | **POST** /rest/elastic-sync/sync/import-different | Import the sync with different plentyId.
[**restElasticSyncSyncImportFilePublicUrlDifferentPost**](ElasticSyncApi.md#restElasticSyncSyncImportFilePublicUrlDifferentPost) | **POST** /rest/elastic-sync/sync/import/file/public-url/different | Import the sync with different plentyId.
[**restElasticSyncSyncImportFilePublicUrlPost**](ElasticSyncApi.md#restElasticSyncSyncImportFilePublicUrlPost) | **POST** /rest/elastic-sync/sync/import/file/public-url | Save the CSV on S3.
[**restElasticSyncSyncImportPost**](ElasticSyncApi.md#restElasticSyncSyncImportPost) | **POST** /rest/elastic-sync/sync/import | Save the CSV on S3.
[**restElasticSyncSyncIntervalsGet**](ElasticSyncApi.md#restElasticSyncSyncIntervalsGet) | **GET** /rest/elastic-sync/sync/intervals | Get list of sync intervals.
[**restElasticSyncSyncMappingFilterFilterIdDelete**](ElasticSyncApi.md#restElasticSyncSyncMappingFilterFilterIdDelete) | **DELETE** /rest/elastic-sync/sync/mapping/filter/{filterId} | Delete a sync mapping.
[**restElasticSyncSyncMappingFilterFilterIdGet**](ElasticSyncApi.md#restElasticSyncSyncMappingFilterFilterIdGet) | **GET** /rest/elastic-sync/sync/mapping/filter/{filterId} | Get a sync mapping.
[**restElasticSyncSyncMappingFilterFilterIdPut**](ElasticSyncApi.md#restElasticSyncSyncMappingFilterFilterIdPut) | **PUT** /rest/elastic-sync/sync/mapping/filter/{filterId} | Update a sync mapping filter.
[**restElasticSyncSyncMappingMappingIdDelete**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdDelete) | **DELETE** /rest/elastic-sync/sync/mapping/{mappingId} | Delete a sync mapping.
[**restElasticSyncSyncMappingMappingIdFilterPost**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdFilterPost) | **POST** /rest/elastic-sync/sync/mapping/{mappingId}/filter | Create a sync mapping filter.
[**restElasticSyncSyncMappingMappingIdFiltersGet**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdFiltersGet) | **GET** /rest/elastic-sync/sync/mapping/{mappingId}/filters | List sync mappings.
[**restElasticSyncSyncMappingMappingIdFiltersPost**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdFiltersPost) | **POST** /rest/elastic-sync/sync/mapping/{mappingId}/filters | Create sync mapping filters.
[**restElasticSyncSyncMappingMappingIdFiltersPut**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdFiltersPut) | **PUT** /rest/elastic-sync/sync/mapping/{mappingId}/filters | Update sync mapping filters.
[**restElasticSyncSyncMappingMappingIdGet**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdGet) | **GET** /rest/elastic-sync/sync/mapping/{mappingId} | Get a sync mapping.
[**restElasticSyncSyncMappingMappingIdPut**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdPut) | **PUT** /rest/elastic-sync/sync/mapping/{mappingId} | Update a sync mapping.
[**restElasticSyncSyncMappingMappingIdRowPost**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdRowPost) | **POST** /rest/elastic-sync/sync/mapping/{mappingId}/row | Create a sync mapping row.
[**restElasticSyncSyncMappingMappingIdRowsGet**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdRowsGet) | **GET** /rest/elastic-sync/sync/mapping/{mappingId}/rows | List sync mapping rows.
[**restElasticSyncSyncMappingMappingIdRowsPost**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdRowsPost) | **POST** /rest/elastic-sync/sync/mapping/{mappingId}/rows | Create sync mapping rows.
[**restElasticSyncSyncMappingMappingIdRowsPut**](ElasticSyncApi.md#restElasticSyncSyncMappingMappingIdRowsPut) | **PUT** /rest/elastic-sync/sync/mapping/{mappingId}/rows | Update sync mapping rows.
[**restElasticSyncSyncMappingRowRowIdDelete**](ElasticSyncApi.md#restElasticSyncSyncMappingRowRowIdDelete) | **DELETE** /rest/elastic-sync/sync/mapping/row/{rowId} | Delete a sync mapping row.
[**restElasticSyncSyncMappingRowRowIdGet**](ElasticSyncApi.md#restElasticSyncSyncMappingRowRowIdGet) | **GET** /rest/elastic-sync/sync/mapping/row/{rowId} | Get a sync mapping row.
[**restElasticSyncSyncMappingRowRowIdPut**](ElasticSyncApi.md#restElasticSyncSyncMappingRowRowIdPut) | **PUT** /rest/elastic-sync/sync/mapping/row/{rowId} | Update a sync mapping row.
[**restElasticSyncSyncMappingsCopyPost**](ElasticSyncApi.md#restElasticSyncSyncMappingsCopyPost) | **POST** /rest/elastic-sync/sync/mappings/copy | Copy one or more mappings.
[**restElasticSyncSyncMappingsDelete**](ElasticSyncApi.md#restElasticSyncSyncMappingsDelete) | **DELETE** /rest/elastic-sync/sync/mappings | Delete one or more mappings.
[**restElasticSyncSyncMatchingDecimalsGet**](ElasticSyncApi.md#restElasticSyncSyncMatchingDecimalsGet) | **GET** /rest/elastic-sync/sync/matching/decimals | Get list of decimals.
[**restElasticSyncSyncMatchingMatchingIdDelete**](ElasticSyncApi.md#restElasticSyncSyncMatchingMatchingIdDelete) | **DELETE** /rest/elastic-sync/sync/matching/{matchingId} | Delete a sync matching.
[**restElasticSyncSyncMatchingMatchingIdGet**](ElasticSyncApi.md#restElasticSyncSyncMatchingMatchingIdGet) | **GET** /rest/elastic-sync/sync/matching/{matchingId} | Get a sync matching.
[**restElasticSyncSyncMatchingMatchingIdPut**](ElasticSyncApi.md#restElasticSyncSyncMatchingMatchingIdPut) | **PUT** /rest/elastic-sync/sync/matching/{matchingId} | Update a sync matching.
[**restElasticSyncSyncOptionOptionIdDelete**](ElasticSyncApi.md#restElasticSyncSyncOptionOptionIdDelete) | **DELETE** /rest/elastic-sync/sync/option/{optionId} | Delete a sync.
[**restElasticSyncSyncOptionOptionIdGet**](ElasticSyncApi.md#restElasticSyncSyncOptionOptionIdGet) | **GET** /rest/elastic-sync/sync/option/{optionId} | Get a sync.
[**restElasticSyncSyncOptionOptionIdPut**](ElasticSyncApi.md#restElasticSyncSyncOptionOptionIdPut) | **PUT** /rest/elastic-sync/sync/option/{optionId} | Update a sync option.
[**restElasticSyncSyncPost**](ElasticSyncApi.md#restElasticSyncSyncPost) | **POST** /rest/elastic-sync/sync | Create a sync.
[**restElasticSyncSyncReportIdGet**](ElasticSyncApi.md#restElasticSyncSyncReportIdGet) | **GET** /rest/elastic-sync/sync/report/{id} | Get Log ID
[**restElasticSyncSyncReportsAvailabilityGet**](ElasticSyncApi.md#restElasticSyncSyncReportsAvailabilityGet) | **GET** /rest/elastic-sync/sync/reports/availability | Check Report Log.
[**restElasticSyncSyncReportsGet**](ElasticSyncApi.md#restElasticSyncSyncReportsGet) | **GET** /rest/elastic-sync/sync/reports | Check Report Log.
[**restElasticSyncSyncResetCacheGet**](ElasticSyncApi.md#restElasticSyncSyncResetCacheGet) | **GET** /rest/elastic-sync/sync/reset-cache | Reset the cache.
[**restElasticSyncSyncScheduleTimesGet**](ElasticSyncApi.md#restElasticSyncSyncScheduleTimesGet) | **GET** /rest/elastic-sync/sync/schedule/times | Get schedule times.
[**restElasticSyncSyncStatusGet**](ElasticSyncApi.md#restElasticSyncSyncStatusGet) | **GET** /rest/elastic-sync/sync/status | Get syncs status.
[**restElasticSyncSyncSyncIdDelete**](ElasticSyncApi.md#restElasticSyncSyncSyncIdDelete) | **DELETE** /rest/elastic-sync/sync/{syncId} | Delete a sync.
[**restElasticSyncSyncSyncIdGet**](ElasticSyncApi.md#restElasticSyncSyncSyncIdGet) | **GET** /rest/elastic-sync/sync/{syncId} | Get a sync.
[**restElasticSyncSyncSyncIdMappingPost**](ElasticSyncApi.md#restElasticSyncSyncSyncIdMappingPost) | **POST** /rest/elastic-sync/sync/{syncId}/mapping | Create a sync mapping.
[**restElasticSyncSyncSyncIdMappingsGet**](ElasticSyncApi.md#restElasticSyncSyncSyncIdMappingsGet) | **GET** /rest/elastic-sync/sync/{syncId}/mappings | List sync mappings.
[**restElasticSyncSyncSyncIdMatchesGet**](ElasticSyncApi.md#restElasticSyncSyncSyncIdMatchesGet) | **GET** /rest/elastic-sync/sync/{syncId}/matches | List sync matches.
[**restElasticSyncSyncSyncIdMatchesPost**](ElasticSyncApi.md#restElasticSyncSyncSyncIdMatchesPost) | **POST** /rest/elastic-sync/sync/{syncId}/matches | Create sync matches.
[**restElasticSyncSyncSyncIdMatchesPut**](ElasticSyncApi.md#restElasticSyncSyncSyncIdMatchesPut) | **PUT** /rest/elastic-sync/sync/{syncId}/matches | Update sync matches.
[**restElasticSyncSyncSyncIdMatchingEntityGet**](ElasticSyncApi.md#restElasticSyncSyncSyncIdMatchingEntityGet) | **GET** /rest/elastic-sync/sync/{syncId}/matching/entity | Get an entity.
[**restElasticSyncSyncSyncIdMatchingPost**](ElasticSyncApi.md#restElasticSyncSyncSyncIdMatchingPost) | **POST** /rest/elastic-sync/sync/{syncId}/matching | Create a sync matching.
[**restElasticSyncSyncSyncIdOptionPost**](ElasticSyncApi.md#restElasticSyncSyncSyncIdOptionPost) | **POST** /rest/elastic-sync/sync/{syncId}/option | Create a sync option.
[**restElasticSyncSyncSyncIdOptionsGet**](ElasticSyncApi.md#restElasticSyncSyncSyncIdOptionsGet) | **GET** /rest/elastic-sync/sync/{syncId}/options | List syncs.
[**restElasticSyncSyncSyncIdOptionsPost**](ElasticSyncApi.md#restElasticSyncSyncSyncIdOptionsPost) | **POST** /rest/elastic-sync/sync/{syncId}/options | Create sync options.
[**restElasticSyncSyncSyncIdOptionsPut**](ElasticSyncApi.md#restElasticSyncSyncSyncIdOptionsPut) | **PUT** /rest/elastic-sync/sync/{syncId}/options | Update sync options.
[**restElasticSyncSyncSyncIdPreviewValuesGet**](ElasticSyncApi.md#restElasticSyncSyncSyncIdPreviewValuesGet) | **GET** /rest/elastic-sync/sync/{syncId}/preview-values | Get preview of csv values.
[**restElasticSyncSyncSyncIdPut**](ElasticSyncApi.md#restElasticSyncSyncSyncIdPut) | **PUT** /rest/elastic-sync/sync/{syncId} | Update a sync.
[**restElasticSyncSyncSyncIdRunPost**](ElasticSyncApi.md#restElasticSyncSyncSyncIdRunPost) | **POST** /rest/elastic-sync/sync/{syncId}/run | Execute the run procedure.
[**restElasticSyncSyncSyncIdSourcePreviewGet**](ElasticSyncApi.md#restElasticSyncSyncSyncIdSourcePreviewGet) | **GET** /rest/elastic-sync/sync/{syncId}/source-preview | Preview the syncs.
[**restElasticSyncSyncSyncTypeMatchingFieldsGet**](ElasticSyncApi.md#restElasticSyncSyncSyncTypeMatchingFieldsGet) | **GET** /rest/elastic-sync/sync/{syncType}/matching/fields | Get a list of all mappings for a particular sync type.
[**restElasticSyncSyncTypesGet**](ElasticSyncApi.md#restElasticSyncSyncTypesGet) | **GET** /rest/elastic-sync/sync/types | Get list of sync types.
[**restElasticSyncSyncsCopyPost**](ElasticSyncApi.md#restElasticSyncSyncsCopyPost) | **POST** /rest/elastic-sync/syncs/copy | Copy the syncs.
[**restElasticSyncSyncsDelete**](ElasticSyncApi.md#restElasticSyncSyncsDelete) | **DELETE** /rest/elastic-sync/syncs | Delete syncs.
[**restElasticSyncSyncsExportPost**](ElasticSyncApi.md#restElasticSyncSyncsExportPost) | **POST** /rest/elastic-sync/syncs/export | Export the syncs.
[**restElasticSyncSyncsExportSyncIdGet**](ElasticSyncApi.md#restElasticSyncSyncsExportSyncIdGet) | **GET** /rest/elastic-sync/syncs/export/{syncId} | Export the sync.
[**restElasticSyncSyncsGet**](ElasticSyncApi.md#restElasticSyncSyncsGet) | **GET** /rest/elastic-sync/syncs | Get all Syncs



## restElasticSyncMappingCsvRowsSyncIdGet

> object[] restElasticSyncMappingCsvRowsSyncIdGet($sync_id)

Get the csv rows.

Gets the csv rows. Sync ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | The id of the sync

try {
    $result = $apiInstance->restElasticSyncMappingCsvRowsSyncIdGet($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncMappingCsvRowsSyncIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**| The id of the sync |

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


## restElasticSyncMappingFieldsSyncTypeGet

> object[] restElasticSyncMappingFieldsSyncTypeGet($sync_type)

Get the plenty fields value map for a particular sync type.

Gets the plenty fields value map for a particular sync type. Sync type is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_type = 'sync_type_example'; // string | The sync type

try {
    $result = $apiInstance->restElasticSyncMappingFieldsSyncTypeGet($sync_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncMappingFieldsSyncTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_type** | **string**| The sync type |

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


## restElasticSyncMappingFilterLabelsGet

> object[] restElasticSyncMappingFilterLabelsGet()

Get the label list for mapping filtration.

Gets the label list for mapping filtration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncMappingFilterLabelsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncMappingFilterLabelsGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncMappingMapCsvColumnsSyncIdGet

> object[] restElasticSyncMappingMapCsvColumnsSyncIdGet($sync_id)

Get the csv columns of a sync.

Gets the csv columns of a sync. Sync ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | The sync id of the mapping

try {
    $result = $apiInstance->restElasticSyncMappingMapCsvColumnsSyncIdGet($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncMappingMapCsvColumnsSyncIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**| The sync id of the mapping |

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


## restElasticSyncMappingMapTreeGet

> object[] restElasticSyncMappingMapTreeGet()

Get the mapping values tree.

Gets the mapping values. Sync data type is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncMappingMapTreeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncMappingMapTreeGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncMappingModelSyncTypeGet

> object[] restElasticSyncMappingModelSyncTypeGet($sync_type)

Get the model key to field value key.

Gets the model key to field value key. Sync type is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_type = 'sync_type_example'; // string | The sync type

try {
    $result = $apiInstance->restElasticSyncMappingModelSyncTypeGet($sync_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncMappingModelSyncTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_type** | **string**| The sync type |

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


## restElasticSyncMappingValuesSyncTypeGet

> object[] restElasticSyncMappingValuesSyncTypeGet($sync_type, $sync_type2)

Get the mapping values.

Gets the mapping values. Sync data type is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_type = 'sync_type_example'; // string | The sync type
$sync_type2 = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncMappingValuesSyncTypeGet($sync_type, $sync_type2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncMappingValuesSyncTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_type** | **string**| The sync type |
 **sync_type2** | **int**|  |

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


## restElasticSyncMappingVariationGet

> object[] restElasticSyncMappingVariationGet()

Get a list with variation matches.

Get a list with variation matches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncMappingVariationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncMappingVariationGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncChangeCsvPut

> \OpenAPI\Client\Model\ElasticSyncSync restElasticSyncSyncChangeCsvPut()

Update the Csv of a Sync.

Update the Csv of a Sync. The ID of the sync must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncChangeCsvPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncChangeCsvPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ElasticSyncSync**](../Model/ElasticSyncSync.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncImportDifferentPost

> restElasticSyncSyncImportDifferentPost($file)

Import the sync with different plentyId.

Imports the sync with different plentyId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 56; // int | The file data

try {
    $apiInstance->restElasticSyncSyncImportDifferentPost($file);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncImportDifferentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **int**| The file data |

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


## restElasticSyncSyncImportFilePublicUrlDifferentPost

> restElasticSyncSyncImportFilePublicUrlDifferentPost($file)

Import the sync with different plentyId.

Imports the sync with different plentyId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 56; // int | The file data

try {
    $apiInstance->restElasticSyncSyncImportFilePublicUrlDifferentPost($file);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncImportFilePublicUrlDifferentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **int**| The file data |

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


## restElasticSyncSyncImportFilePublicUrlPost

> restElasticSyncSyncImportFilePublicUrlPost($file)

Save the CSV on S3.

Saves the CSV on S3.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 56; // int | The file data

try {
    $apiInstance->restElasticSyncSyncImportFilePublicUrlPost($file);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncImportFilePublicUrlPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **int**| The file data |

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


## restElasticSyncSyncImportPost

> restElasticSyncSyncImportPost($file)

Save the CSV on S3.

Saves the CSV on S3.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 56; // int | The file data

try {
    $apiInstance->restElasticSyncSyncImportPost($file);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncImportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **int**| The file data |

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


## restElasticSyncSyncIntervalsGet

> object[] restElasticSyncSyncIntervalsGet()

Get list of sync intervals.

Gets list of sync intervals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncIntervalsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncIntervalsGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncMappingFilterFilterIdDelete

> \OpenAPI\Client\Model\ElasticSyncMappingFilter restElasticSyncSyncMappingFilterFilterIdDelete($filter_id)

Delete a sync mapping.

Deletes a sync mapping. The ID of the sync mapping must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingFilterFilterIdDelete($filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingFilterFilterIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingFilter**](../Model/ElasticSyncMappingFilter.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingFilterFilterIdGet

> \OpenAPI\Client\Model\ElasticSyncMappingFilter restElasticSyncSyncMappingFilterFilterIdGet($filter_id)

Get a sync mapping.

Gets a sync mapping. The ID of the sync mapping must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingFilterFilterIdGet($filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingFilterFilterIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingFilter**](../Model/ElasticSyncMappingFilter.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingFilterFilterIdPut

> \OpenAPI\Client\Model\ElasticSyncMappingFilter restElasticSyncSyncMappingFilterFilterIdPut($filter_id)

Update a sync mapping filter.

Updates a sync mapping filter. The ID of the sync mapping must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingFilterFilterIdPut($filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingFilterFilterIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingFilter**](../Model/ElasticSyncMappingFilter.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingMappingIdDelete

> \OpenAPI\Client\Model\ElasticSyncMapping restElasticSyncSyncMappingMappingIdDelete($mapping_id)

Delete a sync mapping.

Deletes a sync mapping. The ID of the sync mapping must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdDelete($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMapping**](../Model/ElasticSyncMapping.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingMappingIdFilterPost

> \OpenAPI\Client\Model\ElasticSyncMappingFilter restElasticSyncSyncMappingMappingIdFilterPost($mapping_id)

Create a sync mapping filter.

Creates a sync mapping filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdFilterPost($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdFilterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingFilter**](../Model/ElasticSyncMappingFilter.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingMappingIdFiltersGet

> object restElasticSyncSyncMappingMappingIdFiltersGet($mapping_id)

List sync mappings.

Lists sync mappings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdFiltersGet($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdFiltersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

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


## restElasticSyncSyncMappingMappingIdFiltersPost

> \OpenAPI\Client\Model\ElasticSyncMappingFilter restElasticSyncSyncMappingMappingIdFiltersPost($mapping_id)

Create sync mapping filters.

Creates sync mapping filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdFiltersPost($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdFiltersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingFilter**](../Model/ElasticSyncMappingFilter.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingMappingIdFiltersPut

> \OpenAPI\Client\Model\ElasticSyncMappingFilter restElasticSyncSyncMappingMappingIdFiltersPut($mapping_id)

Update sync mapping filters.

Updates sync mapping filters. The ID of the sync mapping must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdFiltersPut($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdFiltersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingFilter**](../Model/ElasticSyncMappingFilter.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingMappingIdGet

> \OpenAPI\Client\Model\ElasticSyncMapping restElasticSyncSyncMappingMappingIdGet($mapping_id)

Get a sync mapping.

Gets a sync mapping. The ID of the sync mapping must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdGet($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMapping**](../Model/ElasticSyncMapping.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingMappingIdPut

> \OpenAPI\Client\Model\ElasticSyncMapping restElasticSyncSyncMappingMappingIdPut($mapping_id)

Update a sync mapping.

Updates a sync mapping. The ID of the sync mapping must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdPut($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMapping**](../Model/ElasticSyncMapping.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingMappingIdRowPost

> \OpenAPI\Client\Model\ElasticSyncMappingRow restElasticSyncSyncMappingMappingIdRowPost($mapping_id)

Create a sync mapping row.

Creates a sync mapping row.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdRowPost($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdRowPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingRow**](../Model/ElasticSyncMappingRow.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingMappingIdRowsGet

> object restElasticSyncSyncMappingMappingIdRowsGet($mapping_id)

List sync mapping rows.

Lists sync mapping rows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdRowsGet($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdRowsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

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


## restElasticSyncSyncMappingMappingIdRowsPost

> \OpenAPI\Client\Model\ElasticSyncMappingRow restElasticSyncSyncMappingMappingIdRowsPost($mapping_id)

Create sync mapping rows.

Creates sync mapping rows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdRowsPost($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdRowsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingRow**](../Model/ElasticSyncMappingRow.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingMappingIdRowsPut

> \OpenAPI\Client\Model\ElasticSyncMappingRow restElasticSyncSyncMappingMappingIdRowsPut($mapping_id)

Update sync mapping rows.

Updates sync mapping rows. The ID of the sync mapping row must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingMappingIdRowsPut($mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingMappingIdRowsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingRow**](../Model/ElasticSyncMappingRow.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingRowRowIdDelete

> \OpenAPI\Client\Model\ElasticSyncMappingRow restElasticSyncSyncMappingRowRowIdDelete($row_id)

Delete a sync mapping row.

Deletes a sync mapping row. The ID of the sync mapping row must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$row_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingRowRowIdDelete($row_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingRowRowIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **row_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingRow**](../Model/ElasticSyncMappingRow.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingRowRowIdGet

> \OpenAPI\Client\Model\ElasticSyncMappingRow restElasticSyncSyncMappingRowRowIdGet($row_id)

Get a sync mapping row.

Gets a sync mapping row. The ID of the sync mapping row must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$row_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingRowRowIdGet($row_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingRowRowIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **row_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingRow**](../Model/ElasticSyncMappingRow.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingRowRowIdPut

> \OpenAPI\Client\Model\ElasticSyncMappingRow restElasticSyncSyncMappingRowRowIdPut($row_id)

Update a sync mapping row.

Updates a sync mapping row. The ID of the sync mapping row must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$row_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMappingRowRowIdPut($row_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingRowRowIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **row_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMappingRow**](../Model/ElasticSyncMappingRow.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMappingsCopyPost

> object[] restElasticSyncSyncMappingsCopyPost()

Copy one or more mappings.

Copies one or multiple mappings. The mapping ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncMappingsCopyPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingsCopyPost: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncMappingsDelete

> restElasticSyncSyncMappingsDelete()

Delete one or more mappings.

Deletes one or multiple mappings. The mapping ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restElasticSyncSyncMappingsDelete();
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMappingsDelete: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncMatchingDecimalsGet

> object[] restElasticSyncSyncMatchingDecimalsGet()

Get list of decimals.

Gets list of decimals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncMatchingDecimalsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMatchingDecimalsGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncMatchingMatchingIdDelete

> \OpenAPI\Client\Model\ElasticSyncMatching restElasticSyncSyncMatchingMatchingIdDelete($matching_id)

Delete a sync matching.

Deletes a sync matching. The ID of the sync matching must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$matching_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMatchingMatchingIdDelete($matching_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMatchingMatchingIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **matching_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMatching**](../Model/ElasticSyncMatching.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMatchingMatchingIdGet

> \OpenAPI\Client\Model\ElasticSyncMatching restElasticSyncSyncMatchingMatchingIdGet($matching_id)

Get a sync matching.

Gets a sync matching. The ID of the sync matching must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$matching_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMatchingMatchingIdGet($matching_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMatchingMatchingIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **matching_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMatching**](../Model/ElasticSyncMatching.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncMatchingMatchingIdPut

> \OpenAPI\Client\Model\ElasticSyncMatching restElasticSyncSyncMatchingMatchingIdPut($matching_id)

Update a sync matching.

Updates a sync matching. The ID of the sync matching must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$matching_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncMatchingMatchingIdPut($matching_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncMatchingMatchingIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **matching_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMatching**](../Model/ElasticSyncMatching.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncOptionOptionIdDelete

> \OpenAPI\Client\Model\ElasticSyncSync restElasticSyncSyncOptionOptionIdDelete($option_id)

Delete a sync.

Deletes a sync. The ID of the sync must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncOptionOptionIdDelete($option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncOptionOptionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **option_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncSync**](../Model/ElasticSyncSync.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncOptionOptionIdGet

> \OpenAPI\Client\Model\ElasticSyncSync restElasticSyncSyncOptionOptionIdGet($option_id)

Get a sync.

Gets a sync. The ID of the sync must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncOptionOptionIdGet($option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncOptionOptionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **option_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncSync**](../Model/ElasticSyncSync.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncOptionOptionIdPut

> \OpenAPI\Client\Model\ElasticSyncSync restElasticSyncSyncOptionOptionIdPut($option_id)

Update a sync option.

Updates a sync option. The ID of the sync must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncOptionOptionIdPut($option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncOptionOptionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **option_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncSync**](../Model/ElasticSyncSync.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncPost

> \OpenAPI\Client\Model\ElasticSyncSync restElasticSyncSyncPost()

Create a sync.

Creates a sync.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ElasticSyncSync**](../Model/ElasticSyncSync.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncReportIdGet

> object restElasticSyncSyncReportIdGet($id)

Get Log ID

Gets Log ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncReportIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncReportIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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


## restElasticSyncSyncReportsAvailabilityGet

> object[] restElasticSyncSyncReportsAvailabilityGet()

Check Report Log.

Check Report Log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncReportsAvailabilityGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncReportsAvailabilityGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncReportsGet

> \OpenAPI\Client\Model\InlineResponse2005 restElasticSyncSyncReportsGet()

Check Report Log.

Check Report Log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncReportsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncReportsGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncResetCacheGet

> object[] restElasticSyncSyncResetCacheGet()

Reset the cache.

Resets the cache.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncResetCacheGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncResetCacheGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncScheduleTimesGet

> object restElasticSyncSyncScheduleTimesGet()

Get schedule times.

Gets schedule times.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncScheduleTimesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncScheduleTimesGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncStatusGet

> object[] restElasticSyncSyncStatusGet()

Get syncs status.

Get syncs status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncStatusGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncSyncIdDelete

> \OpenAPI\Client\Model\ElasticSyncSync restElasticSyncSyncSyncIdDelete($sync_id)

Delete a sync.

Deletes a sync. The ID of the sync must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdDelete($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncSync**](../Model/ElasticSyncSync.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncSyncIdGet

> object[] restElasticSyncSyncSyncIdGet($sync_id)

Get a sync.

Gets a sync. The ID of the sync must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdGet($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

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


## restElasticSyncSyncSyncIdMappingPost

> \OpenAPI\Client\Model\ElasticSyncMapping restElasticSyncSyncSyncIdMappingPost($sync_id)

Create a sync mapping.

Creates a sync mapping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdMappingPost($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdMappingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMapping**](../Model/ElasticSyncMapping.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncSyncIdMappingsGet

> \OpenAPI\Client\Model\InlineResponse2005 restElasticSyncSyncSyncIdMappingsGet($sync_id)

List sync mappings.

Lists sync mappings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdMappingsGet($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdMappingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

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


## restElasticSyncSyncSyncIdMatchesGet

> object restElasticSyncSyncSyncIdMatchesGet($sync_id)

List sync matches.

Lists sync matches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdMatchesGet($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdMatchesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

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


## restElasticSyncSyncSyncIdMatchesPost

> \OpenAPI\Client\Model\ElasticSyncMatching restElasticSyncSyncSyncIdMatchesPost($sync_id)

Create sync matches.

Creates sync matches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdMatchesPost($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdMatchesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMatching**](../Model/ElasticSyncMatching.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncSyncIdMatchesPut

> \OpenAPI\Client\Model\ElasticSyncMatching restElasticSyncSyncSyncIdMatchesPut($sync_id)

Update sync matches.

Updates sync matches. The ID of the sync matching must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdMatchesPut($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdMatchesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMatching**](../Model/ElasticSyncMatching.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncSyncIdMatchingEntityGet

> object[] restElasticSyncSyncSyncIdMatchingEntityGet($sync_id)

Get an entity.

Gets an entity by sync ID. The sync ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | The sync ID of the mapping

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdMatchingEntityGet($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdMatchingEntityGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**| The sync ID of the mapping |

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


## restElasticSyncSyncSyncIdMatchingPost

> \OpenAPI\Client\Model\ElasticSyncMatching restElasticSyncSyncSyncIdMatchingPost($sync_id)

Create a sync matching.

Creates a sync matching.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdMatchingPost($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdMatchingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncMatching**](../Model/ElasticSyncMatching.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncSyncIdOptionPost

> \OpenAPI\Client\Model\ElasticSyncOption restElasticSyncSyncSyncIdOptionPost($sync_id)

Create a sync option.

Creates a sync option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdOptionPost($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdOptionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncOption**](../Model/ElasticSyncOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncSyncIdOptionsGet

> object restElasticSyncSyncSyncIdOptionsGet($sync_id)

List syncs.

Lists syncs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdOptionsGet($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdOptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

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


## restElasticSyncSyncSyncIdOptionsPost

> \OpenAPI\Client\Model\ElasticSyncOption restElasticSyncSyncSyncIdOptionsPost($sync_id)

Create sync options.

Creates sync options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdOptionsPost($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdOptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncOption**](../Model/ElasticSyncOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncSyncIdOptionsPut

> \OpenAPI\Client\Model\ElasticSyncSync restElasticSyncSyncSyncIdOptionsPut($sync_id)

Update sync options.

Updates sync options. The ID of the sync must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdOptionsPut($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdOptionsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncSync**](../Model/ElasticSyncSync.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncSyncIdPreviewValuesGet

> object[] restElasticSyncSyncSyncIdPreviewValuesGet($sync_id)

Get preview of csv values.

Gets preview of csv values. The sync ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | The id of the sync

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdPreviewValuesGet($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdPreviewValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**| The id of the sync |

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


## restElasticSyncSyncSyncIdPut

> \OpenAPI\Client\Model\ElasticSyncSync restElasticSyncSyncSyncIdPut($sync_id)

Update a sync.

Updates a sync. The ID of the sync must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdPut($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ElasticSyncSync**](../Model/ElasticSyncSync.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncSyncIdRunPost

> restElasticSyncSyncSyncIdRunPost($sync_id, $testrun)

Execute the run procedure.

Executes the run procedure. Data with sync ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | The ID of the sync
$testrun = 56; // int | The test run variable

try {
    $apiInstance->restElasticSyncSyncSyncIdRunPost($sync_id, $testrun);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdRunPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**| The ID of the sync |
 **testrun** | **int**| The test run variable |

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


## restElasticSyncSyncSyncIdSourcePreviewGet

> object[] restElasticSyncSyncSyncIdSourcePreviewGet($sync_id)

Preview the syncs.

Previews the syncs. The sync ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncIdSourcePreviewGet($sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncIdSourcePreviewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_id** | **int**|  |

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


## restElasticSyncSyncSyncTypeMatchingFieldsGet

> object[] restElasticSyncSyncSyncTypeMatchingFieldsGet($sync_type, $sync_type2)

Get a list of all mappings for a particular sync type.

Gets a list of all mappings for a particular sync type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_type = 'sync_type_example'; // string | The sync type of the matching
$sync_type2 = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncSyncTypeMatchingFieldsGet($sync_type, $sync_type2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncSyncTypeMatchingFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_type** | **string**| The sync type of the matching |
 **sync_type2** | **int**|  |

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


## restElasticSyncSyncTypesGet

> object[] restElasticSyncSyncTypesGet()

Get list of sync types.

Gets list of sync types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncTypesGet: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncsCopyPost

> object[] restElasticSyncSyncsCopyPost()

Copy the syncs.

Copies the syncs. The sync ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncsCopyPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncsCopyPost: ', $e->getMessage(), PHP_EOL;
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


## restElasticSyncSyncsDelete

> \OpenAPI\Client\Model\ElasticSyncSync restElasticSyncSyncsDelete()

Delete syncs.

Deletes syncs. The IDs of the syncs must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncsDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ElasticSyncSync**](../Model/ElasticSyncSync.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restElasticSyncSyncsExportPost

> object[] restElasticSyncSyncsExportPost($sync_ids)

Export the syncs.

Exports the syncs. The sync ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_ids = 56; // int | The ID of the sync

try {
    $result = $apiInstance->restElasticSyncSyncsExportPost($sync_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncsExportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_ids** | **int**| The ID of the sync |

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


## restElasticSyncSyncsExportSyncIdGet

> object[] restElasticSyncSyncsExportSyncIdGet($sync_ids, $sync_id)

Export the sync.

Exports the sync. The sync ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_ids = 56; // int | The ID of the sync
$sync_id = 56; // int | 

try {
    $result = $apiInstance->restElasticSyncSyncsExportSyncIdGet($sync_ids, $sync_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncsExportSyncIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_ids** | **int**| The ID of the sync |
 **sync_id** | **int**|  |

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


## restElasticSyncSyncsGet

> \OpenAPI\Client\Model\InlineResponse2005 restElasticSyncSyncsGet()

Get all Syncs

Get all Syncs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElasticSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restElasticSyncSyncsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElasticSyncApi->restElasticSyncSyncsGet: ', $e->getMessage(), PHP_EOL;
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

