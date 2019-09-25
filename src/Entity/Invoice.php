<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice
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
    private $nummer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $betaald;

    /**
     * @ORM\Column(type="date")
     */
    private $betaald_datum;

    /**
     * @ORM\Column(type="date")
     */
    private $verval_datum;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user", inversedBy="invoices")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNummer(): ?int
    {
        return $this->nummer;
    }

    public function setNummer(int $nummer): self
    {
        $this->nummer = $nummer;

        return $this;
    }

    public function getBetaald(): ?string
    {
        return $this->betaald;
    }

    public function setBetaald(string $betaald): self
    {
        $this->betaald = $betaald;

        return $this;
    }

    public function getBetaaldDatum(): ?\DateTimeInterface
    {
        return $this->betaald_datum;
    }

    public function setBetaaldDatum(\DateTimeInterface $betaald_datum): self
    {
        $this->betaald_datum = $betaald_datum;

        return $this;
    }

    public function getVervalDatum(): ?\DateTimeInterface
    {
        return $this->verval_datum;
    }

    public function setVervalDatum(\DateTimeInterface $verval_datum): self
    {
        $this->verval_datum = $verval_datum;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }
}
