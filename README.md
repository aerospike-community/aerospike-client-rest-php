# OpenAPIClient-php

REST Interface for Aerospike Database.

For more information, please visit [https://www.aerospike.com](https://www.aerospike.com).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = 'user_example'; // string | user
$password = 'password_example'; // string | password
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->changePassword($user, $password, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->changePassword: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:8080*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminOperationsApi* | [**changePassword**](docs/Api/AdminOperationsApi.md#changepassword) | **PATCH** /v1/admin/user/{user} | Change the password of the specified user.
*AdminOperationsApi* | [**createRole**](docs/Api/AdminOperationsApi.md#createrole) | **POST** /v1/admin/role | Create a role on the Aerospike cluster.
*AdminOperationsApi* | [**createUser**](docs/Api/AdminOperationsApi.md#createuser) | **POST** /v1/admin/user | Create a new user.
*AdminOperationsApi* | [**dropRole**](docs/Api/AdminOperationsApi.md#droprole) | **DELETE** /v1/admin/role/{name} | Remove a specific role from the Aerospike cluster.
*AdminOperationsApi* | [**dropUser**](docs/Api/AdminOperationsApi.md#dropuser) | **DELETE** /v1/admin/user/{user} | Remove a user.
*AdminOperationsApi* | [**getRole**](docs/Api/AdminOperationsApi.md#getrole) | **GET** /v1/admin/role/{name} | Get information about a specific role.
*AdminOperationsApi* | [**getRoles**](docs/Api/AdminOperationsApi.md#getroles) | **GET** /v1/admin/role | Return a list of all roles registered with the Aerospike cluster.
*AdminOperationsApi* | [**getUser**](docs/Api/AdminOperationsApi.md#getuser) | **GET** /v1/admin/user/{user} | Return information about a specific user.
*AdminOperationsApi* | [**getUsers**](docs/Api/AdminOperationsApi.md#getusers) | **GET** /v1/admin/user | Return a list of information about users.
*AdminOperationsApi* | [**grantPrivileges**](docs/Api/AdminOperationsApi.md#grantprivileges) | **POST** /v1/admin/role/{name}/privilege | Grant a list of privileges to a specific role.
*AdminOperationsApi* | [**grantRoles**](docs/Api/AdminOperationsApi.md#grantroles) | **POST** /v1/admin/user/{user}/role | Grant a set of roles to the specified user.
*AdminOperationsApi* | [**revokePrivileges**](docs/Api/AdminOperationsApi.md#revokeprivileges) | **PATCH** /v1/admin/role/{name}/privilege/delete | Remove a list of privileges from a specific role.
*AdminOperationsApi* | [**revokeRoles**](docs/Api/AdminOperationsApi.md#revokeroles) | **PATCH** /v1/admin/user/{user}/role/delete | Revoke a set of roles from the specified user.
*BatchReadOperationsApi* | [**performBatchGet**](docs/Api/BatchReadOperationsApi.md#performbatchget) | **POST** /v1/batch | Return multiple records from the server in a single request.
*ClusterInformationOperationsApi* | [**getClusterInfo**](docs/Api/ClusterInformationOperationsApi.md#getclusterinfo) | **GET** /v1/cluster | Return an object containing information about the Aerospike cluster.
*ExecuteOperationsApi* | [**executeScanNamespace**](docs/Api/ExecuteOperationsApi.md#executescannamespace) | **POST** /v1/execute/scan/{namespace} | Perform multiple operations in background scan/query.
*ExecuteOperationsApi* | [**executeScanNamespaceSet**](docs/Api/ExecuteOperationsApi.md#executescannamespaceset) | **POST** /v1/execute/scan/{namespace}/{set} | Perform multiple operations in background scan/query.
*ExecuteOperationsApi* | [**executeScanStatus**](docs/Api/ExecuteOperationsApi.md#executescanstatus) | **GET** /v1/execute/scan/status/{taskId} | Get status of background scan by task id.
*InfoOperationsApi* | [**infoAny**](docs/Api/InfoOperationsApi.md#infoany) | **POST** /v1/info | Send a list of info commands to a random node in the cluster
*InfoOperationsApi* | [**infoNode**](docs/Api/InfoOperationsApi.md#infonode) | **POST** /v1/info/{node} | Send a list of info commands to a specific node in the cluster.
*KeyValueOperationsApi* | [**createRecordNamespaceKey**](docs/Api/KeyValueOperationsApi.md#createrecordnamespacekey) | **POST** /v1/kvs/{namespace}/{key} | Create a new record with the provided bins into the record.
*KeyValueOperationsApi* | [**createRecordNamespaceSetKey**](docs/Api/KeyValueOperationsApi.md#createrecordnamespacesetkey) | **POST** /v1/kvs/{namespace}/{set}/{key} | Create a new record with the provided bins into the record.
*KeyValueOperationsApi* | [**deleteRecordNamespaceKey**](docs/Api/KeyValueOperationsApi.md#deleterecordnamespacekey) | **DELETE** /v1/kvs/{namespace}/{key} | Delete the specified record.
*KeyValueOperationsApi* | [**deleteRecordNamespaceSetKey**](docs/Api/KeyValueOperationsApi.md#deleterecordnamespacesetkey) | **DELETE** /v1/kvs/{namespace}/{set}/{key} | Delete the specified record.
*KeyValueOperationsApi* | [**getRecordNamespaceKey**](docs/Api/KeyValueOperationsApi.md#getrecordnamespacekey) | **GET** /v1/kvs/{namespace}/{key} | Return the metadata and bins for a record.
*KeyValueOperationsApi* | [**getRecordNamespaceSetKey**](docs/Api/KeyValueOperationsApi.md#getrecordnamespacesetkey) | **GET** /v1/kvs/{namespace}/{set}/{key} | Return the metadata and bins for a record.
*KeyValueOperationsApi* | [**recordExistsNamespaceKey**](docs/Api/KeyValueOperationsApi.md#recordexistsnamespacekey) | **HEAD** /v1/kvs/{namespace}/{key} | Check if a record exists
*KeyValueOperationsApi* | [**recordExistsNamespaceSetKey**](docs/Api/KeyValueOperationsApi.md#recordexistsnamespacesetkey) | **HEAD** /v1/kvs/{namespace}/{set}/{key} | Check if a record exists
*KeyValueOperationsApi* | [**replaceRecordNamespaceKey**](docs/Api/KeyValueOperationsApi.md#replacerecordnamespacekey) | **PUT** /v1/kvs/{namespace}/{key} | Replace the bins of the specified record.
*KeyValueOperationsApi* | [**replaceRecordNamespaceSetKey**](docs/Api/KeyValueOperationsApi.md#replacerecordnamespacesetkey) | **PUT** /v1/kvs/{namespace}/{set}/{key} | Replace the bins of the specified record.
*KeyValueOperationsApi* | [**updateRecordNamespaceKey**](docs/Api/KeyValueOperationsApi.md#updaterecordnamespacekey) | **PATCH** /v1/kvs/{namespace}/{key} | Merge the provided bins into the record.
*KeyValueOperationsApi* | [**updateRecordNamespaceSetKey**](docs/Api/KeyValueOperationsApi.md#updaterecordnamespacesetkey) | **PATCH** /v1/kvs/{namespace}/{set}/{key} | Merge the provided bins into the record.
*OperateOperationsApi* | [**operateNamespaceKey**](docs/Api/OperateOperationsApi.md#operatenamespacekey) | **POST** /v1/operate/{namespace}/{key} | Perform multiple operations atomically on the specified record.
*OperateOperationsApi* | [**operateNamespaceSetKey**](docs/Api/OperateOperationsApi.md#operatenamespacesetkey) | **POST** /v1/operate/{namespace}/{set}/{key} | Perform multiple operations atomically on the specified record.
*ScanOperationsApi* | [**performScan**](docs/Api/ScanOperationsApi.md#performscan) | **GET** /v1/scan/{namespace}/{set} | Return multiple records from the server in a scan request.
*ScanOperationsApi* | [**performScan1**](docs/Api/ScanOperationsApi.md#performscan1) | **GET** /v1/scan/{namespace} | Return multiple records from the server in a scan request.
*SecondaryIndexMethodsApi* | [**createIndex**](docs/Api/SecondaryIndexMethodsApi.md#createindex) | **POST** /v1/index | Create a secondary index.
*SecondaryIndexMethodsApi* | [**dropIndex**](docs/Api/SecondaryIndexMethodsApi.md#dropindex) | **DELETE** /v1/index/{namespace}/{name} | Remove a secondary Index
*SecondaryIndexMethodsApi* | [**getIndexStats**](docs/Api/SecondaryIndexMethodsApi.md#getindexstats) | **GET** /v1/index/{namespace}/{name} | Get Information about a single secondary index.
*SecondaryIndexMethodsApi* | [**indexInformation**](docs/Api/SecondaryIndexMethodsApi.md#indexinformation) | **GET** /v1/index | Return information about multiple secondary indices.
*TruncateOperationsApi* | [**truncateNamespace**](docs/Api/TruncateOperationsApi.md#truncatenamespace) | **DELETE** /v1/truncate/{namespace} | Truncate records in a specified namespace.
*TruncateOperationsApi* | [**truncateSet**](docs/Api/TruncateOperationsApi.md#truncateset) | **DELETE** /v1/truncate/{namespace}/{set} | Truncate records in a specified namespace and set.

## Models

- [BatchRead](docs/Model/BatchRead.md)
- [BatchReadRequest](docs/Model/BatchReadRequest.md)
- [ClusterInformation](docs/Model/ClusterInformation.md)
- [Key](docs/Model/Key.md)
- [NamespaceInformation](docs/Model/NamespaceInformation.md)
- [NodeInformation](docs/Model/NodeInformation.md)
- [Operation](docs/Model/Operation.md)
- [Pagination](docs/Model/Pagination.md)
- [Privilege](docs/Model/Privilege.md)
- [Record](docs/Model/Record.md)
- [RestClientError](docs/Model/RestClientError.md)
- [RestClientExecuteTask](docs/Model/RestClientExecuteTask.md)
- [RestClientExecuteTaskStatus](docs/Model/RestClientExecuteTaskStatus.md)
- [RestClientIndex](docs/Model/RestClientIndex.md)
- [RestClientRole](docs/Model/RestClientRole.md)
- [RestClientScanResponse](docs/Model/RestClientScanResponse.md)
- [RestClientSetInformation](docs/Model/RestClientSetInformation.md)
- [RestClientUserModel](docs/Model/RestClientUserModel.md)
- [User](docs/Model/User.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.6.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
