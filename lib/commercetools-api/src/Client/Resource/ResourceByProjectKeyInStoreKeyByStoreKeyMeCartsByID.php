<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Common\Update;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeCartsByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDGet($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?Update $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?Update $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDPost($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDDelete($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}