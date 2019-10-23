<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<SubscriptionChangeDestinationAction>
 */
final class SubscriptionChangeDestinationActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var Destination|?DestinationBuilder
     */
    private $destination;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|Destination
     */
    public function getDestination()
    {
        return $this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDestination(?Destination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDestinationBuilder(?DestinationBuilder $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    public function build(): SubscriptionChangeDestinationAction
    {
        return new SubscriptionChangeDestinationActionModel(
            $this->action,
            ($this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination)
        );
    }

    public static function of(): SubscriptionChangeDestinationActionBuilder
    {
        return new self();
    }
}