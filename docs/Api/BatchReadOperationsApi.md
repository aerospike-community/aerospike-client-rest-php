# OpenAPI\Client\BatchReadOperationsApi

All URIs are relative to http://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**performBatchGet()**](BatchReadOperationsApi.md#performBatchGet) | **POST** /v1/batch | Return multiple records from the server in a single request.


## `performBatchGet()`

```php
performBatchGet($batch_keys, $authorization, $allow_inline, $compress, $keytype, $max_concurrent_threads, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $replica, $send_key, $send_set_name, $sleep_between_retries, $socket_timeout, $total_timeout): \OpenAPI\Client\Model\BatchRead[]
```

Return multiple records from the server in a single request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BatchReadOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_keys = array(new \OpenAPI\Client\Model\BatchReadRequest()); // \OpenAPI\Client\Model\BatchReadRequest[] | batchKeys
$authorization = 'authorization_example'; // string | Authorization
$allow_inline = True; // bool | Allow batch to be processed immediately in the server's receiving thread when the server deems it to be appropriate.  If false, the batch will always be processed in separate transaction threads.  This field is only relevant for the new batch index protocol.
$compress = True; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$keytype = 'keytype_example'; // string | The Type of the userKey.
$max_concurrent_threads = 56; // int | Maximum number of concurrent synchronous batch request threads to server nodes at any point in time. If there are 16 node/namespace combinations requested and maxConcurrentThreads is 8, then batch requests will be made for 8 node/namespace combinations in parallel threads. When a request completes, a new request will be issued until all 16 requests are complete.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = 'predexp_example'; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = 'read_mode_ap_example'; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = 'read_mode_sc_example'; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array('record_bins_example'); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$replica = 'replica_example'; // string | Replica algorithm used to determine the target node for a single record command.
$send_key = True; // bool | Send user defined key in addition to hash digest on both reads and writes.
$send_set_name = True; // bool | Send set name field to server for every key in the batch for batch index protocol. This is only necessary when authentication is enabled and security roles are defined on a per set basis.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->performBatchGet($batch_keys, $authorization, $allow_inline, $compress, $keytype, $max_concurrent_threads, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $replica, $send_key, $send_set_name, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchReadOperationsApi->performBatchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_keys** | [**\OpenAPI\Client\Model\BatchReadRequest[]**](../Model/BatchReadRequest.md)| batchKeys |
 **authorization** | **string**| Authorization | [optional]
 **allow_inline** | **bool**| Allow batch to be processed immediately in the server&#39;s receiving thread when the server deems it to be appropriate.  If false, the batch will always be processed in separate transaction threads.  This field is only relevant for the new batch index protocol. | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_concurrent_threads** | **int**| Maximum number of concurrent synchronous batch request threads to server nodes at any point in time. If there are 16 node/namespace combinations requested and maxConcurrentThreads is 8, then batch requests will be made for 8 node/namespace combinations in parallel threads. When a request completes, a new request will be issued until all 16 requests are complete. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **send_set_name** | **bool**| Send set name field to server for every key in the batch for batch index protocol. This is only necessary when authentication is enabled and security roles are defined on a per set basis. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchRead[]**](../Model/BatchRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
