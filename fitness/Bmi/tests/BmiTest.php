<?php

namespace Fitness\Bmi\Tests;

use Fitness\Bmi\BmiService;
use Fitness\Patient\Patient;
use Tests\TestCase;

class BmiTest extends TestCase
{
    private $bmiService;

    public function setUp()
    {
        $this->bmiService = new BmiService();

        parent::setUp();
    }

    public function testCalculate()
    {
        $this->assertEquals(
            round(23.148148148148145, 2),
            round($this->getBmiService()->calculate(new Patient(75.0, 180)), 2)
        );
    }

    public function testCheckBmi()
    {
        $underweightPatient = new Patient(10.0, 200);
        $weightInNormPatient = new Patient(75.0, 180);
        $overWeightPatient = new Patient(100.0, 150);

        $this->assertTrue($this->getBmiService()->isUnderweight($underweightPatient));
        $this->assertFalse($this->getBmiService()->isInNorm($underweightPatient));
        $this->assertFalse($this->getBmiService()->isOverweight($underweightPatient));

        $this->assertFalse($this->getBmiService()->isUnderweight($weightInNormPatient));
        $this->assertTrue($this->getBmiService()->isInNorm($weightInNormPatient));
        $this->assertFalse($this->getBmiService()->isOverweight($weightInNormPatient));

        $this->assertFalse($this->getBmiService()->isUnderweight($overWeightPatient));
        $this->assertFalse($this->getBmiService()->isInNorm($overWeightPatient));
        $this->assertTrue($this->getBmiService()->isOverweight($overWeightPatient));
    }

    private function getBmiService() : BmiService
    {
        return $this->bmiService;
    }
}
