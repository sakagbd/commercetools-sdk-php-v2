<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeSetInputTipAction>
 */
final class ProductTypeSetInputTipActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $inputTip;

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
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|LocalizedString
     */
    public function getInputTip()
    {
        return $this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip;
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
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInputTip(?LocalizedString $inputTip)
    {
        $this->inputTip = $inputTip;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInputTipBuilder(?LocalizedStringBuilder $inputTip)
    {
        $this->inputTip = $inputTip;

        return $this;
    }

    public function build(): ProductTypeSetInputTipAction
    {
        return new ProductTypeSetInputTipActionModel(
            $this->action,
            $this->attributeName,
            ($this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip)
        );
    }

    public static function of(): ProductTypeSetInputTipActionBuilder
    {
        return new self();
    }
}