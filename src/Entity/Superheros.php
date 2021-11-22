<?php

namespace App\Entity;

use App\Repository\SuperherosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SuperherosRepository::class)
 */
class Superheros
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $super_power;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSuperPower(): ?string
    {
        return $this->super_power;
    }

    public function setSuperPower(string $super_power): self
    {
        $this->super_power = $super_power;

        return $this;
    }
}
