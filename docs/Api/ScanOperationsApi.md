# OpenAPI\Client\ScanOperationsApi

All URIs are relative to http://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**performScan()**](ScanOperationsApi.md#performScan) | **GET** /v1/scan/{namespace}/{set} | Return multiple records from the server in a scan request.
[**performScan1()**](ScanOperationsApi.md#performScan1) | **GET** /v1/scan/{namespace} | Return multiple records from the server in a scan request.


## `performScan()`

```php
performScan($namespace, $set, $authorization, $compress, $concurrent_nodes, $fail_on_cluster_change, $from, $include_bin_data, $keytype, $max_concurrent_nodes, $max_records, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $records_per_second, $replica, $scan_percent, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout): \OpenAPI\Client\Model\RestClientScanResponse
```

Return multiple records from the server in a scan request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ScanOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Namespace for the record; equivalent to database name.
$set = 'set_example'; // string | Set for the record; equivalent to database table.
$authorization = 'authorization_example'; // string | Authorization
$compress = True; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$concurrent_nodes = True; // bool | Should scan requests be issued in parallel.
$fail_on_cluster_change = True; // bool | Terminate scan if cluster in migration state. Only used for server versions < 4.9.
$from = 'from_example'; // string | Next page token parameter.
$include_bin_data = True; // bool | Should bin data be retrieved. If false, only record digests (and user keys if stored on the server) are retrieved.
$keytype = 'keytype_example'; // string | The Type of the userKey.
$max_concurrent_nodes = 56; // int | Maximum number of concurrent requests to server nodes at any point in time. If there are 16 nodes in the cluster and maxConcurrentNodes is 8, then scan requests will be made to 8 nodes in parallel.  When a scan completes, a new scan request will be issued until all 16 nodes have been scanned. This field is only relevant when concurrentNodes is true.
$max_records = 56; // int | Number of records to return.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = 'predexp_example'; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = 'read_mode_ap_example'; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = 'read_mode_sc_example'; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array('record_bins_example'); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$records_per_second = 56; // int | Limit returned records per second (rps) rate for each server. Do not apply rps limit if recordsPerSecond is zero.
$replica = 'replica_example'; // string | Replica algorithm used to determine the target node for a single record command.
$scan_percent = 56; // int | Percent of data to scan. Valid integer range is 1 to 100. This field is supported on server versions < 4.9. For server versions >= 4.9, use maxRecords.
$send_key = True; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->performScan($namespace, $set, $authorization, $compress, $concurrent_nodes, $fail_on_cluster_change, $from, $include_bin_data, $keytype, $max_concurrent_nodes, $max_records, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $records_per_second, $replica, $scan_percent, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanOperationsApi->performScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **set** | **string**| Set for the record; equivalent to database table. |
 **authorization** | **string**| Authorization | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **concurrent_nodes** | **bool**| Should scan requests be issued in parallel. | [optional]
 **fail_on_cluster_change** | **bool**| Terminate scan if cluster in migration state. Only used for server versions &lt; 4.9. | [optional]
 **from** | **string**| Next page token parameter. | [optional]
 **include_bin_data** | **bool**| Should bin data be retrieved. If false, only record digests (and user keys if stored on the server) are retrieved. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_concurrent_nodes** | **int**| Maximum number of concurrent requests to server nodes at any point in time. If there are 16 nodes in the cluster and maxConcurrentNodes is 8, then scan requests will be made to 8 nodes in parallel.  When a scan completes, a new scan request will be issued until all 16 nodes have been scanned. This field is only relevant when concurrentNodes is true. | [optional]
 **max_records** | **int**| Number of records to return. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **records_per_second** | **int**| Limit returned records per second (rps) rate for each server. Do not apply rps limit if recordsPerSecond is zero. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **scan_percent** | **int**| Percent of data to scan. Valid integer range is 1 to 100. This field is supported on server versions &lt; 4.9. For server versions &gt;&#x3D; 4.9, use maxRecords. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

[**\OpenAPI\Client\Model\RestClientScanResponse**](../Model/RestClientScanResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performScan1()`

```php
performScan1($namespace, $authorization, $compress, $concurrent_nodes, $fail_on_cluster_change, $from, $include_bin_data, $keytype, $max_concurrent_nodes, $max_records, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $records_per_second, $replica, $scan_percent, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout): \OpenAPI\Client\Model\RestClientScanResponse
```

Return multiple records from the server in a scan request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ScanOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Namespace for the record; equivalent to database name.
$authorization = 'authorization_example'; // string | Authorization
$compress = True; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$concurrent_nodes = True; // bool | Should scan requests be issued in parallel.
$fail_on_cluster_change = True; // bool | Terminate scan if cluster in migration state. Only used for server versions < 4.9.
$from = 'from_example'; // string | Next page token parameter.
$include_bin_data = True; // bool | Should bin data be retrieved. If false, only record digests (and user keys if stored on the server) are retrieved.
$keytype = 'keytype_example'; // string | The Type of the userKey.
$max_concurrent_nodes = 56; // int | Maximum number of concurrent requests to server nodes at any point in time. If there are 16 nodes in the cluster and maxConcurrentNodes is 8, then scan requests will be made to 8 nodes in parallel.  When a scan completes, a new scan request will be issued until all 16 nodes have been scanned. This field is only relevant when concurrentNodes is true.
$max_records = 56; // int | Number of records to return.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = 'predexp_example'; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = 'read_mode_ap_example'; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = 'read_mode_sc_example'; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array('record_bins_example'); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$records_per_second = 56; // int | Limit returned records per second (rps) rate for each server. Do not apply rps limit if recordsPerSecond is zero.
$replica = 'replica_example'; // string | Replica algorithm used to determine the target node for a single record command.
$scan_percent = 56; // int | Percent of data to scan. Valid integer range is 1 to 100. This field is supported on server versions < 4.9. For server versions >= 4.9, use maxRecords.
$send_key = True; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->performScan1($namespace, $authorization, $compress, $concurrent_nodes, $fail_on_cluster_change, $from, $include_bin_data, $keytype, $max_concurrent_nodes, $max_records, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $records_per_second, $replica, $scan_percent, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanOperationsApi->performScan1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **authorization** | **string**| Authorization | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **concurrent_nodes** | **bool**| Should scan requests be issued in parallel. | [optional]
 **fail_on_cluster_change** | **bool**| Terminate scan if cluster in migration state. Only used for server versions &lt; 4.9. | [optional]
 **from** | **string**| Next page token parameter. | [optional]
 **include_bin_data** | **bool**| Should bin data be retrieved. If false, only record digests (and user keys if stored on the server) are retrieved. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_concurrent_nodes** | **int**| Maximum number of concurrent requests to server nodes at any point in time. If there are 16 nodes in the cluster and maxConcurrentNodes is 8, then scan requests will be made to 8 nodes in parallel.  When a scan completes, a new scan request will be issued until all 16 nodes have been scanned. This field is only relevant when concurrentNodes is true. | [optional]
 **max_records** | **int**| Number of records to return. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **records_per_second** | **int**| Limit returned records per second (rps) rate for each server. Do not apply rps limit if recordsPerSecond is zero. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **scan_percent** | **int**| Percent of data to scan. Valid integer range is 1 to 100. This field is supported on server versions &lt; 4.9. For server versions &gt;&#x3D; 4.9, use maxRecords. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

[**\OpenAPI\Client\Model\RestClientScanResponse**](../Model/RestClientScanResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
