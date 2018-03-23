<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Base\JsonCollection;

class CustomerGroupCollectionModel extends JsonCollection implements CustomerGroupCollection {

    /**
     * @param CustomerGroup $value
     * @return CustomerGroupCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerGroup) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerGroup
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerGroup) {
            $data = $this->mapData(CustomerGroup::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @return string
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}