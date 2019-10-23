<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\KeyReference;
use Commercetools\Import\Models\Common\KeyReferenceBuilder;

/**
 * @implements Builder<ReferenceAttribute>
 */
final class ReferenceAttributeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $type;

    /**
     * @var KeyReference|?KeyReferenceBuilder
     */
    private $value;

    public function __construct()
    {
    }

    /**
     * <p>The name of this attribute must match a name of the product types attribute definitions.
     * The name is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>References a resource by its key.</p>.
     *
     * @return null|KeyReference
     */
    public function getValue()
    {
        return $this->value instanceof KeyReferenceBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?KeyReference $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?KeyReferenceBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ReferenceAttribute
    {
        return new ReferenceAttributeModel(
            $this->name,
            $this->type,
            ($this->value instanceof KeyReferenceBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): ReferenceAttributeBuilder
    {
        return new self();
    }
}