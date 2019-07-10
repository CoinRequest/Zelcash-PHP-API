<?php

namespace ZelCash\Tests\Endpoints;

use ZelCash\Tests\TestCase;

class BlockEndpointTest extends TestCase
{

    /**
     * @test
     */
    function it_should_be_able_to_get_info_about_a_block()
    {
        $blockHash = '000000321e6725505556b7904f6385e07843f6626a553d815dad6128ab83c444';
        $response = $this->zelCash->blockEndpoint()->getBlock($blockHash);
        $this->assertEquals($blockHash, $response['hash']);
    }
}