<?php

namespace ZelCash\Tests;

use ZelCash\ZelCash;
use Symfony\Component\VarDumper\VarDumper;

class TestCase extends \PHPUnit\Framework\TestCase
{


    public $zelCash;


    protected function setUp(): void
    {
        parent::setUp();
        $this->zelCash = new ZelCash();
    }


    public function tearDown(): void
    {
        $this->zelCash = null;
    }
}