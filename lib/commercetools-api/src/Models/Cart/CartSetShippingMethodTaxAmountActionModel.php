<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartSetShippingMethodTaxAmountActionModel extends JsonObjectModel implements CartSetShippingMethodTaxAmountAction
{
    const DISCRIMINATOR_VALUE = 'setShippingMethodTaxAmount';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ExternalTaxAmountDraft
     */
    protected $externalTaxAmount;

    public function __construct(
        string $action = null,
        ExternalTaxAmountDraft $externalTaxAmount = null
    ) {
        $this->action = $action;
        $this->externalTaxAmount = $externalTaxAmount;
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
     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        if (is_null($this->externalTaxAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartSetShippingMethodTaxAmountAction::FIELD_EXTERNAL_TAX_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxAmount = ExternalTaxAmountDraftModel::of($data);
        }

        return $this->externalTaxAmount;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void
    {
        $this->externalTaxAmount = $externalTaxAmount;
    }
}