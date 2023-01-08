<?php

namespace App\Entity;

use App\Abstract\AbstractAnnimauxTerrestre;
use App\Interface\Jungle;

final class Elephant extends AbstractAnnimauxTerrestre implements Jungle{

    protected int $age;
    protected string $name;
    protected int $poids;

    public function mange() : bool
    {
        print_r("J'utilise ma trompe pour manger");
        return true;
    }

    public function VivreDansLaJungle() : bool{
        print_r("Je suis un Elephant et je peux vivre dans la jungle" .PHP_EOL);
        return true;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPoids(): int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }
}