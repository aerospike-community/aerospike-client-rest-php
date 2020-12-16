# Swagger\Client\ClusterInformationOperationsApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClusterInfo**](ClusterInformationOperationsApi.md#getclusterinfo) | **GET** /v1/cluster | Return an object containing information about the Aerospike cluster.

# **getClusterInfo**
> \Swagger\Client\Model\ClusterInformation getClusterInfo($authorization)

Return an object containing information about the Aerospike cluster.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClusterInformationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $apiInstance->getClusterInfo($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClusterInformationOperationsApi->getClusterInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\Swagger\Client\Model\ClusterInformation**](../Model/ClusterInformation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

