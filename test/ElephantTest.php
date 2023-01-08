<?php

namespace App\test;

use App\Entity\Elephant;
use PHPUnit\Framework\TestCase;

final class ElephantTest extends TestCase
{

    private Elephant $Elephant;

    public function setUp() : void
    {
        $this->Elephant = new Elephant();
    }

    public function testmange() : void
    {
        $this->assertEquals("J'utilise ma trompe pour manger", $this->Elephant->mange());
        $this->assertTrue($this->Elephant->mange());
    }

    public function testEtreVivant() : void 
    {
        $this->assertEquals("Je suis un Etre Vivant", $this->Elephant->etreVivant());
        $this->assertTrue($this->Elephant->etreVivant());
    }

    public function testVivreDansLaJungle() : void 
    {
        $this->assertEquals("Je suis un Elephant et je peux vivre dans la jungle", $this->Elephant->VivreDansLaJungle());
        $this->assertTrue($this->Elephant->VivreDansLaJungle());
    }
}