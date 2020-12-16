<?php
/**
 * TruncateOperationsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Aerospike REST Client
 *
 * REST Interface for Aerospike Database.
 *
 * OpenAPI spec version: 1.6.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * TruncateOperationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TruncateOperationsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation truncateNamespace
     *
     * Truncate records in a specified namespace.
     *
     * @param  string $namespace The namespace whose records will be truncated. (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function truncateNamespace($namespace, $authorization = null, $date = null)
    {
        $this->truncateNamespaceWithHttpInfo($namespace, $authorization, $date);
    }

    /**
     * Operation truncateNamespaceWithHttpInfo
     *
     * Truncate records in a specified namespace.
     *
     * @param  string $namespace The namespace whose records will be truncated. (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function truncateNamespaceWithHttpInfo($namespace, $authorization = null, $date = null)
    {
        $returnType = '';
        $request = $this->truncateNamespaceRequest($namespace, $authorization, $date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RestClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RestClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RestClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation truncateNamespaceAsync
     *
     * Truncate records in a specified namespace.
     *
     * @param  string $namespace The namespace whose records will be truncated. (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function truncateNamespaceAsync($namespace, $authorization = null, $date = null)
    {
        return $this->truncateNamespaceAsyncWithHttpInfo($namespace, $authorization, $date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation truncateNamespaceAsyncWithHttpInfo
     *
     * Truncate records in a specified namespace.
     *
     * @param  string $namespace The namespace whose records will be truncated. (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function truncateNamespaceAsyncWithHttpInfo($namespace, $authorization = null, $date = null)
    {
        $returnType = '';
        $request = $this->truncateNamespaceRequest($namespace, $authorization, $date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'truncateNamespace'
     *
     * @param  string $namespace The namespace whose records will be truncated. (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function truncateNamespaceRequest($namespace, $authorization = null, $date = null)
    {
        // verify the required parameter 'namespace' is set
        if ($namespace === null || (is_array($namespace) && count($namespace) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $namespace when calling truncateNamespace'
            );
        }

        $resourcePath = '/v1/truncate/{namespace}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($date !== null) {
            $queryParams['date'] = ObjectSerializer::toQueryValue($date, null);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($namespace !== null) {
            $resourcePath = str_replace(
                '{' . 'namespace' . '}',
                ObjectSerializer::toPathValue($namespace),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/msgpack']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/msgpack'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation truncateSet
     *
     * Truncate records in a specified namespace and set.
     *
     * @param  string $namespace The namespace whose records will be truncated (required)
     * @param  string $set The set, in the specified namespace, whose records will be truncated (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function truncateSet($namespace, $set, $authorization = null, $date = null)
    {
        $this->truncateSetWithHttpInfo($namespace, $set, $authorization, $date);
    }

    /**
     * Operation truncateSetWithHttpInfo
     *
     * Truncate records in a specified namespace and set.
     *
     * @param  string $namespace The namespace whose records will be truncated (required)
     * @param  string $set The set, in the specified namespace, whose records will be truncated (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function truncateSetWithHttpInfo($namespace, $set, $authorization = null, $date = null)
    {
        $returnType = '';
        $request = $this->truncateSetRequest($namespace, $set, $authorization, $date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RestClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RestClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RestClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation truncateSetAsync
     *
     * Truncate records in a specified namespace and set.
     *
     * @param  string $namespace The namespace whose records will be truncated (required)
     * @param  string $set The set, in the specified namespace, whose records will be truncated (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function truncateSetAsync($namespace, $set, $authorization = null, $date = null)
    {
        return $this->truncateSetAsyncWithHttpInfo($namespace, $set, $authorization, $date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation truncateSetAsyncWithHttpInfo
     *
     * Truncate records in a specified namespace and set.
     *
     * @param  string $namespace The namespace whose records will be truncated (required)
     * @param  string $set The set, in the specified namespace, whose records will be truncated (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function truncateSetAsyncWithHttpInfo($namespace, $set, $authorization = null, $date = null)
    {
        $returnType = '';
        $request = $this->truncateSetRequest($namespace, $set, $authorization, $date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'truncateSet'
     *
     * @param  string $namespace The namespace whose records will be truncated (required)
     * @param  string $set The set, in the specified namespace, whose records will be truncated (required)
     * @param  string $authorization Authorization (optional)
     * @param  string $date All records last updated before this date/time will be truncated. If not specified, all records will be truncated.  This is a string representation of a date time utilizing the ISO-8601 extended offset date-time format. example: 2019-12-03T10:15:30+01:00 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function truncateSetRequest($namespace, $set, $authorization = null, $date = null)
    {
        // verify the required parameter 'namespace' is set
        if ($namespace === null || (is_array($namespace) && count($namespace) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $namespace when calling truncateSet'
            );
        }
        // verify the required parameter 'set' is set
        if ($set === null || (is_array($set) && count($set) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $set when calling truncateSet'
            );
        }

        $resourcePath = '/v1/truncate/{namespace}/{set}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($date !== null) {
            $queryParams['date'] = ObjectSerializer::toQueryValue($date, null);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($namespace !== null) {
            $resourcePath = str_replace(
                '{' . 'namespace' . '}',
                ObjectSerializer::toPathValue($namespace),
                $resourcePath
            );
        }
        // path params
        if ($set !== null) {
            $resourcePath = str_replace(
                '{' . 'set' . '}',
                ObjectSerializer::toPathValue($set),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/msgpack']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/msgpack'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
