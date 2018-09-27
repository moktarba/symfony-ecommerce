<?php //src/DataFixtures/ORM/LoadProduitData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\ProduitCommande;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadProduitCommandeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produitCommande1 = new ProduitCommande();
        $produitCommande1->setStar('3');
        $produitCommande1->addProduit($this->getReference('produit1'));
        $produitCommande1->addCommande($this->getReference('commande1'));
       
        $manager->persist($produitCommande1);

        $produitCommande2 = new ProduitCommande();
        $produitCommande2->setStar('4');
        $produitCommande2->addProduit($this->getReference('produit2'));
        $produitCommande2->addCommande($this->getReference('commande1'));
       
        $manager->persist($produitCommande2);

        $produitCommande3 = new ProduitCommande();
        $produitCommande3->setStar('3');
        $produitCommande3->addProduit($this->getReference('produit3'));
        $produitCommande3->addCommande($this->getReference('commande2'));
       
        $manager->persist($produitCommande3);

        $produitCommande4 = new ProduitCommande();
        $produitCommande4->setStar('3');
        $produitCommande4->addProduit($this->getReference('produit4'));
        $produitCommande4->addCommande($this->getReference('commande2'));
       
        $manager->persist($produitCommande4);

        $produitCommande5 = new ProduitCommande();
        $produitCommande5->setStar('3');
        $produitCommande5->addProduit($this->getReference('produit3'));
        $produitCommande5->addCommande($this->getReference('commande1'));
       
        $manager->persist($produitCommande5);

        
        $manager->flush();

        $this->addReference('produitCommande1', $produitCommande1);
        $this->addReference('produitCommande2', $produitCommande2);
        $this->addReference('produitCommande3', $produitCommande3);
        $this->addReference('produitCommande4', $produitCommande4);
        $this->addReference('produitCommande5', $produitCommande5);
 
    }

    public function getOrder()
    {
        return 8 ;
    }
}