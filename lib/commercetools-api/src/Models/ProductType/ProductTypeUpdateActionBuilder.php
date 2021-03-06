<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeUpdateAction>
 */
final class ProductTypeUpdateActionBuilder implements Builder
{
    public function build(): ProductTypeUpdateAction
    {
        return new ProductTypeUpdateActionModel(
        );
    }

    public static function of(): ProductTypeUpdateActionBuilder
    {
        return new self();
    }
}
