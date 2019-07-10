<?php

namespace ZelCash\Tests\Endpoints;

use ZelCash\Tests\TestCase;

class AddressEndpointTest extends TestCase
{

    /**
     * @test
     */
    function it_should_be_able_to_get_info_about_an_address()
    {
        $address = 't1V1Fiej6TPaHq4KG3mJ2c6FbHKsKU7CzFX';
        $response = $this->zelCash->addressEndpoint()->getAddress($address);
        $this->assertEquals($address, $response['addrStr']);
    }


    /**
     * @test
     */
    function it_should_be_able_to_get_the_transaction_hashes_with_an_address()
    {
        $address = 't1gZgxSEr9RcMBcUyHvkN1U2bJsz3CEV2Ve';
        $response = $this->zelCash->addressEndpoint()->getAddress($address, true, 1, 11);
        $this->assertEquals($address, $response['addrStr']);
        $this->assertEquals(10, count($response['transactions']));
    }
}