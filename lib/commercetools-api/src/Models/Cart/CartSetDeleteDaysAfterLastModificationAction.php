<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

interface CartSetDeleteDaysAfterLastModificationAction extends CartUpdateAction
{
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;
}