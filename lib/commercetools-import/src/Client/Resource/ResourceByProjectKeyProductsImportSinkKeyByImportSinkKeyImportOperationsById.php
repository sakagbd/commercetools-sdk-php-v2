<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsById extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsByIdGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsByIdGet((string) $args['projectKey'], (string) $args['importSinkKey'], (string) $args['id'], $body, $headers, $this->getClient());
    }
}