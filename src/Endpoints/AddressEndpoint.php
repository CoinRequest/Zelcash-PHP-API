<?php

namespace ZelCash\Endpoints;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class AddressEndpoint extends BaseEndpoint
{

    public function __construct(Client $client)
    {
        parent::__construct($client);
        $this->endpoint = 'addr/';
    }


    /**
     * @param              $address
     * @param bool         $withTxs
     * @param null|integer $from
     * @param null|integer $to
     *
     * @return array
     * @throws GuzzleException
     */
    public function getAddress($address, $withTxs = false, $from = null, $to = null)
    {
        $params = [
            'query' => [
                'noTxList' => 1
            ]
        ];
        if($withTxs || ($from > 0 && $to > 0)){
            if ($withTxs) {
                $params['query']['noTxList'] = 0;
            }

            if ($from > 0 && $to > 0) {
                $params['query']['from'] = $from;
                $params['query']['to'] = $to;
            }
        }


        return $this->get($this->endpoint.$address, $params);

    }
}