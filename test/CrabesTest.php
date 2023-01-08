<?php

namespace App\test;

use App\Entity\Crabes;
use PHPUnit\Framework\TestCase;

final class CrabesTest extends TestCase
{

    private Crabes $Crabes;

    public function setUp() : void
    {
        $this->Crabes = new Crabes();
    }

    public function testpince() : void
    {
        $this->assertEquals("Je pince très très fort quand on veut m'attraper", $this->Crabes->pince());
        $this->assertTrue($this->Crabes->pince());
    }

    public function testEtreVivant() : void 
    {
        $this->assertTrue($this->Crabes->etreVivant());
        $this->assertEquals("Je suis un Etre Vivant", $this->Crabes->etreVivant());
    }
}