# OpenAPI\Client\AdminOperationsApi

All URIs are relative to http://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePassword()**](AdminOperationsApi.md#changePassword) | **PATCH** /v1/admin/user/{user} | Change the password of the specified user.
[**createRole()**](AdminOperationsApi.md#createRole) | **POST** /v1/admin/role | Create a role on the Aerospike cluster.
[**createUser()**](AdminOperationsApi.md#createUser) | **POST** /v1/admin/user | Create a new user.
[**dropRole()**](AdminOperationsApi.md#dropRole) | **DELETE** /v1/admin/role/{name} | Remove a specific role from the Aerospike cluster.
[**dropUser()**](AdminOperationsApi.md#dropUser) | **DELETE** /v1/admin/user/{user} | Remove a user.
[**getRole()**](AdminOperationsApi.md#getRole) | **GET** /v1/admin/role/{name} | Get information about a specific role.
[**getRoles()**](AdminOperationsApi.md#getRoles) | **GET** /v1/admin/role | Return a list of all roles registered with the Aerospike cluster.
[**getUser()**](AdminOperationsApi.md#getUser) | **GET** /v1/admin/user/{user} | Return information about a specific user.
[**getUsers()**](AdminOperationsApi.md#getUsers) | **GET** /v1/admin/user | Return a list of information about users.
[**grantPrivileges()**](AdminOperationsApi.md#grantPrivileges) | **POST** /v1/admin/role/{name}/privilege | Grant a list of privileges to a specific role.
[**grantRoles()**](AdminOperationsApi.md#grantRoles) | **POST** /v1/admin/user/{user}/role | Grant a set of roles to the specified user.
[**revokePrivileges()**](AdminOperationsApi.md#revokePrivileges) | **PATCH** /v1/admin/role/{name}/privilege/delete | Remove a list of privileges from a specific role.
[**revokeRoles()**](AdminOperationsApi.md#revokeRoles) | **PATCH** /v1/admin/user/{user}/role/delete | Revoke a set of roles from the specified user.


## `changePassword()`

```php
changePassword($user, $password, $authorization)
```

Change the password of the specified user.

### Example

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| user |
 **password** | **string**| password |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRole()`

```php
createRole($rc_role, $authorization)
```

Create a role on the Aerospike cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rc_role = new \OpenAPI\Client\Model\RestClientRole(); // \OpenAPI\Client\Model\RestClientRole | rcRole
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->createRole($rc_role, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->createRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rc_role** | [**\OpenAPI\Client\Model\RestClientRole**](../Model/RestClientRole.md)| rcRole |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($user_info, $authorization)
```

Create a new user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_info = new \OpenAPI\Client\Model\RestClientUserModel(); // \OpenAPI\Client\Model\RestClientUserModel | userInfo
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->createUser($user_info, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_info** | [**\OpenAPI\Client\Model\RestClientUserModel**](../Model/RestClientUserModel.md)| userInfo |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dropRole()`

```php
dropRole($name, $authorization)
```

Remove a specific role from the Aerospike cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the role to remove.
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->dropRole($name, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->dropRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the role to remove. |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dropUser()`

```php
dropUser($user, $authorization)
```

Remove a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = 'user_example'; // string | user
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->dropUser($user, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->dropUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| user |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRole()`

```php
getRole($name, $authorization): \OpenAPI\Client\Model\RestClientRole
```

Get information about a specific role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the role whose information should be retrieved.
$authorization = 'authorization_example'; // string | Authorization

try {
    $result = $apiInstance->getRole($name, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->getRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the role whose information should be retrieved. |
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\OpenAPI\Client\Model\RestClientRole**](../Model/RestClientRole.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoles()`

```php
getRoles($authorization): \OpenAPI\Client\Model\RestClientRole[]
```

Return a list of all roles registered with the Aerospike cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | Authorization

try {
    $result = $apiInstance->getRoles($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\OpenAPI\Client\Model\RestClientRole[]**](../Model/RestClientRole.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($user, $authorization): \OpenAPI\Client\Model\User
```

Return information about a specific user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = 'user_example'; // string | user
$authorization = 'authorization_example'; // string | Authorization

try {
    $result = $apiInstance->getUser($user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| user |
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsers()`

```php
getUsers($authorization): \OpenAPI\Client\Model\User[]
```

Return a list of information about users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | Authorization

try {
    $result = $apiInstance->getUsers($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grantPrivileges()`

```php
grantPrivileges($name, $privileges, $authorization)
```

Grant a list of privileges to a specific role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the role to which privileges will be granted.
$privileges = array(new \OpenAPI\Client\Model\Privilege()); // \OpenAPI\Client\Model\Privilege[] | privileges
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->grantPrivileges($name, $privileges, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->grantPrivileges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the role to which privileges will be granted. |
 **privileges** | [**\OpenAPI\Client\Model\Privilege[]**](../Model/Privilege.md)| privileges |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grantRoles()`

```php
grantRoles($user, $roles, $authorization)
```

Grant a set of roles to the specified user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = 'user_example'; // string | user
$roles = array('roles_example'); // string[] | roles
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->grantRoles($user, $roles, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->grantRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| user |
 **roles** | [**string[]**](../Model/string.md)| roles |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokePrivileges()`

```php
revokePrivileges($name, $privileges, $authorization)
```

Remove a list of privileges from a specific role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the role from which privileges will be removed.
$privileges = array(new \OpenAPI\Client\Model\Privilege()); // \OpenAPI\Client\Model\Privilege[] | privileges
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->revokePrivileges($name, $privileges, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->revokePrivileges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the role from which privileges will be removed. |
 **privileges** | [**\OpenAPI\Client\Model\Privilege[]**](../Model/Privilege.md)| privileges |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeRoles()`

```php
revokeRoles($user, $roles, $authorization)
```

Revoke a set of roles from the specified user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = 'user_example'; // string | The user from which to revoke roles
$roles = array('roles_example'); // string[] | A list of names to revoke from the user
$authorization = 'authorization_example'; // string | Authorization

try {
    $apiInstance->revokeRoles($user, $roles, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->revokeRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| The user from which to revoke roles |
 **roles** | [**string[]**](../Model/string.md)| A list of names to revoke from the user |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/msgpack`
- **Accept**: `application/json`, `application/msgpack`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
