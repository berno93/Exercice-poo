<?php

namespace App\Entity;

use App\Abstract\AbstractAnnimauxMarins;

final class Crabes extends AbstractAnnimauxMarins{

    public function pince() : bool
    {
        print_r("Je pince très très fort quand on veut m'attraper");
        return true;
    }
}