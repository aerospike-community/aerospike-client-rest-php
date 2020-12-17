# OpenAPI\Client\ClusterInformationOperationsApi

All URIs are relative to http://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClusterInfo()**](ClusterInformationOperationsApi.md#getClusterInfo) | **GET** /v1/cluster | Return an object containing information about the Aerospike cluster.


## `getClusterInfo()`

```php
getClusterInfo($authorization): \OpenAPI\Client\Model\ClusterInformation
```

Return an object containing information about the Aerospike cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClusterInformationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | Authorization

try {
    $result = $apiInstance->getClusterInfo($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClusterInformationOperationsApi->getClusterInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\OpenAPI\Client\Model\ClusterInformation**](../Model/ClusterInformation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
