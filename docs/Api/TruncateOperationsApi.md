# OpenAPI\Client\TruncateOperationsApi

All URIs are relative to http://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**truncateNamespace()**](TruncateOperationsApi.md#truncateNamespace) | **DELETE** /v1/truncate/{namespace} | Truncate records in a specified namespace.
[**truncateSet()**](TruncateOperationsApi.md#truncateSet) | **DELETE** /v1/truncate/{namespace}/{set} | Truncate records in a specified namespace and set.


## `truncateNamespace()`

```php
truncateNamespace($namespace, $authorization, $date)
```

Truncate records in a specified namespace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TruncateOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | The namespace whose records will be truncated.
$authorization = 'authorization_example'; // string | Authorization
$date = 2019-12-03T10:15:30+01:00; // string | All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00

try {
    $apiInstance->truncateNamespace($namespace, $authorization, $date);
} catch (Exception $e) {
    echo 'Exception when calling TruncateOperationsApi->truncateNamespace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| The namespace whose records will be truncated. |
 **authorization** | **string**| Authorization | [optional]
 **date** | **string**| All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `truncateSet()`

```php
truncateSet($namespace, $set, $authorization, $date)
```

Truncate records in a specified namespace and set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TruncateOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | The namespace whose records will be truncated
$set = 'set_example'; // string | The set, in the specified namespace, whose records will be truncated
$authorization = 'authorization_example'; // string | Authorization
$date = 2019-12-03T10:15:30+01:00; // string | All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00

try {
    $apiInstance->truncateSet($namespace, $set, $authorization, $date);
} catch (Exception $e) {
    echo 'Exception when calling TruncateOperationsApi->truncateSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| The namespace whose records will be truncated |
 **set** | **string**| The set, in the specified namespace, whose records will be truncated |
 **authorization** | **string**| Authorization | [optional]
 **date** | **string**| All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
