<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CartRemoveDiscountCodeAction>
 */
final class CartRemoveDiscountCodeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var DiscountCodeReference|?DiscountCodeReferenceBuilder
     */
    private $discountCode;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode()
    {
        return $this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountCode(?DiscountCodeReference $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountCodeBuilder(?DiscountCodeReferenceBuilder $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    public function build(): CartRemoveDiscountCodeAction
    {
        return new CartRemoveDiscountCodeActionModel(
            $this->action,
            ($this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode)
        );
    }

    public static function of(): CartRemoveDiscountCodeActionBuilder
    {
        return new self();
    }
}