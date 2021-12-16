<?php

namespace App\Entity;

use App\Repository\CompanieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompanieRepository::class)
 * @ORM\Table(name="companies")
 */
class Companie
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
     * @ORM\Column(type="integer")
     */
    private $emloyees;

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

    public function getEmloyees(): ?int
    {
        return $this->emloyees;
    }

    public function setEmloyees(int $emloyees): self
    {
        $this->emloyees = $emloyees;

        return $this;
    }
}
