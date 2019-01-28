<?php

namespace StarCorp\Multiples;

use StarCorp\Interfaces\IMultipler;

abstract class AbstractMultiples implements IMultipler
{
    public abstract function getMultiples();

    public abstract function getResult();

    public function match($number)
    {
        $sum = 0;

        foreach ($this->getMultiples() as $multiple)
        {
            $sum += $number % $multiple;
        }

        return $sum == 0;
    }
}