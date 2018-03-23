<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderRemoveParcelFromDeliveryAction extends OrderUpdateAction {
    const FIELD_PARCEL_ID = 'parcelId';

    /**
     * @return string
     */
    public function getParcelId();

    /**
     * @param string $parcelId
     * @return $this
     */
    public function setParcelId(string $parcelId);

}