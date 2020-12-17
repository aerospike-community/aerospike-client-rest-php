# OpenAPI\Client\OperateOperationsApi

All URIs are relative to http://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**operateNamespaceKey()**](OperateOperationsApi.md#operateNamespaceKey) | **POST** /v1/operate/{namespace}/{key} | Perform multiple operations atomically on the specified record.
[**operateNamespaceSetKey()**](OperateOperationsApi.md#operateNamespaceSetKey) | **POST** /v1/operate/{namespace}/{set}/{key} | Perform multiple operations atomically on the specified record.


## `operateNamespaceKey()`

```php
operateNamespaceKey($key, $namespace, $operations, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout): \OpenAPI\Client\Model\Record
```

Perform multiple operations atomically on the specified record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperateOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | Userkey for the record.
$namespace = 'namespace_example'; // string | Namespace for the record; equivalent to database name.
$operations = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[] | An array of operation objects specifying the operations to perform on the record
$authorization = 'authorization_example'; // string | Authorization
$commit_level = 'commit_level_example'; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = True; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = True; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = 'generation_policy_example'; // string | Qualify how to handle record writes based on record generation.
$keytype = 'keytype_example'; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = 'predexp_example'; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = 'read_mode_ap_example'; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = 'read_mode_sc_example'; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array('record_bins_example'); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = 'record_exists_action_example'; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = 'replica_example'; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = True; // bool | For client operate(), return a result for every operation.
$send_key = True; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->operateNamespaceKey($key, $namespace, $operations, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperateOperationsApi->operateNamespaceKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **operations** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)| An array of operation objects specifying the operations to perform on the record |
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

[**\OpenAPI\Client\Model\Record**](../Model/Record.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operateNamespaceSetKey()`

```php
operateNamespaceSetKey($key, $namespace, $set, $operations, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout): \OpenAPI\Client\Model\Record
```

Perform multiple operations atomically on the specified record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OperateOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | Userkey for the record.
$namespace = 'namespace_example'; // string | Namespace for the record; equivalent to database name.
$set = 'set_example'; // string | Set for the record; equivalent to database table.
$operations = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[] | An array of operation objects specifying the operations to perform on the record
$authorization = 'authorization_example'; // string | Authorization
$commit_level = 'commit_level_example'; // string | Desired consistency guarantee when committing a transaction on the server.
$compress = True; // bool | Use zlib compression on command buffers sent to the server and responses received from the server when the buffer size is greater than 128 bytes.
$durable_delete = True; // bool | If the transaction results in a record deletion, leave a tombstone for the record.
$expiration = 56; // int | Record expiration. Also known as ttl (time to live). Seconds record will live before being removed by the server.
$generation = 56; // int | Expected generation. Generation is the number of times a record has been modified (including creation) on the server.
$generation_policy = 'generation_policy_example'; // string | Qualify how to handle record writes based on record generation.
$keytype = 'keytype_example'; // string | The Type of the userKey.
$max_retries = 56; // int | Maximum number of retries before aborting the current transaction. The initial attempt is not counted as a retry.
$predexp = 'predexp_example'; // string | Optional predicate expression filter in postfix notation. If the predicate expression exists and evaluates to false, the transaction is ignored.
$read_mode_ap = 'read_mode_ap_example'; // string | Read policy for AP (availability) namespaces. How duplicates should be consulted in a read operation. Only makes a difference during migrations and only applicable in AP mode.
$read_mode_sc = 'read_mode_sc_example'; // string | Read policy for SC (strong consistency) namespaces. Determines SC read consistency options.
$record_bins = array('record_bins_example'); // string[] | Optionally specify a set of bins to return when fetching a record. If omitted, all bins will be returned.
$record_exists_action = 'record_exists_action_example'; // string | How to handle the existence of the record. This is ignored for POST/PUT/UPDATE kvs methods.
$replica = 'replica_example'; // string | Replica algorithm used to determine the target node for a single record command.
$respond_all_ops = True; // bool | For client operate(), return a result for every operation.
$send_key = True; // bool | Send user defined key in addition to hash digest on both reads and writes.
$sleep_between_retries = 56; // int | Milliseconds to sleep between retries.
$socket_timeout = 56; // int | Socket idle timeout in milliseconds when processing a database command.
$total_timeout = 56; // int | Total transaction timeout in milliseconds.

try {
    $result = $apiInstance->operateNamespaceSetKey($key, $namespace, $set, $operations, $authorization, $commit_level, $compress, $durable_delete, $expiration, $generation, $generation_policy, $keytype, $max_retries, $predexp, $read_mode_ap, $read_mode_sc, $record_bins, $record_exists_action, $replica, $respond_all_ops, $send_key, $sleep_between_retries, $socket_timeout, $total_timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperateOperationsApi->operateNamespaceSetKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Userkey for the record. |
 **namespace** | **string**| Namespace for the record; equivalent to database name. |
 **set** | **string**| Set for the record; equivalent to database table. |
 **operations** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)| An array of operation objects specifying the operations to perform on the record |
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

[**\OpenAPI\Client\Model\Record**](../Model/Record.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
