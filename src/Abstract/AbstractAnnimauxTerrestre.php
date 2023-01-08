<?php

namespace App\Abstract;

abstract class AbstractAnnimauxTerrestre extends AbstractAnnimaux
{

    public function Terrestre(): bool
    {
        print_r("Je suis un Annimal Terrestre" . PHP_EOL);
        return true;
    }
}
