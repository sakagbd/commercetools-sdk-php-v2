<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class DuplicatePriceScopeErrorModel extends JsonObjectModel implements DuplicatePriceScopeError
{
    const DISCRIMINATOR_VALUE = 'DuplicatePriceScope';

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?PriceCollection
     */
    protected $conflictingPrices;

    public function __construct(
        string $code = null,
        string $message = null,
        PriceCollection $conflictingPrices = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->conflictingPrices = $conflictingPrices;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|PriceCollection
     */
    public function getConflictingPrices()
    {
        if (is_null($this->conflictingPrices)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(DuplicatePriceScopeError::FIELD_CONFLICTING_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->conflictingPrices = PriceCollection::fromArray($data);
        }

        return $this->conflictingPrices;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setConflictingPrices(?PriceCollection $conflictingPrices): void
    {
        $this->conflictingPrices = $conflictingPrices;
    }
}