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
