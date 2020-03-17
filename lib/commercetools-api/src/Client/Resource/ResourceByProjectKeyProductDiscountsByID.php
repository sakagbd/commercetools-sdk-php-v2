<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductDiscountsByID extends ApiResource
{
    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-discounts/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductDiscountsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsByIDGet((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductDiscountUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductDiscountUpdate $body = null, array $headers = []): ByProjectKeyProductDiscountsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsByIDPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyProductDiscountsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsByIDDelete((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
}
