<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StateSetRolesAction>
 * @method StateSetRolesAction current()
 * @method StateSetRolesAction at($offset)
 */
class StateSetRolesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StateSetRolesAction $value
     * @psalm-param StateSetRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StateSetRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateSetRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateSetRolesAction
     */
    protected function mapper()
    {
        return function (int $index): ?StateSetRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateSetRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
