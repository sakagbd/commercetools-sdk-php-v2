<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerRemoveStoreAction>
 */
final class CustomerRemoveStoreActionBuilder implements Builder
{
    /**
     * @var null|StoreResourceIdentifier|StoreResourceIdentifierBuilder
     */
    private $store;

    /**
     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        return $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store;
    }

    /**
     * @param ?StoreResourceIdentifier $store
     * @return $this
     */
    public function withStore(?StoreResourceIdentifier $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStoreBuilder(?StoreResourceIdentifierBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    public function build(): CustomerRemoveStoreAction
    {
        return new CustomerRemoveStoreActionModel(
            $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store
        );
    }

    public static function of(): CustomerRemoveStoreActionBuilder
    {
        return new self();
    }
}
