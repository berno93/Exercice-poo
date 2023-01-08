<?php

namespace App\Entity;

use App\Abstract\AbstractAnnimauxTerrestre;

final class Lion extends AbstractAnnimauxTerrestre
{

    public function rugir(): bool
    {
        print_r("Je rugis pour faire connaître que je suis le roi de la jungle !");
        return true;
    }

    public function VivreDansLaJungle(): bool
    {
        print_r("Je suis un Lion et je peux vivre dans la jungle" . PHP_EOL);
        return true;
    }
}
