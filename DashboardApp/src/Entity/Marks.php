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
     * @ORM\OneToOne(targetEntity="App\Entity\Students", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
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
    private $mark_punctuality;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdStudent(): ?Students
    {
        return $this->id_student;
    }

    public function setIdStudent(Students $id_student): self
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

    public function getMarkPunctuality(): ?float
    {
        return $this->mark_punctuality;
    }

    public function setMarkPunctuality(float $mark_punctuality): self
    {
        $this->mark_punctuality = $mark_punctuality;

        return $this;
    }
}
