# Swagger\Client\InfoOperationsApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**infoAny**](InfoOperationsApi.md#infoany) | **POST** /v1/info | Send a list of info commands to a random node in the cluster
[**infoNode**](InfoOperationsApi.md#infonode) | **POST** /v1/info/{node} | Send a list of info commands to a specific node in the cluster.

# **infoAny**
> map[string,string] infoAny($body, $authorization)

Send a list of info commands to a random node in the cluster

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InfoOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array("body_example"); // string[] | An array of info commands to send to the server. See https://www.aerospike.com/docs/reference/info/ for a list of valid commands.
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $apiInstance->infoAny($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoOperationsApi->infoAny: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| An array of info commands to send to the server. See https://www.aerospike.com/docs/reference/info/ for a list of valid commands. |
 **authorization** | **string**| Authorization | [optional]

### Return type

**map[string,string]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **infoNode**
> map[string,string] infoNode($body, $node, $authorization)

Send a list of info commands to a specific node in the cluster.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InfoOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array("body_example"); // string[] | An array of info commands to send to the server. See https://www.aerospike.com/docs/reference/info/ for a list of valid commands.
$node = "node_example"; // string | The node ID for the node which will receive the info commands.
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $apiInstance->infoNode($body, $node, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoOperationsApi->infoNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| An array of info commands to send to the server. See https://www.aerospike.com/docs/reference/info/ for a list of valid commands. |
 **node** | **string**| The node ID for the node which will receive the info commands. |
 **authorization** | **string**| Authorization | [optional]

### Return type

**map[string,string]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

