<?php

namespace ZelCash\Tests\Endpoints;

use ZelCash\Tests\TestCase;

class TransactionEndpointTest extends TestCase
{

    /**
     * @test
     */
    function it_should_be_able_to_get_info_about_a_transaction()
    {
        $txId = '036c74e52db72676d0dc43d7dfd097c8c0de5130300f41466c1551cfdcaf7682';
        $response = $this->zelCash->transactionEndpoint()->getTransaction($txId);
        $this->assertEquals($txId, $response['txid']);

        $from = 't1V1Fiej6TPaHq4KG3mJ2c6FbHKsKU7CzFX';
        $to = 't1b1XVMUDaonZiPpon7YaNnUEX8jQowzvqK';
        $this->assertEquals($from, $response['vin'][0]->addr);
        $this->assertEquals($to, $response['vout'][0]->scriptPubKey->addresses[0]);
        $this->assertEquals(1.00000000, $response['vout'][0]->value);
    }
}