<?php //src/DataFixtures/ORM/LoadProduitData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\Produit;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadProduitData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produit();
        $produit1->setNom('Mangue');
        $produit1->setDescription("La mangue du Sénégal est l'une des meilleures au monde" );
        $produit1->setPrix('2');
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media8'));
        $produit1->setCategory($this->getReference('category2'));
        // $produit1->setTva($this->getReference('tva2'));
        $manager->persist($produit1);

        $produit2 = new Produit();
        $produit2->setNom('Pomme');
        $produit2->setDescription("La Pomme de France est l'une des meilleures au monde" );
        $produit2->setPrix('1.5');
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media5'));
        $produit2->setCategory($this->getReference('category2'));
        // $produit2->setTva($this->getReference('tva1'));
        $manager->persist($produit2);

        $produit3 = new Produit();
        $produit3->setNom('Riz');
        $produit3->setDescription("La mangue du Sénégal est l'une des meilleures au monde" );
        $produit3->setPrix('2');
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media9'));
        $produit3->setCategory($this->getReference('category4'));
        // $produit3->setTva($this->getReference('tva2'));
        $manager->persist($produit3);

        $produit4 = new Produit();
        $produit4->setNom('Mil');
        $produit4->setDescription("Le mil du Sénégal est l'un des meilleurs au monde" );
        $produit4->setPrix('3.00');
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media10'));
        $produit4->setCategory($this->getReference('category4'));
        // $produit4->setTva($this->getReference('tv2'));
        $manager->persist($produit4);

        $produit5 = new Produit();
        $produit5->setNom('Tomates');
        $produit5->setDescription("La tomate du Sénégal est l'une des meilleures au monde" );
        $produit5->setPrix('4.00');
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media7'));
        $produit5->setCategory($this->getReference('category1'));
        // $produit5->setTva($this->getReference('tva2'));
        $manager->persist($produit5);  

        $produit6 = new Produit();
        $produit6->setNom('Concombres');
        $produit6->setDescription("Le concombre du Sénégal est l'une des meilleures au monde" );
        $produit6->setPrix('3.00');
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media6'));
        $produit6->setCategory($this->getReference('category1'));
        // $produit6->setTva($this->getReference('tva1'));
        $manager->persist($produit6);

        $produit7 = new Produit();
        $produit7->setNom('Chaussons aux Pommes');
        $produit7->setDescription("La mangue du Sénégal est l'une des meilleures au monde" );
        $produit7->setPrix('2');
        $produit7->setDisponible('1');
        $produit7->setImage($this->getReference('media12'));
        $produit7->setCategory($this->getReference('category3'));
        // $produit7->setTva($this->getReference('tva1'));
        $manager->persist($produit7);

        $produit8 = new Produit();
        $produit8->setNom('Croissants');
        $produit8->setDescription("La mangue du Sénégal est l'une des meilleures au monde" );
        $produit8->setPrix('2');
        $produit8->setDisponible('1');
        $produit8->setImage($this->getReference('media13'));
        $produit8->setCategory($this->getReference('category3'));
        // $produit8->setTva($this->getReference('tva1'));
        $manager->persist($produit8);

        $manager->flush();

        $this->addReference('produit1', $produit1);
        $this->addReference('produit2', $produit2);
        $this->addReference('produit3', $produit3);
        $this->addReference('produit4', $produit4);
        $this->addReference('produit5', $produit5);
        $this->addReference('produit6', $produit6);
        $this->addReference('produit7', $produit7);
 
    }

    public function getOrder()
    {
        return 4;
    }
}