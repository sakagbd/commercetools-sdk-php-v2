<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\DiscountCode\DiscountCodeDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyDiscountCodes extends ApiResource
{
    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyDiscountCodesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyDiscountCodesByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyDiscountCodesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountCodesGet($args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?DiscountCodeDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?DiscountCodeDraft $body = null, array $headers = []): ByProjectKeyDiscountCodesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountCodesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}