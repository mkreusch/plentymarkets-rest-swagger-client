# OpenAPI\Client\PaymentApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restPaymentPaymentIdContactContactIdPost**](PaymentApi.md#restPaymentPaymentIdContactContactIdPost) | **POST** /rest/payment/{paymentId}/contact/{contactId} | Create Payment-Contact-Relation
[**restPaymentPaymentIdContactDelete**](PaymentApi.md#restPaymentPaymentIdContactDelete) | **DELETE** /rest/payment/{paymentId}/contact | Delete Payment-Contact-Relation
[**restPaymentPaymentIdOrderDelete**](PaymentApi.md#restPaymentPaymentIdOrderDelete) | **DELETE** /rest/payment/{paymentId}/order | Delete Payment-Order-Relation
[**restPaymentPaymentIdOrderOrderIdPost**](PaymentApi.md#restPaymentPaymentIdOrderOrderIdPost) | **POST** /rest/payment/{paymentId}/order/{orderId} | Create Payment-Order-Relation
[**restPaymentPropertiesTypesNamesNameIdGet**](PaymentApi.md#restPaymentPropertiesTypesNamesNameIdGet) | **GET** /rest/payment/properties/types/names/{nameId} | Get a name of a property type
[**restPaymentPropertiesTypesNamesPost**](PaymentApi.md#restPaymentPropertiesTypesNamesPost) | **POST** /rest/payment/properties/types/names | Create a name of a property type
[**restPaymentPropertiesTypesNamesPut**](PaymentApi.md#restPaymentPropertiesTypesNamesPut) | **PUT** /rest/payment/properties/types/names | Update a name of a property type
[**restPaymentsEntrydateGet**](PaymentApi.md#restPaymentsEntrydateGet) | **GET** /rest/payments/entrydate | List payments by entry date
[**restPaymentsGet**](PaymentApi.md#restPaymentsGet) | **GET** /rest/payments | List payments
[**restPaymentsImportdateGet**](PaymentApi.md#restPaymentsImportdateGet) | **GET** /rest/payments/importdate | List payments by import date
[**restPaymentsMethodNamesGet**](PaymentApi.md#restPaymentsMethodNamesGet) | **GET** /rest/payments/methodNames | List payment methods names
[**restPaymentsMethodNamesPaymentMethodIdGet**](PaymentApi.md#restPaymentsMethodNamesPaymentMethodIdGet) | **GET** /rest/payments/methodNames/{paymentMethodId} | List all payment method names for a payment method id
[**restPaymentsMethodNamesPaymentMethodIdLangGet**](PaymentApi.md#restPaymentsMethodNamesPaymentMethodIdLangGet) | **GET** /rest/payments/methodNames/{paymentMethodId}/{lang} | Gets a payment method name by id and lang
[**restPaymentsMethodsEbicsGet**](PaymentApi.md#restPaymentsMethodsEbicsGet) | **GET** /rest/payments/methods/ebics | Get EBICS Accounts
[**restPaymentsMethodsEbicsPost**](PaymentApi.md#restPaymentsMethodsEbicsPost) | **POST** /rest/payments/methods/ebics | Create an EBICS Account
[**restPaymentsMethodsGet**](PaymentApi.md#restPaymentsMethodsGet) | **GET** /rest/payments/methods | List payment methods
[**restPaymentsMethodsHbciGet**](PaymentApi.md#restPaymentsMethodsHbciGet) | **GET** /rest/payments/methods/hbci | Returns the HBCI-Account count
[**restPaymentsMethodsListBackendActiveLanguageGet**](PaymentApi.md#restPaymentsMethodsListBackendActiveLanguageGet) | **GET** /rest/payments/methods/list/backend_active/{language} | Returns all payment methods with id and name which are active for the backend
[**restPaymentsMethodsListBackendIconGet**](PaymentApi.md#restPaymentsMethodsListBackendIconGet) | **GET** /rest/payments/methods/list/backend_icon | Returns all payment methods with id and backend icon url
[**restPaymentsMethodsListBackendSearchableLanguageGet**](PaymentApi.md#restPaymentsMethodsListBackendSearchableLanguageGet) | **GET** /rest/payments/methods/list/backend_searchable/{language} | Returns all payment methods with id and name which are searchable for the backend
[**restPaymentsMethodsListGet**](PaymentApi.md#restPaymentsMethodsListGet) | **GET** /rest/payments/methods/list | Returns all payment methods with id and name
[**restPaymentsMethodsListHandleSubscriptionLanguageGet**](PaymentApi.md#restPaymentsMethodsListHandleSubscriptionLanguageGet) | **GET** /rest/payments/methods/list/handle_subscription/{language} | 
[**restPaymentsMethodsMethodIdGet**](PaymentApi.md#restPaymentsMethodsMethodIdGet) | **GET** /rest/payments/methods/{methodId} | List payments of a payment method
[**restPaymentsMethodsPluginsPluginKeyGet**](PaymentApi.md#restPaymentsMethodsPluginsPluginKeyGet) | **GET** /rest/payments/methods/plugins/{pluginKey} | Get a payment method
[**restPaymentsMethodsPost**](PaymentApi.md#restPaymentsMethodsPost) | **POST** /rest/payments/methods | Create a payment method
[**restPaymentsMethodsPut**](PaymentApi.md#restPaymentsMethodsPut) | **PUT** /rest/payments/methods | Update a payment method
[**restPaymentsOrdersOrderIdGet**](PaymentApi.md#restPaymentsOrdersOrderIdGet) | **GET** /rest/payments/orders/{orderId} | List payments of an order
[**restPaymentsPaymentIdGet**](PaymentApi.md#restPaymentsPaymentIdGet) | **GET** /rest/payments/{paymentId} | Get a payment
[**restPaymentsPaymentIdPropertiesGet**](PaymentApi.md#restPaymentsPaymentIdPropertiesGet) | **GET** /rest/payments/{paymentId}/properties | List properties for a payment
[**restPaymentsPost**](PaymentApi.md#restPaymentsPost) | **POST** /rest/payments | Create a payment
[**restPaymentsPropertiesDateGet**](PaymentApi.md#restPaymentsPropertiesDateGet) | **GET** /rest/payments/properties/date | List properties by creation date
[**restPaymentsPropertiesGet**](PaymentApi.md#restPaymentsPropertiesGet) | **GET** /rest/payments/properties | List properties
[**restPaymentsPropertiesPost**](PaymentApi.md#restPaymentsPropertiesPost) | **POST** /rest/payments/properties | Create a payment property
[**restPaymentsPropertiesPropertyIdGet**](PaymentApi.md#restPaymentsPropertiesPropertyIdGet) | **GET** /rest/payments/properties/{propertyId} | Get a property
[**restPaymentsPropertiesPut**](PaymentApi.md#restPaymentsPropertiesPut) | **PUT** /rest/payments/properties | Update a payment property
[**restPaymentsPropertiesTypesGet**](PaymentApi.md#restPaymentsPropertiesTypesGet) | **GET** /rest/payments/properties/types | List property types
[**restPaymentsPropertiesTypesPost**](PaymentApi.md#restPaymentsPropertiesTypesPost) | **POST** /rest/payments/properties/types | Create a property type
[**restPaymentsPropertiesTypesPut**](PaymentApi.md#restPaymentsPropertiesTypesPut) | **PUT** /rest/payments/properties/types | Update a property type
[**restPaymentsPropertiesTypesTypeIdGet**](PaymentApi.md#restPaymentsPropertiesTypesTypeIdGet) | **GET** /rest/payments/properties/types/{typeId} | Get a property type
[**restPaymentsPropertyPropertyTypeIdPropertyValueGet**](PaymentApi.md#restPaymentsPropertyPropertyTypeIdPropertyValueGet) | **GET** /rest/payments/property/{propertyTypeId}/{propertyValue} | List payments by property type ID and value
[**restPaymentsPut**](PaymentApi.md#restPaymentsPut) | **PUT** /rest/payments | Update a payment
[**restPaymentsStatusStatusIdGet**](PaymentApi.md#restPaymentsStatusStatusIdGet) | **GET** /rest/payments/status/{statusId} | List payments of a payment status
[**restPaymentsTransactionsTransactionTypeIdGet**](PaymentApi.md#restPaymentsTransactionsTransactionTypeIdGet) | **GET** /rest/payments/transactions/{transactionTypeId} | List payments of a transaction type



## restPaymentPaymentIdContactContactIdPost

> \OpenAPI\Client\Model\PaymentContactRelation restPaymentPaymentIdContactContactIdPost($payment_id, $contact_id)

Create Payment-Contact-Relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int | 
$contact_id = 56; // int | 

try {
    $result = $apiInstance->restPaymentPaymentIdContactContactIdPost($payment_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPaymentIdContactContactIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **int**|  |
 **contact_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PaymentContactRelation**](../Model/PaymentContactRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentPaymentIdContactDelete

> restPaymentPaymentIdContactDelete($payment_id)

Delete Payment-Contact-Relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int | 

try {
    $apiInstance->restPaymentPaymentIdContactDelete($payment_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPaymentIdContactDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **int**|  |

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


## restPaymentPaymentIdOrderDelete

> restPaymentPaymentIdOrderDelete($payment_id)

Delete Payment-Order-Relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int | 

try {
    $apiInstance->restPaymentPaymentIdOrderDelete($payment_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPaymentIdOrderDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **int**|  |

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


## restPaymentPaymentIdOrderOrderIdPost

> \OpenAPI\Client\Model\PaymentOrderRelation restPaymentPaymentIdOrderOrderIdPost($payment_id, $order_id)

Create Payment-Order-Relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int | 
$order_id = 56; // int | 

try {
    $result = $apiInstance->restPaymentPaymentIdOrderOrderIdPost($payment_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPaymentIdOrderOrderIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **int**|  |
 **order_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PaymentOrderRelation**](../Model/PaymentOrderRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentPropertiesTypesNamesNameIdGet

> \OpenAPI\Client\Model\PaymentPropertyTypeName[] restPaymentPropertiesTypesNamesNameIdGet($name_id)

Get a name of a property type

Gets a name of a property type. The ID of the name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name_id = 56; // int | 

try {
    $result = $apiInstance->restPaymentPropertiesTypesNamesNameIdGet($name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPropertiesTypesNamesNameIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PaymentPropertyTypeName[]**](../Model/PaymentPropertyTypeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentPropertiesTypesNamesPost

> \OpenAPI\Client\Model\PaymentPropertyTypeName restPaymentPropertiesTypesNamesPost($_rest_payment_properties_types_names)

Create a name of a property type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payment_properties_types_names = new \OpenAPI\Client\Model\InlineObject201(); // \OpenAPI\Client\Model\InlineObject201 | 

try {
    $result = $apiInstance->restPaymentPropertiesTypesNamesPost($_rest_payment_properties_types_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPropertiesTypesNamesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payment_properties_types_names** | [**\OpenAPI\Client\Model\InlineObject201**](../Model/InlineObject201.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentPropertyTypeName**](../Model/PaymentPropertyTypeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentPropertiesTypesNamesPut

> \OpenAPI\Client\Model\PaymentPropertyTypeName restPaymentPropertiesTypesNamesPut($_rest_payment_properties_types_names)

Update a name of a property type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payment_properties_types_names = new \OpenAPI\Client\Model\InlineObject200(); // \OpenAPI\Client\Model\InlineObject200 | 

try {
    $result = $apiInstance->restPaymentPropertiesTypesNamesPut($_rest_payment_properties_types_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPropertiesTypesNamesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payment_properties_types_names** | [**\OpenAPI\Client\Model\InlineObject200**](../Model/InlineObject200.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentPropertyTypeName**](../Model/PaymentPropertyTypeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsEntrydateGet

> \OpenAPI\Client\Model\Payment[] restPaymentsEntrydateGet($start_date, $end_date, $items_per_page, $page)

List payments by entry date

Lists all payments by entry date within a certain date range. The start and the end of the date range must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 'start_date_example'; // string | The start date of the date range for the entry date of the payment
$end_date = 'end_date_example'; // string | The end date of the date range for the entry date of the payment
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsEntrydateGet($start_date, $end_date, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsEntrydateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| The start date of the date range for the entry date of the payment | [optional]
 **end_date** | **string**| The end date of the date range for the entry date of the payment | [optional]
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsGet

> \OpenAPI\Client\Model\Payment[] restPaymentsGet($items_per_page, $page)

List payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsImportdateGet

> \OpenAPI\Client\Model\Payment[] restPaymentsImportdateGet($start_date, $end_date, $items_per_page, $page)

List payments by import date

Lists all payments by import date within a certain date range. The start and the end of the date range must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 'start_date_example'; // string | The start date of the date range for the import date of the payment
$end_date = 'end_date_example'; // string | The end date of the date range for the import date of the payment
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsImportdateGet($start_date, $end_date, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsImportdateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| The start date of the date range for the import date of the payment | [optional]
 **end_date** | **string**| The end date of the date range for the import date of the payment | [optional]
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsMethodNamesGet

> \OpenAPI\Client\Model\PaymentMethodName[] restPaymentsMethodNamesGet($items_per_page, $page)

List payment methods names

Lists all payment method names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodNamesGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodNamesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentMethodName[]**](../Model/PaymentMethodName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsMethodNamesPaymentMethodIdGet

> \OpenAPI\Client\Model\PaymentMethodName[] restPaymentsMethodNamesPaymentMethodIdGet($payment_method_id, $items_per_page, $page)

List all payment method names for a payment method id

List all payment method names for a payment method id. The payment method id must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_id = 56; // int | 
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodNamesPaymentMethodIdGet($payment_method_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodNamesPaymentMethodIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **int**|  |
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentMethodName[]**](../Model/PaymentMethodName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsMethodNamesPaymentMethodIdLangGet

> \OpenAPI\Client\Model\PaymentMethodName restPaymentsMethodNamesPaymentMethodIdLangGet($payment_method_id, $lang)

Gets a payment method name by id and lang

Gets a payment method name by id and lang. The ID and the requested lang of the payment method must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restPaymentsMethodNamesPaymentMethodIdLangGet($payment_method_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodNamesPaymentMethodIdLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PaymentMethodName**](../Model/PaymentMethodName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsMethodsEbicsGet

> object[] restPaymentsMethodsEbicsGet()

Get EBICS Accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPaymentsMethodsEbicsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsEbicsGet: ', $e->getMessage(), PHP_EOL;
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


## restPaymentsMethodsEbicsPost

> object[] restPaymentsMethodsEbicsPost($name)

Create an EBICS Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the EBICS Account

try {
    $result = $apiInstance->restPaymentsMethodsEbicsPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsEbicsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the EBICS Account | [optional]

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


## restPaymentsMethodsGet

> \OpenAPI\Client\Model\PaymentMethod[] restPaymentsMethodsGet($items_per_page, $page)

List payment methods

Lists all payment method plugins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodsGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsMethodsHbciGet

> restPaymentsMethodsHbciGet()

Returns the HBCI-Account count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restPaymentsMethodsHbciGet();
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsHbciGet: ', $e->getMessage(), PHP_EOL;
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


## restPaymentsMethodsListBackendActiveLanguageGet

> object[] restPaymentsMethodsListBackendActiveLanguageGet($language)

Returns all payment methods with id and name which are active for the backend

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string | 

try {
    $result = $apiInstance->restPaymentsMethodsListBackendActiveLanguageGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListBackendActiveLanguageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |

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


## restPaymentsMethodsListBackendIconGet

> object[] restPaymentsMethodsListBackendIconGet()

Returns all payment methods with id and backend icon url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPaymentsMethodsListBackendIconGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListBackendIconGet: ', $e->getMessage(), PHP_EOL;
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


## restPaymentsMethodsListBackendSearchableLanguageGet

> object[] restPaymentsMethodsListBackendSearchableLanguageGet($language)

Returns all payment methods with id and name which are searchable for the backend

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string | 

try {
    $result = $apiInstance->restPaymentsMethodsListBackendSearchableLanguageGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListBackendSearchableLanguageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |

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


## restPaymentsMethodsListGet

> object[] restPaymentsMethodsListGet()

Returns all payment methods with id and name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPaymentsMethodsListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListGet: ', $e->getMessage(), PHP_EOL;
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


## restPaymentsMethodsListHandleSubscriptionLanguageGet

> object[] restPaymentsMethodsListHandleSubscriptionLanguageGet($language)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string | 

try {
    $result = $apiInstance->restPaymentsMethodsListHandleSubscriptionLanguageGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListHandleSubscriptionLanguageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |

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


## restPaymentsMethodsMethodIdGet

> \OpenAPI\Client\Model\Payment[] restPaymentsMethodsMethodIdGet($method_id, $items_per_page, $page)

List payments of a payment method

Lists all payments of the a payment method. The ID of the payment method must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$method_id = 56; // int | 
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodsMethodIdGet($method_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsMethodIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **method_id** | **int**|  |
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsMethodsPluginsPluginKeyGet

> \OpenAPI\Client\Model\PaymentMethod[] restPaymentsMethodsPluginsPluginKeyGet($plugin_key, $items_per_page, $page)

Get a payment method

Gets a payment method plugin. The plugin key must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_key = 56; // int | 
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodsPluginsPluginKeyGet($plugin_key, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsPluginsPluginKeyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_key** | **int**|  |
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsMethodsPost

> \OpenAPI\Client\Model\PaymentMethod restPaymentsMethodsPost($_rest_payments_methods)

Create a payment method

Creates a payment method. The plugin key, the payment key and the name of the payment method must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_methods = new \OpenAPI\Client\Model\InlineObject205(); // \OpenAPI\Client\Model\InlineObject205 | 

try {
    $result = $apiInstance->restPaymentsMethodsPost($_rest_payments_methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payments_methods** | [**\OpenAPI\Client\Model\InlineObject205**](../Model/InlineObject205.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsMethodsPut

> \OpenAPI\Client\Model\PaymentMethod restPaymentsMethodsPut($_rest_payments_methods)

Update a payment method

Updates the name of the payment method. The name of the payment method must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_methods = new \OpenAPI\Client\Model\InlineObject204(); // \OpenAPI\Client\Model\InlineObject204 | 

try {
    $result = $apiInstance->restPaymentsMethodsPut($_rest_payments_methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payments_methods** | [**\OpenAPI\Client\Model\InlineObject204**](../Model/InlineObject204.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsOrdersOrderIdGet

> \OpenAPI\Client\Model\Payment[] restPaymentsOrdersOrderIdGet($order_id, $items_per_page, $page)

List payments of an order

Lists all payments of an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | 
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsOrdersOrderIdGet($order_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsOrdersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPaymentIdGet

> \OpenAPI\Client\Model\Payment restPaymentsPaymentIdGet($payment_id)

Get a payment

Gets a payment. The ID of the payment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int | 

try {
    $result = $apiInstance->restPaymentsPaymentIdGet($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Payment**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPaymentIdPropertiesGet

> \OpenAPI\Client\Model\PaymentProperty[] restPaymentsPaymentIdPropertiesGet($payment_id, $items_per_page, $page)

List properties for a payment

Lists all properties for a payment. The ID of the payment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int | 
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPaymentIdPropertiesGet($payment_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPaymentIdPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **int**|  |
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentProperty[]**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPost

> \OpenAPI\Client\Model\Payment restPaymentsPost($_rest_payments)

Create a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments = new \OpenAPI\Client\Model\InlineObject203(); // \OpenAPI\Client\Model\InlineObject203 | 

try {
    $result = $apiInstance->restPaymentsPost($_rest_payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payments** | [**\OpenAPI\Client\Model\InlineObject203**](../Model/InlineObject203.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertiesDateGet

> \OpenAPI\Client\Model\PaymentProperty[] restPaymentsPropertiesDateGet($start_date, $end_date, $items_per_page, $page)

List properties by creation date

Lists all properties by creation date. The start and the end of the date range must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 'start_date_example'; // string | The start date of the date range for the date of creation of the property
$end_date = 'end_date_example'; // string | The end date of the date range for the date of creation of the property
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPropertiesDateGet($start_date, $end_date, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesDateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| The start date of the date range for the date of creation of the property | [optional]
 **end_date** | **string**| The end date of the date range for the date of creation of the property | [optional]
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentProperty[]**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertiesGet

> \OpenAPI\Client\Model\PaymentProperty[] restPaymentsPropertiesGet($items_per_page, $page)

List properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPropertiesGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentProperty[]**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertiesPost

> \OpenAPI\Client\Model\PaymentProperty restPaymentsPropertiesPost($_rest_payments_properties)

Create a payment property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_properties = new \OpenAPI\Client\Model\InlineObject207(); // \OpenAPI\Client\Model\InlineObject207 | 

try {
    $result = $apiInstance->restPaymentsPropertiesPost($_rest_payments_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payments_properties** | [**\OpenAPI\Client\Model\InlineObject207**](../Model/InlineObject207.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentProperty**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertiesPropertyIdGet

> \OpenAPI\Client\Model\PaymentProperty restPaymentsPropertiesPropertyIdGet($property_id)

Get a property

Gets a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 

try {
    $result = $apiInstance->restPaymentsPropertiesPropertyIdGet($property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesPropertyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PaymentProperty**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertiesPut

> \OpenAPI\Client\Model\PaymentProperty restPaymentsPropertiesPut($_rest_payments_properties)

Update a payment property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_properties = new \OpenAPI\Client\Model\InlineObject206(); // \OpenAPI\Client\Model\InlineObject206 | 

try {
    $result = $apiInstance->restPaymentsPropertiesPut($_rest_payments_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payments_properties** | [**\OpenAPI\Client\Model\InlineObject206**](../Model/InlineObject206.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentProperty**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertiesTypesGet

> \OpenAPI\Client\Model\PaymentPropertyType[] restPaymentsPropertiesTypesGet($items_per_page, $page)

List property types

Lists all property types. The language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPropertiesTypesGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentPropertyType[]**](../Model/PaymentPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertiesTypesPost

> \OpenAPI\Client\Model\PaymentPropertyType restPaymentsPropertiesTypesPost($_rest_payments_properties_types)

Create a property type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_properties_types = new \OpenAPI\Client\Model\InlineObject209(); // \OpenAPI\Client\Model\InlineObject209 | 

try {
    $result = $apiInstance->restPaymentsPropertiesTypesPost($_rest_payments_properties_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payments_properties_types** | [**\OpenAPI\Client\Model\InlineObject209**](../Model/InlineObject209.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentPropertyType**](../Model/PaymentPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertiesTypesPut

> \OpenAPI\Client\Model\PaymentPropertyType restPaymentsPropertiesTypesPut($_rest_payments_properties_types)

Update a property type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_properties_types = new \OpenAPI\Client\Model\InlineObject208(); // \OpenAPI\Client\Model\InlineObject208 | 

try {
    $result = $apiInstance->restPaymentsPropertiesTypesPut($_rest_payments_properties_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesTypesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payments_properties_types** | [**\OpenAPI\Client\Model\InlineObject208**](../Model/InlineObject208.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentPropertyType**](../Model/PaymentPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertiesTypesTypeIdGet

> \OpenAPI\Client\Model\PaymentPropertyType[] restPaymentsPropertiesTypesTypeIdGet($type_id)

Get a property type

Gets a property type. The ID of the type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | 

try {
    $result = $apiInstance->restPaymentsPropertiesTypesTypeIdGet($type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesTypesTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PaymentPropertyType[]**](../Model/PaymentPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPropertyPropertyTypeIdPropertyValueGet

> \OpenAPI\Client\Model\Payment[] restPaymentsPropertyPropertyTypeIdPropertyValueGet($property_type_id, $property_value, $items_per_page, $page)

List payments by property type ID and value

Lists all payments by the given property type ID and the value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_type_id = 56; // int | 
$property_value = 56; // int | 
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPropertyPropertyTypeIdPropertyValueGet($property_type_id, $property_value, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertyPropertyTypeIdPropertyValueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_type_id** | **int**|  |
 **property_value** | **int**|  |
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsPut

> \OpenAPI\Client\Model\Payment restPaymentsPut($_rest_payments)

Update a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments = new \OpenAPI\Client\Model\InlineObject202(); // \OpenAPI\Client\Model\InlineObject202 | 

try {
    $result = $apiInstance->restPaymentsPut($_rest_payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_payments** | [**\OpenAPI\Client\Model\InlineObject202**](../Model/InlineObject202.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsStatusStatusIdGet

> \OpenAPI\Client\Model\Payment[] restPaymentsStatusStatusIdGet($status_id, $items_per_page, $page)

List payments of a payment status

Lists all payments of a payment status. The ID of the <a href='https://developers.plentymarkets.com/rest-doc/introduction#payment-statuses'  target='_blank'>payment status</a> must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status_id = 56; // int | 
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsStatusStatusIdGet($status_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsStatusStatusIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_id** | **int**|  |
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restPaymentsTransactionsTransactionTypeIdGet

> \OpenAPI\Client\Model\Payment[] restPaymentsTransactionsTransactionTypeIdGet($transaction_type_id, $items_per_page, $page)

List payments of a transaction type

Lists all payments of a transaction type. The ID of the transaction type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_type_id = 56; // int | 
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsTransactionsTransactionTypeIdGet($transaction_type_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsTransactionsTransactionTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_type_id** | **int**|  |
 **items_per_page** | **int**| The number of items to list per page | [optional]
 **page** | **int**| The page of results to search for | [optional]

### Return type

[**\OpenAPI\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

