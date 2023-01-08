<?php

namespace App\Entity;

use App\Abstract\AbstractAnnimauxMarins;

final class Crabes extends AbstractAnnimauxMarins{

    protected int $age;
    protected string $name;
    protected int $poids;

    public function pince() : bool
    {
        print_r("Je pince très très fort quand on veut m'attraper");
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