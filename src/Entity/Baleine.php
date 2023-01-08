<?php

namespace App\Entity;

use App\Abstract\AbstractAnnimauxMarins;

final class Baleine extends AbstractAnnimauxMarins{

    public function chant() : bool
    {
        print_r("Je chante pour communiquer avec les autres baleines");
        return true;
    }
}