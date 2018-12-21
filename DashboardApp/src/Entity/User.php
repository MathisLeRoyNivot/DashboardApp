<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="boolean")
     */
    private $user_type;

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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getUserType(): ?bool
    {
        return $this->user_type;
    }

    public function setUserType(bool $user_type): self
    {
        $this->user_type = $user_type;

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

    public function getRoles() {
        return [
            'ROLE_USER'
        ];
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
