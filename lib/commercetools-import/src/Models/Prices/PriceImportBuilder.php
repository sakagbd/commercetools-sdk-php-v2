<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceBuilder;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReferenceBuilder;
use Commercetools\Import\Models\Common\DiscountedPrice;
use Commercetools\Import\Models\Common\DiscountedPriceBuilder;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use Commercetools\Import\Models\Common\PriceTierCollection;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceBuilder;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReferenceBuilder;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Common\TypedMoneyBuilder;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomBuilder;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<PriceImport>
 */
final class PriceImportBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $value;

    /**
     * @var ?string
     */
    private $country;

    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * @var null|CustomerGroupKeyReference|CustomerGroupKeyReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var null|ChannelKeyReference|ChannelKeyReferenceBuilder
     */
    private $channel;

    /**
     * @var null|DiscountedPrice|DiscountedPriceBuilder
     */
    private $discounted;

    /**
     * @var ?bool
     */
    private $publish;

    /**
     * @var ?PriceTierCollection
     */
    private $tiers;

    /**
     * @var null|Custom|CustomBuilder
     */
    private $custom;

    /**
     * @var null|ProductVariantKeyReference|ProductVariantKeyReferenceBuilder
     */
    private $productVariant;

    /**
     * @var null|ProductKeyReference|ProductKeyReferenceBuilder
     */
    private $product;

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>Price.value</code>.</p>
     * <p>The Import API <strong>only</strong> supports <code>centPrecision</code> prices.</p>
     *
     * @return null|TypedMoney
     */
    public function getValue()
    {
        return $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Maps to <code>Price.county</code>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>Maps to <code>Price.validFrom</code>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Maps to <code>Price.validUntil</code>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>References a customer group by its key.</p>
     * <p>The customer group referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupKeyReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>References a channel by its key.</p>
     * <p>The channel referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelKeyReferenceBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p>Sets a discounted price from an external service.</p>
     *
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted;
    }

    /**
     * <p>Only the Price updates will be published to <code>staged</code> and <code>current</code> projection.</p>
     *
     * @return null|bool
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * <p>The tiered prices for this price.</p>
     *
     * @return null|PriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * <p>The custom fields for this price.</p>
     *
     * @return null|Custom
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>The product variant in which this price is contained.</p>
     * <p>The product variant referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant()
    {
        return $this->productVariant instanceof ProductVariantKeyReferenceBuilder ? $this->productVariant->build() : $this->productVariant;
    }

    /**
     * <p>The product in which this product variant containong the price is contained. Maps to <code>ProductVariant.product</code>.</p>
     * <p>The product referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?TypedMoney $value
     * @return $this
     */
    public function withValue(?TypedMoney $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @param ?CustomerGroupKeyReference $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupKeyReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @param ?ChannelKeyReference $channel
     * @return $this
     */
    public function withChannel(?ChannelKeyReference $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @param ?DiscountedPrice $discounted
     * @return $this
     */
    public function withDiscounted(?DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @param ?bool $publish
     * @return $this
     */
    public function withPublish(?bool $publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * @param ?PriceTierCollection $tiers
     * @return $this
     */
    public function withTiers(?PriceTierCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * @param ?Custom $custom
     * @return $this
     */
    public function withCustom(?Custom $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?ProductVariantKeyReference $productVariant
     * @return $this
     */
    public function withProductVariant(?ProductVariantKeyReference $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @param ?ProductKeyReference $product
     * @return $this
     */
    public function withProduct(?ProductKeyReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?TypedMoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupKeyReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannelBuilder(?ChannelKeyReferenceBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductVariantBuilder(?ProductVariantKeyReferenceBuilder $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductBuilder(?ProductKeyReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): PriceImport
    {
        return new PriceImportModel(
            $this->key,
            $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value,
            $this->country,
            $this->validFrom,
            $this->validUntil,
            $this->customerGroup instanceof CustomerGroupKeyReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->channel instanceof ChannelKeyReferenceBuilder ? $this->channel->build() : $this->channel,
            $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted,
            $this->publish,
            $this->tiers,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom,
            $this->productVariant instanceof ProductVariantKeyReferenceBuilder ? $this->productVariant->build() : $this->productVariant,
            $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product
        );
    }

    public static function of(): PriceImportBuilder
    {
        return new self();
    }
}
