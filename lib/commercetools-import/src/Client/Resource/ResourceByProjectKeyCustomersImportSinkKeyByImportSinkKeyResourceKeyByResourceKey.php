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
class ResourceByProjectKeyCustomersImportSinkKeyByImportSinkKeyResourceKeyByResourceKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/customers/importSinkKey={importSinkKey}/resourceKey={resourceKey}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyCustomersImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete($args['projectKey'], $args['importSinkKey'], $args['resourceKey'], $body, $headers, $this->getClient());
    }
}
