<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

interface DuplicateVariantValuesError extends ErrorObject
{
    const FIELD_VARIANT_VALUES = 'variantValues';

    /**
     * <p>The offending variant values.</p>.
     *
     * @return null|VariantValues
     */
    public function getVariantValues();

    public function setVariantValues(?VariantValues $variantValues): void;
}
