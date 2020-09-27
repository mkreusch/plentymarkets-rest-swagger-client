# OpenAPI\Client\ContactAnonymizationApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restAccountsContactsContactIdAnonymizePut**](ContactAnonymizationApi.md#restAccountsContactsContactIdAnonymizePut) | **PUT** /rest/accounts/contacts/{contactId}/anonymize | Anonymize contact



## restAccountsContactsContactIdAnonymizePut

> \OpenAPI\Client\Model\Contact restAccountsContactsContactIdAnonymizePut($contact_id)

Anonymize contact

Anonymizes the contact by the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactAnonymizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdAnonymizePut($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAnonymizationApi->restAccountsContactsContactIdAnonymizePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| The ID of the contact |

### Return type

[**\OpenAPI\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

