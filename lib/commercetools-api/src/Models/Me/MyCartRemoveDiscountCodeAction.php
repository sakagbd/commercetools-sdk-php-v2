<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;

interface MyCartRemoveDiscountCodeAction extends MyCartUpdateAction
{
    const FIELD_DISCOUNT_CODE = 'discountCode';

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode();

    public function setDiscountCode(?DiscountCodeReference $discountCode): void;
}
