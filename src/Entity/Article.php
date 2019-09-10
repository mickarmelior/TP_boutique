<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomArticle;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $imageArticle;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prixArticle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionArticle;

    /**
     * @ORM\Column(type="integer")
     */
    private $idCategorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomArticle(): ?string
    {
        return $this->nomArticle;
    }

    public function setNomArticle(?string $nomArticle): self
    {
        $this->nomArticle = $nomArticle;

        return $this;
    }

    public function getImageArticle(): ?string
    {
        return $this->imageArticle;
    }

    public function setImageArticle(?string $imageArticle): self
    {
        $this->imageArticle = $imageArticle;

        return $this;
    }

    public function getPrixArticle(): ?float
    {
        return $this->prixArticle;
    }

    public function setPrixArticle(?float $prixArticle): self
    {
        $this->prixArticle = $prixArticle;

        return $this;
    }

    public function getDescriptionArticle(): ?string
    {
        return $this->descriptionArticle;
    }

    public function setDescriptionArticle(?string $descriptionArticle): self
    {
        $this->descriptionArticle = $descriptionArticle;

        return $this;
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(int $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
