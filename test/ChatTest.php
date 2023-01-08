<?php

namespace App\test;

use App\Entity\Chat;
use PHPUnit\Framework\TestCase;

final class ChatTest extends TestCase
{

    private Chat $chat;

    public function setUp() : void
    {
        $this->chat = new Chat();
    }

    public function testMiaule() : void
    {
        $this->assertEquals("Je miaule pour me faire tout mignon", $this->chat->miaule());
        $this->assertTrue($this->chat->miaule());
    }

    public function testEtreVivant() : void 
    {
        $this->assertTrue($this->chat->etreVivant());
        $this->assertEquals("Je suis un Etre Vivant", $this->chat->etreVivant());
    }
}