<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class OrderTransitionCustomLineItemStateActionModel extends JsonObjectModel implements OrderTransitionCustomLineItemStateAction
{
    const DISCRIMINATOR_VALUE = 'transitionCustomLineItemState';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $toState;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $fromState;

    /**
     * @var ?string
     */
    protected $customLineItemId;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?DateTimeImmutable
     */
    protected $actualTransitionDate;

    public function __construct(
        string $action = null,
        StateResourceIdentifier $toState = null,
        StateResourceIdentifier $fromState = null,
        string $customLineItemId = null,
        int $quantity = null,
        DateTimeImmutable $actualTransitionDate = null
    ) {
        $this->action = $action;
        $this->toState = $toState;
        $this->fromState = $fromState;
        $this->customLineItemId = $customLineItemId;
        $this->quantity = $quantity;
        $this->actualTransitionDate = $actualTransitionDate;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getToState()
    {
        if (is_null($this->toState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_TO_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->toState = StateResourceIdentifierModel::of($data);
        }

        return $this->toState;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getFromState()
    {
        if (is_null($this->fromState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_FROM_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->fromState = StateResourceIdentifierModel::of($data);
        }

        return $this->fromState;
    }

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getActualTransitionDate()
    {
        if (is_null($this->actualTransitionDate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->actualTransitionDate = $data;
        }

        return $this->actualTransitionDate;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setToState(?StateResourceIdentifier $toState): void
    {
        $this->toState = $toState;
    }

    public function setFromState(?StateResourceIdentifier $fromState): void
    {
        $this->fromState = $fromState;
    }

    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setActualTransitionDate(?DateTimeImmutable $actualTransitionDate): void
    {
        $this->actualTransitionDate = $actualTransitionDate;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]) && $data[OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] = $data[OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}