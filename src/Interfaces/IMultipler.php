<?php

namespace StarCorp\Interfaces;

interface IMultipler
{
    public function getMultiples();

    public function match($number);

    public function getResult();
}