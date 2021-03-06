<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsById extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-variant-patches/importSinkKey={importSinkKey}/import-operations/{id}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdGet($args['projectKey'], $args['importSinkKey'], $args['id'], $body, $headers, $this->getClient());
    }
}
