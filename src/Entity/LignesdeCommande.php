<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LignesdeCommandeRepository")
 */
class LignesdeCommande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commande", inversedBy="lignes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getcommande(): ?Commande
    {
        return $this->commande;
    }

    public function setcommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getarticle(): ?Article
    {
        return $this->article;
    }

    public function setarticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
