# Swagger\Client\ScanOperationsApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**performScan**](ScanOperationsApi.md#performscan) | **GET** /v1/scan/{namespace}/{set} | Return multiple records from the server in a scan request.
[**performScan1**](ScanOperationsApi.md#performscan1) | **GET** /v1/scan/{namespace} | Return multiple records from the server in a scan request.

# **performScan**
> \Swagger\Client\Model\RestClientScanResponse performScan($namespace, $set, $authorization, $compress, $concurrent_nodes, $fail_on_cluster_change, $from, $include_bin_data, $keytype, $max_concurrent_nodes, $max_records, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $records_per_second, $replica, $scan_percent, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Return multiple records from the server in a scan request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScanOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$set = "set_example"; // string | Set for the record; equivalent to database table.
$authorization = "authorization_example"; // string | Authorization
$compress = false; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$concurrent_nodes = true; // bool | Should scan requests be issued in parallel.
$fail_on_cluster_change = false; // bool | Terminate scan if cluster in migration state. Only used for server versions < 4.9.
$from = "null"; // string | Next page token parameter.
$include_bin_data = true; // bool | Should bin data be retrieved. If false, only record digests (and user keys if stored on the server) are retrieved.
$keytype = "STRING"; // string | The Type of the userKey.
$max_concurrent_nodes = 56; // int | Maximum number of concurrent requests to server nodes at any point in time. If there are 16 nodes in the cluster and maxConcurrentNodes is 8, then scan requests will be made to 8 nodes in parallel.  When a scan completes, a new scan request will be issued until all 16 nodes have been scanned. This field is only relevant when concurrentNodes is true.
$max_records = 56; // int | Number of records to return.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "null"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "ONE"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "SESSION"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$records_per_second = 0; // int | Limit returned records per second (rps) rate for each server. Do not apply rps limit if recordsPerSecond is zero.
$replica = "SEQUENCE"; // string | Replica algorithm used to determine the target node for a single record command.
$scan_percent = 100; // int | Percent of data to scan. Valid integer range is 1 to 100. This field is supported on server versions < 4.9. For server versions >= 4.9, use maxRecords.
$send_key = false; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->performScan($namespace, $set, $authorization, $compress, $concurrent_nodes, $fail_on_cluster_change, $from, $include_bin_data, $keytype, $max_concurrent_nodes, $max_records, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $records_per_second, $replica, $scan_percent, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanOperationsApi->performScan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **set** | **string**| Set for the record; equivalent to database table. |
 **authorization** | **string**| Authorization | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional] [default to false]
 **concurrent_nodes** | **bool**| Should scan requests be issued in parallel. | [optional] [default to true]
 **fail_on_cluster_change** | **bool**| Terminate scan if cluster in migration state. Only used for server versions &lt; 4.9. | [optional] [default to false]
 **from** | **string**| Next page token parameter. | [optional] [default to null]
 **include_bin_data** | **bool**| Should bin data be retrieved. If false, only record digests (and user keys if stored on the server) are retrieved. | [optional] [default to true]
 **keytype** | **string**| The Type of the userKey. | [optional] [default to STRING]
 **max_concurrent_nodes** | **int**| Maximum number of concurrent requests to server nodes at any point in time. If there are 16 nodes in the cluster and maxConcurrentNodes is 8, then scan requests will be made to 8 nodes in parallel.  When a scan completes, a new scan request will be issued until all 16 nodes have been scanned. This field is only relevant when concurrentNodes is true. | [optional]
 **max_records** | **int**| Number of records to return. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional] [default to null]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional] [default to ONE]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional] [default to SESSION]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **records_per_second** | **int**| Limit returned records per second (rps) rate for each server. Do not apply rps limit if recordsPerSecond is zero. | [optional] [default to 0]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional] [default to SEQUENCE]
 **scan_percent** | **int**| Percent of data to scan. Valid integer range is 1 to 100. This field is supported on server versions &lt; 4.9. For server versions &gt;&#x3D; 4.9, use maxRecords. | [optional] [default to 100]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional] [default to false]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

