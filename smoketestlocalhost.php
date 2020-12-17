<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClusterInformationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $apiInstance->getClusterInfo($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClusterInformationOperationsApi->getClusterInfo: ', $e->getMessage(), PHP_EOL;
}
?>
