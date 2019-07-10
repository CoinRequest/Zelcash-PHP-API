<?php

namespace ZelCash\Endpoints;

use GuzzleHttp\Client;

class BlockEndpoint extends BaseEndpoint
{

    public function __construct(Client $client)
    {
        parent::__construct($client);
        $this->endpoint = 'block/';
    }


    public function getBlock($blockHash)
    {
        return $this->get($this->endpoint.$blockHash);
    }
}