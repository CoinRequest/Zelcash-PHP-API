<?php

namespace ZelCash\Endpoints;

use GuzzleHttp\Client;

class TransactionEndpoint extends BaseEndpoint
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
        $this->endpoint = 'tx/';
    }


    public function getTransaction($txId)
    {
        return $this->get($this->endpoint.$txId);
    }
}