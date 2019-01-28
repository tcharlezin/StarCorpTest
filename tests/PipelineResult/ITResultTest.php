<?php
use PHPUnit\Framework\TestCase;
use StarCorp\Interfaces\IOutput;
use StarCorp\Multiples\IT;
use StarCorp\Multiples\StarCorp;
use StarCorp\Multiples\StarCorpianos;
use StarCorp\Outputs\ConsolePrint;

class ITResultTest extends TestCase
{
    public function testPipelineDigit5()
    {
        $this->load(new ConsolePrint(5, 5))->execute();
        $this->expectOutputString("IT\n");
    }

    public function testPipelineDigit10()
    {
        $this->load(new ConsolePrint(10, 10))->execute();
        $this->expectOutputString("IT\n");
    }

    public function testPipelineDigit20()
    {
        $this->load(new ConsolePrint(20, 20))->execute();
        $this->expectOutputString("IT\n");
    }

    protected function load(IOutput $output)
    {
        $output->addToPipeline(new StarCorpianos());
        $output->addToPipeline(new StarCorp());
        $output->addToPipeline(new IT());

        return $output;
    }
}