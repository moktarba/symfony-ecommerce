<?php //src/DataFixtures/ORM/LoadProduitData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\Commande;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadCommandeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commande1 = new commande();
        $commande1->setValider('1');
        $commande1->setDate(new \DateTime());
        $commande1->setReference('1');
        $commande1->setUtilisateur($this->getReference('user1'));
        $manager->persist($commande1);

        $commande2 = new commande();
        $commande2->setValider('1');
        $commande2->setDate(new \DateTime());
        $commande2->setReference('2');
        $commande2->setUtilisateur($this->getReference('user2'));
        $manager->persist($commande2);

        $commande3 = new commande();
        $commande3->setValider('1');
        $commande3->setDate(new \DateTime());
        $commande3->setReference('3');
        $commande3->setUtilisateur($this->getReference('user3'));
        $manager->persist($commande3);

        $commande4 = new commande();
        $commande4->setValider('1');
        $commande4->setDate(new \DateTime());
        $commande4->setReference('4');
        $commande4->setUtilisateur($this->getReference('user4'));
        $manager->persist($commande4);

        $manager->flush();

        $this->addReference('commande1', $commande1);
        $this->addReference('commande2', $commande2);
        $this->addReference('commande3', $commande3);
        $this->addReference('commande4', $commande4);
    }

    public function getOrder()
    {
        return 6;
    }
}