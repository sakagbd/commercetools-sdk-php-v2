<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;

interface CategorySetCustomFieldAction extends CategoryUpdateAction
{
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|JsonObject
     */
    public function getValue();

    public function setName(?string $name): void;

    public function setValue(?JsonObject $value): void;
}