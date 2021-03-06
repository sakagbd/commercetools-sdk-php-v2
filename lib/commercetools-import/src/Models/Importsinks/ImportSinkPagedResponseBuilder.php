<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImportSinkPagedResponse>
 */
final class ImportSinkPagedResponseBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?int
     */
    private $offset;

    /**
     * @var ?int
     */
    private $count;

    /**
     * @var ?ImportSinkCollection
     */
    private $results;

    /**
     * <p>The maximum number of import operations returned for a page.</p>
     *
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>The offset supplied by the client or the server default. It is the number of elements skipped.</p>
     *
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>The actual number of results returned by this response.</p>
     *
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>The results for this paged response.</p>
     *
     * @return null|ImportSinkCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ?ImportSinkCollection $results
     * @return $this
     */
    public function withResults(?ImportSinkCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): ImportSinkPagedResponse
    {
        return new ImportSinkPagedResponseModel(
            $this->limit,
            $this->offset,
            $this->count,
            $this->results
        );
    }

    public static function of(): ImportSinkPagedResponseBuilder
    {
        return new self();
    }
}
