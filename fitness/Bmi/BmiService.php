<?php
namespace Fitness\Bmi;

use Fitness\Patient\PatientInterface;

class BmiService
{
    const BMI_UNDERWEIGHT = 18.5;
    const BMI_OVERWEIGHT = 25.0;

    public function calculate(PatientInterface $patient) : float
    {
        return $patient->getWeight() / pow($patient->getHeight() / 100, 2);
    }

    public function isUnderweight(PatientInterface $patient) : bool
    {
        return self::BMI_UNDERWEIGHT >= $this->calculate($patient);
    }

    public function isOverweight(PatientInterface $patient) : bool
    {
        return self::BMI_OVERWEIGHT <= $this->calculate($patient);
    }

    public function isInNorm(PatientInterface $patient) : bool
    {
        return (
            self::BMI_UNDERWEIGHT < $this->calculate($patient)
            && $this->calculate($patient) < self::BMI_OVERWEIGHT
        );
    }
}