<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ExtensionUpdate extends Update {
    /**
     * @return array
     */
    public function getActions();

    /**
     * @param array $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}