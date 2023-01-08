<?php

namespace App\Entity;

use App\Abstract\AbstractAnnimauxTerrestre;
use App\Interface\Jungle;

final class Elephant extends AbstractAnnimauxTerrestre implements Jungle{

    public function mange() : bool
    {
        print_r("J'utilise ma trompe pour manger");
        return true;
    }

    public function VivreDansLaJungle() : bool{
        print_r("Je suis un Elephant et je peux vivre dans la jungle" .PHP_EOL);
        return true;
    }
}