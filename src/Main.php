<?php

namespace StarCorp;

use StarCorp\Multiples\IT;
use StarCorp\Multiples\StarCorp;
use StarCorp\Multiples\StarCorpianos;
use StarCorp\Outputs\ConsolePrint;
use StarCorp\Outputs\HTMLPrint;
use StarCorp\Outputs\XMLPrint;

class Main
{
    const START = 1;
    const END = 100;

    public static function execute()
    {
        // Outros tipos de outputs criados
        // O que muda, é a formatação de saída.
        // $printer = new HTMLPrint(self::START, self::END);
        // $printer = new XMLPrint(self::START, self::END);

        $printer = new ConsolePrint(self::START, self::END);

        $printer->addToPipeline(new StarCorpianos());
        $printer->addToPipeline(new StarCorp());
        $printer->addToPipeline(new IT());

        $printer->execute();
    }
}