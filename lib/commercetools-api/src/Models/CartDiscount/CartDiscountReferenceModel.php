<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartDiscountReferenceModel extends JsonObjectModel implements CartDiscountReference
{
    const DISCRIMINATOR_VALUE = 'cart-discount';

    /**
     * @var ?string
     */
    protected $typeId;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?CartDiscount
     */
    protected $obj;

    public function __construct(
        string $typeId = null,
        string $id = null,
        CartDiscount $obj = null
    ) {
        $this->typeId = $typeId;
        $this->id = $id;
        $this->obj = $obj;
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|CartDiscount
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountReference::FIELD_OBJ);
            if (is_null($data)) {
                return null;
            }

            $this->obj = CartDiscountModel::of($data);
        }

        return $this->obj;
    }

    public function setTypeId(?string $typeId): void
    {
        $this->typeId = $typeId;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setObj(?CartDiscount $obj): void
    {
        $this->obj = $obj;
    }
}