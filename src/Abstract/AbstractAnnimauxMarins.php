<?php

namespace App\Abstract;

use App\Abstract\AbstractAnnimaux;

abstract class AbstractAnnimauxMarins extends AbstractAnnimaux{
    
    public function Marins() : bool
    {
        print_r("Je suis un Annimal Marins" . PHP_EOL);
        return true;
    }
}