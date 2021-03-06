<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProjectNotConfiguredForLanguagesError>
 * @method ProjectNotConfiguredForLanguagesError current()
 * @method ProjectNotConfiguredForLanguagesError at($offset)
 */
class ProjectNotConfiguredForLanguagesErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectNotConfiguredForLanguagesError $value
     * @psalm-param ProjectNotConfiguredForLanguagesError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectNotConfiguredForLanguagesErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectNotConfiguredForLanguagesError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectNotConfiguredForLanguagesError
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectNotConfiguredForLanguagesError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectNotConfiguredForLanguagesErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
