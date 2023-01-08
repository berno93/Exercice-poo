<?php

namespace App\Abstract;

abstract class AbstractAnnimaux{
    
    public function etreVivant() : bool
    {
        print_r("Je suis un Etre Vivant" . PHP_EOL);
        return true;
    }
}