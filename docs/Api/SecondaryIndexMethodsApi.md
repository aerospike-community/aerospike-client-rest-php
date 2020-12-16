# Swagger\Client\SecondaryIndexMethodsApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIndex**](SecondaryIndexMethodsApi.md#createindex) | **POST** /v1/index | Create a secondary index.
[**dropIndex**](SecondaryIndexMethodsApi.md#dropindex) | **DELETE** /v1/index/{namespace}/{name} | Remove a secondary Index
[**getIndexStats**](SecondaryIndexMethodsApi.md#getindexstats) | **GET** /v1/index/{namespace}/{name} | Get Information about a single secondary index.
[**indexInformation**](SecondaryIndexMethodsApi.md#indexinformation) | **GET** /v1/index | Return information about multiple secondary indices.

# **createIndex**
> createIndex($body, $authorization)

Create a secondary index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecondaryIndexMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RestClientIndex(); // \Swagger\Client\Model\RestClientIndex | indexModel
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->createIndex($body, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling SecondaryIndexMethodsApi->createIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RestClientIndex**](../Model/RestClientIndex.md)| indexModel |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dropIndex**
> dropIndex($name, $namespace, $authorization)

Remove a secondary Index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecondaryIndexMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the index
$namespace = "namespace_example"; // string | The namespace containing the index
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->dropIndex($name, $namespace, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling SecondaryIndexMethodsApi->dropIndex: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIndexStats**
> map[string,string] getIndexStats($name, $namespace, $authorization)

Get Information about a single secondary index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecondaryIndexMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the index
$namespace = "namespace_example"; // string | The namespace containing the index
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $apiInstance->getIndexStats($name, $namespace, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondaryIndexMethodsApi->getIndexStats: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexInformation**
> \Swagger\Client\Model\RestClientIndex[] indexInformation($authorization, $namespace)

Return information about multiple secondary indices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecondaryIndexMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Authorization
$namespace = "namespace_example"; // string | If specified, the list of returned indices will only contain entries from this namespace.

try {
    $result = $apiInstance->indexInformation($authorization, $namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondaryIndexMethodsApi->indexInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional]
 **namespace** | **string**| If specified, the list of returned indices will only contain entries from this namespace. | [optional]

### Return type

[**\Swagger\Client\Model\RestClientIndex[]**](../Model/RestClientIndex.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

