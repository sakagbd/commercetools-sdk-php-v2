<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyShippingMethodsMatchesCart extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyShippingMethodsMatchesCartGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsMatchesCartGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}