<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="blob")
     */
    private $valider;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $reference;

    /**
    * @ORM\ManyToOne(targetEntity = "Ecommerce\EcommerceBundle\Entity\Utilisateur", inversedBy="commandes" )
    * @ORM\JoinColumn(nullable = false)
    */
    private $utilisateur;

    /**
     * @ORM\Column(name = "commande" , type="array")
     */
    private $commande;       
    
    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getValider()
    {
        return $this->valider;
    }

    public function setValider($valider): self
    {
        $this->valider = $valider;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(int $reference): self
    {
        $this->reference = $reference;

        return $this;
    }


    /**
    * Get Commande
    *
    * return array
    */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
    * Set Commande
    *
    * @param array $commande
    * return $commande
    */
    public function setCommande(array $commande)
    {
        $this->commande = $commande;

        return $this;
    }
}

