<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\CategoryImportRequest;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param scalar $resourceKey
     *
     * @param null|mixed $resourceKey
     */
    public function resourceKeyWithResourceKeyValue($resourceKey = null): ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($this->getUri().'/resourceKey={resourceKey}', $args, $this->getClient());
    }

    public function importItems(): ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportItems
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportItems($this->getUri().'/import-items', $args, $this->getClient());
    }

    /**
     * @psalm-param ?CategoryImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CategoryImportRequest $body = null, array $headers = []): ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyPost($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
