# Swagger\Client\KeyValueOperationsApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRecordNamespaceKey**](KeyValueOperationsApi.md#createrecordnamespacekey) | **POST** /v1/kvs/{namespace}/{key} | Create a new record with the provided bins into the record.
[**createRecordNamespaceSetKey**](KeyValueOperationsApi.md#createrecordnamespacesetkey) | **POST** /v1/kvs/{namespace}/{set}/{key} | Create a new record with the provided bins into the record.
[**deleteRecordNamespaceKey**](KeyValueOperationsApi.md#deleterecordnamespacekey) | **DELETE** /v1/kvs/{namespace}/{key} | Delete the specified record.
[**deleteRecordNamespaceSetKey**](KeyValueOperationsApi.md#deleterecordnamespacesetkey) | **DELETE** /v1/kvs/{namespace}/{set}/{key} | Delete the specified record.
[**getRecordNamespaceKey**](KeyValueOperationsApi.md#getrecordnamespacekey) | **GET** /v1/kvs/{namespace}/{key} | Return the metadata and bins for a record.
[**getRecordNamespaceSetKey**](KeyValueOperationsApi.md#getrecordnamespacesetkey) | **GET** /v1/kvs/{namespace}/{set}/{key} | Return the metadata and bins for a record.
[**recordExistsNamespaceKey**](KeyValueOperationsApi.md#recordexistsnamespacekey) | **HEAD** /v1/kvs/{namespace}/{key} | Check if a record exists
[**recordExistsNamespaceSetKey**](KeyValueOperationsApi.md#recordexistsnamespacesetkey) | **HEAD** /v1/kvs/{namespace}/{set}/{key} | Check if a record exists
[**replaceRecordNamespaceKey**](KeyValueOperationsApi.md#replacerecordnamespacekey) | **PUT** /v1/kvs/{namespace}/{key} | Replace the bins of the specified record.
[**replaceRecordNamespaceSetKey**](KeyValueOperationsApi.md#replacerecordnamespacesetkey) | **PUT** /v1/kvs/{namespace}/{set}/{key} | Replace the bins of the specified record.
[**updateRecordNamespaceKey**](KeyValueOperationsApi.md#updaterecordnamespacekey) | **PATCH** /v1/kvs/{namespace}/{key} | Merge the provided bins into the record.
[**updateRecordNamespaceSetKey**](KeyValueOperationsApi.md#updaterecordnamespacesetkey) | **PATCH** /v1/kvs/{namespace}/{set}/{key} | Merge the provided bins into the record.

# **createRecordNamespaceKey**
> createRecordNamespaceKey($body, $key, $namespace, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Create a new record with the provided bins into the record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {"bin1":5, "bin2":"hello", "bin3": [1,2,3], "bin4": {"one": 1}}
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$authorization = "authorization_example"; // string | Authorization
$commit_level = "commit_level_example"; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = true; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = "generation_policy_example"; // string | Qualify how to handle record writes based on record generation.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = "record_exists_action_example"; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = true; // bool | For client operate(), return a result for every operation.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $apiInstance->createRecordNamespaceKey($body, $key, $namespace, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->createRecordNamespaceKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {&quot;bin1&quot;:5, &quot;bin2&quot;:&quot;hello&quot;, &quot;bin3&quot;: [1,2,3], &quot;bin4&quot;: {&quot;one&quot;: 1}} |
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **authorization** | **string**| Authorization | [optional]
 **commit_level** | **string**| Desired consistency guarantee when committing a transaction on the server. | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **durable_delete** | **bool**| If the transaction results in a record deletion, leave a tombstone for the record. | [optional]
 **expiration** | **int**| Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server. | [optional]
 **generation** | **int**| Expected generation. Generation is the number of times a record has been modified (including creation) on the server. | [optional]
 **generation_policy** | **string**| Qualify how to handle record writes based on record generation. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **record_exists_action** | **string**| How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **respond_all_ops** | **bool**| For client operate(), return a result for every operation. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRecordNamespaceSetKey**
> createRecordNamespaceSetKey($body, $key, $namespace, $set, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Create a new record with the provided bins into the record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {"bin1":5, "bin2":"hello", "bin3": [1,2,3], "bin4": {"one": 1}}
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$set = "set_example"; // string | Set for the record; equivalent to database table.
$authorization = "authorization_example"; // string | Authorization
$commit_level = "commit_level_example"; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = true; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = "generation_policy_example"; // string | Qualify how to handle record writes based on record generation.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = "record_exists_action_example"; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = true; // bool | For client operate(), return a result for every operation.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $apiInstance->createRecordNamespaceSetKey($body, $key, $namespace, $set, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->createRecordNamespaceSetKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {&quot;bin1&quot;:5, &quot;bin2&quot;:&quot;hello&quot;, &quot;bin3&quot;: [1,2,3], &quot;bin4&quot;: {&quot;one&quot;: 1}} |
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **set** | **string**| Set for the record; equivalent to database table. |
 **authorization** | **string**| Authorization | [optional]
 **commit_level** | **string**| Desired consistency guarantee when committing a transaction on the server. | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **durable_delete** | **bool**| If the transaction results in a record deletion, leave a tombstone for the record. | [optional]
 **expiration** | **int**| Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server. | [optional]
 **generation** | **int**| Expected generation. Generation is the number of times a record has been modified (including creation) on the server. | [optional]
 **generation_policy** | **string**| Qualify how to handle record writes based on record generation. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **record_exists_action** | **string**| How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **respond_all_ops** | **bool**| For client operate(), return a result for every operation. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecordNamespaceKey**
> deleteRecordNamespaceKey($key, $namespace, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Delete the specified record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$authorization = "authorization_example"; // string | Authorization
$commit_level = "commit_level_example"; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = true; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = "generation_policy_example"; // string | Qualify how to handle record writes based on record generation.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = "record_exists_action_example"; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = true; // bool | For client operate(), return a result for every operation.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $apiInstance->deleteRecordNamespaceKey($key, $namespace, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->deleteRecordNamespaceKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **authorization** | **string**| Authorization | [optional]
 **commit_level** | **string**| Desired consistency guarantee when committing a transaction on the server. | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **durable_delete** | **bool**| If the transaction results in a record deletion, leave a tombstone for the record. | [optional]
 **expiration** | **int**| Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server. | [optional]
 **generation** | **int**| Expected generation. Generation is the number of times a record has been modified (including creation) on the server. | [optional]
 **generation_policy** | **string**| Qualify how to handle record writes based on record generation. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **record_exists_action** | **string**| How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **respond_all_ops** | **bool**| For client operate(), return a result for every operation. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecordNamespaceSetKey**
> deleteRecordNamespaceSetKey($key, $namespace, $set, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Delete the specified record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$set = "set_example"; // string | Set for the record; equivalent to database table.
$authorization = "authorization_example"; // string | Authorization
$commit_level = "commit_level_example"; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = true; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = "generation_policy_example"; // string | Qualify how to handle record writes based on record generation.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = "record_exists_action_example"; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = true; // bool | For client operate(), return a result for every operation.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $apiInstance->deleteRecordNamespaceSetKey($key, $namespace, $set, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->deleteRecordNamespaceSetKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **set** | **string**| Set for the record; equivalent to database table. |
 **authorization** | **string**| Authorization | [optional]
 **commit_level** | **string**| Desired consistency guarantee when committing a transaction on the server. | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **durable_delete** | **bool**| If the transaction results in a record deletion, leave a tombstone for the record. | [optional]
 **expiration** | **int**| Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server. | [optional]
 **generation** | **int**| Expected generation. Generation is the number of times a record has been modified (including creation) on the server. | [optional]
 **generation_policy** | **string**| Qualify how to handle record writes based on record generation. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **record_exists_action** | **string**| How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **respond_all_ops** | **bool**| For client operate(), return a result for every operation. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordNamespaceKey**
> \Swagger\Client\Model\Record getRecordNamespaceKey($key, $namespace, $authorization, $compress, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $replica, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Return the metadata and bins for a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$authorization = "authorization_example"; // string | Authorization
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->getRecordNamespaceKey($key, $namespace, $authorization, $compress, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $replica, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->getRecordNamespaceKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **authorization** | **string**| Authorization | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

[**\Swagger\Client\Model\Record**](../Model/Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordNamespaceSetKey**
> \Swagger\Client\Model\Record getRecordNamespaceSetKey($key, $namespace, $set, $authorization, $compress, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $replica, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Return the metadata and bins for a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$set = "set_example"; // string | Set for the record; equivalent to database table.
$authorization = "authorization_example"; // string | Authorization
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->getRecordNamespaceSetKey($key, $namespace, $set, $authorization, $compress, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $replica, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->getRecordNamespaceSetKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **set** | **string**| Set for the record; equivalent to database table. |
 **authorization** | **string**| Authorization | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

[**\Swagger\Client\Model\Record**](../Model/Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordExistsNamespaceKey**
> recordExistsNamespaceKey($key, $namespace, $authorization, $keytype)

Check if a record exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$authorization = "authorization_example"; // string | Authorization
$keytype = "keytype_example"; // string | The Type of the userKey.

try {
    $apiInstance->recordExistsNamespaceKey($key, $namespace, $authorization, $keytype);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->recordExistsNamespaceKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **authorization** | **string**| Authorization | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordExistsNamespaceSetKey**
> recordExistsNamespaceSetKey($key, $namespace, $set, $authorization, $keytype)

Check if a record exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$set = "set_example"; // string | Set for the record; equivalent to database table.
$authorization = "authorization_example"; // string | Authorization
$keytype = "keytype_example"; // string | The Type of the userKey.

try {
    $apiInstance->recordExistsNamespaceSetKey($key, $namespace, $set, $authorization, $keytype);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->recordExistsNamespaceSetKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **set** | **string**| Set for the record; equivalent to database table. |
 **authorization** | **string**| Authorization | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceRecordNamespaceKey**
> replaceRecordNamespaceKey($body, $key, $namespace, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Replace the bins of the specified record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {"bin1":5, "bin2":"hello", "bin3": [1,2,3], "bin4": {"one": 1}}
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$authorization = "authorization_example"; // string | Authorization
$commit_level = "commit_level_example"; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = true; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = "generation_policy_example"; // string | Qualify how to handle record writes based on record generation.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = "record_exists_action_example"; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = true; // bool | For client operate(), return a result for every operation.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $apiInstance->replaceRecordNamespaceKey($body, $key, $namespace, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->replaceRecordNamespaceKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {&quot;bin1&quot;:5, &quot;bin2&quot;:&quot;hello&quot;, &quot;bin3&quot;: [1,2,3], &quot;bin4&quot;: {&quot;one&quot;: 1}} |
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **authorization** | **string**| Authorization | [optional]
 **commit_level** | **string**| Desired consistency guarantee when committing a transaction on the server. | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **durable_delete** | **bool**| If the transaction results in a record deletion, leave a tombstone for the record. | [optional]
 **expiration** | **int**| Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server. | [optional]
 **generation** | **int**| Expected generation. Generation is the number of times a record has been modified (including creation) on the server. | [optional]
 **generation_policy** | **string**| Qualify how to handle record writes based on record generation. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **record_exists_action** | **string**| How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **respond_all_ops** | **bool**| For client operate(), return a result for every operation. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceRecordNamespaceSetKey**
> replaceRecordNamespaceSetKey($body, $key, $namespace, $set, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Replace the bins of the specified record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {"bin1":5, "bin2":"hello", "bin3": [1,2,3], "bin4": {"one": 1}}
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$set = "set_example"; // string | Set for the record; equivalent to database table.
$authorization = "authorization_example"; // string | Authorization
$commit_level = "commit_level_example"; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = true; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = "generation_policy_example"; // string | Qualify how to handle record writes based on record generation.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = "record_exists_action_example"; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = true; // bool | For client operate(), return a result for every operation.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $apiInstance->replaceRecordNamespaceSetKey($body, $key, $namespace, $set, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->replaceRecordNamespaceSetKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {&quot;bin1&quot;:5, &quot;bin2&quot;:&quot;hello&quot;, &quot;bin3&quot;: [1,2,3], &quot;bin4&quot;: {&quot;one&quot;: 1}} |
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **set** | **string**| Set for the record; equivalent to database table. |
 **authorization** | **string**| Authorization | [optional]
 **commit_level** | **string**| Desired consistency guarantee when committing a transaction on the server. | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **durable_delete** | **bool**| If the transaction results in a record deletion, leave a tombstone for the record. | [optional]
 **expiration** | **int**| Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server. | [optional]
 **generation** | **int**| Expected generation. Generation is the number of times a record has been modified (including creation) on the server. | [optional]
 **generation_policy** | **string**| Qualify how to handle record writes based on record generation. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **record_exists_action** | **string**| How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **respond_all_ops** | **bool**| For client operate(), return a result for every operation. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRecordNamespaceKey**
> updateRecordNamespaceKey($body, $key, $namespace, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Merge the provided bins into the record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {"bin1":5, "bin2":"hello", "bin3": [1,2,3], "bin4": {"one": 1}}
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$authorization = "authorization_example"; // string | Authorization
$commit_level = "commit_level_example"; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = true; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = "generation_policy_example"; // string | Qualify how to handle record writes based on record generation.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = "record_exists_action_example"; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = true; // bool | For client operate(), return a result for every operation.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $apiInstance->updateRecordNamespaceKey($body, $key, $namespace, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->updateRecordNamespaceKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {&quot;bin1&quot;:5, &quot;bin2&quot;:&quot;hello&quot;, &quot;bin3&quot;: [1,2,3], &quot;bin4&quot;: {&quot;one&quot;: 1}} |
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **authorization** | **string**| Authorization | [optional]
 **commit_level** | **string**| Desired consistency guarantee when committing a transaction on the server. | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **durable_delete** | **bool**| If the transaction results in a record deletion, leave a tombstone for the record. | [optional]
 **expiration** | **int**| Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server. | [optional]
 **generation** | **int**| Expected generation. Generation is the number of times a record has been modified (including creation) on the server. | [optional]
 **generation_policy** | **string**| Qualify how to handle record writes based on record generation. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **record_exists_action** | **string**| How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **respond_all_ops** | **bool**| For client operate(), return a result for every operation. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRecordNamespaceSetKey**
> updateRecordNamespaceSetKey($body, $key, $namespace, $set, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout)

Merge the provided bins into the record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KeyValueOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {"bin1":5, "bin2":"hello", "bin3": [1,2,3], "bin4": {"one": 1}}
$key = "key_example"; // string | Userkey for the record.
$namespace = "namespace_example"; // string | Namespace for the record; equivalent to database name.
$set = "set_example"; // string | Set for the record; equivalent to database table.
$authorization = "authorization_example"; // string | Authorization
$commit_level = "commit_level_example"; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = true; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = true; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = "generation_policy_example"; // string | Qualify how to handle record writes based on record generation.
$keytype = "keytype_example"; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = "predexp_example"; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = "read_mode_ap_example"; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = "read_mode_sc_example"; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array("record_bins_example"); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = "record_exists_action_example"; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = "replica_example"; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = true; // bool | For client operate(), return a result for every operation.
$send_key = true; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $apiInstance->updateRecordNamespaceSetKey($body, $key, $namespace, $set, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
} catch (Exception $e) {
    echo 'Exception when calling KeyValueOperationsApi->updateRecordNamespaceSetKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Bins to be stored in the record. This is a mapping from a string bin name to a value. Value can be a String, integer, floating point number, list, map, bytearray, or GeoJSON value. Bytearrays and GeoJSON can only be sent using MessagePack
 example: {&quot;bin1&quot;:5, &quot;bin2&quot;:&quot;hello&quot;, &quot;bin3&quot;: [1,2,3], &quot;bin4&quot;: {&quot;one&quot;: 1}} |
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **set** | **string**| Set for the record; equivalent to database table. |
 **authorization** | **string**| Authorization | [optional]
 **commit_level** | **string**| Desired consistency guarantee when committing a transaction on the server. | [optional]
 **compress** | **bool**| Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes. | [optional]
 **durable_delete** | **bool**| If the transaction results in a record deletion, leave a tombstone for the record. | [optional]
 **expiration** | **int**| Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server. | [optional]
 **generation** | **int**| Expected generation. Generation is the number of times a record has been modified (including creation) on the server. | [optional]
 **generation_policy** | **string**| Qualify how to handle record writes based on record generation. | [optional]
 **keytype** | **string**| The Type of the userKey. | [optional]
 **max_retries** | **int**| Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry. | [optional]
 **predexp** | **string**| Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored. | [optional]
 **read_mode_ap** | **string**| Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode. | [optional]
 **read_mode_sc** | **string**| Read policy for SC (strong consistency) namespaces. Determines SC read consistency options. | [optional]
 **record_bins** | [**string[]**](../Model/string.md)| Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned. | [optional]
 **record_exists_action** | **string**| How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods. | [optional]
 **replica** | **string**| Replica algorithm used to determine the target node for a single record command. | [optional]
 **respond_all_ops** | **bool**| For client operate(), return a result for every operation. | [optional]
 **send_key** | **bool**| Send user defined key in addition to hash digest on both reads and writes. | [optional]
 **sleep_between_retries** | **int**| Milliseconds to sleep between retries. | [optional]
 **socket_timeout** | **int**| Socket idle timeout in milliseconds when processing a database command. | [optional]
 **total_timeout** | **int**| Total transaction timeout in milliseconds. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

