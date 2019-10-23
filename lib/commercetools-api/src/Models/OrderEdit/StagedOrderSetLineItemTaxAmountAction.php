<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxAmountDraft;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetLineItemTaxAmountAction extends StagedOrderUpdateAction
{
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount();

    public function setLineItemId(?string $lineItemId): void;

    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void;
}