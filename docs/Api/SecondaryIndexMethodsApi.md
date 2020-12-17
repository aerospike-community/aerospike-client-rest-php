# OpenAPI\Client\SecondaryIndexMethodsApi

All URIs are relative to http://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIndex()**](SecondaryIndexMethodsApi.md#createIndex) | **POST** /v1/index | Create a secondary index.
[**dropIndex()**](SecondaryIndexMethodsApi.md#dropIndex) | **DELETE** /v1/index/{namespace}/{name} | Remove a secondary Index
[**getIndexStats()**](SecondaryIndexMethodsApi.md#getIndexStats) | **GET** /v1/index/{namespace}/{name} | Get Information about a single secondary index.
[**indexInformation()**](SecondaryIndexMethodsApi.md#indexInformation) | **GET** /v1/index | Return information about multiple secondary indices.


## `createIndex()`

```php
createIndex($index_model, $authorization)
```

Create a secondary index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecondaryIndexMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_model = new \OpenAPI\Client\Model\RestClientIndex(); // \OpenAPI\Client\Model\RestClientIndex | indexModel
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->createIndex($index_model, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling SecondaryIndexMethodsApi->createIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index_model** | [**\OpenAPI\Client\Model\RestClientIndex**](../Model/RestClientIndex.md)| indexModel |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dropIndex()`

```php
dropIndex($name, $namespace, $authorization)
```

Remove a secondary Index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecondaryIndexMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the index
$namespace = 'namespace_example'; // string | The namespace containing the index
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->dropIndex($name, $namespace, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling SecondaryIndexMethodsApi->dropIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the index |
 **namespace** | **string**| The namespace containing the index |
 **authorization** | **string**| Authorization | [optional]

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

## `getIndexStats()`

```php
getIndexStats($name, $namespace, $authorization): map[string,string]
```

Get Information about a single secondary index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecondaryIndexMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the index
$namespace = 'namespace_example'; // string | The namespace containing the index
$authorization = 'authorization_example'; // string | Authorization

try {
    $result = $apiInstance->getIndexStats($name, $namespace, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondaryIndexMethodsApi->getIndexStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the index |
 **namespace** | **string**| The namespace containing the index |
 **authorization** | **string**| Authorization | [optional]

### Return type

**map[string,string]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexInformation()`

```php
indexInformation($authorization, $namespace): \OpenAPI\Client\Model\RestClientIndex[]
```

Return information about multiple secondary indices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecondaryIndexMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | Authorization
$namespace = 'namespace_example'; // string | If specified, the list of returned indices will only contain entries from this namespace.

try {
    $result = $apiInstance->indexInformation($authorization, $namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondaryIndexMethodsApi->indexInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional]
 **namespace** | **string**| If specified, the list of returned indices will only contain entries from this namespace. | [optional]

### Return type

[**\OpenAPI\Client\Model\RestClientIndex[]**](../Model/RestClientIndex.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
