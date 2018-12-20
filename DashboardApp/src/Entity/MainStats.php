<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MainStatsRepository")
 */
class MainStats
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statName;

    /**
     * @ORM\Column(type="float")
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatName(): ?string
    {
        return $this->statName;
    }

    public function setStatName(string $statName): self
    {
        $this->statName = $statName;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }
}
