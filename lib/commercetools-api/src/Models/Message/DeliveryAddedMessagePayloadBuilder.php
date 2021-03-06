<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DeliveryAddedMessagePayload>
 */
final class DeliveryAddedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|Delivery|DeliveryBuilder
     */
    private $delivery;

    /**
     * @return null|Delivery
     */
    public function getDelivery()
    {
        return $this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery;
    }

    /**
     * @param ?Delivery $delivery
     * @return $this
     */
    public function withDelivery(?Delivery $delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeliveryBuilder(?DeliveryBuilder $delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function build(): DeliveryAddedMessagePayload
    {
        return new DeliveryAddedMessagePayloadModel(
            $this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery
        );
    }

    public static function of(): DeliveryAddedMessagePayloadBuilder
    {
        return new self();
    }
}
