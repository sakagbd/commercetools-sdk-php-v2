<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTypesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTypesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTypesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyTypesByID
 */
class ResourceByProjectKeyTypesByIDTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        };
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response($statusCode, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteClientException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyTypesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/types/{ID}?expand=expand',
            ],
            'ByProjectKeyTypesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/types/{ID}',
            ],
            'ByProjectKeyTypesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/types/{ID}?expand=expand',
            ],
            'ByProjectKeyTypesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/types/{ID}',
            ],
            'ByProjectKeyTypesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/types/{ID}?version=version',
            ],
            'ByProjectKeyTypesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/types/{ID}?expand=expand',
            ],
            'ByProjectKeyTypesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/types/{ID}',
            ]
        ];
    }

    public function getResources()
    {
        return [
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyTypesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyTypesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyTypesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyTypesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyTypesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyTypesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyTypesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyTypesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyTypesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyTypesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyTypesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyTypesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyTypesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyTypesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyTypesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyTypesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyTypesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyTypesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyTypesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyTypesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyTypesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyTypesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyTypesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyTypesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyTypesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyTypesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                503
            ]
        ];
    }
}
