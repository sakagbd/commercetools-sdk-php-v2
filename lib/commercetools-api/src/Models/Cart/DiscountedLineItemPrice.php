<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\JsonObject;

interface DiscountedLineItemPrice extends JsonObject
{
    const FIELD_VALUE = 'value';
    const FIELD_INCLUDED_DISCOUNTS = 'includedDiscounts';

    /**
     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts();

    public function setValue(?TypedMoney $value): void;

    public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void;
}