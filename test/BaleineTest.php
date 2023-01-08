<?php

namespace App\test;

use App\Entity\Baleine;
use PHPUnit\Framework\TestCase;

final class BaleineTest extends TestCase
{

    private Baleine $baleine;

    public function setUp() : void
    {
        $this->baleine = new Baleine();
    }

    public function testChant() : void
    {
        $this->assertEquals("Je chante pour communiquer avec les autres baleines", $this->baleine->chant());
        $this->assertTrue($this->baleine->chant());
    }

    public function testEtreVivant() : void 
    {
        $this->assertTrue($this->baleine->etreVivant());
        $this->assertEquals("Je suis un Etre Vivant", $this->baleine->etreVivant());
    }
}