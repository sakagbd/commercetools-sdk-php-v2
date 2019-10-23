<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceModel;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReferenceModel;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyModel;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceModel;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReferenceModel;
use DateTimeImmutable;
use stdClass;

final class PriceImportModel extends JsonObjectModel implements PriceImport
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?ProductKeyReference
     */
    protected $product;

    /**
     * @var ?ProductVariantKeyReference
     */
    protected $productVariant;

    /**
     * @var ?CustomerGroupKeyReference
     */
    protected $customerGroup;

    /**
     * @var ?ChannelKeyReference
     */
    protected $channel;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?Money
     */
    protected $value;

    public function __construct(
        string $key = null,
        string $country = null,
        ProductKeyReference $product = null,
        ProductVariantKeyReference $productVariant = null,
        CustomerGroupKeyReference $customerGroup = null,
        ChannelKeyReference $channel = null,
        DateTimeImmutable $validUntil = null,
        DateTimeImmutable $validFrom = null,
        Money $value = null
    ) {
        $this->key = $key;
        $this->country = $country;
        $this->product = $product;
        $this->productVariant = $productVariant;
        $this->customerGroup = $customerGroup;
        $this->channel = $channel;
        $this->validUntil = $validUntil;
        $this->validFrom = $validFrom;
        $this->value = $value;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportResource::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Maps to <code>Price.county</code>.</p>.
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceImport::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>The product in which this product variant containong the price is contained. Maps to <code>ProductVariant.product</code>.</p>
     * <p>The product referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceImport::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductKeyReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>The product variant in which this price is contained.</p>
     * <p>The product variant referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant()
    {
        if (is_null($this->productVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceImport::FIELD_PRODUCT_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->productVariant = ProductVariantKeyReferenceModel::of($data);
        }

        return $this->productVariant;
    }

    /**
     * <p>References a customer group by its key.</p>
     * <p>The customer group referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceImport::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupKeyReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>References a channel by its key.</p>
     * <p>The channel referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|ChannelKeyReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceImport::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelKeyReferenceModel::of($data);
        }

        return $this->channel;
    }

    /**
     * <p>Maps to <code>Price.validUntil</code>.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceImport::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validUntil = $data;
        }

        return $this->validUntil;
    }

    /**
     * <p>Maps to <code>Price.validFrom</code>.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceImport::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validFrom = $data;
        }

        return $this->validFrom;
    }

    /**
     * <p>Maps to <code>Price.value</code>.</p>
     * <p>The Import API <strong>only</strong> supports <code>centPrecision</code> prices.</p>.
     *
     * @return null|Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceImport::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = MoneyModel::of($data);
        }

        return $this->value;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setProduct(?ProductKeyReference $product): void
    {
        $this->product = $product;
    }

    public function setProductVariant(?ProductVariantKeyReference $productVariant): void
    {
        $this->productVariant = $productVariant;
    }

    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function setChannel(?ChannelKeyReference $channel): void
    {
        $this->channel = $channel;
    }

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function setValue(?Money $value): void
    {
        $this->value = $value;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[PriceImport::FIELD_VALID_UNTIL]) && $data[PriceImport::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[PriceImport::FIELD_VALID_UNTIL] = $data[PriceImport::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[PriceImport::FIELD_VALID_FROM]) && $data[PriceImport::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[PriceImport::FIELD_VALID_FROM] = $data[PriceImport::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}