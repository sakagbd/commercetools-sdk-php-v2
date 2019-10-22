<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Import\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Import\Client\ApiRoot;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItems;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItemsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItemsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productTypes()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importItems()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/product-types/importSinkKey={importSinkKey}/import-items?limit=limit',
            ],
            'ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItemsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productTypes()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importItems()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/product-types/importSinkKey={importSinkKey}/import-items?offset=offset',
            ],
            'ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItemsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productTypes()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importItems()
                        ->get();
                },
                'get',
                '{projectKey}/product-types/importSinkKey={importSinkKey}/import-items',
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