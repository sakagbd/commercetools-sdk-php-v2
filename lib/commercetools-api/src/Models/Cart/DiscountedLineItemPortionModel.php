<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class DiscountedLineItemPortionModel extends JsonObjectModel implements DiscountedLineItemPortion
{
    /**
     * @var ?TypedMoney
     */
    protected $discountedAmount;

    /**
     * @var ?CartDiscountReference
     */
    protected $discount;

    public function __construct(
        TypedMoney $discountedAmount = null,
        CartDiscountReference $discount = null
    ) {
        $this->discountedAmount = $discountedAmount;
        $this->discount = $discount;
    }

    /**
     * @return null|TypedMoney
     */
    public function getDiscountedAmount()
    {
        if (is_null($this->discountedAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountedLineItemPortion::FIELD_DISCOUNTED_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->discountedAmount = $className::of($data);
        }

        return $this->discountedAmount;
    }

    /**
     * @return null|CartDiscountReference
     */
    public function getDiscount()
    {
        if (is_null($this->discount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountedLineItemPortion::FIELD_DISCOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->discount = CartDiscountReferenceModel::of($data);
        }

        return $this->discount;
    }

    public function setDiscountedAmount(?TypedMoney $discountedAmount): void
    {
        $this->discountedAmount = $discountedAmount;
    }

    public function setDiscount(?CartDiscountReference $discount): void
    {
        $this->discount = $discount;
    }
}
