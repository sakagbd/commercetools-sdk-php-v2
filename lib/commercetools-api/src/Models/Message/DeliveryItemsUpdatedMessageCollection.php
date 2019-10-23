<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DeliveryItemsUpdatedMessage>
 *
 * @method DeliveryItemsUpdatedMessage current()
 * @method DeliveryItemsUpdatedMessage at($offset)
 */
class DeliveryItemsUpdatedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryItemsUpdatedMessage $value
     * @psalm-param DeliveryItemsUpdatedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return DeliveryItemsUpdatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryItemsUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryItemsUpdatedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryItemsUpdatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryItemsUpdatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}