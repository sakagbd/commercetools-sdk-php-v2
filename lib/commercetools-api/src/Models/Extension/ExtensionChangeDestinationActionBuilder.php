<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionChangeDestinationAction>
 */
final class ExtensionChangeDestinationActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ExtensionDestination|?ExtensionDestinationBuilder
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
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        return $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination;
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
    public function withDestination(?ExtensionDestination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDestinationBuilder(?ExtensionDestinationBuilder $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    public function build(): ExtensionChangeDestinationAction
    {
        return new ExtensionChangeDestinationActionModel(
            $this->action,
            ($this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination)
        );
    }

    public static function of(): ExtensionChangeDestinationActionBuilder
    {
        return new self();
    }
}