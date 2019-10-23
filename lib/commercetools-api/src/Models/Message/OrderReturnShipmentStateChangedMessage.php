<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

interface OrderReturnShipmentStateChangedMessage extends Message
{
    const FIELD_RETURN_ITEM_ID = 'returnItemId';
    const FIELD_RETURN_SHIPMENT_STATE = 'returnShipmentState';

    /**
     * @return null|string
     */
    public function getReturnItemId();

    /**
     * @return null|string
     */
    public function getReturnShipmentState();

    public function setReturnItemId(?string $returnItemId): void;

    public function setReturnShipmentState(?string $returnShipmentState): void;
}