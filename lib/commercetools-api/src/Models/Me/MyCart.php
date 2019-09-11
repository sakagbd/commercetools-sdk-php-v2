<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;

interface MyCart extends LoggedResource
{
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_STORE = 'store';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    const FIELD_TOTAL_PRICE = 'totalPrice';
    const FIELD_TAXED_PRICE = 'taxedPrice';
    const FIELD_CART_STATE = 'cartState';
    const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    const FIELD_BILLING_ADDRESS = 'billingAddress';
    const FIELD_INVENTORY_MODE = 'inventoryMode';
    const FIELD_TAX_MODE = 'taxMode';
    const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_COUNTRY = 'country';
    const FIELD_SHIPPING_INFO = 'shippingInfo';
    const FIELD_DISCOUNT_CODES = 'discountCodes';
    const FIELD_CUSTOM = 'custom';
    const FIELD_PAYMENT_INFO = 'paymentInfo';
    const FIELD_LOCALE = 'locale';
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    const FIELD_REFUSED_GIFTS = 'refusedGifts';
    const FIELD_ORIGIN = 'origin';
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';

    /**
     * @return null|string
     */
    public function getCustomerId();

    /**
     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * @return null|LineItemCollection
     */
    public function getLineItems();

    /**
     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems();

    /**
     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * @return null|string
     */
    public function getCartState();

    /**
     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * @return null|string
     */
    public function getInventoryMode();

    /**
     * @return null|string
     */
    public function getTaxMode();

    /**
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>.
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * @return null|ShippingInfo
     */
    public function getShippingInfo();

    /**
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|PaymentInfo
     */
    public function getPaymentInfo();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts();

    /**
     * @return null|string
     */
    public function getOrigin();

    /**
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput();

    /**
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    public function setCustomerId(?string $customerId): void;

    public function setCustomerEmail(?string $customerEmail): void;

    public function setAnonymousId(?string $anonymousId): void;

    public function setStore(?StoreKeyReference $store): void;

    public function setLineItems(?LineItemCollection $lineItems): void;

    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void;

    public function setTotalPrice(?TypedMoney $totalPrice): void;

    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    public function setCartState(?string $cartState): void;

    public function setShippingAddress(?Address $shippingAddress): void;

    public function setBillingAddress(?Address $billingAddress): void;

    public function setInventoryMode(?string $inventoryMode): void;

    public function setTaxMode(?string $taxMode): void;

    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    public function setTaxCalculationMode(?string $taxCalculationMode): void;

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    public function setCountry(?string $country): void;

    public function setShippingInfo(?ShippingInfo $shippingInfo): void;

    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void;

    public function setCustom(?CustomFields $custom): void;

    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;

    public function setLocale(?string $locale): void;

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void;

    public function setOrigin(?string $origin): void;

    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;

    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;
}
