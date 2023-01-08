<?php

namespace App\test;

use App\Entity\Lion;
use PHPUnit\Framework\TestCase;

final class LionTest extends TestCase
{

    private Lion $Lion;

    public function setUp() : void
    {
        $this->Lion = new Lion();
    }

    public function testrugir() : void
    {
        $this->assertEquals("Je rugis pour faire connaître que je suis le roi de la jungle !", $this->Lion->rugir());
        $this->assertTrue($this->Lion->rugir());
    }

    public function testEtreVivant() : void 
    {
        $this->assertEquals("Je suis un Etre Vivant", $this->Lion->etreVivant());
        $this->assertTrue($this->Lion->etreVivant());
    }

    public function testVivreDansLaJungle() : void 
    {
        $this->assertEquals("Je suis un Lion et je peux vivre dans la jungle", $this->Lion->VivreDansLaJungle());
        $this->assertTrue($this->Lion->VivreDansLaJungle());
    }
}