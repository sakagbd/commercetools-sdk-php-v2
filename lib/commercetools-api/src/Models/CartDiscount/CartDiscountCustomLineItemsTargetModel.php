<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObjectModel;

final class CartDiscountCustomLineItemsTargetModel extends JsonObjectModel implements CartDiscountCustomLineItemsTarget
{
    const DISCRIMINATOR_VALUE = 'customLineItems';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $predicate;

    public function __construct(
        string $type = null,
        string $predicate = null
    ) {
        $this->type = $type;
        $this->predicate = $predicate;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountTarget::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountCustomLineItemsTarget::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }
}