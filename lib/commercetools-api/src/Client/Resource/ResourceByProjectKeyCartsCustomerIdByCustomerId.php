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
class ResourceByProjectKeyCartsCustomerIdByCustomerId extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyCartsCustomerIdByCustomerIdGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsCustomerIdByCustomerIdGet((string) $args['projectKey'], (string) $args['customerId'], $body, $headers, $this->getClient());
    }
}