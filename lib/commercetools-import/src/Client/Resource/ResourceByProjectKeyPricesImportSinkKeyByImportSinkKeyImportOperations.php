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
class ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperations extends ApiResource
{
    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/prices/importSinkKey={importSinkKey}/import-operations', $args, $client);
    }

    public function withIdValue(string $id = null): ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperationsById
    {
        $args = $this->getArgs();
        if (!is_null($id)) {
            $args['id'] = $id;
        }

        return new ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperationsById($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperationsGet((string) $args['projectKey'], (string) $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
