<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPriceBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartChangeLineItemQuantityAction>
 */
final class MyCartChangeLineItemQuantityActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @var ?float
     */
    private $quantity;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $externalPrice;

    /**
     * @var null|ExternalLineItemTotalPrice|ExternalLineItemTotalPriceBuilder
     */
    private $externalTotalPrice;

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|Money
     */
    public function getExternalPrice()
    {
        return $this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice;
    }

    /**
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        return $this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?float $quantity
     * @return $this
     */
    public function withQuantity(?float $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?Money $externalPrice
     * @return $this
     */
    public function withExternalPrice(?Money $externalPrice)
    {
        $this->externalPrice = $externalPrice;

        return $this;
    }

    /**
     * @param ?ExternalLineItemTotalPrice $externalTotalPrice
     * @return $this
     */
    public function withExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalPriceBuilder(?MoneyBuilder $externalPrice)
    {
        $this->externalPrice = $externalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTotalPriceBuilder(?ExternalLineItemTotalPriceBuilder $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

        return $this;
    }

    public function build(): MyCartChangeLineItemQuantityAction
    {
        return new MyCartChangeLineItemQuantityActionModel(
            $this->lineItemId,
            $this->quantity,
            $this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice,
            $this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice
        );
    }

    public static function of(): MyCartChangeLineItemQuantityActionBuilder
    {
        return new self();
    }
}
