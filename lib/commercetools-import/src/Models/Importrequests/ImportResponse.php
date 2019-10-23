<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Importitems\ImportItemCollection;

interface ImportResponse extends JsonObject
{
    const FIELD_ITEMS = 'items';

    /**
     * @return null|ImportItemCollection
     */
    public function getItems();

    public function setItems(?ImportItemCollection $items): void;
}