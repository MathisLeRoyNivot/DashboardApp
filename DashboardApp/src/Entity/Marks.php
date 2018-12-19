<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MarksRepository")
 */
class Marks
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_student;

    /**
     * @ORM\Column(type="float")
     */
    private $mark_dev;

    /**
     * @ORM\Column(type="float")
     */
    private $mark_network;

    /**
     * @ORM\Column(type="float")
     */
    private $mark_bdd;

    /**
     * @ORM\Column(type="float")
     */
    private $average;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdStudent(): ?int
    {
        return $this->id_student;
    }

    public function setIdStudent(int $id_student): self
    {
        $this->id_student = $id_student;

        return $this;
    }

    public function getMarkDev(): ?float
    {
        return $this->mark_dev;
    }

    public function setMarkDev(float $mark_dev): self
    {
        $this->mark_dev = $mark_dev;

        return $this;
    }

    public function getMarkNetwork(): ?float
    {
        return $this->mark_network;
    }

    public function setMarkNetwork(float $mark_network): self
    {
        $this->mark_network = $mark_network;

        return $this;
    }

    public function getMarkBdd(): ?float
    {
        return $this->mark_bdd;
    }

    public function setMarkBdd(float $mark_bdd): self
    {
        $this->mark_bdd = $mark_bdd;

        return $this;
    }

    public function getAverage(): ?float
    {
        return $this->average;
    }

    public function setAverage(float $average): self
    {
        $this->average = $average;

        return $this;
    }
}