[**\Swagger\Client\Model\RestClientScanResponse**](../Model/RestClientScanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **performScan1**
> \Swagger\Client\Model\RestClientScanResponse performScan1($namespace, $authorization, $compress, $concurrent_nodes, $fail_on_cluster_change, $from, $include_bin_data, $keytype, $max_concurrent_nodes, $max_records, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $records_per_second, $replica, $scan_percent, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Return multiple records from the server in a scan request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScanOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$authorization = "authorization_example"; // string | Authorization
$compress = false; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$concurrent_nodes = true; // bool | Should scan requests be issued in parallel.
$fail_on_cluster_change = false; // bool | Terminate scan if cluster in migration state. Only used for server versions < 4.9.
$from = "null"; // string | Next page token parameter.
$include_bin_data = true; // bool | Should bin data be retrieved. If false, only record digests (and user keys if stored on the server) are retrieved.
$keytype = "STRING"; // string | The Type of the userKey.
$max_concurrent_nodes = 56; // int | Maximum number of concurrent requests to server nodes at any point in time. If there are 16 nodes in the cluster and maxConcurrentNodes is 8, then scan requests will be made to 8 nodes in parallel.  When a scan completes, a new scan request will be issued until all 16 nodes have been scanned. This field is only relevant when concurrentNodes is true.
$max_records = 56; // int | Number of records to return.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "null"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "ONE"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "SESSION"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$records_per_second = 0; // int | Limit returned records per second (rps) rate for each server. Do not apply rps limit if recordsPerSecond is zero.
$replica = "SEQUENCE"; // string | Replica algorithm used to determine the target node for a single record command.
$scan_percent = 100; // int | Percent of data to scan. Valid integer range is 1 to 100. This field is supported on server versions < 4.9. For server versions >= 4.9, use maxRecords.
$send_key = false; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->performScan1($namespace, $authorization, $compress, $concurrent_nodes, $fail_on_cluster_change, $from, $include_bin_data, $keytype, $max_concurrent_nodes, $max_records, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $records_per_second, $replica, $scan_percent, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanOperationsApi->performScan1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **authorization** | **string**| Authorization | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional] [default to false]
 **concurrent_nodes** | **bool**| Should scan requests be issued in parallel. | [optional] [default to true]
 **fail_on_cluster_change** | **bool**| Terminate scan if cluster in migration state. Only used for server versions &lt; 4.9. | [optional] [default to false]
 **from** | **string**| Next page token parameter. | [optional] [default to null]
 **include_bin_data** | **bool**| Should bin data be retrieved. If false, only record digests (and user keys if stored on the server) are retrieved. | [optional] [default to true]
 **keytype** | **string**| The Type of the userKey. | [optional] [default to STRING]
 **max_concurrent_nodes** | **int**| Maximum number of concurrent requests to server nodes at any point in time. If there are 16 nodes in the cluster and maxConcurrentNodes is 8, then scan requests will be made to 8 nodes in parallel.  When a scan completes, a new scan request will be issued until all 16 nodes have been scanned. This field is only relevant when concurrentNodes is true. | [optional]
 **max_records** | **int**| Number of records to return. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional] [default to null]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional] [default to ONE]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional] [default to SESSION]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **records_per_second** | **int**| Limit returned records per second (rps) rate for each server. Do not apply rps limit if recordsPerSecond is zero. | [optional] [default to 0]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional] [default to SEQUENCE]
 **scan_percent** | **int**| Percent of data to scan. Valid integer range is 1 to 100. This field is supported on server versions &lt; 4.9. For server versions &gt;&#x3D; 4.9, use maxRecords. | [optional] [default to 100]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional] [default to false]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

[**\Swagger\Client\Model\RestClientScanResponse**](../Model/RestClientScanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
