<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitCommande
 *
 * @ORM\Table(name="produitcommande")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\ProduitCommandeRepository")
 */
class ProduitCommande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="star", type="string", length=255)
     */
    private $star;


    /**
    * @ORM\ManyToMany(targetEntity="Commande")
    * @ORM\JoinColumn(nullable=false)
    */
    private $commande;    

    /**
    * @ORM\ManyToMany(targetEntity="Produit")
    * @ORM\JoinColumn(nullable=false)
    */
    private $produit;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set star
     *
     * @param string $star
     *
     * @return ProduitCommande
     */
    public function setStar($star)
    {
        $this->star = $star;

        return $this;
    }

    /**
     * Get star
     *
     * @return string
     */
    public function getStar()
    {
        return $this->star;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commande = new \Doctrine\Common\Collections\ArrayCollection();
        $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commande
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commande $commande
     *
     * @return ProduitCommande
     */
    public function addCommande(\Ecommerce\EcommerceBundle\Entity\Commande $commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commande $commande
     */
    public function removeCommande(\Ecommerce\EcommerceBundle\Entity\Commande $commande)
    {
        $this->commande->removeElement($commande);
    }

    /**
     * Get commande
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Add produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produit $produit
     *
     * @return ProduitCommande
     */
    public function addProduit(\Ecommerce\EcommerceBundle\Entity\Produit $produit)
    {
        $this->produit[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produit $produit
     */
    public function removeProduit(\Ecommerce\EcommerceBundle\Entity\Produit $produit)
    {
        $this->produit->removeElement($produit);
    }

    /**
     * Get produit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
