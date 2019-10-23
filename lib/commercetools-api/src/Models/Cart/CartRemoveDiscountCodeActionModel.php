<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartRemoveDiscountCodeActionModel extends JsonObjectModel implements CartRemoveDiscountCodeAction
{
    const DISCRIMINATOR_VALUE = 'removeDiscountCode';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?DiscountCodeReference
     */
    protected $discountCode;

    public function __construct(
        string $action = null,
        DiscountCodeReference $discountCode = null
    ) {
        $this->action = $action;
        $this->discountCode = $discountCode;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode()
    {
        if (is_null($this->discountCode)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartRemoveDiscountCodeAction::FIELD_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }

            $this->discountCode = DiscountCodeReferenceModel::of($data);
        }

        return $this->discountCode;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setDiscountCode(?DiscountCodeReference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }
}