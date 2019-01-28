<?php

use PHPUnit\Framework\TestCase;
use StarCorp\Multiples\IT;
use StarCorp\Multiples\StarCorp;
use StarCorp\Multiples\StarCorpianos;
use StarCorp\Outputs\ConsolePrint;

class StarCorpianosResultTest extends TestCase
{
    public function testPipelineDigit15()
    {
        $this->load(new ConsolePrint(15, 15))->execute();
        $this->expectOutputString("StarCorpianos");
    }

    public function testPipelineDigit30()
    {
        $this->load(new ConsolePrint(30, 30))->execute();
        $this->expectOutputString("StarCorpianos");
    }

    public function testPipelineDigit45()
    {
        $this->load(new ConsolePrint(45, 45))->execute();
        $this->expectOutputString("StarCorpianos");
    }

    protected function load(\StarCorp\Interfaces\IOutput $output)
    {
        $output->addToPipeline(new StarCorpianos());
        $output->addToPipeline(new StarCorp());
        $output->addToPipeline(new IT());

        return $output;
    }
}