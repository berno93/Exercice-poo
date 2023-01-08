<?php

namespace App\Entity;

use App\Abstract\AbstractAnnimauxTerrestre;

final class Lion extends AbstractAnnimauxTerrestre
{

    protected int $age;
    protected string $name;
    protected int $poids;

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
