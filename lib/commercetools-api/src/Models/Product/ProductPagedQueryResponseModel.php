<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductPagedQueryResponseModel extends JsonObjectModel implements ProductPagedQueryResponse
{
    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?int
     */
    protected $limit;

    /**
     * @var ?ProductCollection
     */
    protected $results;

    public function __construct(
        int $total = null,
        int $offset = null,
        int $count = null,
        int $limit = null,
        ProductCollection $results = null
    ) {
        $this->total = $total;
        $this->offset = $offset;
        $this->count = $count;
        $this->limit = $limit;
        $this->results = $results;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductPagedQueryResponse::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductPagedQueryResponse::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductPagedQueryResponse::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductPagedQueryResponse::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * @return null|ProductCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductPagedQueryResponse::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ProductCollection::fromArray($data);
        }

        return $this->results;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function setResults(?ProductCollection $results): void
    {
        $this->results = $results;
    }
}
