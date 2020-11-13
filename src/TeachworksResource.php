<?php

namespace Teachworks;

abstract class TeachworksResource
{
    /**
     * @var TeachworksClient
     */
    protected $client;

    /**
     * TeachworksResource constructor.
     *
     * @param TeachworksClient $client
     */
    public function __construct(TeachworksClient $client)
    {
        $this->client = $client;
    }
}