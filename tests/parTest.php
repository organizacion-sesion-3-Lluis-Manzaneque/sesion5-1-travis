<?php
use PHPUnit\Framework\TestCase;
require 'par.php';

class parTest extends TestCase
{
    private $par;
 
    protected function setUp(): void
    {
        $this->par = new Par();
    }
 
    protected function tearDown(): void
    {
        $this->par = NULL;
    }
 
    public function testPar(): void
    {
        $result = $this->par->comprobarPar(5);
        $this->assertEquals(false,$result);

        $result = $this->par->comprobarPar(0);
        $this->assertEquals(true,$result);

        $result = $this->par->comprobarPar(66);
        $this->assertEquals(true,$result);
    }

    
 
}
