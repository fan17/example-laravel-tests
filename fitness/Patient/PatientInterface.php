<?php
namespace Fitness\Patient;

interface PatientInterface
{
    public function getWeight() : float;
    public function getHeight() : int;
}