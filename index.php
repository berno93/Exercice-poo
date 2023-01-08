<?php

declare(strict_types=1);

use App\Entity\Baleine;
use App\Entity\Chat;
use App\Entity\Crabes;
use App\Entity\Elephant;
use App\Entity\Lion;

$baleine = new Baleine();
$baleine->chant();

$chat = new Chat();
$chat-> miaule();

$crabes = new Crabes();
$crabes-> pince();

$elephant = new Elephant();
$elephant-> mange();

$lion = new Lion();
$lion-> rugir();


