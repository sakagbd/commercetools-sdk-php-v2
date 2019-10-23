<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyOrdersOrderNumberByOrderNumber extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyOrdersOrderNumberByOrderNumberGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersOrderNumberByOrderNumberGet($args['projectKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?OrderUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderUpdate $body = null, array $headers = []): ByProjectKeyOrdersOrderNumberByOrderNumberPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersOrderNumberByOrderNumberPost($args['projectKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyOrdersOrderNumberByOrderNumberDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersOrderNumberByOrderNumberDelete($args['projectKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }
}