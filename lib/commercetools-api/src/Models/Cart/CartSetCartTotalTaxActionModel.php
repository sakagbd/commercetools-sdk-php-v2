<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartSetCartTotalTaxActionModel extends JsonObjectModel implements CartSetCartTotalTaxAction
{
    const DISCRIMINATOR_VALUE = 'setCartTotalTax';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?TaxPortionDraftCollection
     */
    protected $externalTaxPortions;

    /**
     * @var ?Money
     */
    protected $externalTotalGross;

    public function __construct(
        string $action = null,
        TaxPortionDraftCollection $externalTaxPortions = null,
        Money $externalTotalGross = null
    ) {
        $this->action = $action;
        $this->externalTaxPortions = $externalTaxPortions;
        $this->externalTotalGross = $externalTotalGross;
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
     * @return null|TaxPortionDraftCollection
     */
    public function getExternalTaxPortions()
    {
        if (is_null($this->externalTaxPortions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(CartSetCartTotalTaxAction::FIELD_EXTERNAL_TAX_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->externalTaxPortions = TaxPortionDraftCollection::fromArray($data);
        }

        return $this->externalTaxPortions;
    }

    /**
     * @return null|Money
     */
    public function getExternalTotalGross()
    {
        if (is_null($this->externalTotalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartSetCartTotalTaxAction::FIELD_EXTERNAL_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->externalTotalGross = MoneyModel::of($data);
        }

        return $this->externalTotalGross;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setExternalTaxPortions(?TaxPortionDraftCollection $externalTaxPortions): void
    {
        $this->externalTaxPortions = $externalTaxPortions;
    }

    public function setExternalTotalGross(?Money $externalTotalGross): void
    {
        $this->externalTotalGross = $externalTotalGross;
    }
}