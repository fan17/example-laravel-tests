<?php
namespace Fitness\Patient;

class Patient implements PatientInterface
{
    private $weight;
    private $height;

    public function __construct(float $weight, int $height)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}