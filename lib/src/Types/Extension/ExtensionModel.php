<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Common\ResourceModel;

use Commercetools\Builder\ExtensionUpdateBuilder;
use Commercetools\Types\Common\Resource;

class ExtensionModel extends ResourceModel implements Extension {
    /**
     * @var string
     */
    protected $key;
    /**
     * @var ExtensionDestination
     */
    protected $destination;
    /**
     * @var ExtensionTriggerCollection
     */
    protected $triggers;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(Extension::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return ExtensionDestination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            $value = $this->raw(Extension::FIELD_DESTINATION);
            $resolvedClass = $this->resolveDiscriminator(ExtensionDestination::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->destination = $value;
        }
        return $this->destination;
    }
    /**
     * @return ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        if (is_null($this->triggers)) {
            $value = $this->raw(Extension::FIELD_TRIGGERS);
            if (is_null($value)) {
                return $this->mapData(ExtensionTriggerCollection::class, null);
            }
            $value = $this->mapData(ExtensionTriggerCollection::class, $value);
            $this->triggers = $value;
        }
        return $this->triggers;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param ExtensionDestination $destination
     * @return $this
     */
    public function setDestination(ExtensionDestination $destination)
    {
        $this->destination = $destination;

        return $this;
    }
    /**
     * @param ExtensionTriggerCollection $triggers
     * @return $this
     */
    public function setTriggers(ExtensionTriggerCollection $triggers)
    {
        $this->triggers = $triggers;

        return $this;
    }


    /**
     * @return ExtensionUpdateBuilder
     */
    public function update()
    {
        $builder = new ExtensionUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}