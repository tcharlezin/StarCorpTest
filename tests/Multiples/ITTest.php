<?php
use PHPUnit\Framework\TestCase;
use StarCorp\Multiples\IT;

class ITTest extends TestCase
{
    public function testMatch()
    {
        $it = new IT();
        $this->assertTrue($it->match(5));
        $this->assertTrue($it->match(10));
        $this->assertTrue($it->match(15));
        $this->assertTrue($it->match(20));
    }

    public function testNotMatch()
    {
        $it = new IT();
        $this->assertFalse($it->match(3));
        $this->assertFalse($it->match(4));
        $this->assertFalse($it->match(6));
        $this->assertFalse($it->match(12));
    }
}