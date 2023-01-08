<?php

namespace App\Entity;

use App\Abstract\AbstractAnnimauxTerrestre;

final class Chat extends AbstractAnnimauxTerrestre{

    public function miaule() : bool
    {
        print_r("Je miaule pour me faire tout mignon");
        return true;
    }
}