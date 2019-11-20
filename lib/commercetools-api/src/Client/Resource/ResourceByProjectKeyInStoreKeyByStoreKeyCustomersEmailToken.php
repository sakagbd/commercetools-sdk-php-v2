<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerCreateEmailToken;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken extends ApiResource
{
    /**
     * @psalm-param ?CustomerCreateEmailToken $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerCreateEmailToken $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}