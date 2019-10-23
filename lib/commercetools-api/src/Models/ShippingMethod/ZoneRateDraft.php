<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Base\JsonObject;

interface ZoneRateDraft extends JsonObject
{
    const FIELD_ZONE = 'zone';
    const FIELD_SHIPPING_RATES = 'shippingRates';

    /**
     * @return null|ZoneResourceIdentifier
     */
    public function getZone();

    /**
     * @return null|ShippingRateDraftCollection
     */
    public function getShippingRates();

    public function setZone(?ZoneResourceIdentifier $zone): void;

    public function setShippingRates(?ShippingRateDraftCollection $shippingRates): void;
}