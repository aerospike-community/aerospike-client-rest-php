# Swagger\Client\BatchReadOperationsApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**performBatchGet**](BatchReadOperationsApi.md#performbatchget) | **POST** /v1/batch | Return multiple records from the server in a single request.

# **performBatchGet**
> \Swagger\Client\Model\BatchRead[] performBatchGet($body, $authorization, $allow_inline, $compress, $keytype, $max_concurrent_threads, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $replica, $send_key, $send_set_name, $sleep_between_retries, $socket_timeout, $total_timeout)

Return multiple records from the server in a single request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchReadOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\BatchReadRequest()); // \Swagger\Client\Model\BatchReadRequest[] | batchKeys
$authorization = "authorization_example"; // string | Authorization
$allow_inline = true; // bool | Allow batch to be processed immediately in the server's receiving thread when the server deems it to be appropriate.  If false, the batch will always be processed in separate transaction threads.  This field is only relevant for the new batch index protocol.
$compress = false; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$keytype = "STRING"; // string | The Type of the userKey.
$max_concurrent_threads = 1; // int | Maximum number of concurrent synchronous batch request threads to server nodes at any point in time. If there are 16 node/namespace combinations requested and maxConcurrentThreads is 8, then batch requests will be made for 8 node/namespace combinations in parallel threads. When a request completes, a new request will be issued until all 16 requests are complete.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "null"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "ONE"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "SESSION"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$replica = "SEQUENCE"; // string | Replica algorithm used to determine the target node for a single record command.
$send_key = false; // bool | Send user defined key in addition to hash digest on both reads and writes.
$send_set_name = false; // bool | Send set name field to server for every key in the batch for batch index protocol. This is only necessary when authentication is enabled and security roles are defined on a per set basis.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->performBatchGet($body, $authorization, $allow_inline, $compress, $keytype, $max_concurrent_threads, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $replica, $send_key, $send_set_name, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchReadOperationsApi->performBatchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BatchReadRequest[]**](../Model/BatchReadRequest.md)| batchKeys |
 **authorization** | **string**| Authorization | [optional]
 **allow_inline** | **bool**| Allow batch to be processed immediately in the server&#x27;s receiving thread when the server deems it to be appropriate.  If false, the batch will always be processed in separate transaction threads.  This field is only relevant for the new batch index protocol. | [optional] [default to true]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional] [default to false]
 **keytype** | **string**| The Type of the userKey. | [optional] [default to STRING]
 **max_concurrent_threads** | **int**| Maximum number of concurrent synchronous batch request threads to server nodes at any point in time. If there are 16 node/namespace combinations requested and maxConcurrentThreads is 8, then batch requests will be made for 8 node/namespace combinations in parallel threads. When a request completes, a new request will be issued until all 16 requests are complete. | [optional] [default to 1]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional] [default to null]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional] [default to ONE]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional] [default to SESSION]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional] [default to SEQUENCE]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional] [default to false]
 **send_set_name** | **bool**| Send set name field to server for every key in the batch for batch index protocol. This is only necessary when authentication is enabled and security roles are defined on a per set basis. | [optional] [default to false]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

[**\Swagger\Client\Model\BatchRead[]**](../Model/BatchRead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

