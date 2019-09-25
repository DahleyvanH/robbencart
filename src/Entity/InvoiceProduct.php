<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceProductRepository")
 */
class InvoiceProduct
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
    private $aantal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\producten")
     */
    private $producten;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\invoice")
     * @ORM\JoinColumn(nullable=false)
     */
    private $invoice_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAantal(): ?int
    {
        return $this->aantal;
    }

    public function setAantal(int $aantal): self
    {
        $this->aantal = $aantal;

        return $this;
    }

    public function getProducten(): ?producten
    {
        return $this->producten;
    }

    public function setProducten(?producten $producten): self
    {
        $this->producten = $producten;

        return $this;
    }

    public function getInvoiceId(): ?invoice
    {
        return $this->invoice_id;
    }

    public function setInvoiceId(?invoice $invoice_id): self
    {
        $this->invoice_id = $invoice_id;

        return $this;
    }
}
