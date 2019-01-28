<?php

namespace StarCorp\Interfaces;

interface IOutput
{
    public function addToPipeline(IMultipler $multipler);

    public function execute();
}