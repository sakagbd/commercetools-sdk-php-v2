<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxAmountDraft;
use Commercetools\Api\Models\Cart\ExternalTaxAmountDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetCustomLineItemTaxAmountAction>
 */
final class StagedOrderSetCustomLineItemTaxAmountActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var ExternalTaxAmountDraft|?ExternalTaxAmountDraftBuilder
     */
    private $externalTaxAmount;

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
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        return $this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount;
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
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxAmountBuilder(?ExternalTaxAmountDraftBuilder $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }

    public function build(): StagedOrderSetCustomLineItemTaxAmountAction
    {
        return new StagedOrderSetCustomLineItemTaxAmountActionModel(
            $this->action,
            $this->customLineItemId,
            ($this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount)
        );
    }

    public static function of(): StagedOrderSetCustomLineItemTaxAmountActionBuilder
    {
        return new self();
    }
}