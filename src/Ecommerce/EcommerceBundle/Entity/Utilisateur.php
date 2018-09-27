<?php

namespace Ecommerce\EcommerceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
// ...
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->commandes = new ArrayCollection();
        $this->adresses = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $prenom;


    /**
    * @ORM\OneToMany(targetEntity = "Ecommerce\EcommerceBundle\Entity\Commande", cascade = {"remove"}, mappedBy = "utilisateur")
    * @ORM\JoinColumn(nullable = true)
    */
    private $commandes;  

    /**
    * @ORM\OneToMany(targetEntity = "Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse", cascade = {"remove"}, mappedBy = "utilisateur")
    * @ORM\JoinColumn(nullable = true)
    */
    private $adresses;  

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->products;
    }

    /**
     * @return Collection|UtilisateursAdresses[]
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }


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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

 

    // public function addCommande(Commandes $commande): self
    // {
    //     if (!$this->commandes->contains($commande)) {
    //         $this->commandes[] = $commande;
    //         $commande->setUtilisateur($this);
    //     }

    //     return $this;
    // }

    // public function removeCommande(Commandes $commande): self
    // {
    //     if ($this->commandes->contains($commande)) {
    //         $this->commandes->removeElement($commande);
    //         // set the owning side to null (unless already changed)
    //         if ($commande->getUtilisateur() === $this) {
    //             $commande->setUtilisateur(null);
    //         }
    //     }

    //     return $this;
    // }

    // public function addAdress(UtilisateursAdresses $adress): self
    // {
    //     if (!$this->adresses->contains($adress)) {
    //         $this->adresses[] = $adress;
    //         $adress->setUtilisateur($this);
    //     }

    //     return $this;
    // }

    // public function removeAdress(UtilisateursAdresses $adress): self
    // {
    //     if ($this->adresses->contains($adress)) {
    //         $this->adresses->removeElement($adress);
    //         // set the owning side to null (unless already changed)
    //         if ($adress->getUtilisateur() === $this) {
    //             $adress->setUtilisateur(null);
    //         }
    //     }

    //     return $this;
    // }
}
