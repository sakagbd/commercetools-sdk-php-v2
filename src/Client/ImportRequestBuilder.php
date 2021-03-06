<?php

namespace Commercetools\Client;

use Commercetools\Import\Client\ImportRequestBuilder as Builder;
use Commercetools\Import\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\ClientInterface;

class ImportRequestBuilder extends Builder
{
    /**
     * @var string
     */
    private $projectKey;

    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(string $projectKey, ClientInterface $client, array $args = [])
    {
        parent::__construct($client, $args);
        $this->projectKey = $projectKey;
    }

    public function with(): ResourceByProjectKey
    {
        return $this->withProjectKeyValue($this->projectKey);
    }
}
