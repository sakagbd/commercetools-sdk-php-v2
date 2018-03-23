<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFields;

interface Price extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_VALUE = 'value';
    const FIELD_COUNTRY = 'country';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_CHANNEL = 'channel';
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';
    const FIELD_DISCOUNTED = 'discounted';
    const FIELD_CUSTOM = 'custom';
    const FIELD_TIERS = 'tiers';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return TypedMoney
     */
    public function getValue();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return ChannelReference
     */
    public function getChannel();

    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @return DiscountedPrice
     */
    public function getDiscounted();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return PriceTierCollection
     */
    public function getTiers();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param TypedMoney $value
     * @return $this
     */
    public function setValue(TypedMoney $value);

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country);

    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup);

    /**
     * @param ChannelReference $channel
     * @return $this
     */
    public function setChannel(ChannelReference $channel);

    /**
     * @param \DateTimeImmutable $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom);

    /**
     * @param \DateTimeImmutable $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil);

    /**
     * @param DiscountedPrice $discounted
     * @return $this
     */
    public function setDiscounted(DiscountedPrice $discounted);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param PriceTierCollection $tiers
     * @return $this
     */
    public function setTiers(PriceTierCollection $tiers);

}