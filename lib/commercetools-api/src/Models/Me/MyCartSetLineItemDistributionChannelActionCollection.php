<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyCartSetLineItemDistributionChannelAction>
 * @method MyCartSetLineItemDistributionChannelAction current()
 * @method MyCartSetLineItemDistributionChannelAction at($offset)
 */
class MyCartSetLineItemDistributionChannelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartSetLineItemDistributionChannelAction $value
     * @psalm-param MyCartSetLineItemDistributionChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetLineItemDistributionChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetLineItemDistributionChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetLineItemDistributionChannelAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetLineItemDistributionChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartSetLineItemDistributionChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
