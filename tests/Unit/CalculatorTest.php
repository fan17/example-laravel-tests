<?php

namespace Tests\Unit;

use Math\Calculator\CalculatorService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalculatorTest extends TestCase
{
    private $calculatorService;

    public function setUp()
    {
        $this->calculatorService = new CalculatorService();

        parent::setUp();
    }

    public function testAdding()
    {
        /** @var CalculatorService $calculator */
        $calculator = $this->calculatorService;

        $this->assertEquals(10, $calculator->add(3, 7));
    }
}
