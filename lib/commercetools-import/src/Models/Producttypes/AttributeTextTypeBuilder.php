<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeTextType>
 */
final class AttributeTextTypeBuilder implements Builder
{
    public function build(): AttributeTextType
    {
        return new AttributeTextTypeModel(
        );
    }

    public static function of(): AttributeTextTypeBuilder
    {
        return new self();
    }
}
