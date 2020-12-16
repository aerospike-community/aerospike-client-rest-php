# Swagger\Client\AdminOperationsApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePassword**](AdminOperationsApi.md#changepassword) | **PATCH** /v1/admin/user/{user} | Change the password of the specified user.
[**createRole**](AdminOperationsApi.md#createrole) | **POST** /v1/admin/role | Create a role on the Aerospike cluster.
[**createUser**](AdminOperationsApi.md#createuser) | **POST** /v1/admin/user | Create a new user.
[**dropRole**](AdminOperationsApi.md#droprole) | **DELETE** /v1/admin/role/{name} | Remove a specific role from the Aerospike cluster.
[**dropUser**](AdminOperationsApi.md#dropuser) | **DELETE** /v1/admin/user/{user} | Remove a user.
[**getRole**](AdminOperationsApi.md#getrole) | **GET** /v1/admin/role/{name} | Get information about a specific role.
[**getRoles**](AdminOperationsApi.md#getroles) | **GET** /v1/admin/role | Return a list of all roles registered with the Aerospike cluster.
[**getUser**](AdminOperationsApi.md#getuser) | **GET** /v1/admin/user/{user} | Return information about a specific user.
[**getUsers**](AdminOperationsApi.md#getusers) | **GET** /v1/admin/user | Return a list of information about users.
[**grantPrivileges**](AdminOperationsApi.md#grantprivileges) | **POST** /v1/admin/role/{name}/privilege | Grant a list of privileges to a specific role.
[**grantRoles**](AdminOperationsApi.md#grantroles) | **POST** /v1/admin/user/{user}/role | Grant a set of roles to the specified user.
[**revokePrivileges**](AdminOperationsApi.md#revokeprivileges) | **PATCH** /v1/admin/role/{name}/privilege/delete | Remove a list of privileges from a specific role.
[**revokeRoles**](AdminOperationsApi.md#revokeroles) | **PATCH** /v1/admin/user/{user}/role/delete | Revoke a set of roles from the specified user.

# **changePassword**
> changePassword($body, $user, $authorization)

Change the password of the specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | password
$user = "user_example"; // string | user
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->changePassword($body, $user, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->changePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| password |
 **user** | **string**| user |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRole**
> createRole($body, $authorization)

Create a role on the Aerospike cluster.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RestClientRole(); // \Swagger\Client\Model\RestClientRole | rcRole
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->createRole($body, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->createRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RestClientRole**](../Model/RestClientRole.md)| rcRole |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUser**
> createUser($body, $authorization)

Create a new user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RestClientUserModel(); // \Swagger\Client\Model\RestClientUserModel | userInfo
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->createUser($body, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RestClientUserModel**](../Model/RestClientUserModel.md)| userInfo |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dropRole**
> dropRole($name, $authorization)

Remove a specific role from the Aerospike cluster.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the role to remove.
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->dropRole($name, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->dropRole: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dropUser**
> dropUser($user, $authorization)

Remove a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = "user_example"; // string | user
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->dropUser($user, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->dropUser: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRole**
> \Swagger\Client\Model\RestClientRole getRole($name, $authorization)

Get information about a specific role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the role whose information should be retrieved.
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $apiInstance->getRole($name, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->getRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the role whose information should be retrieved. |
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\Swagger\Client\Model\RestClientRole**](../Model/RestClientRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoles**
> \Swagger\Client\Model\RestClientRole[] getRoles($authorization)

Return a list of all roles registered with the Aerospike cluster.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $apiInstance->getRoles($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\Swagger\Client\Model\RestClientRole[]**](../Model/RestClientRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Swagger\Client\Model\User getUser($user, $authorization)

Return information about a specific user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = "user_example"; // string | user
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $apiInstance->getUser($user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| user |
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Swagger\Client\Model\User[] getUsers($authorization)

Return a list of information about users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $apiInstance->getUsers($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **grantPrivileges**
> grantPrivileges($body, $name, $authorization)

Grant a list of privileges to a specific role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\Privilege()); // \Swagger\Client\Model\Privilege[] | privileges
$name = "name_example"; // string | The name of the role to which privileges will be granted.
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->grantPrivileges($body, $name, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->grantPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Privilege[]**](../Model/Privilege.md)| privileges |
 **name** | **string**| The name of the role to which privileges will be granted. |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **grantRoles**
> grantRoles($body, $user, $authorization)

Grant a set of roles to the specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array("body_example"); // string[] | roles
$user = "user_example"; // string | user
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->grantRoles($body, $user, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->grantRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| roles |
 **user** | **string**| user |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokePrivileges**
> revokePrivileges($body, $name, $authorization)

Remove a list of privileges from a specific role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\Privilege()); // \Swagger\Client\Model\Privilege[] | privileges
$name = "name_example"; // string | The name of the role from which privileges will be removed.
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->revokePrivileges($body, $name, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->revokePrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Privilege[]**](../Model/Privilege.md)| privileges |
 **name** | **string**| The name of the role from which privileges will be removed. |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeRoles**
> revokeRoles($body, $user, $authorization)

Revoke a set of roles from the specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdminOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array("body_example"); // string[] | A list of names to revoke from the user
$user = "user_example"; // string | The user from which to revoke roles
$authorization = "authorization_example"; // string | Authorization

try {
    $apiInstance->revokeRoles($body, $user, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdminOperationsApi->revokeRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| A list of names to revoke from the user |
 **user** | **string**| The user from which to revoke roles |
 **authorization** | **string**| Authorization | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/msgpack
 - **Accept**: application/json, application/msgpack

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

