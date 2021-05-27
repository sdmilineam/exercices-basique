<?php

namespace App\Entity;

use App\Repository\SnowflakeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SnowflakeRepository::class)
 */
class Snowflake
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombrebonheur;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNombreBonheur(): ?string
    {
        return $this->nombrebonheur;
    }

    public function setNombreBonheur(string $nombrebonheur): self
    {
        $this->nombrebonheur = $nombrebonheur;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedAt(\DateTimeInterface $createdat): self
    {
        $this->created_at = $createdat;

        return $this;
    }
}
