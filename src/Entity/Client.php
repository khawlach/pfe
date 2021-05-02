<?php

namespace App\Entity;
use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomClient;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenomClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailClient;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $passeClient;

    /**
     * @ORM\Column(type="string", length=12 ,nullable=true)
     */
    private $adresseClient;

    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    private $telephoneClient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClient(): ?string
    {
        return $this->nomClient;
    }

    public function setNomClient(string $nomClient): self
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenomClient;
    }

    public function setPrenomClient(string $prenomClient): self
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    public function getEmailClient(): ?string
    {
        return $this->emailClient;
    }

    public function setEmailClient(string $emailClient): self
    {
        $this->emailClient = $emailClient;

        return $this;
    }

    public function getPasseClient(): ?string
    {
        return $this->passeClient;
    }

    public function setPasseClient(string $passeClient): self
    {
        $this->passeClient = $passeClient;

        return $this;
    }

    public function getAdresseClient(): ?string
    {
        return $this->adresseClient;
    }

    public function setAdresseClient(string $adresseClient): self
    {
        $this->adresseClient = $adresseClient;

        return $this;
    }

    public function getTelephoneClient(): ?string
    {
        return $this->telephoneClient;
    }

    public function setTelephoneClient(?string $telephoneClient): self
    {
        $this->telephoneClient = $telephoneClient;

        return $this;
    }
}
