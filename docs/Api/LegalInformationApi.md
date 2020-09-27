# OpenAPI\Client\LegalInformationApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restLegalinformationPlentyIdLangTypeGet**](LegalInformationApi.md#restLegalinformationPlentyIdLangTypeGet) | **GET** /rest/legalinformation/{plentyId}/{lang}/{type} | Get legal information of an online store
[**restLegalinformationPlentyIdLangTypePut**](LegalInformationApi.md#restLegalinformationPlentyIdLangTypePut) | **PUT** /rest/legalinformation/{plentyId}/{lang}/{type} | Save legal information for an online store



## restLegalinformationPlentyIdLangTypeGet

> \OpenAPI\Client\Model\LegalInformation restLegalinformationPlentyIdLangTypeGet($plenty_id, $lang, $type)

Get legal information of an online store

Gets legal information of an online store. The plenty ID of the store , the language and the type of legal information must be specified. The language must be specified as ISO 639-1 code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LegalInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plenty_id = 56; // int | The plenty ID of the online store.
$lang = 'lang_example'; // string | The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English
$type = 56; // int | 

try {
    $result = $apiInstance->restLegalinformationPlentyIdLangTypeGet($plenty_id, $lang, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalInformationApi->restLegalinformationPlentyIdLangTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plenty_id** | **int**| The plenty ID of the online store. |
 **lang** | **string**| The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English |
 **type** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\LegalInformation**](../Model/LegalInformation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restLegalinformationPlentyIdLangTypePut

> \OpenAPI\Client\Model\LegalInformation restLegalinformationPlentyIdLangTypePut($plenty_id, $lang, $type, $_rest_legalinformation_plenty_id_lang_type)

Save legal information for an online store

Saves a legal information for an online store. The plenty ID of the online store, the language of the legal information and the type of the legal information must be specified. The language must be specified as ISO 639-1 code. Existing legal information will be overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LegalInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plenty_id = 56; // int | The plenty ID of the online store
$lang = 'lang_example'; // string | The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English
$type = 56; // int | 
$_rest_legalinformation_plenty_id_lang_type = new \OpenAPI\Client\Model\InlineObject139(); // \OpenAPI\Client\Model\InlineObject139 | 

try {
    $result = $apiInstance->restLegalinformationPlentyIdLangTypePut($plenty_id, $lang, $type, $_rest_legalinformation_plenty_id_lang_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalInformationApi->restLegalinformationPlentyIdLangTypePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plenty_id** | **int**| The plenty ID of the online store |
 **lang** | **string**| The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English |
 **type** | **int**|  |
 **_rest_legalinformation_plenty_id_lang_type** | [**\OpenAPI\Client\Model\InlineObject139**](../Model/InlineObject139.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\LegalInformation**](../Model/LegalInformation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

