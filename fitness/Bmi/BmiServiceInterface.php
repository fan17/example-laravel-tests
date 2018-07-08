<?php
namespace Fitness\Bmi;

use Fitness\Patient\PatientInterface;

interface BmiServiceInterface
{
    public function calculate(PatientInterface $patient) : float;

    public function isUnderweight(PatientInterface $patient) : bool;

    public function isOverweight(PatientInterface $patient) : bool;

    public function isInNorm(PatientInterface $patient) : bool;
}