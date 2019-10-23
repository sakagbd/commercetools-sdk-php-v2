<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersPasswordTokenByPasswordToken;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyCustomersPasswordTokenByPasswordTokenTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomersPasswordTokenByPasswordTokenGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->withPasswordToken("passwordToken")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/customers/password-token={passwordToken}?expand=expand',
            ],
            'ByProjectKeyCustomersPasswordTokenByPasswordTokenGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->withPasswordToken("passwordToken")
                        ->get();
                },
                'get',
                '{projectKey}/customers/password-token={passwordToken}',
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