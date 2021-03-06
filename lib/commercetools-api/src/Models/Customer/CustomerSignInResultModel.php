<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerSignInResultModel extends JsonObjectModel implements CustomerSignInResult
{
    /**
     * @var ?Customer
     */
    protected $customer;

    /**
     * @var ?mixed
     */
    protected $cart;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Customer $customer = null,
        ?JsonObject $cart = null
    ) {
        $this->customer = $customer;
        $this->cart = $cart;
    }

    /**
     * @return null|Customer
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>A cart that is associated to the customer.
     * Empty if the customer does not have a cart yet.</p>
     *
     * @return null|mixed
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART);
            if (is_null($data)) {
                return null;
            }
            $this->cart = JsonObjectModel::of($data);
        }

        return $this->cart;
    }


    /**
     * @param ?Customer $customer
     */
    public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?JsonObject $cart
     */
    public function setCart(?JsonObject $cart): void
    {
        $this->cart = $cart;
    }
}
