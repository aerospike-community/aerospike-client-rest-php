# OpenAPI\Client\InfoOperationsApi

All URIs are relative to http://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**infoAny()**](InfoOperationsApi.md#infoAny) | **POST** /v1/info | Send a list of info commands to a random node in the cluster
[**infoNode()**](InfoOperationsApi.md#infoNode) | **POST** /v1/info/{node} | Send a list of info commands to a specific node in the cluster.


## `infoAny()`

```php
infoAny($info_requests, $authorization): map[string,string]
```

Send a list of info commands to a random node in the cluster

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$info_requests = array('info_requests_example'); // string[] | An array of info commands to send to the server. See https://www.aerospike.com/docs/reference/info/ for a list of valid commands.
$authorization = 'authorization_example'; // string | Authorization

try {
    $result = $apiInstance->infoAny($info_requests, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoOperationsApi->infoAny: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **info_requests** | [**string[]**](../Model/string.md)| An array of info commands to send to the server. See https://www.aerospike.com/docs/reference/info/ for a list of valid commands. |
 **authorization** | **string**| Authorization | [optional]

### Return type

**map[string,string]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `infoNode()`

```php
infoNode($node, $info_requests, $authorization): map[string,string]
```

Send a list of info commands to a specific node in the cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InfoOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$node = 'node_example'; // string | The node ID for the node which will receive the info commands.
$info_requests = array('info_requests_example'); // string[] | An array of info commands to send to the server. See https://www.aerospike.com/docs/reference/info/ for a list of valid commands.
$authorization = 'authorization_example'; // string | Authorization

try {
    $result = $apiInstance->infoNode($node, $info_requests, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoOperationsApi->infoNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| The node ID for the node which will receive the info commands. |
 **info_requests** | [**string[]**](../Model/string.md)| An array of info commands to send to the server. See https://www.aerospike.com/docs/reference/info/ for a list of valid commands. |
 **authorization** | **string**| Authorization | [optional]

### Return type

**map[string,string]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
