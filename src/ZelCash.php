<?php

namespace ZelCash;

use Composer\CaBundle\CaBundle;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use ZelCash\Endpoints\AddressEndpoint;
use ZelCash\Endpoints\BlockEndpoint;
use ZelCash\Endpoints\TransactionEndpoint;

class ZelCash
{
    private $client;

    private $addressEndpoint;

    private $blockEndpoint;

    private $transactionEndpoint;

    public static $API_ROUTE = 'https://explorer.zel.cash/api/';

    public static $TIMEOUT = 10.0;

    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri'              => self::$API_ROUTE,
            // You can set any number of default request options.
            RequestOptions::TIMEOUT => self::$TIMEOUT,
            RequestOptions::VERIFY  => CaBundle::getBundledCaBundlePath(),
        ]);


    }


    /**
     * @return AddressEndpoint
     */
    public function addressEndpoint(): AddressEndpoint
    {
        if(!isset($this->addressEndpoint) || is_null($this->addressEndpoint)){
            $this->setAddresses(new AddressEndpoint($this->client));
        }
        return $this->addressEndpoint;
    }


    /**
     * @param AddressEndpoint $addresses
     */
    private function setAddresses(AddressEndpoint $addresses)
    {
        $this->addressEndpoint = $addresses;
    }


    /**
     * @return BlockEndpoint
     */
    public function blockEndpoint()
    {
        if(!isset($this->blockEndpoint) || is_null($this->blockEndpoint)){
            $this->setBlockEndpoint(new BlockEndpoint($this->client));
        }
        return $this->blockEndpoint;
    }


    /**
     * @param BlockEndpoint $blockEndpoint
     */
    public function setBlockEndpoint($blockEndpoint)
    {
        $this->blockEndpoint = $blockEndpoint;
    }


    /**
     * @return TransactionEndpoint
     */
    public function transactionEndpoint()
    {
        if(!isset($this->transactionEndpoint) || is_null($this->transactionEndpoint)){
            $this->setTransactionEndpoint(new TransactionEndpoint($this->client));
        }
        return $this->transactionEndpoint;
    }


    /**
     * @param mixed TransactionEndpoint
     */
    public function setTransactionEndpoint($transactionEndpoint)
    {
        $this->transactionEndpoint = $transactionEndpoint;
    }
}