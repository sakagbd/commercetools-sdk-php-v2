<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumber;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->orders()
                       ->withOrderNumber("orderNumber")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/orders/order-number={orderNumber}?expand=expand',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->orders()
                       ->withOrderNumber("orderNumber")
                       ->get();
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/orders/order-number={orderNumber}',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->orders()
                       ->withOrderNumber("orderNumber")
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/in-store/key={storeKey}/orders/order-number={orderNumber}?expand=expand',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->orders()
                       ->withOrderNumber("orderNumber")
                       ->post(null);
               },
               'post',
               '/{projectKey}/in-store/key={storeKey}/orders/order-number={orderNumber}',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_withDataErasure' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->orders()
                       ->withOrderNumber("orderNumber")
                       ->delete()
                       ->withDataErasure('dataErasure');
               },
               'delete',
               '/{projectKey}/in-store/key={storeKey}/orders/order-number={orderNumber}?dataErasure=dataErasure',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->orders()
                       ->withOrderNumber("orderNumber")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/in-store/key={storeKey}/orders/order-number={orderNumber}?version=version',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->orders()
                       ->withOrderNumber("orderNumber")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/in-store/key={storeKey}/orders/order-number={orderNumber}?expand=expand',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->orders()
                       ->withOrderNumber("orderNumber")
                       ->delete();
               },
               'delete',
               '/{projectKey}/in-store/key={storeKey}/orders/order-number={orderNumber}',
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