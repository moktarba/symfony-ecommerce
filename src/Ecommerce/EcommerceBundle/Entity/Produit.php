<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="blob")
     */
    private $disponible;

    /**
    * @ORM\OneToOne(targetEntity = "Ecommerce\EcommerceBundle\Entity\Media", cascade = {"persist", "remove"})
    * @ORM\JoinColumn(nullable = false)
    */
    private $image;

    /**
    * @ORM\ManyToOne(targetEntity = "Ecommerce\EcommerceBundle\Entity\Category", cascade = {"persist", "remove"})
    * @ORM\JoinColumn(nullable = false)
    */
    private $category;       

    /**
    * @ORM\ManyToOne(targetEntity = "Ecommerce\EcommerceBundle\Entity\Tva", cascade = {"persist", "remove"})
    * @ORM\JoinColumn(nullable = true)
    */
    private $tva;

    public function getId()
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDisponible()
    {
        return $this->disponible;
    }

    public function setDisponible($disponible): self
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function getImage(): ?Media
    {
        return $this->image;
    }

    public function setImage(Media $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    public function getTva(): ?Tva
    {
        return $this->tva;
    }

    public function setTva(Tva $tva)
    {
        $this->tva = $tva;

        return $this;
    }
}

