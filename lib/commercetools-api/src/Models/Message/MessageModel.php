<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class MessageModel extends JsonObjectModel implements Message
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?int
     */
    protected $sequenceNumber;

    /**
     * @var ?Reference
     */
    protected $resource;

    /**
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;

    /**
     * @var ?int
     */
    protected $resourceVersion;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<Message> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
        'OrderBillingAddressSet' => OrderBillingAddressSetMessageModel::class,
        'OrderCreated' => OrderCreatedMessageModel::class,
        'OrderCustomLineItemDiscountSet' => OrderCustomLineItemDiscountSetMessageModel::class,
        'OrderCustomerEmailSet' => OrderCustomerEmailSetMessageModel::class,
        'OrderCustomerSet' => OrderCustomerSetMessageModel::class,
        'OrderDeleted' => OrderDeletedMessageModel::class,
        'OrderDiscountCodeAdded' => OrderDiscountCodeAddedMessageModel::class,
        'OrderDiscountCodeRemoved' => OrderDiscountCodeRemovedMessageModel::class,
        'OrderDiscountCodeStateSet' => OrderDiscountCodeStateSetMessageModel::class,
        'OrderEditApplied' => OrderEditAppliedMessageModel::class,
        'OrderImported' => OrderImportedMessageModel::class,
        'OrderLineItemAdded' => OrderLineItemAddedMessageModel::class,
        'OrderLineItemDiscountSet' => OrderLineItemDiscountSetMessageModel::class,
        'OrderPaymentStateChanged' => OrderPaymentStateChangedMessageModel::class,
        'ReturnInfoAdded' => OrderReturnInfoAddedMessageModel::class,
        'OrderReturnShipmentStateChanged' => OrderReturnShipmentStateChangedMessageModel::class,
        'OrderShipmentStateChanged' => OrderShipmentStateChangedMessageModel::class,
        'OrderShippingAddressSet' => OrderShippingAddressSetMessageModel::class,
        'OrderShippingInfoSet' => OrderShippingInfoSetMessageModel::class,
        'OrderShippingRateInputSet' => OrderShippingRateInputSetMessageModel::class,
        'OrderStateChanged' => OrderStateChangedMessageModel::class,
        'OrderStateTransition' => OrderStateTransitionMessageModel::class,
        'ParcelAddedToDelivery' => ParcelAddedToDeliveryMessageModel::class,
        'ParcelItemsUpdated' => ParcelItemsUpdatedMessageModel::class,
        'ParcelMeasurementsUpdated' => ParcelMeasurementsUpdatedMessageModel::class,
        'ParcelRemovedFromDelivery' => ParcelRemovedFromDeliveryMessageModel::class,
        'ParcelTrackingDataUpdated' => ParcelTrackingDataUpdatedMessageModel::class,
        'PaymentCreated' => PaymentCreatedMessageModel::class,
        'PaymentInteractionAdded' => PaymentInteractionAddedMessageModel::class,
        'PaymentStatusInterfaceCodeSet' => PaymentStatusInterfaceCodeSetMessageModel::class,
        'PaymentStatusStateTransition' => PaymentStatusStateTransitionMessageModel::class,
        'PaymentTransactionAdded' => PaymentTransactionAddedMessageModel::class,
        'PaymentTransactionStateChanged' => PaymentTransactionStateChangedMessageModel::class,
        'ProductCreated' => ProductCreatedMessageModel::class,
        'ProductDeleted' => ProductDeletedMessageModel::class,
        'ProductImageAdded' => ProductImageAddedMessageModel::class,
        'ProductPriceDiscountsSet' => ProductPriceDiscountsSetMessageModel::class,
        'ProductPriceExternalDiscountSet' => ProductPriceExternalDiscountSetMessageModel::class,
        'ProductPublished' => ProductPublishedMessageModel::class,
        'ProductRevertedStagedChanges' => ProductRevertedStagedChangesMessageModel::class,
        'ProductSlugChanged' => ProductSlugChangedMessageModel::class,
        'ProductStateTransition' => ProductStateTransitionMessageModel::class,
        'ProductUnpublished' => ProductUnpublishedMessageModel::class,
        'ProductVariantDeleted' => ProductVariantDeletedMessageModel::class,
        'ReviewCreated' => ReviewCreatedMessageModel::class,
        'ReviewRatingSet' => ReviewRatingSetMessageModel::class,
        'ReviewStateTransition' => ReviewStateTransitionMessageModel::class,
        'CategoryCreated' => CategoryCreatedMessageModel::class,
        'CategorySlugChanged' => CategorySlugChangedMessageModel::class,
        'CustomLineItemStateTransition' => CustomLineItemStateTransitionMessageModel::class,
        'CustomerAddressAdded' => CustomerAddressAddedMessageModel::class,
        'CustomerAddressChanged' => CustomerAddressChangedMessageModel::class,
        'CustomerAddressRemoved' => CustomerAddressRemovedMessageModel::class,
        'CustomerCompanyNameSet' => CustomerCompanyNameSetMessageModel::class,
        'CustomerCreated' => CustomerCreatedMessageModel::class,
        'CustomerDateOfBirthSet' => CustomerDateOfBirthSetMessageModel::class,
        'CustomerEmailChanged' => CustomerEmailChangedMessageModel::class,
        'CustomerEmailVerified' => CustomerEmailVerifiedMessageModel::class,
        'CustomerGroupSet' => CustomerGroupSetMessageModel::class,
        'DeliveryAdded' => DeliveryAddedMessageModel::class,
        'DeliveryAddressSet' => DeliveryAddressSetMessageModel::class,
        'DeliveryItemsUpdated' => DeliveryItemsUpdatedMessageModel::class,
        'DeliveryRemoved' => DeliveryRemovedMessageModel::class,
        'InventoryEntryDeleted' => InventoryEntryDeletedMessageModel::class,
        'LineItemStateTransition' => LineItemStateTransitionMessageModel::class,
        'null' => MessageModel::class,
    ];

    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        int $sequenceNumber = null,
        Reference $resource = null,
        UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        int $resourceVersion = null,
        string $type = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->sequenceNumber = $sequenceNumber;
        $this->resource = $resource;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->resourceVersion = $resourceVersion;
        $this->type = $type;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(BaseResource::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * @return null|int
     */
    public function getSequenceNumber()
    {
        if (is_null($this->sequenceNumber)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Message::FIELD_SEQUENCE_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->sequenceNumber = (int) $data;
        }

        return $this->sequenceNumber;
    }

    /**
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Message::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    /**
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        if (is_null($this->resourceUserProvidedIdentifiers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Message::FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS);
            if (is_null($data)) {
                return null;
            }

            $this->resourceUserProvidedIdentifiers = UserProvidedIdentifiersModel::of($data);
        }

        return $this->resourceUserProvidedIdentifiers;
    }

    /**
     * @return null|int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Message::FIELD_RESOURCE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->resourceVersion = (int) $data;
        }

        return $this->resourceVersion;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Message::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }

    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<Message>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = Message::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<Message> */
        $type = MessageModel::class;

        return $type;
    }
}