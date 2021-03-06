<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypeReference>
 * @method ProductTypeReference current()
 * @method ProductTypeReference at($offset)
 */
class ProductTypeReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeReference $value
     * @psalm-param ProductTypeReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeReference
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
