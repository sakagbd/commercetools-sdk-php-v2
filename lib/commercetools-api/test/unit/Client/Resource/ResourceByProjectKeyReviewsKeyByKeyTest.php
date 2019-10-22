<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyReviewsKeyByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyReviewsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyReviewsKeyByKeyGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/reviews/key={key}?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/reviews/key={key}',
            ],
            'ByProjectKeyReviewsKeyByKeyPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/reviews/key={key}?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/reviews/key={key}',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_withDataErasure' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                '{projectKey}/reviews/key={key}?dataErasure=dataErasure',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/reviews/key={key}?version=version',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/reviews/key={key}?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/reviews/key={key}',
            ]
        ];
    }
    
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}